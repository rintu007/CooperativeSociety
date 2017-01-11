@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li> -->
                <li><a tabindex="-1" href="{{ url('/member/list') }}">Member Joining</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Proposal</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li> -->
                <li><a tabindex="-1" href="{{ url('/joiningmoneyreceipt/list') }}">Entry Form Fee</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Application Form Fee</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Security</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">Access Control</a></li>
                <li><a tabindex="-1" href="{{ url('/member') }}">Audit Trail</a></li>
                <li><a tabindex="-1" href="{{ url('/users') }}">User Role Previledges</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Reports</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/applicationformmr') }}">Member Identification Report</a></li>
                <li><a tabindex="-1" href="{{ url('/applicationformmr') }}">Share Reports</a></li>
                <li><a tabindex="-1" href="{{ url('/applicationformmr') }}">Pass Book</a></li>
                <li><a tabindex="-1" href="{{ url('/applicationformmr') }}">Form</a></li>
            </ul>
        </li>
</ul>
@endif