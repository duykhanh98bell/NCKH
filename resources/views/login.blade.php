
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('public/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('public/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="">
            @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <!-- <a href="#"><small>Forgot password?</small></a> -->
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p> -->
                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../../public/js/jquery-3.1.1.min.js"></script>
    <script src="../../public/js/popper.min.js"></script>
    <script src="../../public/js/bootstrap.js"></script>

</body>

</html>
