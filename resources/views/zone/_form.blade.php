<div class="col-md-12">
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-ZoneDivisionOfficeId-error">
            {!! Form::label("ZoneDivisionOfficeId","Divisional Office",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneDivisionOfficeId",$DivisionOfficeInfo,null,["class"=>"form-control required","id"=>"ZoneDivisionOfficeId"]) !!}
                <span id="ZoneDivisionOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneName-error">
            {!! Form::label("ZoneName","Zone Name",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneCode-error">
            {!! Form::label("ZoneCode","Zone Code",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneAddress-error">
            {!! Form::label("ZoneAddress","Address",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("ZoneAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneAddress-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneMobileNo-error">
            {!! Form::label("ZoneMobileNo","Mobile No",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneMobileNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneEmail-error">
            {!! Form::label("ZoneEmail","Email Id",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::email("ZoneEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneEmail-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-ZoneDivisionId-error">
            {!! Form::label("ZoneDivisionId","Division",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneDivisionId",$DivisionInfo,null,["class"=>"form-control DivisionId required","id"=>"DivisionId"]) !!}
                <span id="ZoneDivisionId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-ZoneDistrictId-error">
            {!! Form::label("ZoneDistrictId","District",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneDistrictId",$district_info,null,["class"=>"form-control DistrictId required","id"=>"DistrictId"]) !!}
                <span id="ZoneDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-ZoneThanaId-error">
            {!! Form::label("ZoneThanaId","Pollice Station",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneThanaId",$ThanaInfo,null,["class"=>"form-control ThanaId required","id"=>"ThanaId"]) !!}
                <span id="ZoneThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneUnionId-error">
            {!! Form::label("ZoneUnionId","Union",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneUnionId",$UnionInfo,null,["class"=>"form-control UnionId required","id"=>"UnionId"]) !!}
                <span id="ZoneUnionId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-ZoneWardId-error">
            {!! Form::label("ZoneWardId","Ward",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneWardId",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneWardId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneRoadNo-error">
            {!! Form::label("ZoneRoadNo","Road No",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneRoadNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneRoadNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZonePostOfficeId-error">
            {!! Form::label("ZonePostOfficeId","Post Office",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZonePostOfficeId",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZonePostOfficeId-error" class="help-block"></span>
            </div>
        </div>

    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('zone/list')" class="btn btn-danger"><i
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
        $(document).on('change', '.DivisionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DistrictId').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DistrictId').append('<option value="'+subcatObj.id+'">'+subcatObj.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ThanaId').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ThanaId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.ThanaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#UnionId').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#UnionId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.UnionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#WordId').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#WordId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            $('#PostOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getPostOffice',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3) {
                        $('#PostOfficeId').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
    });

</script>