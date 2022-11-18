
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
                    <span class="pre-title">All Years</span>
                    <h3 class="title">Select Year To Discover More </h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--25">

            @foreach ($years as $year)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card service-card-1 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('home.topics' , $year->id) }}">
                                    <img src="{{ asset('Front/assets/images/category/category-01/category-02.jpg') }}" alt="Service Images">
                                </a>
                            </div>

                            <div class="content">
                                <span class="course-total">{{ $year->topics_count }} Topics</span>
                                <h6 class="title"><a href="{{ route('home.topics' , $year->id) }}">{{ $year->name }}</a></h6>
                                <p class="description">{{ $year->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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

<!-- Start Intructor Area  -->
<div class="edu-instructor-area eduvibe-home-one-instructor edu-section-gap bg-color-primary">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-white text-center">
                    <span class="pre-title">Team Member</span>
                    <h3 class="title">Meet Our Team</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            @forelse ($members as $member)
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                        <div class="edu-instructor">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="instructor-profile.html">
                                        <img src="{{ asset('storage/'. $member->image) }}" alt="team images">
                                    </a>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a href="#">{{ $member->name }}</a></h5>
                                    <span class="desc">{{ $member->description }}</span>
                                    <div class="team-share-info bg-transparent">
                                        @if ($member->social_links['facebook'])
                                            <a class="facebook" href="{{$member->social_links['facebook']}}"><i class="icon-Fb"></i></a>
                                        @endif
                                        @if ($member->social_links['email'])
                                            <a class="facebook" href="mailto:{{$member->social_links['email']}}"><i class="ri-mail-fill"></i></a>
                                        @endif
                                        @if ($member->social_links['phone'])
                                            <a class="facebook" href="tel:{{$member->social_links['phone']}}"><i class="ri-phone-fill"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->

            @empty
                <div>
                    <h4>There isn't any team member yet !</h4>
                </div>
            @endforelse
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


@endsection

