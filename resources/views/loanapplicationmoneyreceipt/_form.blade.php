<div class="col-md-12">
    <div class="form-group required col-md-12" id="form-serial_no-error">
        {!! Form::label("serial_no","Serial No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("serial_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="serial_no-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-12" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-MemberName-error">
        {!! Form::label("MemberName","Member Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberName",null,["class"=>"form-control required","id"=>"MemberName"]) !!}
            <span id="MemberName-error" class="help-block"></span>
        </div>
    </div>
   
    <div class="form-group required col-md-12" id="form-MobileNo-error">
        {!! Form::label("MobileNo","Mobile No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MobileNo",null,["class"=>"form-control required","id"=>"MobileNo"]) !!}
            <span id="MobileNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-FormFee-error">
        {!! Form::label("FormFee","Form Fee:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("FormFee",100,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="FormFee-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-ActualDate-error">
        {!! Form::label("ActualDate","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("ActualDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ActualDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-CashType-error">
        {!! Form::label("CashType","Cash/Not Cash",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("CashType",$MoneymethodInfo, null, ["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CashType-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('loanapplicationmoneyreceipt/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
<script>

    $(document).on('change', '.MemberId', function () {
            //console.log("yes it is change");
            alert('hey this is working.');
            // var op = " ";
            var MemberId =  $(this).val();
        
            $('#DivisionOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getMemberInfo',
                data: {'id': MemberId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {

                          document.getElementById("MemberName").value = subcatObj.EnglishName;
                          document.getElementById("MobileNo").value = subcatObj.MobileNo;
                        
                    });
                },
                error: function () {
                    alert("Please be a member first.");
                    // $(".inforError :input").attr("disabled", true);
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