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
                    <a href="#">Ticket</a>
                </li>
                <li class="active">create new  Ticket</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>


                    Tickets
                    <small>
                        <i class="fa fa-angle-right"></i>
                        create a Ticket
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="#">
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
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>{{trans('messages.Create_ticket')}}</h5>
            <div class="row">


                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 col-xs-10">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-blue">
                                    <span class="widget-caption">{{ trans('messages.ticket_form') }} </span>
                                </div>
                                <div class="widget-body">
                                    <div id="registration-form">
                                        <form role="form" method="PUT" id="cc"    action="{{url('ClientAgent/StoreTicket')}}"   enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-title">
                                                {{ trans('messages.ticket_information') }}
                                            </div>


                                            <div class="form-group">
                                                <select class="form-control Roles" name="ticket_type">
                                                    @foreach($TicketTypes as $TicketType)
                                                        <option value="{{$TicketType->id}}">{{$TicketType->ar_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <select class="form-control Roles" name="Prblem_Name">
                                                    @foreach($ProblemTypes as $ProblemType)
                                                        <option value="{{$ProblemType->id}}">{{$ProblemType->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>





                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <textarea name="ticket" rows="15" cols="75"></textarea>
                                                </span>
                                            </div>


                                            <input type="file" name="FILE">


                                            <hr class="wide"/>
                                            <button  type="submit"  class="btn btn-blue">{{ trans('messages.Save') }}</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department
            $('.Roles').select2({
                placeholder: 'Select Roles'
            });

            //  $("#myForm").submit();

            var frm = $('#cc');


            frm.submit(function (e) {

                e.preventDefault();

                $.ajax({
                    type: frm.attr('method'),
                    url: frm.attr('action'),
                    data: frm.serialize(),
                    success: function (data) {
                        console.log('Submission was successful.');

                        Swal.fire(
                            '{{ trans('messages.success') }}',
                            '{{ trans('messages.ticket_created') }}',
                            'success'
                        );


                        console.log(data);
                    },
                    error: function (data) {
                        console.log(data);
                        Swal.fire(
                            'fail',
                            'please fill all field',
                            'fail'
                        );
                    },
                });



            });
        });
    </script>
@endsection
