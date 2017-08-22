@if(Auth::guest())
    @else
<h1 class="page-header">Risk Fund Receivers List
   <!--  <div class="pull-right">
        <a href="javascript:ajaxLoad('riskfund/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
    <div class="pull-right">
        <a href="javascript:ajaxLoad('riskfund/update')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> Receivers</a>
    </div> -->
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('riskfund_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('riskfund/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('riskfund/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('riskfund/list?field=MemberId&sort={{Session::get("riskfund_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('riskfund_field')=='MemberId'?(Session::get('riskfund_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('riskfund/list?field=MemberName&sort={{Session::get("riskfund_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('riskfund_field')=='MemberName'?(Session::get('riskfund_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('riskfund/list?field=Amount&sort={{Session::get("riskfund_sort")=="asc"?"desc":"asc"}}')">
                Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('riskfund_field')=='Amount'?(Session::get('riskfund_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>      
        
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($riskfunds as $key=>$riskfund)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$riskfund->MemberId}}</td>
            <td>{{$riskfund->MemberName}}</td>
            <td>{{$riskfund->RiskFund}}</td>
            
           
           <!--  @if(Auth::user()->user_type == "admin")
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('riskfund/update/{{$riskfund->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('riskfund/delete/{{$riskfund->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
            @else
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('riskfund/update/{{$riskfund->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> view</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('riskfund/delete/{{$riskfund->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
            @endif -->
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$riskfunds->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$riskfunds->total()}} records
    </i>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('riskfund/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
    </div>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>