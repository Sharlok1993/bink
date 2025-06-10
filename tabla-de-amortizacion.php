<?php
    $url_f=$_GET['id'];
    require('assets/includes/app/funciones.php');
    require('assets/includes/app/conexion.php');
    switch ($url_f) {
        case 'personal':
            $id_credito=1;
            include('./assets/includes/vistas/simulador/personal/valores-tabla.php');
            break;
        case 'nomina':
            $id_credito=2;
            include('./assets/includes/vistas/simulador/nomina/valores-tabla.php');
            break;
        case 'pyme':
            $id_credito=3;
            include('./assets/includes/vistas/simulador/pyme/valores-tabla.php');
            break;
        case 'automotriz':
            $id_credito=4;
            include('./assets/includes/vistas/simulador/automotriz/valores-tabla.php');
            break;
        default:
            header("Location: ../inicio");
    }
    $ruta="../";
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

    <section id="reporte">
        <div id="tabla-amortizacion" class="my-4">
            <div class="container">
                <div id="logo_Imp" class="container d-none">
                    <div class="image-block">
                        <img src="<?php echo $ruta; ?>assets/img/ebnk_logo.svg" alt="" title="" style="width: 20%; margin-bottom: 20px;">
                    </div>
                </div>
                <?php
                    include('./assets/includes/vistas/simulador/botones.php');

                    switch ($url_f) {
                        case 'personal':
                            include('./assets/includes/vistas/simulador/personal/tabla.php');
                            break;
                        case 'nomina':
                            include('./assets/includes/vistas/simulador/nomina/tabla.php');
                            break;
                        case 'pyme':
                            include('./assets/includes/vistas/simulador/pyme/tabla.php');
                            break;
                        case 'automotriz':
                            include('./assets/includes/vistas/simulador/automotriz/tabla.php');
                            break;
                    }

                    include('./assets/includes/vistas/simulador/disclaimers-tabla.php');
                    
                ?>
            </div>
        </div>
    </section>
    
    <?php
        include('./assets/includes/vistas/web/footer.php');

        switch ($url_f) {
            case 'personal':
                include('./assets/includes/vistas/simulador/personal/scripts-tabla.php');
                break;
            case 'nomina':
                include('./assets/includes/vistas/simulador/nomina/scripts-tabla.php');
                break;
            case 'pyme':
                include('./assets/includes/vistas/simulador/pyme/scripts-tabla.php');
                break;
            case 'automotriz':
                include('./assets/includes/vistas/simulador/automotriz/scripts-tabla.php');
                break;
        }
    ?>
</body>
</html>