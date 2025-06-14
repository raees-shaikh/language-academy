@extends('admin.layouts.app')
@section('content')


<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Course Details</h4>
    </div>
</div>

<div class="card">
    <div class="card orders-table">
        <div class="table-responsive">
            <table class="table table-striped footable">
                <tbody>
                    <tr>
                        <th>Image</th>

                        <td>
                            <img src="{{asset('storage/images/courses/thumbnail/'.$course->thumbnail)}}" width="auto"
                                height="200">
                        </td>
                    </tr>
                    <tr>
                        <th>Country</th>

                        <td>
                            {{ $course->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>Flag</th>

                        <td>
                            <img src="{{asset('storage/images/courses/flag/'.$course->flag)}}" width="auto"
                                height="200">
                        </td>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <td>
                            {!! $course->course_name !!}
                        </td>
                    </tr>

                    <tr>
                        <th>Short Description</th>
                        <td>
                            {!! $course->short_description !!}
                        </td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>
                            {!! $course->description !!}
                        </td>
                    </tr>

                    <tr>
                        <th>Overview</th>
                        <td>
                            {!! $course->overview !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Basic Course</th>
                        <td>
                            {!! $course->basic_course !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Crash Course</th>
                        <td>
                            {!! $course->crash_course !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Customised Course</th>
                        <td>
                            {!! $course->customised_course !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Academic Course</th>
                        <td>
                            {!! $course->academic_courses !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Elementary</th>
                        <td>
                            {!! $course->elementary !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Independent</th>
                        <td>
                            {!! $course->independent !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Autonomous</th>
                        <td>
                            {!! $course->autonomous !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Course Plan</th>
                        <td>
                            {!! $course->course_plan !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Certification</th>
                        <td>
                            {!! $course->certification !!}
                        </td>
                    </tr>
                    <tr>
                        <th>Action</th>
                        <td>
                            <form action="{{route('course.destroy',$course->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('course.edit',$course->id) }}" class="btn btn-success">Update</a>
                                <input type="submit" class="btn btn-danger" value="Delete"
                                    onclick="return confirm('Are you sure you want to delete this item?');">
                            </form>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection