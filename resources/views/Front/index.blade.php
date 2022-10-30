
@extends('Front.layouts.app')
@section('content')
<!-- Start Sldier Area  -->
<div class="slider-area banner-style-1 bg-image height-940 d-flex align-items-center">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5 row--40 align-items-center">
            <div class="order-2 order-xl-1 col-lg-12 col-xl-6">
                <div class="inner">
                    <div class="content">
                        <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Excellence in Education</span>
                        <h1 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">Start Better Learning Future From Here</h1>
                        <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Learning is a life-long journey that in fact we never find the terminate stop. Stop searching, enjoy the process.</p>
                        <div class="read-more-btn" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a class="edu-btn" href="#">Get Started Today <i class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 order-xl-2 col-lg-12 col-xl-6 banner-right-content">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="edu-card card-type-6 radius-small" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html"><img class="w-100" src="{{ asset('Front/assets/images/banner/banner-01/banner-course.jpg') }}" alt="Course Meta" /></a>
                                    <div class="top-position status-group left-top"><span class="eduvibe-status status-01 bg-primary-color">UI Design</span></div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-04">
                                        <li><i class="icon-file-list-3-line"></i>39 Lessons</li>
                                        <li><i class="icon-time-line"></i>8 Hours 28 min</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Learning How To Write As A Professional Author</a></h6>
                                    <div class="card-bottom">
                                        <p>Nunc laoreet, lectue dapibus maximus sapien and tincidunted nequed for an finibu euarcu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-shop" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail"><img src="{{ asset('Front/assets/images/banner/banner-01/workshop.png') }}" alt="Workshop Images" /></div>
                                <div class="content">
                                    <h6 class="title">Design Workshop</h6>
                                    <span class="time">Today at 6:00 am</span>
                                    <div>
                                        <a class="edu-btn btn-secondary btn-small" href="event-details.html">Join Now<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="video-thumbnail eduvibe-hero-one-video">
                            <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <img class="w-100" src="{{ asset('Front/assets/images/banner/banner-01/video-image.png') }}" alt="Video Images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape shape-1"><img src="{{ asset('Front/assets/images/shapes/shape-01.png') }}" alt="Shape Thumb" /></div>
            <div class="shape shape-2"><img src="{{ asset('Front/assets/images/shapes/shape-02.png') }}" alt="Shape Thumb" /></div>
            <div class="shape shape-3"><img src="{{ asset('Front/assets/images/shapes/shape-03.png') }}" alt="Shape Thumb" /></div>
            <div class="shape shape-4"><img src="{{ asset('Front/assets/images/shapes/shape-04.png') }}" alt="Shape Thumb" /></div>
            <div class="shape shape-5"><img src="{{ asset('Front/assets/images/shapes/shape-05.png') }}" alt="Shape Thumb" /></div>
            <div class="shape shape-6"><img src="{{ asset('Front/assets/images/shapes/shape-05-05.png') }}" alt="Shape Thumb" /></div>
        </div>
        <div class="shape-round"><img src="{{ asset('Front/assets/images/banner/banner-01/shape-27.png') }}" alt="Shape Images" /></div>
    </div>
    <div class="scroll-down-btn">
        <a class="round-btn" href="#about-us"><i class="icon-arrow-down-s-line"></i></a>
    </div>
</div>
<!-- End Sldier Area  -->

