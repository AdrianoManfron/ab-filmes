<?php

function linkButton($icon, $name, $link){
?>
<a href="<?=$link?>" class="flex w-16 text-md-regular justify-center items-center gap-2 duration-150 group">
    <div class="w-5 h-5"><?=$icon ?></div>
    <div class="text-gray-500 group-hover:text-purple-light"><?=$name?></div>
</a>
<?php
    }
?>