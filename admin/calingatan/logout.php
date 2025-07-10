<?php
include '../../database/connection.php';

session_start();

$barangay = basename(__DIR__);
$admin_id_key = "admin_id_$barangay";
$admin_id = $_SESSION[$admin_id_key] ?? null;

if ($admin_id) {
    // Set admin status to 'offline' in the database
    $stmt = $conn->prepare("UPDATE tbl_admin SET status = 'offline' WHERE id = ?");
    $stmt->execute([$admin_id]);
}

// Clear session
unset($_SESSION["admin_id_$barangay"]);
unset($_SESSION["admin_name_$barangay"]);
unset($_SESSION["admin_position_$barangay"]);
unset($_SESSION["barangay_id_$barangay"]);
unset($_SESSION["barangay_name_$barangay"]);

// Redirect to login
header("Location: ../login.php");
exit();
