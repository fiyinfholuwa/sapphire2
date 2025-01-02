<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Web\GeneralController;
use App\Mail\OrderConfirmation;
use App\Models\Order;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function my_order()
    {
      $orders = Order::where('email', Auth::user()->email)->get();
      return view('frontend_new.my_order', compact('orders'));
    }
    public function all_orders()
    {
      $orders = Order::latest()->get();
      return view('backend.orders', compact('orders'));
    }

    public function view_invoice($id){
        $order = Order::findOrFail($id);
        $show_go_back = true;
        return view('frontend_new.invoice', compact( 'order','show_go_back'));
    }
    public function order_detail($id){
        $order = Order::findOrFail($id);
        $show_go_back = true;
        return view('backend.order_detail', compact( 'order','show_go_back'));
    }

    public function download_invoice($id){
        $order = Order::findOrFail($id);
        $data = ['order' => $order, 'show_go_back' => false];

        $pdf = Pdf::loadView('frontend_new.invoice', $data, [
            'isHtml5ParserEnabled' => true,
            'isPhpEnabled' => true,
        ]);

        return $pdf->download('invoice' . $order->order_reference . '.pdf');
    }

    public function admin_order_status(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->order_status = $request->order_status;
        $order->save();
        $notification = array(
            'message' => 'Order Status Successfully changed to '.ucfirst($request->order_status),
            'alert-type' => 'success'
        );
        $mailData = [
            'type' => 'Order Confirmation Status',
            'name' => $order->email,
            'status' => $request->order_status,
            'order_reference' => $order->order_reference,
            'email_type' => 'order'
        ];
        try {
            Mail::to($order->email)->send(new OrderConfirmation($mailData));
        }catch (Throwable $e){

        }

        return redirect()->back()->with($notification);
    }
    public function admin_payment_resolution(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->payment_status = $request->payment_status;
        $order->save();

        $mailData = [
            'type' => 'Payment Resolution Status',
            'name' => $order->email,
            'payment_status' => $request->payment_status,
            'order_reference' => $order->order_reference,
            'email_type' => 'payment'
        ];
        try {
            Mail::to($order->email)->send(new OrderConfirmation($mailData));
        }catch (Throwable $e){

        }

        $notification = array(
            'message' => 'Payment Status Successfully changed to '.ucfirst($request->payment_status),
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_change_password(){
        return view('backend.change_password');
    }

    public function user_password_change(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            $notification = array(
                'message' => 'Password Changed Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Incorrect Password, Please try again.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public static  function convert_to_word($num = false):string{
        $num = str_replace(array(',', ''), '' , trim($num));
        if(! $num) {
            return false;
        }
        $num = (int) $num;
        $words = array();
        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );
        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        for ($i = 0; $i < count($num_levels); $i++) {
            $levels--;
            $hundreds = (int) ($num_levels[$i] / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ( $hundreds == 1 ? '' : '' ) . ' ' : '');
            $tens = (int) ($num_levels[$i] % 100);
            $singles = '';
            if ( $tens < 20 ) {
                $tens = ($tens ? ' and ' . $list1[$tens] . ' ' : '' );
            } elseif ($tens >= 20) {
                $tens = (int)($tens / 10);
                $tens = ' and ' . $list2[$tens] . ' ';
                $singles = (int) ($num_levels[$i] % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        $words = implode(' ',  $words);
        $words = preg_replace('/^\s\b(and)/', '', $words );
        $words = trim($words);
        $words = ucfirst($words);
        $words = $words . ".";
        return $words;
    }



    public function admin_user_delete($id){
        if ($id === Auth::user()->id){
            $notification = array(
                'message' => 'You cannot delete this user because its currently looged in session',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
         User::findOrFail($id)->delete();
        $notification = array(
            'message' => 'User Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_member_password_change(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->new_password_confirmation === $request->new_password) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            $notification = array(
                'message' => 'Password Changed Successfully for this user',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Password Mismatch',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function admin_user_all(){
        $users = User::all();
        return view('backend.user_all', compact('users'));
    }

    public function user_profile_view()
    {
        return view('frontend_new.profile');
    }

    public function user_profile_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:10',
            'address' => 'required|string|max:255',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        $notification = array(
            'message' => 'User Profile successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function user_password_update(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = auth()->user();
        $notification = array(
            'message' => 'The current password is incorrect.',
            'alert-type' => 'error'
        );
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with($notification);
        }
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        $notification = array(
            'message' => 'Password successfully changed',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
