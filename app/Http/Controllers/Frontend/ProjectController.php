<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Image;

class ProjectController extends Controller
{
    public function project(){
        $projects  = Project::paginate(6);
        return view('frontend.project', compact('projects'));
    }

    public function project_detail($id){
        $project = Project::findOrFail($id);
        return view('frontend.project_detail', compact('project'));
    }
    public function project_view(){
        return view('backend.project_view');
    }
    public function project_add(Request $request){
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'area' => 'required',
            'year' => 'required'
        ]);

        $image = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
        $resizedImage = Image::make($image)->resize(800, 600);
        $image->storeAs( '/project/'.$filename , $resizedImage, 'public');
        $path = "storage/project/".$filename;
        $new_project = new Project;
        $new_project->title = $request->title;
        $new_project->location = $request->location;
        $new_project->area = $request->area;
        $new_project->year = $request->year;
        $new_project->content = $request->content;
        $new_project->image = $path;
        $new_project->save();
        $notification = array(
            'message' => 'Project Successfully added',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function project_all(){
        $projects = Project::all();
        return view('backend.project_all', compact('projects'));
    }

    public function project_delete($id){
       $project =  Project::findOrFail($id);
       $filePath = $project->image;
       File::delete(public_path($filePath));
       $project->delete();
        $notification = array(
            'message' => 'Project Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }

    public function project_edit($id){
        $project = Project::findOrFail($id);
        return view('backend.project_edit', compact('project'));
    }

    public function project_update(Request $request, $id){
        $project_update = Project::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'area' => 'required',
            'year' => 'required'
        ]);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalName();
            $resizedImage = Image::make($image)->resize(200, 200);
            $image->storeAs( '/project/'.$filename , $resizedImage, 'public');
            $path = "storage/project/".$filename;
        }else{
            $path = $project_update->image;
        }
        $project_update->title = $request->title;
        $project_update->location = $request->location;
        $project_update->area = $request->area;
        $project_update->year = $request->year;
        $project_update->content = $request->content;
        $project_update->image = $path;
        $project_update->save();
        $notification = array(
            'message' => 'Project Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('project.all')->with($notification);
    }
}
