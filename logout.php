<?php
    include 'conn.php';

    session_start();
    session_unset();
    header("Location:Wp.php");
?>