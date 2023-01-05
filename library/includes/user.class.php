<?php

class user
{
    public static function signup($name, $pass, $email, $phnumber)
    {
        
        $conn=database::connection();
        try {
            $sql = "INSERT INTO `authentication` (`USERNAME`, `PASSWORD`, `EMAIL`, `PHONE NUMBER`, `BLOCKED`, `ACTIVE`)
        VALUES ('$name', '$pass', '$email', '$phnumber', '0', '1')";
            $result =false;
    
            if ($conn->query($sql) === false) {
                // echo "New record created successfully";
                 return $result=false;
                throw new Exception();
            } else {
                // echo "Error: " . $sql . "<br>" . $conn->error;
                 return $result=true;
            }
        } catch(Exception $e) {
            // return $conn->error;
        }
    
    
            $conn->close();
        //return $result;
        // print($result);
    }
}
