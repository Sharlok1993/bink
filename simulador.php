<?php
    $url_f=$_GET['id'];
    require('assets/includes/app/funciones.php');
    switch ($url_f) {
        case 'credito-personal':
            $id_credito=1;
            include('./assets/includes/vistas/simulador/personal/valores.php');
            break;
        case 'credito-nomina':
            $id_credito=2;
            include('./assets/includes/vistas/simulador/nomina/valores.php');
            break;
        case 'credito-pyme':
            $id_credito=3;
            include('./assets/includes/vistas/simulador/pyme/valores.php');
            break;
        case 'credito-automotriz':
            $id_credito=4;
            include('./assets/includes/vistas/simulador/automotriz/valores.php');
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
        switch ($url_f) {
            case 'credito-personal':
                include('./assets/includes/vistas/simulador/personal/simulador.php');
                break;
            case 'credito-nomina':
                include('./assets/includes/vistas/simulador/nomina/simulador.php');
                break;
            case 'credito-pyme':
                include('./assets/includes/vistas/simulador/pyme/simulador.php');
                break;
            case 'credito-automotriz':
                include('./assets/includes/vistas/simulador/automotriz/simulador.php');
                break;
        }

        include('./assets/includes/vistas/web/footer.php');

        switch ($url_f) {
            case 'credito-personal':
                include('./assets/includes/vistas/simulador/personal/scripts.php');
                break;
            case 'credito-nomina':
                include('./assets/includes/vistas/simulador/nomina/scripts.php');
                break;
            case 'credito-pyme':
                include('./assets/includes/vistas/simulador/pyme/scripts.php');
                break;
            case 'credito-automotriz':
                include('./assets/includes/vistas/simulador/automotriz/scripts.php');
                break;
        }
    ?>
</body>
</html>