<?php
function titre($content,$sousTitre='',$level=1){
    echo "<h$level>$content</h$level>";
    if($sousTitre!=''){
        echo "<p class='sub-title'>$sousTitre</p>";
    }
}

const IPSUM_ARRAY=[
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin purus vel tellus posuere eleifend. Quisque pharetra venenatis nulla, at pellentesque lorem ornare sed. Maecenas ultricies dolor purus, sit amet scelerisque leo dictum nec. Curabitur commodo aliquam tellus vel vestibulum. In odio magna, condimentum et dapibus vel, posuere vitae nunc. Sed at risus lectus. Vestibulum in velit sit amet lectus suscipit cursus vitae non purus. In malesuada nisl dolor, vitae dapibus magna tincidunt vitae. Curabitur quis ante hendrerit, ultrices ex a, auctor orci.",

"Pellentesque volutpat lorem non rhoncus hendrerit. Curabitur id massa et sapien blandit porta et eget lacus. Integer dolor erat, fermentum in sollicitudin eget, suscipit id tortor. Ut maximus nisi vel nulla posuere, quis tincidunt est vehicula. Aenean hendrerit lorem eget orci porta porttitor. Suspendisse sed tellus nec tellus feugiat porta. Sed accumsan augue sodales lectus feugiat, eu rutrum neque venenatis. Mauris consequat tincidunt diam eu scelerisque. In nec augue ut neque fringilla eleifend ut suscipit velit. Fusce ullamcorper diam vel augue efficitur imperdiet id viverra ipsum.",

"Quisque pulvinar rhoncus ex, at aliquet turpis. Fusce aliquet facilisis congue. Nunc dui turpis, consectetur a urna nec, commodo euismod urna. Praesent velit arcu, molestie nec accumsan ac, tincidunt eu tellus. Cras iaculis volutpat sapien, id molestie justo convallis in. Praesent orci justo, viverra ac scelerisque id, ultricies ac justo. Nam nisl augue, interdum ac faucibus in, viverra vitae lectus. Maecenas enim ex, feugiat quis iaculis eu, blandit nec libero. Quisque pharetra mauris ut lorem sollicitudin auctor. Donec ornare sem quis ex auctor auctor. Cras lobortis lorem a cursus aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer porttitor feugiat hendrerit. Curabitur vel pharetra risus.",

"Vestibulum a mauris a justo porta viverra. Nulla in luctus lectus, vitae mattis ante. Nunc non lectus vitae lorem porttitor scelerisque eget id metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at quam tortor. Nunc vitae hendrerit leo. Maecenas malesuada risus eget ligula ultricies malesuada. In a aliquet nulla. Nullam consectetur pellentesque fringilla. Phasellus ultrices diam odio, aliquam semper felis mollis a. Nam ultricies elit at justo tempus porttitor. Nunc mollis faucibus ipsum, sed pulvinar purus vestibulum quis. Suspendisse potenti. Fusce non arcu facilisis, sollicitudin sapien sit amet, feugiat erat.",

"Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis fringilla viverra odio, dictum tincidunt nisl consectetur vel. Proin placerat imperdiet hendrerit. Ut turpis orci, bibendum a aliquam a, facilisis efficitur odio. Fusce quis metus vitae est auctor commodo eu non lectus. Integer odio lacus, ultricies eu massa vitae, rutrum aliquet mi. Cras dapibus, ligula vitae egestas sagittis, sapien eros efficitur sapien, vitae convallis arcu justo quis elit. Cras vitae finibus mi, sed pellentesque nisl."
];
