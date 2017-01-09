<h2>Loan Application</h2>
<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-LoanReceiverNAme-error">
        {!! Form::label("LoanReceiverNAme","ঋণ গ্রহীতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanReceiverNAme",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="LoanReceiverNAme-error" class="help-block"></span>
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
    <div class="form-group required col-md-6" id="form-HasbandWifeNAme-error">
        {!! Form::label("HasbandWifeNAme","স্বামী/ স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("HasbandWifeNAme",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="HasbandWifeNAme-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DateOfBirth-error">
        {!! Form::label("DateOfBirth","জন্ম তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PurposeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="DateOfBirth-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Age-error">
        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Age",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Age-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nationality-error">
        {!! Form::label("Nationality","জাতীয়তা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nationality-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Profession-error">
        {!! Form::label("Profession","পেশা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Profession",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Profession-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Nid-error">
        {!! Form::label("Nid","জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Nid",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Nid-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IncomeTexVerificationNo-error">
        {!! Form::label("IncomeTexVerificationNo","আয়কর শনাক্তকরণ নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("IncomeTexVerificationNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IncomeTexVerificationNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DrivingLicenceNo-error">
        {!! Form::label("DrivingLicenceNo","ড্রাইভিং লাইসেন্স নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("DrivingLicenceNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="DrivingLicenceNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MobileNoOffice-error">
        {!! Form::label("MobileNoOffice","মোবাইল নং(অফিস)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MobileNoOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MobileNoOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MobileNoHouse-error">
        {!! Form::label("MobileNoHouse","মোবাইল নং(বাসা)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MobileNoHouse",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MobileNoHouse-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CurrentVillageName-error">
        {!! Form::label("CurrentVillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CurrentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CurrentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CurrentPostOffice-error">
        {!! Form::label("CurrentPostOffice","ডাকঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CurrentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CurrentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CurrentUpojela-error">
        {!! Form::label("CurrentUpojela","উপজেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CurrentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CurrentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-CurrentJela-error">
        {!! Form::label("CurrentJela","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("CurrentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="CurrentJela-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-PermanentVillageName-error">
        {!! Form::label("PermanentVillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PermanentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PermanentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PermanentPostOffice-error">
        {!! Form::label("PermanentPostOffice","ডাকঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PermanentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PermanentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PermanentUpojela-error">
        {!! Form::label("PermanentUpojela","উপজেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PermanentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PermanentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PermanentJela-error">
        {!! Form::label("PermanentJela","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PermanentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PermanentJela-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-OfficeOrgName-error">
        {!! Form::label("OfficeOrgName","প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("OfficeOrgName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="OfficeOrgName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Officej-error">
        {!! Form::label("Officej","পদবী",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Officej",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Officej-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-OfficeIdNo-error">
        {!! Form::label("OfficeIdNo","পরিচিতি নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("OfficeIdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="OfficeIdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-OfficeAddress-error">
        {!! Form::label("OfficeAddress","ঠিকানা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::textarea("OfficeAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="OfficeAddress-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BankName-error">
        {!! Form::label("BankName","ব্যাংক হিসাবের নাম/ শিরোনাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BankAccountType-error">
        {!! Form::label("BankAccountType","হিসাবের ধরন",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankAccountType",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankAccountType-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BankAccountNo-error">
        {!! Form::label("BankAccountNo","হিসাব নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankAccountNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankAccountNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BankName-error">
        {!! Form::label("BankName","ব্যাংকের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchName-error">
        {!! Form::label("BranchName","শাখা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IncomeSource-error">
        {!! Form::label("IncomeSource","আয়ের উৎস",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("IncomeSource",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IncomeSource-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Signature-error">
        {!! Form::label("Signature","স্বাক্ষর",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Signature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Signature-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Name-error">
        {!! Form::label("Name","নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Name-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-j-error">
        {!! Form::label("j","পদবী",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("j",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="j-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IdNo-error">
        {!! Form::label("IdNo","পরিচিতি নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("IdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Date-error">
        {!! Form::label("Date","তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Date",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Date-error" class="help-block"></span>
        </div>
    </div>
</div>
<h2>Jamindar</h2>
<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-GrantorName-error">
        {!! Form::label("GrantorName","জিম্মাদারের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorFatherName-error">
        {!! Form::label("GrantorFatherName","পিতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorFatherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorMotherName-error">
        {!! Form::label("GrantorMotherName","মাতার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorMotherName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorMotherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorHasbandWifeNAme-error">
        {!! Form::label("GrantorHasbandWifeNAme","স্বামী/ স্ত্রীর নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorHasbandWifeNAme",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorHasbandWifeNAme-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorDateOfBirth-error">
        {!! Form::label("GrantorDateOfBirth","জন্ম তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorPurposeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorDateOfBirth-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorAge-error">
        {!! Form::label("GrantorAge","বয়স",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorAge",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorAge-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorNationality-error">
        {!! Form::label("GrantorNationality","জাতীয়তা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorNationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorNationality-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorProfession-error">
        {!! Form::label("GrantorProfession","পেশা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorProfession",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorProfession-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorNid-error">
        {!! Form::label("GrantorNid","জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorNid",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorNid-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorIncomeTexVerificationNo-error">
        {!! Form::label("GrantorIncomeTexVerificationNo","আয়কর শনাক্তকরণ নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorIncomeTexVerificationNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorIncomeTexVerificationNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorDrivingLicenceNo-error">
        {!! Form::label("GrantorDrivingLicenceNo","ড্রাইভিং লাইসেন্স নং(যদি থাকে)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorDrivingLicenceNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorDrivingLicenceNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorMobileNoOffice-error">
        {!! Form::label("GrantorMobileNoOffice","মোবাইল নং(অফিস)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorMobileNoOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorMobileNoOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorMobileNoHouse-error">
        {!! Form::label("GrantorMobileNoHouse","মোবাইল নং(বাসা)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorMobileNoHouse",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorMobileNoHouse-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorCurrentVillageName-error">
        {!! Form::label("GrantorCurrentVillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorCurrentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorCurrentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorCurrentPostOffice-error">
        {!! Form::label("GrantorCurrentPostOffice","ডাকঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorCurrentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorCurrentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorCurrentUpojela-error">
        {!! Form::label("GrantorCurrentUpojela","উপজেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorCurrentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorCurrentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorCurrentJela-error">
        {!! Form::label("GrantorCurrentJela","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorCurrentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorCurrentJela-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GrantorPermanentVillageName-error">
        {!! Form::label("GrantorPermanentVillageName","গ্রাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorPermanentVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorPermanentVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorPermanentPostOffice-error">
        {!! Form::label("GrantorPermanentPostOffice","ডাকঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorPermanentPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorPermanentPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorPermanentUpojela-error">
        {!! Form::label("GrantorPermanentUpojela","উপজেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorPermanentUpojela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorPermanentUpojela-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorPermanentJela-error">
        {!! Form::label("GrantorPermanentJela","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorPermanentJela",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorPermanentJela-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GrantorOfficeOrgName-error">
        {!! Form::label("GrantorOfficeOrgName","প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorOfficeOrgName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorOfficeOrgName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorOfficej-error">
        {!! Form::label("GrantorOfficej","পদবী",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorOfficej",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorOfficej-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorOfficeIdNo-error">
        {!! Form::label("GrantorOfficeIdNo","পরিচিতি নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorOfficeIdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorOfficeIdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorOfficeAddress-error">
        {!! Form::label("GrantorOfficeAddress","ঠিকানা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::textarea("GrantorOfficeAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorOfficeAddress-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorBankName-error">
        {!! Form::label("GrantorBankName","ব্যাংক হিসাবের নাম/ শিরোনাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorBankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorBankName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorBankAccountType-error">
        {!! Form::label("GrantorBankAccountType","হিসাবের ধরন",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorBankAccountType",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorBankAccountType-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorBankAccountNo-error">
        {!! Form::label("GrantorBankAccountNo","হিসাব নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorBankAccountNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorBankAccountNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorBankName-error">
        {!! Form::label("GrantorBankName","ব্যাংকের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorBankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorBankName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorBranchName-error">
        {!! Form::label("GrantorBranchName","শাখা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorBranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorBranchName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorIncomeSource-error">
        {!! Form::label("GrantorIncomeSource","TECSL সদস্য ভুক্ত হওয়ার তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorIncomeSource",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorIncomeSource-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorIncomeSource-error">
        {!! Form::label("GrantorIncomeSource","সদস্য নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorIncomeSource",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorIncomeSource-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorSaving-error">
        {!! Form::label("GrantorSaving","সঞ্চয়ের পরিমাণ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorSaving",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorSaving-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GrantorSignature-error">
        {!! Form::label("GrantorSignature","স্বাক্ষর",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GrantorSignature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GrantorSignature-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BorrowerName-error">
        {!! Form::label("BorrowerName","নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BorrowerName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BorrowerName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BorrowerDesignation-error">
        {!! Form::label("BorrowerDesignation","পদবী",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BorrowerDesignation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BorrowerDesignation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BorrowerIdNo-error">
        {!! Form::label("BorrowerIdNo","পরিচিতি নং",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BorrowerIdNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BorrowerIdNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BorrowerDate-error">
        {!! Form::label("BorrowerDate","তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BorrowerDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BorrowerDate-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-WitnessesSignature-error">
        {!! Form::label("WitnessesSignature","স্বাক্ষর",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WitnessesSignature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WitnessesSignature-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-WitnessesName-error">
        {!! Form::label("WitnessesName","নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WitnessesName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WitnessesName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-WitnessesSignature1-error">
        {!! Form::label("WitnessesSignature1","স্বাক্ষর",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WitnessesSignature1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WitnessesSignature1-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-WitnessesName1-error">
        {!! Form::label("WitnessesName1","নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WitnessesName1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WitnessesName1-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('loanapplication/list')" class="btn btn-danger"><i
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