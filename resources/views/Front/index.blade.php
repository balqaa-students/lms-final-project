
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
                        <h1 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">Start Better Learning From Here</h1>
                        <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Learning is a life-long journey that in fact we never find the terminate stop. Stop searching, enjoy the process.</p>
                        <div class="read-more-btn" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a class="edu-btn" href="#years">Get Started Today <i class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 order-xl-2 col-lg-12 col-xl-6 banner-right-content">
                <div class="row g-5 justify-content-center">
                    <div class="col-6">
                        <div class="video-thumbnail eduvibe-hero-one-video">
                            <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <img class="w-100" src="{{ asset('Front/images/07.png') }}" alt="Video Images" />
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
                    <img class="image-1" src="{{ asset('assets/images/pic1.png') }}" alt="About Main Thumb" />
                    <div class="shape-image shape-image-1"><img src="{{ asset('Front/assets/images/shapes/shape-04-01.png') }}" alt="Shape Thumb" /></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner">
                    <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">About Us</span>
                        <h3 class="title">Welcome to our LMS</h3>
                    </div>
                    <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        "Speed Access" team has been able to help the IT College and its students by placing all the materials they need, making the students' learning path clear, easy, and uncomplicated.                     </p>
                    <div class="about-feature-list">
                        <!-- Start Single Feature  -->
                        <div class="our-feature" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <i class="icon-Hand---Book"></i>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-title">Flexible Access</h6>
                                <p class="feature-description">Easy access to study materials.</p>
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
                                <p class="feature-description">Allow students to access materials and complete their studies remotely, rather than having to be physically present on a campus or at a specific location. </p>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
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
<div class="home-one-cat edu-service-area service-wrapper-1 edu-section-gap bg-image" id="years">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
                                <a href="{{ route('home.topics' , $year->id) }}" style='height:200px' class=' d-block p-3'>
                                    <img src="{{ asset("assets/images/num$year->id.png") }}" alt="Service Images" class='img-fluid h-100'   >
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
                <div class="text-center text-white section-title">
                    <span class="pre-title">Team Member</span>
                    <h3 class="title">Meet Our Team</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20 justify-content-center">
            @forelse ($members as $member)
                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                        <div class="edu-instructor">
                            <div class="inner">
                                <div class="thumbnail" style="height: 250px; overflow: hidden;">
                                    <img src="{{ asset('storage/'. $member->image) }}" alt="team images" class="img-fluid" style="object-fit: cover">
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a href="#">{{ $member->name }}</a></h5>
                                    <span class="desc">{{ $member->description }}</span>
                                    <div class="bg-transparent team-share-info">
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
                <div class="text-center">
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
            <div class="order-2 col-lg-5 col-12 order-lg-1">
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
                                <h6 class="title">Flexible Access</h6>
                                <p>Easy access to study materials.</p>
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
                                <h6 class="title">mobile compatibility</h6>
                                <p>The ability to use on all devices
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
                                <h6 class="title">Time saving</h6>
                                <p>We are working to save students time in terms of obtaining materials
                                </p>
                            </div>
                        </div>
                        <!-- End Feature List  -->
                    </div>
                </div>
            </div>

            <div class="order-1 col-lg-7 col-12 order-lg-2">
                <div class="feature-thumbnail">
                    <div class="main-image video-popup-wrapper video-popup-two d-flex justify-content-center">
                        <img src="{{ asset('assets/images/99.png') }}" alt="Choose Us Images">

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

