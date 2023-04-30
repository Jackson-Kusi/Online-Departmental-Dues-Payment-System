<?php
include("connection.php");

$error = '';
if(isset($_POST['formSubmit']))
{

$registrationNumber =  mysqli_real_escape_string($conn,trim($_POST['registrationNumber']));
$password =  mysqli_real_escape_string($conn,$_POST['password']);

if($registrationNumber=='' || $password=='')
{
$error='All fields are required';
}

$sql = "select * from users where registration_number='".$registrationNumber."' and password = '".$password."'";

$q = $conn->query($sql);
if($q === false) {
    die("Query failed: " . $conn->error);
}

if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['rainbow_username']=$res['registrationNumber'];
$_SESSION['rainbow_uid']=$res['id'];
$_SESSION['rainbow_name']=$res['name'];
// Redirect user to dashboard.php
header("Location: user_dashboard.php");
exit(); // Ensure script execution stops after redirect
}else
{
$error = 'Invalid Username or Password';
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITSA-DUES-PAYMENT</title>
    <link rel="stylesheet" href="css/user_login.css">
</head>
<body>
    <div class="main-div">
        <div class="left-div">
            <img src="images/log.JPG">
        </div>
        <div class="right-div">
            <img class="logo" src="images/CITSA Logo.png" alt="">
            <p class="dept-name">DEPARTMENT OF COMPUTER SCIENCE AND INFORMATION TECHNOLOGY</p>
            <p class="stu-pan">STUDENT PANEL</p><hr>

            <form action="" method="POST">
                <?php
                    if($error!='')
                    {									
                    echo '<h5 class="forget">'.$error.'</h5>';
                    }
                ?>
                <div class="fill-in-div-1">
                    <img src="images/login.png">
                    <input type="text" name="registrationNumber" id="registrationNumber" placeholder="REGISTRATION NUMBER" required>
                </div>
                <hr>
                <div class="fill-in-div-2">
                    <img src="images/padlock.png">
                    <input type="password" name="password" id="password" placeholder="PASSWORD" required>
                </div>
                <hr>
                <input class="btn" type="submit" name="formSubmit" value="SIGN IN" />
            </form>            
        
        </div>
    </div>
</body>
</html>
