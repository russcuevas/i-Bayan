<?php
include '../../database/connection.php';
session_start();

$barangay = basename(__DIR__);
$resident_key = "resident_id_$barangay";

if (isset($_SESSION[$resident_key])) {
    $resident_id = $_SESSION[$resident_key];

    $stmt = $conn->prepare("UPDATE tbl_residents SET is_online = 'offline' WHERE id = ?");
    $stmt->execute([$resident_id]);
}

session_unset();
session_destroy();

header('Location: ../../login.php');
exit;
