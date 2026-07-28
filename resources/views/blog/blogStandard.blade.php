@extends('layout.layout')

@php
    $title='Blog Standard';
    $subTitle='Blog Standard';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-duration="1000"
							data-aos-delay="600">
							<div class="blog-card-4 m-b-30">
								<div class="thumb">
									<a href="{{ route(('blogDetails')) }}">
										<img src="{{ asset('assets/img/thumbs/thumb-144.webp') }}" alt="thumb-1" />
									</a>
									<div class="category">
										<a href="{{ route(('blogDetails')) }}">Plantation</a>
									</div>
								</div>
								<div class="content">
									<div class="blog-info">
										<div class="publisher-info">
											<img src="{{ asset('assets/img/thumbs/thumb-143.webp') }}" alt="thumb" />
											<p>By Rebecca</p>
										</div>
										<div class="date">
											<i class="fa-light fa-calendar-days"></i>
											<p>12th Sep, 2024</p>
										</div>
										<div class="comment">
											<i class="fa-light fa-comments"></i>
											<p>02 Comments</p>
										</div>
										<div class="view">
											<i class="fa-light fa-eye"></i>
											<p>630 Views</p>
										</div>
									</div>
									<div class="title">
										<h3>
											<a href="{{ route(('blogDetails')) }}">
												Reforestation and Tree Planting Campaign 2025
											</a>
										</h3>
									</div>
									<div class="text">
										<p>
											Packages and web page editors now use Lorem Ipsum as
											their default model textlayout. The point of using are
											Ipsum is that it has a more-or-less normal
											distribution of letterng...
										</p>
									</div>
									<a href="{{ route(('blogDetails')) }}"
										class="e-primary-btn has-icon has-small read-more-btn">
										Read More
										<span class="icon-wrap">
											<span class="icon"><i class="fa-regular fa-arrow-right"></i><i
													class="fa-regular fa-arrow-right"></i></span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog-card-4 m-b-30">
								<div class="thumb">
									<a href="{{ route(('blogDetails')) }}">
										<img src="{{ asset('assets/img/thumbs/thumb-145.webp') }}" alt="thumb-1" />
									</a>
									<div class="category">
										<a href="{{ route(('blogDetails')) }}">Plantation</a>
									</div>
								</div>
								<div class="content">
									<div class="blog-info">
										<div class="publisher-info">
											<img src="{{ asset('assets/img/thumbs/thumb-143.webp') }}" alt="thumb" />
											<p>By Rebecca</p>
										</div>
										<div class="date">
											<i class="fa-light fa-calendar-days"></i>
											<p>12th Sep, 2024</p>
										</div>
										<div class="comment">
											<i class="fa-light fa-comments"></i>
											<p>02 Comments</p>
										</div>
										<div class="view">
											<i class="fa-light fa-eye"></i>
											<p>630 Views</p>
										</div>
									</div>
									<div class="title">
										<h3>
											<a href="{{ route(('blogDetails')) }}">
												Sustainable Energy for All: Why Your Donation
												Matters
											</a>
										</h3>
									</div>
									<div class="text">
										<p>
											Packages and web page editors now use Lorem Ipsum as
											their default model textlayout. The point of using are
											Ipsum is that it has a more-or-less normal
											distribution of letterng...
										</p>
									</div>
									<a href="{{ route(('blogDetails')) }}"
										class="e-primary-btn has-icon has-small read-more-btn">
										Read More
										<span class="icon-wrap">
											<span class="icon"><i class="fa-regular fa-arrow-right"></i><i
													class="fa-regular fa-arrow-right"></i></span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog-card-4 m-b-30">
								<div class="thumb">
									<a href="{{ route(('blogDetails')) }}">
										<img src="{{ asset('assets/img/thumbs/thumb-146.webp') }}" alt="thumb-1" />
									</a>
									<div class="category">
										<a href="{{ route(('blogDetails')) }}">Plantation</a>
									</div>
								</div>
								<div class="content">
									<div class="blog-info">
										<div class="publisher-info">
											<img src="{{ asset('assets/img/thumbs/thumb-143.webp') }}" alt="thumb" />
											<p>By Rebecca</p>
										</div>
										<div class="date">
											<i class="fa-light fa-calendar-days"></i>
											<p>12th Sep, 2024</p>
										</div>
										<div class="comment">
											<i class="fa-light fa-comments"></i>
											<p>02 Comments</p>
										</div>
										<div class="view">
											<i class="fa-light fa-eye"></i>
											<p>630 Views</p>
										</div>
									</div>
									<div class="title">
										<h3>
											<a href="{{ route(('blogDetails')) }}">
												From Trash to Treasure: Inspiring Recycling Stories
											</a>
										</h3>
									</div>
									<div class="text">
										<p>
											Packages and web page editors now use Lorem Ipsum as
											their default model textlayout. The point of using are
											Ipsum is that it has a more-or-less normal
											distribution of letterng...
										</p>
									</div>
									<a href="{{ route(('blogDetails')) }}"
										class="e-primary-btn has-icon has-small read-more-btn">
										Read More
										<span class="icon-wrap">
											<span class="icon"><i class="fa-regular fa-arrow-right"></i><i
													class="fa-regular fa-arrow-right"></i></span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog-card-4 m-b-50">
								<div class="thumb">
									<a href="{{ route(('blogDetails')) }}">
										<img src="{{ asset('assets/img/thumbs/thumb-144.webp') }}" alt="thumb-1" />
									</a>
									<div class="category">
										<a href="{{ route(('blogDetails')) }}">Plantation</a>
									</div>
								</div>
								<div class="content">
									<div class="blog-info">
										<div class="publisher-info">
											<img src="{{ asset('assets/img/thumbs/thumb-147.webp') }}" alt="thumb" />
											<p>By Rebecca</p>
										</div>
										<div class="date">
											<i class="fa-light fa-calendar-days"></i>
											<p>12th Sep, 2024</p>
										</div>
										<div class="comment">
											<i class="fa-light fa-comments"></i>
											<p>02 Comments</p>
										</div>
										<div class="view">
											<i class="fa-light fa-eye"></i>
											<p>630 Views</p>
										</div>
									</div>
									<div class="title">
										<h3>
											<a href="{{ route(('blogDetails')) }}">
												The Power of One: How Individual Actions Save the
												Planet
											</a>
										</h3>
									</div>
									<div class="text">
										<p>
											Packages and web page editors now use Lorem Ipsum as
											their default model textlayout. The point of using are
											Ipsum is that it has a more-or-less normal
											distribution of letterng...
										</p>
									</div>
									<a href="{{ route(('blogDetails')) }}"
										class="e-primary-btn has-icon has-small read-more-btn">
										Read More
										<span class="icon-wrap">
											<span class="icon"><i class="fa-regular fa-arrow-right"></i><i
													class="fa-regular fa-arrow-right"></i></span>
										</span>
									</a>
								</div>
							</div>
							<div class="project-pagination text-center m-b-30">
								<ul>
									<li class="active"><a href="#">01</a></li>
									<li><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li class="icon"><a href="#"><i class="fa-regular fa-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000"
							data-aos-delay="800">
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Search Here</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="search-bar">
									<input type="text" placeholder="Search Type.." />
									<i class="fa-solid fa-magnifying-glass"></i>
								</div>
								<div class="categories">
									<button>Forest</button>
									<button>Cleaning</button>
									<button>Plantation</button>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Recent Campaigns</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="recent-campaigns">
									<div class="campaign">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-121.webp') }}">
										</div>
										<div>
											<div class="date">
												<p>Plantation - Jun 13, 2024</p>
											</div>
											<div class="name">
												<a href="{{ route(('blogDetails')) }}">
													<h5>Sustainable Energy for All: Donation Matters</h5>
												</a>
											</div>
										</div>
									</div>

									<div class="campaign">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-122.webp') }}">
										</div>
										<div>
											<div class="date">
												<p>Forest - Jun 20, 2024</p>
											</div>
											<div class="name">
												<a href="{{ route(('blogDetails')) }}">
													<h5>Renewable Energy Technology of Secrets</h5>
												</a>
											</div>
										</div>
									</div>

									<div class="campaign">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-123.webp') }}">
										</div>
										<div>
											<div class="date">
												<p>Cleaning - Feb 09, 2024</p>
											</div>
											<div class="name">
												<a href="{{ route(('blogDetails')) }}">
													<h5>Nature’s Symphony: Exploring Ecology</h5>
												</a>
											</div>
										</div>
									</div>

									<div class="campaign campaign-last">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-124.webp') }}">
										</div>
										<div>
											<div class="date">
												<p>Forest - Jan 30, 2024</p>
											</div>
											<div class="name">
												<a href="{{ route(('blogDetails')) }}">
													<h5>Grow with Us: Tree Planting Day</h5>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Categories</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="detail-list">
									<ul>
										<li>
											<a href="{{ route('services') }}">
												Tree Plantation
												<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span>
											</a>
										</li>
										<li>
											<a href="{{ route('services') }}">Forest Pollution<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span></a>
										</li>
										<li>
											<a href="{{ route('services') }}">Dust Recycling<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span></a>
										</li>
										<li>
											<a href="{{ route('services') }}">Cleaning Ocean<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span></a>
										</li>
										<li>
											<a href="{{ route('services') }}">Plant Seedlings<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span></a>
										</li>
										<li>
											<a href="{{ route('services') }}">Solar Power Solution<span class="icon"><i
														class="fa-regular fa-arrow-up-right"></i></span></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="s-widget-wrap">
								<div class="detail-contact text-center">
									<div class="thumb">
										<img src="{{ asset('assets/img/shapes/shape-47.webp') }}" alt="shape" />
									</div>
									<div class="icon-info-wrap">
										<div class="icon-wrap">
											<div class="icon">
												<img src="{{ asset('assets/img/icons/icon-18.svg') }}" alt="icon" />
											</div>
											<div class="bar-wrap">
												<div class="bar-1"></div>
												<div class="bar-2"></div>
											</div>
										</div>
										<div class="info">
											<h3><a href="tel:+70264566579">+70 264 566 579</a></h3>
											<p>Need Help?</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-shape-1">
			<img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31" />
		</div>
	</section>
	<!-- services-details-section end -->

@endsection