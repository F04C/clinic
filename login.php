<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <link rel ="stylesheet" type = "text/css" href = "styles.css">
    <link href = "https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel = "stylesheet">
</head>
<body class = "">
    <div class ="main">
        <input type = "checkbox" id ="chk" aria-hidden = "true">
        <div class = "signup">
            <form action ="seclogin.php" method = "POST">
                <label class ="label" for = "chk" aria-hidden="true">Secretary</label>
                <input class = "input" type = "text" name="secusername" placeholder = "Username" required>
                <input class = "input" type = "Password" name="secpassword" placeholder = "Password" required>
                <button class = "button" name = "btnSecLogin">Login</button>
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
            <form action = "doclogin.php" method = "POST"> 
                <label class ="label" for = "chk" aria-hidden="true">Doctor</label>
                <input class = "input" type = "text" name="docusername" placeholder = "Username" required>
                <input class = "input" type = "Password" name="docpassword" placeholder = "Password" required >
                <button class = "button" name = "btnDocLogin">Login</button>
                <br>
            </form> 
        </div>
    </div>
</div>
</div>

</body>
</html>
