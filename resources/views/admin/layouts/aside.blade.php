
      @extends('admin.layouts.master')
      @section('aside')
      <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('admin.index') }}">
                    <img src="{{ URL::asset("build/assets/images/icon/logo.png") }}" alt="Cool Admin">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                        {{-- Start of drugs section  --}}
                                <i class="fas fa-tachometer-alt"></i>Drugs</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                                <li>
                                    <a href="index.html">Show available drugs </a>
                                </li>
                                <li>
                                    <a href="index2.html">Add a new drug</a>
                                </li>
                            </ul>
                        </li>
                        {{-- End of drugs section  --}}

                        {{-- Start of Companies section  --}}
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Companies</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                                <li>
                                    <a href="index.html">Show available Companies </a>
                                </li>
                                <li>
                                    <a href="index2.html">Add a new company</a>
                                </li>
                            </ul>
                        </li>
                        {{-- End of Companies section  --}}

                        {{-- start of users section  --}}
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Users</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                                <li>
                                    <a href="index.html">Show  Users </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End of users section  --}}

                        {{-- start of orders section --}}
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Orders</a>
                        </li>
                        {{-- end of  orders section  --}}
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>
        <!-- END MENU SIDEBAR-->
@endsection
