<?php
include 'connection.php';
include 'user_message_dashboard.php';
include 'fee-form.php';

// Retrieve the fee structure data from the database
$sql = "SELECT * FROM fees";
$result = mysqli_query($conn, $sql);

// Output the fee structure data in a table
echo "<table>";
echo "<tr><th>PARTICULARS</th><th>AMOUNT</th></tr>";
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["particulars"] . "</td><td>" . $row["amount"] . "</td><td>";
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

</head>



