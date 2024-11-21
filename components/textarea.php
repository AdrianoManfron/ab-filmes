<?php

function text($name, $placeholder)
{

?>
<textarea name="<?=$name?>" class="w-full bg-gray-100 text-gray-700 border border-gray-300 input-text h-32 px-4 py-3 rounded-lg focus:outline-purple-base" placeholder="<?=$placeholder?>"></textarea>
<?php
}