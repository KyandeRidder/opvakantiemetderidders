<?php
require_once "includeDB2.php";
if(isset($_POST["submit2"])) {
    insertImage($_POST["img"],$_POST["title"],$_POST["story"]);
    header('location:http://localhost/Websites%20(niet%20school)/Home.php');
}
?>