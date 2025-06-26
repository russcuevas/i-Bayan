<?php
session_start();
if (!isset($_SESSION['superadmin_id'])) {
    header("Location: login.php");
    exit();
}

include '../database/connection.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE id = :id";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([':id' => $id]);
        $_SESSION['success'] = "Admin deleted successfully!";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Failed to delete admin: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = "Invalid Admin ID.";
}

header("Location: admin_management.php");
exit;
