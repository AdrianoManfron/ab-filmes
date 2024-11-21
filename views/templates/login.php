<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">
    <link href="/styles/output.css" rel="stylesheet">
    <title>AB Filmes - Login / Cadastro</title>
</head>
<body class="bg-gray-100 text-white">
    <main class="w-full h-screen flex">
        <section class="flex-1 w-full bg-login-register bg-cover bg-no-repeat m-4 rounded-2xl relative">
            <div class="w-full h-full bg-gradient-to-tr from-[#1a1b2dbe] from-0% to-[#1a1b2d63] to-100% z-10 rounded-2xl"></div>
            <div class="absolute top-8 left-8 w-16 h-16 z-20"><a href="/"><img src="/images/Logo.svg" alt="Logo AB Filmes"></a></div>
            <div class="absolute bottom-8 left-8 w-[346px] flex flex-col gap-3 z-20">
                <div class="display-md text-gray-600">ab filmes</div>
                <div class="display-lg text-gray-700">O guia definitivo para os amantes do cinema</div>
            </div>
        </section>
        <section class="flex flex-col justify-center items-center flex-1 w-screen h-screen">
            <div class="flex flex-col w-80 gap-14">
                <?php require '../views/partials/_menu-login.php'; ?>
                <?php require "../views/{$view}.view.php"; ?>
            </div>
        </section>
    </main>
</body>
</html>