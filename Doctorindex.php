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
</body>
<html>