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
            {!! Form::select("DomainName",$DomainInfo,null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DivisionName-error">
        {!! Form::label("DivisionName","Division Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionName",$DivisionInfo,null,["class"=>"form-control DivisionName required","id"=>"DivisionName"]) !!}
            <span id="DivisionName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-ZoneId-error">
        {!! Form::label("ZoneId","Zone/Department",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ZoneId",$ZoneInfo,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaId-error">
        {!! Form::label("AreaId","Area",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AreaId",$AreaInfo,null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchId-error">
        {!! Form::label("BranchId","Branch",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
            <span id="BranchId-error" class="help-block"></span>
        </div>
    </div>
     
</div>

<div class="col-md-12" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Account Information</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-AccountType-error">
        {!! Form::label("AccountType","Account Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AccountType", $ProductInfo, null,["class"=>"form-control AccountType required","id"=>"AccountType"]) !!}
            <span id="AccountType-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-AccountNo-error">
        {!! Form::label("AccountNo","Member Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AccountNo",null,["class"=>"form-control AccountNo required","id"=>"AccountNo"]) !!}
            <span id="AccountNo-error" class="help-block"></span>
        </div>
    </div>   
    <div class="form-group required col-md-6" id="form-duration-error">
        {!! Form::label("duration","Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("duration",$DurationInfo, null,["class"=>"form-control duration required","id"=>"duration"]) !!}
            <span id="duration-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-MonthlyInstallment-error">
        {!! Form::label("MonthlyInstallment","Monthly Installment",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MonthlyInstallment",null ,["class"=>"form-control MonthlyInstallment required","id"=>"MonthlyInstallment"]) !!}
            <span id="MonthlyInstallment-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-date-error">
        {!! Form::label("date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::date("date",\Carbon\Carbon::now(),["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="date-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('accountopen/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
<script>

    $(document).on('change', '.MemberId', function () {

            var op = " ";
            var MemberId = $(this).val();           
            
            $.ajax({
                type: 'get',
                url: 'getJustify',
                data: {'id': MemberId},
                success: function (data) {
                    
                     $('#MemberId').empty();
                        document.getElementById("MemberName").value = $member;
                        // document.getElementById("MemberId").select();
                },
                error: function () {
                        
                }
            });
            // $.ajax(clear);
        });

        $(document).on('change', '.AccountType', function () {

            var MemberId = $('MemberId').val(); 
            var AccountType = $('AccountType').val();          
            
            $.ajax({
                type: 'get',
                url: 'getAccountVerification',
                data: {'MemberId': MemberId, 'AccountType': AccountType},
                success: function (data) {
                    
                     $('#MemberId').empty();
                        document.getElementById("MemberName").value = $member;
                        // document.getElementById("MemberId").select();
                },
                error: function () {
                        
                }
            });
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