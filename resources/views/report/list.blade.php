@if (Auth::guest())
@else

    <h1 class="page-header" style="text-align: center;">Reports of Member Status</h1>
     <div class="col-md-12" style="background-color: #EAEAEA">
            <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
                <h3>Select Member or Domain</h3>               
            </div>
           <div class="form-group required col-md-6" id="form-MemberId-error">
                    {!! Form::label("MemberId","Member ID",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-6">
                    {!! Form::text("MemberId",null,["class"=>"form-control MemberId required","id"=>"MemberId"]) !!}
                    <span id="MemberId-error" class="help-block"></span>
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-DomainName-error">
                    {!! Form::label("DomainName","Domain",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-6">
                    {!! Form::select("DomainName",$DomainInfo,null,["class"=>"form-control DomainName required","id"=>"DomainName"]) !!}
                    <span id="DomainName-error" class="help-block"></span>
                </div>
            </div>
                    
     </div>
      <div class="col-md-12" style="background-color: #F7F7F7">
        <div class="form-group col-md-12" id="form-MemberPresentAddress-error">
                <h3>Select Fields</h3>               
            </div>
            <div class="form-group required col-md-6" id="form-MemberIdF-error">
                    {!! Form::label("MemberIdF","Member ID",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="MemberIdF">
                </div>
           </div>
            
           <div class="form-group required col-md-6" id="form-MemberName-error">
                    {!! Form::label("MemberName","Member Name",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="MemberName">
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-DomainNameF-error">
                    {!! Form::label("DomainNameF","Domain Name",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="DomainNameF">
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-GSaving-error">
                    {!! Form::label("GSaving","General Saving",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="GSaving">
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-Dps-error">
                    {!! Form::label("Dps","DPS",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="Dps">
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-Share-error">
                    {!! Form::label("Share","Share",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                   <input type="checkbox" id="Share">
                </div>
           </div>
           <div class="form-group required col-md-6" id="form-Loan-error">
                    {!! Form::label("Loan","Loan",["class"=>"control-label col-md-3"]) !!}
                <div class="col-md-3">
                    <input type="checkbox" id="Loan">
                </div>
           </div>
      </div> 

      <div class="col-md-12" style="background-color: #EAEAEA">
          <button type="submit" id="Submit" onclick="shishirReport();">Submit</button>
         </div>
      </div>
    <!-- <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Serial No</th>
            <th>Description</th>
            <th>This Month</th>
            <th>This Year</th>
            <th>Up to this</th>
            <th>Comments</th>
        </tr>
      
        </thead>
        <tbody>
      
      
        </tbody>
    </table> -->
    
    <div class="row">
        <i class="col-sm-12">
            
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });

        function shishirReport(){
            var MemberId = document.getElementById('MemberId').checked;
            alert("MemberId"+MemberId);
            var DomainName = document.getElementById('DomainName').checked;
            alert("DomainName"+DomainName);
            var MemberIdF = document.getElementById('MemberIdF').checked;
            alert("MemberIdF"+MemberIdF);
            var MemberName = document.getElementById('MemberName').checked;
            alert("MemberName"+MemberName);
            var DomainNameF = document.getElementById('DomainNameF').checked;
            alert("DomainNameF"+DomainNameF);
            var GSaving = document.getElementById('GSaving').checked;
            alert("GSaving"+GSaving);
            var Dps = document.getElementById('Dps').checked;
            alert("Dps"+Dps);
            var Share = document.getElementById('Share').checked;
            alert("Share"+Share);
            var Loan = document.getElementById('Loan').checked;
            alert("Loan"+Loan);
        }

        $(document).ready(function () {
        $(document).on('click', '.Submit', function () {
            alert("hey it is working");
            var DomainName = document.getElementById('DomainName').value;
            alert(DomainName);
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
            $.ajax(clear);
        });
   });
    </script>
@endif