 $(document).on('load', '.MemberId', function () {
            //console.log("yes it is change");
            alert('hey this is working.');
            // var op = " ";
            var MemberId =  $(this).val();
        
            // $('#DivisionOfficeId').empty();
            // $.ajax({
            //     type: 'get',
            //     url: 'getMemberInfo',
            //     data: {'id': MemberId},
            //     success: function (data) {
            //         $.each(data, function (index, subcatObj) {

            //               document.getElementById("MemberName").value = subcatObj.EnglishName;
            //               document.getElementById("MobileNo").value = subcatObj.MobileNo;
                        
            //         });
            //     },
            //     error: function () {
            //         alert("Please be a member first.");
                    
            //     }
            // });
            // $.ajax(clear);
        });