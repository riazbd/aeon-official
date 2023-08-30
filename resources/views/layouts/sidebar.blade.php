{{-- Left sidebar --}}
<nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        @canany(['permission.show', 'roles.show', 'user.show'])
            <li class="nav-item has-treeview">
                <a href="#"
                    class="nav-link {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'active' : '' }}">
                    <i class="fas fa-users-cog"></i>
                    <p>
                        @lang('cruds.userManagement.title')
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview"
                    style="display: {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'block' : 'none' }};">
                    @can('permission.show')
                        <li class="nav-item">
                            <a href="{{ route('permissionIndex') }}"
                                class="nav-link {{ Request::is('permission*') ? 'active' : '' }}">
                                <i class="fas fa-key"></i>
                                <p> @lang('cruds.permission.title_singular')</p>
                            </a>
                        </li>
                    @endcan

                    @can('roles.show')
                        <li class="nav-item">
                            <a href="{{ route('roleIndex') }}" class="nav-link {{ Request::is('role*') ? 'active' : '' }}">
                                <i class="fas fa-user-lock"></i>
                                <p> @lang('cruds.role.fields.roles')</p>
                            </a>
                        </li>
                    @endcan

                    @can('user.show')
                        <li class="nav-item">
                            <a href="{{ route('userIndex') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                                <i class="fas fa-user-friends"></i>
                                <p> @lang('cruds.user.title')</p>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany
        {{-- @can('api-user.view')
            <li class="nav-item">
                <a href="{{ route('api-userIndex') }}" class="nav-link {{ Request::is('api-users*') ? "active":'' }}">
                    <i class="fas fa-cog"></i>
                    <sub><i class="fas fa-child"></i></sub>
                    <p> API Users</p>
                </a>
            </li>
        @endcan --}}
    </ul>

    {{-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="fas fa-palette"></i>
                <p>
                    @lang('global.theme')
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none">
                <li class="nav-item">
                    <a href="{{ route('userSetTheme', [auth()->id(), 'theme' => 'default']) }}" class="nav-link">
                        <i class="nav-icon fas fa-circle text-info"></i>
                        <p class="text">Default {{ auth()->user()->theme == 'default' ? '✅' : '' }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('userSetTheme', [auth()->id(), 'theme' => 'light']) }}" class="nav-link">
                        <i class="nav-icon fas fa-circle text-white"></i>
                        <p>Light {{ auth()->user()->theme == 'light' ? '✅' : '' }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('userSetTheme', [auth()->id(), 'theme' => 'dark']) }}" class="nav-link">
                        <i class="nav-icon fas fa-circle text-gray"></i>
                        <p>Dark {{ auth()->user()->theme == 'dark' ? '✅' : '' }}</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul> --}}
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#"
                class="nav-link {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'active' : '' }}">
                <i class="fas fa-file-alt"></i>
                <p>
                    Purchage Orders
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('po-create') }}" class="nav-link">create new po</a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('po-list') }}" class="nav-link">PO List</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="nav nav-sidebar">
        <li class="nav-item">

            <a href="{{ route('buyer-list') }}" class="nav-link"><i class="fas fa-building"></i> Buyers</a>
        </li>
    </ul>
    <ul class="nav nav-sidebar">
        <li class="nav-item">

            <a href="{{ route('vendor-list') }}" class="nav-link"><i class="fas fa-industry"></i> Vendors</a>
        </li>
    </ul>
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#"
                class="nav-link {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'active' : '' }}">
                <i class="fas fa-warehouse"></i>
                <p>
                    Buyer Manage
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('buyer-manage') }}" class="nav-link">Buyer Management</a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('department-manage') }}" class="nav-link">Departments</a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('buyer_contact-manage') }}" class="nav-link">Contacts</a>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#"
                class="nav-link {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'active' : '' }}">
                <i class="fas fa-recycle"></i>
                <p>
                    Vendor Manage
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vendor-manage') }}" class="nav-link">Vendor Management</a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('manufacturer-manage') }}" class="nav-link">Manufacturers</a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vendor_contact-manage') }}" class="nav-link">Contacts</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#"
                class="nav-link {{ Request::is('permission*') || Request::is('role*') || Request::is('user*') ? 'active' : '' }}">
                <i class="fas fa-circle"></i>
                <p>
                    Critical  Management
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('add-critical-path') }}" class="nav-link">Add New</a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('critical-path') }}" class="nav-link">Critical List</a>
                </li>
            </ul>
        </li>
    </ul>
    {{--    @can('card.main') --}}

    {{--    @endcan --}}
</nav>
