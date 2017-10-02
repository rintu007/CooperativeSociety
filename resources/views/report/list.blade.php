@if(Auth::guest())
    @else
<h1 class="page-header">Reports
    <div class="pull-right">
        <a href="javascript:ajaxLoad('report/personal')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> Personal Report</a>
    </div>
    <div class="pull-right">
        <a href="javascript:ajaxLoad('report/domain')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-ok-sign"></i> Domain Report</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('report_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('report/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('report/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>       
        
    </tr>
    </thead>
    <tbody>
   
    </tbody>
</table>

@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>