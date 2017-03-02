<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="robot" content="noindex, nofollow" />

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/assets/metro/css/metro.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/metro/css/metro-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/metro/css/metro-responsive.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/metro/css/metro-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/metro/css/metro-schemes.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
 
    <link href="{{asset('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <script src="{{asset('/assets/plugins/jQuery/jQuery-2.1.4.min.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/metro/js/metro.min.js')}}"></script>
    <style type="text/css">
        .login-form {
           width: 25rem;
            height: 20.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>
    <script>
        /*
        * Do not use this is a google analytics fro Metro UI CSS
        * */
        if (window.location.hostname !== 'localhost') {

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58849249-3', 'auto');
            ga('send', 'pageview');

        }


        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>

</head>

<body class="bg-darkTeal">

    @if (Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {{ Session::get('flash_notification.message') }}
    </div>
@endif
  <div class="login-form padding20 block-shadow" >
      
      @yield('content')
      
  </div>
    <!-- jQuery -->


</body>

</html>
