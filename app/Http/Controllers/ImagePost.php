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

        $photo = new Post();
    }
}
