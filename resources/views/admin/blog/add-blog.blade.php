@extends('admin.layouts.main')

@section('custom-js')
<script>
    CKEDITOR.replace('blog');
</script>
@endsection

@section('content')
<div class=" col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Course</h4>
        </div>
        <div class="card-body">

            <form enctype="multipart/form-data" action="{{route('save-blog')}}" method="POST">
                @csrf 
            <div class="row">
                    <div class=" col-12">
                        <div class="form-group">
                            <label for="first-name-column">Blog Title</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="Blog Title" value="" name="blog_title" />
                        </div>
                    </div> 
                    <div class="col-md-6 mb-1">
                        <label>Blog Category</label>
                        <select class="select2 form-control form-control-lg" name="blog_category">
                            <option value="Technology">Technology</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-column">Blog Description</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="Blog Description" value="" name="blog_description" />
                        </div>
                    </div>  

                    <div class="col-6">
                        <div class="form-group">
                            <label for="city-column">Blog Image</label>
                            <input type="file" name="blog_image" data-default-file=""  data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control  @error('blog_image') is-invalid @enderror file-input" >
                            @error('blog_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>       
                    <div class="col-12">
                        <div class="form-group w-100">
                            <label for="first-name-column">Blog</label>
                            <textarea  type="text" id="content" class="form-control w-100 @error('blog') has-danger @enderror" placeholder="SubTitle" name="blog"></textarea>
                            @error('blog')
                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span> 
                            @enderror
                        </div>
                    </div> 
                    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-column">Tags</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="Tags" value="" name="tags" />
                        </div>
                    </div>  
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mr-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </div>
            </div>
            </form>
               
        </div> 
    </div>
@endsection

