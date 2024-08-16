<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ImagePost extends Controller
{
    public function index(){
        return view('template.home');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'descriptions' => 'required',
        ]);

        if($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/,$filename');


    }
    
    $photo = new Post();
}
