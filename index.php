<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>

<div class="main-content">
    <!-- Dynamic content based on page selected -->
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            include("pages/".$page.".php");
        } else {
            include("pages/dashboard.php");
        }
    ?>
</div>

<?php include('includes/footer.php'); ?>
