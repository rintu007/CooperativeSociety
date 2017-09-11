<div class="col-md-12 inforError" style="background-color: #F7F7F7">
    
     <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
        <h3 style="text-align: center;"">Loan Schedule</h3>               
    </div>
    <div class="form-group required col-md-6" id="form-EnglishName-error">
        {!! Form::label("EnglishName","Member Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("EnglishName",null,["class"=>"form-control EnglishName required","id"=>"EnglishName", "readonly"=>"true"]) !!}
            <span id="EnglishName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id:",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control MemberId required","id"=>"MemberId", "readonly"=>"true"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Designation-error">
        {!! Form::label("Designation","Designation",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Designation",null,["class"=>"form-control Designation required","id"=>"Designation", "readonly"=>"true"]) !!}
            <span id="Designation-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-TMSSId-error">
        {!! Form::label("TMSSId","TMSS Employee ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("TMSSId",null,["class"=>"form-control required","id"=>"focus", "readonly"=>"true"]) !!}
            <span id="TMSSId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DomainName-error">
        {!! Form::label("DomainName","Domain Name",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("DomainName", null,["class"=>"form-control DomainName required","id"=>"DomainName", "readonly"=>"true"]) !!}
            <span id="DomainName-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-LoanAmount-error">
        {!! Form::label("LoanAmount","Loan Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanAmount",null,["class"=>"form-control required","id"=>"LoanAmount", "readonly"=>"true"]) !!}
            <span id="LoanAmount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-LoanDuration-error">
        {!! Form::label("LoanDuration","Loan Duration",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("LoanDuration",null,["class"=>"form-control required","id"=>"LoanDuration", "readonly"=>"true"]) !!}
            <span id="LoanDuration-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-InterestRate-error">
        {!! Form::label("InterestRate","Interest Rate",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("InterestRate",null,["class"=>"form-control InterestRate required","id"=>"InterestRate", "readonly"=>"true"]) !!}
            <span id="InterestRate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-created_at-error">
        {!! Form::label("created_at","Disbursement Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("created_at",null,["class"=>"form-control created_at required","id"=>"created_at", "readonly"=>"true"]) !!}
            <span id="Savings-error" class="help-block"></span>
        </div>
    </div>

     <div class="form-group required col-md-6" id="form-MaturityDate-error">
        {!! Form::label("MaturityDate","Maturity Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MaturityDate",null,["class"=>"form-control required","id"=>"MaturityDate", "readonly"=>"true"]) !!}
            <span id="MaturityDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-InterestPayment-error">
        {!! Form::label("InterestPayment","Interest Payment",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("InterestPayment",null,["class"=>"form-control required","id"=>"InterestPayment", "readonly"=>"true"]) !!}
            <span id="InterestPayment-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-InstallmentNo-error">
        {!! Form::label("InstallmentNo","No of Installment",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("InstallmentNo",null,["class"=>"form-control required","id"=>"InstallmentNo", "readonly"=>"true"]) !!}
            <span id="AccountType-error" class="help-block"></span>
        </div>
    </div>
</div>


<div class="col-md-12 inforError" style="background-color: #F7F7F7">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Installment No</th>
            <th>Principal</th>
            <th>Payable Principal</th>
            <th>Interest </th>
            <th>Total</th>
            <th>Repayment Date</th>
        </tr>
        </thead>
        <tbody id="postingPlace">
      
        </tbody>
    </table>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('approve/approved')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
    </div>
</div>
<script>
            $(function(){
                var LoanAmount, InstallmentNo, InterestRate, Count, Principal, Interest, Payable, Total, Count=0, TPayable=0, TInterest=0, TTotal=0, insDivided;
                
                
                LoanAmount = Number(document.getElementById("LoanAmount").value);
                
                
                InterestRate = Number(document.getElementById("InterestRate").value);
                

                InstallmentNo = Number(document.getElementById("InstallmentNo").value);
                insDivided = InstallmentNo;
                Principal = LoanAmount;
                
               

                for(Count = 1; Count <= InstallmentNo; Count++){
                        Payable = Math.round(Principal / insDivided);
                        Interest = Math.round((Principal*20)/(12*100));
                        TInterest = TInterest + Interest;
                        Total = Payable + Interest;
                        TTotal = TTotal + Total;
                        TPayable = TPayable + Payable;
                               
                          
                         if(Count == InstallmentNo){

                             //    TPayable = (TPayable + Principal) - Payable;

                             $('#postingPlace').append('<tr class="listPagetr" id="row'+Count+'"><td style="text-align: center;">'+Count+'</td><td style="text-align: center">'+Principal+'</td><td style="text-align: center">'+Payable+'</td><td style="text-align: center">' +Interest+ '</td><td style="text-align: center">'+Total+'</td></tr>');

                             $('#postingPlace').append('<tr class="listPagetr" id="row'+Count+'"><td style="text-align: center;"></td><td style="text-align: center"></td><td style="text-align: center">'+TPayable+'</td><td style="text-align: center">' +TInterest+ '</td><td style="text-align: center">'+TTotal+'</td></tr>');
                            }
                            else{
                                $('#postingPlace').append('<tr class="listPagetr" id="row'+Count+'"><td style="text-align: center;">'+Count+'</td><td style="text-align: center">'+Principal+'</td><td style="text-align: center">'+Payable+'</td><td style="text-align: center">' +Interest+ '</td><td style="text-align: center">'+Total+'</td></tr>');
                            }
                        
                        Principal = Principal - Payable; 
                        insDivided--;
                        
                }              

            });
</script>

