<div class="container py-4 py-xl-5">
    <div class="row">
        <div class="col-md-8 text-center mx-auto p-4">
            <div class="">
                <div class="d-flex justify-content-center" style="">
                    <img src="<?php echo $ruta; ?>assets/img/credito_pyme_icono.svg" style="width: 100px;">
                </div>
                <div class="d-flex justify-content-center my-3">
                    <h4>Crédito Pyme</h4>
                </div>
            </div>
            <form id="simulador" action="<?php echo $ruta; ?>tabla-de-amortizacion/pyme" method="POST" class="" data-form-title="personal">     
                <div class="d-flex">
                    <div class="col-6 p-2 d-flex justify-content-end">
                        <input type="checkbox" class="d-none" name="fisica" value="pFisica" id="fisica">
                        <label class="fisica">
                            <div class="inner btn-cir border border-3 rounded-circle border-secondary d-flex justify-content-center align-items-center">
                                <h4 class="text">Persona Física</h4>
                            </div>
                        </label>
                    </div>
                    <div class="col-6 p-2 d-flex justify-content-start">
                        <input type="checkbox" class="form-check-input p-3 d-none" name="moral" value="pMoral" id="moral">
                        <label class="moral">
                            <div class="inner btn-cir border border-3 rounded-circle border-primary d-flex justify-content-center align-items-center">
                                <h4 class="text">Persona Moral</h4>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="valoresPrev d-none">
                    <h5>¿Cuánto necesitas?</h5><br>
                    <p>Créditos desde $200,000 hasta $10,000,000</p>
                    <div class="col-12 d-flex justify-content-center">
                        <input type="text" id="valorM" name="valorM" placeholder="$" data-form-field="valor" required="required" class="col-6 p-3" value="" autocomplete="off" style="border-radius: 5px; border: 1px solid #eeeeee; background: var(--light); color: var(--gray); text-align: center;">
                        <input type="text" name="valor" required="required" class="d-none" value="" id="valor">
                    </div>
                    <hr class="my-5">
                    <h5>¿Cuál es el plan que más te acomoda?</h5>
                    <div class="col-12">
                        <select name="plazo" class="col-12 p-3" id="plazo" style="border-radius: 5px; border: 1px solid #eeeeee; background: var(--light); color: var(--gray); text-align: center;">
                            <option value="6">6 pagos mensuales</option>
                            <option value="12">12 pagos mensuales</option>
                            <option value="18">18 pagos mensuales</option>
                            <option value="24">24 pagos mensuales</option>
                            <option value="36">36 pagos mensuales</option>
                        </select>
                    </div>
                    <hr class="my-5">
                    <h5>El pago mensual promedio sería:</h5>
                    <div class="col-12">
                        <h5 class="pmp" style="text-align: center; color: var(--blue); font-weight: bold; font-size: 62px;">$0.00</h5>
                        <input type="text" name="pagoMP" required="required" class="d-none" value="" id="pagoMP">
                    </div>
                </div>
                <div class="form-row detalles d-none">
                    <table class="table table-sm">
                        <tbody>
                            <tr class="row">
                                <td class="col-7" style="text-align: right; font-size: 1.2rem;"><strong>Monto a financiar</strong></td>
                                <td class="col-5 monto-t" style="text-align: left; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align: right; font-size: 1.2rem;"><strong>Comisión sobre monto a financiar (<?php echo ($factor_comision*100); ?>%)</strong></td>
                                <td class="col-5 comision-t" style="text-align: left; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align: right; font-size: 1.2rem;"><strong>Seguro de vida</strong></td>
                                <td class="col-5 segVida" style="text-align: left; font-size: 1.2rem;">$0.00</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align: right; font-size: 1.2rem;"><strong>Tasa de interés anual</strong></td>
                                <td class="col-5 tia" style="text-align: left; font-size: 1.2rem;">0% sin IVA</td>
                            </tr>
                            <tr class="row">
                                <td class="col-7" style="text-align: right; font-size: 1.2rem;"><strong>CAT promedio</strong></td>
                                <td class="col-5" style="text-align: left; font-size: 1.2rem;"><?php echo $CAT; ?>% sin IVA</td>
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