<?php

	namespace App\Http\Controllers;

	/*use Illuminate\Http\Request;
	use App\Settings;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Storage;
	use Intervention\Image\Facades\Image;
	use Validator;
	*/
    class AdminController extends Controller{
    
    //09-07-19
    /* 17-09-19
    public function get_index(){

    	return view('backend.index');
    }

    public function get_settings(){

    	//16-07-19
    	$settings=Settings::where('id',1)->select('settings.*')->first();
    	return view('backend.settings')->with('settings',$settings);
    }
	*/
    //10-07-19
    /* 17-09-19
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

    }*/
}
?>
