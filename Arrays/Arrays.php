<?php
$jours = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');

// لا يمكن استدعاء الاري عن طريق الايكو
// echo "jours"; it is not exicte
print_r($jours); 
echo"</br>";
print_r ($jours[1]);//pour affiche  mardi sauf
echo"</br>";
unset($jours[6]); // pour suprimer dimanche
echo"</br>";
print_r($jours);

echo "</br>".($jours[3]); // pour afficher une côte de array
 $jours[6] = 'coucou' ;// pour ajouter 'coucou' dans array
 print_r($jours);
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";

 $num = array(1,2,3,4,5,6);
 print_r($num);
 echo"<br>";
 array_push($num,66,77,88,99,00,'ahmed','nki');
 print_r($num)
 //array_push pour ajouter array élement dans arry
?>

<?php 
 echo "</br>";
 echo "</br>";
 echo "</br>";
 echo "</br>";
 $marks = array('français' => 20,'english' => 15,'coding' => 19);

 echo $marks['english'];
 // print_r($marks['français']);

?>