<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class GameController extends Controller
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
    public function editGame($id){
        $game=\App\Game::find($id);
        return view('admin/edit-games',compact('game'));
    }
    public function viewGame($id){
        $game=\App\Game::find($id);
        return view('admin/view-games',compact('game'));
    }
     public function storeGame(Request $request){
    	$game=new \App\Game;
    	$game->title=$request->get('title');
    	$game->description=$request->get('description');
    	$game->year=$request->get('year');
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='gameCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='gameCovers/' . $newFilename;
            $game->cover=$coverPath;
        }
        $file=Input::file("file");
        if(!empty($file)){
            $game->fileName=$file->getClientOriginalName();
            $game->fileSize=$file->getSize();
            $game->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='gameFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='gameFiles/' . $newFilename;
            $game->filePath=$filePath;
            
        }
        $game->save();
        $message="Game stored successfully";
        return redirect()->back()->with('message',$message);
    }

    public function updateGame(Request $request,$id){
    	$game=\App\Game::find($id);
    	$game->title=$request->get('title');
    	$game->description=$request->get('description');
    	$game->year=$request->get('year');
    	
    	
    	$cover=Input::file("cover");
        if(!empty($cover)){
            $ran=Str::random(6);
            $newFilename=$ran.$cover->getClientOriginalName();
            $destinationPath='gameCovers';
            $cover->move($destinationPath,$newFilename);
            $coverPath='gameCovers/' . $newFilename;
            $game->cover=$coverPath;
        }
    	

    	
        $file=Input::file("file");
        if(!empty($file)){
            $game->fileName=$file->getClientOriginalName();
            $game->fileSize=$file->getSize();
            $game->fileType=$file->getMimeType();
            $ran=Str::random(6);
            $newFilename=$ran.$file->getClientOriginalName();
            $destinationPath='gameFiles';
            $file->move($destinationPath,$newFilename);
            $filePath='gameFiles/' . $newFilename;
            $game->filePath=$filePath;
        }
    	
        
        $game->save();
        $message="Game updated successfully";
        return redirect()->back()->with('message',$message);
    }

    public function deleteGame($id){
    	$game=\App\Game::find($id);
    	$game->delete();
    	$message="Game deleted successfully";
        return redirect()->back()->with('message',$message);
    }
    public function sortGame($by){
        if($by=="created_at"){
            $games=\App\Game::orderBy('created_at','desc')->get();
            $by="created_at";
            return view('admin/all-games',compact('games','by'));
        }
        if($by=="id"){
            $games=\App\Game::orderBy('id','desc')->get();
            $by="id";
            return view('admin/all-games',compact('games','by'));
        }
        if($by=="title"){
            $games=\App\Game::orderBy('title','desc')->get();
            $by="title";
            return view('admin/all-games',compact('games','by'));
        }
        if($by=="year"){
            $games=\App\Game::orderBy('year','desc')->get();
            $by="year";
            return view('admin/all-games',compact('games','by'));
        }
        
    }
    public function searchGame(Request $request){
        $title=$request->get('title');
        $games=\App\Game::where('title','like','%'.$title.'%')->get();
        return view('admin/all-games',compact('games'));

    }
    public function downloadGame($id){
        $game=\App\Game::find($id);

        $mat=$game->filePath;

        $file= public_path(). "/$mat";
       
       return response()->download($file);
    }
    public function createGame(){
        return view('admin/create-games');
    }
    public function allGame(){
        $games=\App\Game::orderBy('created_at','desc')->get();
        return view('admin/all-games',compact('games'));
    }
}
