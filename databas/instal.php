<?php
require_once('config.php');
?>
<?php
//هنا الاتصال وجلب قاعدة البيانات
$connection = new PDO($dsn,$database_user,$database_user_password,$options );

// PDO : php databse object
// "mysql:host=$hostname;dbname=$database_name", => msdr database source database
$sql = " CREATE TABLE IF NOT EXISTS
             ideas( id INT UNSIGNED AUTO_INCREMENT,
              title VARCHAR(30) NOT NULL , 
             texte TEXT NOT NULL, PRIMARY KEY(id) );";
$connection -> exec($sql); // هنا نربط الجدول بقاعدة البينات يعني بشبي ماي ادمين
echo " vous étais bien contacte avec database super";







?>