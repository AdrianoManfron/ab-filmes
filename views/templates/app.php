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
        <nav class="flex mx-auto justify-between px-8 py-4">
            <div>Logo</div>
            <div>Menu</div>
            <div>Login</div>
        </nav>
    </header>
    <main class="max-w-1192 mx-auto mt-14">
        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>
</html>