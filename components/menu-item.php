<?php
    function menuItem($icon, $name, $link){
?>
<a href="<?=$link?>" class="flex w-full input-text justify-center items-center px-3 py-2 gap-2 rounded-md hover:bg-gray-200 active:bg-gray-300 active:text-purple-light duration-150"><?=$icon?><?=$name?></a>
<?php
    }