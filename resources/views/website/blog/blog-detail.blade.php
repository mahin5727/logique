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
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img src="{{asset($blog->blog_image)}}" style="width: 100%; object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                <a href="">{{$blog->blog_category}}</a>
                                <span class="px-1">/</span>
                                <span>{{$blog->category}}</span>
                            </div>
                            <div>
                                <h3 class="mb-3">{{$blog->title}}</h3>
                                {!!$blog->blog!!}
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">{{$blog->comments_count}} Comments</h3>
                        @foreach ($blog->comments as $comment)
                        <div class="media mb-4">
                            <i src="" class="fa fa-user text-center bg-white mr-3 mt-0" style="padding: 15px; border-radius: 50%:"></i>
                            <div class="media-body">
                                <h6><a href="">{{$comment->name}}</a> <small><i>{{$comment->created_at}}</i></small></h6>
                                <p>{{$comment->message}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">Leave a comment</h3>
                        <form action="{{route('leave-comment', $blog->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            {{-- <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div> --}}

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary font-weight-semi-bold py-2 px-3">Leave a comment</button>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="https://www.linkedin.com/company/logiquellc/?viewAsMember=true" target="_blank" class="d-block w-50 py-2 px-3 text-center text-white text-decoration-none mr-2" style="background: #0077B5;">
                                <small class="fab fa-linkedin-in mr-2"></small><small></small>
                            </a>
                            <a href="https://www.instagram.com/logique_llc?igsh=MTZrZHdlM3p1dXFzdA%3D%3D" target="_blank" class="d-block w-50 py-2 px-3 text-center text-white text-decoration-none ml-2" style="background: #833AB4;">
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

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            @php
                            $tagsArray = explode(',', $blog->tags);
                            @endphp 
                            @foreach ($tagsArray as $tag)
                            <a class="btn btn-sm btn-outline-secondary m-1">{{$tag}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
@endsection