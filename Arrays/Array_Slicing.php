<?php
    $days1 = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
    print_r($days1);
    echo"</br>";
    // $days2 = array($days1[2],$days1[4]);
    $days2 = array_slice($days1,2,2,true);// true pour garder la mémé index
    print_r($days2);
    echo"</br>";
    $days2 = array_slice($days1,2,2,false);// false pour commencer  index à [0]
    print_r($days2);
 

?>