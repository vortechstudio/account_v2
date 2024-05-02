<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-xxl">
        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ Storage::url('logos/logo_small.png') }}" class="w-px-30" alt="">
                </span>
                <span class="d-flex flex-column">
                    <span class="app-brand-text demo menu-text fw-bold mb-1">Vortech Studio</span>
                    <span class="app-brand-text demo menu-text text-info fs-tiny text-end">Account</span>
                </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="ti ti-x ti-sm align-middle"></i>
            </a>
        </div>

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <div class="navbar-nav align-items-center">

            </div>

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <div class="nav-item dropdown-style-switcher dropdown me-3 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                       data-bs-toggle="dropdown">
                        <i class="ti ti-md"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                        <span class="align-middle"><i
                                                class="ti ti-device-desktop me-2"></i>System</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                       data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ Auth::user()->socials()->first()->avatar }}" alt class="h-auto rounded-circle"/>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ Auth::user()->socials()->first()->avatar }}" alt
                                                 class="h-auto rounded-circle"/>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                                        <small class="text-muted">{{ Auth::user()->email }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('auth.logout') }}">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">Déconnexion</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </div>
</nav>
