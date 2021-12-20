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
    <form action="" method="GET">
        <label for="title">votre title</label>
        <input type="text" name="title" value=" Entre votre title">
        <br>
        </br>
        </br>

        <label for="text">votre texte</label>
        <textarea name="texte" id="texte" cols="80" rows="8">Entre votre texte</textarea>
        </br>
        </br>
        </br>
        </br>
        <input type="submit" name="submit" value="enrgistre votre form">
    </form>
    <?php
    if (isset($_GET['title'])) {
        echo $_GET['title'];
        //isset هل هناك شيء اسمه العنوان
    }
    if (isset($_GET['texte'])) {
        echo $_GET['texte'];
    }
    ?>
</body>

</html>