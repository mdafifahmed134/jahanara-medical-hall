<x-admin-layout>
   <section class="welcome-row">
      <div>
        <h1 class="welcome-title">Purchases</h1>
        <p class="page-subtitle">Purchase orders and supplier deliveries.</p>
      </div>
      <div class="welcome-date" id="todayDate">
        <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
      </div>
    </section>

    <section class="row g-3 kpi-row">
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Open Purchase Orders</span><span class="kpi-value">7</span><span class="kpi-meta">Awaiting delivery</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">This Month Spend</span><span class="kpi-value">৳ 3.4L</span><span class="kpi-meta">Aug 2026</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Active Suppliers</span><span class="kpi-value">14</span><span class="kpi-meta">Ordered from this month</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Avg. Delivery Time</span><span class="kpi-value">3.2 days</span><span class="kpi-meta">Order to receipt</span></div></div>
    </section>

    <section class="panel-card">
      <div class="page-toolbar">
        <div class="toolbar-filters">
          <div class="toolbar-search"><i class="bi bi-search"></i><input type="text" placeholder="Search purchase orders…"></div>
          <select class="toolbar-select"><option>All Status</option><option>Received</option><option>Pending</option><option>In Transit</option><option>Cancelled</option></select>
        </div>
        <button class="btn btn-primary-brand"><i class="bi bi-bag-plus"></i>Purchase Medicine</button>
      </div>
      <div class="table-responsive">
        <table class="table app-table">
          <thead><tr><th>PO ID</th><th>Supplier</th><th>Quantity</th><th>Amount</th><th>Date</th><th>Status</th><th class="text-end">View</th></tr></thead>
          <tbody>
                <tr>
                  <td class="fw-semibold">PO-3301</td><td>Square Pharma</td><td>500 units</td><td>৳ 62,000</td><td>19 Aug 2026</td>
                  <td><span class="badge status-badge status-completed">Received</span></td>
                  <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">PO-3302</td><td>Beximco Pharmaceuticals</td><td>1,200 units</td><td>৳ 1,44,000</td><td>18 Aug 2026</td>
                  <td><span class="badge status-badge status-pending">Pending</span></td>
                  <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">PO-3303</td><td>Renata Limited</td><td>300 units</td><td>৳ 38,500</td><td>17 Aug 2026</td>
                  <td><span class="badge status-badge status-processing">In Transit</span></td>
                  <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">PO-3304</td><td>Novo Nordisk</td><td>60 units</td><td>৳ 25,200</td><td>16 Aug 2026</td>
                  <td><span class="badge status-badge status-completed">Received</span></td>
                  <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">PO-3305</td><td>ACI Limited</td><td>800 units</td><td>৳ 71,600</td><td>15 Aug 2026</td>
                  <td><span class="badge status-badge status-cancelled">Cancelled</span></td>
                  <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                </tr>
          </tbody>
        </table>
      </div>
    </section>
</x-admin-layout>
