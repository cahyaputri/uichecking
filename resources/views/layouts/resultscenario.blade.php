<?php
?>
<script>
    $(function () {
        $('#dtindex').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('dtresultscenario') !!}',
                type: 'POST',
                data: function (d) {
                    d.selector1 = '{{$selector1}}';
                    d.selector2 = '{{$selector2}}';
                    d.selector3 = '{{$selector3}}';
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                {
                    data: 'tc_scenario', name : 'tc_scenario',
                    render : function (data, type, row, meta) {
                        return '<a href="{{asset('resreport')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4='+data+'">'+data+'</a>'
                    }
                }
            ]
        });
    });
</script>

