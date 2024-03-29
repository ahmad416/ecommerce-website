<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{route("home")}}">
                        <img class="brand-logo" alt="modern admin logo" src="{{asset("images/website/logos/logo1-new.png")}}" width="300px">
                        <h3 class="brand-text">Kamalia Khaddi</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="javascript:void(0)"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Dashboard...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">{{Auth::user()->name}}</span>
                </span>
                            <span class="avatar avatar-online">
                  <img src="{{asset("admin-v2/images/avatar/avatar.jpg")}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> View Profile</a>
                            <a class="dropdown-item" href="#"><i class="ft-mail"></i> Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >
                                <i class="ft-power"></i>
                                Logout
                            </a>
                            <form method="post" id="logout-form" action="{{route('logout')}}">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
