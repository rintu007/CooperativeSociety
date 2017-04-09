<div class="col-md-12" border="1px solid black">
    <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>          
             Your Shares
        </th>
         <th>
            Your Amount
        </th>
        
    </tr>
    </thead>
   
     <tbody>
    
        <tr>
            <td align="center"></td>
            <td align="center"></td>          
       </tr>
   
    </tbody> 
</table>
</div>
<div class="col-md-12">
     <div class="form-group required col-md-6" id="form-member_id-error">
        {!! Form::label("member_id","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("member_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="member_id-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-update_date-error">
        {!! Form::label("update_date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("update_date",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="update_date-error" class="help-block"></span>
        </div>
    </div>
   
    <div class="form-group required col-md-6" id="form-share_number-error">
        {!! Form::label("share_number","Share Number",["class"=>"control-label col-md-3"]) !!}
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
 
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('share/list')" class="btn btn-danger"><i
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
