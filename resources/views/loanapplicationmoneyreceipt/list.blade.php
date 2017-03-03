@if(Auth::guest())
@else
<h1 class="page-header">Joining money receipt List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('loanapplicationmoneyreceipt_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('loanapplicationmoneyreceipt/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('loanapplicationmoneyreceipt/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/list?field=member_name&sort={{Session::get("loanapplicationmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplicationmoneyreceipt_field')=='member_name'?(Session::get('loanapplicationmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/list?field=member_id&sort={{Session::get("loanapplicationmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplicationmoneyreceipt_field')=='member_id'?(Session::get('loanapplicationmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/list?field=form_fee&sort={{Session::get("loanapplicationmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Form Price
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplicationmoneyreceipt_field')=='form_fee'?(Session::get('loanapplicationmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/list?field=created_at&sort={{Session::get("loanapplicationmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Date
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplicationmoneyreceipt_field')=='created_at'?(Session::get('loanapplicationmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($loanapplicationmoneyreceipts as $key=>$loanapplicationmoneyreceipt)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$loanapplicationmoneyreceipt->member_id}}</td>
            <td>{{$loanapplicationmoneyreceipt->member_name}}</td>
            <td>{{$loanapplicationmoneyreceipt->form_fee}}</td>
            <td>{{$loanapplicationmoneyreceipt->created_at}}</td>
            @if(Auth::user()->user_type == "admin")
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('loanapplicationmoneyreceipt/update/{{$loanapplicationmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('loanapplicationmoneyreceipt/delete/{{$loanapplicationmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
            @else
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('loanapplicationmoneyreceipt/update/{{$loanapplicationmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <!-- <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('loanapplicationmoneyreceipt/delete/{{$loanapplicationmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a> -->
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$loanapplicationmoneyreceipts->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$loanapplicationmoneyreceipts->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>