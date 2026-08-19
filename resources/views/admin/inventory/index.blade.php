<x-admin-layout>
     <section class="welcome-row">
      <div>
        <h1 class="welcome-title">Inventory</h1>
        <p class="page-subtitle">Track stock levels and value across every location.</p>
      </div>
      <div class="welcome-date" id="todayDate">
        <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
      </div>
    </section>

    <section class="row g-3 kpi-row">
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Total Stock Value</span><span class="kpi-value">৳ 18.6L</span><span class="kpi-meta">Across all locations</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">In Stock</span><span class="kpi-value">2,102</span><span class="kpi-meta">85% of catalog</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Low Stock</span><span class="kpi-value">18</span><span class="kpi-meta">Below minimum level</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Out of Stock</span><span class="kpi-value">6</span><span class="kpi-meta">Needs urgent purchase</span></div></div>
    </section>

    <section class="panel-card">
      <div class="page-toolbar">
        <div class="toolbar-filters">
          <div class="toolbar-search"><i class="bi bi-search"></i><input type="text" placeholder="Search inventory…"></div>
          <select class="toolbar-select"><option>All Locations</option><option>Central Store</option><option>Counter 1</option><option>Counter 2</option></select>
        </div>
        <button class="btn btn-primary-brand"><i class="bi bi-arrow-down-up"></i>Stock Adjustment</button>
      </div>
      <div class="table-responsive">
        <table class="table app-table">
          <thead><tr><th>Medicine</th><th>Brand</th><th>Stock</th><th>Minimum</th><th>Stock Value</th><th>Location</th><th class="text-end">Action</th></tr></thead>
          <tbody>
                <tr>
                  <td class="fw-semibold">Napa Extra</td><td>Beximco</td><td>1,240</td><td>300</td><td>৳ 1,860</td><td>Central Store</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Napa Extra">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Seclo</td><td>Square Pharma</td><td>5</td><td>25</td><td>৳ 30</td><td>Central Store</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Seclo">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Histacin</td><td>ACI Limited</td><td>22</td><td>25</td><td>৳ 26.40</td><td>Counter 1</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Histacin">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Ace Plus</td><td>Incepta</td><td>9</td><td>20</td><td>৳ 16.20</td><td>Counter 1</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Ace Plus">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Maxpro</td><td>Renata</td><td>3</td><td>20</td><td>৳ 22.50</td><td>Central Store</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Maxpro">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Amoxicillin</td><td>Square Pharma</td><td>410</td><td>100</td><td>৳ 3,280</td><td>Central Store</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Amoxicillin">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Paracetamol</td><td>Beximco</td><td>980</td><td>200</td><td>৳ 1,078</td><td>Counter 2</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Paracetamol">Restock</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Losectil</td><td>Eskayef</td><td>260</td><td>80</td><td>৳ 1,690</td><td>Central Store</td>
                  <td class="text-end"><button class="btn btn-restock" data-medicine="Losectil">Restock</button></td>
                </tr>
          </tbody>
        </table>
      </div>
    </section>
</x-admin-layout>
