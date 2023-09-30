<?php
    require 'dbconn.php';   

    if(isset($_GET['patientsearchBtn']))
    {
        $patientLastName = $_GET['patientQuery'];
        
        $patientSQLQuery = "SELECT * FROM clinic.tblpatient where lname LIKE '$patientLastName';";

            if($conn)
            {
                try{
                    $lnameExecute = mysqli_query($conn, $patientSQLQuery);
                    
                    if($lnameExecute)
                    {
                        $numRows = mysqli_num_rows($lnameExecute);
                        if($numRows > 0)
                        {
                            //echoed the patient's details
                            //find a way to put it on the textfields on index.php
                            while ($record = mysqli_fetch_assoc($lnameExecute)) {
                                foreach ($record as $key => $value) {
                                    echo $key . ": " . $value . "<br>";
                                }
                                echo "<br>";
                            }
                        }
                        else
                        {
                            echo "No patient found!";
                            //create a div in index.php to display that there is no patient found in the database
                            //maybe under the textbox of search
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