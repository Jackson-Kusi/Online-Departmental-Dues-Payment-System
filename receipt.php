<?php
    include 'connection.php';
    include 'user_message_dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
	<!-- Include the CSS styles for the receipt -->
	<style>
		.receipt {
			font-family: Arial, sans-serif;
			border: 1px solid #ccc;
			padding: 20px;
			margin: 20px auto;
			width: 400px;
            border: 2px solid black;
            margin-top: 150px;
		}

		.receipt h1 {
			font-size: 24px;
			margin-top: 550px;
		}

		.receipt p {
			font-size: 16px;
			margin: 10px 0;
		}

		.receipt table {
			border-collapse: collapse;
			width: 100%;
		}

		.receipt th,
		.receipt td {
			border: 1px solid #ccc;
			padding: 8px;
			text-align: left;
		}

		.receipt th {
			background-color: #f2f2f2;
		}

		.receipt tfoot td {
			font-weight: bold;
		}
        .receipt-btn {
            margin-left: 600px;
            padding: 10px;
            background-color: #031435;
            border: none;
            color: white;
            font-size: 18px;
        }

        .total {
            font-weight: bold;
           
        }
        
	</style>
</head>
<body>
    
	<?php

        

		// Generate a random 10-digit number as the receipt number
		$receiptNumber = rand(1000000000, 9999999999);

		// Retrieve data from database or file
		$sql = "SELECT * FROM fees";
        $result = mysqli_query($conn, $sql);

        echo '<div class="receipt">';
        echo "<p>Receipt Number: $receiptNumber</p>";

        echo "<table>";
        echo "<tr><th>PARTICULARS</th><th>AMOUNT</th></tr>";
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["particulars"] . "</td><td>" . $row["amount"] . "</td><td>";
                echo "</td></tr>";
                echo '<tr><td colspan="2">';
        }
        } else {
            echo "<tr><td colspan='3'>No fee structure data found.</td></tr>";
        }
        echo "</table>";
        echo '<p class ="total">Total: GHC 100</p>';
        echo "</div>";

	?>

	
	<button class= "receipt-btn" onclick="printReceipt()">Print Receipt</button>

	<!-- Include the jsPDF library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

	<script>
		function printReceipt() {
			// Print the receipt in the browser
			window.print();
			
			// Generate a PDF version of the receipt
			var doc = new jsPDF();
			doc.fromHTML(document.getElementById('receipt'), 10, 10);
			doc.save('receipt.pdf');
		}
	</script>
</body>
</html>
