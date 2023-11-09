<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "cikk");

        $cikkId = $_POST['cikkId'];

        
        $sql = "DELETE FROM content WHERE id = $cikkId";
        mysqli_query($connection, $sql);


        header("location:" . $_SERVER["HTTP_REFERER"]);
