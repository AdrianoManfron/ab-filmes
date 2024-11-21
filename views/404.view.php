<?php
require "../components/button.php";
require "../components/input.php";
require "../components/movie-card.php";
?>

<section class="max-w-1192 mx-auto mt-14">
    <div class="flex flex-col w-full justify-center items-center gap-10">
        <?php if($pesquisar && ! $filmes) : ?>
            <div class="flex flex-col w-full justify-center items-center gap-5 mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" class="fill-gray-400" viewBox="0 0 256 256"><path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path></svg>
                <div class="text-center">
                    <p class="text-md-regular text-gray-600">Nenhum filme encontrado com "<?=$pesquisar?>"</p>
                    <p class="text-md-regular text-gray-600">Que tal tentar outra busca?</p>
                </div>
                <a href="/" class="flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
                    <p class="text-md-regular text-gray-500">Limpar filtro</p>
                </a>
            </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <?php elseif($pesquisar) :
                foreach ($filmes as $filme){
                    card($filme->imagem, $filme->titulo, $filme->categoria, $filme->ano_de_lancamento, $filme->nota_avaliacao, $filme->descricao, "/filme?id=$filme->id");
                }
            ?>
        </div>
        <?php else: ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="fill-purple-base" viewBox="0 0 256 256">
            <path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path>
        </svg>
        <h1 class="display-xl text-4xl text-gray-600">Página não Encontrada!</h1>
        <div class="w-full flex justify-center items-center">
            <form class="flex w-1/3 relative">
                <?php inputSearch('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-gray-500" viewBox="0 0 256 256">
            <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
        </svg>', 'w-full', 'Que tal fazer uma pesquisa de um filme?'); ?>
            </form>
        </div>
        <?php endif; ?>
        <div class="pt-5">
            <p class="text-md-regular text-lg text-gray-600">Ou acesse nossa página inicial para ver todos os nossos titulos!</p>
            <div class="w-1/2 mx-auto pt-3">
                <?php button('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 256 256"><path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z"></path></svg>', 'Acesse!', '/'); ?>
            </div>
        </div>
    </div>
</section>