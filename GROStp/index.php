
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>code barre</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generateur de Code barre</h1>
    <form method="post">
        <div>
            <label id="lbl_nom" for="code">Entrer votre Code barre</label><br>
            <input id="code" name="code" type="text"/>
            <input id="send" name="send" type="submit" value="envoyer"/>
        </div>
    </form>
    <?php
    if(isset($_POST) && (!empty($_POST['code']))){
        include_once ("codebarre.class.php");
        $nb = $_POST['code'];
        $codebarre = new CodeBarre($nb);
        $codebarre ->affiche();
        $codebarre->genere13();
    }

    ?>
</body>
</html>