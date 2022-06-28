<?php session_start(); ?>
<?php include "index.php"?>
<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['type_message'] ?>" role="alert">
        <?php echo $_SESSION['message']; ?>
        <?php unset($_SESSION['message']); ?>
    </div>
<?php endif; ?>

<?php
    var_dump($_SESSION['login']);
?>