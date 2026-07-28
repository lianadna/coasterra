@extends('layout.layout')

@php
    $title='Blog Details';
    $subTitle='Blog Details';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-delay="600"
							data-aos-duration="1000">
							<div class="blog-card-5 m-b-40">
								<div class="thumb">
									<a href="{{ route(('blogGrid')) }}"><img alt="thumb-1"
											src="{{ asset('assets/img/thumbs/thumb-148.webp') }}"></a>
								</div>
								<div class="content">
									<div class="blog-info">
										<div class="publisher-info">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-143.webp') }}">
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
										<h3><a href="{{ route(('blogGrid')) }}">Reforestation and Tree Planting Campaign
												2025</a></h3>
									</div>
									<div class="text">
										<p class="m-b-15">
											Our 2025 Reforestation and Tree Planting Campaign brings together
											volunteers, local communities, and partners to restore native forests,
											improve biodiversity, and sequester carbon. This initiative focuses on
											planting resilient native species and providing long-term maintenance
											to ensure healthy growth.
										</p>
										<p>
											The campaign includes community training, seedling nurseries, and
											habitat restoration projects. By supporting reforestation efforts, we
											create healthier ecosystems, support wildlife, and build climate
											resilience for future generations.
										</p>
									</div>
								</div>
							</div>
							<div class="details-title m-b-15">
								<h2>How to Improve</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Improve reforestation outcomes by selecting native species,
									preparing the planting sites properly, and establishing regular
									monitoring and maintenance. Community engagement and local
									stewardship are essential for long-term success.
								</p>
							</div>
							<div class="list-wrapper m-b-35">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Promote native habitat restoration and biodiversity.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Engage local communities through education and volunteer programs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Scale projects by partnering with local NGOs and stakeholders.</p>
									</li>
								</ul>
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Support renewable energy solutions to reduce project emissions.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Train community leaders to manage and sustain restoration efforts.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Measure ecological impact and adapt practices based on monitoring.</p>
									</li>
								</ul>
							</div>
							<div class="gallery-slider-active m-b-50">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gallery-pagination-wrap">
									<div class="gallery-pagination"></div>
								</div>
							</div>
							<div class="testimonial-wrap m-b-60">
								<div class="icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-17.svg') }}"></div>
								<p class="review">
									"Working with the reforestation team was inspiring — we saw
									seedlings grow into saplings within months and local wildlife begin
									to return. The project’s community focus made it truly sustainable."
								</p>
								<div class="author">
									<h3>Rebecca Moore</h3>
									<p>Community Coordinator</p>
								</div>
							</div>
							<div class="details-title m-b-15">
								<h2>Activities & Features</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Activities include planting days, invasive species removal, soil
									improvement, and public workshops on tree care and ecosystem
									stewardship. Volunteers receive training and tools to ensure safe
									and effective work.
								</p>
							</div>
							<div class="detail-thumb-wrap">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-150.webp') }}">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-149.webp') }}">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-151.webp') }}">
							</div>
							<div class="list-wrapper m-b-35">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>
											Local volunteers and partner organizations coordinate planting
											schedules and provide ongoing care for young trees to maximize
											survival rates.
										</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>
											Whether you are a volunteer, donor, or partner, your participation
											helps scale conservation impact and restore natural habitats.
										</p>
									</li>
								</ul>
							</div>
							<div class="divider-2"></div>
							<div class="blog-tags">
								<div class="tag-wrap">
									<p>Tags:</p>
									<div class="tags">
										<button>Forest</button>
										<button>Pollution</button>
										<button>Plantation</button>
									</div>
								</div>
								<div class="socials">
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
										<a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a>
										<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										<a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
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
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-125.webp') }}">
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
													Thank you for your thoughtful contributions — every tree
													planted and every hour volunteered helps rebuild healthy
													ecosystems.
												</p>
											</div>
											<a class="reply-btn">Reply</a>
										</div>
									</div>
									<div class="comment-wrap">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-126.webp') }}">
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
													This initiative highlights practical steps communities can
													take to protect forests and promote biodiversity.
												</p>
											</div>
											<a class="reply-btn">Reply</a>
										</div>
									</div>
								</div>
								<div class="leave-comment m-b-60">
									<div class="details-title m-b-30">
										<h2>Leave a Comment</h2>
									</div>
									<form action="#">
										<div class="info-input m-b-20">
											<input class="form-control" id="exampleFormControlInput1"
												placeholder="Jhon Abraham" type="text">
											<input class="form-control" id="exampleFormControlInput2"
												placeholder="Email Address" type="email">
										</div>
										<div class="m-b-20">
											<textarea class="form-control" id="exampleFormControlTextarea1"
												placeholder="Say Something..." rows="4"></textarea>
										</div>
										<button class="e-primary-btn has-icon" type="submit">
											Send Message
											<span class="icon-wrap"><span class="icon"><i
														class="fa-regular fa-arrow-right"></i> <i
														class="fa-regular fa-arrow-right"></i></span></span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800"
							data-aos-duration="1000">
							<div class="detail-sidebar-inner">
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>Search Here</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="search-bar">
										<input placeholder="Search Type.." type="text">
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
												<a href="{{ route('services') }}">
													Forest Pollution
													<span class="icon"><i
															class="fa-regular fa-arrow-up-right"></i></span>
												</a>
											</li>
											<li>
												<a href="{{ route('services') }}">
													Dust Recycling
													<span class="icon"><i
															class="fa-regular fa-arrow-up-right"></i></span>
												</a>
											</li>
											<li>
												<a href="{{ route('services') }}">
													Cleaning Ocean
													<span class="icon"><i
															class="fa-regular fa-arrow-up-right"></i></span>
												</a>
											</li>
											<li>
												<a href="{{ route('services') }}">
													Plant Seedlings
													<span class="icon"><i
															class="fa-regular fa-arrow-up-right"></i></span>
												</a>
											</li>
											<li>
												<a href="{{ route('services') }}">
													Solar Power Solution
													<span class="icon"><i
															class="fa-regular fa-arrow-up-right"></i></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>Our Gallery</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="sidebar-gallery">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-134.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-131.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-132.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-133.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-130.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-129.webp') }}">
										</div>
									</div>
								</div>
								<div class="s-widget-wrap">
									<div class="w-title">
										<h3>Share With Everyone</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="socials">
										<div class="social-links">
											<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
											<a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a>
											<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
											<a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-shape-1"><img alt="shape-31" src="{{ asset('assets/img/shapes/shape-31.webp') }}"></div>
	</section>
	<!-- services-details-section end -->

@endsection