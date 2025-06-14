@extends('layouts.app')
@section('pageTitle', 'Careers -')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_top bg-img-b"
    style="background-image:url(img/parallax/img01.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_250 custom-d-hei"></div>


            <div class="grid grid_12 set-title-c">



                <strong
                    class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font set-b-t-f">Careers</strong>
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
            <a href="">Careers</a>



        </div>


    </div>
    <!--end container-->

</div>




<div class="nicdark_section nicdark_height_50"></div>



<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">



        <div class="grid grid_10">

            <h3><strong> We are Hiring</strong></h3>
            <div class="nicdark_section nicdark_height_20"></div>

            <div class="nicdark_section nicdark_box_sizing_border_box">

                <form action="{{url('careerSend')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--form-->
                    <div class="nicdark_section">
                        <div
                            class="nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <input
                                class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Name" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                        <span class="error error-msg-text"> {{ $errors->first('name') }} </span>

                        @endif
                        </div>


                        <div
                            class="setincarees nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <input
                                class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Email" name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                 <span class="error error-msg-text"> {{ $errors->first('email') }} </span>
                            @endif
                        </div>

                    </div>
                    <div class="nicdark_section">
                        <div
                            class="nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <input
                                class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Mobile No" name="number" value="{{old('number')}}">
                      
                                @if ($errors->has('number'))
                                <span class="error error-msg-text"> {{ $errors->first('number') }} </span>
                                @endif
                        </div>

                        <div
                            class="setincarees nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <select
                                class="nicdark_padding_left_0 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Subject" name="subject" required>
                                <option value="" disabled selected>Language You Would Love To Teach </option>
                                <option value="German" {{ old('subject') == "German" ? 'selected' : '' }}>German
                                </option>
                                <option value="French" {{ old('subject') == "French" ? 'selected' : '' }}>French
                                </option>
                                <option value="Spanish" {{ old('subject') == "Spanish" ? 'selected' : '' }}>Spanish
                                </option>
                                <option value="Japanese" {{ old('subject') == "Japanese" ? 'selected' : '' }}>Japanese
                                </option>
                                <option value="Mandarin" {{ old('subject') == "Mandarin" ? 'selected' : '' }}>Mandarin
                                </option>
                            </select>
                        </div>
                        @if ($errors->has('subject'))
                        <span class="error error-msg-text"> {{ $errors->first('subject') }} </span>
                        @endif
                    </div>
                    <div class="nicdark_section">
                        <div
                            class="nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <input
                                class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Area Of Residence" name="residence"
                                value="{{old('residence')}}">
                                @if ($errors->has('residence'))
                                 <span class="error error-msg-text"> {{ $errors->first('residence') }} </span>
                               @endif
                       
                        </div>

                        <div
                            class="setincarees setcountry nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <input
                                class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Country" name="country" value="{{old('country')}}">
                                @if ($errors->has('country'))
                        <span class="error error-msg-text"> {{ $errors->first('country') }} </span>
                        @endif
                        </div>

                    </div>
                    <div class="nicdark_section">
                        <div
                            class="nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <select
                                class="nicdark_padding_left_0 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                                type="text" placeholder="Subject" name="mode" required>
                                <option value="" disabled selected>Preferred Mode Of Teaching </option>
                                <option value="Online" {{ old('mode') == "Online" ? 'selected' : '' }}>Online</option>
                                <option value="Offline" {{ old('mode') == "Offline" ? 'selected' : '' }}>Offline
                                </option>
                                <option value="Both" {{ old('mode') == "Both" ? 'selected' : '' }}>Both</option>
                            </select>
                            @if ($errors->has('mode'))
                        <span class="error error-msg-text"> {{ $errors->first('mode') }} </span>
                        @endif
                        </div>

                        <div
                            class="setcountry nicdark_width_50_percentage setcarrermobwidth nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left cv-br-set">
                            <!-- <input class="setcvinput nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0 col-sm-6" 
                        type="file" id="myfile" name="uploadCV" accept=".pdf,.doc" value="{{old('uploadCV')}}" multiple> -->
                            {{-- <button><label class="cv-col" accept=".pdf,.docx" for="file">Upload CV</label></button> --}}                            
                            <label for="uploadCV">Upload CV:</label>
                            <input type="file" accept=".pdf,.docx" name="uploadCV" value="{{old('uploadCV')}}">
                            @if ($errors->has('uploadCV'))
                        <span class="error error-msg-text"> {{ $errors->first('uploadCV') }} </span>
                        @endif
                        </div>

                        </div>


                    </div>
                    <div class="nicdark_section">
                        <div
                            class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                            <button type="submit"
                                class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  border-btn-c nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "
                                value="submit" name="submit">Submit</button>
                        </div>
                    </div>
                    <!--form-->

                </form>
            </div>
            <!--END form-->

            <div class="nicdark_section nicdark_height_50 setmapupmob"></div>


        </div>







    </div>
    <!--end container-->

</div>


@endsection

<style>
    .careers-page-c a {
        color: #87ceeb !important;
    }

    input[type="file"] {
        color: #000 !important;
    }

    .cv-col {
        color: #000 !important;
    }

    label {
        color: #000 !important;

    }

    .cv-br-set {
        padding: 13px !important;
        border-bottom: 2px solid #f1f1f1;
    }
</style>


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::get('alert-type') =="success")
            @if(Session::has('message'))
                toastr.success("{{Session::get('message')}}");
@endif
@elseif(Session::get('alert-type') =="info")
@if(Session::has('message'))
toastr.info("{{Session::get('message')}}");
@endif
@elseif(Session::get('alert-type') == "error")
@if(Session::has('message'))
toastr.error("{{Session::get('message')}}");
@endif
@else
@if(Session::has('message'))
toastr.warning("{{Session::get('message')}}");
@endif
@endif
</script>

@endsection