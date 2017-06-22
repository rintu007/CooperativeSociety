@if(Auth::guest())
    @else
<h1 class="page-header">Accounts List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('accountopen/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('accountopen_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('accountopen/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('accountopen/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('accountopen/list?field=MemberId&sort={{Session::get("accountopen_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('accountopen_field')=='MemberId'?(Session::get('accountopen_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('accountopen/list?field=MemberName&sort={{Session::get("accountopen_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('accountopen_field')=='MemberName'?(Session::get('accountopen_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('accountopen/list?field=AccountNo&sort={{Session::get("accountopen_sort")=="asc"?"desc":"asc"}}')">
                Account No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('accountopen_field')=='AccountNo'?(Session::get('accountopen_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
       
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($accountopens as $key=>$accountopen)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$accountopen->MemberId}}</td>
            <td>{{$accountopen->MemberName}}</td>
            <td>{{$accountopen->AccountNo}}</td>
           <!--  
            <td>{{$accountopen->DPS}}</td>
            <td>{{$accountopen->FDR}}</td> -->
            <!-- <td align="right"><!-- $  --><!-- {{$accountopen->passbook}}</td> -->
           <!-- <td>{{$accountopen->share_amount}}</td>
            <td>{{$accountopen->saving_amount}}</td> -->
            @if(Auth::user()->user_type == "admin")
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('accountopen/update/{{$accountopen->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('accountopen/delete/{{$accountopen->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
            @else
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('accountopen/update/{{$accountopen->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> view</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('accountopen/delete/{{$accountopen->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$accountopens->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$accountopens->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>