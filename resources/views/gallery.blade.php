@extends('layouts.app')
@section('pageTitle', 'Gallery - ')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_top bg-img-b"
    style="background-image:url(img/parallax/img01.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_250 custom-d-hei"></div>


            <div class="grid grid_12 set-title-c">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font set-b-t-f">Gallery</strong>
                <div class="nicdark_section nicdark_height_20 remove-hei-c"></div>

            </div>



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
            <a href="">Gallery</a>



        </div>


    </div>
    <!--end container-->

</div>
<div class="nicdark_section nicdark_height_50"></div>





<!--START tab-->


<div class="nicdark_section">
    {{-- <div class="nicdark_section nicdark_height_20"></div> --}}
    <div class="nicdark_section">

        <div class="nicdark_container nicdark_clearfix">




            <div class="" id="lightgallery">
                @foreach($gallery as $gall)
                <a class="setgalleryimg" href="{{asset('storage/images/gallery/'.$gall->name) }}">
                    <img width="280" height="290" class="imggallery setgalleryimgmob setgalleryimgipad galler-add-m-view"
                        src="{{asset('storage/images/gallery/'.$gall->name)}}" />
                </a>
                @endforeach
            </div>
            <!-- end row -->
        </div>

    </div>

    <div class="nicdark_section nicdark_height_10"></div>
</div>

</div>


</div>
{!! $gallery->links() !!}

<!--END tab-->




<div class="nicdark_section nicdark_height_40"></div>


@endsection
@section('js')
<script>
    $(document).ready(function() {
        $("#lightgallery").lightGallery({
           
            download : false,
            escKey:true, 
            fullScreen : true
        }); 
    });
</script>

@endsection
<style>
        .gallery-page-c a{
            color:#87ceeb !important;
        }
</style>