<!-- Start About Area  -->
<div id="about-us" class="edu-about-area about-style-1 edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="about-image-gallery">
                    <img class="image-1" src="{{ asset('Front/assets/images/about/about-09/about-image-01.jpg') }}" alt="About Main Thumb" />
                    <div class="image-2"><img src="{{ asset('Front/assets/images/about/about-09/about-image-02.jpg') }}" alt="About Parallax Thumb" /></div>
                    <div class="badge-inner"><img class="image-3" src="{{ asset('Front/assets/images/about/about-09/badge.png') }}" alt="About Circle Thumb" /></div>
                    <div class="shape-image shape-image-1"><img src="{{ asset('Front/assets/images/shapes/shape-04-01.png') }}" alt="Shape Thumb" /></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner">
                    <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">About Us</span>
                        <h3 class="title">Creating A Community Of Life Long Learners</h3>
                    </div>
                    <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc null liobortis nibh porttitor. Facilisi arcu, nibh vel risus, morbi pharetra.
                    </p>
                    <div class="about-feature-list">
                        <!-- Start Single Feature  -->
                        <div class="our-feature" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-Hand---Book"></i>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-title">Flexible Classes</h6>
                                <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                            </div>
                        </div>
                        <!-- End Single Feature  -->

                        <!-- Start Single Feature  -->
                        <div class="our-feature" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-Campus"></i>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-title">Learn From Anywhere</h6>
                                <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                    </div>
                    <div class="read-more-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="edu-btn" href="#">Know About Us<i class="icon-arrow-right-line-right"></i></a>
                    </div>
                    <div class="shape shape-6 about-parallax-2 d-xl-block d-none">
                        <img src="{{ asset('Front/assets/images/shapes/shape-07.png') }}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Service Area  -->
<div class="home-one-cat edu-service-area service-wrapper-1 edu-section-gap bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Course Categories</span>
                    <h3 class="title">Popular Topics To Learn</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--25">

            <!-- Start Service Card  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-1 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="service-details.html">
                                <img src="{{ asset('Front/assets/images/category/category-01/category-01.jpg') }}" alt="Service Images">
                            </a>
                        </div>
                        <div class="content">
                            <span class="course-total">23 Course</span>
                            <h6 class="title"><a href="service-details.html">Graphics Design</a></h6>
                            <p class="description">Lorem Ipsum is simply for this dummy text of the printing</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Service Card  -->

            <!-- Start Service Card  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-1 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="service-details.html">
                                <img src="{{ asset('Front/assets/images/category/category-01/category-02.jpg') }}" alt="Service Images">
                            </a>
                        </div>
                        <div class="content">
                            <span class="course-total">23 Course</span>
                            <h6 class="title"><a href="service-details.html">Business Analysis</a></h6>
                            <p class="description">Lorem Ipsum is simply for this dummy text of the printing</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Service Card  -->

            <!-- Start Service Card  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-1 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="service-details.html">
                                <img src="{{ asset('Front/assets/images/category/category-01/category-03.jpg') }}" alt="Service Images">
                            </a>
                        </div>
                        <div class="content">
                            <span class="course-total">36 Course</span>
                            <h6 class="title"><a href="service-details.html">Data Science</a></h6>
                            <p class="description">Lorem Ipsum is simply for this dummy text of the printing</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Service Card  -->

            <!-- Start Service Card  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-1 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="service-details.html">
                                <img src="{{ asset('Front/assets/images/category/category-01/category-04.jpg') }}" alt="Service Images">
                            </a>
                        </div>
                        <div class="content">
                            <span class="course-total">42 Course</span>
                            <h6 class="title"><a href="service-details.html">Architecture</a></h6>
                            <p class="description">Lorem Ipsum is simply for this dummy text of the printing</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Service Card  -->

        </div>
        <div class="row text-center mt--60">
            <div class="col-lg-12">
                <div class="load-more-btn">
                    <a class="edu-btn" href="course-details.html">All Categories<i
                    class="icon-arrow-right-line-right"></i></a>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('Front/assets/images/shapes/shape-03-01.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('Front/assets/images/shapes/shape-08.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('Front/assets/images/shapes/shape-04-01.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('Front/assets/images/shapes/shape-03-02.png') }}" alt="Shape Thumb" />
            </div>
        </div>

    </div>
</div>
<!-- End Service Area  -->

<!-- Start Course Area  -->
<div class="edu-course-area eduvibe-home-one-course course-wrapper-1 edu-section-gap bg-color-white">
    <div class="wrapper">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Popular Courses</span>
                        <h3 class="title">Featured On This Month</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-01.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 9
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-1.jpg') }}" alt="Author Images">
                                                <span class="author-title">James Carlson</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(4.9)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">Personal Finance: Financial Security Thinking
                                        &
                                        Principles</a></h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>190 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>29 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$29.00 USD</div>
                                        <div class="price old-price">$39.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-02.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 12
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-2.jpg') }}" alt="Author Images">
                                                <span class="author-title">Nancy Phipps</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(4.9)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">Grow Personal Financial Security Thinking &
                                        Principles</a></h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>260 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>29 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$55.00 USD</div>
                                        <div class="price old-price">$65.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-03.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 26
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-6.jpg') }}" alt="Author Images">
                                                <span class="author-title">Linda Bacote</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(5.0)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">Educating Through Christ to Learn And to Serve</a>
                                </h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>763 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>25 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$46.00 USD</div>
                                        <div class="price old-price">$88.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-04.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 15
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-4.jpg') }}" alt="Author Images">
                                                <span class="author-title">Alice McCoy</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(4.9)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">Open Programming Courses for Everyone: Python</a></h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>286 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>61 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$56.00 USD</div>
                                        <div class="price old-price">$65.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-05.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 18
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-1.jpg') }}" alt="Author Images">
                                                <span class="author-title">James Carlson</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(4.7)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">Great Things Come From a Small Package</a></h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>800 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>40 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$45.00 USD</div>
                                        <div class="price old-price">$59.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-2 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('Front/assets/images/course/course-01/course-06.jpg') }}" alt="Course Meta">
                                </a>
                                <div class="top-position status-group left-top">
                                    <span class="eduvibe-status status-02"><i class="icon-time-line"></i> 9
                                        Hours</span>
                                </div>
                                <div class="wishlist-top-right">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('Front/assets/images/instructor/instructor-small/instructor-2.jpg') }}" alt="Author Images">
                                                <span class="author-title">Nancy Phipps</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(5.0)</span>
                                    </div>
                                </div>
                                <h6 class="title"><a href="course-details.html">We Prepare Students for College And Beyond</a></h6>
                                <ul class="edu-meta meta-01">
                                    <li><i class="icon-group-line"></i>800 Students</li>
                                    <li><i class="icon-file-list-4-line"></i>58 Lessons</li>
                                </ul>
                                <div class="card-bottom">
                                    <div class="price-list price-style-01">
                                        <div class="price current-price">$39.00 USD</div>
                                        <div class="price old-price">$49.00 USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="load-more-btn text-center">
                        <a class="edu-btn" href="course-style-3.html">View All Courses<i class="icon-arrow-right-line-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('Front/assets/images/shapes/shape-09.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('Front/assets/images/shapes/shape-10.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('Front/assets/images/shapes/shape-11.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="{{ asset('Front/assets/images/shapes/shape-12.png') }}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Course Area  -->

