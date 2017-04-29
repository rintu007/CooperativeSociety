<!doctype>
<html>
<head>
    <title>jsPDF</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.8.17.custom.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script type="text/javascript" src="js/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="js/jspdf.debug.js"></script>
    <script type="text/javascript" src="js/basic.js"></script>

    <script>
        $(function () {
            $("#accordion-basic").accordion({
                autoHeight: false,
                navigation: true
            });
            $("#tabs").tabs();
            $(".button").button();
        });
    </script>
</head>

<body>


<h1 id="head1">hello</h1>
<?php $i = 1;
?>
@foreach($data as $data1)
    {{$i}} &nbsp;
    {{$data1->FullNameEnglish}}

    <br>
@endforeach


</body>
</html>
<script>
    $(document).ready(function () {
        //this calculates values automatically
//        demoTwoPageDocument();
        $("#head1").on("click", function () {
            var doc = new jsPDF();
            $.ajax({
                type: 'get',
                url: 'pdfTest1',
                data: {'id': 1},
                success: function (data) {
                    $.each(data, function (index, subcatObj3p) {
                        doc.text(20, 20, subcatObj3p.ProductName);
                        doc.text(20, 30, 'This is client-side Javascript, hi pumping out a PDF.');
                        doc.addPage();
                        doc.text(20, 20, 'Do you like that?');

                        // Save the PDF
//                        doc.save('Test.pdf');
//                        $('#PermanentWord').append('<option value="' + subcatObj3p.id + '">' + subcatObj3p.WardName + '</option>')
                    });
                    doc.save('Test.pdf');
                },
                error: function () {

                }
            });
            $.ajax(clear);
//            demoTwoPageDocument();
        });
    });

    function demoTwoPageDocument() {
        var name = 'rockey';
        var doc = new jsPDF();
        doc.text(20, 20, name);
        doc.text(20, 30, 'This is client-side Javascript, pumping out a PDF.');
        doc.addPage();
        doc.text(20, 20, 'Do you like that?');

        // Save the PDF
        doc.save('Test.pdf');
    }
</script>