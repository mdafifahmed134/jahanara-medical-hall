<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Sales</h1>
            <p class="page-subtitle">Point-of-sale history and revenue trends.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Today's Sales</span><span class="kpi-value">৳
                    48,500</span><span class="kpi-meta text-success">+12.5% vs yesterday</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">This Month</span><span class="kpi-value">৳
                    8,42,650</span><span class="kpi-meta">Aug 2026</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Transactions Today</span><span
                    class="kpi-value">128</span><span class="kpi-meta">Avg ৳ 379 / order</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Refunds</span><span class="kpi-value">3</span><span
                    class="kpi-meta">৳ 540 total</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="panel-card-head">
            <h2 class="panel-title">Sales Trend</h2>
            <div class="btn-group chart-range-group" role="group">
                <button type="button" class="btn range-btn" data-range="weekly">Weekly</button>
                <button type="button" class="btn range-btn active" data-range="monthly">Monthly</button>
                <button type="button" class="btn range-btn" data-range="yearly">Yearly</button>
            </div>
        </div>
        <div class="chart-wrap"><canvas id="salesChart"></canvas></div>
    </section>

    <section class="panel-card mt-3">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search invoice or customer…"></div>
                <select class="toolbar-select">
                    <option>All Payments</option>
                    <option>Cash</option>
                    <option>Card</option>
                    <option>bKash</option>
                    <option>Nagad</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-cash-coin"></i>New Sale</button>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Invoice ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th class="text-end">Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">INV-8841</td>
                        <td>Rahim Uddin</td>
                        <td>19 Aug 2026</td>
                        <td>4</td>
                        <td>৳ 1,240</td>
                        <td>bKash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8842</td>
                        <td>Fatema Begum</td>
                        <td>19 Aug 2026</td>
                        <td>2</td>
                        <td>৳ 560</td>
                        <td>Cash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8843</td>
                        <td>Shakil Ahmed</td>
                        <td>18 Aug 2026</td>
                        <td>6</td>
                        <td>৳ 2,890</td>
                        <td>Card</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8844</td>
                        <td>Nusrat Jahan</td>
                        <td>18 Aug 2026</td>
                        <td>1</td>
                        <td>৳ 180</td>
                        <td>Nagad</td>
                        <td><span class="badge status-badge status-cancelled">Refunded</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8845</td>
                        <td>Kamal Hossain</td>
                        <td>17 Aug 2026</td>
                        <td>3</td>
                        <td>৳ 940</td>
                        <td>bKash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">INV-8846</td>
                        <td>Sadia Islam</td>
                        <td>17 Aug 2026</td>
                        <td>5</td>
                        <td>৳ 1,675</td>
                        <td>Cash</td>
                        <td><span class="badge status-badge status-completed">Completed</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-receipt"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
