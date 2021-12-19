<?php

// for loop
for($num = 1 ; $num <= 100 ; $num++){
    echo $num." <br> " ;
}
for($num = 1 ; $num <= 100 ; $num = $num + 1){
    echo $num." <br> " ;
}

echo "<br> ";
echo "<br> ";
echo "<br> ";
// while loop
$num =1;
while($num<=40){
    echo $num."<br>";
   $num = $num+5;
}
echo "<br> ";
echo "<br> ";
echo "<br> ";
//do while loop
// elle va exécuter mémé la conduiton est false
$num2 = 50;
do {
    echo $num2." <br> ";
    $num2 = $num2+10;
}while($num2<=40);














?>