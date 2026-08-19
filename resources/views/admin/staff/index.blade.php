<x-admin-layout>

    <section class="welcome-row">
      <div>
        <h1 class="welcome-title">Staff</h1>
        <p class="page-subtitle">Manage your pharmacy team and their roles.</p>
      </div>
      <div class="welcome-date" id="todayDate">
        <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
      </div>
    </section>

    <section class="row g-3 kpi-row">
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Total Staff</span><span class="kpi-value">24</span><span class="kpi-meta">Across all roles</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">On Duty Today</span><span class="kpi-value">18</span><span class="kpi-meta">Scheduled shifts</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">Pharmacists</span><span class="kpi-value">4</span><span class="kpi-meta">Licensed staff</span></div></div>
      <div class="col-6 col-lg-3"><div class="kpi-card"><span class="kpi-label">On Leave</span><span class="kpi-value">2</span><span class="kpi-meta">This week</span></div></div>
    </section>

    <section class="panel-card">
      <div class="page-toolbar">
        <div class="toolbar-filters">
          <div class="toolbar-search"><i class="bi bi-search"></i><input type="text" placeholder="Search staff…"></div>
          <select class="toolbar-select"><option>All Roles</option><option>Pharmacist</option><option>Sales Counter</option><option>Inventory Manager</option><option>Delivery</option></select>
        </div>
        <button class="btn btn-primary-brand"><i class="bi bi-person-plus"></i>Add Staff</button>
      </div>
      <div class="table-responsive">
        <table class="table app-table">
          <thead><tr><th>Staff Member</th><th>Role</th><th>Status</th><th class="text-end">Action</th></tr></thead>
          <tbody>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">KH</span><div><strong>Dr. Karim Hossain</strong><small>karim@medicare.pharmacy</small></div></div></td>
                  <td>Pharmacist-in-Charge</td>
                  <td><span class="badge status-badge status-normal">Active</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">NJ</span><div><strong>Nusrat Jahan</strong><small>nusrat@medicare.pharmacy</small></div></div></td>
                  <td>Sales Counter</td>
                  <td><span class="badge status-badge status-normal">Active</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">RI</span><div><strong>Rafiq Islam</strong><small>rafiq@medicare.pharmacy</small></div></div></td>
                  <td>Inventory Manager</td>
                  <td><span class="badge status-badge status-normal">Active</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">NA</span><div><strong>Dr. Nasrin Akter</strong><small>nasrin@medicare.pharmacy</small></div></div></td>
                  <td>Pharmacist</td>
                  <td><span class="badge status-badge status-pending">On Leave</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">TA</span><div><strong>Tanvir Alam</strong><small>tanvir@medicare.pharmacy</small></div></div></td>
                  <td>Sales Counter</td>
                  <td><span class="badge status-badge status-normal">Active</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="person-cell"><span class="avatar-circle">SR</span><div><strong>Sabbir Rahman</strong><small>sabbir@medicare.pharmacy</small></div></div></td>
                  <td>Delivery Coordinator</td>
                  <td><span class="badge status-badge status-normal">Active</span></td>
                  <td class="text-end">
                    <button class="btn btn-view me-1"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-view"><i class="bi bi-envelope"></i></button>
                  </td>
                </tr>
          </tbody>
        </table>
      </div>
    </section>
</x-admin-layout>
