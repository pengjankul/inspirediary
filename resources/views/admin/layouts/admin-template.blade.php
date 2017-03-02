<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>InspireDiary</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/assets/dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/popup/popup.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->


  <link rel="stylesheet" href="{{asset('/assets/plugins/fullcalendar/fullcalendar.min.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/dist/css/skins/skin-purple-light.min.css')}}">
  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.1.4 -->
  <script src="{{asset('/assets/plugins/jQuery/jQuery-2.1.4.min.js') }} "></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
  <!-- AdminLTE App -->
  <script src="{{asset('/assets/dist/js/app.min.js')}}" type="text/javascript"></script>

  
  <script src="{{asset('/assets/plugins/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
  <script src="{{asset('/assets/popup/js/popup.min.js')}}"></script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
       Both of these plugins are recommended to enhance the
       user experience. Slimscroll is required when using the
       fixed layout. -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        หลังบ้าน
        <small>Optional description</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      {!! Breadcrumbs::render() !!}
      <!-- Your Page Content Here -->
      <a href="http://placehold.it/350x175.png" class="popup">Popup link</a>
      @yield('content')

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@include('admin.layouts.footer')
@include('admin.layouts.controlsidebar')
</div>
<!-- ./wrapper -->
<!-- <div class="messagepop pop">
    <form method="post" id="new_message" action="/messages">
        <p><label for="email">Your email or name</label><input type="text" size="30" name="email" id="email" /></p>
        <p><label for="body">Message</label><textarea rows="6" name="body" id="body" cols="35"></textarea></p>
        <p><input type="submit" value="Send Message" name="commit" id="message_submit"/> or <a class="close" href="/">Cancel</a></p>
    </form>
</div> -->

<script type="text/javascript">


    $(document).ready(function(){


      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('.fc-day').bind("click", function() {

          var data = $(this).attr('data-date');
                     //console.log(data);
/*          if($(this).hasClass('selected')) {
            deselect($(this));               
          } else {
            $(this).addClass('selected');
            $('.pop').slideFadeToggle();
          }

          $('.close').on('click', function() {
            deselect($('#contact'));
            return false;
          });*/

        /*$.ajax({
            type : "POST",
            url : "<?= URL::to('admins/calendar/save')?>",
            async : false,
            dataType:"json",
            data : {'data': data},
            success:function(re)
            {
              alert(re['post']);
            }
        });*/
      });
  
    });

/*function deselect(e) {
  $('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}


$.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};*/

</script>
</body>
</html>
