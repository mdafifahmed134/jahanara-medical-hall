<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Expiring Medicines</h1>
            <p class="page-subtitle">Batches nearing expiry, sorted by urgency.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Expiring in 30 Days</span><span
                    class="kpi-value">32</span><span class="kpi-meta">Across 12 batches</span></div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Critical (Under 10 Days)</span><span
                    class="kpi-value">2</span><span class="kpi-meta">Remove or return now</span></div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Value at Risk</span><span class="kpi-value">৳
                    42,600</span><span class="kpi-meta">Stock cost of expiring batches</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search by medicine or batch…"></div>
                <select class="toolbar-select">
                    <option>All Status</option>
                    <option>Expiring Soon</option>
                    <option>Critical</option>
                    <option>Normal</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-arrow-return-left"></i>Return to Supplier</button>
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
                        <th class="text-end">Action</th>
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
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                    <tr class="row-warning">
                        <td class="fw-semibold">Amoxicillin</td>
                        <td>B0987</td>
                        <td>60</td>
                        <td>05 Sep 2026</td>
                        <td>17 Days</td>
                        <td><span class="badge status-badge status-expiring">Expiring Soon</span></td>
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                    <tr class="">
                        <td class="fw-semibold">Losectil</td>
                        <td>B1102</td>
                        <td>28</td>
                        <td>02 Nov 2026</td>
                        <td>75 Days</td>
                        <td><span class="badge status-badge status-normal">Normal</span></td>
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                    <tr class="row-critical">
                        <td class="fw-semibold">Insulin Mixtard</td>
                        <td>B0755</td>
                        <td>12</td>
                        <td>27 Aug 2026</td>
                        <td>8 Days</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                    <tr class="">
                        <td class="fw-semibold">Fexo</td>
                        <td>B1211</td>
                        <td>40</td>
                        <td>20 Oct 2026</td>
                        <td>62 Days</td>
                        <td><span class="badge status-badge status-normal">Normal</span></td>
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                    <tr class="row-critical">
                        <td class="fw-semibold">Ceevit</td>
                        <td>B0888</td>
                        <td>15</td>
                        <td>30 Aug 2026</td>
                        <td>11 Days</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-view"><i
                                    class="bi bi-arrow-return-left"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
