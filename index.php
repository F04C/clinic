<?php
include "dbconn.php";

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="medicallogo.png" alt="Your Clinic Logo">
        </div>
        <div class="search-bar">
            <form action="patientsearchrecord.php" method="get">
                <input type="text" name="patientQuery" id = "searchPatient" placeholder="Search LAST NAME...">
                <button type="submit" name = "patientsearchBtn">Search</button>
            </form>
        </div>
        <button class="logout-button" onclick="location.href='logout.php'">Logout</button>
    </header>
    <br>
<nav>        
      <li><a href="/patientrecord.php">Patient Records</a></li>
</nav>

    <br><br>
    <br><br>

        <fieldset class="custom-fieldset">
            <legend><h1><b>Patient Information</b></h1></legend>

            <div class="nameage">
                <label for="firstName">First Name:</label>
                <input class  type="text" id="firstName" name ="fname" placeholder="First Name">
            </div>

            <div class="nameage">
                <label for="middleName">Middle Name:</label>
                <input type="text" id="middleName" name ="mname" placeholder="Middle Name">
            </div>

            <div class="nameage">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name ="lname" placeholder="Last Name">
            </div>

            <div class="nameage">
                <label for="age">Age:</label>
                <input type="text" id="age" name ="pAge" pattern="[0-9]+"  onkeypress="return isNumber(event)">
            </div>
<br>
            <div class="between3">
                <label for="sex">Sex:</label>

                <input type="radio" name="sex" id="male" value="male" checked>
                <label for="male">Male</label>
                <input type="radio" name="sex" id="female" value="female">
                <label for="female">Female</label>
                
            </div>
<br>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name = "pAddress">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name ="pPhone">
            </div>

            <div class="form-group">
                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" id="dateOfBirth" name = "pDOB">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name = "pDesc"></textarea>
            </div>

            <button class = "patientbutton" name = "btnAddPatient"> Add Patient </button>
        </fieldset>   
</body>



<!--
// doctor form separate index.php for doctor
// medicine.php -->
</html>



