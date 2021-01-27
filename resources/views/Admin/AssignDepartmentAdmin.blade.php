@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">SystemAdministrator</a>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
                <li class="active">Assgin Department</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    System Administrator
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
                <a class="refresh" id="refresh-toggler" href="/SystemAdministrator">
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
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>{{trans('messages.UserOption')}}</h5>


            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="widget">
                        <div class="widget-header  with-footer">
                            <span class="widget-caption">{{trans('messages.ChangeUserDepartment')}}</span>
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

                            <div class="widget-body">

                                <div class="flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content bordered-palegreen">
                                        <tr>
                                            <th>
                                                {{ trans('messages.UserName') }}
                                            </th>

                                            <th>
                                                {{ trans('messages.UserEmail') }}
                                            </th>

                                            <th>
                                                    {{ trans('messages.departments') }}
                                                </th>


                                            <th class="numeric">
                                                {{ trans('messages.Action') }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                              <td>{{App\Department::where('user_id',$user->id)->get()[0]['name']}}</td>
                                                <td>
                                                    <a id="{{$user->id}}" class=" btn btn-danger ChangeRole"> {{ trans('messages.ChangeUserDepartment') }}</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Chose Department</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form class="form-inline" method="post" action="{{url('SystemAdministrator/StoreUserDepartment')}}">
                                                    @csrf
                                                    <div class="modal-body">



                                                        <div class="form-group">
                                                            <select class="form-control  input-lg Roles" name="Department">
                                                                @foreach($Departments as $Department)
                                                                    <option value="{{$Department->id}}">{{$Department->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <input type="hidden" class="id" name="id" >
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->

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
            // this is for get a way  department  ChangePassword
            $('.Roles').select2({
                placeholder: 'Select Roles'
            });




            $('body').on('click','.ChangeRole',function () {


                var TicketID=$(this).attr('id');

                $('.id').val(TicketID);
                $('#exampleModal').modal('show');


            });



            $('body').on('click','.ChangePassword',function () {


                var TicketID=$(this).attr('id');

                $('.id').val(TicketID);
                $('#exampleModal2').modal('show');


            });




        });
    </script>
@endsection
