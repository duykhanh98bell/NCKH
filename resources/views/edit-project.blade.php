@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Basic Form</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Forms</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Basic Form</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">

<div class="row">
	<div class="col-lg-12">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>All form elements <small>With custom checbox and radion elements.</small></h5>
			</div>
			<div class="ibox-content">
				<form action="" method="post">
					@csrf
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tên dự án</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="duan_name" value="{{$id->name}}">
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tóm tắt</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="duan_tomtat" value="{{$id->tomtat}}">
							<!-- <input type="text" class="form-control"> -->
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deadline</label>
						<div class="col-sm-10">
							<input type="date" class="form-control fa fa-calendar" name="duan_deadline" value="{{$id->deadline}}">
						</div>
					</div>
					<div class="hr-line-dashed"></div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Trạng thái</label>

						<div class="col-sm-10">
							<select class="form-control m-b" name="duan_status">
								<option>Đang khởi tạo</option>
								<option>Tiến hành</option>
								<option>Kết thúc</option>
							</select>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-primary btn-sm" type="submit">Lưu</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
<div class="footer">
	<div class="float-right">
		10GB of <strong>250GB</strong> Free.
	</div>
	<div>
		<strong>Copyright</strong> Example Company &copy; 2014-2018
	</div>
</div>

</div>
</div>


<!-- Mainly scripts -->
<script src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('public/js/popper.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('public/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('public/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('public/js/inspinia.js')}}"></script>
<script src="{{asset('public/js/plugins/pace/pace.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('public/js/plugins/iCheck/icheck.min.js')}}"></script>
<script>
	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>

</body>

</html>

@stop()