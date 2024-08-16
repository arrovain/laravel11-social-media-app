<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ImagePost extends Controller
{
    public function index(){
        return view('template.home', [
            'posts' => $posts
        ] );
    }

    public function store(Request $request){
        
        
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'descriptions' => 'required',
        ]);

        if($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/,$filename');
    }
    
    $photo->title=$request->title;
    $photo->image=$filename;
    $photo->description=$request->description;
    $photo->user_id=1;
    $status=$photo->save();

    if($status){
        return redirect('/home')->with('success', 'Post Created Successfully');
    }
        else{
            return redirect('/home')->with('error', 'something went wrong');

        }

}

           public function likecount(Request $request, $id){

            $like=new Likes();
            $like->user_id=1;
            $like->post_id=$id;
            $status->$like->save();

            if($status){
                return redirect('/home')->with('success', 'Post Created Successfully');
            }
                else{
                    return redirect('/home')->with('error', 'something went wrong');
        
                }



            
           }
}

