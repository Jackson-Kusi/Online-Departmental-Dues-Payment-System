<?php
  include "user_message_dashboard.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CITSA-DUES-PAYMENT</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        padding: 0;
        margin: 0;
      }
      .instruct-para {
        margin-top: 80px;
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 10px;
      }
      .btn-instruction {
        background-color: #031435;
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      }
      .btn-instruction:hover {
        background-color: #3e8e41;
      }
      .hr-instruct {
        margin: 20px 0;
        border: none;
        border-bottom: 1px solid #ccc;
      }
      #instructions {
        font-size: 18px;
        margin-left: 300px;
        white-space: pre-line;
        line-height: 1.5;
      }
    </style>
    <script>
      function showInstructions(operator) {
        var instructions;
        if (operator === 'MTN') {
          instructions = 'To pay with MTN MoMo:\n1. Dial *170#\n2. Select Option 1: Transfer Money\n3. Select Option 1: MoMo User\n4. Enter 0593255770\n5. Enter the amount\n6. Enter your Index Number as your reference\n7. Enter your PIN to confirm';
        } else if (operator === 'TIGO') {
          instructions = 'To pay with Tigo Cash:\n1. Dial *501#\n2. Select Option 1: Send Money\n3. Enter 0263255770\n4. Enter the amount\n5. Enter your Index Number as your reference\n6.  Enter your PIN to confirm';
        } else if (operator === 'VODAFONE') {
          instructions = 'To pay with Vodafone Cash:\n1. Dial *110#\n2. Select Option 1: Send Money\n3. Enter 0501954238\n4. Enter the amount\n5. Enter your Index Number as your reference\n6. Enter your PIN to confirm';
        }
        document.getElementById('instructions').innerText = instructions;
      }
    </script>
  </head>
  <body>
    <div class= "instruct-div" style="text-align: center;">
      <p class= "instruct-para">PAYMENT INSTRUCTIONS</p>
      <button class= "btn-instruction" onclick="showInstructions('MTN')">MTN</button>
      <button class= "btn-instruction" onclick="showInstructions('TIGO')">AIRTELTIGO</button>
      <button class= "btn-instruction" onclick="showInstructions('VODAFONE')">VODAFONE</button>
    </div>
    <hr class="hr-instruct">
    <div id="instructions"></div>
  </body>
</html>
