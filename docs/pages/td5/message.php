<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
</head>
<body>
<?php
extract($_GET);
$message??='Hello World!';
$color??='black';
$size??='15';
?>
<p style="color:<?=$color ?>; font-size: <?=$size?>px;">
    <?=$message?>
</p>
<h2>URLs de test</h2>
<ul>
    <li>
        <a href="?message=Texte en vert de taille 20&size=20&color=green">Vert</a>
    </li>
    <li>
        <a href="?message=Texte en rouge de taille 30&size=30&color=red">Rouge</a>
    </li>
    <li>
        <a href="?message=Texte en bleu de taille 50&size=50&color=blue">Bleu</a>
    </li>
</ul>
</body>
</html>
