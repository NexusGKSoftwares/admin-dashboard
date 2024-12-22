<?php
// Start session
session_start();

// // Include authentication and database connection files
// require_once "includes/auth.php";
// require_once "includes/db.php";

// // Redirect to login if the user is not logged in
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// Include page components
require_once "includes/header.php";
require_once "includes/sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="dashboard-container d-flex">
        <!-- Sidebar Navigation -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <div class="main-content flex-grow-1">
            <!-- Navbar -->
            <?php include 'includes/header.php'; ?>

            <!-- Dashboard Content -->
            <div class="content container mt-4">
                <h1>Welcome to the Admin Dashboard</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text">150</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Monthly Revenue</h5>
                                <p class="card-text">$10,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Pending Tickets</h5>
                                <p class="card-text">12</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent Activity</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">User John Doe registered</li>
                                    <li class="list-group-item">Monthly report generated</li>
                                    <li class="list-group-item">System updated</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">System Statistics</h5>
                                <canvas id="systemStatsChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tasks Overview</h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Due Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Update user profiles</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2024-12-15</td>
                                        </tr>
                                        <tr>
                                            <td>Fix ticketing system bug</td>
                                            <td><span class="badge bg-warning">In Progress</span></td>
                                            <td>2024-12-20</td>
                                        </tr>
                                        <tr>
                                            <td>Prepare monthly reports</td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                            <td>2024-12-25</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example of a Chart.js integration
        const ctx = document.getElementById('systemStatsChart').getContext('2d');
        const systemStatsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April'],
                datasets: [{
                    label: 'System Uptime (hours)',
                    data: [10, 20, 30, 40],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1
                }]
            }
        });
    </script>
</body>
</html>
