
<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="https://dashui.codescandy.com/dashuipro/index.html">
            <img src="https://dashui.codescandy.com/dashuipro/assets/images/brand/logo/logo-2.svg" alt="dash ui - bootstrap 5 admin dashboard template">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!">
                    <i data-feather="home" class="nav-icon me-2 icon-xxs" ></i>
                     Dashboard
                </a>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Apps</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow " href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navecommerce" aria-expanded="false"
                    aria-controls="navecommerce">
                    <i data-feather="shopping-cart" class="nav-icon me-2 icon-xxs" >
                    </i> Barang
                </a>

                <div id="navecommerce" class="collapse  show "
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link has-arrow "
                                href="ecommerce-products.html">

                                Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow "
                                href="ecommerce-products-details.html">

                                Data Produk
                            </a>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navKanban" aria-expanded="false"
                    aria-controls="navKanban">
                    <i data-feather="layout" class="nav-icon me-2 icon-xxs" >
                    </i> Data Pemesanan
                </a>

                <div id="navKanban" class="collapse "
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link has-arrow "
                                href="task-kanban-grid.html">

                                Grid
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow "
                                href="task-kanban-list.html">

                                List
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
