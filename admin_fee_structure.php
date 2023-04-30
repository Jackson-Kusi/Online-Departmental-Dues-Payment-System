<?php
include 'connection.php';
include 'admin_message_dashboard.php';
include 'fee-form.php';


// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get the form data
    $particulars = $_POST["particulars"];
    $amount = $_POST["amount"];

    // Insert the fee structure data into the database
    $sql = "INSERT INTO fees (particulars, amount) VALUES ('$particulars', '$amount')";
    if (mysqli_query($conn, $sql)) {
            // Redirect the user to the same page
        header("Location: admin_fee_structure.php");
    exit();
    } else {
        echo "Error adding fee structure data: " . mysqli_error($conn);
    }
}

// Retrieve the fee structure data from the database
$sql = "SELECT * FROM fees";
$result = mysqli_query($conn, $sql);

// Output the fee structure data in a table
echo "<table>";
echo "<tr><th>PARTICULARS</th><th>AMOUNT</th><th>ACTIONS</th></tr>";
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["particulars"] . "</td><td>" . $row["amount"] . "</td><td>";
        echo "<a href='edit_fee.php?id=" . $row["id"] . "''>Edit</a> | ";
        echo "<a href='delete_fee.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this fee structure data?');\">Delete</a>";
        echo "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No fee structure data found.</td></tr>";
}
echo "</table>";



// Close the database connection
mysqli_close($conn);
?>

<head>
    <style>
        .add-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 100px;
            margin-left: 1000px;
            cursor: pointer;
        }

        .add-btn i {
            margin-right: 5px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            position: fixed;
            left: 450px;
            top: 200px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: black;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Sb5+VNx5vMq/d3zHrMxE8PAaI9vCQ2ybjkgRfUMdu8WwU+zv6UzKLZUahB6py8W6wwXp+rNFzJyoyiECcQyzwQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-lW8BkDqmk7LehhZv+tF5bW8lX9C5RUsVOyvjqDjNZm8zgF/QMmRwPjHn6UW/m6U9Y6nJh2SfszN+NRQ2tvTzPw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<a href="#">
    <button class="btn add-btn" onclick="openForm()"><i class="fa fa-plus"></i> NEW</button>
</a>

