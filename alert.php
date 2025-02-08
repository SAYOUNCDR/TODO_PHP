<?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success" id="success-alert">
        <a href="#" class="close" title="success-close">×</a>
        <strong>Success!</strong> <?php echo $_SESSION['success'] ?>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000); // 2000 milliseconds = 5 seconds
    </script>
<?php unset($_SESSION['success']);
} ?>

<?php if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger" id="error-alert">
        <a href="#" class="close" title="error-close">×</a>
        <strong>Error!</strong> <?php echo $_SESSION['error'] ?>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('error-alert').style.display = 'none';
        }, 3000); // 2000 milliseconds = 5 seconds
    </script>
<?php unset($_SESSION['error']);
} ?>