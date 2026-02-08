@extends('layouts.app')
<style>
    .blog-card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .hover-shadow:hover {
        box-shadow: 0 8px 20px rgba(0,0,0,.15);
        transition: .3s ease;
    }
</style>
@section('content')

@php
    $categories = [
        ['name' => 'Car Maintenance', 'count' => 12],
        ['name' => 'Spare Parts', 'count' => 18],
        ['name' => 'Auto Tips', 'count' => 9],
        ['name' => 'Industry News', 'count' => 7],
    ];

    $recentPosts = [
        ['title' => 'How to Maintain Your Engine', 'date' => '12 Dec, 2025', 'slug' => 'engine-maintenance'],
        ['title' => 'Choosing Quality Spare Parts', 'date' => '10 Dec, 2025', 'slug' => 'quality-spare-parts'],
        ['title' => 'Fuel Saving Tips for Drivers', 'date' => '08 Dec, 2025', 'slug' => 'fuel-saving-tips'],
        ['title' => 'Common Car Mistakes', 'date' => '06 Dec, 2025', 'slug' => 'common-car-mistakes'],
        ['title' => 'When to Service Your Car', 'date' => '04 Dec, 2025', 'slug' => 'car-service-time'],
    ];

    $blogs = [
        [
            'title' => 'Simple Car Maintenance Tips Everyone Should Know',
            'excerpt' => 'Learn simple and effective car maintenance tips that can save you money and extend your vehicle’s life.',
            'date' => '12 Dec, 2025',
            'slug' => 'simple-car-maintenance',
        ],
        [
            'title' => 'How to Choose the Right Spare Parts',
            'excerpt' => 'Not all spare parts are equal. Here is how to choose quality parts for your vehicle.',
            'date' => '11 Dec, 2025',
            'slug' => 'choose-right-spare-parts',
        ],
        [
            'title' => 'Auto Tips That Improve Fuel Efficiency',
            'excerpt' => 'These practical driving habits will help reduce fuel consumption and costs.',
            'date' => '10 Dec, 2025',
            'slug' => 'fuel-efficiency-tips',
        ],
        [
            'title' => 'Signs Your Car Needs Immediate Service',
            'excerpt' => 'Ignoring these warning signs could cause serious damage to your car.',
            'date' => '09 Dec, 2025',
            'slug' => 'car-needs-service',
        ],
        [
            'title' => 'Latest Trends in the Auto Industry',
            'excerpt' => 'A look at modern technologies shaping the future of the automotive industry.',
            'date' => '08 Dec, 2025',
            'slug' => 'auto-industry-trends',
        ],
        [
            'title' => 'Common Driving Mistakes to Avoid',
            'excerpt' => 'Avoid these common mistakes to improve safety and extend your car’s lifespan.',
            'date' => '07 Dec, 2025',
            'slug' => 'driving-mistakes',
        ],
    ];
@endphp

<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="/">Home</a>
                <span class="breadcrumb-item active">Blog</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <!-- Sidebar Start -->
        <div class="col-lg-3 col-md-4">

            <!-- Search Start -->
            <div class="bg-light p-4 mb-30">
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Search</span>
                </h5>
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search blog...">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Search End -->

            <!-- Categories Start -->
            <div class="bg-light p-4 mb-30">
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Categories</span>
                </h5>
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                        <li class="d-flex justify-content-between align-items-center mb-3">
                            <a class="text-dark" href="#">{{ $category['name'] }}</a>
                            <span class="badge border font-weight-normal">{{ $category['count'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Categories End -->

            <!-- Recent Posts Start -->
            <div class="bg-light p-4 mb-30">
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Recent Posts</span>
                </h5>

                @foreach ($recentPosts as $post)
                    <div class="media mb-3">
                        <img src="{{ asset('frontend/img/parts.jpg') }}"
                             class="mr-3"
                             style="width: 80px; height: 60px; object-fit: cover;">
                        <div class="media-body">
                            <a class="text-dark" href="/blog/{{ $post['slug'] }}">
                                <h6 class="mt-0 text-truncate">{{ $post['title'] }}</h6>
                            </a>
                            <small>
                                <i class="fa fa-calendar text-primary mr-1"></i>
                                {{ $post['date'] }}
                            </small>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Recent Posts End -->

        </div>
        <!-- Sidebar End -->

        <!-- Blog List Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-4">
                        <div class="bg-light mb-4 shadow-sm hover-shadow">
                            <img class="img-fluid w-100"
                                 src="{{ asset('frontend/img/part.png') }}"
                                 style="height: 250px; object-fit: cover;">

                            <div class="p-4">
                                <a class="h6 text-decoration-none d-block blog-card-title mb-2"
                                   href="/blog/{{ $blog['slug'] }}">
                                    {{ $blog['title'] }}
                                </a>

                                <p class="text-muted mb-3" style="font-size: 14px;">
                                    {{ $blog['excerpt'] }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fa fa-calendar text-primary mr-1"></i>
                                        {{ $blog['date'] }}
                                    </small>
                                    <a href="/blog/{{ $blog['slug'] }}"
                                       class="btn btn-sm btn-primary">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination (static) -->
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link">Previous</a></li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <!-- Blog List End -->

    </div>
</div>
<!-- Blog End -->



@endsection