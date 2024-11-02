<?php 
require "../components/search-input.php";
?>

<section class="flex justify-between items-center">
    <h1 class="display-xl text-[#E5E2E9]">Explorar</h1>
    <?php searchInput('' ,'w-[265px]', 'Pesquisar Filme'); ?>
</section>
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    <?php include('../components/movie-card.php'); ?>
</section>