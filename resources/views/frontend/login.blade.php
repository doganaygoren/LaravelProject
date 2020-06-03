@extends('frontend.app')
@section('main_content')

<!-- 09-08-19 -->
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Login</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<div class="row featured-boxes login">
								<div class="col-sm-6">
									<div class="featured-box featured-box-secundary default info-content">
										<div class="box-content">
											<h4>Existing User</h4>
											<form action="{{ url('login') }}" method="post" role="form">
												<div class="row">
													{{csrf_field()}}
													<div class="form-group">
														<div class="col-md-12">
															<label>E-mail Address</label>
															<input type="email" name="email" class="form-control input-lg" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<a class="pull-right" href="#">(Lost Password?)</a>
															<label>Password</label>
															<input type="password" name="password" class="form-control input-lg" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="remember-box checkbox">
															<label for="rememberme">
																<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
															</label>
														</span>
													</div>
													<div class="col-md-6">
														<input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="featured-box featured-box-secundary default info-content">
										<div class="box-content">
											<h4>Register An Account</h4>
											<form action=" {{route('register')}} " role="form" id="" method="post">
												
												{{csrf_field()}}
												
												<!--09-08-19 -->
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Name</label>
															<input type="text" name="name" class="form-control input-lg" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>E-mail Address</label>
															<input type="email" name="email" class="form-control input-lg" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Password</label>
															<input type="password" name="password" class="form-control input-lg" required>
														</div>
														<div class="col-md-6">
															<label>Re-enter Password</label>
															<input type="password" name="password_confirmation"  class="form-control input-lg" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<input type="submit" value="Register" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>
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