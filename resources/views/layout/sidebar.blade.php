<!--begin::Header-->
<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
        <!--begin::Sidebar toggle-->
        <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--begin::Logo image-->
            <a href="../../demo38/dist/index.html">
                <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/demo38-small.svg') }}"
                    class="h-30px" />
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Sidebar toggle-->
        <!--begin::Navbar-->
        <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
            <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                <!--begin::Search-->

                <!--end::Search-->
            </div>
            <!--begin::Notifications-->

            <!--end::Notifications-->
            <!--begin::Quick links-->

            <!--end::Quick links-->
            <!--begin::Chat-->

            <!--end::Chat-->
            <!--begin::User menu-->
            <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <img src="{{ asset('metronic/dist/assets/media/avatars/300-2.jpg') }}" alt="user" />
                </div>
                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="{{ asset('metronic/dist/assets/media/avatars/300-2.jpg') }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">{{ auth()->user()->nama }}
                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"></span>
                                </div>
                                {{-- <a href="#"
                                    class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->nama_role }}</a> --}}
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="../../demo38/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    {{-- <div class="menu-item px-5 my-1">
                        <a href="../../demo38/dist/account/settings.html" class="menu-link px-5">Account
                            Settings</a>
                    </div> --}}
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="{{ route('auth.logout') }}" class="menu-link px-5">Sign Out</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::User menu-->
        </div>
        <!--end::Navbar-->
        <!--begin::Separator-->
        <div class="app-navbar-separator separator d-none d-lg-flex"></div>
        <!--end::Separator-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
        data-kt-drawer-activate="{: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
            <!--begin::Logo-->
            <a href="../../demo38/dist/index.html" class="app-sidebar-logo">
                <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/demo38.svg') }}"
                    class="h-25px d-none d-sm-inline app-sidebar-logo- theme-light-show" />
                <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/demo38-dark.svg') }}"
                    class="h-20px h-lg-25px theme-dark-show" />
            </a>
            <!--end::Logo-->
            <!--begin::Sidebar toggle-->
            <div id="kt_app_sidebar_toggle"
                class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate"
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="app-sidebar-minimize">
                <!--begin::Svg Icon | path: icons/duotune/text/txt011.svg-->
                <span class="svg-icon svg-icon-4 rotate-180">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="14" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 0)"
                            fill="currentColor" />
                        <rect width="24" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 9)"
                            fill="currentColor" />
                        <rect width="18" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 18)"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Sidebar toggle-->
        </div>
        <!--begin::Navs-->
        <div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
            <div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2"
                data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs"
                data-kt-scroll-offset="5px">

                <!--begin::Sidebar menu-->
                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                    class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
                    <!--begin::Heading-->
                    <div class="menu-item mb-2">
                        <div class="menu-heading text-uppercase fs-7 fw-bold">Menu</div>
                        <!--begin::Separator-->
                        <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->
                    </div>
                    {{-- @dd($getmenu) --}}
                    @foreach ($getmenu as $menu)
                        @if ($menu->id_parent == null && $menu->single == true)
                            <!--begin::Menu Item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link" href="{{ url($menu->url) }}">
                                    <!--begin::Icon-->
                                    <span class="menu-icon">
                                        <i class="{{ $menu->icon }}"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="menu-title">{{ $menu->nama_menu }}</span>
                                    <!--end::Title-->
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu Item-->
                        @endif

                        <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                            @if ($menu->id_parent == null && $menu->single == false)
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="{{ $menu->icon }}"></i>
                                    </span>
                                    <span class="menu-title">{{ $menu->nama_menu }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                            @endif

                            <!-- Begin Sub Menu -->
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    @foreach ($getmenu as $submenu)
                                        @if ($submenu->id_parent == $menu->id && $submenu->id_parent != null)
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ url($submenu->url) }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ $submenu->nama_menu }}</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        @endif
                                    @endforeach

                                    <!--end:Menu item-->
                                </div>
                                <!--End Sub Menu (Children)-->
                            </div>
                        </div>
                    @endforeach
                    {{-- @dd($getmenu); --}}

                    <!--end::Heading-->
                    <!--end::Sidebar menu-->
                </div>
            </div>
            <!--end::Navs-->
        </div>
        <!--end::Sidebar-->

    </div>
    <!--end::Wrapper-->
</div>
