@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $blog->name ?? 'Gyanmarga Education and Services',
        'title' => $blog->seo_title ?? $blog->name,
        'description' => $blog->meta_description ?? 'Gyanmarga Education and Services',
        'keyword' => $blog->keywords ?? 'Gyanmarga Education and Services',
        'schema' => $blog->seo_schema ?? 'Gyanmarga Education and Services',
        'created_at' => $blog->created_at,
        'updated_at' => $blog->updated_at,
    ])
@endsection
@section('content')
    <!-- Breadcrumb Section with Background Image -->
    <section class="breadcrumb-section position-relative">
        <div class="breadcrumb-bg-overlay"></div>
        <div class="breadcrumb-bg">
            <img class="breadcrumb-bg-image" src="{{ asset($blog->banner_image) }}" alt="{{ $blog->name }}">
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content py-4">
                        <h2 class="breadcrumb-title text-white mb-3">{{ $blog->name ?? '' }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 justify-content-center justify-content-md-start">
                                <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                        href="{{ route('blogs') }}">blogs</a></li>
                                <li class="breadcrumb-item active text-white bluetext" aria-current="page">
                                    {{ $blog->name }}</li>
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
                            <img class="img-fluid" src="{{ asset($blog->image) }}" alt="{{ $blog->name ?? '' }}">
                        </div>

                        <div class="blog-post-content mt-4">
                            <div class="blog-meta mb-3">
                                <i class="far fa-calendar-alt text-primary"></i>
                                <span>{{ $blog->created_at->format('d M, Y') }}</span>
                            </div>
                            <div class="blog-description">
                                <p>{!! $blog->description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="blog-sidebar">
                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-widget-title">Recent Posts</h4>
                            <ul class="sidebar-recent-posts-list">
                                @foreach ($popular_blog as $blgs)
                                    <li>
                                        <div class="sidebar-recent-post">
                                            <div class="sidebar-recent-post-img">
                                                <img src="{{ asset($blgs->image) }}" alt="{{ $blgs->name ?? '' }}">
                                            </div>
                                            <div class="sidebar-recent-post-content">
                                                <h5 class="sidebar-recent-post-title">
                                                    <a
                                                        href="{{ route('show.blogs', $blgs->slug) }}">{{ $blgs->name ?? '' }}</a>
                                                </h5>
                                                <div class="sidebar-recent-post-date">
                                                    <i class="far fa-calendar-alt me-1"></i>
                                                    {{ $blgs->created_at->format('d M, Y') }}
                                                </div>
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
