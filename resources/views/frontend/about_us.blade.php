<!-- 17-07-19 -->
@extends('frontend.app')
@section('main_content')
<div role="main" class="main">

	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<p class="lead">
					<!--19-07-19 -->
					{{$about_us->short_text}}
				</p>
			</div>
			<div class="col-md-2">
				<!--19-07-19 -->
				<a href="/contact" class="btn btn-lg btn-primary push-top">Contact Us</a>
			</div>
		</div>

		<hr class="tall">

		<div class="row">
			<div class="col-md-8">
				<h3><strong>Who</strong> We Are</h3>
				<!--19-07-19 -->
				<p> {{$about_us->content}} </p>
			</div>
			<div class="col-md-4">
				<div class="featured-box featured-box-secundary">
					<div class="box-content">
						<h4>Behind the scenes</h4>
						<ul class="thumbnail-gallery flickr-feed" data-plugin-flickr data-plugin-options='{"qstrings": { "id": "93691989@N03" }, "limit": 6}'></ul>
					</div>
				</div>
			</div>
		</div>

		<hr class="tall">

		<div class="row">
			<div class="col-md-12">
				<h3 class="push-top">Our <strong>Visio</strong></h3>
			</div>
		</div>

		<div class="featured-box">
			<div class="box-content">
				
				<p>{{$about_us->visio}}</p>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<h3 class="push-top">Our <strong>Mission</strong></h3>
			</div>
		</div>

		<div class="featured-box">
			<div class="box-content">
				
				<p>{{$about_us->mission}}</p>
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