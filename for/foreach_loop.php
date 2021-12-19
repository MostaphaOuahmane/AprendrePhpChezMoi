<?php
    $days = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
    foreach ($days as $jours) {
        $jours = "bienvenue ". $jours;
        echo $jours ." <br> ";
    }
    echo " <br> ";
    print_r($days);

?>