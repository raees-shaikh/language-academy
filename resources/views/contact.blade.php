@extends('layouts.app')
@section('pageTitle', 'Contact -')

@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_top bg-img-b"
    style="background-image:url(img/parallax/img01.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_250 custom-d-hei"></div>


            <div class="grid grid_12 set-title-c">



                <strong
                    class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font set-b-t-f">Contact
                    Us</strong>
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
            <a href="">Contact</a>



        </div>


    </div>
    <!--end container-->

</div>




<div class="nicdark_section nicdark_height_50"></div>



<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">



        <div class="grid grid_6">

            <h3><strong>Drop us a Message</strong></h3>
            <div class="nicdark_section nicdark_height_20"></div>
            {{-- <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. </p>
                    <div class="nicdark_section nicdark_height_40"></div> --}}

            <!--START form-->
            <form action="{{url('contact')}}" method="POST">
                @csrf
                <div
                    class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                    <img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                        width="15" src="{{asset('img/icons/icon-user-grey.svg')}}">
                    <input
                        class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                        type="text" name="name" placeholder="Name" value="{{old('name')}}" required>
                </div>
                <br>
                @if ($errors->has('name'))
                <span class="error error-msg-text"> {{ $errors->first('name') }} </span>
                @endif
                <div
                    class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                    <img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                        width="15" src="{{asset('img/icons/mobile.svg')}}">
                    <input
                        class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                        type="tel" name="mobile_number" placeholder="Mobile No." value="{{old('mobile_number')}}"
                        required>
                </div>
                <br>
                @if ($errors->has('mobile_number'))
                <span class="error error-msg-text"> {{ $errors->first('mobile_number') }} </span>
                @endif
                <div
                    class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                    <img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                        width="15" src="{{asset('img/icons/icon-email-grey.svg')}}">
                    <input
                        class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                        type="text" name="email" placeholder="Email" value="{{old('email')}}" required>
                </div>
                <br>
                @if ($errors->has('email'))
                <span class="error error-msg-text"> {{ $errors->first('email') }} </span>
                @endif
                <div
                    class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                    <img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20"
                        width="15" src="{{asset('img/icons/icon-pen.svg')}}">
                    <select
                        class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                        type="text" placeholder="Subject" name="subject" value="{{old('subject')}}" required>
                        <option value="" disabled selected>Choose your language</option>
                        @foreach($courses as $course)
                        <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                @if ($errors->has('subject'))
                <span class="error error-msg-text"> {{ $errors->first('subject') }} </span>
                @endif
                <div class="nicdark_section">
                    <div
                        class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                        <textarea rows="6"
                            class="nicdark_padding_left_0 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0"
                            placeholder="Message" name="message" required>{{old('message')}}</textarea>
                    </div>
                </div>
                <br>
                @if ($errors->has('message'))
                <span class="error error-msg-text"> {{ $errors->first('message') }} </span>
                @endif
                <div class="nicdark_section">
                    <div
                        class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                        <input type="submit" value="SEND NOW"
                            class="nicdark_display_inline_block nicdark_color_white nicdark_bg_blue nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 setcontactbtn"
                            href="" name="submit">
                    </div>
                </div>
            </form>
            <!--END form-->

            <div class="nicdark_section nicdark_height_50 setmapupmob"></div>

        </div>

        <div class="grid grid_6">
            <!-- <iframe class="setmobmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.3176261454412!2d72.9047168578751!3d19.079767996771427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57a7dafa4e3fd191!2sTalent%20Mantras%20Multiactivity%20Centre!5e0!3m2!1sen!2sin!4v1589189333671!5m2!1sen!2sin"width="600" height="230" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                <iframe class="setmobmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.633645459484!2d72.90368361490121!3d19.07983858708566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f6ca95c96f%3A0x8450a15141193fa2!2sThe%20Language%20Academy!5e0!3m2!1sen!2sin!4v1593847953013!5m2!1sen!2sin" width="600" height="230" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


        <div class="grid grid_6 setpmapbottom">




            <tr class="nicdark_border_bottom_2_solid_grey">
                {{-- <div class="">
                            <h6 class="nicdark_text_transform_uppercase"><strong>Address :</strong></h6>
                        </div> --}}
                <div class="nicdark_padding_10">
                    <p class="nicdark_border_bottom_2_solid_grey"> <strong class="setadd">ADDRESS : </strong>1003, 10th Floor, Bldg No. 67A, Daya Sagar CHS, Next To Fusion Fitness Gym, Tilak Nagar, Chembur, Mumbai - 400089
                     {{-- 21 B Wing,
                        1st Floor, The New Ghatkopar Happy Home CHS <span class="setaddltd"> Ltd., Opp. Gurukrupa Hotel,
                            Tilak Road, Ghatkopar East,
                            <span class="setmumbai">Mumbai - 400077.</span> </span></p> --}}
                </div>
            </tr>
            <div
                class="nicdark_float_left nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_right_10 nicdark_padding_right_0_all_iphone nicdark_box_sizing_border_box">





                <table class="nicdark_section">
                    <tbody>

                        <tr class="">
                            {{-- <td class="nicdark_padding_10 setphone">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>phone :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10 setnum"><a href="tel: +91-9702222293">+91-9702222293</a> <a href="tel: +91-9702222294">/ 94</a></td> --}}

                            <div class="nicdark_padding_10">
                                <p class="">
                                    <strong class="setadd">PHONE :</strong><a class="setnum"
                                        href="tel: 919702222294">+91-9702222294</a>
                                    {{-- <a href="tel: +91-9702222294">/ 94</a></p> --}}</p>
                            </div>

                        </tr>
                    </tbody>
                </table>



            </div>


            <div
                class="nicdark_float_left nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_left_10 nicdark_padding_left_0_all_iphone nicdark_box_sizing_border_box">





                <table class="nicdark_section">
                    <tbody>
                        <tr class="">
                            {{-- <td class="nicdark_padding_10 setphone">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>email :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10 setnum"><a href="mail: hello@tlacademy.in">hello@tlacademy.in</a></td>
                                   --}}
                            <div class="nicdark_padding_10">
                                <p class="">
                                    <strong class="setadd">EMAIL :</strong><a class="setnum" target="_blank"
                                        href="mailto: hello@tlacademy.in">hello@tlacademy.in</a>
                                </p>
                            </div>


                        </tr>
                        {{-- <tr class="">
                                    <td class="nicdark_padding_10 ">
                                        <h6 class="nicdark_text_transform_uppercase"><strong>Email :</strong></h6>
                                    </td>
                                    <td class="nicdark_padding_10"><p class=" nicdark_text_align_right">info@foodlab.com</p></td>
                                </tr> --}}
                    </tbody>
                </table>



            </div>

            {{-- <div class="nicdark_section nicdark_height_15"></div>
                    <h3 class="nicdark_color_grey"><strong>AVAILABLE AT 10AM – 8PM</strong></h3>
                    <div class="nicdark_section nicdark_height_5"></div>
                     --}}
            <h1><a class="nicdark_font_size_60 nicdark_font_size_40_responsive setnumcolor setmobfontsizenum setfontconum1 set-contact-num-f"
                    href="tel:919702222294">+91-9702222294</a></h1>
            <div class="nicdark_section nicdark_height_50"></div>

            {{-- <h1><a class="nicdark_font_size_60 nicdark_font_size_40_responsive setnumcolor setmobfontsizenum setfontconum1 set-contact-num-f"
                    href="tel: +91-9987349394">+91 9987349394</a></h1>
            <div class="nicdark_section nicdark_height_50"></div> --}}


        </div>





    </div>
    <!--end container-->

</div>


@endsection
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

<style>
        .contact-page-c a{
            color:#87ceeb !important;
        }
</style>
