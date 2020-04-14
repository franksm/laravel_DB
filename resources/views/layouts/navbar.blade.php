<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item @yield('nav_people') px-lg-4">
                            <a class="nav-link" href="{{ route('people.index') }}">{{ __('People') }}</a>
                        </li>
                        <li class="nav-item @yield('nav_interest') px-lg-4">
                            <a class="nav-link" href="{{ route('interest.index') }}">{{ __('Interest') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