<!-- Start Testimonial Area  -->
<div class="eduvibe-testimonial-one edu-testimonial-area edu-section-gap bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Testimonial</span>
                    <h3 class="title">What Our Student Says</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--25">
            <div class="col-lg-6 col-12">
                <div class="satisfied-learner">
                    <div class="thumbnail">
                        <img src="{{ asset('Front/assets/images/testimonial-section/testimonial-01.jpg') }}" alt="Education Images">
                    </div>
                    <div class="trophy-content bounce-slide">
                        <div class="icon">
                            <img src="{{ asset('Front/assets/images/testimonial-section/trophy.png') }}" alt="Trophy Images">
                        </div>
                        <div class="content">
                            <h6 class="text">50K+</h6>
                            <span>Satisfied Learners</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="testimonial-activation testimonial-item-1 testimonial-style-1 edu-slick-button slick-button-left">

                    <!-- Start Single Testimonial  -->
                    <div class="single-testimonial">
                        <div class="inner">
                            <div class="quote-sign">
                                <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/quote.png') }}" alt="Quote Images">
                            </div>
                            <p class="description">“ It is distracted by the readable content of page when
                                looking at its layout. The point of using Ipsum is that it normal make for
                                distribution of letters, as opposed to using content here it look like
                                readable English Gravida orci vitae at aliquam.</p>
                            <div class="client-information">
                                <div class="thumb">
                                    <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/client-01.png') }}" alt="Client Images">
                                </div>
                                <div class="info">
                                    <h5 class="title">Sophie Moore</h5>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-testimonial">
                        <div class="inner">
                            <div class="quote-sign">
                                <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/quote.png') }}" alt="Quote Images">
                            </div>
                            <p class="description">“ Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo perferendis accusantium ab temporibus possimus vel atque doloribus at voluptatum sapiente consectetur, explicabo dicta libero architecto beatae vitae voluptatibus corporis esse.</p>
                            <div class="client-information">
                                <div class="thumb">
                                    <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/client-02.png') }}" alt="Client Images">
                                </div>
                                <div class="info">
                                    <h5 class="title">Lorraine Raines</h5>
                                    <span class="designation">WordPress Expert</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-testimonial">
                        <div class="inner">
                            <div class="quote-sign">
                                <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/quote.png') }}" alt="Quote Images">
                            </div>
                            <p class="description">“ Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus.</p>
                            <div class="client-information">
                                <div class="thumb">
                                    <img src="{{ asset('Front/assets/images/testimonial/testimonial-01/client-03.png') }}" alt="Client Images">
                                </div>
                                <div class="info">
                                    <h5 class="title">David Bard</h5>
                                    <span class="designation">JavaScript Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('Front/assets/images/shapes/shape-13.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('Front/assets/images/shapes/shape-13-01.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('Front/assets/images/shapes/shape-04.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('Front/assets/images/shapes/shape-02-01.png') }}" alt="Shape Thumb" />
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area  -->

<!-- Start Intructor Area  -->
<div class="edu-instructor-area eduvibe-home-one-instructor edu-section-gap bg-color-primary">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-white text-center">
                    <span class="pre-title">Team Member</span>
                    <h3 class="title">Meet Our Instructor</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('Front/assets/images/instructor/instructor-03/instructor-1.jpg') }}" alt="team images">
                                </a>
                            </div>
                            <div class="edu-instructor-info">
                                <h5 class="title"><a href="instructor-profile.html">James Carlson</a></h5>
                                <span class="desc">WordPress Expert</span>
                                <div class="team-share-info bg-transparent">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Instructor Grid  -->

            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible eduvibe-hover-active">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('Front/assets/images/instructor/instructor-03/instructor-2.jpg') }}" alt="team images">
                                </a>
                            </div>
                            <div class="edu-instructor-info">
                                <h5 class="title"><a href="instructor-profile.html">Nancy Phipps</a></h5>
                                <span class="desc">Digital Marketer</span>
                                <div class="team-share-info bg-transparent">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Instructor Grid  -->

            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('Front/assets/images/instructor/instructor-03/instructor-3.jpg') }}" alt="team images">
                                </a>
                            </div>
                            <div class="edu-instructor-info">
                                <h5 class="title"><a href="instructor-profile.html">Troy Hall</a></h5>
                                <span class="desc">PHP Expert</span>
                                <div class="team-share-info bg-transparent">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->

            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('Front/assets/images/instructor/instructor-03/instructor-4.jpg') }}" alt="team images">
                                </a>
                            </div>
                            <div class="edu-instructor-info">
                                <h5 class="title"><a href="instructor-profile.html">Isabelle Bruner</a></h5>
                                <span class="desc">UI Designer</span>
                                <div class="team-share-info bg-transparent">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="{{ asset('Front/assets/images/shapes/shape-03-03.png') }}" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="{{ asset('Front/assets/images/shapes/shape-02-02.png') }}" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>

