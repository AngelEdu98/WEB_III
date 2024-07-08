<?php
    include_once URL_APP . '/views/custom/header.php';

?>

<div class="container-center center">
        <div class="container-content center">
            <div class="content-action center">
                <h4>Registrarme</h4>
                <form action="">
                    <input type="text" placeholder="Email" required>
                    <input type="text" placeholder="Usuario"required>
                    <input type="password" placeholder="Contraseña" required>
                    <button class="btn-purple btn-block">Registrarme</button>
                </form>
                <div class="contenido-link mt-2">
                    <span class="mr-2">¿Ya tienes cuenta?</span><a href="<?php echo URL_PROYECT?>/home/login">Ingresar</a>
                </div>
            </div>
            <div class="content-image center">
                <img src="<?php echo URL_PROYECT ?>/img/vector.png" alt="Imagen 1">
            </div>
        </div>
    </div>

<?php

include_once URL_APP . '/views/custom/footer.php';
?>