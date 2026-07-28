@extends('layout.layout')

@php
    $title='Volunteer Details';
    $subTitle='Volunteer Details';
@endphp

@section('content')

	<!-- volunteer-details-section start -->
	<section class="volunteer-details-section p-t-130 p-b-120">
		<div class="container">
			<div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<div class="col-xl-5">
					<div class="volunteer-detail-card">
						<div class="thumb">
							<a href="{{ route('volunteer') }}">
								<img src="{{ asset('assets/img/thumbs/thumb-83.webp') }}" alt="thumb-83">
							</a>
							<div class="social-links">
								<a href="https://facebook.com">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="https://twitter.com">
									<i class="fab fa-x-twitter"></i>
								</a>
								<a href="https://www.instagram.com">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="https://linkedin.com">
									<i class="fa-brands fa-linkedin-in"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="volunteer-detail-content">
						<div class="content-wrap">
							<h4 class="subtitle">My Name is,</h4>
							<h3 class="title">BM Ashik (Moni)</h3>
							<p>Senior Volunteer</p>
						</div>
						<div class="details-wrap">
							<div class="info">
								<p>Occupation:</p>
								<span>Student</span>
							</div>
							<div class="info">
								<p>Experience:</p>
								<span>10 Years</span>
							</div>
							<div class="info">
								<p>Email:</p>
								<span>Roshua10@gmail.com</span>
							</div>
							<div class="info">
								<p>Phone:</p>
								<span>+855 (2669) 1234</span>
							</div>
						</div>
						<div class="content-wrap">
							<h3 class="title style-2">Summary</h3>
							<p>
								Hello Friend, My name is Bm Ashik (Moni). As an ecology specialist, I am involved in field research, data analysis, developing conservation strategies, and sharing scientific knowledge with the public and policymakers. Collaboration with biologists, geologists, and other environmental experts helps us achieve our mission of protecting nature and promoting sustainability.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-details-section end -->

@endsection