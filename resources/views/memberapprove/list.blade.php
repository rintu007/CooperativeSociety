@if(Auth::guest())
@else
<h1 class="page-header">Member Application List
   <!--  <div class="pull-right">
        <a href="javascript:ajaxLoad('memberapprove/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div> -->
    <div class="pull-right">
        <a href="javascript:ajaxLoad('memberapprove/memberapproved')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-ok-sign"></i>approved</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('memberapprove_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('memberapprove/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('memberapprove/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('memberapprove/list?field=MemberId&sort={{Session::get("memberapprove_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('memberapprove_field')=='MemberId'?(Session::get('memberapprove_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('memberapprove/list?field=Image&sort={{Session::get("memberapprove_sort")=="asc"?"desc":"asc"}}')">
                Image
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('memberapprove_field')=='Image'?(Session::get('memberapprove_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('memberapprove/list?field=Name&sort={{Session::get("memberapprove_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('memberapprove_field')=='Name'?(Session::get('memberapprove_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('memberapprove/list?field=NID&sort={{Session::get("memberapprove_sort")=="asc"?"desc":"asc"}}')">
                National ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('memberapprove_field')=='NID'?(Session::get('memberapprove_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('memberapprove/list?field=MobileNo&sort={{Session::get("memberapprove_sort")=="asc"?"desc":"asc"}}')">
                Mobile No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('memberapprove_field')=='MobileNo'?(Session::get('memberapprove_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($memberapproves as $key=>$memberapprove)
        <tr id="row{{$i}}">
            <td align="center" id="SerialNo{{$i}}">{{$i}}</td>
            <td id="MemberId{{$i}}">{{$memberapprove->MemberId}}</td>
            <td><img src="uploads/{{$memberapprove->Image}}" width="30" height="30"></td>
            <td>{{$memberapprove->EnglishName}}</td>
            <td>{{$memberapprove->NId}}</td>
            <td>{{$memberapprove->MobileNo}}</td>
            
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="view"
                   href="javascript:ajaxLoad('memberapprove/update/{{$memberapprove->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> view</a>
                <!-- <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('memberapprove/delete/{{$memberapprove->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a> -->
                <button onclick="shishirApproval({{$i}})" type="submit" >yes</button>
                <button onclick="shishirReject({{$i++}})" type="submit" >no</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$memberapproves->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$memberapproves->total()}} records
    </i>
</div>
@endif
<script>

         function shishirApproval(i) {
            var SerialNo = i;
            var memberapprove = 1;           
            var MemberId = document.getElementById("MemberId" + SerialNo).innerText;
            
            $.ajax({
                    type: 'get',
                    url: 'getMemberapproval',
                    data: {'MemberId': MemberId, 'Approval1': memberapprove},
                    success: function (data) {
                        // $( "row" + j ).remove();
                        document.getElementById("row" + SerialNo).remove();
                    },
                    error: function () {

                    }
                });
        }

         function shishirReject(i) {
            var memberapprove = 2;
            var SerialNo = i;
            var MemberId = document.getElementById("MemberId" + SerialNo).innerText;
          
            $.ajax({
                    type: 'get',
                    url: 'getMemberapproval',
                    data: {'MemberId': MemberId,'Approval1': memberapprove},
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