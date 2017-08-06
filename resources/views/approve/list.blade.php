@if(Auth::guest())
@else
<h1 class="page-header">Loan Application List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('approve/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
    <div class="pull-right">
        <a href="javascript:ajaxLoad('approve/approved')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-ok-sign"></i> approved</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('approve_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('approve/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('approve/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('approve/list?field=MemberId&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='MemberId'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('approve/list?field=MemberName&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='MemberName'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('approve/list?field=LoanType&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Loan Type
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='LoanType'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('approve/list?field=LoanAmount&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Loan Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='LoanAmount'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('approve/list?field=InterestRate&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Interest Rate
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='InterestRate'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('approve/list?field=LoanDuration&sort={{Session::get("approve_sort")=="asc"?"desc":"asc"}}')">
                Loan Duration
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('approve_field')=='LoanDuration'?(Session::get('approve_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($approves as $key=>$approve)
        <tr id="row{{$i}}">
            <td align="center" id="SerialNo{{$i}}">{{$i}}</td>
            <td ><input id="MemberId{{$i}}" value="{{$approve->MemberId}}" readonly="true" /></td>
            <td>{{$approve->EnglishName}}</td>
            <td>{{$approve->LoanType}}</td>
            <td>{{$approve->LoanAmount}}</td>
            <td>{{$approve->InterestRate}}</td>
            <td>{{$approve->LoanDuration}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="view"
                   href="javascript:ajaxLoad('approve/update/{{$approve->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> view</a>
                <!-- <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('approve/delete/{{$approve->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a> -->
                <button onclick="shishirApproval({{$i}})" type="submit" >yes</button>
                <button onclick="shishirReject({{$i++}})" type="submit" >no</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$approves->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$approves->total()}} records
    </i>
</div>
@endif
<script>

         function shishirApproval(i) {
            var SerialNo = i;
            var approve = 1;           
            var MemberId = document.getElementById("MemberId" + SerialNo).value;
            
            $.ajax({
                    type: 'get',
                    url: 'getShishirapproval',
                    data: {'MemberId': MemberId, 'Approval1': approve},
                    success: function (data) {
                        // $( "row" + j ).remove();
                        document.getElementById("row" + SerialNo).remove();
                    },
                    error: function () {

                    }
                });
        }

         function shishirReject(i) {
            var approve = 2;
            var SerialNo = i;
            var MemberId = document.getElementById("MemberId" + SerialNo).value;
          
            $.ajax({
                    type: 'get',
                    url: 'getShishirapproval',
                    data: {'MemberId': MemberId,'Approval1': approve},
                    success: function (data) {
                        // $( "row" + j ).remove();
                        document.getElementById("row" + SerialNo).remove();
                    },
                    error: function () {

                    }
                });
         }

    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
     
</script>