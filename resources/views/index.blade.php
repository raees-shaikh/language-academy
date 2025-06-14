@extends('layouts.app')
@section('pageTitle', '')
@section('content')

<body id="start_nicdark_framework">
    <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center setmob"
        style="background-image: url(img/parallax/banner.jpg)">
        <div class="nicdark_section ">
            <div class="nicdark_section nicdark_height_600"></div>
            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix ">
                <div class="grid grid_12 nicdark_text_align_center">
                    <div class="nicdark_section">
                    </div>
                </div>
            </div>
            <!--end container-->


            <div class="nicdark_section nicdark_height_20"></div>
        </div>
    </div>
    <div class="nicdark_section nicdark_height_50"></div>


    <div class="nicdark_section ">



        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


        </div>
        <!--end container-->

    </div>
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">
            <h1 class="nicdark_font_size_40"><strong>Our Courses</strong></h1>
            <div class="nicdark_section nicdark_height_10"></div>
            <h3 class=" nicdark_color_grey">The Best In Our Academy</h3>
        </div>
        <div class="nicdark_width_100_percentage">

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

                        <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box settitlecourse set-ans-t">
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



            <!--START preview-->
            <div
                class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">



            </div>
            <!--END preview-->


            <!--START preview-->
            <div
                class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">


            </div>
            <!--END preview-->


            <!--START preview-->
            <div
                class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                    <!--start preview-->

                    <!--start preview-->

                </div>

            </div>
            <!--END preview-->

            <!--START preview-->
            <div
                class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">


                    <!--start preview-->

                </div>

            </div>
            <!--END preview-->


        </div>


    </div>
    <!--end container-->

    </div>
    <!--END courses-->
    {{ $courses->links() }}

    <div class="nicdark_section">


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">





        </div>
        <!--end container-->



    </div>

    <div class="nicdark_section settestpadd"></div>


    <!-- Slideshow container -->

    <!-- custom testimonials -->

    <!-- Slideshow container -->

    <div class="nicdark_section setbgcolor">
        <div class="nicdark_container nicdark_clearfix">
            <div class="slideshow-container">
                <div class="nicdark_section nicdark_height_20"></div>

                <div class="grid grid_12">

                    <h1 class="nicdark_font_size_40 nicdark_text_align_center"><strong>Testimonials</strong></h1>
                    <div class="nicdark_section nicdark_height_20"></div>
                </div>
                @foreach($tests as $test)
                <div class="mySlides">
                    <q>{{$test->comment}}</q>
                    <p class="author">{{$test->name}}</p>
                </div>
                @endforeach



                <!-- Next/prev buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>


            <!-- Dots/bullets/indicators -->
            <div class="dot-container">
                @for($i =0;$i < count($tests); $i++) <span class="dot" onclick="currentSlide({{$i}})"></span>
                    @endfor
            </div>
        </div>
    </div>

    <!-- End Custom testimoinals -->


    {{-- <div class="nicdark_section setbgcolor">
    <div class="nicdark_container nicdark_clearfix">
    <div class="slideshow-container">
        <div class="nicdark_section nicdark_height_20"></div>

        <div class="grid grid_12">

            <h1 class="nicdark_font_size_40 nicdark_text_align_center"><strong>Testimonials</strong></h1>
            <div class="nicdark_section nicdark_height_20"></div>
        </div>  
        @foreach($tests as $test)
        <!-- Full-width slides/quotes -->
        <div class="mySlides">
          <q>{{$test->comment}}</q>
    <p class="author">{{$test->name}}</p>
    </div>
    @endforeach
    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <!-- Dots/bullets/indicators -->

    <div class="dot-container">
        @for($i = 0;$i < count($tests);$i++) <span class="dot" onclick="currentSlide({{$i}})"></span>
            @endfor
    </div>
    </div>
    </div> --}}
</body>

<style>
    .home-page-c a {
        color: #87ceeb !important;
    }

    @media only screen and (max-width: 479px) and (min-width: 320px) {
        .setmob {
            background-image: url(img/parallax/mobbanner.jpg) !important;
        }
    }
</style>

@endsection

@section('js')
<script>
  
var slideIndex = 0;
showSlides();

//     var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}



</script>
@endsection