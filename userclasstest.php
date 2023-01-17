<?php

include 'library/load.php';

$u=new user("test01");
($u->setdata("BIO", "WELCOME to php 1"));
// print($u->getdata("BIO"));
// print($u->getfirstname());
// print($u->getlastname());
// print($u->getdateofbirth());
print($u->setfirstname("admin"));
print($u->setlastname("01"));
print($u->settwitter("aaa"));
print($u->setfacebook("bbb"));
print($u->setdateofbirth("2000", "20", "20"));
print($u->setinsta("ccc"));
