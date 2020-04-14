<?php
    include_once  "parts/header.php";
    if (!empty($_GET["page"])) {
       $page = $_GET["page"];
    }
    else {
       $page = "index";
    }
    include_once  "parts/$page.php";
    include_once  "parts/footer.php";
?>