<div class="col-md-12">
    <h1>Domain Report</h1>
    <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DomainName",$DomainInfo, null,["class"=>"form-control required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
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
       <div><h2>Domain Report</h2></div>
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
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                DPS
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>   
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Total Installment
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>  
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Payed Installment
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberName&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Loan Type
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberName'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Loan Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>   
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Loan Duration
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>   
        <th>
            <a href="javascript:ajaxLoad('report/list?field=MemberId&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Total Installment No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='MemberId'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
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
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Interest Rate
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>   
         <th>
            <a href="javascript:ajaxLoad('report/list?field=Amount&sort={{Session::get("report_sort")=="asc"?"desc":"asc"}}')">
                Risk Fund
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('report_field')=='Amount'?(Session::get('report_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>  
        
    </tr>
    </thead>
    <tbody id="DomainReport">
   
    </tbody>
</table>
    </div>
</div>


<script>

     function shishirReport() {

            var op = " ";
            var DomainName = document.getElementById('DomainName').value;           
            
            $.ajax({
                type: 'get',
                url: 'getDomain',
                data: {'id': DomainName},
                 success: function (data) {
                    $('#DomainReport').empty();
                   
                    $.each(data, function (index, subcatObj1) {
                        $('#DomainReport').append('<tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td><td>'+subcatObj1.AccountNo+'</td><td>'+subcatObj1.GSaving+'</td><td>'+subcatObj1.Dps+'</td><td>'+subcatObj1.InstallmentNo+'</td><td>'+subcatObj1.TotalInstallment+'</td><td>'+subcatObj1.LoanType+'</td><td>'+subcatObj1.LoanAmount+'</td><td>'+subcatObj1.LoanDuration+'</td><td>'+subcatObj1.LoanInstallment+'</td><td>'+subcatObj1.PayedInstallment+'</td><td>'+subcatObj1.InterestRate+'</td><td>'+subcatObj1.Riskfund+'</td></tr>');
                    });
                   
                },
                error: function () {
                        alert("Please pay form and passbook fee first.");
                        $(".inforError :input").attr("disabled", true);
                }
            });
         
      }

</script>