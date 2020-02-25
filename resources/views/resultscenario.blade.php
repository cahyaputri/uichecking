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
                           id="dtindex">
                        <thead>
                        <tr>
                            <th style="text-align: center">List Scenario</th>
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
    @include('layouts.resultscenario')
@endsection

