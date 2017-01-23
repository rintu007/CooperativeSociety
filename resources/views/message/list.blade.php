<h1 class="page-header">Share Certificate List
    <div class="pull-right">
        <a href="javascript:ajaxload('message/create')" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus-sign"></i>New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{Session::get(message_search)}}" onkeydown="if (event.keyCode==13) ajaxload('{{url('message/list')}}ok=1&search='+this.value)"
               placeholder="serch..." type="text">
        <div class="input-group-btn">
            <button type="button" class="btn btn-default" onclick="ajaxload('{{url('message/list')}}ok=1&search='+$('#search').val())"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">Serial No</th>
        <th>
            <a href="javascript:ajaxload('message/list?field=member_id&sort={{Session::get("message_sort")=="asc"?"desc":"asc"}}')">Member Id</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='member_id'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
        <th>
            <a href="javascript:ajaxload('message/list?field=member_name&sort={{Session::get("message_sort")=="asc"?"desc":"asc"}}')">Member Name</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='member_name'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
        <th>
            <a href="javascript:ajaxload('message/list?field=share_number&sort={{Session::get("message_sort")=="asc"?"desc":"asc"}}')">No of Shares</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='share_number'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
        <th>
            <a href="javascript:ajaxload('message/list?field=share_amount&sort={{Session::get("message_sort")=="asc"?"desc":"asc"}}')">Share Amount</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='share_amount'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
        <th>
            <a href="javascript:ajaxload('message/list?field=created_at&sort={{Session::get("message_sort")=="asc"?"desc":"asc"}}')">Prepared at</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='created_at'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
        <th>
            <a href="javascript:ajaxload('sharecertifiate/list?field=updated_at&sort={{Session::get("sharecertifiate_sort")=="asc"?"desc":"asc"}}')">Updated at</a>
            <i style="font-size: 12px" class="glyphicon{{Session::get('message_field')=='updated_at'?(Session::get('message_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):''}}"></i>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1;?>
    @foreach($messages as $key=>$message)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$message->member_id}}</td>
            <td>{{$message->member_name}}</td>
            <td>{{$message->share_number}}</td>
            <td>{{$message->share_amount}}</td>
            <td>{{$message->created_at}}</td>
            <td>{{$message->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$messages->render()) !!}}</div>
<div class="row">
    <i class="col-sm-12">
        Total:{{$messages->total()}} records
    </i>
</div>
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