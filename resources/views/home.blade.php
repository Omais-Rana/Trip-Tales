@extends('layouts.app')
<title>Trip Tales</title>

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="{{ asset('assets/img/logoFull.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="services.html" class="nav-item nav-link">Services</a>
                    <a href="packages.html" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="tour.html" class="dropdown-item">Explore Tour</a>
                            <a href="booking.html" class="dropdown-item">Travel Booking</a>
                            <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                            <a href="guides.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach ($banners as $index => $banner)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ Voyager::image($banner->banner_image) }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h1 class="display-2 text-capitalize text-white mb-4">{{ $banner->banner_title }}</h1>
                                    <p class="mb-5 fs-5">{{ $banner->banner_detail }}</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                            href="#popular-dest">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <!-- Carousel End -->
    </div>
    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Eg: Thailand">
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                    style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="{{ asset('assets/img/about-img.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(assets/img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Travela</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                        doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda?
                        Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        @foreach ($service as $item)
                            <div class="col-6">
                                <div
                                    class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">{{ $item->title }}</h5>
                                        <p class="mb-0">{{ $item->detail }}
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <img src="{{ Voyager::image($item->logo) }}" class="service-logo"
                                            alt="service-logo" style="max-height: 70px;">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Destination Start -->
    <div class="container-fluid destination py-5" id="popular-dest">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destinations</h5>
                <h1 class="mb-0">Popular Destinations</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">USA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Pakistan</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-12">
                                <div class="row g-4">
                                    @foreach ($popular as $popular)
                                        <?php $images = json_decode($popular->gallery); ?>
                                        <div class="col-lg-4">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100"
                                                    src="{{ Voyager::image($popular->cover) }}" alt="Cover image">
                                                <div class="destination-overlay p-4">
                                                    <span class="btn btn-primary text-white rounded-pill border py-2 px-3">
                                                        {{ count($images) }} Photos
                                                    </span>
                                                    <h4 class="text-white mb-2 mt-3">{{ $popular->place }}</h4>
                                                </div>
                                                <div class="search-icon">
                                                    @foreach ($images as $image)
                                                        <a href="{{ Voyager::image($image) }}"
                                                            data-lightbox="destination-1">
                                                    @endforeach
                                                    <i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                @foreach ($popularUSA as $popular)
                                    <?php $images = json_decode($popular->gallery); ?>
                                    <div class="col-lg-4">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ Voyager::image($popular->cover) }}" alt="Cover image">
                                            <div class="destination-overlay p-4">
                                                <span class="btn btn-primary text-white rounded-pill border py-2 px-3">
                                                    {{ count($images) }} Photos
                                                </span>
                                                <h4 class="text-white mb-2 mt-3">{{ $popular->place }}</h4>
                                            </div>
                                            <div class="search-icon">
                                                @foreach ($images as $image)
                                                    <a href="{{ Voyager::image($image) }}" data-lightbox="destination-1">
                                                @endforeach
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                @foreach ($popularPAK as $popular)
                                    <?php $images = json_decode($popular->gallery); ?>
                                    <div class="col-lg-4">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ Voyager::image($popular->cover) }}" alt="Cover image">
                                            <div class="destination-overlay p-4">
                                                <span class="btn btn-primary text-white rounded-pill border py-2 px-3">
                                                    {{ count($images) }} Photos
                                                </span>
                                                <h4 class="text-white mb-2 mt-3">{{ $popular->place }}</h4>
                                            </div>
                                            <div class="search-icon">
                                                @foreach ($images as $image)
                                                    <a href="{{ Voyager::image($image) }}" data-lightbox="destination-1">
                                                @endforeach
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Explore Tour Start -->
    <div class="container-fluid ExploreTour py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Explore Tour</h5>
                <h1 class="mb-4">The World</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                    doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti
                    eum cum repellat a laborum quasi.
                </p>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#NationalTab-1">
                            <span class="text-dark" style="width: 250px;">National Tour Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#InternationalTab-2">
                            <span class="text-dark" style="width: 250px;">International tour Category</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($tourNat as $tour)
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{ Voyager::image($tour->picture) }}" class="img-fluid w-100 rounded"
                                            alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{ $tour->place }}</h5>
                                            </div>
                                        </div>
                                        @isset($tour->discount)
                                            <div class="tour-offer bg-success">{{ $tour->discount }}% Off</div>
                                        @endisset
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="InternationalTab-2" class="tab-pane fade show p-0">
                        <div class="InternationalTour-carousel owl-carousel">
                            @foreach ($tourInter as $tour)
                                <div class="international-item">
                                    <img src="{{ Voyager::image($tour->picture) }}" class="img-fluid w-100 rounded"
                                        alt="Image">
                                    <div class="international-content">
                                        <div class="international-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $tour->place }}</h5>
                                        </div>
                                    </div>
                                    @isset($tour->discount)
                                        <div class="tour-offer bg-success">{{ $tour->discount }}% Off</div>
                                    @endisset
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Tour Start -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Packages</h5>
                <h1 class="mb-0">Awesome Packages</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                @foreach ($package as $item)
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ Voyager::image($item->cover) }}" class="img-fluid w-100 rounded-top"
                                alt="Image" style="max-height: 300px">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>{{ $item->place }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>{{ $item->days }}
                                    days</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user me-2"></i>{{ $item->person }} Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">${{ $item->price }}.00</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">{{ $item->title }}</h5>
                                <small class="text-uppercase">Hotel Deal</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">{{ Str::limit($item->description, 110) }}
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum
                cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                        href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-2">
                        <span class="text-dark" style="width: 150px;">National Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-3">
                        <span class="text-dark" style="width: 150px;">International Tour</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        @foreach ($gallery as $item)
                            <?php $images = json_decode($item->images); ?>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{ Voyager::image($item->cover) }}" class="img-fluid w-100 h-100 rounded"
                                        alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $item->place }}</h5>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        @foreach ($images as $image)
                                            <a href="{{ Voyager::image($image) }}" data-lightbox="gallery-1"
                                                class="my-auto">
                                        @endforeach
                                        <i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="GalleryTab-2" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        @foreach ($galleryNat as $item)
                            <?php $images = json_decode($item->images); ?>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{ Voyager::image($item->cover) }}" class="img-fluid w-100 h-100 rounded"
                                        alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $item->place }}</h5>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        @foreach ($images as $image)
                                            <a href="{{ Voyager::image($image) }}" data-lightbox="gallery-1"
                                                class="my-auto">
                                        @endforeach
                                        <i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="GalleryTab-3" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        @foreach ($galleryInter as $item)
                            <?php $images = json_decode($item->images); ?>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{ Voyager::image($item->cover) }}" class="img-fluid w-100 h-100 rounded"
                                        alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $item->place }}</h5>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        @foreach ($images as $image)
                                            <a href="{{ Voyager::image($image) }}" data-lightbox="gallery-1"
                                                class="my-auto">
                                        @endforeach
                                        <i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Booking</h5>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                        ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                        Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                        ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                        Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Book A Tour Deals</h1>
                    <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure
                        Trip With Travela. Get More Deal Offers Here.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="datetime"
                                        placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="SelectPerson">
                                        <option value="1">Persons 1</option>
                                        <option value="2">Persons 2</option>
                                        <option value="3">Persons 3</option>
                                    </select>
                                    <label for="SelectPerson">Persons</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="CategoriesSelect">
                                        <option value="1">Kids</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="CategoriesSelect">Categories</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('assets/img/guide-1.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum
                            cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro
                            officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle"
                            alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
