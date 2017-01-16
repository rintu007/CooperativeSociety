<div class="col-md-12">
    <div class="form-group required col-md-12" id="form-serial_no-error">
        {!! Form::label("serial_no","Serial No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("serial_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="serial_no-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-member_name-error">
        {!! Form::label("member_name","Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("member_name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="member_name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-member_id-error">
        {!! Form::label("member_id","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("member_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="member_id-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-moblie_no-error">
        {!! Form::label("moblie_no","Mobile No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("moblie_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="moblie_no-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-form_fee-error">
        {!! Form::label("form_fee","Entry Form Fee:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("form_fee",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="form_fee-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-passbook-error">
        {!! Form::label("passbook","Passbook Fee:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("passbook",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="passbook-error" class="help-block"></span>
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