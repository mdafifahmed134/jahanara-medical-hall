<x-admin-layout>

    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Customers</h1>
            <p class="page-subtitle">Everyone who has bought from your pharmacy.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Total Customers</span><span class="kpi-value">3,214</span><span
                    class="kpi-meta">+48 this month</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Repeat Customers</span><span class="kpi-value">62%</span><span
                    class="kpi-meta">Ordered 2+ times</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Avg. Order Value</span><span class="kpi-value">৳
                    421</span><span class="kpi-meta">Last 30 days</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Loyalty Members</span><span class="kpi-value">890</span><span
                    class="kpi-meta">Enrolled customers</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search customers…"></div>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-person-plus"></i>Add Customer</button>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Orders</th>
                        <th>Lifetime Value</th>
                        <th>Status</th>
                        <th class="text-end">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">RU</span>
                                <div><strong>Rahim Uddin</strong><small>01711-223344</small></div>
                            </div>
                        </td>
                        <td>42 orders</td>
                        <td>৳ 18,600 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">FB</span>
                                <div><strong>Fatema Begum</strong><small>01911-556677</small></div>
                            </div>
                        </td>
                        <td>28 orders</td>
                        <td>৳ 11,200 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">SA</span>
                                <div><strong>Shakil Ahmed</strong><small>01611-889900</small></div>
                            </div>
                        </td>
                        <td>65 orders</td>
                        <td>৳ 29,450 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">NJ</span>
                                <div><strong>Nusrat Jahan</strong><small>01511-112233</small></div>
                            </div>
                        </td>
                        <td>9 orders</td>
                        <td>৳ 3,180 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">KH</span>
                                <div><strong>Kamal Hossain</strong><small>01811-445566</small></div>
                            </div>
                        </td>
                        <td>51 orders</td>
                        <td>৳ 22,900 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">SI</span>
                                <div><strong>Sadia Islam</strong><small>01911-778899</small></div>
                            </div>
                        </td>
                        <td>17 orders</td>
                        <td>৳ 6,540 lifetime</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
