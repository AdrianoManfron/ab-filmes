<?php
    require "../components/input.php";
    require "../components/textarea.php";
    require "../components/button.php";
    require "../components/link.php";
?>

<section class="max-w-1192 mx-auto mt-14">
    <form action="/criar-filme" method="post" enctype="multipart/form-data">
        <div class="w-full max-h-[490px] flex gap-12">
            <div class="w-2/5 group">
                <label for="poster" class="w-full min-h-[490px] flex flex-col justify-center items-center bg-gray-300 gap-3 rounded-2xl text-md-regular text-gray-500 cursor-pointer group-hover:text-purple-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="fill-purple-light group-hover:fill-purple-base" viewBox="0 0 256 256"><path d="M224,144v64a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V144a8,8,0,0,1,16,0v56H208V144a8,8,0,0,1,16,0ZM93.66,77.66,120,51.31V144a8,8,0,0,0,16,0V51.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,77.66Z"></path></svg>
                    Fazer upload
                    <input type="file" name="imagem" id="poster" class="hidden" />
                </label>
            </div>
            <div class="w-full flex flex-col gap-28">
                <div class="w-full flex flex-col gap-6">
                    <p class="title-lg text-gray-700">Novo filme</p>
                    <div class="w-full flex flex-col gap-4">
                        <div class="w-full">
                            <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path></svg>', 'text', 'titulo', 'w-full', 'Título'); ?>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path></svg>', 'text', 'ano_de_lancamento', 'w-full', 'Ano de lançamento'); ?>
                            </div>
                            <div class="flex-1">
                                <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"></path></svg>', 'text', 'categoria', 'w-full', 'Categoria'); ?>
                            </div>
                        </div>
                        <div class="w-full">
                            <?php text('descricao', 'Descrição'); ?>
                            <?php if( $validacoes = flash()->get('validacoes') ): ?>
                                <?php foreach ($validacoes as $validacao) : ?>
                                    <div class="flex gap-2 text-error-light text-xs-regular px-4 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-error-light" viewBox="0 0 256 256"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path></svg>
                                        <?=$validacao?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-8">
                    <div><?php linkButton('','Cancelar', '/meus-filmes'); ?></div>
                    <div><?php buttonLogin('submit', 'Salvar'); ?></div>
                </div>
            </div>
        </div>
    </form>
</section>