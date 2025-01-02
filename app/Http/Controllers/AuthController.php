<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Comment;
class AuthController extends Controller
{
    public function logout(){

        Session::flush();

         Auth::logout();

        return Redirect()->route('home');
    }

    public function check_login(){
        if (Auth::id()) {

            if (Auth::user()->user_type=='0') {
                return redirect()->route('my.order');
            }else{

             return redirect()->route('dashboard');
            }
        }else{
            return redirect()->back();
        }
    }

    public function dashboard(){
        $data = [
            'users' => User::count(),
            'products' => Product::count(),
            'all_orders' => Order::count(),
            'pending_orders' => Order::where('order_status', '=', 'pending')->count(),
            'completed_orders' => Order::where('order_status', '=', 'delivered')->count(),
            'messages' => Contact::count(),
        ];
        return view('backend.dashboard', $data);
    }
}
