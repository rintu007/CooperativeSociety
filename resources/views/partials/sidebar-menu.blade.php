@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Finance</a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li> -->
                <li><a tabindex="-1" href="{{ url('/joiningmoneyreceipt') }}">Joining Money Receipt</a></li>
                <li><a tabindex="-1" href="{{ url('/loanapplicationmoneyreceipt') }}">Loan Application M.R.</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Member</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">Member</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Approval Module</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/applicationformmr') }}">Joining Approval/Reject</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Loan Module</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/loanapplication') }}">Loan Application</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">User Module</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/users') }}">User</a></li>
            </ul>
        </li>
</ul>
@endif