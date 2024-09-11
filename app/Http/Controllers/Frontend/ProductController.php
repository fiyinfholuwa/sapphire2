<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Image;

class ProductController extends Controller
{
    public function product(){
        $products  = Product::paginate(6);
        return view('frontend.product', compact('products'));
    }

    public function product_detail($name){
        $product = Product::where('slug', '=', $name)->first();
        return view('frontend.product_detail', compact('product'));
    }
    public function product_view(){
        return view('backend.product_view');
    }
    public function product_add(Request $request){
        

        $image = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
        $resizedImage = Image::make($image)->resize(800, 600);
        $image->storeAs( '/product/'.$filename , $resizedImage, 'public');
        $path = "storage/product/".$filename;

        $image2 = $request->file('image2');
        $filename2 = time() . '_' . uniqid() . '.' . $image2->getClientOriginalName();
        $resizedImage2 = Image::make($image2)->resize(800, 600);
        $image2->storeAs( '/product/'.$filename2 , $resizedImage2, 'public');
        $path2 = "storage/product/".$filename2;

        $image3 = $request->file('image3');
        $filename3 = time() . '_' . uniqid() . '.' . $image3->getClientOriginalName();
        $resizedImage3 = Image::make($image3)->resize(800, 600);
        $image3->storeAs( '/product/'.$filename3 , $resizedImage3, 'public');
        $path3 = "storage/product/".$filename3;


        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);


        $new_product = new Product;
        $new_product->title = $request->title;
        $new_product->slug = $label_slug;
        $new_product->price = $request->price;
        $new_product->content = $request->content;
        $new_product->discount= $request->discount;
        $new_product->image2 = $path2;
        $new_product->image3 = $path3;
        $new_product->image = $path;
        $new_product->save();
        $notification = array(
            'message' => 'product Successfully added',
            'alert-type' => 'success'
        );

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

    public function product_update(Request $request, $id){
        $update_product = Product::findOrFail($id);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
            $resizedImage = Image::make($image)->resize(200, 200);
            $image->storeAs( '/product/'.$filename , $resizedImage, 'public');
            $path = "storage/product/".$filename;
        }else{
            $path = $update_product->image;
        }

        if($request->hasfile('image2')){
            $image2 = $request->file('image2');
            $filename2 = time() . '_' . uniqid() . '.' . $image2->getClientOriginalName();
            $resizedImage2 = Image::make($imag2e)->resize(200, 200);
            $image2->storeAs( '/product/'.$filename2 , $resizedImage2, 'public');
            $path2 = "storage/product/".$filename2;
        }else{
            $path2 = $update_product->image2;
        }

        if($request->hasfile('image3')){
            $image3 = $request->file('image3');
            $filename3 = time() . '_' . uniqid() . '.' . $image3->getClientOriginalName();
            $resizedImage3 = Image::make($image3)->resize(200, 200);
            $image3->storeAs( '/product/'.$filename3 , $resizedImage3, 'public');
            $path3 = "storage/product/".$filename3;
        }else{
            $path3 = $update_product->image3;
        }
        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);

        $update_product->title = $request->title;
        $update_product->slug = $label_slug;
        $update_product->price = $request->price;
        $update_product->content = $request->content;
        $update_product->discount= $request->discount;
        $update_product->image2 = $path2;
        $update_product->image3 = $path3;
        $update_product->image = $path;
        $update_product->save();
        $notification = array(
            'message' => 'product Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($notification);
    }
}
