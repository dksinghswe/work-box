<?php
//global variables
echo "Global variables<br>";
echo "Server - ".$_SERVER['PHP_SELF']."<br>";   
$name = 'Linus';
function myTest() {
  $GLOBALS['name'] = 'Tobias';
}
myTest();
echo $name;
echo "<pre>";
print_r($GLOBALS);
echo "<br>";
?>