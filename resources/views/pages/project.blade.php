@extends('layout.layout')

@php
    $title='Projects';
    $subTitle='Our Projects';
@endphp

@section('content')

	<!-- services-section start -->
	<section class="services-section p-t-100 p-b-120">
		<div class="container">
			<div class="row justify-content-center text-center m-b-50 m-b-xs-40">
				<div class="col-xl-8">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<h2>Projects We Have Completed</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-69.webp') }}"></a>
							<div class="tag">
								<p>No - 02</p>
							</div>
							<div class="content">
								<h5>Forest Cleaning</h5>
								<p>Our forest cleaning projects remove litter, restore habitats, and promote biodiversity through community action.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-70.webp') }}"></a>
							<div class="tag">
								<p>No - 03</p>
							</div>
							<div class="content">
								<h5>Waste Management</h5>
								<p>Our waste management initiatives reduce landfill, increase recycling, and educate communities about sustainable practices.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-71.webp') }}"></a>
							<div class="tag">
								<p>No - 02</p>
							</div>
							<div class="content">
								<h5>Forest Cleaning</h5>
								<p>Our forest cleaning projects remove litter, restore habitats, and promote biodiversity through community action.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-72.webp') }}"></a>
							<div class="tag">
								<p>No - 02</p>
							</div>
							<div class="content">
								<h5>Forest Cleaning</h5>
								<p>Our forest cleaning projects remove litter, restore habitats, and promote biodiversity through community action.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-73.webp') }}"></a>
							<div class="tag">
								<p>No - 02</p>
							</div>
							<div class="content">
								<h5>Forest Cleaning</h5>
								<p>Our forest cleaning projects remove litter, restore habitats, and promote biodiversity through community action.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 m-b-30">
					<div class="project-card style-2 style-service">
						<div class="thumb">
							<a href="{{ route(('projectDetails')) }}"><img alt="thumb-63" src="{{ asset('assets/img/thumbs/thumb-74.webp') }}"></a>
							<div class="tag">
								<p>No - 02</p>
							</div>
							<div class="content">
								<h5>Forest Cleaning</h5>
								<p>Our forest cleaning projects remove litter, restore habitats, and promote biodiversity through community action.</p>
								<div class="join-us">
									<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center text-center m-t-20">
				<div class="col-xl-6">
					<div class="project-pagination">
						<ul>
							<li class="active">
								<a href="#">01</a>
							</li>
							<li>
								<a href="#">02</a>
							</li>
							<li>
								<a href="#">03</a>
							</li>
							<li class="icon">
								<a href="#"><i class="fa-regular fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services-section end -->

@endsection

