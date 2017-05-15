{{--<div class="col-md-12">--}}
    {{--<div class="form-group required col-md-6" id="form-TotalIncomeDescription-error">--}}
        {{--{!! Form::label("TotalIncomeDescription","আয়ের বিবরণ",["class"=>"control-label col-md-3"]) !!}--}}
        {{--<div class="col-md-6">--}}
            {{--{!! Form::text("TotalIncomeDescription",null,["class"=>"form-control required","id"=>"focus"]) !!}--}}
            {{--<span id="TotalIncomeDescription-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="col-md-12">
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-DivisionOfficeName-error">
            {!! Form::label("DivisionOfficeName","বিভাগীয় অফিসের নাম",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeName",null,["class"=>"form-control DivisionOfficeName required","id"=>"DivisionOfficeName"]) !!}
                <span id="DivisionOfficeName-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-DivisionOfficeNameBangla-error">
            {!! Form::label("DivisionOfficeNameBangla","বিভাগীয় অফিসের নাম (বাংলা)",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeNameBangla",null,["class"=>"form-control DivisionOfficeNameBangla required","id"=>"DivisionOfficeNameBangla"]) !!}
                <span id="DivisionOfficeNameBangla-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeCode-error">
            {!! Form::label("DivisionOfficeCode","বিভাগীয় অফিসের কোড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficeCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeAddress-error">
            {!! Form::label("DivisionOfficeAddress","ঠিকানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("DivisionOfficeAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficeAddress-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeMobileNo-error">
            {!! Form::label("DivisionOfficeMobileNo","মোবাইল নং",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficeMobileNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeEmail-error">
            {!! Form::label("DivisionOfficeEmail","ইমেইল আইডি",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::email("DivisionOfficeEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficeEmail-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-DivisionOfficeDivisionId-error">
            {!! Form::label("DivisionOfficeDivisionId","বিভাগ",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("DivisionOfficeDivisionId",$DivisionInfo,null,["class"=>"form-control DivisionOfficeDivisionId required","id"=>"DivisionOfficeDivisionId"]) !!}
                <span id="DivisionOfficeDivisionId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-DivisionOfficeDistrictId-error">
            {!! Form::label("DivisionOfficeDistrictId","জেলা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("DivisionOfficeDistrictId",$district_info,null,["class"=>"form-control DivisionOfficeDistrictId required","id"=>"DivisionOfficeDistrictId"]) !!}
                <span id="DivisionOfficeDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-DivisionOfficeThanaId-error">
            {!! Form::label("DivisionOfficeThanaId","থানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("DivisionOfficeThanaId",$ThanaInfo,null,["class"=>"form-control DivisionOfficeThanaId required","id"=>"DivisionOfficeThanaId"]) !!}
                <span id="DivisionOfficeThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeUnionId-error">
            {!! Form::label("DivisionOfficeUnionId","ইউনিয়ন/পৌরসভা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("DivisionOfficeUnionId",$UnionInfo,null,["class"=>"form-control DivisionOfficeUnionId required","id"=>"DivisionOfficeUnionId"]) !!}
                <span id="DivisionOfficeUnionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeWardId-error">
            {!! Form::label("DivisionOfficeWardId","ওয়ার্ড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeWardId",null,["class"=>"form-control DivisionOfficeWardId required","id"=>"DivisionOfficeWardId"]) !!}
                <span id="DivisionOfficeWardId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficeRoadNo-error">
            {!! Form::label("DivisionOfficeRoadNo","রাস্তা নং",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficeRoadNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficeRoadNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-DivisionOfficePostOfficeId-error">
            {!! Form::label("DivisionOfficePostOfficeId","পোষ্ট অফিস",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("DivisionOfficePostOfficeId",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="DivisionOfficePostOfficeId-error" class="help-block"></span>
            </div>
        </div>


    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('mikrofdivision/list')" class="btn btn-danger"><i
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
<script>

    $(document).ready(function () {
        $(document).on('change', '.DivisionOfficeDivisionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeDivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DivisionOfficeDistrictId').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionOfficeDivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DivisionOfficeDistrictId').append('<option value="'+subcatObj.id+'">'+subcatObj.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.DivisionOfficeDistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeDistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DivisionOfficeThanaId').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': DivisionOfficeDistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#DivisionOfficeThanaId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.DivisionOfficeThanaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DivisionOfficeUnionId').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': DivisionOfficeThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#DivisionOfficeUnionId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.DivisionOfficeUnionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionOfficeUnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DivisionOfficeWordId').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': DivisionOfficeUnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#DivisionOfficeWordId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

//        $(document).on('change', '.DistrictId', function () {
//            //console.log("yes it is change");
//
//            var op = " ";
//            var DistrictId = $(this).val();
//            //var div = $(this).parent();
//            //console.log(DistrictId);
//            $('#PostOfficeId').empty();
//            $.ajax({
//                type: 'get',
//                url: 'getPostOffice',
//                data: {'id': DistrictId},
//                success: function (data) {
//                    $.each(data, function (index, subcatObj3) {
//                        $('#PostOfficeId').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
//                    });
//                },
//                error: function () {
//
//                }
//            });
//            $.ajax(clear);
//        });
    });

</script>