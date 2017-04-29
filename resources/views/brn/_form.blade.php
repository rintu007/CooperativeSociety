<div class="col-md-12">
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-DivisionOfficeId-error">
            {!! Form::label("DivisionOfficeId","Division Office",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("DivisionOfficeId",$DivisionOfficeInfo,null,["class"=>"form-control required","id"=>"DivisionOfficeId"]) !!}
                <span id="DivisionOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-ZoneId-error">
            {!! Form::label("ZoneId","Zone",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
                <span id="ZoneId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-AreaId-error">
            {!! Form::label("AreaId","Area",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("AreaId",$area,null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
                <span id="AreaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-BranchName-error">
            {!! Form::label("BranchName","Branch",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-BranchCode-error">
            {!! Form::label("BranchCode","Branch Code",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BranchCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-OpeningDate-error">
            {!! Form::label("OpeningDate","B Opening Date",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("OpeningDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="OpeningDate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchMobileNo-error">
            {!! Form::label("BranchMobileNo","Mobile No",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BranchMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchMobileNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchEmail-error">
            {!! Form::label("BranchEmail","Email ID",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::email("BranchEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchEmail-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-12" id="form-BranchAddress-error">
            {!! Form::label("BranchAddress","Address",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("BranchAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchAddress-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-BranchDivisionId-error">
            {!! Form::label("BranchDivisionId","Division",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchDivisionId",$DivisionInfo,null,["class"=>"form-control DivisionId required","id"=>"DivisionId"]) !!}
                <span id="BranchDivisionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchDistrictId-error">
            {!! Form::label("BranchDistrictId","District",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchDistrictId",$district_info,null,["class"=>"form-control DistrictId required","id"=>"DistrictId"]) !!}
                <span id="BranchDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-BranchThanaId-error">
            {!! Form::label("BranchThanaId","Pollice Station",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchThanaId",$ThanaInfo,null,["class"=>"form-control ThanaId required","id"=>"ThanaId"]) !!}
                <span id="BranchThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchUnionId-error">
            {!! Form::label("BranchUnionId","Union",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchUnionId",$UnionInfo,null,["class"=>"form-control UnionId required","id"=>"UnionId"]) !!}
                <span id="BranchUnionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchPostOfficeId-error">
            {!! Form::label("BranchPostOfficeId","Post Office",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BranchPostOfficeId",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchPostOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchWardId-error">
            {!! Form::label("BranchWardId","Ward",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BranchWardId",null,["class"=>"form-control required"]) !!}
                <span id="BranchWardId-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('brn/list')" class="btn btn-danger"><i
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
            $.ajax(clear);
        });

    });

</script>