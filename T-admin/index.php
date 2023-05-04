<!DOCTYPE html>
<html style="overflow: hidden;">
<video id="background-video" autoplay loop muted>
  <source src="../images/pexels-tima-miroshnichenko-7989632.mp4" type="video/mp4">
</video>

<head>
  <meta charset=" utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Theatre Admin Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .login-logo {
      white-space: nowrap;
    }

    #background-video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      z-index: -1;
    }

    b {
      color: whitesmoke;
      text-shadow: cadetblue 3px 3px 3px;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><a><b>Theatre Admin Panel</b><br>
          <b style="margin-left: -13%;"><em>Zohaib Shaikh & Taukeer Sange</em></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php session_start();
      include('../msgbox.php'); ?>
      <p class="login-box-msg">Please login to start your session</p>
      <form action="pages/process_login.php" method="post">
        <div class="form-group has-feedback">
          <input name="Email" type="text" size="25" placeholder="Username" class="form-control" />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="Password" type="password" size="25" placeholder="Password" class="form-control" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>

      <a href="../admin/index.php">Go To Main Admin Panel</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>