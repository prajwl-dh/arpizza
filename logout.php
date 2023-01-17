<!--
    Name: Prajwal Dhungana
    Date: 11-28-2022
-->

<?php
    session_start();
    session_destroy();
    header("Location: index.php");
?>