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
            <form action="{{url('resultscenario')}}" method="post">{{ csrf_field() }}
                <h3>Select Application</h3>
                <select class="form-control" name="selector3" id="selector3">
                    <option value="">-- select application --</option>
                    @foreach($dttsname as $item)
                        <option value="{{$item->ts_name}}">{{$item->ts_name}}</option>
                    @endforeach
                </select>
                <hr>
                <h3>Select Device for References</h3>
                <select class="form-control" name="selector1" id="selector1">
                    <option value="">-- none --</option>
                </select>
                <hr>
                <h3>Select Device for Testing</h3>
                <select class="form-control" name="selector2" id="selector2">
                    <option value="">-- none --</option>
                </select>
                <hr>
                <input type="submit" class="btn-dark" placeholder="Send">
            </form>
        </div>
    </div>
    <!-- /page content -->
@endsection
<!-- section for adding custom javascripts for this page -->
@section('addscripts')
    <script>
        $(document).ready(function(){

            $("#selector3").change(function(){
                var appName = $(this).val();
                //var csrfToken = json_encode($this->request->getParam('_csrfToken'));
                $.ajax({
                    url: '{{url("dtdevice")}}',
                    type: 'post',
                    data: {appname:appName,_token: "{{ csrf_token() }}"},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#selector1").empty();
                        $("#selector2").empty();
                        for( var i = 0; i<len; i++){
                            var deviceName = response[i]['device_name'];

                            $("#selector1").append("<option value='"+deviceName+"'>"+deviceName+"</option>");
                            $("#selector2").append("<option value='"+deviceName+"'>"+deviceName+"</option>");
                        }
                    }
                });
            });

        });
    </script>
@endsection

