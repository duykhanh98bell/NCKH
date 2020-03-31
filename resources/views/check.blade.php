@extends('welcome')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Agile board</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Miscellaneous</a>
            </li>
            <li  class="breadcrumb-item active">
                <strong>Agile board</strong>
            </li>
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
                            <a href=""><button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add task</button></a>
                        </span>
                    </div>

                    <ul class="sortable-list connectList agile-list" id="todo">
                        @foreach($cv as $cc)
                        @if($cc->status == 1)
                        <li class="warning-element" id="task1">
                            Simply dummy text of the printing and typesetting industry.
                            <div class="agile-detail">
                                <a href="#" class="float-right btn btn-xs btn-white">Tag</a>
                                <i class="fa fa-clock-o"></i> 12.10.2015
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
                        @if($cc->status == 2)
                        <li class="success-element" id="task9">
                            Quisque venenatis ante in porta suscipit.
                            <div class="agile-detail">
                                <a href="#" class="float-right btn btn-xs btn-white">Tag</a>
                                <i class="fa fa-clock-o"></i> 12.10.2015
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
                        @if($cc->status == 3)
                        <li class="info-element" id="task16">
                            Sometimes by accident, sometimes on purpose (injected humour and the like).
                            <div class="agile-detail">
                                <a href="#" class="float-right btn btn-xs btn-white">Mark</a>
                                <i class="fa fa-clock-o"></i> 16.11.2015
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