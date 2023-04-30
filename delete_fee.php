<?php
// Establish a database connection
include 'connection.php';

// Check if the ID parameter is set and not empty
if (isset($_GET['id']) && !empty($_GET['id'])) {

    // Sanitize the ID parameter to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete the fee structure record from the database
    $sql = "DELETE FROM fees WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // If the deletion was successful, redirect to the fee structure table page
        header("Location: admin_fee_structure.php");
        exit;
    } else {
        // If the deletion was not successful, display an error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // If the ID parameter is not set or empty, redirect to the fee structure table page
    header("Location: admin_fee_structure.php");
    exit;
}
?>