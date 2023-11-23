<?php
extract($_POST);
$message??='Message par défaut';
$size??='12';
if(isset($_POST['sizeVar'])){
    $size+=$sizeVar;

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
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="size" value="<?=$size?>">
    <button type="submit" name="sizeVar" value="10">+</button>
    <button type="submit" name="sizeVar" value="-10">-</button>
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
