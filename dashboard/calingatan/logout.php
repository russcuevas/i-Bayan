<?php
include '../../database/connection.php';
session_start();

$barangay = basename(__DIR__);
$resident_key = "resident_id_$barangay";
$log_id_key = "log_id_resident_$barangay";

if (isset($_SESSION[$resident_key])) {
    $resident_id = $_SESSION[$resident_key];

    $stmt = $conn->prepare("UPDATE tbl_residents SET is_online = 'offline' WHERE id = ?");
    $stmt->execute([$resident_id]);

    if (isset($_SESSION[$log_id_key])) {
        $log_id = $_SESSION[$log_id_key];
        $update_log = $conn->prepare("UPDATE tbl_system_logs_residents SET logged_out = NOW() WHERE id = ?");
        $update_log->execute([$log_id]);
    }
}

// Clear all session data
session_unset();
session_destroy();

// Redirect to login page
header('Location: ../../login.php');
exit;
