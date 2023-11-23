<ul>
    <li>
        <a href="?message=Salut">Salut</a>
    </li>
    <li>
        <a href="?message=Hola">Salut en espagnol</a>
    </li>
</ul>
<?php
$message=$_GET['message']??"Message par défaut";
$nb=$_GET['nb']??1;
$i=0;
while($i<$nb) {
    echo "<h1>$message</h1>";
    $i++;
}
