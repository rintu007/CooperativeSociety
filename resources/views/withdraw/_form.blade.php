<div class="col-md-12" border="1px solid black" style="background-color: #FBFBFB">
    <table class="table table-bordered table-striped">
    <thead>
    <tr>
        
        <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=MemberId&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='MemberId'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <!--  <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=MemberName&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Member Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='MemberName'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>-->
        <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=Duration&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
                Account No
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='Duration'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th> 
        <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=MonthlyInstallment&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
               Dps Amount
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='MonthlyInstallment'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <!--  <th>
            <a href="javascript:ajaxLoad('withdraw/list?field=created_at&sort={{Session::get("withdraw_sort")=="asc"?"desc":"asc"}}')">
               Created Date
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('withdraw_field')=='created_at'?(Session::get('withdraw_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th> -->
    </tr>
    </thead>
    <tbody>
 
        <tr>
            
           <div >
                <td>                
                     {!! Form::text("MemberId", null,["class"=>"form-control readonly","id"=>"MemberId"]) !!}
                </td>
            </div>
          <!--  <div >
                <td>                
                     {!! Form::text("MemberName",null,["class"=>"form-control readonly","id"=>"MemberName"]) !!}
                </td>
            </div> -->
            <div >
                <td>                
                     {!! Form::text("Duration",null,["class"=>"form-control readonly","id"=>"Duration"]) !!}
                </td>
            </div>
            <div >
                <td>                
                     {!! Form::text("Dps",null,["class"=>"form-control readonly","id"=>"Dps"]) !!}
                </td>
            </div>
<!--             <div >
                <td>                
                     {!! Form::date("date",null,["class"=>"form-control readonly","id"=>"created_at"]) !!}
                </td>
            </div> -->
        </tr>
   
    </tbody>
</table>
</div>
<div class="col-md-12" style="background-color: #EAEAEA">
    <!-- <div class="form-group required col-md-6" id="form-serial_no-error">
        {!! Form::label("serial_no","Voutcher No",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("serial_no",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="serial_no-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-Duration-error">
        {!! Form::label("Duration","Withdraw Number",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6" onChange= "updatePrice()">
            {!! Form::number("Duration",null,["class"=>"form-control required","id"=>"Duration" ]) !!}
            <span id="Duration-error" class="help-block"></span>
        </div>
    </div>
     <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control required","id"=>"focus", "readonly" => "true"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-date-error">
        {!! Form::label("date","Date",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::date("date",\Carbon\Carbon::now(),["class"=>"form-control required","id"=>"focus", "readonly" => "true"]) !!}
            <span id="date-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MonthlyInstallment-error">
        {!! Form::label("MonthlyInstallment","Withdraw Amount",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MonthlyInstallment",null,["class"=>"form-control required","id"=>"MonthlyInstallment", "readonly" => "true"]) !!}
            <span id="MonthlyInstallment-error" class="help-block"></span>
        </div>
    </div>   -->
 
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('withdraw/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>


<!--<script type="text/javascript">
i = 0;
$(document).ready(function(){
    $("#Duration").keypress(function(){
        $("#MonthlyInstallment").text(i += 1);
    });
});
</script> -->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
<script>

    $(document).ready(function()
    {
            function updatePrice()
            {
                var Duration = parseFloat($("#Duration").val());
                var MonthlyInstallment = Duration * 100.00;
                // var MonthlyInstallment = total.toFixed(2);
                $("#MonthlyInstallment").val(MonthlyInstallment);
            }
            $(document).on("change, keyup", "#Duration", updatePrice);
    });

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
