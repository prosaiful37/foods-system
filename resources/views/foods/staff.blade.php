@extends('foods.layouts.app')

@section('main-content')

<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('staff') }}">Staff</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="chef">
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="foods/images/chef-1.jpg">
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="foods/images/chef-2.jpg">
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="foods/images/chef-3.jpg">
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="foods/images/chef-4.jpg">
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

@endsection 