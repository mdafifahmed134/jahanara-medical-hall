<x-admin-layout>
    <section class="welcome-row">
        <div>
            <h1 class="welcome-title">Categories</h1>
            <p class="page-subtitle">Organize medicines into categories for faster browsing.</p>
        </div>
        <div class="welcome-date" id="todayDate">
            <i class="bi bi-calendar3"></i> <span id="dateText">Loading date…</span>
        </div>
    </section>

    <section class="panel-card">
        <div class="page-toolbar">
            <div class="toolbar-filters">
                <div class="toolbar-search"><i class="bi bi-search"></i><input type="text"
                        placeholder="Search categories…"></div>
            </div>
            <button class="btn btn-primary-brand"><i class="bi bi-plus-lg"></i>Add Category</button>
        </div>
        <div class="tile-grid">
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-capsule"></i></div>
                <div class="tile-body"><strong>Painkiller</strong><span>312 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-droplet"></i></div>
                <div class="tile-body"><strong>Gastric</strong><span>198 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-shield-plus"></i></div>
                <div class="tile-body"><strong>Antibiotic</strong><span>264 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-flower1"></i></div>
                <div class="tile-body"><strong>Antihistamine</strong><span>145 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-activity"></i></div>
                <div class="tile-body"><strong>Diabetes</strong><span>88 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-heart-pulse"></i></div>
                <div class="tile-body"><strong>Cardiac</strong><span>176 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-sun"></i></div>
                <div class="tile-body"><strong>Vitamins</strong><span>220 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-bandaid"></i></div>
                <div class="tile-body"><strong>Dermatology</strong><span>132 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-lungs"></i></div>
                <div class="tile-body"><strong>Respiratory</strong><span>154 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-emoji-smile"></i></div>
                <div class="tile-body"><strong>Pediatric</strong><span>96 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-eye"></i></div>
                <div class="tile-body"><strong>Ophthalmic</strong><span>61 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
            <div class="tile-card">
                <div class="tile-icon"><i class="bi bi-three-dots"></i></div>
                <div class="tile-body"><strong>Other</strong><span>612 medicines</span></div>
                <div class="tile-actions"><button class="btn btn-view"><i class="bi bi-pencil"></i></button></div>
            </div>
        </div>
    </section>
</x-admin-layout>
