<section>
    <div data-bss-parallax-bg="true" style="height:600px;background: url(<?php echo $ruta; ?>assets/img/<?php echo $array_dataC['banner']; ?>) center / cover">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="max-width: 350px;"><img class="img-fluid w-100 fit-cover" style="min-height: 300px;" src="<?php echo $ruta; ?>assets/img/<?php echo $array_dataC['img']; ?>">
                </div>
                </div>
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center" style="padding-right: 10px;padding-left: 10px;">
                    <div>
                        <h1 class="text-start" style="color: var(--light);"><span style="color: rgb(255, 255, 255);"><?php echo $array_dataC['credito']; ?></span><br></h1>
                        <p class="my-3" style="font-size: 18px;color: var(--light);"><?php echo $array_dataC['slogan']; ?></p>
                        <a class="btn btn-primary btn-lg me-2" role="button" href="<?php echo $ruta . $array_dataC['url_f_simulador']; ?>" style="margin-right: 7px;margin-left: 7px;">Simula tu crédito</a>
                        <a class="btn btn-secondary btn-lg" role="button" href="#" style="margin-right: 7px;margin-left: 7px;">Solicita tu crédito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>