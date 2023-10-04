
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

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>
        <!-- END MENU SIDEBAR-->
@endsection
