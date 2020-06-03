@extends('backend.app')
@section('main_content')

<div class="right_col" role="main">
	<div class="">
        <div class="page-title">
	        <div class="title_left">
                <h3>General Elements</h3>
            </div>
            <div class="title_right">
            	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="">
	        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                  	<form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                  		{{csrf_field()}}
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general_settings" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General Settings</a>
                        </li>
                        <li role="presentation" class=""><a href="#contact_settings" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Contact Settings</a>
                        </li>
                        <li role="presentation" class=""><a href="#social_media" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Social Media</a>
                        </li>
                        <li role="presentation" class=""><a href="#google_api" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Google API</a>
                        </li>
                        <li role="presentation" class=""><a href="#mail_settings" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Mail Settings</a>
                        </li>
                      </ul>
	                <div id="myTabContent" class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane fade active in" id="general_settings" aria-labelledby="home-tab">
                          
                        	<!-- 09-07-19 -->

                         		<!--16-07-19 -->
                        		<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Current Image</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<img src="/uploads/img/{{$settings->logo}}" alt="logo">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload Image</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="logo" type="file" class="form-control col-md-7 col-xs-12">
                          				<input type="hidden" name="old_logo" value="{{$settings->logo}}">
                        			</div>
                      			</div>


                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Title</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="title" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->title}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Site Keywords</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input type="text" id="last-name" name="keyword" class="form-control col-md-7 col-xs-12" value="{{$settings->keyword}}">
                        			</div>
                      			</div>
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Description</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="description" value="{{$settings->description}}">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Addres</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="url" value="{{$settings->url}}">
                        			</div>
                      			</div>

                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="contact_settings" aria-labelledby="profile-tab">
                          
                          <!-- 10-07-19 -->

                      			<!--<?php //{{Form::bsText('phone','Phone Number')}}?> -->

                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="mail" type="email" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->mail}}">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone Number</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="phone" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->phone}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="{{$settings->mobile}}" name="mobile">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fax Number</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="{{$settings->fax}}" name="fax">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Addres</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="address" value="{{$settings->address}}">
                        			</div>
                      			</div>
                      			
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="social_media" aria-labelledby="profile-tab">
                         

                          <!-- 10-07-19 -->

                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="facebook" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->facebook}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Twitter</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input type="text" id="last-name" name="twitter" class="form-control col-md-7 col-xs-12" value="{{$settings->twitter}}">
                        			</div>
                      			</div>
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="instagram" value="{{$settings->instagram}}">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Youtube</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="youtube" value="{{$settings->youtube}}">
                        			</div>
                      			</div>
                      			
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="google_api" aria-labelledby="profile-tab">
                          
                         <!-- 10-07-19 -->


                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Account</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="google" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->google}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Google Recapctha</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input type="text" id="last-name" name="recapctha" class="form-control col-md-7 col-xs-12" value="{{$settings->recapctha}}">
                        			</div>
                      			</div>
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Google Maps</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="map" value="{{$settings->map}}">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Google Analystic</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{$settings->analystic}}" type="text" name="analystic">
                        			</div>
                      			</div>

                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="mail_settings" aria-labelledby="profile-tab">
                          
                          <!-- 10-07-19 -->



                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="smtp_user" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$settings->smtp_user}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input type="password" id="last-name" name="smtp_password" class="form-control col-md-7 col-xs-12" value="{{$settings->smtp_password}}">
                        			</div>
                      			</div>
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Host</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="{{$settings->smtp_host}}" name="smtp_host">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Port</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="smtp_port" value="{{$settings->smtp_port}}">
                        			</div>
                      			</div>
                      			
                    		
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
   	    				<button type="submit" class="btn btn-primary">Cancel</button>
           				<button type="submit" class="btn btn-success">Save</button>
           			</div>
       			</div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection

@section('js')


	<!-- 11-07-19 -->
	<script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_eu.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('form').validate();
            
            $('form').ajaxForm({
                beforeSubmit:function () {
                },
                success:function (response) {
                    
                    //16-07-19
                    swal(response.js_title,response.js_content,response.js_state);
                }
            });
        });
    </script>

@endsection

@section('css')
	
	<!-- 11-07-19 -->
	<link rel="stylesheet" type="text/css" href="/css/sweetalert2.min.css">

@endsection