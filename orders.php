<?php
include "db.php";
$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Placed Orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>📌 Placed Orders</h1>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
</header>

<div style="padding:20px;">
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; background:white;">
        <tr style="background:brown; color:white;">
            <th>ID</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Order Time</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["customer_name"]; ?></td>
            <td><?php echo $row["item_name"]; ?></td>
            <td>₹<?php echo $row["price"]; ?></td>
            <td><?php echo $row["quantity"]; ?></td>
            <td>₹<?php echo $row["total_price"]; ?></td>
            <td><?php echo $row["order_time"]; ?></td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>
