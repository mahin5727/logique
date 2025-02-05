@extends('website.layouts.main')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-custom px-0">
        <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 align-items-center mt-lg-5">
                <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Blogs</h1>
                <nav aria-label="breadcrumb align-items-center animated fadeIn">
                    <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                        <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item text-white text-center active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="img-fluid slider height" src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="banner">
    </div>
    <!-- Header End -->

    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($categories as $category)
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">{{$category->category}}</h3>
                            </div>
                        </div>
                        @foreach ($blogs as $blog)
                        @if($blog->blog_category == $category->category)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset($blog->blog_image)}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="{{route('blog-detail', $blog->id)}}">{{$blog->blog_category}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$blog->created_at}}</span>
                                    </div>
                                    <a class="h4" href="{{route('blog-detail', $blog->id)}}">{{$blog->title}}</a>
                                    <p class="m-0">{{$blog->description}}</p>
                                </div>
                            </div>
                        </div> 
                        @endif
                        @endforeach
                    </div>
                    @endforeach
                    
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Related Blogs</h3>
                            </div>
                        </div>
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">
                                <img src="{{asset($blog->blog_image)}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="#">{{$blog->blog_category}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$blog->created_at}}</span>
                                    </div>
                                    <a class="h6 m-0" href="{{route('blog-detail', $blog->id)}}">{{$blog->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="https://www.linkedin.com/company/logiquellc/?viewAsMember=true" target="_blank" class="d-block w-50 py-2 px-3 text-center text-white text-decoration-none mr-2" style="background: #0077B5">
                                <small class="fab fa-linkedin-in mr-2"></small><small></small>
                            </a>
                            <a href="https://www.instagram.com/logique_llc?igsh=MTZrZHdlM3p1dXFzdA%3D%3D" target="_blank" class="d-block w-50 py-2 px-3 text-center text-white text-decoration-none ml-2" style="background: #833AB4">
                                <small class="fab fa-instagram mr-2"></small><small></small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                <form action="{{route('send-quote')}}" method="POST">
                    @csrf
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Newsletter</h3>
                        </div>
                        <div class="bg-light text-center p-4 mb-3">
                            <p>Send a Quote Request</p>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg " name="email" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                            <small></small>
                        </div>
                    </div>
                </form>
                    <!-- Newsletter End -->

                    <!-- Featured Blogs Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Featured</h3>
                        </div>
                        @foreach ($blogs as $blogg)
                        @if($blogg->featured_status == '1')
                        <div class="d-flex mb-3">
                            <img src="{{asset($blogg->blog_image)}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="{{route('blog-detail', $blogg->id)}}">{{$blogg->blog_category}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$blogg->created_at}}</span>
                                </div>
                                <a class="h6 m-0" href="{{route('blog-detail', $blog->id)}}">{{$blogg->title}}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Featured Blogs End -->

                </div>
            </div>
        </div>
    </div>
@endsection