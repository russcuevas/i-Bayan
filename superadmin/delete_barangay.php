<?php
session_start();
if (!isset($_SESSION['superadmin_id'])) {
    header("Location: login.php");
    exit();
}

include '../database/connection.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_barangay WHERE id = :id";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([':id' => $id]);
        $_SESSION['success'] = "Barangay deleted successfully!";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Failed to delete barangay: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = "Invalid Barangay ID.";
}

header("Location: barangay_management.php");
exit;
