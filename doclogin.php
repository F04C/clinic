<?php
    require 'dbconn.php';   

    if(isset($_POST['btnDocLogin']))
    {

            $usernameInput = $_POST['docusername'];
            $userpassInput = $_POST['docpassword'];

            $sql = "SELECT * FROM tbldoctor  where username = '".$usernameInput."' and password = '".$userpassInput."';";
            if($conn)
            {    
                try{
                    $executeSQL = mysqli_query($conn, $sql);
                    
                    if($executeSQL)
                    {
                        $numRows = mysqli_num_rows($executeSQL);
                        if($numRows == 1)
                        {
                            $record = mysqli_fetch_assoc($executeSQL);

                            session_start();
                            $_SESSION['username'] = $record['username'];
                            $_SESSION['userid'] = $record['userid'];

                            header('Location: doctorindex.php');
                        }
                        else
                        {
                            echo "No user found!";
                        }
                    }
                    else
                    {
                        echo "There is an error. Please try again";
                    }
                }catch(Exception $e)
                {
                    echo 'Error' . $e;
                }
            
            } 
                else
            {
            }
    }

    else{
        echo "";
    }

?>