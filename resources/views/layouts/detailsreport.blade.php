<?php
?>

<script>
    $(function () {
        $('#dtreport').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('dtresreport') !!}',
                type: 'POST',
                data: function (d) {
                    d.selector1 = '{{$selector1}}';
                    d.selector2 = '{{$selector2}}';
                    d.selector3 = '{{$selector3}}';
                    d.selector4 = '{{$selector4}}';
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [

                {
                    data: 'tcScenarioResult', name: 'tcScenarioResult'
                },
                {
                    data: 'tcResult', name: 'tcResult'
                },
                {
                    data: 'imgExpected', name: 'imgExpected',
                    render: function (data, type, full, meta) {
                        return "<img src=\"images/" + data + "\" border=\"0\" width=\"200\" class=\"img-rounded\" align=\"center\"/>";
                    }
                },
                {
                    data: 'imgResult', name: 'imgResult',
                    render: function (data, type, full, meta) {
                        return "<img src=\"images/" + data + "\" border=\"0\" width=\"200\" class=\"img-rounded\" align=\"center\"/>";
                    }
                },
                {
                    data: 'statusResult', name: 'statusResult', render: function (data, type, row) {
                        if (data == 'none')
                            return '<button type="button" class="btn btn-outline-success">' + data + '</button>\n';
                        if (data == 'Failed')
                            return '<button type="button" class="btn btn-outline-danger">' + data + '</button>\n';
                        else
                            return '<button type="button" class="btn btn-outline-primary">' + data + '</button>\n';
                    }
                },
                {
                    data: 'idResult', name: 'idResult', render: function (data, type, row) {
                        if (row['statusResult'] == 'none')
                            return '<form action="{{url('returnreport')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                                + '<input type="hidden" name="editID" value="' + data + '"/>'
                                + '<input type="submit" name="statusResult" style="margin-bottom:5px;" class="btn btn-outline-primary" value="Passed"/>'
                                + '<input type="submit" name="statusResult" style="margin-bottom:5px;" class="btn btn-outline-danger" value="Failed"/>'
                                + '</form>';
                        else if (row['statusResult'] == 'Passed')
                            return '<form action="{{url('returnreport')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                                + '<input type="hidden" name="editID" value="' + data + '"/>'
                                + '<input type="submit" name="statusResult" style="margin-bottom:5px;" class="btn btn-outline-danger" value="Failed"/>'
                                + '</form>';
                        else if (row['statusResult'] == 'Failed')
                        return '<form action="{{url('returnreport')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                            + '<input type="hidden" name="editID" value="' + data + '"/>'
                            + '<input type="submit" name="statusResult" style="margin-bottom:5px;" class="btn btn-outline-primary" value="Passed"/>'
                            + '</form>';
                    else
                        return '<form action="{{url('returnreport')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                            + '<input type="hidden" name="editID" value="' + data + '"/>'
                            + '<input type="submit" name="statusResult" style="margin-bottom:5px;" class="btn btn-outline-primary" value="Passed"/>'
                            + '</form>';
                    }
                }
            ]
        });
    });
</script>
