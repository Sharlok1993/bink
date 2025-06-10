<?php 
    $ruta="./";
?>
<!DOCTYPE html>
<html lang="es" style="font-family: Montserrat, sans-serif;font-size: 14px;">
<?php
    include('./assets/includes/vistas/web/head.php');
?>
<body style="font-family: Montserrat, sans-serif;">
    <?php
        include('./assets/includes/vistas/web/menu.php');
    ?>
    <section style="margin-top: 0;background: #ededed;padding-top: 50px;padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-inline-flex align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                    <img class="img-fluid" src="./assets/img/ebnk_home1.svg" height="457" width="353">
                    <h1>Cuando quieras, donde quieras</h1>
                </div>
                <div class="col-md-4 align-self-sm-center align-self-xl-center">
                    <section class="login-clean" style="background: transparent;">
                        <form action="banca-en-linea/perfil" method="post" style="border-radius: 10px;">
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--primary);">Ingresar a ebank</button>
                            </div>
                            <a class="forgot" href="#">Recuperar contraseña</a>
                            <small class="form-text" style="text-align: center;margin-top: 25.5px;">¿Nuevo?</small>
                            <a class="forgot" href="#" style="color: var(--blue);">Regístrate aqui</a>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('./assets/includes/vistas/web/footer.php');
    ?>
</body>
</html>