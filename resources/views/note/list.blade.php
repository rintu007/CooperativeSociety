@if (Auth::guest())
@else
    <div class="col-sm-12" style="text-align: center;"><h1 class="page-header">Condense Information Sheet (CIS) of TECSL</h1></div>
     <div class="col-md-4">
            <h1 class="page-header">Organization Name: TECSL    
            </h1>
    </div>
     <div class="col-md-4"> 
            <h1 class="page-header">Month:{{date('m')}}
            </h1>
    </div>
     <div class="col-md-4"> 
            <h1 class="page-header">Year: {{date('Y')}}   
            </h1>
    </div>
 
    <table class="table table-bordered table-striped">
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
        <!--  <?php $i = 1;
        $j = 0;
        ?> -->
        @foreach($notes as $key=>$note)
            <tr>
                <td align="center">{{$note->id}}</td>
                <td>{{$note->Description}}</td>
                <td>{{$note->ThisMonth}}</td>
                <td>{{$note->ThisYear}}</td>
                <td>{{$note->ThisPeriod}}</td>
                <td>{{$note->Comments}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$notes->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$notes->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif