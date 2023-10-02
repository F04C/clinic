<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <link rel ="stylesheet" type = "text/css" href = "styles.css">
    <link href = "https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel = "stylesheet">
    </div> <script src="script.js"></script>

</head>
<body class = "">
    <div class ="main">
        <input type = "checkbox" id ="chk" aria-hidden = "true">
        <div class = "signup">
            <form action ="register.php" method = "POST">
                <label class ="label" for = "chk" aria-hidden="true">Login</label>
                <input class = "input" type = "text" name="registerusername" placeholder = "Username" required>
                <input class = "input" type = "Password" name="registerpassword" placeholder = "Password" required>
                <button class = "button" name = "btnSignup">Login</button>
                <?php
                if (isset($_GET["msg"])) 
                {
                    $msg = $_GET["msg"];
                    echo '<p class="message" style = "text-align:center">' . $msg . '</p>';
                }
                ?>
            </form>
        </div>
        <div class = "login">

            <form action = "userlogin.php" method = "POST"> 
                <label class ="label" for = "chk" aria-hidden="true">DOC LOGIN</label>
                <input class = "input" type = "text" name="username" placeholder = "Username" required>
                <input class = "input" type = "Password" name="password" placeholder = "Password" required >
                <button class = "button" name = "btnLogin">Login</button>
                <br>
            </form>
         
        </div>
    </div>

    </div>
    </div>
</div>
</div>

</body>
</html>
