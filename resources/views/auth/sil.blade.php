<!-- *****LOGIN-REGISTER- OTOMATİK GİRME KODLARI***** -->
@if(Route::has('login'))
@auth
    @if(Auth::user()->utype === 'ADM')
        <li class="menu-item menu-item-has-children parent">
            <a title="My Account" href="#">My Account({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="submenu curency">
                <li class="menu-item">
                    <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </ul>
        </li>
    @else
        <li class="menu-item menu-item-has-children parent">
            <a title="My Account" href="#">My Account({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="submenu curency">
                <li class="menu-item">
                    <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                    @csrf
                </form>
            </ul>
        </li>
    @endif

@else
    <li class="menu-item"><a title="Giriş Yap" href="{{route('login')}}"><i class="icon-user"></i></a></li>
@endif

@endif
<!-- *****LOGIN-REGISTER- OTOMATİK GİRME KODLARI***** -->
