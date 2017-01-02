@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Product</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">Product</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">জরিপ</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Survey List</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">সদস্য</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">সদস্য তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">প্রতিষ্ঠান সংক্রান্ত </a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">প্রতিষ্ঠান তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">ঋণ সংক্রান্ত</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">ঋণ আবেদন তালিকা</a></li>
                <li><a tabindex="-1" href="#">ঋণ অনুমদন</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">প্রোডাক্ট</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">প্রোডাক্ট তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">উদ্দেশ্য</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">উদ্দেশ্য তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">বিনিয়োগকারী</a></li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">গ্রেছ</a></li>
</ul>
@endif