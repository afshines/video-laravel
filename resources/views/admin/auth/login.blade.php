<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">


    <link rel="stylesheet" href="/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="/dist/css/rtl.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page" dir="rtl">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>مدیریت</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">لطفا وارد شوید</p>
        <form action="{{ url('/admin/login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input name="email" type="email" class="form-control" placeholder="پست الکترونیکی">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input name="password" type="password" class="form-control" placeholder="کلمه عبور">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> مرا بخاطر بسپار
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/admin/password/reset') }}">فراموشی کلمه عبور</a><br>
        <a href="{{ url('/admin/register') }}" class="text-center">ثبت نام</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.4 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>


