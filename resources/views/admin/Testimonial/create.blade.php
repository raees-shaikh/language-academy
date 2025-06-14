@extends('admin.layouts.app')    
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Testimonials</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
 </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Create Testimonials</h4> --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-material m-t-40" method="post" enctype="multipart/form-data" action="/storeTestimonials">
                    @csrf
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input type="text" name="name" class="form-control" value="{{Request::old('name')}}">
                    </div>    
                    <div class="form-group">
                        <label for="example-email">Comment</label>
                        <textarea type="text" name="comment" class="form-control">{{Request::old('comment')}}</textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    const editors = ["short_description", "description", "overview", "basic_course", "elementary", "independent", "autonomous", "course_plan", "certification"];
    editors.forEach(function(e){
        CKEDITOR.replace( e );
    });

    // CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection    
