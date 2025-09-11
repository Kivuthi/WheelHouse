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
                setcookie("username", $user["name"], time() + 3600, "/");
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
