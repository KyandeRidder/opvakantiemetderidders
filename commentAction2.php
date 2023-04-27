<?php
require_once "includeDB2.php";
if(isset($_POST["submit"])) {
    insertComment($_POST["Name"],$_POST["Comment"]);
    header('location:http://localhost/Websites%20(niet%20school)/Home.php');
}



?>