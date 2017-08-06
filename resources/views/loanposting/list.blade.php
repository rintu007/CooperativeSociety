@if(Auth::guest())
    @else
<h1 class="page-header">Loan Posting
    <div class="pull-right">
        <a href="javascript:ajaxLoad('loanposting/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div >
    <div class="input-group">
        <div class="form-group required col-md-4" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DomainName",$DomainInfo,null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-DivisionOfficeId-error">
        {!! Form::label("DivisionOfficeId","Div.Office",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionOfficeId",$DivisionInfo,null,["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
            <span id="DivisionOfficeId-error" class="help-block"></span>
        </div>
    </div>
   
    <div class="form-group required col-md-4" id="form-MonthId-error">
        {!! Form::label("MonthId","Month",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("MonthId",$MonthInfo,null,["class"=>"form-control MonthId required","id"=>"MonthId"]) !!}
            <span id="MonthId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-YearId-error">
        {!! Form::label("YearId","Year",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("YearId",$YearInfo,null,["class"=>"form-control YearId required","id"=>"YearId"]) !!}
            <span id="YearId-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-4" id="form-BranchId-error">
       <button id="loanpostingInfo">search</button>
    </div>
    
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=MemberId&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='MemberId'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=MemberName&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='MemberName'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=InstallmentNo&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                No of Istallment
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='InstallmentNo'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=Payable&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Payable
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='Payable'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=Interest&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Interest
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='Interest'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=Total&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Total 
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='Total'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
      
        <!--  <th>
            <a href="javascript:ajaxLoad('loanposting/list?field=ScheduleDate&sort={{Session::get("loanposting_sort")=="asc"?"desc":"asc"}}')">
                Schedule Date 
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loanposting_field')=='ScheduleDate'?(Session::get('loanposting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th> -->
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody id="loanpostingPlace">

    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$loanpostings->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$loanpostings->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });

     $(document).ready(function () {

        $(document).on('click', '#loanpostingInfo', function () {
               
                var DomainName = document.getElementById('DomainName').value;
                var DivisionName = document.getElementById('DivisionOfficeId').value;
                var MonthId = document.getElementById('MonthId').value;
                var YearId = document.getElementById('YearId').value;
                var i = 1;

                $('#loanpostingPlace').empty();
                $.ajax({
                    type: 'get',
                    url: 'getLoanpostingInfo',
                    data: {'DomainName': DomainName, 'DivisionName': DivisionName, 'MonthId': MonthId, 'YearId': YearId},
                    success: function (data) {
//                    console.log(data);
                        $.each(data, function (index, subcatObj3p) {
                            $('#loanpostingPlace').append('<tr id="row'+i+'"><td style="text-align: center " >' + i + '</td><td id="MemberId'+i+'" style="text-align: center ">' + subcatObj3p.MemberId + '</td><td id="MemberName'+i+'" style="text-align: center ">' + subcatObj3p.MemberName + '</td><td id="InstallmentNo'+i+'" style="text-align: center ">' + subcatObj3p.InstallmentNo + '</td><td id="Payable'+i+'" style="text-align: center ">' + subcatObj3p.Payable + '</td><td id="Interest'+i+'" style="text-align: center ">' + subcatObj3p.Interest + '</td><td id="Total'+i+'" style="text-align: center ">' + subcatObj3p.Total + '</td><td><button onClick="shishirSubmit('+i+')" type="submit" >submit</td></tr>');
                            i++;
                        });
                        // document.getElementById('hidden').value = i - 1;
                    },
                    error: function () {
                    }
                });
                // $.ajax(clear);
//            document.getElementById("MemberId").reset();
            });

        
       


        $(document).on('change', '.DomainName', function () {
            //console.log("yes it is change");

            var op = " ";
            var DomainName = $(this).val();
            
            $('#DivisionOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getDivisionOffice',
                data: {'id': DomainName},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DivisionOfficeId').append('<option value="'+subcatObj.id+'">'+subcatObj.DivisionOfficeName +'</option>')
                    });
                },
                error: function () {
                    alert("Enternal Connection errors.");
                }
            });
            // $.ajax(clear);
        });
        $(document).on('change', '.DivisionOfficeId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeId = $(this).val();

            $('#ZoneId').empty();
            $.ajax({
                type: 'get',
                url: 'getZone',
                data: {'id': DivisionOfficeId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ZoneId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ZoneName +'</option>')
                    });
                },
                error: function () {

                }
            });
            // $.ajax(clear);
        });

         $(document).on('change', '.ZoneId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ZoneId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#AreaId').empty();
            $.ajax({
                type: 'get',
                url: 'getArea',
                data: {'id': ZoneId},
                success: function (data) {
                    $.each(data, function (index, subcatObjArea) {
                        $('#AreaId').append('<option value="'+subcatObjArea.id+'">'+subcatObjArea.AreaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            // $.ajax(clear);
        });
    });

     function shishirSubmit(i){
                var j = i;
                var DomainName = document.getElementById("DomainName").value;
                var DivisionName = document.getElementById("DivisionOfficeId").value;                
                var MonthId = document.getElementById("MonthId").value;
                var YearId = document.getElementById("YearId").value;                
                var MemberId = document.getElementById("MemberId" + j ).innerText;
                var MemberName = document.getElementById("MemberName" + j ).innerText;
                var InstallmentNo = document.getElementById("InstallmentNo" + j ).innerText;
                var Payable = document.getElementById("Payable" + j ).innerText;
                var Interest = document.getElementById("Interest" + j ).innerText;
                var Total = document.getElementById("Total" + j ).innerText;
               
                
                $.ajax({
                type: 'get',
                url: 'getLoanSubmit',
                data: {'DomainName': DomainName, 'DivisionName': DivisionName, 'MonthId': MonthId, 'YearId': YearId, 'MemberId': MemberId, 'MemberName': MemberName, 'InstallmentNo': InstallmentNo, 'Payable': Payable, 'Interest': Interest, 'Total': Total},
                success: function (data) {
                    // $( "row" + j ).remove();
                    document.getElementById("row" + j ).remove();
                },
                error: function () {

                }
            });
            }
</script>