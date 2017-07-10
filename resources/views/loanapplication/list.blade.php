@if(Auth::guest())
@else
<h1 class="page-header">Loanapplication List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('loanapplication/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('loanapplication_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('loanapplication/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('loanapplication/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('loanapplication/list?field=MemberId&sort={{Session::get("loanapplication_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplication_field')=='MemberId'?(Session::get('loanapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanapplication/list?field=MemberName&sort={{Session::get("loanapplication_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplication_field')=='MemberName'?(Session::get('loanapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanapplication/list?field=LoanAmount&sort={{Session::get("loanapplication_sort")=="asc"?"desc":"asc"}}')">
                Loan Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanapplication_field')=='LoanAmount'?(Session::get('loanapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($loanapplications as $key=>$loanapplication)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$loanapplication->MemberId}}</td>
            <td>{{$loanapplication->EnglishName}}</td>
            <td>{{$loanapplication->LoanAmount}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('loanapplication/update/{{$loanapplication->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('loanapplication/delete/{{$loanapplication->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$loanapplications->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$loanapplications->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>