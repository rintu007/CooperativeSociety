<div class="col-md-12">
    <div class="form-group required col-md-12" id="form-PersonalInformation-error">
        {!! Form::label("PersonalInformation","ব্যক্তিগত তথ্যঃ",["class"=>"control-label col-md-6"]) !!}
        <div class="col-md-6">
          
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CSMId-error">
        {!! Form::label("CSMId","সদস্য নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CSMId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CSMId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BanglaName-error">
        {!! Form::label("BanglaName","নাম(বাংলায়)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BanglaName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberNameBangla-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-name-error">
        {!! Form::label("name","ইংরেজী বড় অক্ষরে ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-FatherName-error">
        {!! Form::label("FatherName","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("FatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="FatherName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-MotherName-error">
        {!! Form::label("MotherName","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MotherName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-HusbandWifeName-error">
        {!! Form::label("HusbandWifeName","স্বামী/ স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("HusbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="HusbandWifeName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-Age-error">
        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Age",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Age-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Occupation-error">
        {!! Form::label("Occupation","পেশা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Occupation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Occupation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nationality-error">
        {!! Form::label("Nationality","জাতীয়তা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nationality-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NId-error">
        {!! Form::label("NId","জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("NId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PassportNo-error">
        {!! Form::label("PassportNo","পাস্পর্ত নং যদি থাকে",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PassportNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PassportNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TaxIdNo-error">
        {!! Form::label("TaxIdNo","আয়কর সনাক্তকরণ নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TaxIdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TaxIdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Phone-error">
        {!! Form::label("Phone","ফোন",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Phone",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Phone-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Mobile-error">
        {!! Form::label("Mobile","মোবাইল",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Mobile",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Mobile-error" class="help-block"></span>
        </div>
    </div>


    <div class="form-group required col-md-12" id="form-MemberPresentAddress-error">
        {!! Form::label("MemberPresentAddress","বর্তমান ঠিকানাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
           
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentVillageName-error">
        {!! Form::label("PresentVillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentPostOffice-error">
        {!! Form::label("PresentPostOffice","ডাক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentUpojela-error">
        {!! Form::label("PresentUpojela","উপজেলা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PresentJela-error">
        {!! Form::label("PresentJela","জেলা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PresentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PresentJela-error" class="help-block"></span>
        </div>
    </div>
                                    <!-- Nominee Part -->

    <div class="form-group required col-md-6" id="">
        {!! Form::label("","নমিনীর তথ্য-১ঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
        </div>
    </div>
    <div class="form-group required col-md-6" id="">
        {!! Form::label("","নমিনীর তথ্য-২ঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-SPName-error">
        {!! Form::label("SPName","মনোনীত ব্যক্তির নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPName2-error">
        {!! Form::label("SPName2","মনোনীত ব্যক্তির নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPFatherName-error">
        {!! Form::label("SPFatherName","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPFatherName2-error">
        {!! Form::label("SPName2","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPFatherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPFatherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPMotherName-error">
        {!! Form::label("SPMotherName","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPMotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPMotherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPMotherName2-error">
        {!! Form::label("SPMotherName2","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPMotherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPMotherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPHusbandWifeName">
        {!! Form::label("SPHusbandWifeName","স্বামী/স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPHusbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPHusbandWifeName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SPHusbandWifeName2-error">
        {!! Form::label("SPHusbandWifeName2","স্বামী/স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SPHusbandWifeName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SPHusbandWifeName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation-error">
        {!! Form::label("Relation","সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation2-error">
        {!! Form::label("Relation2","সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GivenPortion-error">
        {!! Form::label("GivenPortion","অংশ (কত ভাগ)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GivenPortion2-error">
        {!! Form::label("GivenPortion2","অংশ (কত ভাগ)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Image-error">
        {!! Form::label("Image","ছবি সংযুক্তিঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
         
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Image-error">
        {!! Form::label("Image","সদস্যের ছবিঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("Image",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Image-error" class="help-block"></span>
        </div>
    </div>
    
    <div class="form-group required col-md-6" id="form-TMSSIdCard-error">
        {!! Form::label("TMSSIdCard","সদস্যের টিএমএসএস আইডিঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("TMSSIdCard",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TMSSIdCard-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NIdImage-error">
        {!! Form::label("NIdImage","সদস্যের জাতীয় পরিচয়পত্রঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NIdImage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NIdImage-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-NomineeImage-error">
        {!! Form::label("NomineeImage","নমিনীর ছবি-১ঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NomineeImage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NomineeImage-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BirthCertificate-error">
        {!! Form::label("BirthCertificate","নমিনীর আইডি/জন্ম নিবন্ধনঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("BirthCertificate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BirthCertificate-error" class="help-block"></span>
        </div>
    </div>


    <div class="form-group required col-md-6" id="form-NomineeImage2-error">
        {!! Form::label("NomineeImage2","নমিনীর ছবি-২ঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("NomineeImage2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="NomineeImage2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BirthCertificate2-error">
        {!! Form::label("BirthCertificate2","নমিনীর আইডি/জন্ম নিবন্ধনঃ",["class"=>"control-label col-md-3"]) !!}
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
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Preview",["type" => "submit","class"=>"btn
    btn-primary"])!!}
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