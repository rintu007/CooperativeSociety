<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Office Information</h3>               
    </div>
     

     <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control MemberId required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>

     <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DomainName",$DomainInfo,null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DivisionOfficeId-error">
        {!! Form::label("DivisionOfficeId","Divisional Office",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("DivisionOfficeId", null,["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
            <span id="DivisionOfficeId-error" class="help-block"></span>
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
     <div class="form-group required col-md-6" id="form-TMSSId-error">
        {!! Form::label("TMSSId","TMSS Employee ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TMSSId",null,["class"=>"form-control TMSSId required","id"=>"TMSSId"]) !!}
            <span id="TMSSId-error" class="help-block"></span>
        </div>
    </div>
</div>

<div class="col-md-12" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Account Information</h3>               
    </div>
     
     <div class="form-group required col-md-6" id="form-AccountType-error">
        {!! Form::label("AccontuType","Account Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AccountType",$AccountType,null,["class"=>"form-control AccountType required","id"=>"AccountType"]) !!}
            <span id="AccountType-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AccountNo-error">
        {!! Form::label("AccountNo","Account No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AccountNo", null,["class"=>"form-control AccountNo required","id"=>"AccountNo"]) !!}
            <span id="AccountNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Duration-error">
        {!! Form::label("Duration","Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("Duration",$Duration,null,["class"=>"form-control Duration required","id"=>"Duration"]) !!}
            <span id="Duration-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CreatingDate-error">
        {!! Form::label("CreatingDate","Creating Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("CreatingDate",$area,null,["class"=>"form-control CreatingDate required","id"=>"CreatingDate"]) !!}
            <span id="CreatingDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MonthlyAmount-error">
        {!! Form::label("MonthlyAmount","Amount per month",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("MonthlyAmount", null,["class"=>"form-control MonthlyAmount required","id"=>"MonthlyAmount"]) !!}
            <span id="MonthlyAmount-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('dpsapplication/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
<script>
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
                        index = $(this).attr('name');
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