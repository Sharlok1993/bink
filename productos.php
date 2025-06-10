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
        include('./assets/includes/vistas/web/menu-productos.php');
    ?>
    <section>
        <div class="container-fluid" style="background: radial-gradient(#4498d4 0%, #234b85 81%);padding: 10px;padding-bottom: 40px;">
            <div class="container" style="color: var(--white);">
                <div class="row">
                    <div class="col-md-12" style="padding-top: 31px;padding-bottom: 10px;">
                        <h1 style="text-align: center;">Nuestros Productos</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="row my-5">
                    <div class="col-md-3 text-white p-2">
                        <div class="py-3 bg-primary">
                            <h4 class="text-center"><a class="text-white" href="<?php echo $ruta; ?>simulador/credito-personal">Crédito Personal</a></h4>
                        </div>
                        <div class="p-4" style="background: #ededed;">
                            <p class="text-center"><img alt="" title="" style="width:80px;" data-alt="" class="text-center" src="./assets/img/credito_personal_icono.svg"></p>
                            <p class="text-center text-primary">Viajes, boda, remodelación, inversión...tú decides!</p>
                            <a href="<?php echo $ruta; ?>simulador/credito-personal" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Simula tu crédito aquí</a>
                        </div>
                    </div>

                    <div class="col-md-3 text-white p-2">
                        <div class="py-3 bg-secondary">
                            <h4 class="text-center"><a class="text-white" href="<?php echo $ruta; ?>simulador/credito-nomina">Crédito Nómina</a></h4>
                        </div>
                        <div class="p-4" style="background: #ededed;">
                            <p class="text-center"><img alt="" title="" style="width:80px;" data-alt="" class="text-center" src="<?php echo $ruta; ?>assets/img/credito_nomina_icono.svg"></p>
                            <p class="text-center text-primary">Con tu trabajo llegan recompensas adicionales</p>
                            <a href="<?php echo $ruta; ?>simulador/credito-nomina" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Simula tu crédito aquí</a>
                        </div>
                    </div>

                    <div class="col-md-3 text-white p-2">
                        <div class="py-3 bg-primary">
                            <h4 class="text-center"><a class="text-white" href="<?php echo $ruta; ?>simulador/credito-pyme">Crédito PyME</a></h4>
                        </div>
                        <div class="p-4" style="background: #ededed;">
                            <p class="text-center"><img alt="" title="" style="width:80px;" data-alt="" class="text-center" src="<?php echo $ruta; ?>assets/img/credito_pyme_icono.svg"></p>
                            <p class="text-center text-primary">Haz crecer tu negocio, nosotros te apoyamos</p>
                            <a href="<?php echo $ruta; ?>simulador/credito-pyme" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Simula tu crédito aquí</a>
                        </div>
                    </div>

                    <div class="col-md-3 text-white p-2">
                        <div class="py-3 bg-secondary">
                            <h4 class="text-center"><a class="text-white" href="<?php echo $ruta; ?>simulador/credito-automotriz">Crédito Automotriz</a></h4>
                        </div>
                        <div class="p-4" style="background: #ededed;">
                            <p class="text-center"><img alt="" title="" style="width:80px;" data-alt="" class="text-center" src="<?php echo $ruta; ?>assets/img/credito_auto_icono.svg"></p>
                            <p class="text-center text-primary">Pon a rodar tu mundo desde 0% de enganche</p>
                            <a href="<?php echo $ruta; ?>simulador/credito-automotriz" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Simula tu crédito aquí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('./assets/includes/vistas/web/como-solicito.php');
        include('./assets/includes/vistas/web/dudas-adicionales.php');
        include('./assets/includes/vistas/web/footer.php');
    ?>
</body>
</html>