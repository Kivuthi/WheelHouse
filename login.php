<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // check wit db
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // pass verify & session
        if (password_verify($password, $user["password"])) {
            $_SESSION["username"] = $user["name"];

            // cookie
            if (isset($_POST["remember"])) {
                setcookie("username", $user["name"], time() + 900, "/");
            }

            // role redirect
            if ($user["role"] === 'admin') {
                header("Location: dashboards/admin.php");

            } elseif ($user["role"] === 'seller') {
                header("Location: dashboards/seller.php");

            } else {
                header("Location: dashboards/index.php");
            }
           
            exit();
        } else {
            $error = "Wrong Password";
        }
    } else {
        $error = "Invalid Email";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dashboards/style.css">
</head>
<body>
    <form id="login" method="POST" class="login-form">
        <div class="title">
            <h1 style="color: #1e3a8a; text-align:center;">LOGIN</h1>
        </div>
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Passsword" name="password" required>
        <div class="role">
            <label for="role">
                <input type="radio" name="role" value="seller">
                Seller
            </label>
        </div>
        <div class="remember">
            <label for="remember">
                <input type="checkbox" name="remember" value="remember">
                Remember me
            </label>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>