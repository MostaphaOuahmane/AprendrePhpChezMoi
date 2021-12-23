<?php
$hostname = "localhost";
$database_name = "ideasdb";
$database_user = "mostapha";
$database_user_password = "123"; 
$dsn = "mysql:host=$hostname;dbname=$database_name";


$options = array(
    PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
    // هنا نقوم بالقيام اتربيوت لاظهار الاخطاء في الجداول
);




//هنا الاعلان عن قاعدة البيانات 



?>