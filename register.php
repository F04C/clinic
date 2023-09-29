<?php
    require 'dbconn.php';   

    if(isset($_POST['btnSignup']))
    {   
        //variables
        $usernameInput = $_POST['registerusername'];
        $userpassInput = $_POST['registerpassword'];

        //check database if there already exists a username
        $checksql = "SELECT * FROM tblsec WHERE username = '$usernameInput'";
        $checkSQL = mysqli_query($conn, $checksql);
        if($conn)
        {
            try
            {
                $checkSQL;
                if($checkSQL)
                {
                    $numRows = mysqli_num_rows($checkSQL);
                    if($numRows == 1)
                    {
                        header("Location: login.php?msg=Username already exists");
                    }
                    else
                    {
                        $insertsql = "INSERT INTO tblsec (username, password) VALUES ($usernameInput, $userpassInput)";

                        if($insertsql)
                        {
                            header("Location: login.php?msg=User registered successfully. Please Login.");
                        }
                        else
                        {
                            header("Error registering the user. Please try again.");
                        }
                    }
                }
                else
                {
                    echo "There is an error. Please try again";
                }
            }
            catch(Exception $e)
            {
                echo 'Error' . $e;
            }
        }
    }
?>