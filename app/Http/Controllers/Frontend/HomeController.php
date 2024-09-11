<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

class HomeController extends Controller

{
    public function index(){
        $projects  = Project::offset(0)->limit(3)->get();
        $posts  = Post::offset(0)->limit(3)->get();
        $testimonials = Testimonial::all();
        return view('frontend.home', compact('testimonials', 'projects', 'posts'));
    }
    public function testimonial_view(){
        return view('backend.testimonial_view');
    }
    public function testimonial_add(Request $request){
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);

        $image = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
        $resizedImage = Image::make($image)->resize(200, 200);
        $image->storeAs( '/testimonial/'.$filename , $resizedImage, 'public');
        $path = "storage/testimonial/".$filename;
        $bank_statement_save = $path;
        $new_test = new Testimonial;
        $new_test->name = $request->name;
        $new_test->content = $request->content;
        $new_test->title = $request->title;
        $new_test->image = $path;
        $new_test->save();
        $notification = array(
            'message' => 'Testimonial Successfully added',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function testimonial_all(){
        $testimonials = Testimonial::all();
        return view('backend.testimonial_all', compact('testimonials'));
    }

    public function testimonial_delete($id){
       $testimonial =  Testimonial::findOrFail($id);
       $filePath = $testimonial->image;
       File::delete(public_path($filePath));
       $testimonial->delete();
        $notification = array(
            'message' => 'Testimonial Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }

    public function testimonial_edit($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial_edit', compact('testimonial'));
    }

    public function testimonial_update(Request $request, $id){
        $testimonial_update = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
            $resizedImage = Image::make($image)->resize(200, 200);
            $image->storeAs( '/testimonial/'.$filename , $resizedImage, 'public');
            $path = "storage/testimonial/".$filename;
        }else{
            $path = $testimonial_update->image;
        }
        $testimonial_update->name = $request->name;
        $testimonial_update->content = $request->content;
        $testimonial_update->title = $request->title;
        $testimonial_update->image = $path;
        $testimonial_update->save();
        $notification = array(
            'message' => 'Testimonial Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('testimonial.all')->with($notification);
    }
}
