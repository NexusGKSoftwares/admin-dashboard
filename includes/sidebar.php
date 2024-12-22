
<!-- sidebar.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link active" aria-current="page">
                <i class="bi bi-house-door"></i> Home
            </a>
        </li>
        <li>
            <a href="users.php" class="nav-link link-dark">
                <i class="bi bi-people"></i> Users
            </a>
        </li>
        <li>
            <a href="billing.php" class="nav-link link-dark">
                <i class="bi bi-cash"></i> Billing
            </a>
        </li>
        <li>
            <a href="faults.php" class="nav-link link-dark">
                <i class="bi bi-exclamation-circle"></i> Fault Reports
            </a>
        </li>
        <li>
            <a href="settings.php" class="nav-link link-dark">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/images/default-avatar.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
    </div>
</div>
