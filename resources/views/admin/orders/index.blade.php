<x-admin-layout>

    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Orders</h1>
            <p class="page-subtitle">All customer orders, online and in-store.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Today's Orders</span><span class="kpi-value">128</span><span
                    class="kpi-meta text-success">+8.2% vs yesterday</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Processing</span><span class="kpi-value">14</span><span
                    class="kpi-meta">Being prepared</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Pending</span><span class="kpi-value">6</span><span
                    class="kpi-meta">Awaiting confirmation</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Cancelled</span><span class="kpi-value">2</span><span
                    class="kpi-meta">This week</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search orders…"></div>
                <select class="toolbar-select">
                    <option>All Status</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-cart-plus"></i>New Order</button>
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
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8842</td>
                        <td>Fatema Begum</td>
                        <td>2</td>
                        <td>৳ 560</td>
                        <td>Cash</td>
                        <td><span class="badge status-badge status-pending">Pending</span></td>
                        <td>19 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8843</td>
                        <td>Shakil Ahmed</td>
                        <td>6</td>
                        <td>৳ 2,890</td>
                        <td>Card</td>
                        <td><span class="badge status-badge status-processing">Processing</span></td>
                        <td>18 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8844</td>
                        <td>Nusrat Jahan</td>
                        <td>1</td>
                        <td>৳ 180</td>
                        <td>Nagad</td>
                        <td><span class="badge status-badge status-cancelled">Cancelled</span></td>
                        <td>18 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8845</td>
                        <td>Kamal Hossain</td>
                        <td>3</td>
                        <td>৳ 940</td>
                        <td>bKash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td>17 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8846</td>
                        <td>Sadia Islam</td>
                        <td>5</td>
                        <td>৳ 1,675</td>
                        <td>Cash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td>17 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8847</td>
                        <td>Tanvir Alam</td>
                        <td>2</td>
                        <td>৳ 420</td>
                        <td>bKash</td>
                        <td><span class="badge status-badge status-processing">Processing</span></td>
                        <td>16 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
