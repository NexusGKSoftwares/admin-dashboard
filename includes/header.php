
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Billing Admin Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Include custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
        <h1 class="h5 ml-3">Water Billing Admin Dashboard</h1>
    </nav>
<!-- Custom JavaScript to toggle sidebar -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        const wrapper = document.getElementById("wrapper");
        wrapper.classList.toggle("toggled");
    });
</script>

<!-- Add custom CSS for styling -->
<style>
    #wrapper.toggled #sidebar-wrapper {
        margin-left: -250px;
    }
    #sidebar-wrapper {
        min-height: 100vh;
        transition: margin 0.25s ease-out;
    }
    #page-content-wrapper {
        width: 100%;
    }
</style>
