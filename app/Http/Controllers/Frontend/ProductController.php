<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Image;


class ProductController extends Controller
{
    public function product(){
        $products  = Product::paginate(6);
        return view('frontend_new.product', compact('products'));
    }

    public function product_cart()
    {
        $cartItems = Cart::with('product')->where('userid', auth()->id())->get();

        $grandTotal = $cartItems->sum(function($item) {
            $price = $item->product->price - ($item->product->price * $item->product->discount * 0.01);
            return $price * $item->quantity;
        });

        return view('frontend_new.cart', compact('cartItems', 'grandTotal'));
    }


    public function product_detail($name){
        $product = Product::where('slug', '=', $name)->first();
        if (Auth::check()) {
            $carts = Cart::where('product_id', $product->id)->first();
            if ($carts){
                $added = true;
            }else{
                $added = false;
            }
            return view('frontend_new.product_detail', compact('product','added'));
        }else{
            return view('frontend_new.product_detail', compact('product'));
        }
    }
    public function product_view(){
        return view('backend.product_view');
    }

    public function product_add(Request $request)
    {
        $directory = 'uploads/product/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        // Handle image 1
        $image = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $filename);
        $path = $directory . $filename;

        // Handle image 2
        $image2 = $request->file('image2');
        $filename2 = time() . '_' . uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move($directory, $filename2);
        $path2 = $directory . $filename2;

        // Handle image 3
        $image3 = $request->file('image3');
        $filename3 = time() . '_' . uniqid() . '.' . $image3->getClientOriginalExtension();
        $image3->move($directory, $filename3);
        $path3 = $directory . $filename3;

        // Generate slug
        $url_slug = strtolower($request->title);
        $label_slug = preg_replace('/\s+/', '-', $url_slug);

        // Create a new product
        $new_product = new Product;
        $new_product->title = $request->title;
        $new_product->slug = $label_slug;
        $new_product->price = $request->price;
        $new_product->content = $request->body_content;
        $new_product->discount = $request->discount;
        $new_product->image = $path;
        $new_product->image2 = $path2;
        $new_product->image3 = $path3;
        $new_product->save();

        $notification = [
            'message' => 'Product successfully added',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function product_all(){
        $products = Product::all();
        return view('backend.product_all', compact('products'));
    }

    public function product_delete($id){
       $product =  Product::findOrFail($id);
       $filePath = $product->image;
       File::delete(public_path($filePath));
       $product->delete();
        $notification = array(
            'message' => 'product Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function product_edit($id){
        $product = Product::findOrFail($id);
        return view('backend.product_edit', compact('product'));
    }

    public function product_update(Request $request, $id)
    {
        $update_product = Product::findOrFail($id);

        // Handle primary image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $directory = 'uploads/product/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        } else {
            $path = $update_product->image;
        }

        // Handle secondary image upload
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $filename2 = time() . '_' . uniqid() . '.' . $image2->getClientOriginalExtension();
            $directory = 'uploads/product/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image2->move($directory, $filename2);
            $path2 = $directory . $filename2;
        } else {
            $path2 = $update_product->image2;
        }

        // Handle tertiary image upload
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $filename3 = time() . '_' . uniqid() . '.' . $image3->getClientOriginalExtension();
            $directory = 'uploads/product/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image3->move($directory, $filename3);
            $path3 = $directory . $filename3;
        } else {
            $path3 = $update_product->image3;
        }

        // Generate slug
        $url_slug = strtolower($request->title);
        $label_slug = preg_replace('/\s+/', '-', $url_slug);

        // Update product fields
        $update_product->title = $request->title;
        $update_product->slug = $label_slug;
        $update_product->price = $request->price;
        $update_product->content = $request->body_content;
        $update_product->discount = $request->discount;
        $update_product->image2 = $path2;
        $update_product->image3 = $path3;
        $update_product->image = $path;
        $update_product->save();

        // Return notification
        $notification = [
            'message' => 'Product successfully updated',
            'alert-type' => 'success',
        ];

