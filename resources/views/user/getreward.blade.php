
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
  <link rel="stylesheet" href="{{url('public/')}}/AdmiLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/')}}/AdmiLte/dist/css/adminlte.css">
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
      <p class="login-box-msg">You can claim daily rewards</p>

      <form action="{{url('user/auth/')}}" method="post">
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	   
                <div class="alert alert-danger" id="reward_error" style="display:none">
                    <div></div>
                </div>
				
				 <div class="alert alert-success" id="reward_success" style="display:none">
                    <div>{{number_format(rand(10000,50000),0,",",".")}}</div>
                </div>
           
       
        <div class="text-center">
          
            <button type="button" class="btn btn-success" onclick="getReward()">Claim Reward!</button>
         
        </div>
 <a href="{{url('logout')}}" class="float-right"><b>Logout</b></a>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
    <div class="alert alert-warning">
                    <div>Here is a simulator user gets daily rewards</div>
                </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('public/')}}/AdmiLte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/')}}/AdmiLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
function getReward(){
	$.ajax({
		url:"{{url('/user/')}}/{{$user->user_id}}/reward",
		data:"_token={{csrf_token()}}",
		type:"post",
		success:function(t){
			if(t.status ==1){
				$("#reward_success").show();
				$("#reward_error").hide();
				$("#reward_success>div").html("Congrats! you get reward: <b>Rp."+t.reward+"</b>");
			}else if(t.status ==2){
				$("#reward_error").show();
				$("#reward_success").hide();
				$("#reward_error>div").html("You have got a reward for today");
			}else if(t.status ==3){
				$("#reward_error").show();
				$("#reward_success").hide();
				$("#reward_error>div").html("No reward for today");
			}
		},
		error:function(t){
			$("#reward_error").show();
			$("#reward_success").hide();
			$("#reward_error>div").html("User not found");
		}
	});
}
</script>
</body>
</html>
