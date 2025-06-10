<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container"><a class="navbar-brand" href="<?php echo $ruta; ?>inicio">
        <img class="img-fluid" src="<?php echo $ruta; ?>assets/img/ebnk_logo.svg" width="100px" height="auto" alt="ebink"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo $ruta; ?>productos">Nuestros productos</a></li>
            </ul>
            <span class="navbar-text actions" style="padding-right: 4px;">
                <button class="btn btn-primary" type="button">Hazte cliente</button>
            </span>
            <span class="navbar-text actions" style="padding-left: 4px;">
                <a href="<?php echo $ruta; ?>ingresar"><button class="btn btn-primary" type="button">Ingresar a ebank</button></a>
            </span>
        </div>
    </div>
</nav>