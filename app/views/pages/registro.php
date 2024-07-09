<?php
include_once URL_APP . '/views/custom/header.php';

?>

<div class="container-center center">
    <div class="container-content center">
        <div class="content-action center">
            <h4>Registrarme</h4>
            <form action="<?php echo URL_PROYECT ?>/home/registro" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button class="btn-purple btn-block">Registrarme</button>
            </form>
            <?php if (isset($_SESSION['usuarioError'])): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
                    <?php echo $_SESSION['usuarioError'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['usuarioError']); endif ?>
            <div class="contenido-link mt-2">
                <span class="mr-2">¿Ya tienes cuenta?</span><a href="<?php echo URL_PROYECT ?>/home/login">Ingresar</a>
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