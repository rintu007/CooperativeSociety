<div class="col-md-12">
    <h1>Personal Report</h1>
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">                
        <button onClick="shishirReport()">search</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
       <div><h2>Member Info</h2></div>
       <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Member ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Father Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>   
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Mobile No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>       
        
    </tr>
    </thead>
    <tbody id="MemberInfo">
   
    </tbody>
</table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
       <div><h2>Share Info</h2></div>
       <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Share No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Share Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
    </tr>
    </thead>
    <tbody id="ShareInfo">
   
    </tbody>
</table>
 </div>
</div>
<div class="row">
    <div class="col-md-12">
       <div><h2>Saving Info</h2></div>
       <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Account No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                General Saving
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                DPS
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Total Installment No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
               Payed Installment
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
    </tr>
    </thead>
    <tbody id="SavingInfo">
   
    </tbody>
</table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
       <div><h2>Loan Info</h2></div>
       <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
               Loan Type
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Loan Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Loan Duration
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Total Installment No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
               Payed Installment
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Interest Rate
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
               Risk Fund
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
    </tr>
    </thead>
    <tbody id="LoanInfo">
   
    </tbody>
</table>
    </div>
</div>
<script>

     function shishirReport() {

            var op = " ";
            var MemberId = document.getElementById('MemberId').value;           
        
            $.ajax({
                type: 'get',
                url: 'getReport',
                data: {'id': MemberId},
                 success: function (data) {
                    $('#MemberInfo').empty();
                    $('#ShareInfo').empty();
                    $('#SavingInfo').empty();
                    $('#LoanInfo').empty();

                    // $('#MemberInfo').append('<h2>'+"Member Info"+'</h2><table border="1"><thead><tr><th>'+"Member Name"+'</th><th>'+"Member Id"+'</th><th>'+"Father Name"+'</th><th>'+"Mobile No"+'</th></tr></thead><tbody id="MemberInfoRow">')
                    $.each(data.MemberInfo, function (index, subcatObj1) {
                        $('#MemberInfo').append('<tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td></tr></tbody>');
                    });
                    // $('#ShareInfo').append('<h2>'+"Share Info"+'</h2><table border="1"><thead><tr><th>'+"Share No"+'</th><th>'+"Share Amount"+'</th></tr></thead><tbody id="ShareInfoRow">')
                    $.each(data.ShareInfo, function (index, subcatObj1) {
                        $('#ShareInfo').append('<tr><td>'+subcatObj1.present_share_number+'</td><td>'+subcatObj1.present_share_amount+'</td></tr>');
                    });
                    // $('#SavingInfo').append('<h2>'+"Saving Info"+'</h2><table border="1"><thead><tr><th>'+"Account No"+'</th><th>'+"General Saving"+'</th><th>'+"DPS"+'</th><th>'+"Total Installment No"+'</th><th>'+"Payed Installment"+'</th></tr></thead><tbody id="SavingInfoRow">')
                    $.each(data.SavingInfo, function (index, subcatObj1) {
                        $('#SavingInfo').append('<tr><td>'+subcatObj1.AccountNo+'</td><td>'+subcatObj1.GSaving+'</td><td>'+subcatObj1.Dps+'</td><td>'+subcatObj1.InstallmentNo+'</td><td>'+subcatObj1.TotalInstallment+'</td></tr>');
                    });
                    // $('#LoanInfo').append('<h2>'+"Loan Info"+'</h2><table border="1"><thead><tr><th>'+"Loan Type"+'</th><th>'+"Loan Amount"+'</th><th>'+"Duratoin"+'</th><th>'+"Total Installment No"+'</th><th>'+"Payed Installment"+'</th><th>'+"Interest Rate"+'</th><th>'+"Risk Fund"+'</th></tr></thead><tbody id="LoanInfoRow">')
                    $.each(data.LoanInfo, function (index, subcatObj1) {
                        $('#LoanInfo').append('<tr><td>'+subcatObj1.LoanType+'</td><td>'+subcatObj1.LoanAmount+'</td><td>'+subcatObj1.LoanDuration+'</td><td>'+subcatObj1.InstallmentNo+'</td><td>'+subcatObj1.PayedInstallment+'</td><td>'+subcatObj1.InterestRate+'</td><td>'+subcatObj1.RiskFund+'</td></tr></tbody></table>');
                    });
                },
                error: function () {
                        alert("Please pay form and passbook fee first.");
                        $(".inforError :input").attr("disabled", true);
                }
            });
          $.ajax(clear);
      }

</script>