<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign up</title>
    <link rel ="stylesheet" type = "text/css" href = "styless.css">
    <link href = "https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel = "stylesheet">
</head>
<body class = "">
    <div class ="main">
        <input type = "checkbox" id ="chk" aria-hidden = "true">
        <div class = "signup">
            <form action = "login.html">
                <label class ="label" for = "chk" aria-hidden="true">Sign up</label>
                <input class = "input" type = "text" name="txt" placeholder = "User name" required>
                <input class = "input" type = "Password" name="pswd" placeholder = "Password" required>
                <button class = "button" >Sign up</button>
            </form>

        </div>
        <div class = "login">
            <form action = "index.html"> 
                <label class ="label" for = "chk" aria-hidden="true">Login</label>
                <input class = "input" type = "text" name="username" placeholder = "Username" required>
                <input class = "input" type = "Password" name="password" placeholder = "Password" required >
                <button class = "button">Login</button>
            </form>
        </div>
    </div>
</body>
</html>