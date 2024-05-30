<?php
$Email = $password = "";
$EmailErr = $passwordErr = $EmailErrXPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) && empty($_POST["password"])) {
        $EmailErrXPasswordErr = "Email & Password are required";
    } else {
        if (empty($_POST["email"])) {
            $EmailErr = "Email is required";
        } else {
            $Email = $_POST["email"];
        }
        
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = $_POST["password"];
        }
    }

    if (empty($EmailErrXPasswordErr) && empty($EmailErr) && empty($passwordErr)) {
        include("Connections.php");
        $check_email = mysqli_query($Connections, "SELECT * FROM login_tbl WHERE email = '$Email'");
        $check_email_row = mysqli_num_rows($check_email);

        if ($check_email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_email)) {
                $db_password = $row["password"];
                $db_Account_type = $row["Account_type"];

                if ($db_password == $password) {
                    session_start();
                    $_SESSION['email'] = $Email;
                    $_SESSION['Account_type'] = $db_Account_type;
                    
                    if ($db_Account_type == "1") {
                        header("Location:admin.php");
                        exit();
                    } else {
                        header("Location:user.php");
                        exit();
                    }
                } else {
                    $passwordErr = "Password is incorrect";
                }
            }
        } else {
            $EmailErr = "Email is not registered";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login form</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/login.css" />      
    </head>

    <style>
        main{
            background-color: palevioletred;
        }

    .error{
    margin-top: -20px;
    text-align: center;
    color: maroon;
    }

    </style>
    <body>
<main>
    <header>
        <h4>Login</h4>
    </header>

    

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <div class="error">
            <span><?php echo $EmailErr; ?></span>
            <span><?php echo $passwordErr; ?></span>
            <span><?php echo $EmailErrXPasswordErr; ?></span>
    </div>

        <div class="form_wrapper">
            <input id="email" type="text" name="email" value="<?php echo $Email; ?>">
            <label for="email">Email</label>
            <i class='bx bxs-user'></i>
        </div>
        <div class="form_wrapper">
            <input id="password" type="password" name="password" value="<?php echo $password; ?>">
            <label for="password">Password</label>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember_box">
            <div class="remember">
                <input type="checkbox">
                Remember me
            </div>
            <a href="forgotpass.php">Forgot Password ?</a>
        </div>   
        <input type="submit" value="Login">
        <div class="new_account">
            Don't have account ? <a href="Register.php">Register here</a> 
        </div>
    </form>