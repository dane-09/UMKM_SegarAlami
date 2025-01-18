<header class="app-header bg-light border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light px-0">
        <div class="container-fluid">
            <!-- Sidebar Toggler for Mobile -->
            <a class="navbar-brand d-block d-xl-none nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>

            <!-- Full-Width Welcome Section -->
            <div class="w-100">
                <div class="card bg-success text-white shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="mb-0">Welcome Back, {{ auth()->user()->name }}!</h4>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
