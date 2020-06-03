<!-- 09-07-19 -->
@extends('frontend.app')
@section('main_content')
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<!-- 17-07-19 -->
							<h4>The <strong>Office</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong>{{$settings->address}}</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> {{$settings->phone}} </li>
								<li><i class="fa fa-phone"></i> <strong>Fax:</strong> {{$settings->fax}} </li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:{{$settings->mail}}"> {{$settings->mail}} </a></li>
							</ul>

							<hr />

							<!--17-07-19 -->
							<h4>Social Media</h4>
							<ul class="social-icons">
							<li class="facebook"><a href="{{$settings->facebook}}" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="{{$settings->twitter}}" target="_blank" title="Twitter">Twitter</a></li>
							<li class="instagram"><a href="{{$settings->instagram}}" target="_blank" title="instagram">Instagram</a></li>
							<li class="youtube"><a href="{{$settings->youtube}}" target="_blank" title="youtube">Youtube</a></li>
						</ul>

						</div>

					</div>

				</div>

			</div>

@endsection

@section('css')

@endsection

@section('js')


@endsection