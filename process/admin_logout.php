<?php

session_start();

unset($_SESSION["user"]);

header("location: ../admin_log.php");
