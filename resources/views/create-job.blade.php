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
				<form method="get">
					<div class="form-group  row">
						<label class="col-sm-2 col-form-label">Tên dự án</label>

						<div class="col-sm-10">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Mô tả</label>
						<div class="col-sm-10">
							<textarea name="" id="" cols="120" rows="10">Nhập mô tả</textarea>
							<!-- <input type="text" class="form-control"> -->
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deadline</label>
						<div class="col-sm-10">
							<input type="date" class="form-control fa fa-calendar">
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">File</label>
						<div class="col-sm-10">
							<div class="custom-file">
                                <input id="logo" type="file" class="custom-file-input">
                                <label for="logo" class="custom-file-label">Choose file...</label>
                            </div>
						</div>
					</div>

					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Checkboxes and radios <br/>
							<small class="text-navy">Normal Bootstrap elements</small>
						</label>

						<div class="col-sm-10">
							<div>
								<label> <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label>
							</div>
							<div>
								<label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one is this and that&mdash;be sure to
								include why it's great </label>
							</div>
							<div>
								<label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two can be something else and selecting it will
								deselect option one </label>
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Inline checkboxes</label>

						<div class="col-sm-10">
							<label> 
								<input type="checkbox" value="option1" id="inlineCheckbox1"> a 
							</label> 
							<label class="checkbox-inline">
								<input type="checkbox" value="option2" id="inlineCheckbox2"> b 
							</label> 
							<label>
								<input type="checkbox" value="option3" id="inlineCheckbox3"> c 
							</label>
						</div>
					</div>



					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Select</label>

						<div class="col-sm-10">
							<select class="form-control m-b" name="account">
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
							</select>

							<div class="col-lg-4 m-l-n">
								<select class="form-control" multiple="">
									<option>option 1</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
								</select>
							</div>
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-white btn-sm" type="submit">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
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