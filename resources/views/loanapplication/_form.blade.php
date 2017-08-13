<div class="col-md-12 inforError" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Loan Information</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control MemberId required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Designation-error">
        {!! Form::label("Designation","Designation",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Designation",null,["class"=>"form-control Designation required","id"=>"Designation"]) !!}
            <span id="Designation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Savings-error">
        {!! Form::label("Savings","Saving in TECSL",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Savings",null,["class"=>"form-control Savings required","id"=>"Savings"]) !!}
            <span id="Savings-error" class="help-block"></span>
        </div>
    </div>

     <div class="form-group required col-md-6" id="form-LoanType-error">
        {!! Form::label("LoanType","Product Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanType",null,["class"=>"form-control required","id"=>"LoanType"]) !!}
            <span id="LoanType-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-LoanAmount-error">
        {!! Form::label("LoanAmount","Loan Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanAmount",null,["class"=>"form-control required","id"=>"LoanAmount"]) !!}
            <span id="LoanAmount-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-LoanDuration-error">
        {!! Form::label("LoanDuration","Loan Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanDuration",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="LoanDuration-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-InstallmentNo-error">
        {!! Form::label("InstallmentNo","No of Installment",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("InstallmentNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="InstallmentNo-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-InterestRate-error">
        {!! Form::label("InterestRate","Interest Rate",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("InterestRate",null,["class"=>"form-control InterestRate required","id"=>"InterestRate"]) !!}
            <span id="InterestRate-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-BankAccountName-error">
        {!! Form::label("BankAccountName","Bank Account Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankAccountName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankAccountName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AccountType-error">
        {!! Form::label("AccountType","Account Type:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AccountType",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AccountType-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AccountNo-error">
        {!! Form::label("AccountNo","Account No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("AccountNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AccountNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BankName-error">
        {!! Form::label("BankName","Bank Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BankName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchName-error">
        {!! Form::label("BranchName","Branch Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IncomeSource-error">
        {!! Form::label("IncomeSource","Income Source",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("IncomeSource",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IncomeSource-error" class="help-block"></span>
        </div>
    </div>
</div>

<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Office Information</h3>               
    </div>
      <div class="form-group required col-md-6" id="form-EnglishName-error">
        {!! Form::label("EnglishName","Member Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("EnglishName",null,["class"=>"form-control EnglishName required","id"=>"EnglishName"]) !!}
            <span id="EnglishName-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DomainName", $DomainInfo, null, ["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DivisionOfficeId-error">
        {!! Form::label("DivisionOfficeId","Divisional Office",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionOfficeId", $DivisionOfficeInfo, null, ["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
            <span id="DivisionOfficeId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-ZoneId-error">
        {!! Form::label("ZoneId","Zone",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ZoneId", $ZoneInfo, null, ["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaId-error">
        {!! Form::label("AreaId","Area",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AreaId", $Area, null, ["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchId-error">
        {!! Form::label("BranchId","Branch",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("BranchId", $BranchInfo, null, ["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
            <span id="BranchId-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-TMSSId-error">
        {!! Form::label("TMSSId","TMSS Employee ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TMSSId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TMSSId-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12 inforError" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Gaurantor Information</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-GaurantorName-error">
        {!! Form::label("GaurantorName","Gaurantor Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GaurantorName",null,["class"=>"form-control GaurantorName required","id"=>"GaurantorName"]) !!}
            <span id="GaurantorName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GFatherName-error">
        {!! Form::label("GFatherName","Father Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GFatherName",null,["class"=>"form-control GFatherName required","id"=>"GFatherName"]) !!}
            <span id="GFatherName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GMotherName-error">
        {!! Form::label("GMotherName","GMotherName",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GMotherName",null,["class"=>"form-control GMotherName required","id"=>"GMotherName"]) !!}
            <span id="GMotherName-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-GHusbandWifeName-error">
        {!! Form::label("GHusbandWifeName","GHusbandWifeName",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GHusbandWifeName",null,["class"=>"form-control GHusbandWifeName required","id"=>"GHusbandWifeName"]) !!}
            <span id="GHusbandWifeName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GAge-error">
        {!! Form::label("GAge","Age",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GAge",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GAge-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GBirthDate-error">
        {!! Form::label("GBirthDate","Birth Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GBirthDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GBirthDate-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GNationality-error">
        {!! Form::label("GNationality","Nationality",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GNationality",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GNationality-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GOccupation-error">
        {!! Form::label("GOccupation","Occupation",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GOccupation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GOccupation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GNId-error">
        {!! Form::label("GNId","National Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GNId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GNId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GTaxNo-error">
        {!! Form::label("GTaxNo","Tax No(if any)",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GTaxNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GTaxNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GDrivingLicenseNo-error">
        {!! Form::label("GDrivingLicenseNo","Driving License No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GDrivingLicenseNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GDrivingLicenseNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GMobileNo-error">
        {!! Form::label("GMobileNo","Mobile No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GMobileNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GVillageName-error">
        {!! Form::label("GVillageName","Village Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GVillageName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GVillageName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GPostOffice-error">
        {!! Form::label("GPostOffice","Post Office:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GPostOffice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GPostOffice-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GPolliceStation-error">
        {!! Form::label("GPolliceStation","Pollice Station",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GPolliceStation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GPolliceStation-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-GDistrict-error">
        {!! Form::label("GDistrict","District",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GDistrict",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GDistrict-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12 inforError" style="background-color: #F7F7F7">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Gaurantor Office Information</h3>               
    </div>
    
    <div class="form-group required col-md-6" id="form-GOfficeName-error">
        {!! Form::label("GOfficeName","Village:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GOfficeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GOfficeName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GDesignation-error">
        {!! Form::label("GDesignation","Post Office:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GDesignation",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GDesignation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GOfficeId-error">
        {!! Form::label("GOfficeId","Pollice Station:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GOfficeId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GOfficeId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GOfficeAddress-error">
        {!! Form::label("GOfficeAddress","District:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GOfficeAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GOfficeAddress-error" class="help-block"></span>
        </div>
    </div>
</div>

<div class="col-md-12 inforError" style="background-color: #EAEAEA">
    <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3>Gaurantor Bank Information</h3>               
    </div>
    
    <div class="form-group required col-md-6" id="form-GBankAccountName-error">
        {!! Form::label("GBankAccountName","Band Account Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GBankAccountName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GBankAccountName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GAccountType-error">
        {!! Form::label("GAccountType","Account Type",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GAccountType",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GAccountType-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GAccountNo-error">
        {!! Form::label("GAccountNo","Account No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GAccountNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GAccountNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GBankName-error">
        {!! Form::label("GBankName","Bank Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GBankName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GBankName-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-GTMemberId-error">
        {!! Form::label("GTMemberId","TMSS Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GTMemberId",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GTMemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GBranchName-error">
        {!! Form::label("GBranchName","Branch Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GBranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GBranchName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GAdmDate-error">
        {!! Form::label("GAdmDate","Admission Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GAdmDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GAdmDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-GSavingAmount-error">
        {!! Form::label("GSavingAmount","Saving Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("GSavingAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GSavingAmount-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-GImage-error">
        {!! Form::label("GImage","Gaurantor Image",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("GImage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GImage-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-GSignature-error">
        {!! Form::label("GSignature","Gaurantor Signature",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("GSignature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="GSignature-error" class="help-block"></span>
        </div>
    </div>
    
</div>

<div class="col-md-12" style="background-color: #F7F7F7">
    <div class="form-group required col-md-6" id="">
    <h3>Witness Information-1</h3>
    </div>
    <div class="form-group required col-md-6" id="">
       <h3>Witness Information-2</h3>
    </div>
     <div class="form-group required col-md-6" id="form-WName1-error">
        {!! Form::label("WName1","Witness Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WName1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WName1-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-WName2-error">
        {!! Form::label("WName2","Witness Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WName2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WName2-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-W1Signature-error">
        {!! Form::label("W1Signature","Witness Signature",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("W1Signature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="W1Signature-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-W2Signature-error">
        {!! Form::label("W2Signature","Witness Signature",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::file("W2Signature",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="W2Signature-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('loanapplication/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary "])!!}
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
                        $('#DivisionOfficeId').append('<option value="'+subcatObj.id+'">'+subcatObj.DivisionOfficeName +'</option>')
                    });
                },
                error: function () {
                    alert("Enternal Connection errors.");
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


    //     $(document).on('change', '.ThanaId', function () {
    //         //console.log("yes it is change");

    //         var op = " ";
    //         var ThanaId = $(this).val();
    //         //var div = $(this).parent();
    //         //console.log(DivisionId);
    //         $('#UnionId').empty();
    //         $.ajax({
    //             type: 'get',
    //             url: 'getUnion',
    //             data: {'id': ThanaId},
    //             success: function (data) {
    //                 $.each(data, function (index, subcatObj2) {
    //                     $('#UnionId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.UnionName +'</option>')
    //                 });
    //             },
    //             error: function () {

    //             }
    //         });
    //         $.ajax(clear);
    //     });

    //     $(document).on('change', '.UnionId', function () {
    //         //console.log("yes it is change");

    //         var op = " ";
    //         var UnionId = $(this).val();
    //         //var div = $(this).parent();
    //         //console.log(DivisionId);
    //         $('#WordId').empty();
    //         $.ajax({
    //             type: 'get',
    //             url: 'getWord',
    //             data: {'id': UnionId},
    //             success: function (data) {
    //                 $.each(data, function (index, subcatObj2) {
    //                     $('#WordId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
    //                 });
    //             },
    //             error: function () {

    //             }
    //         });
    //         $.ajax(clear);
    //     });

    //     $(document).on('change', '.DistrictId', function () {
    //         //console.log("yes it is change");

    //         var op = " ";
    //         var DistrictId = $(this).val();
    //         //var div = $(this).parent();
    //         //console.log(DistrictId);
    //         $('#PostOfficeId').empty();
    //         $.ajax({
    //             type: 'get',
    //             url: 'getPostOffice',
    //             data: {'id': DistrictId},
    //             success: function (data) {
    //                 $.each(data, function (index, subcatObj3) {
    //                     $('#PostOfficeId').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
    //                 });
    //             },
    //             error: function () {

    //             }
    //         });
    //         $.ajax(clear);
    //     });

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

    //     $(document).on('change', '.MemberId', function () {

    //         var op = " ";
    //         var MemberId = $(this).val();           
            
    //         $.ajax({
    //             type: 'get',
    //             url: 'getJustify',
    //             data: {'id': MemberId},
    //             success: function (data) {
    //                 $('#EnglishName').empty();
    //                 console.log(data); 
    //                     document.getElementById("EnglishName").value = data;
    //             },
    //             error: function () {
    //                     alert("Please pay form and passbook fee first.");
    //                     $(".inforError :input").attr("disabled", true);
    //             }
    //         });
    //         // $.ajax(clear);
    //     });

    });

</script>

