<x-admin-layout>

            <!-- Welcome Section -->
            <section class="welcome-row">
                <div>
                    <h1 class="welcome-title">Good Morning, Admin <span class="wave">👋</span></h1>
                    <p class="welcome-sub">Manage your pharmacy efficiently from one place.</p>
                </div>
                <div class="welcome-date" id="todayDate">
                    <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
                </div>
            </section>

            <!-- Statistics Cards -->
            <section class="row g-3 stat-row">
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-icon stat-icon-green"><i class="bi bi-cash-stack"></i></div>
                        <div class="stat-body">
                            <span class="stat-title">Today's Sales</span>
                            <span class="stat-value">৳ 48,500</span>
                            <span class="stat-growth up"><i class="bi bi-arrow-up-short"></i>12.5%</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-icon stat-icon-blue"><i class="bi bi-cart-check"></i></div>
                        <div class="stat-body">
                            <span class="stat-title">Today's Orders</span>
                            <span class="stat-value">128</span>
                            <span class="stat-growth up"><i class="bi bi-arrow-up-short"></i>8.2%</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-icon stat-icon-teal"><i class="bi bi-capsule"></i></div>
                        <div class="stat-body">
                            <span class="stat-title">Total Medicines</span>
                            <span class="stat-value">2,458</span>
                            <span class="stat-note">Available in inventory</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card stat-card-warning">
                        <div class="stat-icon stat-icon-amber"><i class="bi bi-exclamation-triangle"></i></div>
                        <div class="stat-body">
                            <span class="stat-title">Low Stock</span>
                            <span class="stat-value">18</span>
                            <span class="stat-note text-warning">Needs restocking</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sales Overview + Inventory Overview -->
            <section class="row g-3 mt-1">
                <div class="col-lg-8">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <div>
                                <h2 class="panel-title">Sales Overview</h2>
                                <span class="panel-revenue">৳ 8,42,650 <small class="text-success"><i
                                            class="bi bi-arrow-up-short"></i>15.3% vs last period</small></span>
                            </div>
                            <div class="btn-group chart-range-group" role="group" aria-label="Chart range">
                                <button type="button" class="btn range-btn" data-range="weekly">Weekly</button>
                                <button type="button" class="btn range-btn active"
                                    data-range="monthly">Monthly</button>
                                <button type="button" class="btn range-btn" data-range="yearly">Yearly</button>
                            </div>
                        </div>
                        <div class="chart-wrap">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Inventory Overview</h2>
                        </div>
                        <div class="inventory-list">
                            <div class="inv-item">
                                <div class="inv-item-top">
                                    <span><i class="bi bi-check-circle text-success"></i> In Stock</span>
                                    <strong>2,102</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="inv-item">
                                <div class="inv-item-top">
                                    <span><i class="bi bi-exclamation-circle text-warning"></i> Low Stock</span>
                                    <strong>18</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width:12%"></div>
                                </div>
                            </div>
                            <div class="inv-item">
                                <div class="inv-item-top">
                                    <span><i class="bi bi-x-circle text-danger"></i> Out of Stock</span>
                                    <strong>6</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width:4%"></div>
                                </div>
                            </div>
                            <div class="inv-item">
                                <div class="inv-item-top">
                                    <span><i class="bi bi-hourglass-split text-secondary-brand"></i> Expiring
                                        Soon</span>
                                    <strong>32</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width:18%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Low Stock Table -->
            <section class="row g-3 mt-1">
                <div class="col-12">
                    <div class="panel-card">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Low Stock Medicines</h2>
                            <a href="#" class="panel-link">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table app-table" id="lowStockTable">
                                <thead>
                                    <tr>
                                        <th>Medicine</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Stock</th>
                                        <th>Minimum</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">Napa Extra</td>
                                        <td>Painkiller</td>
                                        <td>Beximco</td>
                                        <td>14</td>
                                        <td>30</td>
                                        <td><span class="badge status-badge status-low">Low</span></td>
                                        <td class="text-end"><button class="btn btn-restock"
                                                data-medicine="Napa Extra">Restock</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Seclo</td>
                                        <td>Gastric</td>
                                        <td>Square Pharma</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td><span class="badge status-badge status-critical">Critical</span></td>
                                        <td class="text-end"><button class="btn btn-restock"
                                                data-medicine="Seclo">Restock</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Histacin</td>
                                        <td>Antihistamine</td>
                                        <td>ACI Limited</td>
                                        <td>22</td>
                                        <td>25</td>
                                        <td><span class="badge status-badge status-normal">Normal</span></td>
                                        <td class="text-end"><button class="btn btn-restock"
                                                data-medicine="Histacin">Restock</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Ace Plus</td>
                                        <td>Painkiller</td>
                                        <td>Incepta</td>
                                        <td>9</td>
                                        <td>20</td>
                                        <td><span class="badge status-badge status-low">Low</span></td>
                                        <td class="text-end"><button class="btn btn-restock"
                                                data-medicine="Ace Plus">Restock</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Maxpro</td>
                                        <td>Gastric</td>
                                        <td>Renata</td>
                                        <td>3</td>
                                        <td>20</td>
                                        <td><span class="badge status-badge status-critical">Critical</span></td>
                                        <td class="text-end"><button class="btn btn-restock"
                                                data-medicine="Maxpro">Restock</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Expiring Medicines -->
            <section class="row g-3 mt-1">
                <div class="col-12">
                    <div class="panel-card">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Expiring Medicines</h2>
                            <a href="#" class="panel-link">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table app-table">
                                <thead>
                                    <tr>
                                        <th>Medicine</th>
                                        <th>Batch</th>
                                        <th>Quantity</th>
                                        <th>Expiry Date</th>
                                        <th>Remaining Days</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row-warning">
                                        <td class="fw-semibold">Paracetamol</td>
                                        <td>B1024</td>
                                        <td>45</td>
                                        <td>12 Sep 2026</td>
                                        <td>24 Days</td>
                                        <td><span class="badge status-badge status-expiring">Expiring Soon</span></td>
                                    </tr>
                                    <tr class="row-warning">
                                        <td class="fw-semibold">Amoxicillin</td>
                                        <td>B0987</td>
                                        <td>60</td>
                                        <td>05 Sep 2026</td>
                                        <td>17 Days</td>
                                        <td><span class="badge status-badge status-expiring">Expiring Soon</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Losectil</td>
                                        <td>B1102</td>
                                        <td>28</td>
                                        <td>02 Nov 2026</td>
                                        <td>75 Days</td>
                                        <td><span class="badge status-badge status-normal">Normal</span></td>
                                    </tr>
                                    <tr class="row-critical">
                                        <td class="fw-semibold">Insulin Mixtard</td>
                                        <td>B0755</td>
                                        <td>12</td>
                                        <td>27 Aug 2026</td>
                                        <td>8 Days</td>
                                        <td><span class="badge status-badge status-critical">Critical</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Orders + Prescriptions -->
            <section class="row g-3 mt-1">
                <div class="col-lg-8">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Recent Orders</h2>
                            <a href="#" class="panel-link">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table app-table">
                                <thead>
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Customer</th>
                                        <th>Items</th>
                                        <th>Amount</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="text-end">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">INV-8841</td>
                                        <td>Rahim Uddin</td>
                                        <td>4</td>
                                        <td>৳ 1,240</td>
                                        <td>bKash</td>
                                        <td><span class="badge status-badge status-completed">Completed</span></td>
                                        <td>19 Aug 2026</td>
                                        <td class="text-end"><button class="btn btn-view"><i
                                                    class="bi bi-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">INV-8842</td>
                                        <td>Fatema Begum</td>
                                        <td>2</td>
                                        <td>৳ 560</td>
                                        <td>Cash</td>
                                        <td><span class="badge status-badge status-pending">Pending</span></td>
                                        <td>19 Aug 2026</td>
                                        <td class="text-end"><button class="btn btn-view"><i
                                                    class="bi bi-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">INV-8843</td>
                                        <td>Shakil Ahmed</td>
                                        <td>6</td>
                                        <td>৳ 2,890</td>
                                        <td>Card</td>
                                        <td><span class="badge status-badge status-processing">Processing</span></td>
                                        <td>18 Aug 2026</td>
                                        <td class="text-end"><button class="btn btn-view"><i
                                                    class="bi bi-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">INV-8844</td>
                                        <td>Nusrat Jahan</td>
                                        <td>1</td>
                                        <td>৳ 180</td>
                                        <td>Nagad</td>
                                        <td><span class="badge status-badge status-cancelled">Cancelled</span></td>
                                        <td>18 Aug 2026</td>
                                        <td class="text-end"><button class="btn btn-view"><i
                                                    class="bi bi-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">INV-8845</td>
                                        <td>Kamal Hossain</td>
                                        <td>3</td>
                                        <td>৳ 940</td>
                                        <td>bKash</td>
                                        <td><span class="badge status-badge status-completed">Completed</span></td>
                                        <td>17 Aug 2026</td>
                                        <td class="text-end"><button class="btn btn-view"><i
                                                    class="bi bi-eye"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Prescriptions</h2>
                        </div>
                        <div class="rx-grid">
                            <div class="rx-item">
                                <span class="rx-value text-warning">12</span>
                                <span class="rx-label">Pending</span>
                            </div>
                            <div class="rx-item">
                                <span class="rx-value text-success">86</span>
                                <span class="rx-label">Approved</span>
                            </div>
                            <div class="rx-item">
                                <span class="rx-value text-danger">4</span>
                                <span class="rx-label">Rejected</span>
                            </div>
                            <div class="rx-item">
                                <span class="rx-value text-primary-brand">19</span>
                                <span class="rx-label">Today's Upload</span>
                            </div>
                        </div>
                        <button class="btn btn-outline-view-all w-100 mt-2">View All Prescriptions</button>
                    </div>
                </div>
            </section>

            <!-- Quick Actions + Notifications -->
            <section class="row g-3 mt-1 mb-4">
                <div class="col-lg-7">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Quick Actions</h2>
                        </div>
                        <div class="quick-actions-grid">
                            <button class="quick-action-btn">
                                <i class="bi bi-capsule"></i><span>Add Medicine</span>
                            </button>
                            <button class="quick-action-btn">
                                <i class="bi bi-cash-coin"></i><span>New Sale</span>
                            </button>
                            <button class="quick-action-btn">
                                <i class="bi bi-bag-plus"></i><span>Purchase Medicine</span>
                            </button>
                            <button class="quick-action-btn">
                                <i class="bi bi-person-plus"></i><span>Add Customer</span>
                            </button>
                            <button class="quick-action-btn">
                                <i class="bi bi-upload"></i><span>Upload Prescription</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="panel-card h-100">
                        <div class="panel-card-head">
                            <h2 class="panel-title">Notifications</h2>
                        </div>
                        <ul class="notif-list">
                            <li>
                                <span class="notif-icon notif-danger"><i
                                        class="bi bi-exclamation-triangle"></i></span>
                                <span>5 medicines are below stock level</span>
                            </li>
                            <li>
                                <span class="notif-icon notif-warning"><i class="bi bi-hourglass-split"></i></span>
                                <span>3 medicines expire within 30 days</span>
                            </li>
                            <li>
                                <span class="notif-icon notif-info"><i class="bi bi-file-earmark-medical"></i></span>
                                <span>2 prescriptions awaiting approval</span>
                            </li>
                            <li>
                                <span class="notif-icon notif-success"><i class="bi bi-bag-check"></i></span>
                                <span>7 new online orders received</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
</x-admin-layout>
