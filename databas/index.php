<?php
require_once('config.php');
?>


<?php $page_title = "Add your idea"; ?>
<?php $page_hading = "Share your idea with as"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

</head>

<body>
    <h1><?php echo $page_hading; ?></h1>
    <!-- tariçt lhsoul 3la m3loumat form mn 3nd client otkhzinha f php  -->
    <?php  if(isset($_POST['submit'])) : //bidayt dala ?>
    <?php  if(isset($_POST['title']))  ?>
    <?php $idea_title = $_POST ['title']?>
    <?php  if(isset($_POST['texte']))  ?>
    <?php $idea_texte = $_POST ['texte']?>
    <?php endif; // nihayt dala   ?>


    <?php $new_idea = array('title' => $idea_title ,'texte' => $idea_texte  ); ?>
    <?php $new_idea_keys_string = implode(' , ',array_keys($new_idea));?>
    <?php $new_idea_keys_placeholders = ':' . implode(', :',array_keys($new_idea));?>

    <?php $connection = new PDO($dsn,$database_user,$database_user_password,$options );?>


    <?php  $sql = sprintf("INSERT TO %s (%s) VALUES (%s)",
                        'ideas',
                        $new_idea_keys_string,
                        $new_idea_keys_placeholders); ?>

    <?php  echo $sql ;  ?>



    <?php //$sth = sprintf("My idea title is %s ,my idea text is %s",
   // $idea_title,
   // $idea_texte); // nihayt dala   ?>
    <?php //echo "$sth"; ?>
    <!-- fin -->
    <form action="" method="POST">
        <label for="title">votre title</label>
        <input type="text" name="title" value="<?php if(isset($_POST['title'])){
            echo $_POST['title'];
        }; ?>">
        <br>
        <label for="text">votre texte</label>
        <textarea name="texte" id="texte" cols="80" rows="8"><?php if(isset($_POST['texte'])){
            echo $_POST['texte'];
        };?></textarea>
        </br>
        </br>
        </br>
        </br>
        <input type="submit" name="submit" value="enrgistre votre form">
    </form>

</body>

</html>