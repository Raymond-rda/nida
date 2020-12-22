<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="#" aria-expanded="false">

                            <img src="{{ asset('backend/profiles/default.jpg')}}" class="rounded-circle ml-2" width="30">

                        <span class="hide-menu">{{ Auth::user()->name }}  </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="ti-user mr-1 ml-1"></i>
                                <span class="hide-menu"> My Profile </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                {{--<i class="ti-settings mr-1 ml-1"></i>--}}
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                                <span class="hide-menu"> Change Password </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa fa-user-edit"></i>
                                <span class="hide-menu">Edit Account  </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa fa-user-edit"></i>
                                <span class="hide-menu">Change Profile  </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                {{--                @if(Auth::user()->level==3)--}}
                <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.province')}}" aria-expanded="false">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="hide-menu">Province</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.district')}}" aria-expanded="false">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="hide-menu">District</span>
                    </a>
                </li>


{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.populations')}}" aria-expanded="false">--}}
{{--                        <i class="fa fa-users"></i>--}}
{{--                        <span class="hide-menu">NIDA Lists</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
