<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            if($this->user->email=="admin@admin.com"){
                 return $next($request);
            }
            else{
                return redirect('signup');
            }
        });
    }
    public function editApplication($id){
        $application=\App\Application::find($id);
        return view('admin/edit-applications',compact('application'));
    }
    public function viewApplication($id){
        $application=\App\Application::find($id);
        return view('admin/view-applications',compact('application'));
    }
    public function storeApplication(Request $request){
    	$application=new \App\Application;
    	$application->title=$request->get('title');
    	$application->description=$request->get('description');
    	$application->year=$request->get('year');
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='applicationCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='applicationCovers/' . $newFilename;
            $application->cover=$coverPath;
        }
        $file=Input::file("file");
        if(!empty($file)){
            $application->fileName=$file->getClientOriginalName();
            $application->fileSize=$file->getSize();
            $application->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='applicationFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='applicationFiles/' . $newFilename;
            $application->filePath=$filePath;
        }
        $application->save();
        $message="Application stored successfully";
        return redirect()->back()->with('message',$message);
    }

    public function updateApplication(Request $request,$id){
    	$application=\App\Application::find($id);
    	$application->title=$request->get('title');
    	$application->description=$request->get('description');
    	$application->year=$request->get('year');
    	
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='applicationCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='applicationCovers/' . $newFilename;
            $application->cover=$coverPath;
        }
    	

    	
        $file=Input::file("file");
        if(!empty($file)){
            $application->fileName=$file->getClientOriginalName();
            $application->fileSize=$file->getSize();
            $application->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='applicationFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='applicationFiles/' . $newFilename;
            $application->filePath=$filePath;
          
        }
    	
        
        $application->save();
        $message="Application updated successfully";
        return redirect()->back()->with('message',$message);
    }

    public function deleteApplication($id){
    	$application=\App\Application::find($id);
    	$application->delete();
    	$message="Application deleted successfully";
        return redirect()->back()->with('message',$message);
    }
    public function sortApplication($by){
        if($by=="created_at"){
            $applications=\App\Application::orderBy('created_at','desc')->get();
            $by="created_at";
            return view('admin/all-applications',compact('applications','by'));
        }
        if($by=="id"){
            $applications=\App\Application::orderBy('id','desc')->get();
            $by="id";
            return view('admin/all-applications',compact('applications','by'));
        }
        if($by=="title"){
            $applications=\App\Application::orderBy('title','desc')->get();
            $by="title";
            return view('admin/all-applications',compact('applications','by'));
        }
        if($by=="year"){
            $applications=\App\Application::orderBy('year','desc')->get();
            $by="year";
            return view('admin/all-applications',compact('applications','by'));
        }
        
    }
    public function searchApplication(Request $request){
        $title=$request->get('title');
        $applications=\App\Application::where('title','like','%'.$title.'%')->get();
        return view('admin/all-applications',compact('applications'));

    }

    public function downloadApplication($id){
        $application=\App\Application::find($id);

        $mat=$application->filePath;

        $file= public_path(). "/$mat";
       
       return response()->download($file);
    }
    public function createApplication(){
        return view('admin/create-applications');
    }
    public function allApplication(){
        $applications=\App\Application::orderBy('created_at','desc')->get();
        return view('admin/all-applications',compact('applications'));
    }
}
