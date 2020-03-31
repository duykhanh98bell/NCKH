@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Create User</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Forms</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Create User</strong>
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
				<form action="" method="post" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tên nhân viên</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" value="{{$find->name}}">
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Địa chỉ</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="address" value="{{$find->address}}">
							<!-- <input type="text" class="form-control"> -->
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Phone</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="phone" value="{{$find->phone}}">
							<!-- <input type="text" class="form-control"> -->
						</div>
					</div>
					<!-- <div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email">
							<input type="text" class="form-control">
						</div>
					</div> 
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="Password" class="form-control" name="password">
							
						</div>
					</div> -->
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Avatar</label>
						<div class="col-sm-10">
							<!-- <input type="file" class="form-control fa " name="avatar" value="{{asset('avatar/'.$find->avatar)}}"> -->
							<img src="{{asset('avatar/'.$find->avatar)}}" alt="" width="200" >
						</div>
					</div>
					<div class="hr-line-dashed"></div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Chức vụ</label>

						<div class="col-sm-10">
							<select class="form-control m-b" name="user_role">
								@foreach($role as $ro)
								<option value="{{$ro->id}}" 
								{{($user_role->role_id == $ro->id)?'selected':''}} 
									 >{{$ro->level}}</option>
								@endforeach
							</select>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-primary btn-sm" type="submit">Cập nhật</button>
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