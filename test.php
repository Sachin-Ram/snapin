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
include '../photogram/library/load.php';
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
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/photogram/styling/'.basename($_SERVER['PHP_SELF'], ".php").".css")) {
    print("exist");
} else {
    print("not exist");
}
?>


