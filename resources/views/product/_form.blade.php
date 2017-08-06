<div class="col-md-12" style="background-color: #EAEAEA">
    <h1></h1>
    <div>
        <div class="form-group required col-md-6" id="form-ProductCode-error">
            {!! Form::label("ProductCode","Product Code",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("ProductCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ProductName-error">
            {!! Form::label("ProductName","Product Name",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("ProductName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductName-error" class="help-block"></span>
            </div>
        </div>   
     </div>   
    <div>
        <div class="form-group required col-md-6" id="form-InterestPercentage-error">
            {!! Form::label("InterestPercentage","Profit Rate",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6" id="InterestPercentage">
                {!! Form::number("InterestPercentage",null,["class"=>"form-control InterestPercentage required","id"=>"InterestPercentage1"]) !!}
                <span id="InterestPercentage-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-Frequency-error">
            {!! Form::label("Frequency","Payment Frequency",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("Frequency",$frequency, null,["class"=>"form-control Frequency required","id"=>"Frequency"]) !!}
                <span id="Frequency-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-Duration-error">
            {!! Form::label("Duration","Duration in year",["class"=>"control-label  col-md-3"]) !!}
            <div class="col-md-6" id="Duration">
                {!! Form::number("Duration",null,["class"=>"form-control Duration required" ,"id"=>"Duration"]) !!}
                <span id="Duration-error" class="help-block"></span>
            </div>
        </div>       
        <div class="form-group required col-md-6" id="form-IsActive-error">
            {!! Form::label("IsActive","Active Or Not",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("IsActive", $status, null,["class"=>"form-control IsActive required","id"=>"IsActive"]) !!}
                <span id="IsActive-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div>
        <div class="form-group required col-md-6" id="form-MultipleSavings-error">
            {!! Form::label("MultipleSavings","Multiple Saving",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("MultipleSavings", $status, null,["class"=>"form-control MultipleSavings required","id"=>"MultipleSavings"]) !!}
                <span id="MultipleSavings-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-WithdrawlFacily-error">
            {!! Form::label("WithdrawlFacily","Withdrawal Benefits",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("WithdrawlFacily", $status, null,["class"=>"form-control WithdrawlFacily required","id"=>"WithdrawlFacily"]) !!}
                <span id="WithdrawlFacily-error" class="help-block"></span>
            </div>
        </div>
    

    
        <div class="form-group required col-md-6" id="form-MinimumAmount-error">
            {!! Form::label("MinimumAmount","Minimum Amount",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::number("MinimumAmount",null,["class"=>"form-control required"]) !!}
                <span id="MinimumAmount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-MaximumAmount-error">
            {!! Form::label("MaximumAmount","Maximum Amount",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::number("MaximumAmount",null,["class"=>"form-control required"]) !!}
                <span id="MaximumAmount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-MinimumBalanceAmount-error">
            {!! Form::label("MinimumBalanceAmount","Minimum Balance Amount",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::number("MinimumBalanceAmount",null,["class"=>"form-control required"]) !!}
                <span id="MinimumBalanceAmount-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div>
        <div class="form-group required col-md-6" id="form-MaxDueCycle-error">
            {!! Form::label("MaxDueCycle","Maximum Due Cycle",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::number("MaxDueCycle",null,["class"=>"form-control required"]) !!}
                <span id="MaxDueCycle-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-PassBookAvailability-error">
            {!! Form::label("PassBookAvailability","Passbook Availability",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("PassBookAvailability", $status, null,["class"=>"form-control PassBookAvailability required","id"=>"PassBookAvailability"]) !!}
                <span id="PassBookAvailability-error" class="help-block"></span>
            </div>
        </div>    
        <div class="form-group required col-md-6" id="form-AutomaticSchemeRenewal-error">
            {!! Form::label("AutomaticSchemeRenewal","Automatic Schema Renewal",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("AutomaticSchemeRenewal", $status, null,["class"=>"form-control AutomaticSchemeRenewal required","id"=>"AutomaticSchemeRenewal"]) !!}
                <span id="AutomaticSchemeRenewal-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div>    
        <div class="form-group required col-md-6" id="form-MaxWithdrawTimeforAvoidingPenaltyPerMonth-error">
            {!! Form::label("MaxWithdrawTimeforAvoidingPenaltyPerMonth","Time Limit for Penulty",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::number("MaxWithdrawTimeforAvoidingPenaltyPerMonth",null,["class"=>"form-control required"]) !!}
                <span id="MaxWithdrawTimeforAvoidingPenaltyPerMonth-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('product/list')" class="btn btn-danger"><i
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

    //    $(document).ready(function () {
    //        $(document).on('change', '.ProductType', function () {
    //            //console.log("yes it is change");
    //
    //            var ProductType = $(this).val();
    //            var div = $(this).parent();
    //            //console.log(DivisionId);
    //            $('#ServiceChargeRate').empty();
    //            $('#Duration').empty();
    //            $.ajax({
    //                type: 'get',
    //                url: 'getProductInfo',
    //                data: {'id': ProductType},
    //                success: function (data) {
    //                    $.each(data, function (index, subcatObj) {
    //                        $('#ServiceChargeRate').append('<input type="text" class="form-control" readonly name="ServiceChargeRate" value="'+subcatObj.ProductRate+'">');
    //                        $('#Duration').append('<input type="text" class="form-control" readonly name="Duration" value="'+subcatObj.ProductInstallments+'">')
    //                    });
    //                },
    //                error: function () {
    //
    //                }
    //            });
    //        });
    //    });
</script>