@extends('layouts.app')
@section('pageTitle', 'Courses -')
@section('content')



<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom bg-img-b"
    style="background-image:url(img/parallax/img01.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_250 custom-d-hei"></div>

            <div class="grid grid_12 set-title-c">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font set-b-t-f">Courses</strong>
            </div>

            <div class="nicdark_section nicdark_height_20 remove-hei-c"></div>


        </div>
        <!--end container-->

    </div>

</div>






<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">

            <a href="{{url('/')}}">Home</a>
            {{-- <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('mg/icons/icon-next-grey.svg')}}">
            <a href="#">Courses</a> --}}
            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10"
                src="{{asset('img/icons/icon-next-grey.svg')}}">
            <a href="#">Courses</a>

        </div>

    </div>
    <!--end container-->

</div>




<div class="nicdark_section nicdark_height_50"></div>




<div class="nicdark_section ">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <!--<div class="nicdark_width_100_percentage">

                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_padding_15">
                                <h2><strong>Find Your Course</strong></h2>
                                <div class="nicdark_section nicdark_height_20"></div>
                            </div>


                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                <div class="nicdark_section">
                                
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="{{asset('mg/icons/icon-pen.svg')}}">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Keyword">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="{{asset('mg/icons/icon-list.svg')}}">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Food Courses">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="{{asset('mg/icons/icon-star.svg')}}">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Premium">
                                        </div>
                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="{{asset('mg/icons/icon-level.svg')}}">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Medium Level">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="{{asset('mg/icons/icon-clock-grey.svg')}}">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="8 Hours">
                                        </div>

                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="#">SEARCH</a>   
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>-->




        <div class="nicdark_width_100_percentage">



            <!--START results-->
            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                <div class="nicdark_section nicdark_box_sizing_border_box ">

                    <div class="nicdark_width_100_percentage nicdark_float_left">
                        <h2 class="setlineheight"><strong>Importance Of Learning Foreign Languages</strong></h2>
                    </div>


                    <div class="nicdark_section nicdark_height_10"></div>

                    <p>The world is highly connected and interdependent. The most crucial
                        requirement to network or relocate in a foreign country is to know their
                        language of communication. There are numerous employment and higher education
                        opportunities abroad which can be utilized by the prospective jobseekers or students.
                        The Language Academy aims to fulfil this need for a comfortable and exciting mechanism
                        to educate you in the foreign language of your choice. </p> <br>
                    <p>There are high-paying employment opportunities for those who know foreign languages.
                        Be it serving at top-notch multi-national companies or choosing to study at the global
                        universities, knowing the language of that region will give you an edge over the other
                        immigrants. Additionally, you could choose to be an interpreter/translator or even freelance
                        from the comfort of your home and make huge amounts of money with this lucrative profession
                        of mastering foreign languages. </p>

                    {{--                                     
                                    <div class="nicdark_width_70_percentage nicdark_float_left nicdark_width_100_percentage_all_iphone">

                                        <div class="nicdark_section nicdark_height_20"></div>

                                        <div class="nicdark_width_50_percentage nicdark_float_left">
                                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative nicdark_padding_right_20">
                                                <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_5" width="15" src="{{asset('mg/icons/icon-pen.svg')}}">
                    <input
                        class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                        type="text" placeholder="Keyword">
                </div>
            </div>
            <div class="nicdark_width_50_percentage nicdark_float_left">
                <div class="nicdark_float_left nicdark_width_100_percentage_all_iphone">
                    <a class="nicdark_bg_white_hover nicdark_color_blue_hover nicdark_border_2_solid_blue nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                        href="courses.html">SEARCH</a>
                </div>
            </div>
        </div> --}}


        {{-- <div class="nicdark_width_30_percentage nicdark_float_left nicdark_text_align_right nicdark_width_100_percentage_all_iphone">

                                        <div class="nicdark_section nicdark_height_20"></div>

                                        <div class="nicdark_display_inline_block nicdark_bg_red nicdark_border_1_solid_red nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                                            <a class="nicdark_tooltip_jquery" title="Advanced Settings" href="#"><img alt="" class="nicdark_float_left" width="23" src="{{asset('mg/icons/icon-settings-white.svg')}}"></a>
    </div>

    <div
        class="nicdark_display_inline_block nicdark_bg_blue nicdark_border_1_solid_blue nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
        <a class="nicdark_tooltip_jquery" title="List View" href="#"><img alt="" class="nicdark_float_left" width="23"
                src="{{asset('mg/icons/icon-list-white.svg')}}"></a>
    </div>

    <div class="nicdark_display_inline_block nicdark_border_1_solid_grey_2 nicdark_padding_8 nicdark_border_radius_3">
        <a class="nicdark_tooltip_jquery" title="Grid View" href="#"><img alt="" class="nicdark_float_left" width="23"
                src="{{asset('mg/icons/icon-grid-grey.svg')}}"></a>
    </div>

</div>
--}}
</div>
</div>
<!--END results-->



<div class="nicdark_width_100_percentage">










    {{-- start data --}}
    {{-- start data --}}
    {{-- start data --}}
    @foreach($courses as $course)
    <!--START preview-->
    <div
        class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section"
                        src="{{asset('storage/images/courses/thumbnail/'.$course->thumbnail)}}">
                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box settitlecourse">
                    <h3 class="setcoursename set-head-t">             
                    <img class="nicdark_border_1_solid_grey" src="{{asset('storage/images/courses/flag/'.$course->flag)}}" alt="" width="20">
                    <a class="nicdark_color_greydark nicdark_first_font setcoursenamepadd set-my-c-p" href=""> {{$course->course_name}}</a></h3>
                    <p><a class="" href="">{!!$course->short_description!!}</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box ">


                    <div
                        class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left set-ans-t">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_blue nicdark_first_font setcoursereamorbtn nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_16 setbtnwidth"
                            href="{{url('course/'.$course->id.'/'.$course->slug)}}">Read More</a>
                    </div>

                </div>

            </div>


            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
    @endforeach
    {{ $courses->links() }}
    <!--END preview-->
    {{-- End data --}}
    {{-- End data --}}
    {{-- End data --}}


</div>





<div class="nicdark_section nicdark_height_50"></div>
</div>
</div>
<!--end container-->
</div>
@endsection
<style>
        .course-page-c a{
            color:#87ceeb !important;
        }
</style>