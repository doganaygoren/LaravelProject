<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Validator;
use Illuminate\Support\Facades\Auth;

class HomePostController extends HomeController
{
    //17-07-19

	//05-08-19
    public function post_blog_contents(Request $request,$slug){

    	/* 07-08-19
    	$validator= Validator::make($request->all(), [

            'name'=>'required',
            'email'=>'required|email',
            'content'=>'required'
        ]);
		*/
    	
    	//07-08-19

    	if(Auth::check()){

    	$validator= Validator::make($request->all(), [
            'content'=>'required'
        ]);
    	}

    	else{

    		$validator= Validator::make($request->all(), [

            'name'=>'required',
            'email'=>'required|email',
            'content'=>'required'
        ]);
    	}

    	$category=explode('/',$slug);

    	$request->merge(['blog'=> $category[count($category)-1]]);
    	
    	//07-08-19
    	if(Auth::check()){

    		$request->merge(['user_id'=>Auth::user()->id]);
    	}

    	Comment::create($request->all());

    	return back();
    }
}
