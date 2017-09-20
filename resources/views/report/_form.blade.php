<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","Member Id",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("MemberId",null,["class"=>"form-control required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">                
        <button onClick="shishirReport();">submit</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12" id="MemberInfo">
       
    </div>
</div>
<script>

     function shishirReport() {

            var op = " ";
            var MemberId = $(this).val();           
            alert(MemberId);
            exit();
            $.ajax({
                type: 'get',
                url: 'getReport',
                data: {'id': MemberId},
                 success: function (data) {
                    // $('#MemberInfo').append('<h2>'+"Member Info"+'</h2><table><thead><tr><th>'+"Member Name"+'</th><th>'+"Member Id"+'</th><th>'+"Father Name"+'</th><th>'+"Mobile No"+'</th></tr></thead><tbody id="MemberInfoRow">')
                    $.each(data.MemberInfo, function (index, subcatObj1) {
                        $('#MemberInfo').append('<tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td></tr></tbody></table>');
                    });
                    // $('#MemberInfo').append('<h2>'+"Member Info"+'</h2><table><thead><tr><th>'+"Member Name"+'</th><th>'+"Member Id"+'</th><th>'+"Father Name"+'</th><th>'+"Mobile No"+'</th></tr></thead>')
                    // $.each(data.MemberInfo, function (index, subcatObj1) {
                    //     $('#MemberInfo').append('<tbody><tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td></tr></tbody></table>');
                    // });
                    // $('#MemberInfo').append('<h2>'+"Member Info"+'</h2><table><thead><tr><th>'+"Member Name"+'</th><th>'+"Member Id"+'</th><th>'+"Father Name"+'</th><th>'+"Mobile No"+'</th></tr></thead>')
                    // $.each(data.MemberInfo, function (index, subcatObj1) {
                    //     $('#MemberInfo').append('<tbody><tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td></tr></tbody></table>');
                    // });
                    // $('#MemberInfo').append('<h2>'+"Member Info"+'</h2><table><thead><tr><th>'+"Member Name"+'</th><th>'+"Member Id"+'</th><th>'+"Father Name"+'</th><th>'+"Mobile No"+'</th></tr></thead>')
                    // $.each(data.MemberInfo, function (index, subcatObj1) {
                    //     $('#MemberInfo').append('<tbody><tr><td>'+subcatObj1.EnglishName+'</td><td>'+subcatObj1.MemberId+'</td><td>'+subcatObj1.FatherName+'</td><td>'+subcatObj1.Mobile+'</td></tr></tbody></table>');
                    // });
                },
                error: function () {
                        alert("Please pay form and passbook fee first.");
                        $(".inforError :input").attr("disabled", true);
                }
            });
            $.ajax(clear);
      }

</script>