<?php
if(empty($_GET)){
    die("Erreur : rien dans le get");
}
extract($_GET);
$message??='Message par défaut';
$size??='12';
if(isset($_GET['sizeVar'])){
    $up=($sizeVar=='+')?10:-10;
    $size+=$up;

}
$color??='black';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Font-tester</title>
</head>
<body>
<ul>
    <li>
        <a href="?color=red&size=15&message=Texte en rouge">Texte en rouge</a>
    </li>
    <li>
        <a href="?color=green&size=30&message=Texte en vert">Texte en vert</a>
    </li>
    <li>
        <a href="?color=blue&size=50&message=Texte en bleu">Texte en bleu</a>
    </li>
</ul>
<form action="<?=$_SERVER['PHP_SELF']?>">
    <input type="number" name="size" value="<?=$size?>">
    <input type="submit" name="sizeVar" value="+">
    <input type="submit" name="sizeVar" value="-">
    <input type="color" name="color" value="<?=$color?>">
    <textarea name="message"><?=$message?></textarea>
    <button type="submit">Valider</button>
</form>
<div style="color: <?=$color?>;font-size: <?=$size?>px"><?=$message?></div>
<footer>
    <p>Serveur :<strong><?=$_SERVER['SERVER_SIGNATURE']?></strong></p>
</footer>
</body>
</html>

<?php
