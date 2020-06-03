<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Settings;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Storage;
	use Intervention\Image\Facades\Image;
	use Validator;
    use App\About;
    use App\Blog;
    use Carbon\Carbon;
    use App\Category;

class AdminPostController extends AdminController
{
    //17-07-19

    //10-07-19
    public function post_settings(Request $request){

    	//Settings::create($request->all());

    	//11-07-19

    	//$setting = Settings::find(1);	
    	//$setting->update($request->all());
    	
    	//16-07-19
    	
    	if(isset($request->logo)){

    		$validator= Validator::make($request->all(), ['logo'=>'mimes:jpg,jpeg,png,gif',]);

    		if($validator->fails())
    			return response(['js_title'=>'Error', 'js_content'=>'Extension is not supported.','js_state'=>'error']);

    		$logo=Input::file('logo');
    		$logo_extension=Input::file('logo')->getClientOriginalExtension();
    		$logo_title='logo.'.$logo_extension;
    		Storage::disk('uploads')->makeDirectory('img');
    		Image::make($logo->getRealPath())->resize(222,108)->save('uploads/img' . $logo_title);
    	}

    	try{

    		if(isset($request->logo)){

    			$setting = Settings::find(1);	
    			$setting->update($request->all());
    			$setting->update(['logo'=>$logo_title]);
    		}
    		else{

    			$old_logo=$request->old_logo;
    			$setting = Settings::find(1);	
    			$setting->update($request->all());
    			$setting->update(['logo'=>$old_logo]);
    		}
    		return response(['js_title'=>'Success', 'js_content'=>'Operation Successfull','js_state'=>'success']);
    	}
    	catch(Exception $e){

    		return response(['js_title'=>'Error', 'js_content'=>'Operation Failed.','js_state'=>'error']);
    	}

    }

    //18-07-19
    public function post_about(Request $request){

        //About::create($request->all());
        //return view('backend.about_us');
        $about=About::find(1); 
        $about->update($request->all());
        return view('backend.about_us')->with('about_us',$about);
    }

    //23-07-19
    public function post_blog(Request $request){

        //26-07-19
        $validator= Validator::make($request->all(), [

            'logo'=>'mimes:jpg,jpeg,png,gif',
            'header'=>'required|max=250',
            'tags'=>'required|max=250',
            'content'=>'required'
        ]);

        $date=str_slug(Carbon::now());
        $slug=str_slug($request->header)."-".$date;
        $images=$request->file('images');
        if(!empty($images)){

            $i=1;
            foreach($images as $image) {
                
                $image_extension=$image->getClientOriginalExtension();
                $image_label=$i.".".$image_extension;
                Storage::disk('uploads')->makeDirectory('img/blog/'.$slug);
                Storage::disk('uploads')->put('img/blog/'.$slug.'/'.$image_label, file_get_contents($image));
                $i++;
            }
        }
        //$date=str_slug(Carbon::now());
        //$slug=str_slug($request->header)."-".$date;
        
        $request->merge(['slug'=>$slug]);
        Blog::create($request->all());
       
        //24-07-19
        if(isset($request->delete_btn)){

            Blog::where('slug',$request->slug)->delete();
            Storage::disk('uploads')->deleteDirectory('img/blog/'.$request->slug);
        }
        
        $blogs=Blog::all();
        //return view('backend.blog')->with('blogs',$blogs);


        //01-08-19
        $categories=Category::where('upper_category','0')->get();
        return view('backend.blog')->with('blogs',$blogs)->with('categories',$categories);
    }

    //25-07-19
    public function post_blog_update(/*25-07-19*/ $slug,Request $request){

        //26-07-19
        $validator= Validator::make($request->all(), [

            'logo'=>'mimes:jpg,jpeg,png,gif',
            'header'=>'required|max=250',
            'tags'=>'required|max=250',
            'content'=>'required'
        ]);


        if(isset($request->image)){

            Storage::disk('uploads')->delete($request->image);
            return back();
        }
        else{


            $images=$request->file('images');
            if(!empty($images)){

                //$i=1;
                //25-07-19
                $i=$request->counter;
                foreach($images as $image) {
                    
                    $image_extension=$image->getClientOriginalExtension();
                    $image_label=$i.".".$image_extension;
                    Storage::disk('uploads')->makeDirectory('img/blog/'.$slug);
                    Storage::disk('uploads')->put('img/blog/'.$slug.'/'.$image_label, file_get_contents($image));
                    $i++;
                }
            }

            Blog::where('slug',$slug)->update([

                'header'=>$request->header,
                'content'=>$request->content,
                'tags'=> $request->tags,
                //29-07-19
                'short_content'=> $request->short_content,
                //01-08-19
                'category'=>$request->category
            ]);     


            $blogs=Blog::where('slug',$slug)->first();
            return view('backend.blog-update')->with('blogs', $blogs);
        }

    }

    //31-07-19
    public function post_category(Request $request){


        $validator=Validator::make($request->all(),[

            'category_name'=> 'required',
        ]);

        $slug=str_slug($request->category_name);
        $request->merge(['slug'=> $slug]);
        Category::create($request->all());
        return back();
    }

    //01-08-19
    public function post_category_delete(Request $request){
        
            Category::where('id',$request->id)->delete();
            return back();
    }
}

?>