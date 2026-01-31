<!DOCTYPE html>
<html>
<head>
    <title>Cafe Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>🍽 Cafe Menu</h1>
    <a href="index.php">Home</a>
    <a href="orders.php">View Orders</a>
</header>

<div class="menu">

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC47MbST6T1iMgXvUGVGx1MQ-w2rU53bghsw&s">
        <h3>Coffee</h3>
        <p>₹50</p>
        <form action="order.php" method="POST">
            <input type="hidden" name="item_name" value="Coffee">
            <input type="hidden" name="price" value="50">
            Quantity: <input type="number" name="quantity" value="1" min="1"><br><br>
            Customer: <input type="text" name="customer_name" required><br><br>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXEy4J3YXxOs3y5lWoaH-5NNXgFw36XLhUSw&s">
        <h3>Tea</h3>
        <p>₹30</p>
        <form action="order.php" method="POST">
            <input type="hidden" name="item_name" value="Tea">
            <input type="hidden" name="price" value="30">
            Quantity: <input type="number" name="quantity" value="1" min="1"><br><br>
            Customer: <input type="text" name="customer_name" required><br><br>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrH9eas4E07MOQPp5KNfmaNnPetwz1WJ34UQ&s">
        <h3>Cake</h3>
        <p>₹80</p>
        <form action="order.php" method="POST">
            <input type="hidden" name="item_name" value="Cake">
            <input type="hidden" name="price" value="80">
            Quantity: <input type="number" name="quantity" value="1" min="1"><br><br>
            Customer: <input type="text" name="customer_name" required><br><br>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiRJA8g0r74bqrkcU9zrr0S12HYcnpmFynZQ&s">
        <h3>Sandwich</h3>
        <p>₹60</p>
        <form action="order.php" method="POST">
            <input type="hidden" name="item_name" value="Sandwich">
            <input type="hidden" name="price" value="60">
            Quantity: <input type="number" name="quantity" value="1" min="1"><br><br>
            Customer: <input type="text" name="customer_name" required><br><br>
            <button type="submit">Order</button>
        </form>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCvjbA39Pw3ZpndWbDD9WwtpX9T6D5r91OKA&s">
        <h3>Juice</h3>
        <p>₹40</p>
        <form action="order.php" method="POST">
            <input type="hidden" name="item_name" value="Juice">
            <input type="hidden" name="price" value="40">
            Quantity: <input type="number" name="quantity" value="1" min="1"><br><br>
            Customer: <input type="text" name="customer_name" required><br><br>
            <button type="submit">Order</button>
        </form>
    </div>

</div>

</body>
</html>
