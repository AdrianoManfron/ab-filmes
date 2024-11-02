<?php

function button($icon, $text, $link){

?>
    <div class="input-text text-white">
        <a href="<?= $link ?>" class="flex w-full justify-center items-center px-5 py-3 gap-2 bg-purple-base rounded-md duration-150 hover:bg-purple-light">
            <?= $icon; ?>
            <?= $text; ?>
        </a>
    </div>
<?php
}