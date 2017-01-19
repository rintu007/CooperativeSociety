<h1 class="page-header">Monthly Saving List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('saving/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('saving_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('saving/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('saving/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('saving/list?field=member_name&sort={{Session::get("saving_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('saving_field')=='member_name'?(Session::get('saving_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('saving/list?field=member_id&sort={{Session::get("saving_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('saving_field')=='member_id'?(Session::get('saving_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('saving/list?field=month_name&sort={{Session::get("saving_sort")=="asc"?"desc":"asc"}}')">
                Month Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('saving_field')=='month_name'?(Session::get('saving_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('saving/list?field=saving_amount&sort={{Session::get("saving_sort")=="asc"?"desc":"asc"}}')">
                Saving Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('saving_field')=='saving_amount'?(Session::get('saving_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('saving/list?field=total_saving&sort={{Session::get("saving_sort")=="asc"?"desc":"asc"}}')">
                Total Savings
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('saving_field')=='total_saving'?(Session::get('saving_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($savings as $key=>$saving)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$saving->name}}</td>
            <td>{{$saving->member_id}}</td>
            <td>{{$saving->month_name}}</td>
            <td>{{$saving->saving_amount}}</td>
            <td></td>
            <!-- <td align="right">$ {{$saving->unitprice}}</td> -->
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('saving/update/{{$saving->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('saving/delete/{{$saving->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$savings->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$savings->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>