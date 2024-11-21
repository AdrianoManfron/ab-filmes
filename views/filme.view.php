<?php 
    require "../components/link.php";
    require "../components/button.php";
    require "../components/button-icon.php";
    require "../components/textarea.php";
    require "../components/rating.php";

    $sumNotas = array_reduce($avaliacoes, function($carry, $a){
        return ($carry ?? 0) + $a->nota;
    }) ?? 0;

    if(count($avaliacoes) == 1){
        $notaFinal = $sumNotas;
    } elseif(count($avaliacoes) == 2){
        $notaFinal = round($sumNotas / 2);    
    } elseif(count($avaliacoes) == 3){
        $notaFinal = round($sumNotas / 3); 
    } elseif(count($avaliacoes) == 4){
        $notaFinal = round($sumNotas / 4); 
    } else{
        $notaFinal = round($sumNotas / 5);
    }
?>
<section class='w-full relative'>
    <div class="absolute top-16 left-[19%] bottom-16 flex w-full max-w-1192 mx-auto gap-12 z-20">
        <img src="<?= $filme->imagem ?>" alt="" class="w-96 object-cover rounded-2xl" />
        <div class="w-[760px] py-3 relative">
            <div class="text-gray-500 text-md-regular pb-5">
                <?php linkButton('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500 group-hover:fill-purple-light" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>', 'Voltar', '/'); ?>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col w-full gap-4">
                    <h1 class="title-hg text-gray-700"><?= $filme->titulo ?></h1>
                    <div class="w-full">
                        <p class="text-md-regular text-gray-600">Categoria: <?= $filme->categoria ?></p>
                        <p class="text-md-regular text-gray-600 pt-1">Ano: <?= $filme->ano_de_lancamento ?></p>
                    </div>
                    <div class="flex justify-start items-center gap-3">
                        <div><?php rating($notaFinal); ?></div>
                        <div class="flex justify-start items-center gap-2">
                            <span class="title-xl text-gray-700"><?=$notaFinal?></span>
                            <span class="text-md-regular text-gray-600">(<?=count($avaliacoes)?> avaliações)</span>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-3 flex flex-col"><?= $filme->descricao ?></div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-gray-100 from-0% to-gray-100/5 to-100% z-10"></div>
    <img src="<?= $filme->imagem ?>" alt="" class="w-full object-cover object-center opacity-20 max-h-[620px]" />
