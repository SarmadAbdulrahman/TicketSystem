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
                 
     
                                    <div class="flip-scroll">


           
                                   </div>



                                    <div id="grid"></div>
<br>


                                                             
            <div style='float: left;'>
                <input type="button" value="Export to Report" id='excelExport' />
               
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


   

        
           // var url = "../sampledata/products.xml";
            var url = "{{url('SystemAdministrator/rTasksReport')}}";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                    { name: 'id', type: 'int' },
                    { name: 'issue_name', type: 'string' },
                    { name: 'progress', type: 'string' },
                    { name: 'agent_comment', type: 'string' },
                    { name: 'Discontinued', type: 'bool' },
                    { name: 'created_at', type: 'date'},
                    { name: 'range', map: 'created_at', type: 'date' },
                ],
                url: url
            };
            var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
                if (value < 30) {
                    return '<span style="margin: 4px; margin-top:8px; float: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span>';
                }
                else {
                    return '<span style="margin: 4px; margin-top:8px; float: ' + columnproperties.cellsalign + '; color: #008000;">' + value + '</span>';
                }
            }

            var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#grid").jqxGrid(
            {
               
                width: 1000,
                source: dataAdapter,                
                pageable: true,
                autoheight: true,
                sortable: true,
                altrows: true,
               showfilterrow: true,
                filterable: true,
                enabletooltips: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                  { text: 'Date', datafield: 'range', filtertype: 'range', cellsalign: 'left', width: '15%', cellsformat: 'd' },
                  { text: 'ticketId', columngroup: 'ProductDetails', datafield: 'id', width: 250 },
                  { text: 'ticketStatus', columngroup: 'ProductDetails', datafield: 'progress', cellsalign: 'right', align: 'right', width: 200 },
                  { text: 'issue_name', columngroup: 'ProductDetails', datafield: 'issue_name', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: 200 },
                  { text: 'agent_comment', columngroup: 'ProductDetails', datafield: 'agent_comment', align: 'right', cellsalign: 'right', cellsformat: 'c2', width: 200 },

                ],
              
            });
         
            //   $("#excelExport").jqxButton();

             $("#excelExport").jqxButton();

$("#excelExport").click(function () {
    var gridContent = $("#grid").jqxGrid('exportdata', 'html');
    var newWindow = window.open('', '', 'width=1200, height=1000'),
        document = newWindow.document.open(),
        pageContent =
            '<!DOCTYPE html>\n' +
            '<html>\n' +
            '<head>\n' +
            '<meta charset="utf-8" />\n' +
            '<title>TasksReprot</title>\n' +
            '</head>\n' +
            '<body>\n' + gridContent + '\n</body>\n</html>';
    document.write(pageContent);
    document.close();
    newWindow.print();
});



        });
    </script>
@endsection
