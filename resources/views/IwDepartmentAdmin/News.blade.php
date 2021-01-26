@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/IwDepartmentAdmin">Iw IwDepartmentAdmin</a>
                </li>
                <li>
                    <a href="#"> News & Documents</a>
                </li>
                <li class="active">Department Documents</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                Department
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Documents
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/IwDepartmentAdmin">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="/IwDepartmentAdmin">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>News & Document</h5>

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header  with-footer">
                                    <span class="widget-caption">Documents name</span>
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


                                <div class="widget-body" dir="rtl" lang="ar">

                                    <div class="flip-scroll">

                                        <form class="form"  role="form" method="post" action="{{url('IwDepartmentAdmin/StoreNews')}}">
                                    @csrf


                                    <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="doucment_name" id="DocumentName" placeholder="DocumentName" required>
                                                    <i class="glyphicon glyphicon-file circular"></i>
                                                </span>
                                            </div>


                                                 <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="doucment_type" id="DocumentType" placeholder="DocumentType" required>
                                                    <i class="glyphicon glyphicon-file circular"></i>
                                                </span>
                                            </div>


                                    <div class="form-group ">

                                        <textarea name="reply" id="editor" required></textarea>
                                    </div>


                                    <button type="submit" class="btn btn-default">Reply</button>
                                </form>

                                    </div>
                                </div>
                            </div>


                        </div>




    @foreach($posts as $post)
                          <div class="row"  dir="rtl" lang="ar">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-text-width"></i>
                                    <span class="widget-caption">Document nu. {{$post->id}}</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-action="refresh">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body no-padding">
                                    <div class="widget-main">
                                        <table class="table">
                                            <thead>

                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                     doucment_name
                                                    </td>
                                                    <td>
                                                     {{$post->doucment_name}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>doucment_type</td>
                                                    <td>
                                                        <p>{{$post->doucment_type}}</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Text alignment</td>
                                                    <td>
                                                     {!!$post->descrption!!}
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div><!--Widget Main Container-->
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    @endforeach




        </div>
    </div>


@endsection
@extends('layouts.ThemeSource.footer')

@section('js')
    <script>
        $(document).ready(function () {


          $('#editor').jqxEditor({
                height: "400px",
                width: '100%',
                rtl:true
            });





        });
    </script>
@endsection
