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
            <div class="flex mx-auto justify-center items-center gap-6"><?php include('../views/menu.view.php'); ?></div>
            <div class="input-text text-white"><?php include('../views/button-login.view.php'); ?></div>
        </nav>
    </header>
    <main class="max-w-1192 mx-auto mt-14">
        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>
</html>