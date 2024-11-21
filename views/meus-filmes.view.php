<?php 
require "../components/input.php";
require "../components/button.php";
require "../components/movie-card.php";
?>

<section class="max-w-1192 mx-auto mt-14">
    <div class="flex justify-between items-center pb-3">
        <h1 class="display-xl text-[#E5E2E9]">Meus filmes</h1>
        <div class="flex gap-8">
            <form class="relative">
                <?php inputSearch('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-gray-500" viewBox="0 0 256 256">
                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>', 'w-[265px]', 'Pesquisar Filme'); ?>
            </form>
            <?php button('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-white" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path></svg>', 'Novo', '/novo-filme'); ?>
        </div>
    </div>
    <?php if($mensagem = flash()->get('mensage')): ?>
        <div class="border-2 border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md">
            <?=$mensagem?>
        </div>
    <?php endif; ?>
    <?php if($pesquisar && ! $filmes): ?>
        <div class="flex flex-col w-full justify-center items-center gap-5 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" class="fill-gray-400" viewBox="0 0 256 256"><path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path></svg>
            <div class="text-center">
                <p class="text-md-regular text-gray-600">Nenhum filme encontrado com "<?=$pesquisar?>"</p>
                <p class="text-md-regular text-gray-600">Que tal tentar outra busca?</p>
            </div>
            <a href="/meus-filmes" class="flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path></svg>
                <p class="text-md-regular text-gray-500">Limpar filtro</p>
            </a>
        </div>
    <?php elseif(! $filmes): ?>
            <div class="flex flex-col w-full justify-center items-center gap-5 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" class="fill-gray-400" viewBox="0 0 256 256"><path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path></svg>
                <div class="text-center">
                    <p class="text-md-regular text-gray-600">Nenhum filme registrado.</p>
                    <p class="text-md-regular text-gray-600">Que tal começar cadastrando seu primeiro filme?</p>
                </div>
                <a href="/novo-filme" class="flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path></svg>
                    <p class="text-md-regular text-gray-500">Cadastrar filme</p>
                </a>
            </div>
    <?php endif; ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
        <?php
            foreach ($filmes as $filme){
                card($filme->imagem, $filme->titulo, $filme->categoria, $filme->ano_de_lancamento, $filme->nota_avaliacao, $filme->descricao, "/filme?id=$filme->id");
            }
        ?>
    </div>
</section>