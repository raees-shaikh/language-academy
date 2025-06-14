<!-- All Jquery -->
<script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('dist/js/custom.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('../assets/node_modules/raphael/raphael-min.js')}}"></script>
<!--raphael JavaScript -->
<script src="{{asset('../assets/node_modules/morrisjs/morris.min.js')}}"></script>
<!--sparkline JavaScript -->
<script src="{{asset('../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{asset('../assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Google Recpatcha-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Chart JS -->
{{-- <script src="{{asset('dist/js/dashboard1.js')}}"></script> --}}
<!--tinyEditor-->
<script src="{{asset('assets/node_modules/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/node_modules/app/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!--tagiput-->
<script src="{{ asset('assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
</script>

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