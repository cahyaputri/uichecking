<?php
?>

<script>
    $(function () {
        $('#dtreport').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('dtreport') !!}',
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
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { data: 'expected', name: 'expected',
                    render: function( data, type, full, meta ) {
                        return "<img src=\"images/" + data + "\" border=\"0\" width=\"200\" class=\"img-rounded\" align=\"center\"/>";
                    }
                },
                { data: 'result', name: 'result',
                    render: function( data, type, full, meta ) {
                        return "<img src=\"images/" + data + "\" border=\"0\" width=\"200\" class=\"img-rounded\" align=\"center\"/>";
                    }
                },
                {data: 'status', name: 'status', render: function (data, type, row) {
                        if (data == 'none')
                            return '<button type="button" class="btn btn-outline-success">'+data+'</button>\n';
                        if (data == 'Failed')
                            return '<button type="button" class="btn btn-outline-danger">'+data+'</button>\n';
                        else
                            return '<button type="button" class="btn btn-outline-primary">'+data+'</button>\n';
                    }
                },
                {
                    data: 'id', name: 'id', render: function (data, type, row) {
                        if (row['status'] == 'none')
                            return '<form action="{{url('report')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                                + '<input type="hidden" name="editID" value="' + data + '"/>'
                                + '<input type="submit" name="status" style="margin-bottom:5px;" class="btn btn-outline-primary" value="Passed"/>'
                                + '<input type="submit" name="status" style="margin-bottom:5px;" class="btn btn-outline-danger" value="Failed"/>'
                                + '</form>';
                        else if (row['status'] == 'Passed')
                            return '<form action="{{url('report')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                                + '<input type="hidden" name="editID" value="' + data + '"/>'
                                + '<input type="submit" name="status" style="margin-bottom:5px;" class="btn btn-outline-danger" value="Failed"/>'
                                + '</form>';
                        else
                            return '<form action="{{url('report')}}?selector1={{$selector1}}&selector2={{$selector2}}&selector3={{$selector3}}&selector4={{$selector4}}" method="post">{{ csrf_field() }}'
                                + '<input type="hidden" name="editID" value="' + data + '"/>'
                                + '<input type="submit" name="status" style="margin-bottom:5px;" class="btn btn-outline-primary" value="Passed"/>'
                                + '</form>';
                    }
                }

            ]
        });
    });
</script>
