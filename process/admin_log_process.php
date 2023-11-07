<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "cikk");

if (isset($_POST["submitted"])) {

    $name = $_POST["name"];
    $password = $_POST["password"];

    $errors = [];


    $sql_result = mysqli_query($connection, "select * from users where name = '$name'");
    $found = mysqli_num_rows($sql_result) > 0;

    if (!$found) {
        $errors["name"] = 'Nem található felhasználó!';
    }


    if (count($errors) === 0) {

        $user = mysqli_fetch_assoc($sql_result);

        $maylogin = password_verify($password, $user["password"]);

        if (!$maylogin) {
            $errors["name"] = 'Hibás belépési adatok!';
            $_SESSION["errors"] = $errors;
            $_SESSION["post"] = $post;
            header("location:" . $_SERVER["HTTP_REFERER"]);
        } else {
            $_SESSION["user"] = $user;
            header("location: ../admin_page.php");
            exit;
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("location:" . $_SERVER["HTTP_REFERER"]);
    } 
    
}
