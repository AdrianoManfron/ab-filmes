<?php
    require "../components/menu-item.php";
?>
<ul class="flex justify-center items-center w-full">
    <li class="group text-gray-500"><?php menuItem('', 'Login', '/login'); ?></li>
    <li class="group text-gray-500"><?php menuItem('', 'Cadastro', '/register'); ?></li>
</ul>