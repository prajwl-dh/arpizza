<!--
    Name: Prajwal Dhungana
    Date: 11-28-2022
-->

<?php 
    $server = 'localhost';
    $username = "root";
    $password = "";
    $database = "arpizza";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("<script>alert('Connection Failed.')</script>");
    }
?>