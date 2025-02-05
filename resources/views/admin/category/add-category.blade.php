@extends('admin.layouts.main')
@section('content')

<div class=" col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Lecture</h4>
        </div>
        <div class="card-body">
            <form id="lectureForm" action="{{route('save-category')}}" enctype="multipart/form-data" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group w-100">
                            <label for="first-name-column">Category</label>
                            <input type="text" id="lecture_title" class="form-control w-100 @error('category') has-danger @enderror" placeholder="category"  name="category" />
                            @error('category')
                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span> 
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button type="button" id="uploadButton" class="btn btn-primary mr-1">Submit</button>
                    </div>                      
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection
