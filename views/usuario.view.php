<?php
    require "../components/input.php";
    require "../components/button.php";
?>

<section class="max-w-1192 mx-auto mt-14">
    <form action="/alterar-usuario" method="post" enctype="multipart/form-data">
        <div class="w-full max-h-[490px] flex gap-12">
            <?php foreach($user as $usuario) : ?>
            <div class="w-1/3 group">
                <label for="avatar" class="w-full min-h-[290px] flex flex-col justify-center items-center bg-gray-300 gap-3 rounded-full overflow-hidden cursor-pointer">
                        <?php if($usuario['avatar']) : ?>
                            <img src="<?=$usuario['avatar']?>" alt="Avatar Próprio" class="w-full border border-purple-base rounded-full" />
                        <?php else : ?>
                            <img src="/images/Logo.svg" alt="Avatar Padrão" class="w-full border border-purple-base rounded-full" />
                        <?php endif; ?>
                    <input type="file" name="avatar" id="avatar" class="hidden" />
                </label>
            </div>
            <div class="w-full flex flex-col gap-28">
                <div class="w-full flex flex-col gap-6">
                    <p class="title-lg text-gray-700">Atualizar meus dados:</p>
                    <div class="w-full flex flex-col gap-4">
                        <div class="w-full relative">
                            <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>', 'text', 'nome', 'w-full', 'Nome', $usuario['nome']); ?>
                        </div>
                        <div class="w-full relative">
                            <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>', 'email', 'email', 'w-full', 'Email', $usuario['email']); ?>
                        </div>
                        <div class="w-full relative">
                            <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>', 'email', 'email_confirm', 'w-full', 'Confirme seu E-mail'); ?>
                        </div>
                        <div class="w-full relative">
                            <?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M48,56V200a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0Zm92,54.5L120,117V96a8,8,0,0,0-16,0v21L84,110.5a8,8,0,0,0-5,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,140,110.5ZM246,115.64A8,8,0,0,0,236,110.5L216,117V96a8,8,0,0,0-16,0v21l-20-6.49a8,8,0,0,0-4.95,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,246,115.64Z"></path></svg>', 'password', 'senha', 'w-full', 'Senha'); ?>
                        </div>
            <?php endforeach; ?>
                        <div class="w-full">
                            <?php if( $validacoes = flash()->get('validacoes') ): ?>
                                <?php foreach ($validacoes as $validacao) : ?>
                                    <div class="flex gap-2 text-error-light text-xs-regular px-4 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-error-light" viewBox="0 0 256 256"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path></svg>
                                        <?=$validacao?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <?php if($mensagem = flash()->get('mensage')): ?>
                            <div class="border-2 border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md">
                                <?=$mensagem?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-8">
                    <div><button type="reset" class="flex w-16 text-md-regular text-gray-500 hover:text-purple-light justify-center items-center gap-2 duration-150">Cancelar</button></div>
                    <div><?php buttonLogin('submit', 'Salvar'); ?></div>
                </div>
            </div>
        </div>
    </form>
</section>