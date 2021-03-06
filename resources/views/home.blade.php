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
                    <a href="#">Tables</a>
                </li>
                <li class="active">Simple and Responsive</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Tables
                    <small>
                        <i class="fa fa-angle-right"></i>
                        simple and responsive tables
                    </small>
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
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>Simple Tables</h5>


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
                    <div class="alert alert-info fade in alert-radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-info"></i>

                        <strong>Flip Scroll Table:</strong> Flips between horizontal and vertical scrolls according to page width
                    </div>
                    <div class="flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <thead class="flip-content bordered-palegreen">
                            <tr>
                                <th>
                                    Code
                                </th>
                                <th>
                                    Company
                                </th>
                                <th class="numeric">
                                    Price
                                </th>
                                <th class="numeric">
                                    Change
                                </th>
                                <th class="numeric">
                                    Change %
                                </th>
                                <th class="numeric">
                                    Open
                                </th>
                                <th class="numeric">
                                    High
                                </th>
                                <th class="numeric">
                                    Low
                                </th>
                                <th class="numeric">
                                    Volume
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    AAC
                                </td>
                                <td>
                                    AUSTRALIAN AGRICULTURAL COMPANY LIMITED.
                                </td>
                                <td class="numeric">
                                    $1.38
                                </td>
                                <td class="numeric">
                                    -0.01
                                </td>
                                <td class="numeric">
                                    -0.36%
                                </td>
                                <td class="numeric">
                                    $1.39
                                </td>
                                <td class="numeric">
                                    $1.39
                                </td>
                                <td class="numeric">
                                    $1.38
                                </td>
                                <td class="numeric">
                                    9,395
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AAD
                                </td>
                                <td>
                                    ARDENT LEISURE GROUP
                                </td>
                                <td class="numeric">
                                    $1.15
                                </td>
                                <td class="numeric">
                                    +0.02
                                </td>
                                <td class="numeric">
                                    1.32%
                                </td>
                                <td class="numeric">
                                    $1.14
                                </td>
                                <td class="numeric">
                                    $1.15
                                </td>
                                <td class="numeric">
                                    $1.13
                                </td>
                                <td class="numeric">
                                    56,431
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AAX
                                </td>
                                <td>
                                    AUSENCO LIMITED
                                </td>
                                <td class="numeric">
                                    $4.00
                                </td>
                                <td class="numeric">
                                    -0.04
                                </td>
                                <td class="numeric">
                                    -0.99%
                                </td>
                                <td class="numeric">
                                    $4.01
                                </td>
                                <td class="numeric">
                                    $4.05
                                </td>
                                <td class="numeric">
                                    $4.00
                                </td>
                                <td class="numeric">
                                    90,641
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ABC
                                </td>
                                <td>
                                    ADELAIDE BRIGHTON LIMITED
                                </td>
                                <td class="numeric">
                                    $3.00
                                </td>
                                <td class="numeric">
                                    +0.06
                                </td>
                                <td class="numeric">
                                    2.04%
                                </td>
                                <td class="numeric">
                                    $2.98
                                </td>
                                <td class="numeric">
                                    $3.00
                                </td>
                                <td class="numeric">
                                    $2.96
                                </td>
                                <td class="numeric">
                                    862,518
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ABP
                                </td>
                                <td>
                                    ABACUS PROPERTY GROUP
                                </td>
                                <td class="numeric">
                                    $1.91
                                </td>
                                <td class="numeric">
                                    0.00
                                </td>
                                <td class="numeric">
                                    0.00%
                                </td>
                                <td class="numeric">
                                    $1.92
                                </td>
                                <td class="numeric">
                                    $1.93
                                </td>
                                <td class="numeric">
                                    $1.90
                                </td>
                                <td class="numeric">
                                    595,701
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ABY
                                </td>
                                <td>
                                    ADITYA BIRLA MINERALS LIMITED
                                </td>
                                <td class="numeric">
                                    $0.77
                                </td>
                                <td class="numeric">
                                    +0.02
                                </td>
                                <td class="numeric">
                                    2.00%
                                </td>
                                <td class="numeric">
                                    $0.76
                                </td>
                                <td class="numeric">
                                    $0.77
                                </td>
                                <td class="numeric">
                                    $0.76
                                </td>
                                <td class="numeric">
                                    54,567
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ACR
                                </td>
                                <td>
                                    ACRUX LIMITED
                                </td>
                                <td class="numeric">
                                    $3.71
                                </td>
                                <td class="numeric">
                                    +0.01
                                </td>
                                <td class="numeric">
                                    0.14%
                                </td>
                                <td class="numeric">
                                    $3.70
                                </td>
                                <td class="numeric">
                                    $3.72
                                </td>
                                <td class="numeric">
                                    $3.68
                                </td>
                                <td class="numeric">
                                    191,373
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ADU
                                </td>
                                <td>
                                    ADAMUS RESOURCES LIMITED
                                </td>
                                <td class="numeric">
                                    $0.72
                                </td>
                                <td class="numeric">
                                    0.00
                                </td>
                                <td class="numeric">
                                    0.00%
                                </td>
                                <td class="numeric">
                                    $0.73
                                </td>
                                <td class="numeric">
                                    $0.74
                                </td>
                                <td class="numeric">
                                    $0.72
                                </td>
                                <td class="numeric">
                                    8,602,291
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AGG
                                </td>
                                <td>
                                    ANGLOGOLD ASHANTI LIMITED
                                </td>
                                <td class="numeric">
                                    $7.81
                                </td>
                                <td class="numeric">
                                    -0.22
                                </td>
                                <td class="numeric">
                                    -2.74%
                                </td>
                                <td class="numeric">
                                    $7.82
                                </td>
                                <td class="numeric">
                                    $7.82
                                </td>
                                <td class="numeric">
                                    $7.81
                                </td>
                                <td class="numeric">
                                    148
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AGK
                                </td>
                                <td>
                                    AGL ENERGY LIMITED
                                </td>
                                <td class="numeric">
                                    $13.82
                                </td>
                                <td class="numeric">
                                    +0.02
                                </td>
                                <td class="numeric">
                                    0.14%
                                </td>
                                <td class="numeric">
                                    $13.83
                                </td>
                                <td class="numeric">
                                    $13.83
                                </td>
                                <td class="numeric">
                                    $13.67
                                </td>
                                <td class="numeric">
                                    846,403
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AGO
                                </td>
                                <td>
                                    ATLAS IRON LIMITED
                                </td>
                                <td class="numeric">
                                    $3.17
                                </td>
                                <td class="numeric">
                                    -0.02
                                </td>
                                <td class="numeric">
                                    -0.47%
                                </td>
                                <td class="numeric">
                                    $3.11
                                </td>
                                <td class="numeric">
                                    $3.22
                                </td>
                                <td class="numeric">
                                    $3.10
                                </td>
                                <td class="numeric">
                                    5,416,303
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</div>

@endsection
@extends('layouts.ThemeSource.footer')
