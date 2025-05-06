@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $services->name ?? 'Gyanmarga Education and Services',
        'title' => $services->seo_title ?? $services->name,
        'description' => $services->meta_description ?? 'Gyanmarga Education and Services',
        'keyword' => $services->keywords ?? 'Gyanmarga Education and Services',
        'schema' => $services->seo_schema ?? 'Gyanmarga Education and Services',
        'created_at' => $services->created_at,
        'updated_at' => $services->updated_at,
    ])
@endsection

@section('content')
    <!-- Breadcrumb Section with Background Image -->
    <section class="breadcrumb-section position-relative">
        <div class="breadcrumb-bg-overlay"></div>
        <div class="breadcrumb-bg">
            <img class="breadcrumb-bg-image" src="{{ asset($services->banner_image) }}" alt="{{ $services->name ?? '' }}">
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content py-4">
                        <h2 class="breadcrumb-title text-white mb-3">{{ $services->name ?? '' }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 justify-content-center justify-content-md-start">
                                <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                        href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active text-white bluetext" aria-current="page">
                                    {{ $services->name ?? '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="flex-grow-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Single Blog Post -->
                    <div class="blog-post">
                        <div class="blog-post-img">
                            <img class="img-fluid" src="{{ asset($services->image) }}" alt="{{ $services->name ?? '' }}">
                        </div>

                        <div class="blog-post-content mt-4">
                            <div class="blog-description">
                                <p>{!! $services->description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="blog-sidebar">
                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-widget-title">Recent Services</h4>
                            <ul class="sidebar-recent-posts-list">
                                @foreach ($popular_services as $blgs)
                                    <li>
                                        <div class="sidebar-recent-post">
                                            <div class="sidebar-recent-post-img">
                                                <img src="{{ asset($blgs->image) }}" alt="{{ $blgs->name ?? '' }}">
                                            </div>
                                            <div class="sidebar-recent-post-content">
                                                <h5 class="sidebar-recent-post-title">
                                                    <a
                                                        href="{{ route('show.services', $blgs->slug) }}">{{ $blgs->name ?? '' }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
