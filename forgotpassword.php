<?php
// Initialize the session
session_start();

// Include necessary files (e.g., database connection)
// require_once "config.php";

// Define variables and initialize with empty values
$email = $email_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if there are no validation errors
    if (empty($email_err)) {
        // Generate a unique token (you may need to adjust the token generation method)
        $token = bin2hex(random_bytes(32));

        // Store the token in the database with the associated email
        // $sql = "UPDATE users SET reset_token = :token WHERE email = :email";
        // Execute the SQL query (make sure to use prepared statements)

        // Send a password reset email to the user
        $subject = "Password Reset Request";
        $message = "Dear user,\n\nTo reset your password, click on the following link:\n\n";
        $message .= "http://yourwebsite.com/reset-password.php?token=" . $token;
        $message .= "\n\nIf you did not request a password reset, please ignore this email.";
        
        // Use appropriate headers (e.g., "From", "Content-Type", etc.)
        $headers = "From: webmaster@example.com";

        // Send the email
        // mail($email, $subject, $message, $headers);

        // Redirect to a confirmation page
        header("location: forgot-password-confirm.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="loginassets/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(loginassets/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signin-form" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="inputUsername" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" name="inputPassword" placeholder="Password" required>
								<span toggle="#password-field" class="far fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3" name="btnSignin">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="forgotpassword.php" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<h5 id="contactAdminMsg" class="mb-4 text-center <?php echo isset($_GET["userNotFound"]) ? '' : 'd-none'; ?>" style="color: #ffff;">Contact administrator if you don't have an account.</h5>
					</div>
				</div>
			</div>
	</section>






    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="error"><?php echo $email_err; ?></span>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
