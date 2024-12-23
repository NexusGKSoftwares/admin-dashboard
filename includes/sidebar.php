<aside id="sidebar" class="sidebar bg-light" style="width: 250px; position: fixed; top: 56px; left: 0; height: calc(100vh - 56px); overflow-y: auto; box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); transition: width 0.3s;">
    <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary text-white">
        <span>Menu</span>
        <button id="toggleSidebar" class="btn btn-sm btn-light">☰</button>
    </div>
    <div class="container-fluid mt-4">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="?page=dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=user_management"><i class="bi bi-people"></i> User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=billing_management"><i class="bi bi-credit-card"></i> Billing & Payments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=service_management"><i class="bi bi-briefcase"></i> Service Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=usage_monitoring"><i class="bi bi-bar-chart-line"></i> Usage Monitoring</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=notifications"><i class="bi bi-bell"></i> Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=reports"><i class="bi bi-file-earmark-text"></i> Reports</a>
            </li>
        </ul>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="?page=settings"><i class="bi bi-gear"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=help"><i class="bi bi-question-circle"></i> Help & Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </li>
        </ul>
    </div>
</aside>

<script>
    document.getElementById("toggleSidebar").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar");
        if (sidebar.style.width === "250px") {
            sidebar.style.width = "70px";
        } else {
            sidebar.style.width = "250px";
        }
    });
</script>

<!-- Add Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
