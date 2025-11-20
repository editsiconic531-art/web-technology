<?php
$name = $_POST['Name'] ?? '';
$phone = $_POST['Phone'] ?? '';
$pizza = $_POST['Pizza'] ?? '';
$address = $_POST['Address'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="section">
  <div class="container">
    <h2 class="section-title">Order Received</h2>

    <div class="order-grid">
      <div class="order-info" style="grid-column: span 2;">
        <h3>Thank You, <?= htmlspecialchars($name) ?>! 🎉</h3>

        <p><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></p>
        <p><strong>Pizza Ordered:</strong> <?= htmlspecialchars($pizza) ?></p>
        <p><strong>Delivery Address:</strong><br> <?= nl2br(htmlspecialchars($address)) ?></p>

        <p style="margin-top:15px; color:#9aa6b2">Your delicious pizza will arrive in 30–45 mins!</p>

        <a href="index.html" class="btn" style="margin-top:20px; display:inline-block;">Back to Home</a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
