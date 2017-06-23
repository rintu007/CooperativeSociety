@if(Auth::guest())
<h4>Please Log in</h4>
@else
<h1 class="page-header">Withdraw Exchange List
    <!-- <div class="pull-right">
        <a href="javascript:ajaxLoad('withdraw/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div> -->
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('withdraw_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('withdraw/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('withdraw/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('withdraw/list?field=MemberId&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='MemberId'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=MemberName&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='MemberName'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=withdraw_number&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Account No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='withdraw_number'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=withdraw_amount&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
               DPS
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='withdraw_amount'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=created_at&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Date
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='created_at'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
       <!--  <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=saving_amount&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Entry Saving Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='saving_amount'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th> -->
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($withdraws as $key=>$withdraw)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$withdraw->MemberId}}</td>
            <td>{{$withdraw->MemberName}}</td>
            <td>{{$withdraw->AccountNo}}</td>
            <td align="right">{{$withdraw->MonthlyInstallment}}</td>
            <td>{{$withdraw->date}}</td>
            <td style="text-align: center">
                <!-- <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('withdraw/update/{{$withdraw->id}}')">
                    <i class="glyphicon glyphicon-plus-sign"></i> add</a> -->
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('withdraw/create/{{$withdraw->AccountNo}}')">
                    <i class="glyphicon glyphicon-minus-sign"></i> withdraw</a>
               <!--  <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('withdraw/delete/{{$withdraw->id}}')">
                    <i class="glyphicon glyphicon-cross-sign"></i> delete</a> -->
            </td>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$withdraws->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$withdraws->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>