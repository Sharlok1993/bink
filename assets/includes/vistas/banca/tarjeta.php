<h2 class="my-4 text-center">Tarjeta</h2>
<div class="border border-primary rounded-lg bg-white p-4 container">
    <div class="row">
        <div class=" col-12 d-flex justify-content-between">
            <p style="font-weight: bold; color: var(--gray);">Tarjeta virtual - 1</p>
            <a href="./tarjetas"><img src="<?php echo $ruta; ?>assets/img/cerrar_ventana.svg" style="height: 1rem;" alt=""></a>
        </div>
    </div>
    <div class="row mt-1">   
        <div class="col-12 d-flex justify-content-center">
            <div class="col-10">
                <img src="<?php echo $ruta; ?>assets/img/tarjeta_apagada.svg" style="width: 100%;" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="container">
            <div class="d-flex justify-content-center my-3">
                <a href="./tarjeta" class="d-flex col-10">
                    <img src="<?php echo $ruta; ?>assets/img/apagar_tarjeta.svg" style="width: 30px;" alt="">

                    <span class="mx-2" style="color: var(--dark); font-size: 0.9rem;">Apagar tarjeta<br> 
                    <span style="color: var(--gray); font-size: 0.8rem;">Bloquear temporalmente</span>
                    </span>
                </a>
            </div>
            <div class="d-flex justify-content-center my-3">
                <a href="./tarjeta" class="d-flex col-10">
                    <img src="<?php echo $ruta; ?>assets/img/habilitar_cvv.svg" style="width: 30px;" alt="">

                    <span class="mx-2" style="color: var(--dark); font-size: 0.9rem;">Habilitar CVV<br> 
                    <span style="color: var(--gray); font-size: 0.8rem;">Utilizar después de 3 intentos</span>
                    </span>
                </a>
            </div>
            <div class="d-flex justify-content-center my-3">
                <a href="./tarjeta" class="d-flex col-10">
                    <img src="<?php echo $ruta; ?>assets/img/configuracion.svg" style="width: 30px;" alt="">

                    <span class="mx-2" style="color: var(--dark); font-size: 0.9rem;">Configuración<br> 
                    <span style="color: var(--gray); font-size: 0.8rem;">Eliminar o renombrar tarjeta</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>  