<?php

    $itens = [
        ['icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="group-active:fill-purple-light" fill="#7A7B9F" viewBox="0 0 256 256"><path d="M229.52,74.21a8,8,0,0,0-7.13-2A44,44,0,0,0,168,41.67a44,44,0,0,0-80,0,44,44,0,0,0-54.4,30.51,8,8,0,0,0-9.4,9.65L54.76,211.67A16,16,0,0,0,70.34,224H185.66a16,16,0,0,0,15.58-12.33L231.79,81.83A8,8,0,0,0,229.52,74.21ZM76,56a27.68,27.68,0,0,1,13.11,3.26,8,8,0,0,0,11.56-5.34,28,28,0,0,1,54.66,0,8,8,0,0,0,11.56,5.34A28,28,0,0,1,207,76.54l-38.56,11-34.49-13.8a16,16,0,0,0-11.88,0L87.57,87.56,49,76.54A28,28,0,0,1,76,56ZM70.34,208,42.91,91.44l37.85,10.81L94.86,208ZM145,208H111L96.75,101.12,128,88.62l31.25,12.5Zm40.66,0H161.14l14.1-105.75,37.85-10.81Z"></path></svg>', 'name' => 'Explorar', 'link' => '/'],
        ['icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="group-active:fill-purple-light" fill="#7A7B9F" viewBox="0 0 256 256"><path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path></svg>', 'name' => 'Meus Filmes', 'link' => '/meus-filmes']
    ];

    foreach($itens as $item):
?>
<ul class="flex w-1/3">
    <li class="group text-gray-500"><a href="<?=$item['link']?>" class="flex w-full justify-center items-center px-3 py-2 gap-2 rounded-md hover:bg-gray-200 active:bg-gray-300 active:text-purple-light duration-150"><?=$item['icon']?><?=$item['name']?></a></li>
</ul>

<?php endforeach; ?>