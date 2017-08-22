<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Office Information</h3>               
    </div>
     <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control MemberId required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-MemberName-error">
        {!! Form::label("MemberName","Member Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberName",null,["class"=>"form-control MemberName  required","id"=>"MemberName"]) !!}
            <span id="MemberName-error" class="help-block"></span>
        </div>
    </div>
    
     <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("DomainName",null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DivisionName-error">
        {!! Form::label("DivisionName","Division Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("DivisionName", null,["class"=>"form-control DivisionName required","id"=>"DivisionName"]) !!}
            <span id="DivisionName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-ZoneId-error">
        {!! Form::label("ZoneId","Zone/Department",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("ZoneId", null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaId-error">
        {!! Form::label("AreaId","Area",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AreaId", null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchId-error">
        {!! Form::label("BranchId","Branch",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BranchId", null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
            <span id="BranchId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-LoanAmount-error">
        {!! Form::label("LoanAmount","Loan Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanAmount", null,["class"=>"form-control LoanAmount required","id"=>"LoanAmount"]) !!}
            <span id="LoanAmount-error" class="help-block"></span>
        </div>
    </div> 
    <div class="form-group required col-md-6" id="form-RiskFund-error">
        {!! Form::label("RiskFund","Risk Fund",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("RiskFund", null,["class"=>"form-control RiskFund required","id"=>"RiskFund"]) !!}
            <span id="RiskFund-error" class="help-block"></span>
        </div>
    </div>     
</div>

<div class="col-md-12" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Account Information</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-TransactionType-error">
        {!! Form::label("TransactionType","Transaction Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("TransactionType", $MoneyrrInfo, null,["class"=>"form-control TransactionType required","id"=>"TransactionType"]) !!}
            <span id="TransactionType-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-MoneyMethod-error">
        {!! Form::label("MoneyMethod","Cash Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("MoneyMethod", $MoneymethodInfo, null,["class"=>"form-control MoneyMethod required","id"=>"MoneyMethod"]) !!}
            <span id="MoneyMethod-error" class="help-block"></span>
        </div>
    </div>   
    <div class="form-group required col-md-6" id="form-Date-error">
        {!! Form::label("Date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::Date("Date", null, ["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Date-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('riskfund/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary", "id"=>"submitButton"])!!}
    </div>
</div>
<script>

     $(document).on('change', '.MemberId', function () {
            //console.log("yes it is change");

            var op = " ";
            var MemberId = $(this).val();
        
            $('#MemberName','#DomainName', '#DivisionName', '#ZoneId', '#AreaId', '#BranchId', '#LoanAmount', '#RiskFund').empty();
            $.ajax({
                type: 'get',
                url: 'getLoanInfo',
                data: {'MemberId': MemberId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {

                          var riskfund, amount;
                          if(subcatObj == 1){
                            alert("Risk Fund has been paid to the member.");
                            $('#submitButton').attr("disabled","disabled");
                          }
                          else{
                          document.getElementById("MemberName").value = subcatObj.EnglishName;
                          document.getElementById("DomainName").value = subcatObj.DomainName;
                          document.getElementById("DivisionName").value = subcatObj.DivisionOfficeId;
                          document.getElementById("ZoneId").value = subcatObj.ZoneId;
                          document.getElementById("AreaId").value = subcatObj.AreaId;
                          document.getElementById("BranchId").value = subcatObj.BranchId;
                                            amount = subcatObj.LoanAmount;
                                            riskfund = (amount / 100);
                          document.getElementById("LoanAmount").value = amount;
                          document.getElementById("RiskFund").value = riskfund;
                          
                        }                          
                    });
                },
                error: function () {
                    alert("Internal Connection Error.");
                    // $(".inforError :input").attr("disabled", true);
                }
            });
            // $.ajax(clear);
        });
        

       
   

        $(document).on('change', '.TransactionType', function () {

            var MemberId = $('#MemberId').val();
            var TransactionType = $(this).val();
            
            if(TransactionType == 1){
            $.ajax({
                type: 'get',
                url: 'getRiskFundVerification',
                data: {'MemberId': MemberId},
               success: function (data) {
                    $.each(data, function (index, subcatObj) {
                          if(subcatObj.Riskfund == 1){
                            alert("You have already paid.");
                            $('#submitButton').attr("disabled","disabled");
                          }
                          else{
                            $('#MoneyMethod').empty();
                          }
                                               
                    });
                },
                error: function () {
                        // alert("Error.");
                }
            });

        }

        else{
            $('#submitButton').removeAttr("disabled");
        }
            // $.ajax(clear);
        });

    $("#frm").submit(function (event) {
        event.preventDefault();
        $('.loading').show();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#frm input.required, #frm textarea.required').each(function () {
                        index = $(this).attr('MemberId');
                        if (index in data.errors) {
                            $("#form-" + index + "-error").addClass("has-error");
                            $("#" + index + "-error").html(data.errors[index]);
                        }
                        else {
                            $("#form-" + index + "-error").removeClass("has-error");
                            $("#" + index + "-error").empty();
                        }
                    });
                    $('#focus').focus().select();
                } else {
                    $(".has-error").removeClass("has-error");
                    $(".help-block").empty();
                    $('.loading').hide();
                    ajaxLoad(data.url, data.content);
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        return false;
    });
</script>