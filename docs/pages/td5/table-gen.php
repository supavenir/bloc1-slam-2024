<?php
require_once 'fonctions.php'
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>HTML Table generator</title>
</head>
<body>
<?php
    $nbCols=post("colonnes",5);
    $nbLignes=post("lignes",5);
?>
<form method="post">
    <label for ="colonne">Nombre de Colonnes</label>
        <input type="number" id="colonne" value="<?=$nbCols?>" name="colonnes"><br>

    <br><label for="ligne">Nombre de lignes</label>
        <input type="number" id="ligne" value="<?=$nbLignes?>" name="lignes"><br>
    <input type="submit" value="Envoyer">
</form>
<hr>
<?=generateTable($nbLignes,$nbCols,'o')?>
</body>
</html>
