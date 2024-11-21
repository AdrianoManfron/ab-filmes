<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">
    <link href="/styles/output.css" rel="stylesheet">
    <title>AB Filmes</title>
</head>
<body class="bg-gray-100 text-white">
    <header class="w-full">
        <nav class="flex w-full mx-auto justify-between items-center px-8 py-4">
            <div class="w-16 h-16"><a href="/"><img src="/images/Logo.svg" alt="Logo AB Filmes"></a></div>
            <div class="flex mx-auto justify-center items-center gap-6"><?php require '../views/partials/_menu.php'; ?></div>
            <?php if(! auth()): ?>
                <div class="input-text text-white"><?php require '../views/partials/_button-login.php'; ?></div>
            <?php else: ?>
                <div class="flex gap-3 input-text text-gray-600">
                    <div class="flex justify-center items-center pr-3 gap-3">
                        Olá, <?=auth()->nome?>
                        <?php if($usuario->avatar) : ?>
                            <img src="<?=$usuario->avatar?>" alt="Avatar Próprio" class="w-8 h-8 border border-purple-base rounded-md" />
                        <?php else : ?>
                            <img src="/images/Logo.svg" alt="Avatar Padrão" class="w-8 h-8 border border-purple-base rounded-md" />
                        <?php endif; ?>
                    </div>
                    <div class="flex justify-center items-center w-8 h-8 bg-gray-300 rounded-md"><?php require '../views/partials/_button-logout.php'; ?></div>
                </div>
            <?php endif; ?>
        </nav>
    </header>
    <main class="w-full">
        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>
</html>