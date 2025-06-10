<?php 
    $url_f=$_GET['id'];
    $ruta="../";
?>
<!DOCTYPE html>
<html lang="es" style="font-family: Montserrat, sans-serif;font-size: 14px;">
<?php
    include('./assets/includes/vistas/web/head.php');
?>
<body style="font-family: Montserrat, sans-serif;">
    <?php
        include('./assets/includes/vistas/web/menu-banca.php');
    ?>
    <div class="py-4 py-xl-5" style="background: #ededed; min-height: calc(100vh - 143px);">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 p-2">
                    <ul class="nav justify-content-between">
                        <li class="nav-item text-center mx-2">
                            <a class="nav-link active" aria-current="page" href="./perfil" style="color: var(--dark);">Perfil</a>
                        </li>
                        <li class="nav-item text-center mx-2">
                            <a class="nav-link" href="./cuentas" style="color: var(--dark);">Cuentas</a>
                        </li>
                        <li class="nav-item text-center mx-2">
                            <a class="nav-link" href="./tarjetas" style="color: var(--dark);">Tarjetas</a>
                        </li>
                    </ul>
                    <?php
                        switch ($url_f) {
                            case 'perfil':
                                include('./assets/includes/vistas/banca/perfil.php');
                                break;
                            case 'cuentas':
                                include('./assets/includes/vistas/banca/cuentas.php');
                                break;
                            case 'hacer-pago':
                                include('./assets/includes/vistas/banca/hacer-pago.php');
                                break;
                            case 'pago':
                                include('./assets/includes/vistas/banca/pago.php');
                                break;
                            case 'agregar-dinero':
                                include('./assets/includes/vistas/banca/agregar-dinero.php');
                                break;
                            case 'dinero':
                                include('./assets/includes/vistas/banca/dinero.php');
                                break;
                            case 'tarjetas':
                                include('./assets/includes/vistas/banca/tarjetas.php');
                                break;
                            case 'tarjeta':
                                include('./assets/includes/vistas/banca/tarjeta.php');
                                break;
                            default:
                                header("Location: ../inicio");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('./assets/includes/vistas/web/footer-banca.php');
    ?>
</body>
</html>