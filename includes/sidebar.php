<aside id="sidebar" class="sidebar bg-light" style="width: 250px; position: fixed; top: 56px; left: 0; height: calc(100vh - 56px); overflow-y: auto; box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); transition: width 0.3s;">
    <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary text-white">
        <span id="menuTitle">Menu</span>
        <button id="toggleSidebar" class="btn btn-sm btn-light">☰</button>
    </div>
    <div class="container-fluid mt-4">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=dashboard">
                    <i class="bi bi-speedometer2"></i>
                    <span class="ms-2 menu-text"> Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=user_management">
                    <i class="bi bi-people"></i>
                    <span class="ms-2 menu-text"> User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=billing_management">
                    <i class="bi bi-credit-card"></i>
                    <span class="ms-2 menu-text">Billing & Payments</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=service_management">
                    <i class="bi bi-briefcase"></i>
                    <span class="ms-2 menu-text">Service Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=usage_monitoring">
                    <i class="bi bi-bar-chart-line"></i>
                    <span class="ms-2 menu-text">Usage Monitoring</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=notifications">
                    <i class="bi bi-bell"></i>
                    <span class="ms-2 menu-text">Notifications</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=reports">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="ms-2 menu-text">Reports</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=settings">
                    <i class="bi bi-gear"></i>
                    <span class="ms-2 menu-text">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=help">
                    <i class="bi bi-question-circle"></i>
                    <span class="ms-2 menu-text">Help & Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="?page=logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="ms-2 menu-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    document.getElementById("toggleSidebar").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar");
        const menuTextElements = document.querySelectorAll(".menu-text");
        const menuTitle = document.getElementById("menuTitle");

        if (sidebar.style.width === "250px") {
            sidebar.style.width = "70px";
            menuTextElements.forEach((element) => {
                element.style.display = "none"; // Hide menu text
            });
            menuTitle.style.display = "none"; // Hide menu title
        } else {
            sidebar.style.width = "250px";
            menuTextElements.forEach((element) => {
                element.style.display = "inline"; // Show menu text
            });
            menuTitle.style.display = "inline"; // Show menu title
        }
    });
</script>

<!-- Add Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
