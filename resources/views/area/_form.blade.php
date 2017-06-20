<div class="col-md-12" style="background-color: #EAEAEA">

    <div class="form-group col-md-12" id="form-DivisionalOfficeInfo-error">
        <h3>Area Office Information</h3>               
    </div>
         <div class="form-group required col-md-6" id="form-DomainName-error">
            {!! Form::label("DomainName","Domains",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("DomainName",$DomainInfo, null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
                <span id="DomainName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaDivisionOfficeId-error">
            {!! Form::label("AreaDivisionOfficeId","Divisional Office",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("AreaDivisionOfficeId",$DivisionOfficeInfo,null,["class"=>"form-control AreaDivisionOfficeId required","id"=>"AreaDivisionOfficeId"]) !!}
                <span id="AreaDivisionOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneId-error">
            {!! Form::label("ZoneId","Zone",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {{--<select name="ZoneId">--}}
                {{--@foreach($data as $d )--}}
                {{--<option value="{{$d->id}}">{{$d->ZoneName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
                <span id="ZoneId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-AreaName-error">
            {!! Form::label("AreaName","Area",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaCode-error">
            {!! Form::label("AreaCode","Area Code",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">

                {!! Form::text("AreaCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaMobileNo-error">
            {!! Form::label("AreaMobileNo","Mobile No",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaMobileNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaEmail-error">
            {!! Form::label("AreaEmail","Email Id",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::email("AreaEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaEmail-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaAddress-error">
            {!! Form::label("AreaAddress","Address",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaAddress-error" class="help-block"></span>
            </div>
        </div>
 </div>
<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-DivisionalOfficeInfo-error">
        <h3>Area Office Address</h3>               
    </div>   
    
        <div class="form-group required col-md-6" id="form-AreaDivisionId-error">
            {!! Form::label("AreaDivisionId","Division",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("AreaDivisionId",$DivisionInfo,null,["class"=>"form-control DivisionId required","id"=>"DivisionId"]) !!}
                <span id="AreaDivisionId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-AreaDistrictId-error">
            {!! Form::label("AreaDistrictId","District",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("AreaDistrictId",$district_info,null,["class"=>"form-control DistrictId required","id"=>"DistrictId"]) !!}
                <span id="AreaDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-AreaThanaId-error">
            {!! Form::label("AreaThanaId","Pollice Station",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("AreaThanaId",$ThanaInfo,null,["class"=>"form-control ThanaId required","id"=>"ThanaId"]) !!}
                <span id="AreaThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaUnionId-error">
            {!! Form::label("AreaUnionId","Union",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaUnionId",null,["class"=>"form-control UnionId required","id"=>"UnionId"]) !!}
                <span id="AreaUnionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaPostOfficeId-error">
            {!! Form::label("AreaPostOfficeId","Area Post Office",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaPostOfficeId",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaPostOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-AreaWardId-error">
            {!! Form::label("AreaWardId","Ward",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaWardId",null,["class"=>"form-control required"]) !!}
                <span id="AreaWardId-error" class="help-block"></span>
            </div>
        </div>
         <!-- <div class="form-group required col-md-6" id="form-AreaRoadNo-error">
            {!! Form::label("AreaRoadNo","Road No",["class"=>"control-label test col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("AreaRoadNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="AreaRoadNo-error" class="help-block"></span>
            </div>
        </div> -->

        
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('area/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        <?php if (!empty($area1[1]->ZoneName))
            echo $area1[1]->ZoneName;
        ?>
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

         $(document).on('change', '.DomainName', function () {
            //console.log("yes it is change");

            var op = " ";
            var DomainName = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#AreaDivisionOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getDivisionOffice',
                data: {'id': DomainName},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#AreaDivisionOfficeId').append('<option value="'+subcatObj.id+'">'+subcatObj.DivisionOfficeName +'</option>')
                    });
                },
                error: function () {

                }
            });
            //$.ajax(clear);
        });

          $(document).on('change', '.AreaDivisionOfficeId', function () {
            //console.log("yes it is change");

            var op = " ";
            var AreaDivisionOfficeId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ZoneId').empty();
            $.ajax({
                type: 'get',
                url: 'getZone',
                data: {'id': AreaDivisionOfficeId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#ZoneId').append('<option value="'+subcatObj.id+'">'+subcatObj.ZoneName +'</option>')
                    });
                },
                error: function () {

                }
            });
            //$.ajax(clear);
        });

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
            //$.ajax(clear);
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
            //$.ajax(clear);
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
            //$.ajax(clear);
        });

        // $(document).on('change', '.UnionId', function () {
        //     //console.log("yes it is change");

        //     var op = " ";
        //     var UnionId = $(this).val();
        //     //var div = $(this).parent();
        //     //console.log(DivisionId);
        //     $('#WordId').empty();
        //     $.ajax({
        //         type: 'get',
        //         url: 'getWord',
        //         data: {'id': UnionId},
        //         success: function (data) {
        //             $.each(data, function (index, subcatObj2) {
        //                 $('#WordId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
        //             });
        //         },
        //         error: function () {

        //         }
        //     });
        //     //$.ajax(clear);
        // });

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
            //$.ajax(clear);
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
            //$.ajax(clear);
        });

    });

</script>