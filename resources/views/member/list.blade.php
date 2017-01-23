<h1 class="page-header">Member List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('member/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('member_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('member/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('member/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('member/list?field=name&sort={{Session::get("member_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px" class="glyphicon  {{ Session::get('member_field')=='name'?(Session::get('member_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('member/list?field=BanglaName&sort={{Session::get("member_sort")=="asc"?"desc":"asc"}}')">
                BanglaName
            </a>
            <i style="font-size: 12px" class="glyphicon  {{ Session::get('member_field')=='BanglaName'?(Session::get('member_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('member/list?field=FatherName&sort={{Session::get("member_sort")=="asc"?"desc":"asc"}}')">
                FatherName
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('member_field')=='FatherName'?(Session::get('member_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($members as $key=>$member)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->BanglaName}}</td>
            <td align="right">{{$member->FatherName}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('member/update/{{$member->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('member/delete/{{$member->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$members->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$members->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>