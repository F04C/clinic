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
            <form action ="register.php" method = "POST">
                <label class ="label" for = "chk" aria-hidden="true">Sign up</label>
                <input class = "input" type = "text" name="registerusername" placeholder = "Username" required>
                <input class = "input" type = "Password" name="registerpassword" placeholder = "Password" required>
                <button class = "button" name = "btnSignup">Sign up</button>
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
                <label class ="label" for = "chk" aria-hidden="true">Login</label>
                <input class = "input" type = "text" name="username" placeholder = "Username" required>
                <input class = "input" type = "Password" name="password" placeholder = "Password" required >
                <button class = "button" name = "btnLogin">Login</button>
                <br>
                <button class="buttonDC" name="doctorlogin" onclick="openDoctorLoginModal()">Doctor Login</button>
            </form>
            
        </div>
    </div>
    <div id="doctorLoginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal" onclick="closeDoctorLoginModal()">&times;</span>
            <h2>Doctor Login</h2>
            <form action="doctorlogin.php" method="POST">
                <input type="text" name="doctorUsername" placeholder="Doctor Username" required>
                <input type="password" name="doctorPassword" placeholder="Doctor Password" required>
                <button type="submit" name="btnDoctorLogin">Login</button>
            </form>
        </div>
    </div>
    <script>
        // Function to open the Doctor Login modal
        function openDoctorLoginModal() {
            var modal = document.getElementById('doctorLoginModal');
            modal.style.display = 'block';
        }

        // Function to close the Doctor Login modal
        function closeDoctorLoginModal() {
            var modal = document.getElementById('doctorLoginModal');
            modal.style.display = 'none';
        }
    </script>
    
</body>
</html>
