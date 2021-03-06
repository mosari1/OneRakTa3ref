
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">

            <section class="login_content">
                {!! Form::open(array('url' => 'Authentification')) !!}
                    <h1>Autentification</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" name="username" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Connecter</button><br>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        @if(Session::has('user_not_found_msg'))
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                <button href="#" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                                <i>{!! session('user_not_found_msg') !!}</i>
                            </div>
                        @endif
                        <div>
                            <img src="images/logo.png" alt="" class="bs-brand-logos">
                            <h1>OneGest</h1>
                            <p>©2016 All Rights Reserved.<a href="http://www.ooneclick.com/" class="-external-link">OneClick Development.</a> Privacy and Terms</p>
                        </div>
                    </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
</div>
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>