<!-- End Intructor Area  -->

<!-- Start Feature Area  -->
<div class="edu-feature-area eduvibe-home-one-video edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row row--35">
            <div class="col-lg-5 col-12 order-2 order-lg-1">
                <div class="inner mt_md--40 mt_sm--40">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Why Choose US</span>
                        <h3 class="title">Our Core Features</h3>
                    </div>
                    <div class="feature-list-wrapper mt--10">
                        <!-- Start Feature List  -->
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-student"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Flexible Classes</h6>
                                <p>Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim
                                </p>
                            </div>
                        </div>
                        <!-- End Feature List  -->

                        <!-- Start Feature List  -->
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-square"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Offline Mode</h6>
                                <p>Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim
                                </p>
                            </div>
                        </div>
                        <!-- End Feature List  -->

                        <!-- Start Feature List  -->
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-research"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Flexible Learning</h6>
                                <p>Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim
                                </p>
                            </div>
                        </div>
                        <!-- End Feature List  -->

                        <!-- Start Feature List  -->
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-clock"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Educator Support</h6>
                                <p>Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim
                                </p>
                            </div>
                        </div>
                        <!-- End Feature List  -->
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-12 order-1 order-lg-2">
                <div class="feature-thumbnail">
                    <div class="main-image video-popup-wrapper video-popup-two">
                        <img src="{{ asset('Front/assets/images/videopopup/choose-us-image-01.jpg') }}" alt="Choose Us Images">
                        <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top btn-large video-popup-activation eduvibe-video-play-icon color-secondary">
                            <span class="play-icon"></span>
                        </a>
                    </div>
                    <div class="circle-image">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('Front/assets/images/shapes/shape-14.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('Front/assets/images/shapes/shape-11-01.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('Front/assets/images/shapes/shape-15.png') }}" alt="Shape Thumb" />
            </div>
        </div>

    </div>
