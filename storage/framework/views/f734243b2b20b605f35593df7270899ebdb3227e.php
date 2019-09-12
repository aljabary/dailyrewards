
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(url('public/')); ?>/AdmiLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('public/')); ?>/AdmiLte/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="reward-box" >
  <div class="login-logo">
    <a href="#"><b>Daily</b>Rewards</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     <p>
	 API</br>
	 <table>
	 <tr>
	 <th>Endpoint</th>
	 <th></th>
	 <th>Method</th>
	 </tr>
	 <tr>
	 <td>http://{....}user/{id}/reward</td>
	 <td>:</td>
	 <td>POST</td>
	 </tr>
	 <tr>
	 <td>http://{....}user/{id}/</td>
	 <td>:</td>
	 <td>POST</td>
	 </tr>
	 <tr>
	 <td>http://{....}admin/setdate/</td>
	 <td>:</td>
	 <td>POST</td>
	 </tr>
	 </table>
	 </p>

      
    </div>
    <!-- /.login-card-body -->
  </div>
    <div class="alert alert-warning">
                    <div>Here is a simulator user gets daily rewards</div>
                </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(url('public/')); ?>/AdmiLte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(url('public/')); ?>/AdmiLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
