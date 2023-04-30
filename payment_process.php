<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $regnum = $_POST['regnum'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO payments (registration_number, name, email, phone, amount, payment_method)
            VALUES ('$regnum', '$name', '$email', '$phone', '$amount', '$payment_method')";

    if (mysqli_query($conn, $sql)) {
        header("Location: payment_instruction.php");
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo $error_message;
    }
}

mysqli_close($conn);
?>
