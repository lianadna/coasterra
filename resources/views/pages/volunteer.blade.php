@extends('layout.layout')

@php
    $title='Volunteers';
    $subTitle='We Are Friends';
@endphp

@section('content')

	<!-- volunteer-section start -->
	<section class="volunteer-section p-t-100">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-17.webp') }}" alt="thumb-17">
							</div>
							<div class="author-info">
								<h5>Joshua Sendu</h5>
								<p>CEO-Founder</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-18.webp') }}" alt="thumb-18">
							</div>
							<div class="author-info">
								<h5>John Maxwell</h5>
								<p>Team Leader</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-19.webp') }}" alt="thumb-19">
							</div>
							<div class="author-info">
								<h5>Bm Ashik (Moni)</h5>
								<p>Sr. Volunteer</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-20.webp') }}" alt="thumb-20">
							</div>
							<div class="author-info">
								<h5>Denial Pasha</h5>
								<p>Volunteer</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-78.webp') }}" alt="thumb-78">
							</div>
							<div class="author-info">
								<h5>Michael Karen</h5>
								<p>CEO-Founder</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-79.webp') }}" alt="thumb-79">
							</div>
							<div class="author-info">
								<h5>Jessica Lisa</h5>
								<p>CEO-Founder</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-80.webp') }}" alt="thumb-80">
							</div>
							<div class="author-info">
								<h5>Thomas Anthony</h5>
								<p>Sr. Volunteer</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 m-b-30">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb">
								<img src="{{ asset('assets/img/thumbs/thumb-81.webp') }}" alt="thumb-81">
							</div>
							<div class="author-info">
								<h5>Brandon Samuel</h5>
								<p>Volunteer</p>
							</div>
						</a>
						<div class="socials">
							<button class="share-button">
								<i class="fa-light fa-share-nodes"></i>
							</button>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section start -->

	<!-- volunteer-section start -->
	<section class="volunteer-cta-section p-t-80 p-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="volunteer-cta-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="content-wrap">
							<div class="common-title text-start">
								<h2>You can work with us if you want <span>😍</span></h2>
							</div>
							<div class="text">
								<p>Our volunteers collaborate as a team to support environmental projects, restore habitats, and educate communities. Together, we make a positive impact for a greener future.</p>
							</div>
							<div class="blog-btn">
								<a href="{{ route(('beVolunteer')) }}" class="e-primary-btn has-icon">
									Become a Volunteer
									<span class="icon-wrap">
                                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
						</div>
						<div class="thumb-wrap">
							<img src="{{ asset('assets/img/thumbs/thumb-82.webp') }}" alt="thumb-82">
						</div>
						<div class="c-shape-1">
							<img src="{{ asset('assets/img/shapes/shape-33.webp') }}" alt="shape-33">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section end -->

@endsection