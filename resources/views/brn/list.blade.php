@if (Auth::guest())
@else
    <h1 class="page-header">Branches
        <div class="pull-right">
            <a href="javascript:ajaxLoad('brn/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>New</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('brn_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('brn/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('brn/list')}}?ok=1&search='+$('#search').val())"><i
                            class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="50px" style="text-align: center">Serial No</th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=BranchName&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Branch Name
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='BranchName'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=BranchCode&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Branch Code
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='BranchCode'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=AreaName&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Area Name
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='AreaName'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=AreaName&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Address
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='AreaName'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=AreaName&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Mobile No
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='AreaName'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('brn/list?field=AreaName&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                    Email ID
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('brn_field')=='AreaName'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            {{--<th width="140px">Actions</th>--}}
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        $j = 0;
        ?>
        @foreach($brns as $key=>$brn)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$brn->BranchName}}</td>
                <td>{{$brn->BranchCode}}</td>
                <!-- <td>{{$brn->AreaName}}</td> -->
                <td>{{$brn->BranchAddress}}</td>
                <td>{{$brn->BranchMobileNo}}</td>
                <td>{{$brn->BranchEmail}}</td>
                <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                href="javascript:ajaxLoad('brn/update/{{$brn->id}}')">
                <i class="glyphicon glyphicon-edit"></i>update</a>
               <!--  <a class="btn btn-danger btn-xs" title="Delete"
                href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('brn/delete/{{$brn->id}}')">
                <i class="glyphicon glyphicon-trash"></i>delete
                </a> -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$brns->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$brns->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif