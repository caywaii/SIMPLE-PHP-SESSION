<?php 
session_start();
if(!isset($_SESSION['name'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyyyAppp</title>
</head>
<body>
    <h3 align="right">Welcome!, <?php echo $_SESSION['name'];?></h3>
    <h1>Profile Page</h1>
    <a href='product.php'>Product</a>
    <a href='log.php'>Logout</a>
</body>
</html>