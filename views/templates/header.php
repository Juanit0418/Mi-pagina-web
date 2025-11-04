<body>
  <header>
    <a class="logo" href="/">
      <h1>Juan Sanmartín</h1>
    </a>
    
    <?php
$uri = $_SERVER['REQUEST_URI'];

// Opcional: eliminar parámetros ?view=grid etc.
$uri = strtok($uri, '?');

// Obtener la última parte del URI
$pagina = trim($uri, '/'); // quita las barras

if ($pagina === '') {
    $pagina = 'inicio'; // si estás en la raíz
}
?>

    <div class="nav-bg">
      <nav class="navegacion-principal contenedor">
        <a class="<?= ($pagina === 'inicio') ? 'activo' : ''; ?>" href="/">Inicio</a>
        <a class="<?= ($pagina === 'sobre_mi') ? 'activo' : ''; ?>" href="/sobre_mi">Sobre mi</a>
        <a class="<?= ($pagina === 'portafolio') ? 'activo' : ''; ?>" href="/portafolio">Portafolio</a>
        <a class="<?= ($pagina === 'contacto') ? 'activo' : ''; ?>" href="/contacto">Contacto</a>
      </nav>
    </div>
  </header>
