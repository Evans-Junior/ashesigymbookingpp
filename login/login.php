<?php require_once '../settings/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container">
    <div class="login-form">
        <h1>Login</h1>
        <form class="user" action="../action/login_action.php" method="POST" name="loginForm" id="loginForm">
            <div class="input-wrapper">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="input-wrapper">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="signup-link"><a href="../login/signup.php">Don’t have an account? Sign Up here</a></div>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    // Get the email input value
    var email = document.getElementById('email').value;

    // Check if the email ends with "@ashesi.edu.gh"
    if (!email.endsWith('@ashesi.edu.gh')) {
        // Prevent form submission
        event.preventDefault();
        
        // Display SweetAlert2 alert for invalid email
        Swal.fire({
            icon: 'error',
            title: 'Invalid Email Address',
            text: 'Please use your @ashesi.edu.gh email address.'
        });
    }
});
</script>

</body>
</html>
