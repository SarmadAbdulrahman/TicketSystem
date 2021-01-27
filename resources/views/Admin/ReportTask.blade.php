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
                    <a href="#"> Report Tasks</a>
                </li>
                <li class="active">Tasks Report</li>
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
                        Reports
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



            <h5 class="row-title"><i class="typcn typcn-th-small"></i> Report Tasks</h5>














                    <div class="row">

           <div class="col-xs-12 col-md-12">


                            <div class="widget">
                                <div class="widget-header  with-footer">
                                    <span class="widget-caption">Responsive Flip Scroll Tables</span>
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

                                    <div class="row">
                                        <div class="col-12-xs">
                                    <div style='float: left;'>
                                        <input type="button" value="Export to Report" id='excelExport' />
<br>
<br>
                                    </div>
                                    <div class="flip-scroll">


                                        </div>
                                    </div>
                                   </div>



<div id="grid">
        </div>
        <div id="eventslog" style="display: none; margin-top: 30px;">
            <div style="float: left;">
                Event Log:
                <div style="border: none;" id="events">
                </div>
            </div>
            <div style="float: left;">
                Paging Details:
                <div id="paginginfo">
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




             var url = "{{url('/rTasksReport')}}";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'id', type: 'int' },
                    { name: 'issue_name', type: 'string' },
                    { name: 'department', type: 'string' },
                    { name: 'ar_name', type: 'string' },
                    { name: 'agent_name', type: 'string' },
                    { name: 'Client_name', type: 'string' },
                    { name: 'progress', type: 'string' },
                    { name: 'agent_comment', type: 'string' },
                    { name: 'Discontinued', type: 'bool' },
                    { name: 'created_at', type: 'date'},
                    { name: 'range', map: 'created_at', type: 'date' },
                ],
                url: url,
                pagenum: 1,
                pagesize: 20,
                pager: function (pagenum, pagesize, oldpagenum) {
                    // callback called when a page or page size is changed.
                    alert('this is for me!');
                }
            };
            var dataAdapter = new $.jqx.dataAdapter(source);



                   // initialize jqxGrid
                   $("#grid").jqxGrid(
            {

                width: 1000,
                source: dataAdapter,
                selectionmode: 'multiplerowsextended',
                sortable: true,
                pageable: true,
                filterable: true,
                autoheight: true,
                columnsresize: true,
                columns: [
                    { text: 'Date', datafield: 'range', filtertype: 'range', cellsalign: 'left', width: '15%', cellsformat: 'd' },
                    { text: 'ticketId', columngroup: 'ProductDetails', datafield: 'id', width: '5%' },
                    { text: 'ticketStatus', columngroup: 'ProductDetails', datafield: 'progress', cellsalign: 'right', align: 'right', width: '25%' },
                    { text: 'issue_name', columngroup: 'ProductDetails', datafield: 'issue_name', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: '25%' },
                    { text: 'agent_comment', columngroup: 'ProductDetails', datafield: 'agent_comment', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: '25%' },
                    { text: 'department', columngroup: 'ProductDetails', datafield: 'department', align: 'right', cellsalign: 'right', cellsformat: 'c2', width:'25%' },
                    { text: 'ticketType', columngroup: 'ProductDetails', datafield: 'ar_name', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: '25%'},
                    { text: 'agent_name', columngroup: 'ProductDetails', datafield: 'agent_name', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: '25%' },
                    { text: 'Client_name', columngroup: 'ProductDetails', datafield: 'Client_name', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: '25%' },

                ],
            });

        });
    </script>
@endsection
