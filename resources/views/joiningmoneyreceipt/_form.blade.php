<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-SerialNo-error">
        {!! Form::label("SerialNo","Serial No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SerialNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SerialNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-name-error">
        {!! Form::label("name","Name,["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CSMId-error">
        {!! Form::label("CSMId","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CSMId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CSMId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Date-error">
        {!! Form::label("Date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Date",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Date-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MobileNo-error">
        {!! Form::label("MobileNo","Mobile No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MobileNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-JoiningFormFee-error">
        {!! Form::label("JoiningFormFee","Joining Form Fee",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("JoiningFormFee",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="JoiningFormFee-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PassBookFee-error">
        {!! Form::label("PassBookFee","Pass Book Fee",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PassBookFee",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PassBookFee-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NoOfShare-error">
        {!! Form::label("NoOfShare","No Of Share",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("NoOfShare",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NoOfShare-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TotalShareAmount-error">
        {!! Form::label("TotalShareAmount","Total Share Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TotalShareAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TotalShareAmount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TotalAmount-error">
        {!! Form::label("TotalAmount","Total Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TotalAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TotalAmount-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('joiningmoneyreceipt/list')" class="btn btn-danger"><i
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