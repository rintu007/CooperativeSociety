<h1 class="page-header">Divisional Offices
    <div class="pull-right">
        <a href="javascript:ajaxLoad('mikrofdivision/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('mikrofdivision_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('mikrofdivision/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('mikrofdivision/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">ক্রমিক নং</th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeName&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
                Office Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeName'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeNameBangla&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
                Office Name Bangla
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeNameBangla'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeCode&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
               Office Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeCode'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeAddress&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
                Address
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeAddress'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeMobileNo&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
               Mobile No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeMobileNo'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('mikrofdivision/list?field=DivisionOfficeEmail&sort={{Session::get("mikrofdivision_sort")=="asc"?"desc":"asc"}}')">
                Email ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('mikrofdivision_field')=='DivisionOfficeEmail'?(Session::get('mikrofdivision_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($mikrofdivisions as $key=>$mikrofdivision)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$mikrofdivision->DivisionOfficeName}}</td>
            <td>{{$mikrofdivision->DivisionOfficeNameBangla}}</td>
            <td>{{$mikrofdivision->DivisionOfficeCode}}</td>
            <td>{{$mikrofdivision->DivisionOfficeAddress}}</td>
            <td>{{$mikrofdivision->DivisionOfficeMobileNo}}</td>
            <td>{{$mikrofdivision->DivisionOfficeEmail}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('mikrofdivision/update/{{$mikrofdivision->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                   {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('mikrofdivision/delete/{{$mikrofdivision->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                {{--</a>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$mikrofdivisions->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$mikrofdivisions->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>