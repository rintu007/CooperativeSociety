<div class="col-md-12">
    <div class="form-group required col-md-12" id="form-MemberNameBangla-error">
        {!! Form::label("MemberNameBangla","ব্যক্তিগত তথ্যঃ",["class"=>"control-label col-md-6"]) !!}
        <div class="col-md-6">
           <!--  {!! Form::text("MemberNameBangla",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberNameBangla-error" class="help-block"></span> -->
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MemberNameBangla-error">
        {!! Form::label("MemberNameBangla","নাম(বাংলায়)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberNameBangla",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberNameBangla-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MemberNameEnglish-error">
        {!! Form::label("MemberNameEnglish","ইংরেজী বড় অক্ষরে ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberNameEnglish",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberNameEnglish-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MemberFatherName-error">
        {!! Form::label("MemberFatherName","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberFatherName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-MemberFatherName-error">
        {!! Form::label("MemberMotherName","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MemberPresentAddress-error">
        {!! Form::label("MemberPresentAddress","বর্তমান ঠিকানা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberPresentAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberPresentAddress-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-HasbandWifeName-error">
        {!! Form::label("HasbandWifeName","স্বামী/ স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("HasbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="HasbandWifeName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-VillageName-error">
        {!! Form::label("VillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("VillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="VillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PostOffice-error">
        {!! Form::label("PostOffice","ডাক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Upojela-error">
        {!! Form::label("Upojela","উপজেলা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Upojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Upojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Jela-error">
        {!! Form::label("Jela","জেলা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Jela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Jela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Age-error">
        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Age",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Age-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Profession-error">
        {!! Form::label("Profession","পেশা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Profession",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Profession-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nationality-error">
        {!! Form::label("Nationality","জাতীয়তা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nationality-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nid-error">
        {!! Form::label("Nid","জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nid",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nid-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PassportId-error">
        {!! Form::label("PassportId","পাস্পর্ত নং যদি থাকে",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PassportId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PassportId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IncomeTaxVerificationNo-error">
        {!! Form::label("IncomeTaxVerificationNo","আয়কর সনাক্তকরণ নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("IncomeTaxVerificationNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IncomeTaxVerificationNo-error" class="help-block"></span>
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
     <div class="form-group required col-md-6" id="form-SelectedPersonName-error">
        {!! Form::label("SelectedPersonName","মনোনীত ব্যক্তির নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SelectedPersonName2-error">
        {!! Form::label("SelectedPersonName2","মনোনীত ব্যক্তির নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SelectedPersonFatherName-error">
        {!! Form::label("SelectedPersonFatherName","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SelectedPersonFatherName2-error">
        {!! Form::label("SelectedPersonFatherName2","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonFatherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonFatherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="SelectedPersonMotherName-error">
        {!! Form::label("SelectedPersonMotherName","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonMotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonMotherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="SelectedPersonMotherName2-error">
        {!! Form::label("SelectedPersonMotherName2","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonMotherName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonMotherName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="SelectedPersonHusbandWifeName">
        {!! Form::label("SelectedPersonHusbandWifeName","স্বামী/স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonHusbandWifeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonHusbandWifeName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="SelectedPersonHusbandWifeName2-error">
        {!! Form::label("SelectedPersonHusbandWifeName2","স্বামী/স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SelectedPersonHusbandWifeName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SelectedPersonHusbandWifeName2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation1-error">
        {!! Form::label("Relation1","সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation1-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Relation2-error">
        {!! Form::label("Relation2","সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Relation2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Relation2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="GivenPortion-error">
        {!! Form::label("GivenPortion","অংশ (কত ভাগ)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="GivenPortion2-error">
        {!! Form::label("GivenPortion2","অংশ (কত ভাগ)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GivenPortion2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GivenPortion2-error" class="help-block"></span>
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