<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav ms-2">
                    <div class="to-webview d-grid mt-4 ms-2 me-3">
                        <a href="<?= base_url; ?>" class="btn btn-primary">Go to web</a>
                    </div>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link <?= $data['title'] == "Admin Page" ? "active" : "" ?>" href="<?= base_url; ?>/admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                        Dashboard
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <div id="layoutSidenav_content">
        <main class="mt-3">
            <div class="container-fluid px-4">