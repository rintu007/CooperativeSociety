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
        {!! Form::label("AccountNo","Account No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AccountNo",null,["class"=>"form-control AccountNo required","id"=>"AccountNo"]) !!}
            <span id="AccountNo-error" class="help-block"></span>
        </div>
    </div>   
    <div class="form-group required col-md-6" id="form-Duration-error">
        {!! Form::label("Duration","Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("Duration",$DurationInfo, null,["class"=>"form-control Duration required","id"=>"Duration"]) !!}
            <span id="Duration-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-MonthlyInstallment-error">
        {!! Form::label("MonthlyInstallment","Monthly Installment",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MonthlyInstallment",null ,["class"=>"form-control MonthlyInstallment required","id"=>"MonthlyInstallment"]) !!}
            <span id="MonthlyInstallment-error" class="help-block"></span>
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
    btn-primary"])!!}
    </div>
</div>
<script>

     $(document).on('change', '.MemberId', function () {
            //console.log("yes it is change");

            var op = " ";
            var MemberId = $(this).val();
        
            $('#DivisionOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getMemberInfo',
                data: {'id': MemberId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {

                          document.getElementById("MemberName").value = subcatObj.EnglishName;
                          document.getElementById("DomainName").value = subcatObj.DomainName;
                          document.getElementById("DivisionName").value = subcatObj.DivisionOfficeId;
                          document.getElementById("ZoneId").value = subcatObj.ZoneId;
                          document.getElementById("AreaId").value = subcatObj.AreaId;
                          document.getElementById("BranchId").value = subcatObj.BranchId;
                        
                    });
                },
                error: function () {
                    alert("Please be a member first.");
                    // $(".inforError :input").attr("disabled", true);
                }
            });
            // $.ajax(clear);
        });
        $(document).on('change', '.DivisionOfficeId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ZoneId').empty();
            $.ajax({
                type: 'get',
                url: 'getZone',
                data: {'id': DivisionOfficeId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ZoneId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ZoneName +'</option>')
                    });
                },
                error: function () {

                }
            });
            // $.ajax(clear);
        });

        $(document).on('change', '.ZoneId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ZoneId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#AreaId').empty();
            $.ajax({
                type: 'get',
                url: 'getArea',
                data: {'id': ZoneId},
                success: function (data) {
                    $.each(data, function (index, subcatObjArea) {
                        $('#AreaId').append('<option value="'+subcatObjArea.id+'">'+subcatObjArea.AreaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            // $.ajax(clear);
        });

    // $(document).on('change', '.MemberId', function () {

    //         var op = " ";
    //         var MemberId = $(this).val();           
            
    //         $.ajax({
    //             type: 'get',
    //             url: 'getJustify',
    //             data: {'id': MemberId},
    //             success: function (data) {
                    
    //                  $('#MemberId').empty();
    //                     document.getElementById("MemberName").value = $member;
    //                     // document.getElementById("MemberId").select();
    //             },
    //             error: function () {
    //                     alert("Please be a member first.");
    //             }
    //         });
    //         // $.ajax(clear);
    //     });

        $(document).on('change', '.AccountType', function () {

            var MemberId = document.getElementById('MemberId').value;
            var AccountType = document.getElementById('AccountType').value;
            
            $.ajax({
                type: 'get',
                url: 'getAccountVerification',
                data: {'MemberId': MemberId, 'AccountType': AccountType},
                success: function (data) {

                        document.getElementById("AccountNo").value = data;
                        
                },
                error: function () {
                        alert("Error.");
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