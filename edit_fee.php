<?php

    // Establish a database connection
    include 'connection.php';
    include 'admin_message_dashboard.php';

    // Check if the ID parameter is set and not empty
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Sanitize the ID parameter to prevent SQL injection
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // Retrieve the fee structure record from the database
        $sql = "SELECT * FROM fees WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $particulars = $row['particulars'];
            $amount = $row['amount'];
        } else {
            // If the record is not found, redirect to the fee structure table page
            header("Location: admin_fee_structure.php");
            exit;
        }
    } else {
        // If the ID parameter is not set or empty, redirect to the fee structure table page
        header("Location: admin_fee_structure.php");
        exit;
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize the form data to prevent SQL injection
        $particulars = mysqli_real_escape_string($conn, $_POST['particulars']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);

        // Update the fee structure record in the database
        $sql = "UPDATE fees SET particulars = '$particulars', amount = '$amount' WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            // If the update was successful, redirect to the fee structure table page
            header("Location: admin_fee_structure.php");
            exit;
        } else {
            // If the update was not successful, display an error message
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>

<!-- Display the fee structure edit form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/edit_fee.css">
</head>
<body>
        <form action="" method="POST" class="form-container">
            <label for="fee_name"><b>PARTICULARS</b></label>
            <input type="text" placeholder="Enter fee name" name="particulars" value="<?php echo $particulars ?>" required>

            <label for="amount"><b>AMOUNT</b></label>
            <input type="number" placeholder="Enter amount" name="amount" value="<?php echo $amount ?>" required>

            <button type="submit" name="submit" class="btn">Update Fee</button>
        </form>
    
</body>
</html>