        return redirect()->route('product.all')->with($notification);
    }


    public function add_cart(Request $request)
    {
      $cart = new Cart;
      $cart->quantity = $request->quantity;
      $cart->userid = Auth::user()->id;
      $cart->product_id = $request->get('product_id');
      $cart->save();
        $notification = array(
            'message' => 'product Successfully Added to Cart',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function cart_delete(Request $request)
    {
        $cart = Cart::find($request->id);
        if ($cart) {
            $cart->delete();
            $notification = array(
                'message' => 'Item removed from cart',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        $notification = array(
            'message' => 'Item not found',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function cart_update(Request $request)
    {
        $item = Cart::find($request->id);
        $item->quantity = $request->quantity;
        $item->save();

        // Calculate the new price
        $newPrice = $item->product->price - ($item->product->price * $item->product->discount * 0.01);
        $newTotal = $newPrice * $item->quantity;

        // Return the updated price and total
        return response()->json([
            'success' => true,
            'newPrice' => $newTotal,
        ]);
    }

    public function cart_checkout(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        $cartItems = Cart::with('product')->where('userid', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('my.order')->with([
                'message' => 'Your cart is empty!',
                'alert-type' => 'error',
            ]);
        }
        $grandTotal = 0;

        foreach ($cartItems as $item) {
            $price = $item->product->price ?? 0;
            $discount = $item->product->discount ?? 0;
            $discountedPrice = $price - ($price * $discount * 0.01);

            $discountedPrice = max(0, $discountedPrice);

            $item->discounted_price = $discountedPrice;

            $grandTotal += $discountedPrice * $item->quantity;
        }

//        $grandTotal = $cartItems->sum(function ($item) {
//            $price = $item->product->price ?? 0;
//            $discount = $item->product->discount ?? 0;
//            $finalPrice = $price - ($price * $discount * 0.01);
//            return $finalPrice * $item->quantity;
//        });

        $referenceId = "Sapphire" . rand(100000, 999999); // Adjusted for better randomness.

        $formData = [
            'email' => Auth::user()->email,
            'amount' => $grandTotal * 100, // Paystack requires amount in kobo.
            'currency' => "NGN",
            'metadata' => ['referenceId' => $referenceId],
            'callback_url' => route('pay.callback.paystack'),
        ];

        $pay = json_decode($this->initializePaymentPaystack($formData));
        if ($pay && $pay->status) {
            $payment = new Order;
            $payment->order_reference = $referenceId;
            $payment->total_amount = $grandTotal;
            $payment->address = $request->address;
            $payment->email = Auth::user()->email;
            $payment->order_status = "pending";
            $payment->payment_status = "pending";
            $payment->order_info = json_encode($cartItems->toArray());
            $payment->save();
            Cart::where('userid', auth()->id())->delete();
            return redirect($pay->data->authorization_url);
        }
        return back()->with([
            'message' => $pay ? 'Payment initialization failed. Try again later.' : 'No network connection.',
            'alert-type' => 'error',
        ]);
    }
    public function repay_bill(Request $request, $id)
    {

        $order_info = Order::findOrFail($id);


        $referenceId = $order_info->order_reference;

        $formData = [
            'email' => Auth::user()->email,
            'amount' => $order_info->total_amount * 100, // Paystack requires amount in kobo.
            'currency' => "NGN",
            'metadata' => ['referenceId' => $referenceId],
            'callback_url' => route('pay.callback.paystack'),
        ];
        $pay = json_decode($this->initializePaymentPaystack($formData));
        if ($pay && $pay->status) {
            return redirect($pay->data->authorization_url);
        }
        return back()->with([
            'message' => $pay ? 'Payment initialization failed. Try again later.' : 'No network connection.',
            'alert-type' => 'error',
        ]);
    }

    public function initializePaymentPaystack($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";
        $field_string = http_build_query($formData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env("PAYSTACK_SECRET_KEY"),
            "Cache-control: no-cache"
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function verifyPaymentPaystack($reference)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . env("PAYSTACK_SECRET_KEY"),
                "Cache-control: no-cache"
            )
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    public function paymentCallbackPaystack()
    {
        $response = json_decode($this->verifyPaymentPaystack(request('reference')));
        $data = $response->data;
        $referenceId = $data->metadata->referenceId;
        if ($response) {
            Order::where('order_reference', $referenceId)->update(['payment_status' => "paid"]);
            $notification = array(
                'message' => 'Payment successful',
                'alert-type' => 'success'
            );
            return redirect()->route('my.order')->with($notification);
        } else {
            $notification = array(
                'message' => 'Payment not successful',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

    }


}
