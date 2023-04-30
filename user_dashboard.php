<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CITSA-DUES-PAYMENT</title>

    <style>
        .admin-message {
            font-size: 24px;
            font-weight: bold;
            margin-top: 100px;
            margin-left: 280px;
        }
    </style>

    <link rel="stylesheet" href="css/dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="right-section">
            <div class="id-para">
                <img src="images/login.png" alt="">
                <p>JACKSON</p>
            </div>

            <a href="user_logout.php">
                <button class="btn">LOG OUT</button>
            </a>
        </div>
    </div>

    <p class="admin-message">
        WELCOME BACK JACKSON
    </p>

    <div class="sidebar">
        <div class="left-section">
            <img class="logo" src="images/CITSA Logo.png" alt="logo">
            <p class="writing">
                DEPARTMENT OF COMPUTER SCIENCE AND INFORMATION TECHNOLOGY
            </p>
        </div>
        <div class="sidewrite-container">
            <hr>
            <a href="user_fee_structure.php"><p class="sidewrite-past">FEES STRUCTURE</p></a>
            <hr>
            <a href="payment.php"><p class="sidewrite-past">PAYMENT</p></a>
            <hr>
            <a href="receipt.php"><p class="sidewrite-past">RECEIPT</p></a>
            <hr>
        </div>
    </div>
</body>
</html>