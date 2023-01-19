<?php

include 'library/load.php';

$u=new user("test01");
($u->setdata("BIO", "WELCOME to php 1"));
// print($u->getdata("BIO"));
// print($u->getfirstname());
// print($u->getlastname());
// print($u->getdateofbirth());
print($u->setFirstname("admin111"));
print($u->setLastname("111"));
print($u->setTwitter("1a1a"));
print($u->setFacebook("1ab"));
print($u->setdateofbirth("2000", "20", "20"));
print($u->setInstagram("cccd"));
