<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Prescriptions</h1>
            <p class="page-subtitle">Review and approve uploaded prescriptions.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Pending</span><span class="kpi-value">12</span><span
                    class="kpi-meta">Awaiting review</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Approved</span><span class="kpi-value">86</span><span
                    class="kpi-meta">This month</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Rejected</span><span class="kpi-value">4</span><span
                    class="kpi-meta">This month</span></div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="kpi-card"><span class="kpi-label">Today's Upload</span><span class="kpi-value">19</span><span
                    class="kpi-meta">New submissions</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search prescriptions…"></div>
                <select class="toolbar-select">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Approved</option>
                    <option>Rejected</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-upload"></i>Upload Prescription</button>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Prescription ID</th>
                        <th>Customer</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-end">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">RX-5501</td>
                        <td>Rahim Uddin</td>
                        <td>Dr. Karim Hossain</td>
                        <td>19 Aug 2026</td>
                        <td><span class="badge status-badge status-pending">Pending</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RX-5502</td>
                        <td>Fatema Begum</td>
                        <td>Dr. Nasrin Akter</td>
                        <td>19 Aug 2026</td>
                        <td><span class="badge status-badge status-completed">Approved</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RX-5503</td>
                        <td>Shakil Ahmed</td>
                        <td>Dr. Karim Hossain</td>
                        <td>18 Aug 2026</td>
                        <td><span class="badge status-badge status-completed">Approved</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RX-5504</td>
                        <td>Nusrat Jahan</td>
                        <td>Dr. Sabbir Rahman</td>
                        <td>18 Aug 2026</td>
                        <td><span class="badge status-badge status-cancelled">Rejected</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RX-5505</td>
                        <td>Kamal Hossain</td>
                        <td>Dr. Nasrin Akter</td>
                        <td>17 Aug 2026</td>
                        <td><span class="badge status-badge status-completed">Approved</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">RX-5506</td>
                        <td>Sadia Islam</td>
                        <td>Dr. Karim Hossain</td>
                        <td>17 Aug 2026</td>
                        <td><span class="badge status-badge status-pending">Pending</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
