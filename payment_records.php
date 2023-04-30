    <?php
        //Include the database connection file
        include 'connection.php';
        include 'admin_message_dashboard.php';
    
        // Select all records from the payment table
        $sql = "SELECT * FROM payments";
        $result = mysqli_query($conn, $sql);

        //output the payment records in a table
        echo "<table>";
        echo "<tr><th>REG. NUMBER</th><th>NAME</th><th>AMOUNT</th><th>PAYMENT METHOD</th><th>DATE PAID</th></tr>";
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["registration_number"] . "</td><td>" . $row["name"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["payment_method"] . "</td><td>" . $row["created_at"]  . "</td><td>";
                echo "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No payment record found.</td></tr>";
        }
        echo "</table>";
    
        // Close the database connection
        mysqli_close($conn);
    ?>
        
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 70%;
                position: fixed;
                left: 310px;
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
