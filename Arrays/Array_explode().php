<?php
$myString= "hello everyone here";
print_r($myString);
echo"<br>";
// ta9sim string dakhl ary 3an tari9 explode() hona ist3mlna masafa
$myStringArray =explode(' ',$myString);
print_r($myStringArray);
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";
 $myString2= "hello everyone! here";
print_r($myString2);
echo"<br>";
// ta9sim string dakhl ary 3an tari9 explode() hona ist3mlna !
$myStringArray2 =explode('!',$myString2);
print_r($myStringArray2);
?>
<?php
// ta9sim array dakhl string 3an tariç implode()
echo"<br>";
$name1 = Array('je', 'm' , 'appelle' , 'mostapha');
print_r($name1);
echo"<br>";
$name2 = implode(' ',$name1);
echo $name2;
?>