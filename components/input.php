<?php
function input($icon, $type, $name, $widthBox, $text)
{
?>
    <div class="absolute p-4"><?=$icon?></div>
    <input type="<?=$type?>" name="<?=$name?>" class="<?= $widthBox ?> bg-gray-300 input-text text-gray-700 rounded-md focus:outline-purple-base pl-12 py-3 pr-4" placeholder="<?= $text ?>" />
<?php
}

function inputSearch($icon, $widthBox, $text)
{
?>
    <button type="submit" class="absolute p-4"><?=$icon?></button>
    <input type="text" name="pesquisar" class="<?= $widthBox ?> bg-gray-300 input-text text-gray-700 rounded-md focus:outline-purple-base pl-12 py-3 pr-4" placeholder="<?= $text ?>" />
<?php
}