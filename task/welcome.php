<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            background-image: url('welcome.jpg');    
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    
</head>
<body>
    <div class="wel">
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">Blog</a> &nbsp;&nbsp;
            <a href="product.php">Product</a> &nbsp;&nbsp;
            <a href="logout.php">Logout</a></h3>
    </div>
</body>
</html>