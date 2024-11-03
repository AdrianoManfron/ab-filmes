<?php 
require "../components/input.php";
require "../components/button.php";
?>
<section class="w-full">
    <h1 class="display-xl text-[#E5E2E9]">Acesse sua conta</h1>
    <form method="POST">
        <div class="flex flex-col w-full pt-5 gap-4">
            <div class="flex items-center"><?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>', 'email', 'email', 'w-full', 'E-mail'); ?></div>
            <div class="flex items-center"><?php input('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-gray-500" viewBox="0 0 256 256"><path d="M48,56V200a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0Zm92,54.5L120,117V96a8,8,0,0,0-16,0v21L84,110.5a8,8,0,0,0-5,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,140,110.5ZM246,115.64A8,8,0,0,0,236,110.5L216,117V96a8,8,0,0,0-16,0v21l-20-6.49a8,8,0,0,0-4.95,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,246,115.64Z"></path></svg>', 'password', 'senha', 'w-full', 'Senha'); ?></div>
            <div class="pt-4"><?php button('', 'Entrar', '/meus-filmes'); ?></div>
        </div>
    </form>
</section>