<?php 
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "useraccount";
$conn= new mysqli($servername, $db_user, $db_pass,$db_name);
if(!$conn){
    echo"<script>alert('con Failed.')</script>";
}

?>