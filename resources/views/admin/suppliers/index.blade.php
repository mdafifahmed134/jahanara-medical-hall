<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Suppliers</h1>
            <p class="page-subtitle">Manufacturers and distributors you order from.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search suppliers…"></div>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-plus-lg"></i>Add Supplier</button>
        </div>
        <div class="table-responsive">
            <table class="table app-table">
                <thead>
                    <tr>
                        <th>Supplier</th>
                        <th>Phone</th>
                        <th>Supplies</th>
                        <th>Status</th>
                        <th class="text-end">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">SP</span>
                                <div><strong>Beximco Pharmaceuticals</strong><small>Dhaka, Bangladesh</small></div>
                            </div>
                        </td>
                        <td>+880 1711-000111</td>
                        <td>412 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">SQ</span>
                                <div><strong>Square Pharma</strong><small>Dhaka, Bangladesh</small></div>
                            </div>
                        </td>
                        <td>+880 1911-222333</td>
                        <td>388 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">IN</span>
                                <div><strong>Incepta Pharmaceuticals</strong><small>Savar, Dhaka</small></div>
                            </div>
                        </td>
                        <td>+880 1611-444555</td>
                        <td>301 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">RN</span>
                                <div><strong>Renata Limited</strong><small>Gazipur, Dhaka</small></div>
                            </div>
                        </td>
                        <td>+880 1811-666777</td>
                        <td>276 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">AC</span>
                                <div><strong>ACI Limited</strong><small>Dhaka, Bangladesh</small></div>
                            </div>
                        </td>
                        <td>+880 1511-888999</td>
                        <td>198 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="person-cell"><span class="avatar-circle">NN</span>
                                <div><strong>Novo Nordisk</strong><small>Copenhagen, Denmark</small></div>
                            </div>
                        </td>
                        <td>+45 4444-8888</td>
                        <td>42 medicines</td>
                        <td><span class="badge status-badge status-normal">Active</span></td>
                        <td class="text-end"><button class="btn btn-view"><i class="bi bi-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
