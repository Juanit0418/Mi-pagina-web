<main class="contacto contenedor seccion">
  <h1 class="contacto__heading">Contacto</h1>

  <form action="/contacto"  method="POST" class="formulario">
    <p class="formulario__texto">Redes Sociales</p>

    <nav class="menu-redes"> 
    <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/share/1BoJqDVqKy/">
      <span class="menu-redes__ocultar">Facebook</span>
    </a>

    <a class="menu-redes__enlace" href="https://wa.me/593991787417" target="_blank" rel="noopener noreferrer">
      <span class="menu-redes__ocultar">Whatsapp</span>
    </a>

    
    <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://x.com/JSanz1478571?t=goxyoDuBUL2wvlQxqV2PZg&s=091">
      <span class="menu-redes__ocultar">X</span>
    </a>
    
    <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/juansanmartin2025?igsh=b2k3YXJrdjExM256">
      <span class="menu-redes__ocultar">Instagram</span>
    </a>
    
    <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.tiktok.com/@c._258?_r=1&_t=ZM-918CyXF30km">
      <span class="menu-redes__ocultar">Tiktok</span>
    </a>
    
    <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/Juanit0418">
      <span class="menu-redes__ocultar">Github</span>
    </a>
  </nav>

  <p class="formulario__texto">o</p>
    <fieldset>
      <legend>Contactame llenado este formulario</legend>
      <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
  
      <div class="formulario__campos">
        <div class="formulario__campo">
          <label class="formulario__label" for="nombre">Nombre:</label>
          <input class="formulario__input" type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php echo (isset($alertas["error"])) ? $contacto->nombre : ''; ?>">
        </div>

        <div class="formulario__campo">
          <label class="formulario__label" for="apellido">Apellido</label>
          <input class="formulario__input" type="tel" id="apellido" name="apellido" placeholder="Tu apellido" value="<?php echo (isset($alertas["error"])) ? $contacto->apellido : ''; ?>">
        </div>
  
        <div class="formulario__campo">
          <label class="formulario__label" for="numero">Número</label>
          <input class="formulario__input" type="tel" id="numero" name="numero" placeholder="Tu número" value="<?php echo (isset($alertas["error"])) ? $contacto->numero : ''; ?>">
        </div>

        <div class="formulario__campo">
          <label class="formulario__label" for="email">Correo:</label>
          <input class="formulario__input" type="email" id="email" name="email" placeholder="Tu correo electrónico" value="<?php echo (isset($alertas["error"])) ? $contacto->email : ''; ?>">
        </div>

        <div class="formulario__campo--largo">
          <label class="formulario__label" for="mensaje">Mensaje:</label>
          <textarea class="formulario__textarea" id="mensaje" name="mensaje" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..."><?php echo (isset($alertas["error"])) ? $contacto->mensaje : ''; ?></textarea>
        </div>
      </div>
      
      <div class="formulario__boton">
        <button class="boton boton--contacto" type="submit">Enviar</button>
      </div>
    </fieldset>
  </form>
</main>