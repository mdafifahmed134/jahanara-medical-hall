<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Settings</h1>
            <p class="page-subtitle">Configure your pharmacy profile, account, and preferences.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="row g-3">
        <div class="col-lg-3">
            <div class="panel-card settings-nav">
                <a href="#general" class="active"><i class="bi bi-shop me-2"></i>Pharmacy Profile</a>
                <a href="#account"><i class="bi bi-person-circle me-2"></i>Admin Account</a>
                <a href="#notifications"><i class="bi bi-bell me-2"></i>Notifications</a>
                <a href="#appearance"><i class="bi bi-palette me-2"></i>Appearance</a>
                <a href="#security"><i class="bi bi-shield-lock me-2"></i>Security</a>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="panel-card mb-3" id="general">
                <div class="settings-section-title">Pharmacy Profile</div>
                <p class="settings-section-desc">Basic information shown on invoices and prescriptions.</p>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Pharmacy Name</label><input type="text"
                            class="form-control" value="MediCare Pharmacy"></div>
                    <div class="col-md-6"><label class="form-label">Registration Number</label><input type="text"
                            class="form-control" value="DGDA-PH-2019-3342"></div>
                    <div class="col-md-6"><label class="form-label">Phone</label><input type="text"
                            class="form-control" value="+880 1711-000000"></div>
                    <div class="col-md-6"><label class="form-label">Email</label><input type="email"
                            class="form-control" value="contact@medicare.pharmacy"></div>
                    <div class="col-12"><label class="form-label">Address</label><input type="text"
                            class="form-control" value="House 12, Road 4, Narayanganj, Dhaka Division"></div>
                </div>
            </div>

            <div class="panel-card mb-3" id="account">
                <div class="settings-section-title">Admin Account</div>
                <p class="settings-section-desc">Your personal profile information.</p>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Full Name</label><input type="text"
                            class="form-control" value="Dr. Admin"></div>
                    <div class="col-md-6"><label class="form-label">Role</label><input type="text"
                            class="form-control" value="Pharmacy Administrator" disabled></div>
                    <div class="col-md-6"><label class="form-label">Email</label><input type="email"
                            class="form-control" value="admin@medicare.pharmacy"></div>
                    <div class="col-md-6"><label class="form-label">Phone</label><input type="text"
                            class="form-control" value="+880 1999-000000"></div>
                </div>
            </div>

            <div class="panel-card mb-3" id="notifications">
                <div class="settings-section-title">Notifications</div>
                <p class="settings-section-desc">Choose which alerts you want to receive.</p>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" checked><label
                        class="form-check-label">Low stock alerts</label></div>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" checked><label
                        class="form-check-label">Expiring medicine alerts</label></div>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" checked><label
                        class="form-check-label">New prescription uploads</label></div>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox"><label
                        class="form-check-label">Daily sales summary email</label></div>
            </div>

            <div class="panel-card mb-3" id="appearance">
                <div class="settings-section-title">Appearance</div>
                <p class="settings-section-desc">Personalize how the dashboard looks for you.</p>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox"
                        id="settingsDarkModeSwitch"><label class="form-check-label">Dark mode</label></div>
            </div>

            <div class="panel-card" id="security">
                <div class="settings-section-title">Security</div>
                <p class="settings-section-desc">Manage your password and login preferences.</p>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Current Password</label><input type="password"
                            class="form-control" placeholder="••••••••"></div>
                    <div class="col-md-6"><label class="form-label">New Password</label><input type="password"
                            class="form-control" placeholder="••••••••"></div>
                </div>
                <div class="form-check form-switch mt-3"><input class="form-check-input" type="checkbox"
                        checked><label class="form-check-label">Two-factor authentication</label></div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-3">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-primary-brand"><i class="bi bi-check-lg"></i>Save Changes</button>
            </div>
        </div>
    </section>
</x-admin-layout>
