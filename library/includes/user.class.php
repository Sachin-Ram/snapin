<?php

class user
{
    // private $conn=null;
    public static function signup($name, $pass, $email, $phnumber)
    {
        $conn=database::connection();
        //$pass=md5($pass);
        $clock=[
            'cost'=>7
        ];
        $pass=password_hash($pass, PASSWORD_BCRYPT, $clock);
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
        //print_r($resultlogin);
        if ($resultlogin->num_rows==1) {
            $resarr = $resultlogin->fetch_assoc();
            if (password_verify($pass, $resarr['PASSWORD'])) {
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
    public function __construct($username)
    {
        //if($this->conn==null)
        $this->conn=database::connection();
        $this->username=$username;
        try {
            $sql="SELECT * FROM `authentication` WHERE `USERNAME` = '$this->username'";
            $result=$this->conn->query($sql);
            if ($result->num_rows==1) {
                $arr=$result->fetch_assoc();
                //echo $arr["USERNAME"];
                $this->id=$arr['ID'];  //fetching the user id which is the foreign key
                //echo $this->id;
            } else {
                throw new Exception();
            }
        } catch(Exception $e) {
            echo "username not found";
        }
    }


    public function authenticate()
    {
    }


    public function setdata($row, $data)
    {
        if (!$this->conn) {
            $this->conn=database::connection;
        }
        $sql=" UPDATE `users` SET `$row` ='$data' WHERE `ID` = '$this->id';";
        //$sql = "UPDATE `users` SET `$var`='$data' WHERE `id`='$this->id';";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function getdata($row)
    {
        if (!$this->conn) {
            $this->conn=database::connection;
        }
        $sql="SELECT `$row` FROM `users` WHERE `ID` = '$this->id'";  //fetching data from the db using the col name
        $result=$this->conn->query($sql);
        if ($result->num_rows) {
            $val=$result->fetch_assoc();
            return $val["$row"];
        } else {
            return null;
        }
    }

    public function setfirstname($name)
    {
        return $this->setdata("FIRST NAME", $name);
    }
    public function getfirstname()
    {
        return $this->getdata("FIRST NAME");
    }
    public function setlastname($name)
    {
        return $this->setdata("LAST NAME", $name);
    }
    public function getlastname()
    {
        return $this->getdata("LAST NAME");
    }
    public function setdateofbirth($year, $month, $day)
    {
        if (checkdate($month, $day, $year)) {
            return $this->setdob("DOB", $year.$month.$day);
        }
    }
    public function getdateofbirth()
    {
        return $this->getdata("DOB");
    }
    public function settwitter($link)
    {
        return $this->setdata("TWITTER", $link);
    }

    public function gettwitter()
    {
        return $this->getdata("TWITTER");
    }
    public function setfacebook($link)
    {
        return $this->setdata("FACEBOOK", $link);
    }
    public function getfacebook()
    {
        return $this->getdata("FACEBOOK");
    }
    public function setinsta($link)
    {
        return $this->setdata("INSTAGRAM", $link);
    }

    public function getinsta()
    {
        return $this->getdata("INSTAGRAM");
    }
}
