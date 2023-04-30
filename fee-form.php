<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fee-form.css">
</head>
<body>
    <div class="form-popup" id="add-fee-form">
    <form action="" method="POST" class="form-container">
        <h2>Add New Fee Structure</h2>
        <label for="fee_name"><b>PARTICULARS</b></label>
        <input type="text" placeholder="Enter fee name" name="particulars" required>

        <label for="amount"><b>AMOUNT</b></label>
        <input type="number" placeholder="Enter amount" name="amount" required>

        <button type="submit" name="submit" class="btn">Add Fee</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("add-fee-form").style.display = "block";
        }

        function closeForm() {
            document.getElementById("add-fee-form").style.display = "none";
        }
    </script>
</body>
</html>