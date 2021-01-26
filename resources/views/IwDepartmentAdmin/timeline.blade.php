@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Client Agent</a>
                </li>
                <li>
                    <a href="#">Create Ticket</a>
                </li>
                <li class="active">Create new Ticket</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Client Agent
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Users
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/ClientAgent">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->

            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-left bordered-darkorange">
                                <span class="widget-caption">Inline ticket</span>
                            </div>
                            <div class="widget-body bordered-left bordered-warning">
                                <form class="form-inline"  role="form" method="post" action="{{url('IwDepartmentAdmin/StoreReply')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <div class="form-group ">
                                        <label class="sr-only" for="exampleInputEmail2">Comment</label>
                                        <textarea name="reply" id="" cols="150" rows="2"></textarea>
                                    </div>

                                    <input type="file" name="FILE">
                                </div>
                            </div>


                                    <button type="submit" class="btn btn-default">Reply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <ul class="timeline">


                    @foreach($TicketDetails as $TicketDetail)




                        <li class="timeline-node">
                            <a class="btn btn-yellow">{{Carbon\Carbon::parse($TicketDetail->created_at)->format('d-m-Y i')}}</a>
                        </li>

                        @if($TicketDetail->agent_comment!=null)
                            <li>
                                <div class="timeline-datetime">
                                <span class="timeline-time">

                                </span><span class="timeline-date">{{Carbon\Carbon::parse($TicketDetail->created_at)->format('d-m-Y i')}}</span>
                                </div>
                                <div class="timeline-badge danger">
                                    <i class="fa fa-exclamation font-120"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">

                                      Agent    @if($TicketDetail->agent_id!=null)
                                            <p>{{App\User::find($TicketDetail->agent_id)->name}}</p>
                                            @endif
                                    </span>
                                        <p class="timeline-datetime">
                                            <small class="text-muted">
                                                <i class="glyphicon glyphicon-time">
                                                </i>
                                                <span class="timeline-date">Yesterday</span>
                                                -
                                                <span class="timeline-time">7:00</span>
                                            </small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{$TicketDetail->agent_comment}}</p>
                                    </div>
                                </div>
                            </li>

                        @else

                            <li class="timeline-node">
                                <a class="btn btn-info">No Reply Agent</a>
                            </li>


                        @endif


                        <li class="timeline-inverted">
                            <div class="timeline-datetime">
                                <span class="timeline-time">

                                </span><span class="timeline-date">{{Carbon\Carbon::parse($TicketDetail->created_at)->format('d-m-Y i')}}</span>
                            </div>
                            <div class="timeline-badge danger">
                                <i class="fa fa-exclamation font-120"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Yesterday</span>
                                            -
                                            <span class="timeline-time">3:09</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a href="#">Client</a>

                                    @if($TicketDetail->customer_id!=null)
                                        <p>{{App\User::find($TicketDetail->customer_id)->name}}</p>
                                    @endif


                                    <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                        <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                    </div>
                                    <i class="text-muted text-sm">{{$TicketDetail->customer_comment}}</i>


                                    <ul>
                                            <i class="text-muted text-sm">
                                            <a href="{{url('/FILE/'.$TicketDetail->img_path )}}">Check</a>

                                            </i>
                                    </ul>


                                </div>
                            </div>
                        </li>


                        <li class="timeline-node">
                            <a class="btn btn-info">{{Carbon\Carbon::parse($TicketDetail->created_at)->format('d-m-Y i')}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <!-- /Page Body -->
        </div>
    </div>
@endsection
@extends('layouts.ThemeSource.footer')
