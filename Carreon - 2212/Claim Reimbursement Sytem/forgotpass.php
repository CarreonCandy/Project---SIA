<?php
$Email = $password = "";
$EmailErr = $passwordErr = "";
$accountType = ""; // Variable to store the selected account type

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    $accountType = $_POST["Account_type"];

    if (empty($EmailErr) && empty($passwordErr)) {
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
        <link rel="stylesheet" href="css/forgotpass.css" />      
    </head>
    <body>
<main>
    <header> 
        <h4>Forgot Password</h4>
    </header>
    <form>
        <div class="form_wrapper">
            <input id="input" type="text" required>
            <label for="input">Email</label>
        </div>
        <div class="form_wrapper">
            <input id="password" type="text" required>
            <label for="password">Enter Code</label>
        </div>
        <a href="Register.php" class="styled-button">
            <button type="button">Register</button>
        <a href="login.php" class="styled-button">
            <button type="button">Login</button>
    </form>
</main>
    </body>
</html>                                                                                 