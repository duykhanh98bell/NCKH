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
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a2.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>John Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a1.jpg')}}">
							<div class="m-t-xs font-bold">CEO</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Alex Johnatan</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a3.jpg')}}">
							<div class="m-t-xs font-bold">Marketing manager</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Monica Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a4.jpg')}}">
							<div class="m-t-xs font-bold">Sales manager</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Michael Zimber</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a5.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Sandra Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a6.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Janet Carton</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a1.jpg')}}">
							<div class="m-t-xs font-bold">CEO</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Alex Johnatan</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a2.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>John Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a3.jpg')}}">
							<div class="m-t-xs font-bold">Marketing manager</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Monica Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a4.jpg')}}">
							<div class="m-t-xs font-bold">Sales manager</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Michael Zimber</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a5.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Sandra Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a6.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Janet Carton</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a1.jpg')}}">
							<div class="m-t-xs font-bold">CEO</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>Alex Johnatan</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="contact-box">
				<a class="row" href="profile.html">
					<div class="col-4">
						<div class="text-center">
							<img alt="image" class="rounded-circle m-t-xs img-fluid" src="{{asset('public/img/a2.jpg')}}">
							<div class="m-t-xs font-bold">Graphics designer</div>
						</div>
					</div>
					<div class="col-8">
						<h3><strong>John Smith</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</a>
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


</body>

</html>
@stop()