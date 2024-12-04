<?php
function input($icon, $type, $name, $widthBox, $text, $value = null)
{
?>
    <div class="absolute p-4"><?=$icon?></div>
    <input id="input" type="<?=$type?>" value="<?=$value?>" name="<?=$name?>" class="<?= $widthBox ?> bg-gray-100 border border-gray-300 input-text text-gray-700 rounded-md focus:outline-purple-base pl-12 py-3 pr-4" placeholder="<?= $text ?>" />
    <button id="reset" type="reset" class="hidden absolute right-4 top-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-gray-500" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg></button>
<?php
}

function inputSearch($icon, $widthBox, $text)
{
?>
    <button type="submit" class="absolute p-4"><?=$icon?></button>
    <input id="input" type="text" name="pesquisar" class="<?= $widthBox ?> bg-gray-300 input-text text-gray-700 rounded-md focus:outline-purple-base pl-12 py-3 pr-4" placeholder="<?= $text ?>" />
    <button id="reset" type="reset" class="hidden absolute right-4 top-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-gray-500" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg></button>
<?php
}