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
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/photogram/styling/'.basename($_SERVER['PHP_SELF'], ".php").".css")) {
    print("exist");
} else {
    print("not exist");
}
// if(signup("test02","pass","1234@gma.com","123456")){
//     echo "success";
// }
// else{
//     echo "failure";
// }
print_r($_POST);
?>

