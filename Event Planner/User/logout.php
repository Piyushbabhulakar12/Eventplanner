<?php

session_start();

session_destroy();

header("location:../Log/log.php");

?>