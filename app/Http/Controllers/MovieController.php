<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class MovieController extends Controller
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
    public function adminPanel(){
        return view('admin/index');
    }
    public function allUser(){
        $users=\App\User::all();
        return view('admin/all-users',compact('users'));
    }
    public function deleteUser($id){
        $user=\App\User::find($id);
        $user->delete();
        $message="User deleted successfully";
        return redirect()->back()->with('message',$message);
    }

    public function editMovie($id){
        $movie=\App\Movie::find($id);
        return view('admin/edit-movies',compact('movie'));
    }
    public function viewMovie($id){
        $movie=\App\Movie::find($id);
        if($movie->type=="movie"){
            return view('admin/view-movies',compact('movie'));
        }
        if($movie->type=="show"){
            $movies=\App\Movie::where('isSeason','yes')->where('seasonId',$movie->id)->get();
            return view('admin/view-shows',compact('movies','movie'));
        }
    }
    public function storeMovie(Request $request){

       
    	$movie=new \App\Movie;
    	$movie->title=$request->get('title');
    	$movie->description=$request->get('description');
    	$movie->year=$request->get('year');
    	$movie->genre=implode(" , ",$request->get('genre'));

    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='movieCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='movieCovers/' . $newFilename;
            $movie->cover=$coverPath;
        }
        $file=Input::file("file");

        if(!empty($file)){
            $movie->fileName=$file->getClientOriginalName();
            $movie->fileSize=$file->getSize();
            $movie->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='movieFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='movieFiles/' . $newFilename;
            $movie->filePath=$filePath;
            $movie->fileDuration=$request->get('fileDuration');
            $movie->fileQuality=$request->get('fileQuality');
            
        }
        $movie->type="movie";

        $seasonId=$request->get('seasonId');
        $episodeNumber=$request->get('episodeNumber');
        if(!empty($seasonId) && !empty($episodeNumber)){
        	$movie->seasonId=$seasonId;
        	$movie->episodeNumber=$episodeNumber;
        	$movie->isSeason="yes";
        }

        $movie->save();
        $message="Movie stored successfully";
        return redirect()->back()->with('message',$message);
    }
     public function storeSeason(Request $request){
        $movie=new \App\Movie;
        $movie->title=$request->get('title');
        $movie->description=$request->get('description');
        $movie->year=$request->get('year');
        $movie->genre=$request->get('genre');
        $cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='movieCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='movieCovers/' . $newFilename;
            $movie->cover=$coverPath;
        }
        $movie->type="show";
        $movie->save();
        $message="TV show stored successfully. It will appear in shows list";
        return view('admin/create-movies',compact('message'));
    }


    public function updateMovie(Request $request,$id){
    	$movie=\App\Movie::find($id);
    	$movie->title=$request->get('title');
    	$movie->description=$request->get('description');
    	$movie->year=$request->get('year');
        if(!empty($request->get('genre'))){
    	   $movie->genre=implode(" , ",$request->get('genre'));
        }


    	
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='movieCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='movieCovers/' . $newFilename;
            $movie->cover=$coverPath;
        }
    	
        $file=Input::file("file");
        if(!empty($file)){
            $movie->fileSize=$file->getSize();
            $movie->fileName=$file->getClientOriginalName();
            $movie->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='movieFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='movieFiles/' . $newFilename;
            $movie->filePath=$filePath;
            $movie->fileDuration=$request->get('fileDuration');
            if(!empty($request->get('fileQuality'))){
                $movie->fileQuality=$request->get('fileQuality');
            }
            
        }
    	
        $seasonId=$request->get('seasonId');
        $episodeNumber=$request->get('episodeNumber');
        if(!empty($seasonId) && !empty($episodeNumber)){
        	$movie->seasonId=$seasonId;
        	$movie->episodeNumber=$episodeNumber;
        	$movie->isSeason="yes";
        }
        $movie->save();
        $message="Movie updated successfully";
        return redirect()->back()->with('message',$message);
    }

    public function deleteMovie($id){
    	$movie=\App\Movie::find($id);
    	$movie->delete();
    	$message="Movie deleted successfully";
        return redirect()->back()->with('message',$message);
    }

    public function sortMovie($by){
        if($by=="created_at"){
            $movies=\App\Movie::orderBy('created_at','desc')->get();
            $by="created_at";
            return view('admin/all-movies',compact('movies','by'));
        }
        if($by=="id"){
            $movies=\App\Movie::orderBy('id','desc')->get();
            $by="id";
            return view('admin/all-movies',compact('movies','by'));
        }
        if($by=="title"){
            $movies=\App\Movie::orderBy('title','desc')->get();
            $by="title";
            return view('admin/all-movies',compact('movies','by'));
        }
        if($by=="year"){
            $movies=\App\Movie::orderBy('year','desc')->get();
            $by="year";
            return view('admin/all-movies',compact('movies','by'));
        }
        if($by=="category"){
            $movies=\App\Movie::orderBy('category','desc')->get();
            $by="category";
            return view('admin/all-movies',compact('movies','by'));
        }
    }
    public function searchMovie(Request $request){
        $title=$request->get('title');
        $movies=\App\Movie::where('title','like','%'.$title.'%')->get();
        return view('admin/all-movies',compact('movies'));

    }
    public function downloadMovie($id){
        $movie=\App\Movie::find($id);

        $mat=$movie->filePath;

        $file= public_path(). "/$mat";
       
       return response()->download($file);
    }
    
    public function createSeason(){
        return view('admin/create-seasons');
    }
    public function createMovie(){
        return view('admin/create-movies');
    }
    public function allMovie(){
        $movies=\App\Movie::orderBy('created_at','desc')->get();
        return view('admin/all-movies',compact('movies'));
    }
}
