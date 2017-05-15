<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Office Information</h3>               
    </div>
     
     <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DomainName",$DomainInfo,null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DivisionOfficeId-error">
        {!! Form::label("DivisionOfficeId","Divisional Office",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionOfficeId",$DivisionOfficeInfo,null,["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
            <span id="DivisionOfficeId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-ZoneId-error">
        {!! Form::label("ZoneId","Zone",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaId-error">
        {!! Form::label("AreaId","Area",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AreaId",$area,null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchId-error">
        {!! Form::label("BranchId","Branch",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
            <span id="BranchId-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-TMSSID-error">
        {!! Form::label("TMSSID","TMSS Employee ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TMSSID",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TMSSID-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Personal Information</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BanglaName-error">
        {!! Form::label("BanglaName","Name in Bangla:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BanglaName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BanglaName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-EnglishName-error">
        {!! Form::label("EnglishName","Name in English: ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("EnglishName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="EnglishName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-FatherName-error">
        {!! Form::label("FatherName","Father's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("FatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="FatherName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-MotherName-error">
        {!! Form::label("MotherName","Mother's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MotherName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-HusbandWifeName-error">
        {!! Form::label("HusbandWifeName","Husband/Wife Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("HusbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="HusbandWifeName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-Age-error">
        {!! Form::label("Age","Age",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Age",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Age-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Occupation-error">
        {!! Form::label("Occupation","Occupation:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Occupation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Occupation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nationality-error">
        {!! Form::label("Nationality","Nationality",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nationality-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NId-error">
        {!! Form::label("NId","National Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("NId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PassportNo-error">
        {!! Form::label("PassportNo","Passport No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PassportNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PassportNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TaxIdNo-error">
        {!! Form::label("TaxIdNo","Tax No(if any):",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TaxIdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TaxIdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Phone-error">
        {!! Form::label("Phone","Phone:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Phone",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Phone-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Mobile-error">
        {!! Form::label("Mobile","Mobile No:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Mobile",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Mobile-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Present Address</h3>               
    </div>
    
    <div class="form-group required col-md-6" id="form-PresentVillageName-error">
        {!! Form::label("PresentVillageName","Village:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentPostOffice-error">
        {!! Form::label("PresentPostOffice","Post Office:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentUpojela-error">
        {!! Form::label("PresentUpojela","Pollice Station:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentJela-error">
        {!! Form::label("PresentJela","District:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentJela-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12" style="background-color: #EAEAEA">
    <div class="form-group required col-md-6" id="">
    <h3>Nominee Information-1</h3>
    </div>
    <div class="form-group required col-md-6" id="">
       <h3>Nominee Information-2</h3>
    </div>
     <div class="form-group required col-md-6" id="form-SPName-error">
        {!! Form::label("SPName","Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPName2-error">
        {!! Form::label("SPName2","Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPFatherName-error">
        {!! Form::label("SPFatherName","Father's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPFatherName2-error">
        {!! Form::label("SPName2","Father's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPFatherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPFatherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPMotherName-error">
        {!! Form::label("SPMotherName","Mother's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPMotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPMotherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPMotherName2-error">
        {!! Form::label("SPMotherName2","Mother's Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPMotherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPMotherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPHusbandWifeName">
        {!! Form::label("SPHusbandWifeName","Husband/Wife Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPHusbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPHusbandWifeName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPHusbandWifeName2-error">
        {!! Form::label("SPHusbandWifeName2","Husband/Wife Name:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPHusbandWifeName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPHusbandWifeName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation-error">
        {!! Form::label("Relation","Relation with Member:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation2-error">
        {!! Form::label("Relation2","Relation with Member:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GivenPortion-error">
        {!! Form::label("GivenPortion","Portion:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GivenPortion2-error">
        {!! Form::label("GivenPortion2","Portion:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion2-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12">
       <h4>Images</h4>
    </div>
    <div class="form-group required col-md-6" id="form-Image-error">
        {!! Form::label("Image","Member Pic:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("Image",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Image-error" class="help-block"></span>
        </div>
    </div>
    
    <div class="form-group required col-md-6" id="form-TMSSIdCard-error">
        {!! Form::label("TMSSIdCard","Member TMSS Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("TMSSIdCard",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TMSSIdCard-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NIdImage-error">
        {!! Form::label("NIdImage","NId copy:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NIdImage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NIdImage-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NomineeImage-error">
        {!! Form::label("NomineeImage","Nominee Pic-1:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NomineeImage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NomineeImage-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BirthCertificate-error">
        {!! Form::label("BirthCertificate","Nominee NId:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("BirthCertificate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BirthCertificate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NomineeImage2-error">
        {!! Form::label("NomineeImage2","Nominee Pic-2:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NomineeImage2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NomineeImage2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BirthCertificate2-error">
        {!! Form::label("BirthCertificate2","Nominee NId:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("BirthCertificate2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BirthCertificate2-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('member/list')" class="btn btn-danger"><i
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
                        index = $(this).attr('BanglaName');
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
        
            $('#DivisionOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getDivisionOffice',
                data: {'id': DomainName},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DivisionOfficeId').append('<option value="'+subcatObj.id+'">'+subcatObj.DivisionName +'</option>')
                    });
                },
                error: function () {
                    alert("Enternal Connection errors.");
                }
            });
            $.ajax(clear);
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