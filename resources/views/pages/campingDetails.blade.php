@extends('layout.layout')

@php
    $title='Camping Details';
    $subTitle='Camping Details';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							<div class="thumb-wrap m-b-30">
								<img src="{{ asset('assets/img/thumbs/thumb-114.webp') }}" alt="thumb"/>
							</div>
							<div class="count-down-date m-b-20">
								<i class="fa-light fa-calendar-days"></i>
								<p>42 Days Left</p>
							</div>
							<div class="details-title m-b-15">
								<h2>Reforestation and Tree Planting Campaign 2025</h2>
							</div>
							<div class="detail-text m-b-30">
								<p>
									Our Reforestation and Tree Planting Campaign 2025 is dedicated to restoring forest ecosystems, increasing biodiversity, and combating climate change. Volunteers and donors help plant native trees, maintain saplings, and educate communities about sustainable forestry practices.
								</p>
							</div>
							<div class="donation-card m-b-50">
								<h4>Your support makes a lasting impact.</h4>
								<p>
									Every contribution helps us expand our tree planting efforts, provide tools and training, and ensure long-term care for new forests. Join us in building a greener future for all.
								</p>
								<div class="donation-wrap-2">
									<div class="left">
										<div class="d-top">
											<p>Donation Complete</p>
											<p>72%</p>
										</div>
										<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar" style="width: 72%"></div>
										</div>
										<div class="d-bottom">
											<div class="fund">
												<p>Raised: <span>$14,650</span></p>
												<p>-</p>
												<p>Goal: <span>$36,560</span></p>
											</div>
											<button class="d-wishlist">
												<i class="fa-regular fa-heart"></i>
												<span>259</span>
											</button>
										</div>
									</div>
									<a href="{{ route('donations') }}" class="right">
                                        <span class="icon"><i class="fa-solid fa-hand-holding-circle-dollar"></i></span>
										Donate Now
									</a>
								</div>
							</div>
							<div class="details-title m-b-15">
								<h2>About The Forest</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Our forest restoration activities include site preparation, planting native species, monitoring growth, and engaging local communities in stewardship. These efforts help create resilient habitats and support wildlife.
								</p>
							</div>
							<div class="list-wrapper m-b-40">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Promote ecological restoration and biodiversity.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Engage communities through education and volunteer programs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Scale impact by partnering with local organizations and stakeholders.</p>
									</li>
								</ul>
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Support renewable energy solutions to reduce environmental impact.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Train leaders to manage and sustain restoration projects.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Monitor ecological outcomes and adapt practices for success.</p>
									</li>
								</ul>
							</div>
							<div class="gallery-slider-active m-b-50">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gallery-pagination-wrap">
									<div class="gallery-pagination"></div>
								</div>
							</div>
							<div class="details-title-2 m-b-30">
								<h2>Recent Donors</h2>
								<div class="top-right">
									<img src="{{ asset('assets/img/authors/author-1.webp') }}" alt="authors"/>
									<div class="people-joined">
										<h5>162</h5>
										<span>People Donated</span>
									</div>
								</div>
							</div>
							<div class="donator-cards m-b-60">
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-115.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>Michael Floyd</h6>
									</div>
									<div class="date-of-donate">
										<p>Mar 18, 2024</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>$200</span></p>
									</div>
								</div>
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-116.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>Bm Ashik</h6>
									</div>
									<div class="date-of-donate">
										<p>Apr 20, 2024</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>$150</span></p>
									</div>
								</div>
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-117.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>Shuvo Islam</h6>
									</div>
									<div class="date-of-donate">
										<p>May 30, 2024</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>$400</span></p>
									</div>
								</div>
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-118.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>Sonar Chad</h6>
									</div>
									<div class="date-of-donate">
										<p>Mar 06, 2024</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>$300</span></p>
									</div>
								</div>
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-119.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>HM. Rony</h6>
									</div>
									<div class="date-of-donate">
										<p>Mar 10, 2024</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>$100</span></p>
									</div>
								</div>
							</div>
							<div class="comment-section">
								<div class="comments m-b-50">
									<div class="details-title m-b-50">
										<h2>Comments (02)</h2>
									</div>
									<div class="comment-wrap m-b-40">
										<div class="thumb">
											<img src="{{ asset('assets/img/thumbs/thumb-125.webp') }}" alt="thumb"/>
										</div>
										<div class="info">
											<div class="name">
												<p>Abraham John</p>
											</div>
											<div class="date">
												<p>February 03, 2024</p>
											</div>
											<div class="text">
												<p>
													Thank you for supporting our campaign—every tree planted helps restore the environment and benefits future generations.
												</p>
											</div>
											<a class="reply-btn"> Reply </a>
										</div>
									</div>
									<div class="comment-wrap">
										<div class="thumb">
											<img src="{{ asset('assets/img/thumbs/thumb-126.webp') }}" alt="thumb"/>
										</div>
										<div class="info">
											<div class="name">
												<p>BMW Group</p>
											</div>
											<div class="date">
												<p>March 04, 2024</p>
											</div>
											<div class="text">
												<p>
													Our project demonstrates how communities can work together to protect forests and promote sustainability.
												</p>
											</div>
											<a class="reply-btn"> Reply </a>
										</div>
									</div>
								</div>
								<div class="leave-comment m-b-60">
									<div class="details-title m-b-30">
										<h2>Leave a Comment</h2>
									</div>
									<form action="#">
										<div class="info-input m-b-20">
											<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jhon Abraham  "/>
											<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email Address"/>
										</div>
										<div class="m-b-20">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Say Something..." rows="4"></textarea>
										</div>
										<button type="submit" class="e-primary-btn has-icon">
											Send Message
											<span class="icon-wrap">
												<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
							<div class="detail-sidebar-inner">
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>
											<img src="{{ asset('assets/img/icons/icon-20.svg') }}" alt="icon"/>
											Organizer
										</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="organizer-info-wrap">
										<div class="thumb">
											<img src="{{ asset('assets/img/thumbs/thumb-120.webp') }}" alt="thumb"/>
										</div>
										<div class="name">
											<h3>Bm Ashik</h3>
										</div>
										<div class="text">
											<p>
												“Improve your scientific skills including research”
											</p>
										</div>
										<div class="divider"></div>
										<div class="date m-b-10">
											<i class="fa-light fa-calendar-days"></i>
											<p>24th Oct, 2024</p>
										</div>
										<div class="location">
											<i class="fa-light fa-location-dot"></i>
											<p>Grant Ave Park (Carteret)</p>
										</div>
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
												<img src="{{ asset('assets/img/thumbs/thumb-121.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Plantation- Jun 13, 2024</p>
												</div>
												<div class="name">
													<h5>
														Sustainable Energy for All: Donation Matters
													</h5>
												</div>
											</div>
										</div>
										<div class="campaign">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-122.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Forest- Jun 20, 2024</p>
												</div>
												<div class="name">
													<h5>Renewable Energy Technology of Secrets</h5>
												</div>
											</div>
										</div>
										<div class="campaign">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-123.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Cleaning - Feb 09, 2024</p>
												</div>
												<div class="name">
													<h5>Nature’s Symphony: Exploring Ecology</h5>
												</div>
											</div>
										</div>
										<div class="campaign campaign-last">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-124.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Forest - Jan 30, 2024</p>
												</div>
												<div class="name">
													<h5>Grow with Us: Tree Planting Day</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="s-widget-wrap">
									<div class="w-title">
										<h3>Share This Project</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="socials">
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
												<i class="fab fa-linkedin-in"></i>
											</a>
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
			<img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31"/>
		</div>
	</section>
	<!-- services-details-section end -->

@endsection