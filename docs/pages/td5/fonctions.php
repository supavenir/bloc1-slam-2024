<?php
declare(strict_types=1);

function titre(string $content,string $subTitle='',int $level=1): void {
    echo "<h$level>$content</h$level>";
    if($subTitle!=null){
        echo "<p class='sub-title'>$subTitle</p>";
    }
}

function get(string $key,mixed $defaultValue=null): mixed{
    return $_GET[$key]??$defaultValue;
}

function post(string $key,mixed $defaultValue=null): mixed{
    return $_POST[$key]??$defaultValue;
}

/**
 * Retourne le paragraphe avec les mots mélangés
 * @param string $paragraphe
 * @return string
 */
function shufflePara(string $paragraphe): string {
    $words=explode(" ",strtolower($paragraphe));
    shuffle($words);
    return ucfirst(implode(" ",$words));
}

function generateTable(int $rows,int $cols,$defaultValue=''): string {
    $html='<table border="1">';
    for($i=0;$i<$rows;$i++){
        $html.='<tr>';
        $html .= str_repeat("<td>$defaultValue</td>", $cols);
        $html.='</tr>';
    }
    $html.='</table>';
    return $html;
}

const LOREM_IPSUM_ARRAY=[
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar elit eu purus elementum, nec dictum nunc finibus. Suspendisse cursus libero eu finibus tristique. Mauris lobortis venenatis ultrices. Pellentesque rutrum ante nisl, vel vulputate justo tempus nec. Pellentesque ornare mi sed facilisis pulvinar. Curabitur condimentum hendrerit mollis. Duis et ex bibendum, rhoncus eros at, venenatis mi. In sit amet porttitor nisi, nec efficitur nunc. Aliquam luctus, ex at convallis eleifend, leo odio maximus eros, hendrerit tincidunt nisl leo vitae nibh. Sed tempus scelerisque nulla, eu semper sapien faucibus et. Proin volutpat viverra tellus. Praesent bibendum, ante quis convallis tempor, dolor ex fringilla nunc, non lobortis augue ipsum eget dolor.",
    "Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam bibendum quis lorem eget imperdiet. Duis odio magna, congue et purus vel, lacinia iaculis dolor. In ac tellus nulla. Etiam metus justo, scelerisque vel purus at, laoreet sodales neque. Pellentesque imperdiet, justo vulputate mattis venenatis, velit erat venenatis mauris, at pulvinar arcu metus dictum sem. Proin semper est et enim blandit, sit amet pharetra velit interdum. Praesent neque augue, porta a euismod non, consectetur a mi.",
    "Morbi non ultrices urna. Aliquam non laoreet lectus. Aenean nec consequat nibh. Suspendisse magna tortor, pharetra a varius euismod, scelerisque et orci. Proin vitae semper magna, non tempus neque. Phasellus sit amet diam odio. Cras rhoncus bibendum est vel lacinia. Integer et lorem ac risus sagittis mattis.",
    "Vestibulum eleifend eu est et suscipit. Morbi rhoncus molestie ipsum ac eleifend. Suspendisse sed odio et enim convallis aliquam. Donec sit amet risus nec magna blandit ullamcorper non ac lacus. Suspendisse potenti. Nunc malesuada turpis in libero rutrum, aliquam convallis eros mollis. Aliquam sem purus, commodo ut velit id, varius fermentum arcu. Vestibulum gravida pharetra scelerisque. Suspendisse vehicula lorem congue, sagittis turpis vel, suscipit libero. Ut pharetra eros sed sem luctus venenatis. Maecenas nisl augue, pellentesque eget leo eget, fermentum viverra nulla. Phasellus ultrices, nulla eu finibus pretium, odio sem iaculis ligula, sit amet malesuada erat velit ac dui. Aenean velit elit, vulputate vitae enim non, malesuada aliquet tortor. Maecenas pellentesque, nunc nec pellentesque scelerisque, felis mi malesuada felis, et tincidunt augue ante quis purus. Cras placerat tortor enim, vitae accumsan velit elementum eget. Etiam semper, dolor vel porta faucibus, libero nibh luctus nibh, in faucibus nibh tellus sit amet tellus.",
    "Etiam eleifend ipsum leo, et dictum mauris efficitur eget. Phasellus ac libero lorem. Integer vel semper nibh. Donec venenatis neque quis nisi faucibus, lobortis facilisis sem cursus. Mauris id eleifend mi. Sed blandit tellus id nibh suscipit convallis. Nunc interdum, massa non egestas semper, ante velit ultricies velit, ac finibus erat metus a orci. Mauris pretium ipsum dictum urna ultricies tempus. Pellentesque quis turpis et magna imperdiet finibus. Vivamus fringilla sem vel lacus finibus, quis posuere ante imperdiet. Cras in risus sit amet massa aliquet pretium ac at nisi. In suscipit id odio a mollis. Donec iaculis hendrerit risus nec efficitur. Etiam bibendum vehicula augue. Donec tincidunt, nulla sit amet gravida molestie, nulla risus dictum nunc, sit amet auctor metus tortor consectetur diam.",
];
