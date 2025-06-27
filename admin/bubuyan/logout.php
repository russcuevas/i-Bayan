<?php
include '../../database/connection.php';

session_start();
$barangay = basename(__DIR__);
unset($_SESSION["admin_id_$barangay"]);
unset($_SESSION["admin_name_$barangay"]);
unset($_SESSION["admin_position_$barangay"]);
unset($_SESSION["barangay_id_$barangay"]);
unset($_SESSION["barangay_name_$barangay"]);
header("Location: ../login.php");
exit();
