@extends('layouts.ThemeSource.sidebar')
@section('content')

<!-- Page Content -->
<div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            User Profile
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="default.htm">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-container">
                                <div class="profile-header row">
                                    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                        <img src="assets/img/avatars/divyia.jpg" alt="" class="header-avatar" />
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                        <div class="header-fullname">{{auth()->user()->name}}</div>
                                        <a href="#" class="btn btn-palegreen btn-sm  btn-follow">
                                            <i class="fa fa-check"></i>
                                            Following
                                        </a>
                                        <div class="header-information">
                                            Kim is a software developer in Microsoft. She works in ASP.NET MVC Team and collaborates with other teams.
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">{{$countticket}}</div>
                                                <div class="stats-title">  {{ trans('messages.countTicket') }}</div>
                                            </div>  
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">{{$openticket}}</div>
                                                <div class="stats-title">{{ trans('messages.pendingTicket') }}</div>
                                            </div>

                                        </div>
                                  
                                    </div>
                                </div>
                                <div class="profile-body">
                                    <div class="col-lg-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                           
                                                <li class="tab-red">
                                                    <a data-toggle="tab" href="#timeline">
                                                    {{ trans('messages.event') }}
                                                    </a>
                                                </li>
                                                <li class="tab-palegreen">
                                                    <a data-toggle="tab" id="contacttab" href="#contacts">
                                                        
                                                        {{ trans('messages.conatct') }}
                                                    </a>
                                                </li>
                                             
                                            </ul>
                                            <div class="tab-content tabs-flat">
                                                <div id="overview" class="tab-pane active">

                                                </div>
                                                <div id="timeline" class="tab-pane">
                                                    <ul class="timeline animated fadeInDown">
                                                  @foreach($tickets as $ticket)
                                                        <li>
                                                            <div class="timeline-datetime">
                                                            {{Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y i')}}
                                                            </div>
                                                            <div class="timeline-badge sky">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                            <div class="timeline-panel bordered-top-3 bordered-azure">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                       Ticket number
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            {{Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y i')}}
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>
                                                                    
                                                                     {{$ticket->id}}
                                                                    </p>
                                        
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                  
                                                                </span><span class="timeline-date">{{Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y i')}}</span>
                                                            </div>
                                                            <div class="timeline-badge sky">
                                                                <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                        <a href="default.htm"></a>Status <a href="default.htm">{{$ticket->progress}}   </a>
                                                                    </span>

                                                                     <span class="timeline-title">
                                                                        <a href="{{url('IwAgent/GetDetails?id=')}}{{$ticket->id}}">{{$ticket->issue_name}} </a> 
                                                                    </span>
                                                                    <br>
                                                                    <p> </p>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">{{Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y i')}}</span>
                                                                            -
                                                                          
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>
                                                                        <i class="orange fa fa-quote-left"></i> {{App\TicketType::find($ticket->ticket_type_id)->ar_name}} 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach

                                                        <li class="timeline-node">
                                                            <a class="btn btn-yellow">LOAD MORE</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="contacts" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="profile-contacts">

                                                                <div class="profile-badge orange"><i class="fa fa-phone orange"></i><span>Contacts</span></div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Phone	: +1 1 2345 6789 <br>
                                                                        Cell		: +1 9 876 5432
                                                                    </p>
                                                                    <p>
                                                                        Email		: kim@gmail.com
                                                                        <br>
                                                                        Skype		: kim.ryder
                                                                    </p>
                                                                    <p>
                                                                        Facebook	: facebook.com/Kim.Ryder
                                                                        <br>
                                                                        Twitter	: @KimRyder
                                                                    </p>
                                                                </div>
                                                                <div class="profile-badge azure">
                                                                    <i class="fa fa-map-marker azure"></i><span>Location</span>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Address<br>
                                                                        Department 98<br>
                                                                        44-46 Morningside Road<br>
                                                                        Toronto, Canada
                                                                    </p>
                                                                    <p>
                                                                        Office<br>
                                                                        44-46 Morningside Road<br>
                                                                        Toronto, Canada
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="contact-map" class="animated flipInY"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->


@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department
            $('.Roles').select2({
                placeholder: 'Select user'
            });

            $('body').on('click','.AssignEmp',function () {


                var TicketID=$(this).attr('id');

                $('.id').val(TicketID);
                $('#exampleModal').modal('show');


            });

        });
    </script>
@endsection
