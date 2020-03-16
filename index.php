<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Barre</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main">
        <form method="post">
            <input type="text" name="codebarre">
            <input type="submit" value="afficher le code barre">
        </form>
        <div id="codebarre">

          <?php

          if (isset($_POST) && (!empty($_POST['codebarre']))){

            include('codebarre.php');

          }

            ?>

        </div>

    </div>
</body>
</html>