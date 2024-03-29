<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
  <link rel="manifest" href="./assets/images/site.webmanifest">



<!-- CSS STYLES -->
  
  <style>
  
    .login-page {
      background: rgb(86,193,197);
      background: radial-gradient(circle, rgba(86,193,197,1) 0%, rgba(66,142,174,1) 32%, rgba(45,86,149,1) 85%);
    }
    
    .container {
      position: relative;
    }

    .login-box-body {
     border-radius: 25px;
     background-color: #F8E9A1;
     box-shadow: 0 0 50px black ;
     z-index: 2;
     top: 250px;
     width:auto;
     padding-left:400px ;
     padding-right: 100px;
     position: relative;
     background-image: url(./assets/images/cmp.png);
     background-position: 5% 50%;
     background-size: 300px;
     background-repeat: no-repeat;   
    }

    .hold-transition {
      padding-top: 10px;      
    }

    .login-logo {
      font-weight: bold;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
      color: black;
    }

   .login-box-msg {
     font-weight: bold;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
      color: black;
    }

   .icheckbox_square-blue {
      border-radius: 4px;
      border-color: black;
    }

    .checkbox {
      font-weight: bold;
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;;
      color: black;
    }

    .btn.btn-primary.btn-block.btn-flat {
      border-radius: 8px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;;
    } 

    /* Media Queries */
    @media (max-width: 768px) {
      .login-box-body {
        padding-left: 10px;
        padding-right: 10px;
      }
    }
 </style>
</head>
<!-- CSS STYLES -->

<body class="hold-transition login-page">
<div class="container">
     <!-- /.login-box-body -->
  <div class="login-box-body">

    <div class="login-logo">
      <a href="<?php echo base_url('auth/login'); ?>"><b>Login</b></a>
      </div>

      <p class="login-box-msg">Sign in to start your session</p>

      <?php echo validation_errors(); ?>  

      <?php if(!empty($errors)) {
        echo $errors;
      } ?>

      <form action="<?php echo base_url('auth/login') ?>" method="post">

        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
  </div>

  <div class="login-box"> 
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
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
