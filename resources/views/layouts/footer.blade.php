<div class="nicdark_section nicdark_bg_greydark">

    <div class="nicdark_section nicdark_height_50"></div>

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12 nicdark_text_align_center">

            <div class="nicdark_section">
                <a href="{{url('/')}}"><img alt="" width="270" class="" src="{{asset('img/logos/logowhite.svg')}}"></a>
                <p>The Language Academy Is A Labour Of Love. It Was Born Out Of Love For Languages. Mrs. Dheera Shah, The
                    Co-founder Of The Language Academy Has Been Passionate About Foreign Languages.
                </p>
            </div>

            <div class="nicdark_section nicdark_height_20"></div>

            <div class="nicdark_display_inline_block">
                <a target="_blank"
                    href="{{asset('https://www.facebook.com/The-Language-Academy-100630324951602/')}}"><img alt=""
                        width="40" class="nicdark_margin_right_10"
                        src="{{asset('img/icons/icon-facebook-circle.svg')}}"></a>
                <a target="_blank"
                    href="{{asset('https://instagram.com/the.languageacademy?igshid=dy4vfk0l7mlc')}}"><img alt=""
                        width="40" class="nicdark_margin_right_10"
                        src="{{asset('img/icons/icon-instagram-circle.svg')}}"></a>
                <a target="_blank" href="https://mobile.twitter.com/TheLanguageAca3"><img alt="" width="40" class="nicdark_margin_right_10"
                        src="{{asset('img/icons/icon-twitter-circle.svg')}}"></a>
                <a target="_blank" href="https://www.linkedin.com/company/the-language-academy1"><img alt="" width="40" class="nicdark_margin_right_10"
                        src="{{asset('img/icons/icon-linkedin-circle.svg')}}"></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCYTggmQ4VLEck1QMpb0NMsQ"><img alt="" width="40" class="nicdark_margin_right_10"
                         src="{{asset('img/icons/icon-youtube-circle.svg')}}"></a>
            </div>

        </div>

    </div>
    <!--end container-->

    <div class="nicdark_section nicdark_height_50"></div>

</div>

<div class="nicdark_section nicdark_bg_greydark">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix nicdark_border_top_1_solid_greydark">


        <div class="grid grid_6 nicdark_text_align_center_responsive setbottomlinepadd">
            <p class="nicdark_color_grey nicdark_font_size_14 setbottomline setcopyright">© Copyright
                <?php echo date("Y");?> The Language Academy | Designed & Developed by <a target="_blank"
                    href="https://www.acetrot.com/">Acetrot</a></p>
        </div>

        <div
            class="grid grid_6 nicdark_text_align_right nicdark_text_align_center_responsive nicdark_border_top_1_solid_greydark_responsive nicdark_display_none_all_iphone">

            <div class="nicdark_navigation_copyright">
                <ul>
                    <li>
                        <a href="{{url('/')}}">HOME</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">ABOUT</a>
                    </li>
                    <li>
                        <a href="{{url('courses')}}">COURSES</a>
                    </li>
                    <li>
                        <a href="{{url('gallery')}}">GALLERY</a>
                    </li>
                    <li>
                        <a href="{{url('careers')}}">CAREERS</a>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">CONTACT</a>
                    </li>

                </ul>
            </div>

        </div>


    </div>
    <!--end container-->

</div>

</div>
</div>


<div class="scroll-to-top scroll-to-target" id="goTop" data-target="html" style="display: block;"><span><img
            class="setuparrow" src="{{asset('img/icons/uparrow.png')}}" alt=""></span></div>

<!--js-->
<script src="{{asset('js/nicdark_plugins.min.js')}}" type="text/javascript"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js')}}">
</script>

{{-- <script src="{{asset('js/lightgallery.min.js')}}"></script> --}}
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js')}}"></script>

<!-- lightgallery plugins -->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js')}}"
    integrity="sha256-Ck/PWQUoHsc9d2X4yUALvrs71Qo5cs+gIHDWBl2Ggb8=" crossorigin="anonymous"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js')}}"
    integrity="sha256-AHet0l853BeSV7go3zu9iSVGwaWslKmuU5M3gZXUDpM=" crossorigin="anonymous"></script>


<script type="text/javascript" src="{{asset('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js')}}">
</script>

<script>
    $("#goTop").click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;   
});
$(window).scroll(function () {
    // alert();
    if ($(window).scrollTop() > 50) {
        $("#goTop").show();
    } else {
        $("#goTop").hide()
    }
});
</script>