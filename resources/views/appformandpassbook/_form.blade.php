<div class="col-md-12" style="background-color: #EAEAEA">
    
    <div class="form-group required col-md-6" id="form-serial_no-error">
        {!! Form::label("serial_no","Serial No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("serial_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="serial_no-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-member_name-error">
        {!! Form::label("member_name","Member Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("member_name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="member_name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-member_id-error">
        {!! Form::label("member_id","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("member_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="member_id-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-mobile_no-error">
        {!! Form::label("mobile_no","Mobile No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("mobile_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="mobile_no-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-date-error">
        {!! Form::label("date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::date("date",\Carbon\Carbon::now(),["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="date-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-app_form-error">
        {!! Form::label("app_form","Entry Form Fee",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("app_form",100,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="app_form-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-passbook-error">
        {!! Form::label("passbook","Passbook Fee",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("passbook",50,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="passbook-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-saving_amount-error">
        {!! Form::label("saving_amount","Saving Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("saving_amount",100,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="saving_amount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-share_number-error">
        {!! Form::label("share_number","No of Shares",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("share_number",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="share_number-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-share_amount-error">
        {!! Form::label("share_amount","Share Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("share_amount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="share_amount-error" class="help-block"></span>
        </div>
    </div>
    
    <div class="form-group required col-md-6" id="form-name-error">
        {!! Form::label("name","DPS Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="name-error" class="help-block"></span>
        </div>
    </div>
   
    <div class="form-group required col-md-6" id="form-unitprice-error">
        {!! Form::label("unitprice","Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("unitprice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="unitprice-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('appformandpassbook/list')" class="btn btn-danger"><i
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
                        index = $(this).attr('member_id');
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