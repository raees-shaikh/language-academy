@extends('admin.layouts.app')
@section('content')
<!-- Container fluid  -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Course</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Home</a>
                </li>
                <li class="breadcrumb-item active">Edit Course</li>
            </ol>
        </div>
    </div>
</div>
<!-- Start Page Content -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form id="form" action="{{ route('course.update',$course->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" id="name" name="image">
                        </div>
                        <input type="hidden" name="noImage" value="{{$course->image}}">
                        <input type="hidden" name="noThumbnail" value="{{$course->thumbnail}}">
                        @if ($errors->has('image'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('image') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Course Flag</label>
                            <input type="file" class="form-control" id="flad" name="flag" value="{{$course->flag}}">
                        </div>
                        <input type="hidden" name="noFlag" value="{{$course->flag}}">
                        @if ($errors->has('flag'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('flag') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" id="country" name="country"
                                value="{{$course->country}}">
                        </div>

                        @if ($errors->has('country'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('country') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" class="form-control" id="course_name" name="course_name"
                                value="{{$course->course_name}}">
                        </div>

                        @if ($errors->has('course_name'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('course_name') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea type="text" class="form-control" id="short_description"
                                name="short_description">{{$course->short_description}}</textarea>
                        </div>

                        @if ($errors->has('short_description'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('short_description') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" id="description"
                                name="description">{{$course->description}}</textarea>
                        </div>

                        @if ($errors->has('description'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('description') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Overview</label>
                            <textarea type="text" class="form-control" id="overview"
                                name="overview">{{$course->overview}}</textarea>
                        </div>

                        @if ($errors->has('overview'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('overview') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Basic Course</label>
                            <textarea type="text" class="form-control" id="basic_course"
                                name="basic_course">{{$course->basic_course}}</textarea>
                        </div>

                        @if ($errors->has('basic_course'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('basic_course') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Crash Course</label>
                            <textarea type="text" class="form-control" id="crash_course"
                                name="crash_course">{{$course->crash_course}}</textarea>
                        </div>

                        @if ($errors->has('crash_course'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('crash_course') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>customised Course</label>
                            <textarea type="text" class="form-control" id="customised_course"
                                name="customised_course">{{$course->customised_course}}</textarea>
                        </div>

                        @if ($errors->has('customised_course'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('customised_course') }} </li>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>Academic Course</label>
                            <textarea type="text" class="form-control" id="academic_course"
                                name="academic_course">{{$course->academic_courses}}</textarea>
                        </div>

                        @if ($errors->has('academic_courses'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('academic_courses') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Elementary</label>
                            <textarea type="text" class="form-control" id="elementary"
                                name="elementary">{{$course->elementary}}</textarea>
                        </div>

                        @if ($errors->has('elementary'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('elementary') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Independent</label>
                            <textarea type="text" class="form-control" id="independent"
                                name="independent">{{$course->independent}}</textarea>
                        </div>

                        @if ($errors->has('independent'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('independent') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Autonomous</label>
                            <textarea type="text" class="form-control" id="autonomous"
                                name="autonomous">{{$course->autonomous}}</textarea>
                        </div>

                        @if ($errors->has('autonomous'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('autonomous') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Course Plan</label>
                            <textarea type="text" class="form-control" id="course_plan"
                                name="course_plan">{{$course->course_plan}}</textarea>
                        </div>

                        @if ($errors->has('course_plan'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('course_plan') }} </li>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Certification</label>
                            <textarea type="text" class="form-control" id="certification"
                                name="certification">{{$course->certification}}</textarea>
                        </div>

                        @if ($errors->has('certification'))
                        <div class="alert alert-danger">
                            <li> {{ $errors->first('certification') }} </li>
                        </div>
                        @endif



                        <button type="submit" id="check" class="btn btn-success waves-effect waves-light m-r-12"
                            style="width:100%;" onsubmit="checkbox()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->

<!-- End Container fluid  -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    const editors = ["short_description", "description", "overview", "basic_course","crash_course","customised_course","academic_course", "elementary", "independent", "autonomous", "course_plan", "certification"];
        editors.forEach(function(e){
            CKEDITOR.replace( e );
        });
    
        // CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection