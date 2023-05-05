<?php
session_start();
$nam = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");
$found = false;
$ctr = 3;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyyyAppp</title>
    <style>
        #login-panel {
            width: 35%;
            border-radius: 20px;
            background-color: white;
            align-items: center;
            text-align: center;
            margin: auto;

        }

        #container {
            margin-top: 200px;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            width: 20%;
        }

        .input {
            width: 100%;
            height: 50px;
            margin: 3px 0;
            border-radius: 10px;
            padding: 12px 20px;
            box-sizing: border-box;

        }

        form {
            margin-top: 30px;
            padding: 16px;
        }

        .button {
            width: 150px;
            height: 50px;
            background-color: #16A085;
            border-radius: 15px;
            border: solid;
            border-color: #16A085;
            color: white;
            margin-bottom: 10px;
            margin-top: 5px;
            font-size: 17px;
        }


    </style>
</head>

<body style="background-color:#CFE8E7;">

    <div id="container">
        <div id="login-panel">
            <img src="img/robot.png">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
                <input type="email" class="input" name="email" id="email" placeholder="Email Adress"><br><br>
                <input type="password" class="input" name="password" id="password" placeholder="Password"><br>
                <input type="submit" class="button" name="submit" value="Sign In">
                <input type="reset" class="button" value="Clear">
            </form>

        </div>

    </div>

</body>

</html>
<?php
if (isset($_GET['submit'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    if ($email != $found && $password != $found) {
        for ($i = 0; $i < 3; $i++) {
            if ($email == $ema[$i] && $password == $pas[$i]) {
                header('Location: profile.php?nam=' . $nam[$i]);
                $_SESSION['name'] = $nam[$i];
                break;
            }else if($email != $ema[$i] && $password != $pas[$i]){
                header('Location: register.html');            
            }
        }
    }
}

?>