<div class="col-md-12">

    <div id="exTab2" class="">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#1" data-toggle="tab">ব্যক্তিগত তথ্য</a>
            </li>

            <li>
                <a href="#2" data-toggle="tab">বিনিয়োগের তথ্য</a>
            </li>

            <li>
                <a href="#3" data-toggle="tab">অর্থ প্রবাহ বিবরণী</a>
            </li>

            <li>
                <a href="#4" data-toggle="tab">অন্যান্য</a>
            </li>

            <li>
                <a href="#5" data-toggle="tab">শেষ</a>
            </li>
        </ul>

        <div class="tab-content ">

            <div class="tab-pane active" id="1">

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">শাখার তথ্য</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("ZoneId",[ '1' => 'Dhaka', '2' => 'Bogra', '3' => 'Rajshahi'])!!}
                            <span id="ZoneId-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("AreaId",['1' => 'Savar', '2' => 'Thengamara', '3' => 'Rajshahi'])!!}
                            <span id="AreaId-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("BranchId","শাখা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("BranchId",['1' => 'HemayetPur', '2' => 'Gokul', '3' => 'Baghmara'])!!}
                            <span id="BranchId-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GroupId","গ্রুপ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("GroupId",['1' => 'Shefali', '2' => 'Cameli', '3' => 'Beli'])!!}
                            <span id="GroupId-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">নাম</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("NameTitle","নামের টাইটেল:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("NameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                            <span id="NameTitle-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FirstName","১ম নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FirstName",null,["class"=>"form-control required"]) !!}
                            <span id="FirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("LastName","২য় নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("LastName",null,["class"=>"form-control required"]) !!}
                            <span id="LastName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FamilyName","পারিবারিক নাম:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="FamilyName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="FullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Gender","লিঙ্গ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Gender",['1' => 'Male', '2' => 'Female', '3' => 'Others'])!!}
                            <span id="Gender-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Age",['18', '19','20','21','22','30','30'])!!}
                            <span id="Age-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Education","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Education",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
                            <span id="Education-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}
                            <span id="PassingYear-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box-header col-md-11 col-md-offset-1">
                        <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FatherOrHasbandNAmeTitle","নামের টাইটেল",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr'])!!}
                            <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FatherOrHasbandFirstName","১ম নামঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FatherOrHasbandLastName","২য় নামঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandLastName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FatherOrHasbandAge","বয়সঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}
                            <span id="FatherOrHasbandAge-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box-header col-md-11 col-md-offset-1">
                        <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MatherNameTitle","নামের টাইটেল",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("MatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
                            <span id="MatherNameTitle-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MotherFirstName","১ম নামঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("MotherFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="MotherFirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MotherLastName","২য় নামঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("MotherLastName",null,["class"=>"form-control required"]) !!}
                            <span id="MotherLastName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MotherAge","বয়সঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}
                            <span id="MotherAge-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                            <span id="SpouseProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MaritalStatus","বৈবাহিক অবস্থাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}
                            <span id="MaritalStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PoliticalStatus","রাজনীতির সাথে জরিত কি না?",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}
                            <span id="PoliticalStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নংঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("Nid",null,["class"=>"form-control required"]) !!}
                            <span id="Nid-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">বর্তমান ঠিকানা</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentCountry","দেশ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentCountry",['1' => 'Bangladesh', '2' => 'India'])!!}
                            <span id="PresentCountry-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentDistrict","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentDistrict",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                            <span id="PresentDistrict-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentThana","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentThana",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                            <span id="PresentThana-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentUnion",['1' => 'Shadullapur', '2' => 'Savar'])!!}
                            <span id="PresentUnion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentPostOffice",['1' => 'Dublia', '2' => 'Savar'])!!}
                            <span id="PresentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PresentWord",['1', '2'])!!}
                            <span id="PresentWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("PresentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PresentVillage-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("PresentRoadNo",null,["class"=>"form-control required"]) !!}
                            <span id="PresentRoadNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">স্থায়ী ঠিকানা</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentCountry","দেশ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentCountry",['1' => 'Bangladesh', '2' => 'India'])!!}
                            <span id="PermanentCountry-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentDistrict","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentDistrict",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                            <span id="PermanentDistrict-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentThana","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentThana",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                            <span id="PermanentThana-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentUnion",['1' => 'Shadullapur', '2' => 'Savar'])!!}
                            <span id="PermanentUnion-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentPostOffice",['1' => 'Dublia', '2' => 'Savar'])!!}
                            <span id="PermanentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PermanentWord",['1', '2'])!!}
                            <span id="PermanentWord-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("PermanentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentVillage-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("PermanentRoadNo",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentRoadNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Mobile","মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("Mobile",null,["class"=>"form-control required"]) !!}
                            <span id="Mobile-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Email","ইমেইলঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::email("Email",null,["class"=>"form-control required"]) !!}
                            <span id="Email-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("SpouseMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="SpouseMobileNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Distance",['1', '2', '3','4', '5', '6'])!!}
                            <span id="Distance-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">পেশা</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("CurrentProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                            <span id="CurrentProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PreviousProfessiion","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("PreviousProfessiion",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                            <span id="PreviousProfessiion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("DorationOfPreviousProfession","সেই পেশায় কতদিন নিয়োজিত ছিলেন(মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("DorationOfPreviousProfession",['1', '2', '3','4', '5', '6'])!!}
                            <span id="DorationOfPreviousProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("EarningAssetsByBusinessOrJob","ব্যবসা/চাকুরী করে অর্জিত সম্পদের বিবরণঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required"]) !!}
                            <span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="EarningSourceWithoutBusiness-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessType","ব্যবসার ধরনঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}
                            <span id="BusinessType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessFrturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("BusinessFrturePlan",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessFrturePlan-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">পারিবারিক তথ্য</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FamilyMebmer","পরিবারের সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("FamilyMebmer",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FamilyMebmer-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("EarningMale",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningMale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("EarningFemale",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningFemale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("EarningPerson",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningPerson-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MaleMember","ছেলে সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("MaleMember",['1', '2', '3','4', '5', '6'])!!}
                            <span id="MaleMember-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FemaleMenber","মেয়ে সদস্য সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("FemaleMenber",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FemaleMenber-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}
                            <span id="FamilyType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SickDescripotionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("SickDescripotionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                            <span id="SickDescripotionOfFamilyMember-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("CaseDescriptionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                            <span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("IfAnyMemberInAbroad",null,["class"=>"form-control required"]) !!}
                            <span id="IfAnyMemberInAbroad-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("CultiviableLand","আবাদি জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("CultiviableLand",null,["class"=>"form-control required"]) !!}
                            <span id="CultiviableLand-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("NonCultivableLand",null,["class"=>"form-control required"]) !!}
                            <span id="NonCultivableLand-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("Pond",null,["class"=>"form-control required"]) !!}
                            <span id="Pond-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("House",null,["class"=>"form-control required"]) !!}
                            <span id="House-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TotalLand",null,["class"=>"form-control required"]) !!}
                            <span id="TotalLand-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="box-header col-md-11 col-md-offset-1">
                        <h5 class="text-aqua">বাৎসরিক মোট আয় ও ব্যয়</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AgriculturalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="AgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="NonAgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TotalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="TotalEarning-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TotalExpenditure",null,["class"=>"form-control required"]) !!}
                            <span id="TotalExpenditure-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("NetBalance",null,["class"=>"form-control required"]) !!}
                            <span id="NetBalance-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TinMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="TinMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("StrawMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="StrawMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("BrickMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="BrickMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("ReceivedAmount","গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("ReceivedAmount",null,["class"=>"form-control required"]) !!}
                            <span id="ReceivedAmount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("PaidAmount",null,["class"=>"form-control required"]) !!}
                            <span id="PaidAmount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("RemainingAmountToPay",null,["class"=>"form-control required"]) !!}
                            <span id="RemainingAmountToPay-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("RepaymentType","পরিশোধের ধরণঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}
                            <span id="RepaymentType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নামঃFinancierCompany",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FinancierCompany",null,["class"=>"form-control required"]) !!}
                            <span id="FinancierCompany-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("LoaningYear",null,["class"=>"form-control required"]) !!}
                            <span id="LoaningYear-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("LastReceivedDate",null,["class"=>"form-control required"]) !!}
                            <span id="LastReceivedDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("IsHe/SheWillingToTakeLoan","বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("RepaymentType",['1'=>'Yes', '2'=>'No'])!!}
                            <span id="RepaymentType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("InvestmentSector","বিনিয়োগের খাতঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("InvestmentSector",null,["class"=>"form-control required"]) !!}
                            <span id="InvestmentSector-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Amount","টাকার পরিমানঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("Amount",null,["class"=>"form-control required"]) !!}
                            <span id="Amount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("Comment1",null,["class"=>"form-control required"]) !!}
                            <span id="Comment1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("Comment2",null,["class"=>"form-control required"]) !!}
                            <span id="Comment2-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">ব্যাংক সংক্রান্ত</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("BankAccountNo","ব্যাংক হিসাব নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BankAccountNo",null,["class"=>"form-control required"]) !!}
                            <span id="BankAccountNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("BankName","ব্যাংকের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BankName",null,["class"=>"form-control required"]) !!}
                            <span id="BankName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("BankAddress","ব্যাংকের ঠিকানা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BankAddress",null,["class"=>"form-control required"]) !!}
                            <span id="BankAddress-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">নমিনির তথ্য</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("NomineeName","নমিনির নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("NomineeName",null,["class"=>"form-control required"]) !!}
                            <span id="NomineeName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("NomineeFatherOrHasbandName","নমিনির পিতা/ স্বামীর নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("NomineeFatherOrHasbandName",null,["class"=>"form-control required"]) !!}
                            <span id="NomineeFatherOrHasbandName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("NomineeRelation","সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("NomineeRelation",null,["class"=>"form-control required"]) !!}
                            <span id="NomineeRelation-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("NomineeNameShare","নমিনির অংশ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("NomineeNameShare",null,["class"=>"form-control required"]) !!}
                            <span id="NomineeNameShare-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">ব্যবসায়িক তথ্য</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessName","ব্যবসার নামঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BusinessName",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessType","ব্যবসার প্রকৃতিঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BusinessType",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessExperience","ব্যবসার অভিজ্ঞতাঃ(মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("BusinessExperience",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessExperience-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessCenterAddress","ব্যবসা কেন্দ্রের ঠিকানাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("BusinessCenterAddress",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessCenterAddress-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessStartDate","বব্যবসা শুরুর তারিখঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("BusinessStartDate",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessStartDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Accommodation","অবকাঠামোঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Accommodation",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}
                            <span id="Accommodation-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("AccommodationLength","পরিমাপ দৈর্ঘ্য(ফুট)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("AccommodationLength",null,["class"=>"form-control required"]) !!}
                            <span id="AccommodationLength-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("AccommodationWidth","পরিমাপ প্রস্থ(ফুট)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("AccommodationWidth",null,["class"=>"form-control required"]) !!}
                            <span id="AccommodationWidth-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessPlaceStatus","ব্যবসার স্থান",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BusinessPlaceStatus",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessPlaceStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("Direction","দিক",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Direction",['1' => 'East', '2' => 'Weast','3'=>'North','4'=>'South'])!!}
                            <span id="Direction-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TradeLicenceNo","ট্রেড লাইসেন্স নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("TradeLicenceNo",null,["class"=>"form-control required"]) !!}
                            <span id="TradeLicenceNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("LicenceIssuingAuthority","ইস্যুকারী কতৃপক্ষ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("LicenceIssuingAuthority",['1' => 'পৌরসভা', '2' => 'ইউনিয়ন','3'=>'সিটি কর্পোরেশন'])!!}
                            <span id="LicenceIssuingAuthority-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("InvestedCapital","ব্যবসায় নিয়োজিত মূলধনঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("InvestedCapital",null,["class"=>"form-control required"]) !!}
                            <span id="InvestedCapital-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("CurrentCapital","বর্তমান পুঁজি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("CurrentCapital",null,["class"=>"form-control required"]) !!}
                            <span id="CurrentCapital-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlyAvarageSale","মাসিক গড় বিক্রয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlyAvarageSale",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyAvarageSale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BankPortion","ব্যাংক(%)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("BankPortion",null,["class"=>"form-control required"]) !!}
                            <span id="BankPortion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("NgoPortion","এন জি ও (%)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("NgoPortion",null,["class"=>"form-control required"]) !!}
                            <span id="NgoPortion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SelfPortion","নিজ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("SelfPortion",null,["class"=>"form-control required"]) !!}
                            <span id="SelfPortion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BorrowMoney","ধার/কর্জ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("BorrowMoney",null,["class"=>"form-control required"]) !!}
                            <span id="BorrowMoney-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlyEarningFromBusiness","বব্যবসা থেকে মাসিক আয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlyEarningFromBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyEarningFromBusiness-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlyExpenditureFromBusiness","বব্যবসা থেকে মাসিক ব্যয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlyExpenditureFromBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyExpenditureFromBusiness-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SurplusMoney","উদ্বৃত্ত",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("SurplusMoney",null,["class"=>"form-control required"]) !!}
                            <span id="SurplusMoney-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("IncomeFromOthersSources","অন্যান্য উৎস থেকে মাসিক আয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("IncomeFromOthersSources",null,["class"=>"form-control required"]) !!}
                            <span id="IncomeFromOthersSources-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OtherSources","অন্যান্য উৎস",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("OtherSources",['1' => 'চাকুরী', '2' => 'অন্যত্র বিনিয়োগ','3'=>'জমি','4'=>'দোকান ভাড়া','5'=>'বাড়ী ভাড়া'])!!}
                            <span id="OtherSources-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlyExpenditureFromOtherSources","অন্যান্য উৎস থেকে মাসিক ব্যয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlyExpenditureFromOtherSources",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyExpenditureFromOtherSources-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlySurplus","উদ্বৃত্ত",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlySurplus",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlySurplus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("MonthlyTotalSurplus","সর্বমোট উদ্বৃত্ত",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("MonthlyTotalSurplus",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyTotalSurplus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessType","ব্যবসার ধরন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("BusinessType",['1' => 'পাইকারী', '2' => 'খুচরা','3'=>'উৎপাদনকারী','4'=>'সরবরাহকারী','5'=>'প্রক্রিয়াজাতকারী','6'=>'কৃষি','7'=>'পরিবহণ'])!!}
                            <span id="BusinessType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OwnershipType","মালিকানার ধরন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("OwnershipType",['1' => 'একক', '2' => 'অংশীদারী'])!!}
                            <span id="OwnershipType-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("BusinessOwnership","ব্যবসার মালিকানা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("BusinessOwnership",['1' => 'নিজ', '2' => 'পজিশন','3'=>'ভাড়া','4'=>'লীজ','5'=>'অন্যান্য'])!!}
                            <span id="BusinessOwnership-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FirstHalfStart","১ম অর্ধ শুরু",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("FirstHalfStart",null,["class"=>"form-control required"]) !!}
                            <span id="FirstHalfStart-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("FirstHalfEnd","১ম অর্ধ শেষ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("FirstHalfEnd",null,["class"=>"form-control required"]) !!}
                            <span id="FirstHalfEnd-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SecondHalfStart","২য় অর্ধ শুরু",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("SecondHalfStart",null,["class"=>"form-control required"]) !!}
                            <span id="SecondHalfStart-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("SecondHalfEnd","২য় অর্ধ শেষ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("SecondHalfEnd",null,["class"=>"form-control required"]) !!}
                            <span id="SecondHalfEnd-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("TotalTime","মোট সময়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("TotalTime",null,["class"=>"form-control required"]) !!}
                            <span id="TotalTime-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgOPeningTime","প্রতিদিন প্রতিষ্ঠান খোলা হয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("OrgOPeningTime",null,["class"=>"form-control required"]) !!}
                            <span id="OrgOPeningTime-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgClosingTime","প্রতিদিন প্রতিষ্ঠান বন্ধ হয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("OrgClosingTime",null,["class"=>"form-control required"]) !!}
                            <span id="OrgClosingTime-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("ClosingIntervalStart","মাঝে বন্ধ শুরু",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("ClosingIntervalStart",null,["class"=>"form-control required"]) !!}
                            <span id="ClosingIntervalStart-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("ClosingIntervalClose","মাঝে বন্ধ শেষ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::time("ClosingIntervalClose",null,["class"=>"form-control required"]) !!}
                            <span id="ClosingIntervalClose-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("WeekEnd","সাপ্তাহিক বন্ধ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("WeekEnd",['1' => 'শনিবার', '2' => 'রবিবার','3'=>'সোমবার','4'=>'মঙ্গলবার','5'=>'বুধবার','6'=>'বৃহস্পতিবার','7'=>'শুক্রবার'])!!}
                            <span id="WeekEnd-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgPermanentEmployee","প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("OrgPermanentEmployee",null,["class"=>"form-control required"]) !!}
                            <span id="OrgPermanentEmployee-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgEmployee","প্রতিষ্ঠানে জনবলের সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("OrgEmployee",null,["class"=>"form-control required"]) !!}
                            <span id="OrgEmployee-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgEmployeeMale","পুরুষ কত জন?",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("OrgEmployeeMale",null,["class"=>"form-control required"]) !!}
                            <span id="OrgEmployeeMale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-unitprice-error">
                        {!! Form::label("OrgEmployeeFemale","মহিলা কত জন?",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("OrgEmployeeFemale",null,["class"=>"form-control required"]) !!}
                            <span id="OrgEmployeeFemale-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">চাকুরী সংক্রান্ত</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobOrgName","প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobOrgName",null,["class"=>"form-control required"]) !!}
                            <span id="JobOrgName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobOrgPlace","অবস্থান",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobOrgPlace",null,["class"=>"form-control required"]) !!}
                            <span id="JobOrgPlace-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobIdNo","আইডি নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobIdNo",null,["class"=>"form-control required"]) !!}
                            <span id="JobIdNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ShenaNo","সেনা নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ShenaNo",null,["class"=>"form-control required"]) !!}
                            <span id="ShenaNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobDesignation","পদবী",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobDesignation",null,["class"=>"form-control required"]) !!}
                            <span id="JobDesignation-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobUniteName","ইউনিটের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobUniteName",null,["class"=>"form-control required"]) !!}
                            <span id="JobUniteName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("DivisionName","ডিভিশনের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("DivisionName",null,["class"=>"form-control required"]) !!}
                            <span id="DivisionName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobDuration","চাকুরীর বয়স",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JobDuration",null,["class"=>"form-control required"]) !!}
                            <span id="JobDuration-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("JobSalary","বেতন-ভাতা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("JobSalary",null,["class"=>"form-control required"]) !!}
                            <span id="JobSalary-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

            </div>


            <div class="tab-pane" id="2">

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের তথ্য
                            ১ </h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanProviderOrgName","বিনিয়োগ দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("LoanProviderOrgName",['1' => 'Brac', '2' => 'Proshika', '3' => 'Grameen Bank'])!!}
                            <span id="LoanProviderOrgName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanProviderOrgAddress","ঠিকানা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                            <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AmountOfReceivedLoan","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AmountOfReceivedLoan",null,["class"=>"form-control required"]) !!}
                            <span id="AmountOfReceivedLoan-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProductName","সামগ্রীর নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ProductName",null,["class"=>"form-control required"]) !!}
                            <span id="ProductName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("InvestmentTypeNo","বিনিয়োগের দফা নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("InvestmentTypeNo",['1', '2', '3'])!!}
                            <span id="InvestmentTypeNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanReceiveDuration","মেয়াদ (মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("LoanReceiveDuration",null,["class"=>"form-control required"]) !!}
                            <span id="LoanReceiveDuration-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanReceivedDate","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("LoanReceivedDate",null,["class"=>"form-control required"]) !!}
                            <span id="LoanReceivedDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AmountOfLoanRepay","এ পর্যন্ত পরিশোধিত টাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AmountOfLoanRepay",null,["class"=>"form-control required"]) !!}
                            <span id="AmountOfLoanRepay-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("CorrentStatus","বর্তমান স্থিতি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("CorrentStatus",null,["class"=>"form-control required"]) !!}
                            <span id="CorrentStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("RemainingInstallment","অবশিষ্ট কিস্তি সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("RemainingInstallment",null,["class"=>"form-control required"]) !!}
                            <span id="RemainingInstallment-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ApproximateRepaidDate","সম্ভাব্য পরিশোধের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("ApproximateRepaidDate",null,["class"=>"form-control required"]) !!}
                            <span id="ApproximateRepaidDate-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের তথ্য
                            ২ </h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanProviderOrgName1","বিনিয়োগ দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("LoanProviderOrgName1",['1' => 'Brac', '2' => 'Proshika', '3' => 'Grameen Bank'])!!}
                            <span id="LoanProviderOrgName1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanProviderOrgAddress1","ঠিকানা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::textarea("LoanProviderOrgAddress1",null,["class"=>"form-control required"]) !!}
                            <span id="LoanProviderOrgAddress1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AmountOfReceivedLoan1","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AmountOfReceivedLoan1",null,["class"=>"form-control required"]) !!}
                            <span id="AmountOfReceivedLoan1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProductName1","সামগ্রীর নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ProductName1",null,["class"=>"form-control required"]) !!}
                            <span id="ProductName1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("InvestmentTypeNo1","বিনিয়োগের দফা নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("InvestmentTypeNo1",['1', '2', '3'])!!}
                            <span id="InvestmentTypeNo1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanReceiveDuration1","মেয়াদ (মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("LoanReceiveDuration1",null,["class"=>"form-control required"]) !!}
                            <span id="LoanReceiveDuration1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("LoanReceivedDate1","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("LoanReceivedDate1",null,["class"=>"form-control required"]) !!}
                            <span id="LoanReceivedDate1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AmountOfLoanRepay1","এ পর্যন্ত পরিশোধিত টাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AmountOfLoanRepay1",null,["class"=>"form-control required"]) !!}
                            <span id="AmountOfLoanRepay1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("CorrentStatus1","বর্তমান স্থিতি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("CorrentStatus1",null,["class"=>"form-control required"]) !!}
                            <span id="CorrentStatus1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("RemainingInstallment1","অবশিষ্ট কিস্তি সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("RemainingInstallment1",null,["class"=>"form-control required"]) !!}
                            <span id="RemainingInstallment1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ApproximateRepaidDate1","সম্ভাব্য পরিশোধের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("ApproximateRepaidDate1",null,["class"=>"form-control required"]) !!}
                            <span id="ApproximateRepaidDate1-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="3">

                <div class="col-md-12">

                </div>
            </div>

            <div class="tab-pane" id="4">

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">জামানত সংক্রান্ত</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GPositionPrice","ডীড/ পজিশনঃ মূল্য",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("GPositionPrice",null,["class"=>"form-control required"]) !!}
                            <span id="GPositionPrice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GPositionDuration","মেয়াদ (মাস)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("GPositionDuration",null,["class"=>"form-control required"]) !!}
                            <span id="GPositionDuration-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ValidityYear","কত সাল পর্যন্ত",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ValidityYear",null,["class"=>"form-control required"]) !!}
                            <span id="ValidityYear-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GMouza","জমির দলীল মৌজা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GMouza",null,["class"=>"form-control required"]) !!}
                            <span id="GMouza-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GCSKhotiyanNo","সিএস খতিয়ান নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GCSKhotiyanNo",null,["class"=>"form-control required"]) !!}
                            <span id="GCSKhotiyanNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GHallKhotiyanNo","হাল খতিয়ান নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GHallKhotiyanNo",null,["class"=>"form-control required"]) !!}
                            <span id="GHallKhotiyanNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GRSDPKhotiyanNo","আরএস/ ডিপি খতিয়ান নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GRSDPKhotiyanNo",null,["class"=>"form-control required"]) !!}
                            <span id="GRSDPKhotiyanNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GCSDagNo","সিএস দাগ নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GCSDagNo",null,["class"=>"form-control required"]) !!}
                            <span id="GCSDagNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GHalDagNo","হাল দাগ নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GHalDagNo",null,["class"=>"form-control required"]) !!}
                            <span id="GHalDagNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GJLNo","যে এল নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GJLNo",null,["class"=>"form-control required"]) !!}
                            <span id="GJLNo-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GHoldingNo","হোল্ডিং নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GHoldingNo",null,["class"=>"form-control required"]) !!}
                            <span id="GHoldingNo-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GLandAmount","জমির পরিমাণ(শতক)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("GLandAmount",null,["class"=>"form-control required"]) !!}
                            <span id="GLandAmount-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GApproximatePrice","আনুমানিক মূল্য",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("GApproximatePrice",null,["class"=>"form-control required"]) !!}
                            <span id="GApproximatePrice-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GLandOwerShip","জমির মালিকানা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("GLandOwerShip",['1' => 'সদস্য', '2' => 'অভিভাবক', '3' => 'জামিনদার'])!!}
                            <span id="GLandOwerShip-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("BankNAme","অগ্রিম চেকঃ ব্যাংকের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("BankNAme",null,["class"=>"form-control required"]) !!}
                            <span id="BankNAme-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GBankBranchName","শাখার নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GBankBranchName",null,["class"=>"form-control required"]) !!}
                            <span id="GBankBranchName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GBankAccountNo","হিসাব নং",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("GBankAccountNo",null,["class"=>"form-control required"]) !!}
                            <span id="GBankAccountNo-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">পূর্বের বিনিয়োগের তথ্য</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProjectName","প্রকল্প/ ব্যবসা/ কর্মকান্ডের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ProjectName",null,["class"=>"form-control required"]) !!}
                            <span id="ProjectName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("PreviousInvestmentType","বিনিয়োগের ধরন",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("PreviousInvestmentType",null,["class"=>"form-control required"]) !!}
                            <span id="PreviousInvestmentType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("PreviousReceivedAmount","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("PreviousReceivedAmount",null,["class"=>"form-control required"]) !!}
                            <span id="PreviousReceivedAmount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AmountReceivedStep","দফা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("AmountReceivedStep",null,["class"=>"form-control required"]) !!}
                            <span id="AmountReceivedStep-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("PreviousInvestmentReceivedDate","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("PreviousInvestmentReceivedDate",null,["class"=>"form-control required"]) !!}
                            <span id="PreviousInvestmentReceivedDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("PreviousInvestmentRepaidDate","বিনিয়োগ পরিশোধের তারিখ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::date("PreviousInvestmentRepaidDate",null,["class"=>"form-control required"]) !!}
                            <span id="PreviousInvestmentRepaidDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("Repaymentattitude","পরিশোধের প্রবনতা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("Repaymentattitude",['1' => 'নিয়মিত', '2' => 'অনিয়মিত'])!!}
                            <span id="Repaymentattitude-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("AdvancedPaidInstalation","অগ্রিম কিস্তি প্রদানের সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("AdvancedPaidInstalation",null,["class"=>"form-control required"]) !!}
                            <span id="AdvancedPaidInstalation-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("PaidMoneyPerInstalment","প্রতি কিস্তিতে কত টাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("PaidMoneyPerInstalment",null,["class"=>"form-control required"]) !!}
                            <span id="PaidMoneyPerInstalment-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">সঞ্চয় স্থিতি</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("GenaralSaving","সাধারন স্থিতি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("GenaralSaving",null,["class"=>"form-control required"]) !!}
                            <span id="GenaralSaving-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("SpecialSaving","বিশেষ স্থিতি",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("SpecialSaving",null,["class"=>"form-control required"]) !!}
                            <span id="SpecialSaving-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("TssMoney","টিএসএস(টাকা)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TssMoney",null,["class"=>"form-control required"]) !!}
                            <span id="TssMoney-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("TotalSavingAmount","মোট টাকা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("TotalSavingAmount",null,["class"=>"form-control required"]) !!}
                            <span id="TotalSavingAmount-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane" id="5">
                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">আবেদনকৃত বিনিয়োগের পরিমাণ</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProposedAmountInNumber","আবেদনকৃত টাকার পরিমাণ(অংকে)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("ProposedAmountInNumber",null,["class"=>"form-control required"]) !!}
                            <span id="ProposedAmountInNumber-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProposedAmountInWord","আবেদনকৃত টাকার পরিমাণ(কথায়)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("ProposedAmountInWord",null,["class"=>"form-control required"]) !!}
                            <span id="ProposedAmountInWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProposedInvesmentDuration","বিনিয়োগের মেয়াদ(বছর)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("ProposedInvesmentDuration",null,["class"=>"form-control required"]) !!}
                            <span id="ProposedInvesmentDuration-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProposedInvestmentStep","বিনিয়গের দফা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("ProposedInvestmentStep",['1', '2' , '3'])!!}
                            <span id="ProposedInvestmentStep-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-name-error">
                        {!! Form::label("ProposedInvesmentName","বিনিয়োগের কর্মকান্ড/ প্রকল্পের নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("ProposedInvesmentName",null,["class"=>"form-control required"]) !!}
                            <span id="ProposedInvesmentName-error" class="help-block"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-push-3">
            <a href="javascript:ajaxLoad('loan/list')" class="btn btn-danger"><i
                        class="glyphicon glyphicon-backward"></i>
                Back</a>
            {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
        btn-primary"])!!}
        </div>
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