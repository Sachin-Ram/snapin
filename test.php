<!-- <html>
<title>test</title>
<body>
<?php
// for ($i=0;$i<5;$i++) {
//     printf("%d", $i)
?>
<p>h</p>
<?php
// }
?>
<?php
// system("cat test.c");
?>
</body>
</html> -->
<pre>
<?php

print_r($_SERVER);
// print(basename($_SERVER['PHP_SELF'], '.php'));
$dir='photogram/styling/';
$dir2=basename($_SERVER['PHP_SELF'], '.php');
// print($dir."\n");
// print($dir2."\n");
//echo($dir).($dir2).".css";
// $res=load_css();
// print($res);
?>
</pre>

<?php
include 'library/load.php';
// if (file_exists($_SERVER['DOCUMENT_ROOT'].'/photogram/styling/'.basename($_SERVER['PHP_SELF'], ".php").".css")) {
//     print("exist");
// } else {
//     print("not exist");
// }
// $res=user::signup("test03", "pass", "xyz@gmail.com", "123456");
// echo $res;

// if (user::signup("test03", "pass", "xyz@gmail.com", "123456")) {
//     echo "success";
// } else {
//     echo "failure";
// }
// print_r($_POST);
$res=user::login('test123@gmail.com', 'pass');
echo $res;
if (user::login('test123@gmail.com', 'pass')) {
    print(user::login('admin1@example.com', 'admin1'));
    print("you can login in");
} else {
    print("you cant");
}
//echo $_SERVER['DOCUMENT_ROOT'].'/../photogramconfig.json';
database::connection();
database::connection();
database::connection();
echo "authentication";
usersession::authenticate('test123@gmail.com', 'pass');
?>

<pre>
<?php
// database::connection();
// database::connection();>
// session::start();
// echo "startting a session \n";
// if (session::isset('test')) {
//     echo "already value exist";
//     //session::get($test);
//     print("\n".$_SESSION["test"]);
// } else {
//     echo "assigning new value";
//     session::set('test', time());
//     print($_SESSION["test"]);
// }
// session::destroy();
// echo "\n destroying session";
// $p="somestrong password";
// echo $p;
// echo md5($p);
?>

</pre>

