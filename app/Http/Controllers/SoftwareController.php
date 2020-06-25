<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class SoftwareController extends Controller
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
    public function editSoftware($id){
        $software=\App\Software::find($id);
        return view('admin/edit-softwares',compact('software'));
    }
    public function viewSoftware($id){
        $software=\App\Software::find($id);
        return view('admin/view-softwares',compact('software'));
    }
     public function storeSoftware(Request $request){
    	$software=new \App\Software;
    	$software->title=$request->get('title');
    	$software->description=$request->get('description');
    	$software->year=$request->get('year');
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='softwareCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='softwareCovers/' . $newFilename;
            $software->cover=$coverPath;
        }
        $file=Input::file("file");
        if(!empty($file)){
            $software->fileName=$file->getClientOriginalName();
            $software->fileSize=$file->getSize();
            $software->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='softwareFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='softwareFiles/' . $newFilename;

           
            $software->filePath=$filePath;
            
        }
        $software->save();
        $message="Software stored successfully";
        return redirect()->back()->with('message',$message);
    }

    public function updateSoftware(Request $request,$id){
    	$software=\App\Software::find($id);
    	$software->title=$request->get('title');
    	$software->description=$request->get('description');
    	$software->year=$request->get('year');
    	
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='softwareCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='softwareCovers/' . $newFilename;
            $software->cover=$coverPath;
        }
    	

        $file=Input::file("file");
        if(!empty($file)){
            $software->fileName=$file->getClientOriginalName();
            $software->fileSize=$file->getSize();
            $software->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='softwareFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='softwareFiles/' . $newFilename;

            $software->filePath=$filePath;
         
        }
	
        
        $software->save();
        $message="Software updated successfully";
        return redirect()->back()->with('message',$message);
    }

    public function deleteSoftware($id){
    	$software=\App\Software::find($id);
    	$software->delete();
    	$message="Software deleted successfully";
        return redirect()->back()->with('message',$message);
    }
    public function sortSoftware($by){
        if($by=="created_at"){
            $softwares=\App\software::orderBy('created_at','desc')->get();
            $by="created_at";
            return view('admin/all-softwares',compact('softwares','by'));
        }
        if($by=="id"){
            $softwares=\App\Software::orderBy('id','desc')->get();
            $by="id";
            return view('admin/all-softwares',compact('softwares','by'));
        }
        if($by=="title"){
            $softwares=\App\Software::orderBy('title','desc')->get();
            $by="title";
            return view('admin/all-softwares',compact('softwares','by'));
        }
        if($by=="year"){
            $softwares=\App\Software::orderBy('year','desc')->get();
            $by="year";
            return view('admin/all-softwares',compact('softwares','year'));
        }
        
    }
    public function searchSoftware(Request $request){
        $title=$request->get('title');
        $softwares=\App\Software::where('title','like','%'.$title.'%')->get();
        return view('admin/all-softwares',compact('softwares'));

    }
    public function downloadSoftware($id){
        $software=\App\Software::find($id);

        $mat=$software->filePath;

        $file= public_path(). "/$mat";
       
       return response()->download($file);
    }
    public function createSoftware(){
        return view('admin/create-softwares');
    }
    public function allSoftware(){
        $softwares=\App\Software::orderBy('created_at','desc')->get();
        return view('admin/all-softwares',compact('softwares'));
    }
}
