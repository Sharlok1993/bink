<?php
    $url_f=$_GET['id'];
    require('assets/includes/app/conexion.php');
    require('assets/includes/app/funciones.php');

    $qry_dataC="SELECT a.credito, a.banner, a.img, a.slogan, a.url_f_simulador, a.titulo_1, a.texto_1, a.titulo_2, a.texto_2, a.titulo_3, a.texto_3, a.r1, a.r1_img, a.r2, a.r2_img, a.r3, a.r3_img, a.r4, a.r4_img, a.r5, a.r5_img, a.r6, a.r6_img, a.titulo_4, a.img_4, a.texto_4, a.titulo_5, a.img_5, a.texto_5, a.titulo_6, a.img_6, a.texto_6, a.texto_7 FROM creditos a WHERE a.id_status='1' AND a.id_credito='" . c_id($url_f) . "';";
    $rs_dataC=mysqli_query($mysqli, $qry_dataC);
    $array_dataC=mysqli_fetch_array($rs_dataC);

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

        include('./assets/includes/vistas/productos/banner.php');
        include('./assets/includes/vistas/productos/terminos-condiciones.php');
        include('./assets/includes/vistas/productos/requisitos.php');
        include('./assets/includes/vistas/productos/solicitud.php');

        include('./assets/includes/vistas/web/dudas-adicionales.php');
        include('./assets/includes/vistas/web/footer.php');
    ?>
</body>
</html>