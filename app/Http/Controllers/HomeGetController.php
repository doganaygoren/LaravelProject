<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Blog;
use App\About;
use App\Category;
use Illuminate\Support\Facades\Auth;

class HomeGetController extends HomeController
{
    //17-07-19
    public function get_welcome(){

    	return view('welcome');
    }

    public function get_index(){

    	return view('frontend.index');
    }

    public function get_contact(){

    	$settings=Settings::where('id',1)->select('settings.*')->first();
    	return view('frontend.contact')->with('settings',$settings);
    }

    public function get_about(){

        //return view('frontend.about_us');

        //19-07-19
        $about=About::where('id',1)->select('about_us.*')->first();
        return view('frontend.about_us')->with('about_us',$about);
    }

    //19-07-19
    public function get_blog(){

        //return view('frontend.blog');

        //29-07-19
        $blogs=Blog::orderBy('id','desc')->get();
        // 01-08-19 return view('frontend.blog')->with('blogs',$blogs);


        //01-08-19
        $categories=Category::where('upper_category','0')->get();
        return view('frontend.blog')->with('blogs',$blogs)->with('categories',$categories);
    }


    //19-07-19
    public function get_blog_content(){

        //30-07-19
        //return view('frontend.blog_content');
    }


    //30-07-19
    public function get_blog_contents($slug){


        //01-08-19 part 2
        $category=explode('/', $slug);

        //part 2 $blog=Blog::where('slug',$slug)->first();
        //01-08-19 return view('frontend.blog_content')->with('blog',$blog);

        //01-08-19
        $categories=Category::where('upper_category','0')->get();

        //part 2
        $blog=Blog::where('slug',$category[count($category)-1])->first();


       //02-08-19
       // return view('frontend.blog_content')->with('blog',$blog)->with('categories',$categories)/*part 2*/->with('blog_category',$category);


        //02-08-19
        if(isset($blog)){

            return view('frontend.blog_content')->with('blog',$blog)->with('categories',$categories)->with('blog_category',$category);
        }

        else{

            $s=$category[count($category)-1];
            $b=Category::where('slug',$s)->get();

            $blogs=$b[0]->blogs;
            return view('frontend.blog')->with('blogs',$blogs)->with('categories',$categories);
        }

    }

    //08-08-19
    
    public function get_blog_author($blog_author){

        $y=explode('-',$author);
        $categories=Category::where('upper_category','0')->get();
        $blogs=Blog::where('blog_author', $y[count($y)-1])->orderBy('id','desc')->get();
        return view('frontend.blog')->with('blogs',$blogs)->with('categories',$categories);
    }

    //09-08-19
    public function get_login(){

        return view('frontend.login');
    }

    //09-08-19

    public function get_logout(){

        Auth::logout();
        return redirect('/index');
    }
}