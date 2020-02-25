<?php
if (!isset($_GET["id"])) {
    $id = 0;
} else {
    $id = $_GET["id"];
    $_SESSION['id'] = $id;
}
?>
@extends ('layouts.template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="x_panel">
            <div class="x_title">
                <h3>UI Checking</h3>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="x_panel">
            <div class="row">
                <div class="x_panel">
                    <h5>Device for References : {{$selector1}}</h5>
                    <h5>Device for Testing : {{$selector2}}</h5>
                    <h5>Application Name : {{$selector3}}</h5>
                </div>
            </div>
        </div>

        <div class="x_panel">
            <div class="row">
                <div class="col-md-pull-12 table-responsive">
                    <table class="table table-bordered table-striped"
                           style="font-size: 10px; text-align: center;"
                           id="dtreport">
                        <thead>
                        <tr>
                            <th style="text-align: center">Scenario</th>
                            <th style="text-align: center">Steps</th>
                            <th style="text-align: center">Device of References</th>
                            <th style="text-align: center">Device of Testing</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Update</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
<!-- section for adding custom javascripts for this page -->
@section('addscripts')
    @include('layouts.detailsreport')
@endsection

