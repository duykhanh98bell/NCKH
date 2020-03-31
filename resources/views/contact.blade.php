@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-9">
		<h2>Contacts</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				App Views
			</li>
			<li class="breadcrumb-item active">
				<strong>Contacts</strong>
			</li>
		</ol>
	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		@foreach($listCon as $con)
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="{{URL::to('edit-user/'.$con->id)}}">
					<div class="col-4">
						<div class="text-center">
							<img  style="height: 90px;" alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('avatar/'.$con->avatar)}}">
							<div class="m-t-xs font-bold">
								@foreach($user_role as $ur)
									@if($con->id == $ur->user_id)
										{{$ur->level}}
									@endif 
								@endforeach
							</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>{{$con->name}}</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>{{$con->address}}</strong><br>
							<abbr title="Phone">P:</abbr> {{$con->phone}}
						</address>
					</div>
				</a>
			</div>
		</div>
		@endforeach
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


</body>

</html>
@stop()