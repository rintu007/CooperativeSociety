<div><h1 class="page-header">Personal Report</h1></div>

<div class="row">
    <div class="col-md-12">
        <h2>Member Info</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Member Id</th>
                    <th>Father Name</th>
                    <th>Mobile No</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1;?> -->
                @foreach($MemberInfo as $key=>$member)
                    <tr>
                        <td>{{$member->EnglishName}}</td>
                        <td>{{$member->MemberId}}</td>              
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Share Info</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Share Number</th>
                    <th>Share Amount</th>
                    
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1;?> -->
                @foreach($ShareInfo as $key=>$share)
                    <tr>
                        <td>{{$share->present_share_number}}</td>
                        <td>{{$share->present_share_amount}}</td>               
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Saving Info</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Member Id</th>
                    <th>Father Name</th>
                    <th>Mobile No</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1;?> -->
                @foreach($MemberInfo as $key=>$member)
                    <tr>
                        <td>{{$member->EnglishName}}</td>
                        <td>{{$member->MemberId}}</td>               
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Member Info</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Member Id</th>
                    <th>Father Name</th>
                    <th>Mobile No</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1;?> -->
                @foreach($MemberInfo as $key=>$member)
                    <tr>
                        <td>{{$member->EnglishName}}</td>
                        <td>{{$member->MemberId}}</td>                
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>