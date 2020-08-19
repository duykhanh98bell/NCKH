@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tiến độ dự án</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Danh sách dự án</a>
            </li>
            <li class="breadcrumb-item">
                <strong>Tiến độ dự án</strong>
            </li>
            <!-- <li  class="breadcrumb-item active">
                <strong>Agile board</strong>
            </li> -->
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>To-do</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>

                    <div class="input-group">
                        <input type="text" placeholder="Add new task. " class="input form-control-sm form-control">
                        <span class="input-group-btn">
                            <a href="{{URL::to('createJob/'.$id)}}"><button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add task</button></a>
                        </span>
                    </div>

                    <ul class="sortable-list connectList agile-list" id="todo">
                        @foreach($cv as $cc)
                        @if($cc->status_job == 1)
                        
                        <li class="@if($cc->uutien == 1 ) info-element 
                        @elseif($cc->uutien ==2) success-element
                        @elseif($cc->uutien == 3) warning-element
                        @else danger-element @endif" id="task1">
                            {{$cc->name_job}}
                            @foreach($checkUser as $img)
                                @if($img->id_cv == $cc->id)
                                <a href=""><img alt="image" class="float-right btn btn-xs btn-white rounded-circle" width="50" src="../avatar/{{$img->avatar}}"></a>
                                @endif
                            @endforeach
                            <div class="agile-detail">
                                <a href="{{URL::to('editJob/'.$cc->id.'/'.$id)}}" class="float-right btn btn-xs btn-white">Tag</a>
                                
                                <i class="fa fa-clock-o"> {{$cc->deadline_job}}</i>
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-clock-o"> {{$cc->deadline_nowjob}}</i>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>In Progress</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                    <ul class="sortable-list connectList agile-list" id="inprogress">
                    @foreach($cv as $cc)
                        @if($cc->status_job == 2)
                        
                        <li class="@if($cc->uutien == 1 ) info-element 
                        @elseif($cc->uutien ==2) success-element
                        @elseif($cc->uutien == 3) warning-element
                        @else danger-element @endif" id="task1">
                            {{$cc->name_job}}
                            @foreach($checkUser as $img)
                                @if($img->id_cv == $cc->id)
                                <a href=""><img alt="image" class="float-right btn btn-xs btn-white rounded-circle" width="50" src="../avatar/{{$img->avatar}}"></a>
                                @endif
                            @endforeach
                            <div class="agile-detail">
                                <a href="{{URL::to('editJob/'.$cc->id.'/'.$id)}}" class="float-right btn btn-xs btn-white">Tag</a>
                                
                                <i class="fa fa-clock-o"> {{$cc->deadline_job}}</i>
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-clock-o"> {{$cc->deadline_nowjob}}</i>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>Completed</h3>
                    <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                    <ul class="sortable-list connectList agile-list" id="completed">
                    @foreach($cv as $cc)
                        @if($cc->status_job == 3)
                        
                        
                        <li class="@if($cc->uutien == 1 ) info-element 
                        @elseif($cc->uutien ==2) success-element
                        @elseif($cc->uutien == 3) warning-element
                        @else danger-element @endif" id="task1">
                            {{$cc->name_job}}
                            @foreach($checkUser as $img)
                                @if($img->id_cv == $cc->id)
                                <a href=""><img alt="image" class="float-right btn btn-xs btn-white rounded-circle" width="50" src="../avatar/{{$img->avatar}}"></a>
                                @endif
                            @endforeach
                            <div class="agile-detail">
                                <a href="{{URL::to('editJob/'.$cc->id.'/'.$id)}}" class="float-right btn btn-xs btn-white">Tag</a>
                                
                                <i class="fa fa-clock-o"> {{$cc->deadline_job}}</i>
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-clock-o"> {{$cc->deadline_nowjob}}</i>
                            </div>
                        </li>
                        
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">

            <h4>
                Serialised Output
            </h4>
            <p>
                Serializes the sortable's item id's into an array of string.
            </p>

            <div class="output p-m m white-bg"></div>


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

<!-- jquery UI -->
<script src="{{asset('public/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Touch Punch - Touch Event Support for jQuery UI -->
<script src="{{asset('public/js/plugins/touchpunch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('public/js/inspinia.js')}}"></script>
<script src="{{asset('public/js/plugins/pace/pace.min.js')}}"></script>

<script>
    $(document).ready(function(){

        $("#todo, #inprogress, #completed").sortable({
            connectWith: ".connectList",
            update: function( event, ui ) {

                var todo = $( "#todo" ).sortable( "toArray" );
                var inprogress = $( "#inprogress" ).sortable( "toArray" );
                var completed = $( "#completed" ).sortable( "toArray" );
                $('.output').html("ToDo: " + window.JSON.stringify(todo) + "<br/>" + "In Progress: " + window.JSON.stringify(inprogress) + "<br/>" + "Completed: " + window.JSON.stringify(completed));
            }
        }).disableSelection();

    });
</script>

</body>

</html>


@stop()