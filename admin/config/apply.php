<?php 
    // Start Session Here
    session_start();
    include('functions.php');

    // Set Default Time Zone
    date_default_timezone_set('Asia/Kolkata');
    $obj=new Functions();

    // Connecting to Database
    $conn=$obj->db_connect();

    // Selecting Database
    $db_select=$obj->db_select($conn);
?>