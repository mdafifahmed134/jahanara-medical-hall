/* ==========================================================================
   MediCare Pharmacy — Admin Dashboard
   Vanilla JavaScript
   ========================================================================== */

document.addEventListener("DOMContentLoaded", () => {
    /* ---------------------------------------------------------
     1. Dynamic date display
  --------------------------------------------------------- */
    const dateText = document.getElementById("dateText");
    if (dateText) {
        const now = new Date();
        const options = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        };
        dateText.textContent = now.toLocaleDateString("en-US", options);
    }

    /* ---------------------------------------------------------
     2. Sidebar toggle (desktop collapse / mobile slide-in)
  --------------------------------------------------------- */
    const sidebar = document.getElementById("sidebar");
    const mainWrapper = document.getElementById("mainWrapper");
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebarOverlay = document.getElementById("sidebarOverlay");

    function isMobile() {
        return window.innerWidth <= 860;
    }

    sidebarToggle.addEventListener("click", () => {
        if (isMobile()) {
            sidebar.classList.toggle("show");
            sidebarOverlay.classList.toggle("show");
        } else {
            sidebar.classList.toggle("collapsed");
            mainWrapper.classList.toggle("expanded");
        }
    });

    sidebarOverlay.addEventListener("click", () => {
        sidebar.classList.remove("show");
        sidebarOverlay.classList.remove("show");
    });

    // Close the mobile sidebar after a nav link is tapped (each link is a
    // real page, so the browser handles navigation and the active state is
    // already baked into the page that loads next).
    document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", () => {
            if (isMobile()) {
                sidebar.classList.remove("show");
                sidebarOverlay.classList.remove("show");
            }
        });
    });

    // Reset sidebar state on resize to avoid stuck classes
    window.addEventListener("resize", () => {
        if (!isMobile()) {
            sidebar.classList.remove("show");
            sidebarOverlay.classList.remove("show");
        }
    });

    /* ---------------------------------------------------------
     3. Dark mode toggle
  --------------------------------------------------------- */
    const darkModeToggle = document.getElementById("darkModeToggle");
    const darkModeIcon = darkModeToggle.querySelector("i");

    function setDarkMode(enabled) {
        document.body.classList.toggle("dark-mode", enabled);
        darkModeIcon.className = enabled ? "bi bi-sun" : "bi bi-moon-stars";
    }

    // Note: no localStorage available in this sandboxed context reliably across
    // all environments, so we default to light mode each load.
    darkModeToggle.addEventListener("click", () => {
        const enabled = !document.body.classList.contains("dark-mode");
        setDarkMode(enabled);
        if (window.salesChartInstance) {
            updateChartTheme();
        }
    });

    /* ---------------------------------------------------------
     4. Search filter for the Low Stock medicine table
  --------------------------------------------------------- */
    const globalSearch = document.getElementById("globalSearch");
    const lowStockTable = document.getElementById("lowStockTable");

    if (globalSearch && lowStockTable) {
        globalSearch.addEventListener("input", () => {
            const query = globalSearch.value.trim().toLowerCase();
            const rows = lowStockTable.querySelectorAll("tbody tr");

            rows.forEach((row) => {
                const medicineName =
                    row.querySelector("td")?.textContent.toLowerCase() || "";
                const matches = medicineName.includes(query);
                row.style.display = matches ? "" : "none";
            });
        });
    }

    /* ---------------------------------------------------------
     5. Restock modal + confirmation toast
  --------------------------------------------------------- */
    const restockModalEl = document.getElementById("restockModal");
    const restockModal = new bootstrap.Modal(restockModalEl);
    const restockMedicineName = document.getElementById("restockMedicineName");
    const confirmRestockBtn = document.getElementById("confirmRestockBtn");
    let currentRestockMedicine = "";

    document.querySelectorAll(".btn-restock").forEach((btn) => {
        btn.addEventListener("click", () => {
            currentRestockMedicine = btn.dataset.medicine || "Unknown Medicine";
            restockMedicineName.textContent = currentRestockMedicine;
            restockModal.show();
        });
    });

    confirmRestockBtn.addEventListener("click", () => {
        const qty = document.getElementById("restockQty").value || 50;
        restockModal.hide();
        showToast(
            `Restock request placed for ${currentRestockMedicine} — ${qty} units.`,
        );
    });

    function showToast(message) {
        const toastEl = document.getElementById("appToast");
        const toastBody = document.getElementById("appToastBody");
        toastBody.textContent = message;
        const toast = new bootstrap.Toast(toastEl, { delay: 3200 });
        toast.show();
    }

    /* ---------------------------------------------------------
     6. Quick action buttons — friendly toast feedback
  --------------------------------------------------------- */
    document.querySelectorAll(".quick-action-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            const label = btn.querySelector("span").textContent;
            showToast(`Opening "${label}" workflow…`);
        });
    });

    /* ---------------------------------------------------------
     7. Sales chart (Chart.js) with Weekly / Monthly / Yearly switching
  --------------------------------------------------------- */
    const salesData = {
        weekly: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            values: [32000, 41000, 38500, 45200, 48500, 52300, 40100],
        },
        monthly: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            values: [
                612000, 584000, 701000, 668000, 742000, 789000, 812000, 842650,
                795000, 0, 0, 0,
            ],
        },
        yearly: {
            labels: ["2021", "2022", "2023", "2024", "2025", "2026"],
            values: [5400000, 6120000, 7350000, 8410000, 9280000, 8426500],
        },
    };

    const salesChartEl = document.getElementById("salesChart");

    function getChartColors() {
        const dark = document.body.classList.contains("dark-mode");
        return {
            grid: dark ? "rgba(255,255,255,0.06)" : "rgba(16,24,40,0.06)",
            text: dark ? "#9aa5b5" : "#667085",
            line: "#198754",
            fill: dark ? "rgba(25,135,84,0.18)" : "rgba(25,135,84,0.12)",
        };
    }

    function buildGradient(ctx) {
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, "rgba(25,135,84,0.28)");
        gradient.addColorStop(1, "rgba(25,135,84,0.01)");
        return gradient;
    }

    function updateChartTheme() {
        if (!window.salesChartInstance) return;
        const c = getChartColors();
        const chart = window.salesChartInstance;
        chart.data.datasets[0].borderColor = c.line;
        chart.data.datasets[0].backgroundColor = buildGradient(
            salesChartEl.getContext("2d"),
        );
        chart.options.scales.x.ticks.color = c.text;
        chart.options.scales.y.ticks.color = c.text;
        chart.options.scales.y.grid.color = c.grid;
        chart.update();
    }

    if (salesChartEl) {
        const salesChartCtx = salesChartEl.getContext("2d");
        const colors = getChartColors();

        window.salesChartInstance = new Chart(salesChartCtx, {
            type: "line",
            data: {
                labels: salesData.monthly.labels,
                datasets: [
                    {
                        label: "Sales (৳)",
                        data: salesData.monthly.values,
                        borderColor: colors.line,
                        backgroundColor: buildGradient(salesChartCtx),
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3,
                        pointBackgroundColor: colors.line,
                        pointHoverRadius: 6,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: "#1c2430",
                        titleFont: { family: "Inter", weight: "600" },
                        bodyFont: { family: "Inter" },
                        padding: 12,
                        cornerRadius: 10,
                        callbacks: {
                            label: (ctx) =>
                                `৳ ${ctx.parsed.y.toLocaleString()}`,
                        },
                    },
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: {
                            color: colors.text,
                            font: { family: "Inter", size: 11 },
                        },
                    },
                    y: {
                        grid: { color: colors.grid },
                        ticks: {
                            color: colors.text,
                            font: { family: "Inter", size: 11 },
                            callback: (value) => "৳" + value / 1000 + "k",
                        },
                    },
                },
                interaction: { intersect: false, mode: "index" },
            },
        });

        // Weekly / Monthly / Yearly switching
        document.querySelectorAll(".range-btn").forEach((btn) => {
            btn.addEventListener("click", () => {
                document
                    .querySelectorAll(".range-btn")
                    .forEach((b) => b.classList.remove("active"));
                btn.classList.add("active");

                const range = btn.dataset.range;
                const dataset = salesData[range];

                window.salesChartInstance.data.labels = dataset.labels;
                window.salesChartInstance.data.datasets[0].data =
                    dataset.values;
                window.salesChartInstance.update();
            });
        });
    }

    /* ---------------------------------------------------------
     8. Accessibility: close dropdown panels on Escape
  --------------------------------------------------------- */
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            sidebar.classList.remove("show");
            sidebarOverlay.classList.remove("show");
        }
    });
});
