<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Low Stock</h1>
            <p class="page-subtitle">Medicines that have fallen below their minimum stock level.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3 kpi-row">
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Low Stock Items</span><span class="kpi-value">18</span><span
                    class="kpi-meta">Below minimum level</span></div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Critical Items</span><span class="kpi-value">6</span><span
                    class="kpi-meta">Under 20% of minimum</span></div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="kpi-card"><span class="kpi-label">Pending Restocks</span><span class="kpi-value">4</span><span
                    class="kpi-meta">Purchase orders placed</span></div>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search low stock medicines…"></div>
                <select class="toolbar-select">
                    <option>All Status</option>
                    <option>Low</option>
                    <option>Critical</option>
                </select>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-bag-plus"></i>Bulk Restock</button>
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
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Napa Extra">Restock</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Seclo</td>
                        <td>Gastric</td>
                        <td>Square Pharma</td>
                        <td>5</td>
                        <td>25</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Seclo">Restock</button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Histacin</td>
                        <td>Antihistamine</td>
                        <td>ACI Limited</td>
                        <td>22</td>
                        <td>25</td>
                        <td><span class="badge status-badge status-normal">Normal</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Histacin">Restock</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Ace Plus</td>
                        <td>Painkiller</td>
                        <td>Incepta</td>
                        <td>9</td>
                        <td>20</td>
                        <td><span class="badge status-badge status-low">Low</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Ace Plus">Restock</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Maxpro</td>
                        <td>Gastric</td>
                        <td>Renata</td>
                        <td>3</td>
                        <td>20</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Maxpro">Restock</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Insulin Mixtard</td>
                        <td>Diabetes</td>
                        <td>Novo Nordisk</td>
                        <td>12</td>
                        <td>30</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-restock"
                                data-medicine="Insulin Mixtard">Restock</button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Fexo</td>
                        <td>Antihistamine</td>
                        <td>Square Pharma</td>
                        <td>17</td>
                        <td>25</td>
                        <td><span class="badge status-badge status-low">Low</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Fexo">Restock</button></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Ceevit</td>
                        <td>Vitamins</td>
                        <td>Square Pharma</td>
                        <td>8</td>
                        <td>20</td>
                        <td><span class="badge status-badge status-critical">Critical</span></td>
                        <td class="text-end"><button class="btn btn-restock" data-medicine="Ceevit">Restock</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
