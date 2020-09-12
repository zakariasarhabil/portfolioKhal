<?php
           if(isset($_POST['logout'])){
            unset($_SESSION['pass']);
            session_destroy();
            header('location:admin.php');
            }
?>