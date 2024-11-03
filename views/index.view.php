<?php 
require "../components/input.php";
require "../components/movie-card.php";
?>

<section class="flex justify-between items-center">
    <h1 class="display-xl text-[#E5E2E9]">Explorar</h1>
    <form class="flex relative">
        <?php inputSearch('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-gray-500" viewBox="0 0 256 256">
            <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
        </svg>', 'w-[265px]', 'Pesquisar Filme'); ?>
    </form>
</section>
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    <?php card('/images/Transformers-poster.jpg', 'Poster do Transformers', 'Transformers', 'Ação', '2018', '4,5', 'In 2104, almost eleven years after the ill-fated expedition to the distant moon LV-223 in Prometheus (2012).', '#'); ?>
</section>