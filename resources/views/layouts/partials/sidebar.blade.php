<ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1659/1659098.png" width="30" height="30" class="rounded">
        </div>
        <div class="sidebar-brand-text mx-2">Final Project</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <div class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <img src="https://cdn-icons-png.flaticon.com/512/5421/5421437.png" width="25" height="25" class="rounded">
            <span> Dashboard</span></a>
        </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        More Info
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
                <li class="nav-item active">
                    <a class="nav-link text-white {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                        href="{{ '/recent-post' }}"><i class="fas fa-list"></i><span class="fas fa-commenting-o"></span>Recent Talks</a>
                </li>

                @role('admin')
                    <span class="nav-line"></span>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-white {{ 'contact' == request()->path() ? 'active' : '' }}"
                            href="{{ '/contact' }}">Contacts</a>
                    </li> --}}
                    <span class="nav-line"></span>

                    <span class="nav-line"></span>

                    <div class="dropdown">
                        <a class="btn dropdown-toggle text-white bg-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><img src="https://cdn-icons-png.flaticon.com/512/8777/8777649.png" width="25" height="25" class="rounded"><span> Admin</span>
                        </a>
                        <div class="dropdown-menu bg-success bg-opacity-75" aria-labelledby="dropdownMenuButton" id="select3">

                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'log' == request()->path() ? 'active' : '' }}"
                                    href="{{ '/log' }}">Logs</a>
                            </li>
                            <span class="nav-line"></span>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.roles.index') }}">Roles</a>
                            </li>
                            <span class="nav-line"></span>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.permissions.index') }}">Permissions</a>
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.users.index') }}">Users</a>
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                    href="{{ '/my-post' }}">My Talk</a>
                            </li>

                        </div>

                    </div>
                @endrole

        {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Employers</span>
        </a> --}}
        {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Employers:</h6>

                <a class="collapse-item" href="{{ url('/index') }}">Employees</a>
                <a class="collapse-item" href="{{ url('/logs') }}">Logs</a>
            </div>
        </div> --}}
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
</ul>
