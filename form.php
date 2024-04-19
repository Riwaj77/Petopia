<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #f0f0f0;
      border-radius: 10px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], input[type="tel"], input[type="date"], textarea, select, input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="customerName">Customer Name:</label>
        <input type="text" id="customerName" name="customerName" required><br>
        
        <label for="orderedType">Ordered Type:</label>
        <select id="orderedType" name="orderedType" required>
            <option value="Pick-up">Pick-up</option>
            <option value="COD">COD</option>
        </select><br>
        
        <label for="datePickup">Date Pick-up:</label>
        <input type="date" id="datePickup" name="datePickup" required><br>
        
        <label for="dateOrder">Date Order:</label>
        <input type="text" id="dateOrder" name="dateOrder" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br>
        
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" required><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br>
        
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="new" readonly><br>
        
        <input type="submit" value="SUBMIT">
    </form>
  </div>
</body>
</html>
..