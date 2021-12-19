<?php
    $num = array(1,30,2,40,10,0,3,5,689,23,7,4,55,6);
    print_r($num);
    echo"<br>";
    //  pour ranger du plus petit au plus grand on va appelerla function sort()
    sort($num);
    print_r($num);
    echo"<br>";
    //  pour ranger du plus grand au plus petit on va appelerla function rsort()
   rsort($num);
   print_r($num);
   echo"<br>";
   echo"<br>";
       echo"<br>";
       echo"<br>";
       echo"<br>";echo"<br>";
       echo"<br>";
       echo"<br>";
       echo"<br>";
   // من اجل ترتيب نوع جذيذ من الاري بستعمال الحروف A TO Z
   $maison = array(
       'item1' => 'A',
       'item3' => 'B',
       'item2' => 'C',
       'item4' => 'Z',
       'item6' => 'D',
       'item5' => 'F');
       print_r($maison);
       echo"<br>";
       asort($maison);// ranger de A au Z
       print_r($maison);
       echo"<br>";
       arsort($maison);// ranger de Z au A
       print_r($maison);
       echo"<br>";
       echo"<br>";
       echo"<br>";
       echo"<br>";
       ksort($maison);// ranger par 'item': key
       print_r($maison);
       echo"<br>";
       krsort($maison);// ranger par 'item': key de plus grand au plus petit
       print_r($maison);




?>