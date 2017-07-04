@if(Auth::guest())
    @else
<h1 class="page-header">Posting
    <div class="pull-right">
        <a href="javascript:ajaxLoad('posting/create')" class="btn btn-primary pull-right"><i
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
        {!! Form::label("DivisionOfficeId","Divisional Office",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionOfficeId",$DivisionInfo,null,["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
            <span id="DivisionOfficeId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-ZoneId-error">
        {!! Form::label("ZoneId","Zone",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ZoneId",$ZoneInfo,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-AreaId-error">
        {!! Form::label("AreaId","Area",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AreaId",$AreaInfo,null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-BranchId-error">
        {!! Form::label("BranchId","Branch",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
            <span id="BranchId-error" class="help-block"></span>
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
       <button id="postingInfo">search</button>
    </div>
    
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('posting/list?field=MemberId&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='MemberId'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('posting/list?field=MemberName&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='MemberName'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('posting/list?field=AccountNo&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                Account No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='AccountNo'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('posting/list?field=app_form&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                General Saving
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='app_form'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('posting/list?field=passbook&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                DPS 
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='passbook'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('posting/list?field=passbook&sort={{Session::get("posting_sort")=="asc"?"desc":"asc"}}')">
                Loan
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('posting_field')=='passbook'?(Session::get('posting_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
       

        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody id="postingPlace">

    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$postings->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$postings->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });

     $(document).ready(function () {

        $(document).on('click', '#postingInfo', function () {
               
                var DomainName = document.getElementById('DomainName').value;
                var DivisionName = document.getElementById('DivisionOfficeId').value;
                var ZoneId = document.getElementById('ZoneId').value;
                var AreaId = document.getElementById('AreaId').value;
                var BranchId = document.getElementById('BranchId').value;
                var MonthId = document.getElementById('MonthId').value;
                var YearId = document.getElementById('YearId').value;
                var i = 1;

                $('#postingPlace').empty();
                $.ajax({
                    type: 'get',
                    url: 'getPostingInfo',
                    data: {'DomainName': DomainName, 'DivisionName': DivisionName, 'ZoneId': ZoneId, 'AreaId': AreaId, 'BranchId': BranchId, 'MonthId': MonthId, 'YearId': YearId},
                    success: function (data) {
//                    console.log(data);
                        $.each(data, function (index, subcatObj3p) {
                            $('#postingPlace').append('<tr class="listPagetr" id="row'+i+'"><td style="text-align: center;" >' + i + '</td><td style="text-align: center;"><input type="text"  id="MemberId'+i+'" value="' + subcatObj3p.MemberId + '" class="listPagetd"  readonly></td><td style="text-align: center"><input type="text" id="MemberName'+i+'" value="' + subcatObj3p.EnglishName + '" class="listPagetd" readonly></td><td style="text-align: center"><input type="text" id="AccountNo'+i+'" value="' + subcatObj3p.Age + '" class="listPagetd" readonly></td><td style="text-align: center">' +100+ '</td><td style="text-align: center"><input type="text" id="Dps'+i+'" value="' + subcatObj3p.Age + '" class="listPagetd"></td><td style="text-align: center"><input type="text" id="Loan'+i+'" class="listPagetd"></td><td><button onClick="shishirSubmit('+i+')" type="submit" >submit</td></tr>');
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
                var ZoneId = document.getElementById("ZoneId").value;                
                var AreaId = document.getElementById("AreaId").value;                
                var BranchId = document.getElementById("BranchId").value;
                var MonthId = document.getElementById("MonthId").value;
                var YearId = document.getElementById("YearId").value;                
                var MemberId = document.getElementById("MemberId" + j ).value;
                var MemberName = document.getElementById("MemberName" + j ).value;
                var AccountNo = document.getElementById("AccountNo" + j ).value;
                var GSaving = 100;
                var Dps = document.getElementById("Dps" + j ).value;
                var Loan = document.getElementById("Loan" + j ).value;
                
                $.ajax({
                type: 'get',
                url: 'getShishirSubmit',
                data: {'DomainName': DomainName, 'DivisionName': DivisionName, 'ZoneId': ZoneId, 'AreaId': AreaId, 'BranchId': BranchId, 'MonthId': MonthId, 'YearId': YearId, 'MemberId': MemberId, 'MemberName': MemberName, 'AccountNo': AccountNo, 'GSaving': GSaving, 'Dps': Dps, 'Loan': Loan},
                success: function (data) {
                    // $( "row" + j ).remove();
                    document.getElementById("row" + j ).remove();
                },
                error: function () {

                }
            });
            }
</script>