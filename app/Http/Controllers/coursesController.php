<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Course;
use App\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1210,max_height=510',
            'flag' => "required|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=1500,max_height=1000",
            'country' => 'required|string|max:20',
            'course_name' => 'required|string|max:20',
            'short_description' => 'required|string|max:240',
            'description' => 'required|string',
            'overview' => 'required|string',
            'basic_course' => 'required|string',
            'crash_course' => 'required|string',
            'customised_course' => 'required|string',
            'academic_course' => 'required|string',
            'elementary' => 'required|string',
            'independent' => 'required|string',
            'autonomous' => 'required|string',
            'course_plan' => 'required|string',
            'certification' => 'required|string',
        ]);

        $course = new Course;
        //banner image

        $path = 'app/public/images/courses/bannerImg/';
        $fileWithExt = $request->file('image');
        $filename = time() . "" . $fileWithExt->getClientOriginalName();
        Image::make($fileWithExt)->fit(1200, 500, function ($constraint) {
            $constraint->aspectRatio();
        })->save(storage_path($path) . $filename, 60);
        $course->image = $filename;


        //thumbnail image
        $path = 'app/public/images/courses/thumbnail/';
        $fileWithExt = $request->file('image');
        $filename = time() . "" . $fileWithExt->getClientOriginalName();
        Image::make($fileWithExt)->fit(740, 415)->save(storage_path($path) . $filename, 60);
        $course->thumbnail = $filename;

        //flag image
        $path = 'app/public/images/courses/flag/';
        $fileWithExt = $request->file('flag');
        $filename = time() . "" . $fileWithExt->getClientOriginalName();
        Image::make($fileWithExt)->fit(740, 415)->save(storage_path($path) . $filename, 60);
        $course->flag = $filename;

        $course->country = $request->get('country');
        $course->course_name = $request->get('course_name');
        $course->slug         = Str::slug(strtolower($course->course_name), '-');
        $course->short_description = $request->get('short_description');
        $course->description = $request->get('description');
        $course->overview = $request->get('overview');
        $course->basic_course = $request->get('basic_course');
        $course->crash_course = $request->get('crash_course');
        $course->customised_course = $request->get('customised_course');
        $course->academic_courses = $request->get('academic_course');
        $course->elementary = $request->get('elementary');
        $course->independent = $request->get('independent');
        $course->autonomous = $request->get('autonomous');
        $course->course_plan = $request->get('course_plan');
        $course->certification = $request->get('certification');
        if ($course->save()) {
            return redirect('/course')->with(notify('course'));
        } else {
            return redirect('/course')->with(notify('error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'country' => 'required|string',
            'course_name' => 'required|string',
            'short_description' => 'required|string|max:240',
            'description' => 'required|string',
            'overview' => 'required|string',
            'basic_course' => 'required|string',
            'crash_course' => 'required|string',
            'customised_course' => 'required|string',
            'academic_course' => 'required|string',
            'elementary' => 'required|string',
            'independent' => 'required|string',
            'autonomous' => 'required|string',
            'course_plan' => 'required|string',
            'certification' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1210,max_height=510',
            'flag' => "nullable|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=512,max_height=512",
        ]);
        $course = Course::find($id);
        if ($request->hasFile('image')) {
            $path = 'app/public/images/courses/bannerImg/';
            $fileWithExt = $request->file('image');
            $filename = time() . "" . $fileWithExt->getClientOriginalName();
            Image::make($fileWithExt)->fit(1200, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path($path) . $filename, 60);
            $course->image = $filename;
            Storage::delete('public/images/courses/bannerImg/' . $request->get('noImage'));

            //thumbnail image
            $path = 'app/public/images/courses/thumbnail/';
            $fileWithExt = $request->file('image');
            $filename = time() . "" . $fileWithExt->getClientOriginalName();
            Image::make($fileWithExt)->fit(740, 415, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path($path) . $filename, 60);
            $course->thumbnail = $filename;
            Storage::delete('public/images/courses/thumbnail/' . $request->get('noThumbnail'));
        }
        if ($request->hasFile('flag')) {
            $path = 'app/public/images/courses/flag/';
            $fileWithExt = $request->file('flag');
            $filename = time() . "" . $fileWithExt->getClientOriginalName();
            Image::make($fileWithExt)->fit(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(storage_path($path) . $filename, 60);
            $course->flag = $filename;
            Storage::delete('public/images/courses/flag/' . $request->get('noFlag'));
        }
        $course->country = $request->get('country');
        $course->course_name = $request->get('course_name');
        $course->slug         = Str::slug(strtolower($course->course_name), '-');
        $course->short_description = $request->get('short_description');
        $course->description = $request->get('description');
        $course->overview = $request->get('overview');
        $course->basic_course = $request->get('basic_course');
        $course->crash_course = $request->get('crash_course');
        $course->customised_course = $request->get('customised_course');
        $course->academic_courses = $request->get('academic_course');
        $course->elementary = $request->get('elementary');
        $course->independent = $request->get('independent');
        $course->autonomous = $request->get('autonomous');
        $course->course_plan = $request->get('course_plan');
        $course->certification = $request->get('certification');
        if ($course->update()) {
            return redirect('/course')->with(notify('course'));
        } else {
            return redirect('/course')->with(notify('error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        if (
            Storage::delete('public/images/courses/bannerImg/' . $course->image)
            && Storage::delete('public/images/courses/thumbnail/' . $course->thumbnail)
            && Storage::delete('public/images/courses/flag/' . $course->flag) && $course->delete()
        ) {
            return redirect('/course')->with(notify('course'));
        } else {
            return redirect('/course')->with(notify('error'));
        }
    }

    public function displayCourses()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(9);
        return view('course', ['courses' => $courses]);
    }

    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('showCourse', ['course' => $course]);
    }

    public function indexCourses()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(9);
        $tests = Testimonial::all();
        return view('index', ['courses' => $courses, 'tests' => $tests]);
    }
}
