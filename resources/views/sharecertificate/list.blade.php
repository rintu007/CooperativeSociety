@if(Auth::guest())
@else
<h3 class="page-header"> Sharecertificate List
    <div class="pull-right">
        <a href="javascript:ajaxload('sharecertificate/create')" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus-sign"></i>New</a>
    </div>
</h3>
<?php echo "shisir";
    exit();?>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{Session::get(sharecertificate_search)}}" onkeydown="if (event.keyCode==13) ajaxload('{{url('sharecertificate/list')}}ok=1&search='+this.value)"
        placeholder="serch..." type="text">
        <div class="input-group-btn">
            <button type="button" class="btn btn-default" onclick="ajaxload('{{url('sharecertificate/list')}}ok=1&search='+$('#search').val())"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="50px" style="text-align: center">Serial No</th>
            <th>
                <a href="javascript:ajaxload('sharecertificate/list?field=member_id&sort={{Session::get("sharecertificate_sort")=="asc"?"desc":"asc"}}')">Member Id</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='member_id'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
            <th>
                <a href="javascript:ajaxload('sharecertificate/list?field=member_name&sort={{Session::get("sharecertificate_sort")=="asc"?"desc":"asc"}}')">Member Name</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='member_name'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
            <th>
                <a href="javascript:ajaxload('sharecertificate/list?field=share_number&sort={{Session::get("sharecertificate_sort")=="asc"?"desc":"asc"}}')">No of Shares</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='share_number'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
            <th>
                <a href="javascript:ajaxload('sharecertificate/list?field=share_amount&sort={{Session::get("sharecertificate_sort")=="asc"?"desc":"asc"}}')">Share Amount</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='share_amount'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
            <th>
                <a href="javascript:ajaxload('sharecertificate/list?field=created_at&sort={{Session::get("sharecertificate_sort")=="asc"?"desc":"asc"}}')">Prepared at</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='created_at'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
            <th>
                <a href="javascript:ajaxload('sharecertifiate/list?field=updated_at&sort={{Session::get("sharecertifiate_sort")=="asc"?"desc":"asc"}}')">Updated at</a>
                <i style="font-size: 12px" class="glyphicon{{Session::get('sharecertificate_field')=='updated_at'?(Session::get('sharecertificate_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        @foreach($sharecertificates as $key=>$sharecertificate)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$sharecertificate->member_id}}</td>
            <td>{{$sharecertificate->member_name}}</td>
            <td>{{$sharecertificate->share_number}}</td>
            <td>{{$sharecertificate->share_amount}}</td>
            <td>{{$sharecertificate->created_at}}</td>
            <td>{{$sharecertificate->updated_at}}</td>
        </tr>
            @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$sharecertificates->render()) !!}}</div>
<div class="row">
    <i class="col-sm-12">
        Total:{{$sharecertificates->total()}} records
    </i>
</div>
@endif
<script>
//    $('.pagination a'). on('click', function(event){
//        event.preventDefault();
//        ajaxload($(this).attr('href'));
//    });
    $('.pagination a').oclick(function(event){
        event.preventDefault();
        ajaxload($(this).attr('href'));
    });
</script>