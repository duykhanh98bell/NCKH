@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Basic Form</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Dự ánán</a>
			</li>
			<li class="breadcrumb-item">
				<a>Tiến độđộ</a>
			</li>
			<li class="breadcrumb-item active">
				<strong>Tạo mới công việc</strong>
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
				<h5>Tạo mới công việc <small></small></h5>
			</div>
			<div class="ibox-content">
				<form method="post" enctype="multipart/form-data">
				@csrf
					<div class="form-group  row">
						<label class="col-sm-2 col-form-label" >Tên công việc</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" name="name_job" value="{{$editCv->name_job}}">
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Mô tả</label>
						<div class="col-sm-10">
							<textarea id="" cols="120" rows="10" name="mota_job">{{$editCv->mota_job}}</textarea>
							<!-- <input type="text" class="form-control"> -->
						</div>
					</div>

					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deadline</label>
						<div class="col-sm-10">
						@if($editCv->deadline_job)
							<p>{{$editCv->deadline_job}}</p>
							<input type="hidden" class="form-control fa fa-calendar" name="deadline_job" value="{{$editCv->deadline_job}}">
						@else
							<input type="date" class="form-control fa fa-calendar" name="deadline_job">
						@endif
						</div>
					</div>

					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deadline now</label>
						<div class="col-sm-10">
						@if($editCv->deadline_nowjob)
							<p>{{$editCv->deadline_nowjob}}</p>
							<input type="hidden" class="form-control fa fa-calendar" name="deadline_nowjob" value="{{$editCv->deadline_nowjob}}">
						@else
							
						@endif
							<input type="date" class="form-control fa fa-calendar" name="deadline_nowjob" value="{{$editCv->deadline_nowjob}}">
						</div>
					</div>
					<!-- <div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">File</label>
						<div class="col-sm-10">
							<div class="custom-file">
                                <input id="logo" type="file" class="custom-file-input" name="file_job">
                                <label for="logo" class="custom-file-label">Choose file...</label>
                            </div>
						</div>
					</div> -->

					<div class="hr-line-dashed"></div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Mức độ ưu tiên <br/>
							<!-- <small class="text-navy">Normal Bootstrap elements</small> -->
						</label>

						<div class="col-sm-10">
							<!-- <div>
								<label> <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label>
							</div> -->
							<div>
								<label> 
									<input type="radio" 
                                    @if($editCv->uutien == 1)
                                    checked
                                    @endif
                                     value="1" id="optionsRadios1" name="uutien"> D
									
								</label>
							</div>
							<div>
								<label> 
									<input type="radio" 
                                    @if($editCv->uutien == 2)
                                    checked
                                    @endif  value="2" id="optionsRadios1" name="uutien"> C
								</label>
							</div>
							<div>
								<label> 
									
									<input type="radio"
                                    @if($editCv->uutien == 3)
                                    checked
                                    @endif  value="3" id="optionsRadios1" name="uutien"> B
								</label>
							</div>
							<div>
								<label> 
									
									<input type="radio"
                                    @if($editCv->uutien == 4)
                                    checked
                                    @endif value="4" id="optionsRadios1" name="uutien"> A
								</label>
							</div>
						</div>
					</div>
					<div class="hr-line-dashed"></div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Trạng thái</label>

						<div class="col-sm-10">
							<label> 
								<input type="radio" 
                                @if($editCv->status_job == 1)
                                    checked
                                @endif
                                 value="1" name="status_job" id="inlineCheckbox1"> Mới tạo
							</label> 
							<label class="checkbox-inline">
								<input type="radio" 
                                @if($editCv->status_job == 2)
                                    checked
                                @endif
                                value="2" name="status_job" id="inlineCheckbox2"> Đang làm
							</label> 
							<label>
								<input type="radio" 
                                @if($editCv->status_job == 3)
                                    checked
                                @endif
                                value="3" name="status_job" id="inlineCheckbox3"> Hoàn thành
							</label>
						</div>
					</div>



					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Chỉ định thành viên</label>
						
						<div class="col-sm-10">
							<select class="form-control m-b" name="addUser">
								<option></option>
							@foreach($user as $us)

								<option
                                
                                @if(isset($selectCv[0]))
                                @if($selectCv[0]->id_user == $us->id)
                                    selected
                                @endif
                                @endif
                                 value="{{ $us->id }}" >{{ $us->name }}</option>

							@endforeach	
							</select>

							<!-- <div class="col-lg-4 m-l-n">
								<select class="form-control" multiple="">
									<option>option 1</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
								</select>
							</div> -->
						</div>
						<div class="hr-line-dashed"></div>
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<!-- <button class="btn btn-white btn-sm" type="submit">Cancel</button> -->
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