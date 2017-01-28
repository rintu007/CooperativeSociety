@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li> -->
                <li><a tabindex="-1" href="{{ url('/member') }}">Member</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li> -->
                <li><a tabindex="-1" href="{{ url('/appformandpassbook') }}">Entry Form & Passbook</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Shares</a></li>
                <li><a tabindex="-1" href="{{ url('/monthlysaving') }}">Savings</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Application</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Shares</a>
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
<!-- 

        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li>
                <li><a tabindex="-1" href="{{ url('/member') }}">Member Joining</a></li>
                <li><a tabindex="-1" href="{{ url('/loan') }}">Loan Proposal</a></li>
            </ul>
        </li> -->
        <!-- <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li>
                
            </ul>
        </li> -->
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
        </li>
</ul>
@endif