@extends('welcome')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dòng thời gian - phiên bản 2</font></font></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang Chủ</font></font></a>
            </li>
            <li class="breadcrumb-item">
                <a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điều khoản khác</font></font></a>
            </li>
            <li class="breadcrumb-item active">
                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dòng thời gian v.2</font></font></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-lg-12">
        <div class="ibox ">
        
        
            <div class="" id="ibox-content">

                <div id="vertical-timeline" class="vertical-container light-timeline">
                    @foreach($congViecs as $congViec)
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>{{$congViec->name_job}} 
                            @if($congViec->status_job == 1) (Free) 
                            @elseif($congViec->status_job == 2) (Dang lam)
                            @else 
                            (Ket thuc)
                            @endif
                            </h2>
                            <p>{{$congViec->mota_job}}
                            </p>
                            <a href="#" class="btn btn-sm btn-primary"> More info</a>
                            <span class="vertical-date">
                            @foreach($checkedUser as $cu)
                                @if($cu->id_cv == $congViec->id)
                                Người thực hiện: {{$cu->name}}  <br>
                                @endif
                            @endforeach
                                <small>Deadline dự kiến: {{$congViec->deadline_job}}</small> &nbsp;
                                <small>Deadline thực tế: {{$congViec->deadline_nowjob}}</small>
                            </span>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon blue-bg">
                            <i class="fa fa-file-text"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Send documents to Mike</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <a href="#" class="btn btn-sm btn-success"> Download document </a>
                            <span class="vertical-date">
                                Today <br>
                                <small>Dec 24</small>
                            </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon lazur-bg">
                            <i class="fa fa-coffee"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Coffee Break</h2>
                            <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                            <a href="#" class="btn btn-sm btn-info">Read more</a>
                            <span class="vertical-date"> Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon yellow-bg">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Phone with Jeronimo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon lazur-bg">
                            <i class="fa fa-user-md"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Go to the doctor dr Smith</h2>
                            <p>Find some issue and go to doctor. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-comments"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Chat with Monica and Sandra</h2>
                            <p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        </div>
    </div>
</div>

@stop()