</section>
<section class="flex flex-col max-w-1192 mx-auto pt-16 gap-10">
    <div class="flex justify-between items-center gap-2">
        <h3 class="title-xl text-gray-700">Avaliações</h3>
        <?php if(auth()) : ?>
        <div><?php button('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-white" viewBox="0 0 256 256"><path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path></svg>', 'Avaliar Filme', ''); ?></div>
        <?php endif; ?>
    </div>
    <?php if(! $avaliacoes) : ?>
        <div class="flex flex-col w-full justify-center items-center gap-5 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" class="fill-gray-400" viewBox="0 0 256 256"><path d="M229.52,74.21a8,8,0,0,0-7.13-2A44,44,0,0,0,168,41.67a44,44,0,0,0-80,0,44,44,0,0,0-54.4,30.51,8,8,0,0,0-9.4,9.65L54.76,211.67A16,16,0,0,0,70.34,224H185.66a16,16,0,0,0,15.58-12.33L231.79,81.83A8,8,0,0,0,229.52,74.21ZM76,56a27.68,27.68,0,0,1,13.11,3.26,8,8,0,0,0,11.56-5.34,28,28,0,0,1,54.66,0,8,8,0,0,0,11.56,5.34A28,28,0,0,1,207,76.54l-38.56,11-34.49-13.8a16,16,0,0,0-11.88,0L87.57,87.56,49,76.54A28,28,0,0,1,76,56ZM70.34,208,42.91,91.44l37.85,10.81L94.86,208ZM145,208H111L96.75,101.12,128,88.62l31.25,12.5Zm40.66,0H161.14l14.1-105.75,37.85-10.81Z"></path></svg>
            <div class="text-center">
                <p class="text-md-regular text-gray-600">Nenhuma avaliação registrada.</p>
                <p class="text-md-regular text-gray-600">Que tal enviar o primeiro comentário?</p>
            </div>
            <a href="/" class="flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
                <p class="text-md-regular text-gray-500">Avaliar filme</p>
            </a>
        </div>
    <?php endif; ?>
    <?php foreach($avaliacoes as $avaliacao) : ?>
        <div class="flex flex-col w-full gap-3">
            <div class="flex w-full p-8 gap-12">
                <div class="flex w-56 rounded-md gap-4">
                    <?php if($avaliacao->avatar) : ?>
                            <img src="<?=$avaliacao->avatar?>" alt="Avatar Próprio" class="w-12 h-12 border border-purple-base rounded-md" />
                        <?php else : ?>
                            <img src="/images/Logo.svg" alt="Avatar Padrão" class="w-12 h-12 border border-purple-base rounded-md" />
                        <?php endif; ?>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center gap-2">
                            <p class="title-lg text-gray-700"><?=$avaliacao->nome?></p>
                            <?php if(auth()->id == $avaliacao->usuario_id) : ?>
                                <span class="px-2 bg-purple-base text-sm-bold text-gray-700 rounded-full">Você</span>
                            <?php endif; ?>
                        </div>
                        <div class="text-sm-regular text-gray-500"><?=$avaliacao->count_avaliacoes?> filmes avalidos</div>
                    </div>
                </div>
                <div class="w-[730px] pl-12 text-md-regular text-gray-500">
                    <?=$avaliacao->avaliacao?>
                </div>
                <div class="flex justify-center items-center self-start bg-gray-300 px-3 py-1 gap-2 rounded-md">
                    <div class="title-xs text-gray-700"><span class="title-lg"><?=$avaliacao->nota?></span> / 5</div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-purple-base hover:fill-purple-light" viewBox="0 0 256 256"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<?php if(auth()): ?>
<section class="flex flex-col mx-auto w-[800px] h-[600px] p-10 gap-8 bg-gray-200 stroke-gray-300 rounded-2xl relative">
    <?php iconButton('#', '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500 hover:fill-purple-light" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>'); ?>
    <h2 class="title-xl text-gray-700">Avaliar filme</h2>
    <form method="POST" action="/criar-avaliacao">
        <div class="flex flex-col w-full gap-6">
            <div class="flex w-full gap-8">
                <div class="w-60 h-60 bg-gray-300 rounded-lg">
                    <img src="<?= $filme->imagem ?>" alt="" class="w-60 h-60 object-cover rounded-lg" />
                </div>
                <div class="w-full relative">
                    <div class="flex flex-col w-full gap-5">
                        <h1 class="title-hg text-gray-700"><?= $filme->titulo ?></h1>
                        <div class="w-full">
                            <p class="text-md-regular text-gray-600"><span class="text-md-bold">Categoria: </span><?= $filme->categoria ?></p>
                            <p class="text-md-regular text-gray-600"><span class="text-md-bold">Ano: </span><?= $filme->ano_de_lancamento ?></p>
                        </div>
                    </div>
                    <div class="w-full absolute bottom-10">
                        <p class="text-md-regular text-gray-600">Sua avaliação:</p>
                        <div><input type="text" name="nota" class="bg-gray-300 text-gray-700 border border-gray-500 rounded-lg focus:outline-purple-base" /></div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="filme_id" value="<?=$filme->id?>" />
            <?php text('avaliacao', 'Comentário'); ?>
            <?php if( $validacoes = flash()->get('validacoes') ): ?>
                <?php foreach ($validacoes as $validacao) : ?>
                    <div class="flex gap-2 text-error-light text-xs-regular px-4 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-error-light" viewBox="0 0 256 256"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path></svg>
                        <?=$validacao?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if($mensagem = flash()->get('mensage')): ?>
                <div class="border-2 border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md">
                    <?=$mensagem?>
                </div>
            <?php endif; ?>
            <div class="flex justify-end self-end">
                <?php buttonLogin('submit', 'Publicar'); ?>
            </div>
        </div>
    </form>
</section>
<?php endif; ?>