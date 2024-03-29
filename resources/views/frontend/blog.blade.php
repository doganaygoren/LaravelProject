@extends('frontend.app')
@section('main_content')

<!-- 19-07-19 -->
			<div role="main" class="main">
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Large Image</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">

								<!-- 29-07-19 -->
								@foreach($blogs as $blog)
								<article class="post post-large">
									<div class="post-image">
										<div class="owl-carousel" data-plugin-options='{"items":1}'>
											<!-- 29-07-19 -->
											@foreach($images=Storage::disk('uploads')->files('img/blog/'.$blog->slug) as $image)
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="/uploads/{{$image}}" alt="">
												</div>
											</div>
											@endforeach
										</div>
									</div>

									<div class="post-date">
										<span class="day">{{$blog->created_at->formatLocalized('%d')}}</span>
										<span class="month">{{$blog->created_at->formatLocalized('%b')}}</span>
									</div>

									<div class="post-content">

										<!-- 29-07-19
										<h2><a href="/blog/{{$blog->slug}}">{{$blog->header}}</a></h2>
										<p>{{$blog->short_content}}</p>
										-->
										<!-- 02-08-19 -->
										<h2><a href="/blog/
											@if(isset($blog->parent))
												
												@php($upper_category=$blog->parent)
												@if(isset($upper_category->parent))
													
													@php($upper_upper_category=$upper_category->parent)
													@if(isset($upper_upper_category->parent))
														{{$upper_upper_category->parent->slug}}/
													@endif
													{{$upper_category->parent->slug}}/
												@endif
												{{$blog->parent->slug}}/
											@endif


											/{{$blog->slug}}">{{$blog->header}}</a></h2>
										<p>{{$blog->short_content}}</p>

										<div class="post-meta">
											
											<!-- 08-08-19-->
											<span><i class="fa fa-user"></i> By <a href="/blog/author/{{$blog->user->slug}}-{{$blog->user->id}}">{{$blog->user->name}} </a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i>Comments({{$blog->user_comments->count()}})</span>
											<!-- 29-07-19 -->
											<!--
											<a href="/blog/{{$blog->slug}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
											-->
											<!-- 02-08-19 -->
											<a href="/blog/
											@if(isset($blog->parent))
												
												@php($upper_category=$blog->parent)
												@if(isset($upper_category->parent))
													
													@php($upper_upper_category=$upper_category->parent)
													@if(isset($upper_upper_category->parent))
														{{$upper_upper_category->parent->slug}}/
													@endif
													{{$upper_category->parent->slug}}/
												@endif
												{{$blog->parent->slug}}/
											@endif


											/{{$blog->slug}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>

									</div>
								</article>
								@endforeach
								
								<!-- 29-07-19
								<article class="post post-large">
									<div class="post-image single">
										<img class="img-thumbnail" src="img/blog/blog-image-2.jpg" alt="">
									</div>

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h2><a href="blog-post.html">Post Format - Single Image</a></h2>
										<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
											<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>

									</div>
								</article>
								-->


								<!-- 19-07-19
								<article class="post post-large">
									<div class="post-video">
										<iframe src="//player.vimeo.com/video/28614006?color=0088CC" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h2><a href="blog-post.html">Post Format - Video</a></h2>
										<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
											<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>

									</div>
								</article>

								<article class="post post-large">
									<div class="post-audio">
										<iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F67943430&amp;show_artwork=true&amp;maxwidth=132&amp;maxheight=1000"></iframe>
									</div>

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h2><a href="blog-post.html">Post Format - Audio</a></h2>
										<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
											<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>

									</div>
								</article>

								<article class="post post-large">

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<blockquote>
											Post Format - Blockquote - Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.
											<small>Someone famous <cite title="Source Title">Source Title</cite></small>
										</blockquote>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
											<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>

									</div>
								</article>
								-->
								<ul class="pagination pagination-lg pull-right">
									<li><a href="#">«</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">»</a></li>
								</ul>

							</div>
						</div>

						
						@include('frontend.blog_sidebar')
						<!--
						19-07-19
						<div class="col-md-3">
							<aside class="sidebar">

								<form>
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>

								<hr />

								<h4>Categories</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">Design</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Technology</a></li>
								</ul>

								<div class="tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<hr />

								<h4>About Us</h4>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

							</aside></div>
					-->

					</div>


				</div>

			</div>

@endsection

@section('js')

@endsection

@section('css')

@endsection