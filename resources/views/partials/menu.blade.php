<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
{{--    <a href="#" class="brand-link">--}}
{{--        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>--}}
{{--        <span class="brand-text font-weight-light">{{env('APP_NAME') }}</span>        --}}
{{--    </a>--}}

<!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{\App\Models\AppSeeting::where('name','logo')->first()->photo != null ? \App\Models\AppSeeting::where('name','logo')->first()->photo->getUrl() : asset('photos/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{\App\Models\AppSeeting::where('name','app_name')->first()->value('value') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->isPhoto() ? auth()->user()->staff->photo->url : asset('photos/avatars/default.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('document_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.documents.index").'?active=1' }}" class="nav-link {{ request()->is("admin/documents") || request()->is("admin/documents/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-file-alt">

                            </i>
                            <p>
                                {{ trans('cruds.document.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('comment_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.comments.index") }}" class="nav-link {{ request()->is("admin/comments") || request()->is("admin/comments/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-comment-alt">

                            </i>
                            <p>
                                {{ trans('cruds.comment.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/user-infos*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_info_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.user-infos.index") }}" class="nav-link {{ request()->is("admin/user-infos") || request()->is("admin/user-infos/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-clock">

                                        </i>
                                        <p>
                                            {{ trans('cruds.userInfo.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_log_access')
                                <li class="nav-item">
                                    <a href="user-activity" class="nav-link {{ request()->is("admin/user-activity") || request()->is("admin/user-activity/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file">
                                        </i>
                                        <p>
                                            User Logs
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/departments*") ? "menu-open" : "" }} {{ request()->is("admin/titles*") ? "menu-open" : "" }} {{ request()->is("admin/positions*") ? "menu-open" : "" }} {{ request()->is("admin/categories*") ? "menu-open" : "" }} {{ request()->is("admin/organisations*") ? "menu-open" : "" }} {{ request()->is("admin/document-types*") ? "menu-open" : "" }} {{ request()->is("admin/staff*") ? "menu-open" : "" }} {{ request()->is("admin/app-seetings*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.setting.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('department_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.departments.index") }}" class="nav-link {{ request()->is("admin/departments") || request()->is("admin/departments/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-hotel">

                                        </i>
                                        <p>
                                            {{ trans('cruds.department.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('title_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.titles.index") }}" class="nav-link {{ request()->is("admin/titles") || request()->is("admin/titles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-address-book">

                                        </i>
                                        <p>
                                            {{ trans('cruds.title.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('position_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.positions.index") }}" class="nav-link {{ request()->is("admin/positions") || request()->is("admin/positions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-address-card">

                                        </i>
                                        <p>
                                            {{ trans('cruds.position.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-boxes">

                                        </i>
                                        <p>
                                            {{ trans('cruds.category.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('organisation_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.organisations.index") }}" class="nav-link {{ request()->is("admin/organisations") || request()->is("admin/organisations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-hospital">

                                        </i>
                                        <p>
                                            {{ trans('cruds.organisation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('document_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.document-types.index") }}" class="nav-link {{ request()->is("admin/document-types") || request()->is("admin/document-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-signature">

                                        </i>
                                        <p>
                                            {{ trans('cruds.documentType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('staff_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.staff.index") }}" class="nav-link {{ request()->is("admin/staff") || request()->is("admin/staff/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-md">

                                        </i>
                                        <p>
                                            {{ trans('cruds.staff.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('app_seeting_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.app-seetings.index") }}" class="nav-link {{ request()->is("admin/app-seetings") || request()->is("admin/app-seetings/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.appSeeting.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('asset_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/asset-categories*") ? "menu-open" : "" }} {{ request()->is("admin/asset-locations*") ? "menu-open" : "" }} {{ request()->is("admin/asset-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/assets*") ? "menu-open" : "" }} {{ request()->is("admin/assets-histories*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-book">

                            </i>
                            <p>
                                {{ trans('cruds.assetManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('asset_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-categories.index") }}" class="nav-link {{ request()->is("admin/asset-categories") || request()->is("admin/asset-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_location_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-locations.index") }}" class="nav-link {{ request()->is("admin/asset-locations") || request()->is("admin/asset-locations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marker">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetLocation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-statuses.index") }}" class="nav-link {{ request()->is("admin/asset-statuses") || request()->is("admin/asset-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-server">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.assets.index") }}" class="nav-link {{ request()->is("admin/assets") || request()->is("admin/assets/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-book">

                                        </i>
                                        <p>
                                            {{ trans('cruds.asset.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('assets_history_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.assets-histories.index") }}" class="nav-link {{ request()->is("admin/assets-histories") || request()->is("admin/assets-histories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-th-list">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetsHistory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('expense_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/expense-categories*") ? "menu-open" : "" }} {{ request()->is("admin/income-categories*") ? "menu-open" : "" }} {{ request()->is("admin/expenses*") ? "menu-open" : "" }} {{ request()->is("admin/incomes*") ? "menu-open" : "" }} {{ request()->is("admin/expense-reports*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-money-bill">

                            </i>
                            <p>
                                {{ trans('cruds.expenseManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('expense_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expense-categories.index") }}" class="nav-link {{ request()->is("admin/expense-categories") || request()->is("admin/expense-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-list">

                                        </i>
                                        <p>
                                            {{ trans('cruds.expenseCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('income_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.income-categories.index") }}" class="nav-link {{ request()->is("admin/income-categories") || request()->is("admin/income-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-list">

                                        </i>
                                        <p>
                                            {{ trans('cruds.incomeCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('expense_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expenses.index") }}" class="nav-link {{ request()->is("admin/expenses") || request()->is("admin/expenses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-arrow-circle-right">

                                        </i>
                                        <p>
                                            {{ trans('cruds.expense.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('income_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.incomes.index") }}" class="nav-link {{ request()->is("admin/incomes") || request()->is("admin/incomes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-arrow-circle-right">

                                        </i>
                                        <p>
                                            {{ trans('cruds.income.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('expense_report_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.expense-reports.index") }}" class="nav-link {{ request()->is("admin/expense-reports") || request()->is("admin/expense-reports/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-chart-line">

                                        </i>
                                        <p>
                                            {{ trans('cruds.expenseReport.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-bell">

                            </i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @php($unread = \App\Models\QaTopic::unreadCount())
                    <li class="nav-item">
                        <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }} nav-link">
                            <i class="fa-fw fa fa-envelope nav-icon">

                            </i>
                            <p>{{ trans('global.messages') }}</p>
                            @if($unread > 0)
                                <strong>( {{ $unread }} )</strong>
                            @endif

                        </a>
                    </li>
                    @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    <p>
                                        {{ trans('global.change_password') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
