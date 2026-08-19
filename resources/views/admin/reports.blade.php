<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Reports</h1>
            <p class="page-subtitle">Performance summaries across sales, stock, and people.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="report-tile"><i class="bi bi-graph-up-arrow"></i><strong>৳ 8,42,650</strong><span>Monthly
                    Revenue</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="report-tile"><i class="bi bi-cart-check"></i><strong>3,842</strong><span>Orders This
                    Month</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="report-tile"><i class="bi bi-people"></i><strong>3,214</strong><span>Total Customers</span>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="report-tile"><i class="bi bi-capsule"></i><strong>2,458</strong><span>Medicines Sold</span>
            </div>
        </div>
    </section>

    <section class="row g-3">
        <div class="col-lg-8">
            <div class="panel-card h-100">
                <div class="panel-card-head">
                    <h2 class="panel-title">Revenue Trend</h2>
                    <div class="btn-group chart-range-group" role="group">
                        <button type="button" class="btn range-btn" data-range="weekly">Weekly</button>
                        <button type="button" class="btn range-btn active" data-range="monthly">Monthly</button>
                        <button type="button" class="btn range-btn" data-range="yearly">Yearly</button>
                    </div>
                </div>
                <div class="chart-wrap"><canvas id="salesChart"></canvas></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel-card h-100">
                <div class="panel-card-head">
                    <h2 class="panel-title">Top Categories</h2>
                </div>
                <div class="inventory-list">
                    <div class="inv-item">
                        <div class="inv-item-top"><span>Painkiller</span><strong>32%</strong></div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:32%"></div>
                        </div>
                    </div>
                    <div class="inv-item">
                        <div class="inv-item-top"><span>Antibiotic</span><strong>24%</strong></div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:24%"></div>
                        </div>
                    </div>
                    <div class="inv-item">
                        <div class="inv-item-top"><span>Gastric</span><strong>18%</strong></div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width:18%"></div>
                        </div>
                    </div>
                    <div class="inv-item">
                        <div class="inv-item-top"><span>Vitamins</span><strong>14%</strong></div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width:14%"></div>
                        </div>
                    </div>
                    <div class="inv-item">
                        <div class="inv-item-top"><span>Other</span><strong>12%</strong></div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width:12%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-card mt-3">
        <div class="page-toolbar">
            <div>
                <h2 class="panel-title mb-0">Downloadable Reports</h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Report</th>
                        <th>Period</th>
                        <th>Generated</th>
                        <th class="text-end">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">Sales Summary</td>
                        <td>Aug 2026</td>
                        <td>19 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-download"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Inventory Valuation</td>
                        <td>Aug 2026</td>
                        <td>19 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-download"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Expiry Forecast</td>
                        <td>Q3 2026</td>
                        <td>15 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-download"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Supplier Performance</td>
                        <td>Jul 2026</td>
                        <td>02 Aug 2026</td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-download"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</x-admin-layout>
