@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@elseif(Auth::user()->user_type == "admin")
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">Member</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                
                <li><a tabindex="-1" href="{{ url('/appformandpassbook') }}">Entry Form & Passbook</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Application Fee</a></li>
               <!--  <li><a tabindex="-1" href="{{ url('/saving') }}">Savings</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan App Money Receipt</a></li> -->
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Share Exchange</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/share') }}">Shares</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Savings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/accountopen') }}">Opening Account</a></li>
                <li><a tabindex="-1" href="{{ url('/posting') }}">Posting</a></li>
                <li><a tabindex="-1" href="{{ url('/withdraw') }}">Withdraw</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">General Settings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/domain') }}">Domains</a></li>
                <li><a tabindex="-1" href="{{ url('/mikrofdivision') }}">Divisional Office</a></li>
                <li><a tabindex="-1" href="{{ url('/zone') }}">Zones</a></li>
                <li><a tabindex="-1" href="{{ url('/area') }}">Areas</a></li>
                <li><a tabindex="-1" href="{{ url('/brn') }}">Branches</a></li>
                <li><a tabindex="-1" href="{{ url('/division') }}">Divisions</a></li>
                <li><a tabindex="-1" href="{{ url('/district') }}">Districts</a></li>
                <li><a tabindex="-1" href="{{ url('/thana') }}">Pollice Stations</a></li>
                <li><a tabindex="-1" href="{{ url('/union') }}">Unions</a></li>
                <li><a tabindex="-1" href="{{ url('/ward') }}">Wards</a></li>
                <li><a tabindex="-1" href="{{ url('/year') }}">Year</a></li>
                <li><a tabindex="-1" href="{{ url('/month') }}">Month</a></li>
                <li><a tabindex="-1" href="{{ url('/producttype') }}">Product Type</a></li>
                <li><a tabindex="-1" href="{{ url('/product') }}">Products</a></li>
                <li><a tabindex="-1" href="{{ url('/duration') }}">Duration</a></li>
            </ul>
        </li>
         <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Reports</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/') }}">Reports</a></li>
            </ul>
        </li>
        <!-- <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Shares</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Share Certificate</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Loan</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/loan') }}">Loan Proposal</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Savinngs</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Savings</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Reports</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Application & Passbook</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Shares</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Savings</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Loan Application Form</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Loan</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Member</a></li>
            </ul> 
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Users</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">Access Control</a></li>
                <li><a tabindex="-1" href="{{ url('/member') }}">Audit Trail</a></li>
                <li><a tabindex="-1" href="{{ url('/users') }}">User Role Previledges</a></li>
            </ul>
        </li> -->
</ul>
@else
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
         <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">Member</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                
                <li><a tabindex="-1" href="{{ url('/appformandpassbook') }}">Entry Form & Passbook</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Application Fee</a></li>
               <!--  <li><a tabindex="-1" href="{{ url('/saving') }}">Savings</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan App Money Receipt</a></li> -->
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Share Exchange</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/share') }}">Shares</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Savings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/accountopen') }}">Opening Account</a></li>
                <li><a tabindex="-1" href="{{ url('/posting') }}">Posting</a></li>
                <li><a tabindex="-1" href="{{ url('/withdraw') }}">Withdraw</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Loan</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/loanapplication') }}">Loan Application</a></li>
                <li><a tabindex="-1" href="{{ url('/approve') }}">Approval</a></li>
                <li><a tabindex="-1" href="{{ url('/posting') }}">Posting</a></li>                
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">General Settings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/domain') }}">Domains</a></li>
                <li><a tabindex="-1" href="{{ url('/mikrofdivision') }}">Divisional Office</a></li>
                <li><a tabindex="-1" href="{{ url('/zone') }}">Zones</a></li>
                <li><a tabindex="-1" href="{{ url('/area') }}">Areas</a></li>
                <li><a tabindex="-1" href="{{ url('/brn') }}">Branches</a></li>
                <li><a tabindex="-1" href="{{ url('/division') }}">Divisions</a></li>
                <li><a tabindex="-1" href="{{ url('/district') }}">Districts</a></li>
                <li><a tabindex="-1" href="{{ url('/thana') }}">Pollice Stations</a></li>
                <li><a tabindex="-1" href="{{ url('/union') }}">Unions</a></li>
                <li><a tabindex="-1" href="{{ url('/ward') }}">Wards</a></li>
                <li><a tabindex="-1" href="{{ url('/year') }}">Year</a></li>
                <li><a tabindex="-1" href="{{ url('/month') }}">Month</a></li>
                <li><a tabindex="-1" href="{{ url('/producttype') }}">Product Type</a></li>
                <li><a tabindex="-1" href="{{ url('/product') }}">Products</a></li>
                <li><a tabindex="-1" href="{{ url('/duration') }}">Duration</a></li>
                
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Report Settings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/addcat') }}">Category</a></li>
                <li><a tabindex="-1" href="{{ url('/subcat') }}">Sub Category</a></li>            
            </ul>
        </li>
         <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Reports</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/') }}">Reports</a></li>
            </ul>
        </li>

    </ul>
@endif