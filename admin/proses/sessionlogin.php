<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../admin/index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>