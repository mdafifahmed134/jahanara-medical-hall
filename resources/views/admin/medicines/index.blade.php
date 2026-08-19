<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Medicines</h1>
            <p class="page-subtitle">Browse, add, and manage every medicine in your catalog.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Total Medicines</span><span class="kpi-value">2,458</span><span
                    class="kpi-meta">Across 32 categories</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">In Stock</span><span class="kpi-value">2,102</span><span
                    class="kpi-meta">85% of catalog</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Low / Critical</span><span class="kpi-value">18</span><span
                    class="kpi-meta">Needs restocking</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Avg. Unit Price</span><span class="kpi-value">৳
                    12.40</span><span class="kpi-meta">Across all forms</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search medicine name or code…"></div>
                <select class="toolbar-select">
                    <option>All Categories</option>
                    <option>Painkiller</option>
                    <option>Gastric</option>
                    <option>Antibiotic</option>
                    <option>Diabetes</option>
                </select>
                <select class="toolbar-select">
                    <option>All Brands</option>
                    <option>Beximco</option>
                    <option>Square Pharma</option>
                    <option>Incepta</option>
                    <option>Renata</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-plus-lg"></i>Add Medicine</button>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Medicine</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Form</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">Napa Extra</td>
                        <td>MED-1001</td>
                        <td>Painkiller</td>
                        <td>Beximco</td>
                        <td>500mg Tablet</td>
                        <td>৳ 1.50</td>
                        <td>1,240</td>
                        <td><span class="badge status-badge status-normal">In Stock</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Seclo</td>
                        <td>MED-1002</td>
                        <td>Gastric</td>
                        <td>Square Pharma</td>
                        <td>20mg Capsule</td>
                        <td>৳ 6.00</td>
                        <td>5</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Histacin</td>
                        <td>MED-1003</td>
                        <td>Antihistamine</td>
                        <td>ACI Limited</td>
                        <td>10mg Tablet</td>
                        <td>৳ 1.20</td>
                        <td>22</td>
                        <td><span class="badge status-badge status-low">Low</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Ace Plus</td>
                        <td>MED-1004</td>
                        <td>Painkiller</td>
                        <td>Incepta</td>
                        <td>500mg+65mg</td>
                        <td>৳ 1.80</td>
                        <td>9</td>
                        <td><span class="badge status-badge status-low">Low</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Maxpro</td>
                        <td>MED-1005</td>
                        <td>Gastric</td>
                        <td>Renata</td>
                        <td>20mg Capsule</td>
                        <td>৳ 7.50</td>
                        <td>3</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Amoxicillin</td>
                        <td>MED-1006</td>
                        <td>Antibiotic</td>
                        <td>Square Pharma</td>
                        <td>500mg Capsule</td>
                        <td>৳ 8.00</td>
                        <td>410</td>
                        <td><span class="badge status-badge status-normal">In Stock</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Paracetamol</td>
                        <td>MED-1007</td>
                        <td>Painkiller</td>
                        <td>Beximco</td>
                        <td>500mg Tablet</td>
                        <td>৳ 1.10</td>
                        <td>980</td>
                        <td><span class="badge status-badge status-normal">In Stock</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Losectil</td>
                        <td>MED-1008</td>
                        <td>Gastric</td>
                        <td>Eskayef</td>
                        <td>20mg Capsule</td>
                        <td>৳ 6.50</td>
                        <td>260</td>
                        <td><span class="badge status-badge status-normal">In Stock</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Insulin Mixtard</td>
                        <td>MED-1009</td>
                        <td>Diabetes</td>
                        <td>Novo Nordisk</td>
                        <td>100IU/ml Vial</td>
                        <td>৳ 420.00</td>
                        <td>12</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Fexo</td>
                        <td>MED-1010</td>
                        <td>Antihistamine</td>
                        <td>Square Pharma</td>
                        <td>120mg Tablet</td>
                        <td>৳ 5.50</td>
                        <td>175</td>
                        <td><span class="badge status-badge status-normal">In Stock</span></td>
                        <td class="text-end">
                            <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-view"><i class="bi bi-trash text-danger"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="app-pagination">
            <span>Showing 1–10 of 2,458 medicines</span>
            <nav>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </section>
</x-admin-layout>
