@extends('layout.layout')

@php
    $title='Blog Grid';
    $subTitle='Blog Grid';
@endphp

@section('content')

	<!-- volunteer-section start -->
	<section class="blog-section p-t-120 p-b-120 p-t-lg-80 p-b-lg-80 p-t-md-60 p-b-md-60 p-t-xs-60 p-b-xs-60">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-32.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>24</h2>
								<h5>Feb</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											Sustainable Energy for All: Why Your Donation Matters
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-142.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>16</h2>
								<h5>Feb</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
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
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-135.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>09</h2>
								<h5>Feb</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											Breaking Down Climate Change: What You Need to Know
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-136.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>02</h2>
								<h5>Jan</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											10 Simple Ways to Live a Sustainable Lifestyle
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-137.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>05</h2>
								<h5>Jan</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											The Future of Renewable Energy: Trends and Innovations
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap">
                                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-138.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>13</h2>
								<h5>Jan</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											Wildlife Conservation: Why It Matters More Than Ever
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-139.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>30</h2>
								<h5>Dec</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											Water Conservation: Small Changes, Big Impact
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}" class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-140.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>26</h2>
								<h5>Dec</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											The Role of Technology in Fighting Climate Change
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}"
								   class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-141.webp') }}" alt="thumb"/>
							</a>
							<div class="event-date">
								<h2>17</h2>
								<h5>Mar</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i>
										<span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i>
										<span>Solar</span>
									</div>
								</div>
								<div class="title">
									<h3>
										<a href="{{ route(('blogDetails')) }}">
											From Trash to Treasure: Inspiring Recycling Stories
										</a>
									</h3>
								</div>
							</div>
							<div class="content-bottom">
								<a href="{{ route(('blogDetails')) }}"
										class="e-primary-btn has-icon has-small read-more-btn">
									Read More
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center text-center m-t-20" data-aos="fade-up" data-aos-duration="1000"
			     data-aos-delay="200">
				<div class="col-xl-6">
					<div class="project-pagination">
						<ul>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li class="icon"><a href="#"><i class="fa-regular fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section start -->

@endsection