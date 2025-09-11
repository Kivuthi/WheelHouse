<?php
include "db.php";

$username = $company = $email = $password = $role = "";
$usernameErr = $companyErr = $emailErr = $passwordErr = $roleErr = "";
$success;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username validation
    if (empty($_POST["username"])) {
        echo $usernameErr = "Name required";
    } else {
        $username = htmlspecialchars($_POST("username"));
    }

    // company validation
    if (empty($_POST["company"])) {
        echo $companyErr = "Company required";
    } else{
        $company = $_POST["company"];
    }

    // email validation
    if (empty($_POST["email"])) {
        $emailErr = "email required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else{
        $email = $POST_["email"];
    }

    // password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password required";
    } elseif (strlen("$password") < 6) {
        $passwordErr = "Password sshould be at least 6 characters";
    } else {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    // role validation
    if (empty($_POST["role"])) {
        $roleErr = "Select a role";
    } else {
        $role = $_POST["role"];
    }

    // save to db
    if ($usernameErr == "" && $companyErr == "" && $emailErr == "" && $passwordErr == "" && $roleErr == "") {
        $sql = "INSERT INTO WheelHouse (username, company, email, password, role) VALUES('$username', '$company', '$email', '$password', '$role')";
    }

    // connectiong
    if ($conn->query($sql) === TRUE) {
        $success = "Registration Successful";
    } else {
        $success = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="dashboards/style.css">
</head>
<body>
    
</body>
</html>