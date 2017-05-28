@if (Auth::guest())
@else
    <h1 class="page-header">ডিপিএস আবেদন তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('dpsapplication/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('dpsapplication_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('dpsapplication/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('dpsapplication/list')}}?ok=1&search='+$('#search').val())"><i
                            class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="50px" style="text-align: center">Serial No</th>
                <a href="javascript:ajaxLoad('dpsapplication/list?field=Memberid&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
                    Member Id
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('dpsapplication_field')=='Memberid'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('dpsapplication/list?field=DpsProductId&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
                    Product Id
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('dpsapplication_field')=='DpsProductId'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('dpsapplication/list?field=DpsDepositDate&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
                    Balance
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('dpsapplication_field')=='DpsDepositDate'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('dpsapplication/list?field=DpsAmount&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
                    Date
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('dpsapplication_field')=='DpsAmount'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th width="140px">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($dpsapplications as $key=>$dpsapplication)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$dpsapplication->Memberid}}</td>
                <td>{{$dpsapplication->DpsProductId}}</td>
                <td>{{$dpsapplication->DpsAmount}}</td>
                <td>{{$dpsapplication->DpsDepositDate}}</td>
                <td style="text-align: center">
                    {{--<a class="btn btn-primary btn-xs" title="Edit"--}}
                    {{--href="javascript:ajaxLoad('dpsapplication/update/{{$dpsapplication->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i> update</a>--}}
                    {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                    {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('dpsapplication/delete/{{$dpsapplication->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> Delelte--}}
                    {{--</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$dpsapplications->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$dpsapplications->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif