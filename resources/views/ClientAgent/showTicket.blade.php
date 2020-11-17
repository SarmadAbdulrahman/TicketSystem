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
                    <a href="#">Show Ticket</a>
                </li>
                <li class="active">Show Ticket</li>
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
                         Tickets
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
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header  with-footer">
                        <span class="widget-caption">Tickets Progress</span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="#" data-toggle="dispose">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">

                        <div class="flip-scroll">
                            <table class="table table-bordered table-striped table-condensed flip-content">
                                <thead class="flip-content bordered-palegreen">
                                <tr>
                                    <th>
                                        {{ trans('messages.Ticket Code') }}
                                    </th>
                                    <th>
                                        {{ trans('messages.Ticket Date') }}
                                    </th>
                                    <th class="numeric">
                                        {{ trans('messages.Ticket issue') }}
                                    </th>
                                    <th class="numeric">
                                        {{ trans('messages.Ticket comment') }}
                                    </th>
                                    <th class="numeric">
                                        {{ trans('messages.Ticket status') }}
                                    </th>


                                    <th class="numeric">
                                        {{ trans('messages.Problem_type') }}
                                    </th>

                                    <th class="numeric">
                                        {{ trans('messages.Ticket type') }}
                                    </th>
                                    <th class="numeric">
                                        {{ trans('messages.Action') }}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($tickets as $ticket)
                                        <tr>
                                        <td>TICKET0000000000000{{$ticket->id}}</td>
                                        <td>{{$ticket->created_at}}</td>
                                        <td>{{$ticket->issue_name}}</td>
                                        <td>{{$ticket->agent_comment}}</td>
                                        <td>{{$ticket->progress}}</td>
                                        <td>{{$ticket->problem_name}}</td>
                                        <td>{{App\TicketType::find($ticket->ticket_type_id)->ar_name}}</td>
                                        <td><a href="{{url('ClientAgent/GetDetails?id=')}}{{$ticket->id}}" class=" btn btn-success"> {{ trans('messages.GetDetails') }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
@endsection
@extends('layouts.ThemeSource.footer')
