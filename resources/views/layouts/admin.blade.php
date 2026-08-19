<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pharmacy | Admin Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ============ SIDEBAR ============ -->
    <aside class="sidebar" id="sidebar">
        <a href="{{ route('dashboard') }}">
            <div class="sidebar-brand">
                <div class="brand-mark"><i class="bi bi-capsule-pill"></i></div>
                <div class="brand-text">
                    <span class="brand-name">MediCare</span>
                    <span class="brand-sub">Pharmacy</span>
                </div>
            </div>
        </a>
        <nav class="sidebar-nav">
            <p class="nav-label">Overview</p>
            <ul class="nav-list">
                <li><a href="{{ route('dashboard') }}" class="nav-link active"><i
                            class="bi bi-grid-1x2"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('reports.index') }}" class="nav-link"><i
                            class="bi bi-bar-chart-line"></i><span>Reports</span></a>
                </li>
            </ul>
            <p class="nav-label">Catalog</p>
            <ul class="nav-list">
                <li><a href="medicines.html" class="nav-link"><i class="bi bi-capsule"></i><span>Medicines</span></a>
                </li>
                <li><a href="categories.html" class="nav-link"><i class="bi bi-tags"></i><span>Categories</span></a>
                </li>
                <li><a href="brands.html" class="nav-link"><i class="bi bi-award"></i><span>Brands</span></a></li>
            </ul>
            <p class="nav-label">Stock</p>
            <ul class="nav-list">
                <li><a href="inventory.html" class="nav-link"><i class="bi bi-box-seam"></i><span>Inventory</span></a>
                </li>
                <li><a href="low-stock.html" class="nav-link"><i class="bi bi-exclamation-triangle"></i><span>Low
                            Stock</span><span class="nav-badge ">18</span></a></li>
                <li><a href="expiring-medicines.html" class="nav-link"><i
                            class="bi bi-hourglass-split"></i><span>Expiring Medicines</span></a></li>
            </ul>
            <p class="nav-label">Transactions</p>
            <ul class="nav-list">
                <li><a href="sales.html" class="nav-link"><i class="bi bi-cash-coin"></i><span>Sales</span></a></li>
                <li><a href="purchases.html" class="nav-link"><i class="bi bi-bag-check"></i><span>Purchases</span></a>
                </li>
                <li><a href="orders.html" class="nav-link"><i class="bi bi-cart3"></i><span>Orders</span></a></li>
                <li><a href="prescriptions.html" class="nav-link"><i
                            class="bi bi-file-earmark-medical"></i><span>Prescriptions</span><span
                            class="nav-badge nav-badge-blue">12</span></a></li>
            </ul>
            <p class="nav-label">People</p>
            <ul class="nav-list">
                <li><a href="suppliers.html" class="nav-link"><i class="bi bi-truck"></i><span>Suppliers</span></a></li>
                <li><a href="customers.html" class="nav-link"><i class="bi bi-people"></i><span>Customers</span></a>
                </li>
                <li><a href="staff.html" class="nav-link"><i class="bi bi-person-badge"></i><span>Staff</span></a></li>
            </ul>
            <p class="nav-label">System</p>
            <ul class="nav-list">
                <li><a href="settings.html" class="nav-link"><i class="bi bi-gear"></i><span>Settings</span></a></li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <div class="storage-tip">
                <i class="bi bi-shield-check"></i>
                <div>
                    <strong>License Active</strong>
                    <span>Renews 04 Jan 2027</span>
                </div>
            </div>
        </div>
    </aside>
    <!-- ============ MAIN WRAPPER ============ -->
    <div class="main-wrapper" id="mainWrapper">

        <!-- ============ TOP NAVBAR ============ -->
        <header class="topbar">
            <div class="topbar-left">
                <button class="icon-btn" id="sidebarToggle" aria-label="Toggle sidebar">
                    <i class="bi bi-list"></i>
                </button>
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" id="globalSearch" placeholder="Search medicines, orders, customers…">
                </div>
            </div>

            <div class="topbar-right">
                <button class="icon-btn d-none d-md-inline-flex" id="darkModeToggle" aria-label="Toggle dark mode">
                    <i class="bi bi-moon-stars"></i>
                </button>

                <button class="btn btn-quick-add d-none d-md-inline-flex">
                    <i class="bi bi-plus-lg"></i><span>Quick Add</span>
                </button>

                <div class="dropdown">
                    <button class="icon-btn position-relative" id="msgDropdownBtn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-chat-dots"></i>
                        <span class="dot-badge">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end panel-dropdown">
                        <div class="panel-header">Messages</div>
                        <a class="panel-item" href="#"><i class="bi bi-person-circle text-primary-brand"></i>
                            <div><strong>Dr. Farhan</strong><span>Purchase order needs approval</span></div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-person-circle text-secondary-brand"></i>
                            <div><strong>Nusrat, Supplier</strong><span>Shipment arriving tomorrow</span></div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-person-circle text-primary-brand"></i>
                            <div><strong>Rafiq, Counter 2</strong><span>Register closed for the day</span></div>
                        </a>
                        <a class="panel-footer" href="#">View all messages</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="icon-btn position-relative" id="notifDropdownBtn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="dot-badge">4</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end panel-dropdown">
                        <div class="panel-header">Notifications</div>
                        <a class="panel-item" href="#"><i class="bi bi-exclamation-triangle text-danger"></i>
                            <div><strong>5 medicines below stock level</strong><span>Review low stock list</span></div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-hourglass-split text-warning"></i>
                            <div><strong>3 medicines expire within 30 days</strong><span>Check expiring batches</span>
                            </div>
                        </a>
                        <a class="panel-item" href="#"><i
                                class="bi bi-file-earmark-medical text-primary-brand"></i>
                            <div><strong>2 prescriptions awaiting approval</strong><span>Pharmacist review needed</span>
                            </div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-bag-check text-success"></i>
                            <div><strong>7 new online orders received</strong><span>Ready for processing</span></div>
                        </a>
                        <a class="panel-footer" href="#">View all notifications</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="user-chip" id="userDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="user-avatar">DA</span>
                        <span class="user-info d-none d-lg-flex">
                            <strong>Dr. Admin</strong>
                            <small>Pharmacy Administrator</small>
                        </span>
                        <i class="bi bi-chevron-down d-none d-lg-inline"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end panel-dropdown user-menu">
                        <a class="panel-item" href="#"><i class="bi bi-person"></i>
                            <div><strong>My Profile</strong></div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-gear"></i>
                            <div><strong>Account Settings</strong></div>
                        </a>
                        <a class="panel-item" href="#"><i class="bi bi-life-preserver"></i>
                            <div><strong>Help Center</strong></div>
                        </a>
                        <hr class="panel-divider">
                        <div class="panel-item text-danger" onclick="event.preventDefault();"><i
                                class="bi bi-box-arrow-right"></i>
                            <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <strong>
                                        <a href="{{ route('logout') }}" class="text-danger"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            Sign Out
                                        </a>
                                    </strong>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ============ PAGE CONTENT ============ -->
        <main class="page-content">
            {{ $slot }}

        </main>

        <footer class="page-footer">
            <span>© 2026 MediCare Pharmacy. All rights reserved.</span>
            <span>Admin Dashboard v2.4.0</span>
        </footer>
    </div>

    <!-- Restock Modal -->
    <div class="modal fade" id="restockModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-box-seam me-2"></i>Restock Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">You're about to create a restock request for:</p>
                    <div class="restock-medicine-name" id="restockMedicineName">—</div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Quantity to Order</label>
                        <input type="number" class="form-control" id="restockQty" value="50" min="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-quick-add" id="confirmRestockBtn">Confirm Restock</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="appToast" class="toast align-items-center border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body" id="appToastBody">Action completed.</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
