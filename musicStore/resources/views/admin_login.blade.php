<!DOCTYPE html>
<html lang="en">


<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Admin login</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="backend/css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="backend/css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="backend/img/favicon.ico">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url({{URL::to('backend/img/bg-login.jpg')}}) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="{{URL::to('/')}}"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <p class="alert-danger">
                    <?php
                    $message=new \Illuminate\Support\Facades\Session();
                    $message=Session::get('message');
                    if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                    ?>
                </p>
                <h2>Login to your account</h2>
                <form class="form-horizontal" action="{{URL::to('/admin_dashboard')}}" method="post">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="adm_email" type="text" placeholder="type email adress"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="adm_password" id="password" type="password" placeholder="type password"/>
                        </div>


                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                    </fieldset>
                </form>
                <hr>
                <h3>Forgot Password?</h3>
                <p>
                    No problem, <a href="#">click here</a> to get a new password.
                </p>
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->

<!-- start: JavaScript-->

<script src="backend/js/jquery-1.9.1.min.js"></script>
<script src="backend/js/jquery-migrate-1.0.0.min.js"></script>

<script src="backend/js/jquery-ui-1.10.0.custom.min.js"></script>



<script src="{{asset('backend/js/modernizr.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
<script src="{{asset('backend/js/excanvas.js')}}"></script>
<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
<!-- end: JavaScript-->

</body>


</html>

