<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer_name = $_POST["customer_name"];
    $item_name = $_POST["item_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    $total_price = $price * $quantity;

    $sql = "INSERT INTO orders (customer_name, item_name, price, quantity, total_price)
            VALUES ('$customer_name', '$item_name', '$price', '$quantity', '$total_price')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Order Placed Successfully!</h2>";
        echo "<p>Customer: $customer_name</p>";
        echo "<p>Item: $item_name</p>";
        echo "<p>Total: ₹$total_price</p>";
        echo "<br><a href='menu.php'>Order More</a> ";
        echo "<a href='orders.php'>View Orders</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
