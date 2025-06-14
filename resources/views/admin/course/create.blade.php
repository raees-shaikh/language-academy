@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Courses</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Create Courses</h4> --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="form-material m-t-40" method="post" enctype="multipart/form-data"
                    action="{{route('course.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Enter Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="example-email">Flag</label>
                        <input type="file" name="flag" class="form-control" value="{{Request::old('flag')}}">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" value="{{Request::old('country')}}">
                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" name="course_name" class="form-control"
                                value="{{Request::old('course_name')}}">
                            <div class="form-group">
                                <label>Short description</label>
                                <textarea type="text" name="short_description" id="short_description"
                                    class="form-control">{{Request::old('short_description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="description" id="description"
                                    class="form-control">{{Request::old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Overview</label>
                                <textarea type="text" name="overview" id="overview"
                                    class="form-control">{{Request::old('overview')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Course</label>
                                <textarea type="text" name="basic_course" id="basic_course"
                                    class="form-control">{{Request::old('basic_course')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Crash Course</label>
                                <textarea type="text" name="crash_course" id="crash_course"
                                    class="form-control">{{Request::old('crash_course')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Customised Course</label>
                                <textarea type="text" name="customised_course" id="customised_course"
                                    class="form-control">{{Request::old('customised_course')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Academic Course</label>
                                <textarea type="text" name="academic_course" id="academic_course"
                                    class="form-control">{{Request::old('academic_courses')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Elementary</label>
                                <textarea type="text" name="elementary" id="elementary"
                                    class="form-control">{{Request::old('elementary')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Independent</label>
                                <textarea type="text" name="independent" id="independent"
                                    class="form-control">{{Request::old('independent')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Autonomous</label>
                                <textarea type="text" name="autonomous" id="autonomous"
                                    class="form-control">{{Request::old('autonomous')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Course Plan</label>
                                <textarea type="text" name="course_plan" id="course_plan"
                                    class="form-control">{{Request::old('course_plan')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Certification</label>
                                <textarea type="text" name="certification" id="certification"
                                    class="form-control">{{Request::old('certification')}}</textarea>
                            </div>
                </form>
                <div>
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    const editors = ["short_description", "description", "overview", "basic_course","crash_course","customised_course","academic_course", "elementary", "independent", "autonomous", "course_plan", "certification"];
    editors.forEach(function(e){
        CKEDITOR.replace( e );
    });

    // CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection