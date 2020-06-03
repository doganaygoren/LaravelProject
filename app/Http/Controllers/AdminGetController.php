<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;	
use App\About;
use App\Blog;
use App\Category;


//17-07-19
class AdminGetController extends AdminController
{
    public function get_index(){

    	return view('backend.index');
    }

    public function get_settings(){

    	//16-07-19
    	$settings=Settings::where('id',1)->select('settings.*')->first();
    	return view('backend.settings')->with('settings',$settings);
    }

    public function get_about(){

    	//18-07-19
    	$about=About::where('id',1)->select('about_us.*')->first();
    	return view('backend.about_us')->with('about_us',$about);
    }

    public function get_blog(){

        //return view('backend.blog');

        //24-07-19
        //$blogs=Blog::all();
        //return view('backend.blog')->with('blogs',$blogs);

        //01-08-19

        $categories=Category::where('upper_category','0')->get();
        $blogs=Blog::all();
        return view('backend.blog')->with('blogs',$blogs)->with('categories',$categories);
    }

    public function get_blog_update($slug){

        $blogs=Blog::where('slug',$slug)->first();
        return view('backend.blog-update')->with('blogs',$blogs);
    }


    //31-07-19
    public function get_category(){

        $categories=Category::where('upper_category','0')->get();
        //01-08-19
        $category_list=Category::all();
        //return view('backend.category')->with('categories',$categories);
        //01-08-19
        return view('backend.category')->with('categories',$categories)->with('category_list',$category_list);
    }   
}

?>