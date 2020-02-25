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
                    <h3>Device for References : {{$selector1}}</h3>
                    <h3>Device for Testing : {{$selector2}}</h3>
                    <h3>Application Name: {{$selector3}}</h3>
                    <h3>Use Case: {{$selector4}}</h3>
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
                            <th style="text-align: center" rowspan="2">No.</th>
                            <th style="text-align: center" rowspan="2">Device References</th>
                            <th style="text-align: center" rowspan="2">Device Testing</th>
                            <th style="text-align: center" colspan="2">Change</th>
                        </tr>
                        <tr>
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
    @include('layouts.reporttesting')
@endsection

