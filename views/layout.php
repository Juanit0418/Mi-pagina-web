<!DOCTYPE html>
<html lang="es">
<head>
    <meta property="og:title" content="Página Web de Juan Sanmartín">
    <meta property="og:description" content="Desarrollador Web Junior especializado en PHP, MySQL, JavaScript, CSS y Node.js.">
    <meta property="og:image" content="https://juan-sanmartin.domcloud.dev/build/img/preview.png">
    <meta property="og:url" content="https://juan-sanmartin.domcloud.dev/">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Página Web de Juan Sanmartín">
    <meta name="twitter:description" content="Desarrollador Web Junior especializado en PHP, MySQL, JavaScript, CSS y Node.js.">
    <meta name="twitter:image" content="https://juan-sanmartin.domcloud.dev/build/img/preview.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Sanmartín - <?php echo $titulo; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/build/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/build/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/build/img/favicon-16x16.png">
    <link rel="manifest" href="/build/img/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php 
        include_once __DIR__ .'/templates/header.php';
        echo $contenido;
        include_once __DIR__ .'/templates/footer.php'; 
    ?>
    
    <script src="/build/js/main.min.js" defer></script>
</body>
</html>