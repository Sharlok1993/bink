<form>
    <input type="hidden" name="valor" class="valor" value="<?php echo $valor; ?>" id="valor">
    <input type="hidden" name="plazo" class="plazo" value="<?php echo $plazo; ?>" id="plazo">
</form>
<div id="cabReporte">
    <div class="media-container-row">
        <div class="col-md-12">
            <h2 style="color: var(--primary);">Tabla de amortización</h2>
            <h5 style="padding-bottom: 1rem!important; color: var(--primary);">Crédito Personal</h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Monto a financiar: <span class="monto-t">$0.00</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Comisión sobre monto a financiar (<?php echo ($factor_comision*100); ?>%): <span class="comision-t">$0.00</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Seguro de vida: <span class="segVida">$0.00</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Plazo seleccionado: <span class="plazo-t">meses</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Tasa de interés anual: <span class="tia-t">0% sin IVA</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">CAT promedio: <span class="cat-t"><?php echo $CAT; ?>0% sin IVA</span></h5>
            <h5 style="margin-top: 0; margin-bottom: .5rem;">Mínimo de ingresos a comprobar: <span class="ingAComp"></span></h5>
        </div>
    </div>
</div>
<table id="tablaAmort" cellspacing="0" style="width: 100% !important; margin-top: 6px; border-top: 1px solid #efefef; border-bottom: 1px solid #efefef; margin-bottom: 0; border-color: grey;">
    <thead>
        <tr>
            <th class="mos" style="text-align: center;">Mes</th>
            <th style="text-align: center;">Saldo de Capital</th>
            <th style="text-align: center;">Pago a Capital</th>
            <th style="text-align: center;">Intere&eacute;s</th>
            <th style="text-align: center;">IVA de Intereses</th>
            <th style="text-align: center;">Seguro de Vida</th>
            <th style="text-align: center;">Total</th>
        </tr>
    </thead>
    <tbody class="tablaAmortizacion">
        
    </tbody>
</table>
<div class="col-12 d-flex justify-content-center">
    <div class="col-md-8 col-sm-12 p-2">
        <div id="btn-ccoc" class="p-1">
            <a href="<?php echo $ruta; ?>simulador/credito-personal" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Calcular con otra cantidad</a>
        </div>
    </div>
</div>