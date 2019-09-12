
  @include('admin.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="row">
		<div class="col-md-8">
				<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Please determine date Rewards</h3>
              </div>
              <div class="card-body">
			  <table class="table table-hover">
                  <tbody>
                  <tr>
                    <td><b>Date Selected</b></td>
                    <td><b>:</b></td>
                    <td><span class="badge bg-success" id="date_label"></span></td>
                  </tr>
                  
                </tbody></table>
					<input type="text" name="birthday" value="{{$today->Day()}}/{{$today->Month()}}/{{$today->Year()}}" />
@push('scripts')
<script>
var b;
$(function() {
	b = moment([{{$today->Year()}}, {{$today->Month()}}, {{$today->Day()}}]);
  $('input[name="birthday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: {{$today->Year()}},
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
		var m = start.month()+1;
		var a = moment([start.year(), m, start.date()]);
		var d = a.diff(b, 'days'); 
		if(d >0){
			b = a;
			$.ajax({
		url:"{{url('admin/setdate/')}}",
		data:"_token={{csrf_token()}}&&date_now="+start.format("YYYY-MM-DD"),
		type:"post",
		success:function(t){
			if(t.status ==1){
				$("#date_label").removeClass("bg-danger");
				$("#date_label").addClass("bg-success");
				$("#date_label").html(start.format("D MMMM YYYY") +"  ("+ t.message+")");	
			}else{
				$("#date_label").removeClass("bg-success");
				$("#date_label").addClass("bg-danger");
				$("#date_label").html(t.message);	
			}
		},
		error:function(t){
				$("#date_label").removeClass("bg-success");
				$("#date_label").addClass("bg-danger");
				$("#date_label").html("Error occured, please try again");
		}
	});
					
		}else{
			$("#date_label").removeClass("bg-success");
			$("#date_label").addClass("bg-danger");
			$("#date_label").html("Please choose date going forward!");		
		}
	});
});
function sendToServer(dt){
	
}
</script>
@endpush
                </div>
              <!-- /.card-body -->
             
            </div>
		</div>
		</div>
	  </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @include('admin.footer');
