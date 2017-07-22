@if (Auth::guest())
@else
    <h1 class="page-header">Sub Category List
        <div class="pull-right">
            <a href="javascript:ajaxLoad('subcat/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>New</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('subcat_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('subcat/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('subcat/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('subcat/list?field=CategoryName&sort={{Session::get("subcat_sort")=="asc"?"desc":"asc"}}')">
                    Category Name
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('subcat_field')=='CategoryName'?(Session::get('subcat_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('subcat/list?field=SubcategoryName&sort={{Session::get("subcat_sort")=="asc"?"desc":"asc"}}')">
                    Sub Category Name
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('subcat_field')=='SubcategoryName'?(Session::get('subcat_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th width="140px">Actions</th>
        </tr>

        </thead>
        <tbody>
        <?php $i = 1;
        $j = 0;?>
        @foreach($subcats as $key=>$subcat)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$subcat->CategoryId}}</td>
                <td>{{$subcat->SubcategoryName}}</td>
                <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                href="javascript:ajaxLoad('subcat/update/{{$subcat->id}}')">
                <i class="glyphicon glyphicon-edit"></i> edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('subcat/delete/{{$subcat->id}}')">
                <i class="glyphicon glyphicon-trash"></i> delete
                </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$subcats->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$subcats->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif