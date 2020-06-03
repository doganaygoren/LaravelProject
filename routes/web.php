<?php

/*Route::get('/', function () {
    return view('welcome');
});
*/

//17-07-19
Route::get('/', 'HomeGetController@get_index');

//08-07-19
/*
Route::get('/index', function (){

	return view('frontend.index');
});
*/

//17-07-19
Route::get('/index', 'HomeGetController@get_index');
Route::get('/home', 'HomeGetController@get_index');
//09-07-19
/*Route::get('/contact' ,function(){

	return view('frontend.contact');
});
*/

//17-07-19
Route::get('/contact', 'HomeGetController@get_contact');

Route::group(['prefix'=> 'admin', /* 31-07-19 */ 'middleware'=>'Admin'], function(){
	//09-07-19
	//Route::get('/' , 'AdminController@get_index');
	//Route::get('/settings' , 'AdminController@get_settings');
	Route::get('/' , 'AdminGetController@get_index');
	Route::get('/settings' , 'AdminGetController@get_settings');
	//10-07-19
	Route::post('/settings' , 'AdminPostController@post_settings');
	//18-07-19
	Route::get('/about' , 'AdminGetController@get_about');
	Route::post('/about' ,'AdminPostController@post_about');

	//22-07-19
	//Route::get('/blog', 'AdminGetController@get_blog');
	
	//23-07-19
	//Route::post('/blog', 'AdminPostController@post_blog');

	//31-07-19
	Route::get('/category', 'AdminGetController@get_category');	
	Route::post('/category', 'AdminPostController@post_category');

	//01-08-19
	Route::post('/category', 'AdminPostController@post_category_delete');

	//24-07-19
	Route::group(['prefix'=>'blog'], function(){

		Route::post('/', 'AdminPostController@post_blog');
		Route::get('/', 'AdminGetController@get_blog');
		Route::get('/blog-update/{slug}', 'AdminGetController@get_blog_update');

		//25-07-19
		Route::post('/blog-update/{slug}', 'AdminPostController@post_blog_update');

		//08-08-19
		Route::get('/author/{blog_author}', 'HomeGetController@get_blog_author');
		
	});
});

//17-07-10
Route::get('/about', 'HomeGetController@get_about');

//19-07-19
Route::get('/blog', 'HomeGetController@get_blog');
Route::get('/blog/content', 'HomeGetController@get_blog_content');

//30-07-19
//Route::get('/blog/{slug}', 'HomeGetController@get_blog_contents');

//01-08-19
Route::get('/blog/{slug}', 'HomeGetController@get_blog_contents')->where('slug','^[a-zA-Z0-9-_\/]+$');

//05-08-19
Route::post('/blog/{slug}', 'HomePostController@post_blog_contents')->where('slug','^[a-zA-Z0-9-_\/]+$');


//30-07-19
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//09-08-19
Route::get('/login','HomeGetController@get_login');
Route::get('/logout','HomeGetController@get_logout');

?>