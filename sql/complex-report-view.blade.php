<!DOCTYPE html>
<html>
    <head>
        <title>Complex Report</title>
        <link rel="stylesheet" href="{{asset('assets/css/report.css')}}">
        <script src="{{asset('assets/js/report.js')}}"></script>
    </head>
    <body>
        <div class="print">  <button onclick="printDiv('print')" style="margin:0 auto;">Print</button></div>
        <div id="print">
            <div class="header">
                <h1>TMSS Personal Management System(TPMS)</h1>
                <h2>Employee Report</h2>
            </div>
            <div class="date" align="right" style="margin-bottom: 10px;">Reporting Time:
                <?php
                date_default_timezone_set('Asia/Dhaka');
                echo date('d D Y h:i:s a');
                ?>
            </div>
            <div class="body">
                <table>
                    <thead>
                        <tr>
                            <?php
                            $array = json_decode(json_encode($data), true);
                            foreach ($array as $key => $value) {
                                if ($key == 0) {
                                    ?>
                                    <th>SL</th>
                                    <?php
                                    foreach ($value as $key => $d) {
                                        ?>
                                        <th><?php echo str_replace('-', ' ', $key) ?></th>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $array = json_decode(json_encode($data), true);
                        $i = 1;
                        ?>
                        @foreach ($array as $key => $value)
                        <tr>
                            <td>{{$i}}</td>
                            @foreach ($value as $key => $d) 
                            <td>{{$d}}</td>
                            @endforeach
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </body>
</html>
