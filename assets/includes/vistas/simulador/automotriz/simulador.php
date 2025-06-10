<div class="container py-4 py-xl-5">
    <div class="row">
        <div class="col-md-8 text-center mx-auto p-4">
            <div class="">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo $ruta; ?>assets/img/credito_auto_icono.svg" style="width: 100px;">
                </div>
                <div class="d-flex justify-content-center my-3">
                    <h4>Crédito Automotriz</h4>
                </div>
            </div>
        
            <form id="simulador" action="<?php echo $ruta; ?>tabla-de-amortizacion/automotriz" method="POST" class="" data-form-title="automotriz">     

                <h5>¿QUÉ AUTOMÓVIL ESTÁS BUSCANDO?</h5>
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                </div>

                <div class="d-flex">
                    <div class="col-6 p-2 d-flex justify-content-end">
                        <input type="checkbox" class="d-none" name="nuevo" value="Nuevo" id="nuevo">
                        <label class="nuevo">
                            <div class="inner btn-cir border border-3 rounded-circle border-secondary d-flex justify-content-center align-items-center">
                                <h4 class="text">NUEVO</h4>
                            </div>
                        </label>
                    </div>

                    <div class="col-6 p-2 d-flex justify-content-start">
                        <input type="checkbox" class="form-check-input p-3 d-none" name="seminuevo" value="Seminuevo" id="seminuevo">
                        <label class="seminuevo">
                            <div class="inner btn-cir border border-3 rounded-circle border-primary d-flex justify-content-center align-items-center">
                                <h4 class="text">SEMINUEVO</h4>
                            </div>
                        </label>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="col-md-6 modeloA">
                    </div>

                    <div class="col-md-6 marcaS d-none">
                    </div>
                </div>

                <div class="col-12 form-group subMarcaS">
                </div>

                <hr class="col-12">

                <div class="valoresPrev form-row d-none">

                    <div class="col-12">
                        <h4>¿Cuánto necesitas?</h4>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <label for="valorM">Valor del automóvil</label>
                        <input type="text" name="valorM" placeholder="$" required="required" class="col-12 p-3" value="" id="valorM" autocomplete="off" style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
                        <input type="text" name="valor" required="required" class="d-none" value="" id="valor">
                    </div>

                    <div data-for="enganche" class="col-lg-6 col-md-12">
                        <label for="engancheM" class="form-control-label mbr-fonts-style display-7">Enganche</label>
                        <input type="text" name="engancheM" placeholder="$" required="required" class="col-12 p-3 enganche" value="" id="engancheM" autocomplete="off" style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
                        <input type="text" name="enganche" required="required" class="d-none" value="" id="enganche">
                    </div>

                    <div class="col-12 my-2">
                        <div class="form-check" style="text-align: center;">
                            <label>Agregar seguro contra daños financiado</label>
                            <input type="checkbox" id="seguro" name="seguro" value="" data-form-field="Agregar seguro contra daños financiado" class="seguro" checked >
                        </div>
                    </div>

                    <div class="col-12 mt-2 mb-1">
                        <h4>El monto a financiar sería:</h4>
                    </div>

                    <div class="col-12">
                        <h5 class="monto" style="text-align: center; color: var(--blue); font-weight: bold; font-size: 62px;">$0.00</h5>
                    </div>

                    <hr class="col-12">

                    <div class="col-12">
                        <h4>¿Cuál es el plan que más te acomoda?</h4>
                    </div>

                    <div class="col-12" data-for="select">
                        <select name="plazo" id="plazo" data-form-field="select" class="col-12 p-3 plazo" style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
                            <option value="24" selected>24 pagos mensuales</option>
                            <option value="36">36 pagos mensuales</option>
                            <option value="48">48 pagos mensuales</option>
                            <option value="60">60 pagos mensuales</option>
                        </select>
                    </div>

                    <hr class="col-12">

                    <div class="col-12">
                        <h4>El pago mensual promedio sería:</h4>
                    </div>

                    <div class="col-12">
                        <h5 class="pmp" style="text-align: center; color: var(--blue); font-weight: bold; font-size: 62px;">$0.00</h5>
                        <input type="text" name="pagoMP" required="required" class="d-none" value="" id="pagoMP">
                    </div>
                </div>

                <div class="form-row detalles d-none">
                    <table class="table table-sm">
                        <tbody>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Monto a financiar</strong></td>
                                <td class="col-5 monto-t" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Valor del auto</strong></td>
                                <td class="col-5 valor-t" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Comisión sobre monto a financiar (<?php echo ($factor_comision*100); ?>%)</strong></td>
                                <td class="col-5 comision-t" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Enganche</strong></td>
                                <td class="col-5 enganche-t" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>**Seguro anual financiado</strong></td>
                                <td class="col-5 saf-t" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Seguro de vida</strong></td>
                                <td class="col-5 segVida" style="text-align:start; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>Tasa de interés anual</strong></td>
                                <td class="col-5 tia" style="text-align:start; font-size: 1.2rem;">0% sin IVA</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align:end; font-size: 1.2rem;"><strong>CAT promedio</strong></td>
                                <td class="col-5" style="text-align:start; font-size: 1.2rem;"><?php echo $CAT; ?>% sin IVA</td>
                            </tr>                                    

                        </tbody>
                    </table>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-md-8 col-sm-12 p-2">
                            <div class="p-1">
                                <button type="submit" class="btn btn-primary p-2" style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Consulta la tabla de amortización</button>
                            </div>
                            <div class="p-1">
                                <a href="<?php echo $ruta; ?>solicitud" class="btn btn-primary p-2"  style="font-size: 1.2rem; width:100%!important; border-radius:50rem;">Quiero solicitar mi crédito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>