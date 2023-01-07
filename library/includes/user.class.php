<?php

class user
{
    public static function signup($name, $pass, $email, $phnumber)
    {
        $conn=database::connection();
        $pass=md5($pass);
        try {
            $sql = "INSERT INTO `authentication` (`USERNAME`, `PASSWORD`, `EMAIL`, `PHONE NUMBER`, `BLOCKED`, `ACTIVE`)
        VALUES ('$name', '$pass', '$email', '$phnumber', '0', '1')";
            $result =false;

            if ($conn->query($sql) === false) {
                // echo "New record created successfully";
                return $result=$conn->error;
                throw new Exception();
            } else {
                // echo "Error: " . $sql . "<br>" . $conn->error;
                return $result=true;
            }
        } catch(Exception $e) {
            // return $conn->error;
        }



        //return $result;
        // print($result);
    }

    public static function login($mail, $pass)
    {
        $conn=database::connection();
        $sql = "SELECT * FROM `authentication` WHERE `EMAIL` = '$mail'";
        try {
            $resultlogin = $conn->query($sql);
            throw new Exception();
        } catch(Exception $e) {
        }
        print_r($resultlogin);
        if ($resultlogin->num_rows==1) {
            $resarr = $resultlogin->fetch_assoc();
            if ($resarr['PASSWORD'] === md5($pass)) {
                return $resarr;
            // throw new Exception();
            } else {
                return false;
            }
        } else {
            return false;
        }


        // print_r($resarr);
        // echo $resarr['PASSWORD'];
        //print(md5($pass));
        // try{

        // }
        // catch(exception $e){
        //         print("error");
        // }


        // $conn->close();
    }
}
