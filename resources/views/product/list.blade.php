@if (Auth::guest())
@else
    <h1 class="page-header">Product List
        <div class="pull-right">
            <a href="javascript:ajaxLoad('product/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>New</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('product_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('product/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('product/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('product/list?field=ProductName&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Product Name
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductName'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductNameBanglaFull&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Product Name (Bangla)
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductNameBanglaFull'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductCode&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Product Code
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductCode'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductType&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Activating Year
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductType'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=InterestPercentage&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                   Profit Rate(%)
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='InterestPercentage'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=Frequency&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Payement Frequency
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='Frequency'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=InstallationServiceCharge&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Duration (Year)
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='InstallationServiceCharge'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ServiceChargeCalculationMethod&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Minimum Amount
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ServiceChargeCalculationMethod'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=SavingInstallment&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    Withdrawal Date
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='SavingInstallment'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th width="140px">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($products as $key=>$product)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$product->ProductName}}</td>
                <td>{{$product->ProductNameBanglaFull}}</td>
                <td>{{$product->ProductCode}}</td>
                <td>{{$product->EffectiveFrom}}-{{$product->EffectiveTo}}</td>
                <td>{{$product->InterestPercentage}}</td>
                <td>{{$product->Frequency}}</td>
                <td>{{$product->Duration}}</td>
                <td>{{$product->MinimumBalanceAmount}}</td>
                <td>{{$product->WithdrawlFacily}}</td>
                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                    href="javascript:ajaxLoad('product/update/{{$product->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> update </a>
                    <a class="btn btn-danger btn-xs" title="Delete"
                    href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('product/delete/{{$product->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$products->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$products->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif