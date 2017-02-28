@if(Auth::guest())
    @else
<h1 class="page-header">Application Form & Passbook Fee
    <div class="pull-right">
        <a href="javascript:ajaxLoad('appformandpassbook/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('appformandpassbook_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('appformandpassbook/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('appformandpassbook/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=member_name&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='member_name'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=member_id&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='member_id'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=app_form&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Entry Form Fee
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='app_form'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=passbook&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Passbook 
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='passbook'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=share_amount&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Entry Share Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='share_amount'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('appformandpassbook/list?field=saving_amount&sort={{Session::get("appformandpassbook_sort")=="asc"?"desc":"asc"}}')">
                Entry Saving Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('appformandpassbook_field')=='saving_amount'?(Session::get('appformandpassbook_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($appformandpassbooks as $key=>$appformandpassbook)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$appformandpassbook->member_name}}</td>
            <td>{{$appformandpassbook->member_id}}</td>
            <td>{{$appformandpassbook->app_form}}</td>
            <td align="right"><!-- $  -->{{$appformandpassbook->passbook}}</td>
            <td>{{$appformandpassbook->share_amount}}</td>
            <td>{{$appformandpassbook->saving_amount}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('appformandpassbook/update/{{$appformandpassbook->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('appformandpassbook/delete/{{$appformandpassbook->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$appformandpassbooks->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$appformandpassbooks->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>