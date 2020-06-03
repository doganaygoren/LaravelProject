@extends('backend.app')
@section('main_content')


<!-- 18-07-19 -->	
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Settings</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>About</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
           	
          	<form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >

                  	{{csrf_field()}}
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#social_media" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">About Us Settings</a>
                        </li>
                      </ul>

	                <div id="myTabContent" class="tab-content">
                                      
                        <div role="tabpanel" class="tab-pane fade active in" id="social_media" aria-labelledby="profile-tab">

                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Visio</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input name="visio" type="text" id="first-name" class="form-control col-md-7 col-xs-12" value="{{$about_us->visio}}">
                        			</div>
                      			</div>
                      			
                      			<div class="form-group">
                        			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mission</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input type="text" id="last-name" name="mission" class="form-control col-md-7 col-xs-12" value="{{$about_us->mission}}">
                        			</div>
                      			</div>
                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Short Text</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="short_text" value="{{$about_us->short_text}}">
                        			</div>
                      			</div>

                      			<div class="form-group">
                        			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Content</label>
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                          				<textarea name="content" cols="30" rows="10" class="form-control col-md-7 col-xs-12" > {{$about_us->content}} </textarea>
                        			</div>
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

@section('css')
	

@endsection

@section('js')



@endsection