</div>
<!-- End Feature Area  -->

<!-- Start Newsletter Area  -->
<div class="edu-newsletter-area newsletter-style-1 edu-section-gap bg-color-primary">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-center">
                    <div class="section-title text-white text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Subscribe Newsletter</span>
                        <h3 class="title">Get Every Latest News</h3>
                    </div>
                    <div class="newsletter-form newsletter-form-style-1 mt--60">
                        <div class="input-box">
                            <input type="email" placeholder="Enter your mail address">
                            <div class="mail-icon">
                                <i class="icon-mail-open-line"></i>
                            </div>
                            <button class="send-button"><i class="icon-send-plane-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('Front/assets//images/shapes/shape-03-04.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('Front/assets//images/shapes/shape-16.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('Front/assets//images/shapes/shape-13-02.png') }}" alt="Shape Thumb" />
            </div>
        </div>

    </div>
</div>
<!-- End Newsletter Area  -->

<!-- Start Blog Area  -->
<div class="edu-blog-area eduvibe-home-one-blog edu-section-gap bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">BLog & News</span>
                    <h3 class="title">Trending on Our Blogs</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="read-more-btn text-start text-lg-end">
                    <a class="edu-btn" href="blog-standard.html">Read More Blogs<i class="icon-arrow-right-line-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row g-5 mt--30">
            <!-- Start Blog Grid  -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-type-3 radius-small bg-color-white">
                    <div class="inner">
                        <div class="content">
                            <div class="status-group">
                                <a href="#" class="eduvibe-status status-05 color-primary w-800">EDUCATION</a>
                            </div>
                            <h4 class="title"><a href="blog-details.html">10 Things Successful Which Makes You
                                    Different From Others</a></h4>
                            <div class="blog-card-bottom">
                                <ul class="blog-meta">
                                    <li><i class="icon-calendar-2-line"></i>06 Nov, 2022</li>
                                    <li><i class="icon-user-line"></i>Posted By <a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <a href="blog-details.html">
                                <img src="{{ asset('Front/assets/images/blog/post-02/post-01.jpg') }}" alt="Blog Images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->

            <!-- Start Blog Grid  -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-type-3 bg-color-white radius-small">
                    <div class="inner">
                        <div class="content">
                            <div class="status-group">
                                <a href="#" class="eduvibe-status status-05 color-primary w-800">EDUCATION</a>
                            </div>
                            <h4 class="title"><a href="blog-details.html">How To Start Learn Online Study
                                    From Your Home</a></h4>
                            <div class="blog-card-bottom">
                                <ul class="blog-meta">
                                    <li><i class="icon-calendar-2-line"></i>06 Nov, 2022</li>
                                    <li><i class="icon-user-line"></i>Posted By <a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <a href="blog-details.html">
                                <img src="{{ asset('Front/assets/images/blog/post-02/post-02.jpg') }}" alt="Blog Images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('Front/assets/images/shapes/shape-04-02.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('Front/assets/images/shapes/shape-15-02.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('Front/assets/images/shapes/shape-13-03.png') }}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('Front/assets/images/shapes/shape-17.png') }}" alt="Shape Thumb" />
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area  -->
@endsection

