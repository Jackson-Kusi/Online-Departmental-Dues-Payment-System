<?php
    include 'connection.php';
    include 'user_message_dashboard.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manual Payment Process</title>
        <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 500px;
            margin-top: 40px;
            margin-left: 460px;
            padding: 20px;
            padding-left: 80px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            align-content: center;
        }
        h1, h2 {
            margin-top: 5px;
            margin-bottom: 10px;
            text-align: center;
        }
        form {
            max-width: 600px;
            align-items: center;
        }
        label {
            font-weight: 700;
        }
        input, select {
            display: block;
            width: 400px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
        }
        input[type="submit"] {
            background-color: #031435;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #02173f;
        }
        input, select:focus {
            outline: none;
        }
        .payment-instructions {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        .payment-reference {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        .payment-status {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" action="payment_process.php">
                <h2>Payment Details</h2>
                <?php if (!empty($error_message)) { ?>
                <p class="error-message"><?= $error_message ?></p>
                <?php } ?>
                <label for="name">Registration Number:</label>
                <input type="text" name="regnum" id="regnum" placeholder="Enter your full name" required>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" required>

                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>

                <label for="amount">Amount (GHS):</label>
                <input type="number" name="amount" id="amount" placeholder="Enter the amount to be paid" required>
                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method" required>
                    <option value="">Select a payment method</option>
                    <option>MTN Mobile Money</option>
                    <option>Vodafone Cash</option>
                    <option>AirtelTigo Cash</option>
                </select>

                <input type="submit" name="submit" value="PAY NOW">
            </form>
        </div>
    </body>
</html>