<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>تسجيل الدخول | فيلم زوين</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/') }}/designe/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/designe/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fontlibrary.org/face/droid-arabic-kufi">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/') }}/designe/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/designe/adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/') }}/designe/adminlte/plugins/iCheck/square/blue.css">

<style type="text/css">
  *:not(i) {
    /*font-family: Noto Kufi Arabic, arial!important;*/
    font-family: 'DroidArabicKufiRegular', 'Open Sans', sans-serif;
    outline: none!important;
}
.btn.btn-flat {
  position: relative;
  right: 110px;
}
.links-forgot {
  text-align: right;
}
button[type="submit"] {
  font-family: 'DroidArabicKufiRegular', 'Open Sans', sans-serif;
}
</style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <b>لوحة التحكم</b>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">قم بتسجيل الدخول للوحة التحكم</p>

    <form method="post">
      @csrf

      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="البرسد الإلكتروني">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="كلمة السر">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <br>
            <label>
               تدكرني <input name="rememberme" type="checkbox">
            </label>
          </div>
        </div>

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
        </div>

      </div>
    </form>

<div class="links-forgot">
  <a href="#">نسيت كلمة السر</a><br>
  <a href="register.html" class="text-center">تسجيل عضوية جديدة</a>
</div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{url('/')}}/designe/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/designe/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{url('/')}}/designe/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
