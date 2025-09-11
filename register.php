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
        $username = htmlspecialchars($_POST["username"]);
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
        echo $email = "email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else{
        $email = $_POST["email"];
    }

    // password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password required";
    } elseif (strlen($_POST["password"])<6) {
        $passwordErr = "Password should be at least 6 characters";
    } else {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    // role validation
    if (empty($_POST["role"])) {
        $roleErr = "Select a role";
    } else {
        $role = $_POST["role"];
    }

        $sql = "INSERT INTO users (username, company, email, password, role, status) 
        VALUES('$username', '$company', '$email', '$password', 'seller', 'pending')";

        if ($conn->query($sql) === TRUE) {
           header("Location: login.php");
           exit();
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
    
    <form method="POST" class="form" id="signupForm">
        <h2>Sign Up</h2>
        <input type="text" placeholder="Name" name="username" required />
         <span style="color:red;"><?php echo $usernameErr; ?></span>

        <input type="text" placeholder="Company" name="company" required>
         <span style="color:red;"><?php echo $companyErr; ?></span>

        <input type="email" placeholder="Email" name="email" required />
         <span style="color:red;"><?php echo $emailErr; ?></span>

        <input type="password" placeholder="Password" name="password" required />
         <span style="color:red;"><?php echo $passwordErr; ?></span>

        <div class="role-section">
            <label for="role">Role:</label><br><br>
            <label>
                <input type="radio" name="role" value="seller" required /> Seller
                 <span style="color:red;"><?php echo $roleErr; ?></span><br><br>
            </label>
            <label>
                <input type="radio" name="role" value="buyer" required /> Buyer
                 <span style="color:red;"><?php echo $roleErr; ?></span><br><br>
            </label>
        </div>

        <button type="submit">Register</button>
    </form>
    <?php if (!empty($success)) echo "<h3 style='color:green;'>$success</h3>"; ?>
</body>
</html>