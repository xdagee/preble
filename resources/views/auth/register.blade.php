<!doctype html>
 <!--[if IE 9 ]><html class="ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>projektLeve | register</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="an employee leve management system." />
    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/css/material-dashboard_cdea83f9.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/css/css.css" />
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/icon.css" />
    <link rel="stylesheet" type="text/css" href="/css/materialdesignicons.min.css" />
    <!--     Fonts and icons     -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" /> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form method="POST" role="form"  action="{{ url('/register') }}">
                                    {{ csrf_field() }}

                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="red">
                                        <h4 class="card-title">Excited, Join us!</h4>
                                    </div>
                                    <p class="category text-center">
                                        Create an account
                                    </p>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>

                                            <div class="form-group label-floating {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="control-label">Full name</label>

                                                <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" required autofocus />

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>

                                            <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="control-label">Email</label>

                                                <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus />

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>

                                            <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="control-label">Password</label>

                                                <input id="password" name="password" type="password" class="form-control" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>

                                            <div class="form-group label-floating">
                                                <label for="password-confirm" class="control-label">Confirm Password</label>

                                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-danger btn-simple btn-wd btn-lg">Join</button>
                                    </div>

                                    <div class="form-group label-floating text-center">
                                        <a class="btn-link" href="{{ url('/login') }}">
                                            Have an account? get in!
                                        </a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="/js/core.js"></script>
<!-- Forms Validations Plugin -->
<script src="/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/js/moment.min.js"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/js/material-dashboard_cdea83f9.js"></script>
<script type="text/javascript">
$().ready(function() {

    setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
    }, 700)
});
</script>

</html>