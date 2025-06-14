@extends('layouts.app')
@section('pageTitle', $course->course_name.' - ')
@section('content')



<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom bg-img-b" 
    style="background-image:url({{asset('img/parallax/img01.jpg')}});">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_250 custom-d-hei"></div>

            <div class="grid grid_12 set-title-c">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font setsinglecoursefont set-b-t-f"><img
                        src="{{asset('storage/images/courses/flag/'.$course->flag)}}" alt="" width="50">
                    {{$course->course_name}} Course</strong>
            </div>

            <div class="nicdark_section nicdark_height_20 remove-hei-c  "></div>


        </div>
        <!--end container-->

    </div>

</div>






<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">

            <a href="{{url('/')}}">Home</a>
            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                src="{{asset('img/icons/icon-next-grey.svg')}}">
            <a href="{{url('courses')}}">Courses</a>
            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                src="{{asset('img/icons/icon-next-grey.svg')}}">
            <a class="setbreacrumbheight" href="#">{{$course->course_name}} Course

            </a>

        </div>

    </div>
    <!--end container-->

</div>



<div class="nicdark_section nicdark_height_50"></div>


<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div
            class="nicdark_width_90_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                {{-- <h1 class="setlineheight">Learn a {{$course->course_name}} language in Mumbai</h1> --}}
                <div class="nicdark_section nicdark_height_20"></div>




                <div class="nicdark_section nicdark_height_20"></div>



                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section nicdark_height_400 setsinglecourseimgmob set-stress"
                        src="{{asset('storage/images/courses/bannerImg/'.$course->image)}}">


                </div>



                <div class="nicdark_section nicdark_height_40"></div>


            </div>

        </div>

        <div class="nicdark_section">


            <!--START tab-->
            <div class="nicdark_tabs">
                <ul
                    class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_bottom_2_solid_grey">
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-1">Description</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-2">Overview </a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-3">Courses</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-4">Elementary</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-5">Independent</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-6">Autonomous</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-7">Kids Corner</a></h4>
                    </li>
                    <li class="nicdark_display_inline_block custom-w-ca">
                        <h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark"
                                href="#tabs-8">Certification</a></h4>
                    </li>

                </ul>

                <div class="nicdark_section nicdark_height_40"></div>

                <div class="nicdark_section" id="tabs-1">

                    <h3 class="settitle"><strong>Course Description</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->description!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>
                </div>

                <div class="nicdark_section" id="tabs-2">
                    <h3 class="settitle"><strong>Overview of Levels</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->overview!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>
                </div>

                <div class="nicdark_section" id="tabs-3">
                    <h3 class="settitle"><strong>Basic Course Plan for Adults</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>

                    <p>{!!$course->basic_course!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>

                    <h3 class="settitle"><strong>Crash Course</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>

                    <p>{!!$course->crash_course!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>

                    <h3 class="settitle"><strong>Customised Course</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>

                    <p>{!!$course->customised_course!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>

                    <h3 class="settitle"><strong>Academic Course</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>

                    <p>{!!$course->academic_courses!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>
                </div>

                <div class="nicdark_section" id="tabs-4">
                    <h3 class="settitle"><strong>Elementary Use of Language </strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->elementary!!}</p>
                </div>

                <div class="nicdark_section" id="tabs-5">
                    <h3 class="settitle"><strong>Independent Language Use </strong></h3>
                    <p>{!!$course->independent!!}</p>
                </div>

                <div class="nicdark_section" id="tabs-6">
                    <h3 class="settitle"><strong>Autonomous Language Ability</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->autonomous!!}</p>
                </div>

                <div class="nicdark_section" id="tabs-7">
                    <h3 class="settitle"><strong>Course Plan for Kids</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->course_plan!!}</p>
                    <div class="nicdark_section nicdark_height_40"></div>
                </div>

                <div class="nicdark_section" id="tabs-8">

                    <h3 class="settitle"><strong>Certification</strong></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p>{!!$course->certification!!}</p>

                    <div class="nicdark_section nicdark_height_40"></div>
                </div>

                <div class="nicdark_section nicdark_height_30"></div>
            </div>

        </div>
        <!--END tab-->


    </div>

</div>
<!--end container-->

</div>



@endsection