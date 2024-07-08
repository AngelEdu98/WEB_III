<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';

?>

<div class="container-center center">
        <div class="container-content center">
            <div class="content-action center">
                <h4>Iniciar Sesión</h4>
                <form action="">
                    <input type="text" placeholder="Usuario" required>
                    <input type="password" placeholder="Contraseña" required>
                    <button class="btn-purple btn-block">Ingresar</button>
                </form>
                <div class="contenido-link mt-2">
                    <span class="mr-2">¿No tienes cuenta?</span><a href="<?php echo URL_PROYECT?>/home/registro">Registrarme</a>
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