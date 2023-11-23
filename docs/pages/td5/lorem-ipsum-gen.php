<?php
     require_once 'fonctions.php';
     $count=post('count',5);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
     <title>Lorem Ipsum</title>
</head>
<body>
<?=titre("Lorem Ipsum generator","Sans pub !")?>
<form method="post">
    <label for="nb">Nombre de paragraphes</label>
    <input type="number" name="count" id="nb" value="<?=$count?>">
</form>
<?php
$j=0;
$loremIpsumArraySize=count(LOREM_IPSUM_ARRAY);
for($i=0;$i<$count;$i++){
    $j=rand(0,$loremIpsumArraySize-1);
    titre("Para $i",level:6);
    echo "<div>".shufflePara(LOREM_IPSUM_ARRAY[$j])."</div>";
}
?>
</body>
</html>
<?php

