<?php 
session_start();
if($_SESSION['pass']){

}
else{
    header('Location: adminaetu2013.php');
}
?>