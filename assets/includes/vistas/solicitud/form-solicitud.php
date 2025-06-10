<section>
    <div class="container py-4 py-xl-5">
        <div class="row">
            <form class="col-12">
                <h2 class="text-center text-primary">Solicitud de crédito</h2>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="aPaterno" class="form-label">Apellido Paterno</label>
                        <input type="text" id="aPaterno" name="aPaterno" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="aMaterno" class="form-label">Apellido Materno</label>
                        <input type="text" id="aMaterno" name="aMaterno" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="nombres" class="form-label">Nombre(s)</label>
                        <input type="text" id="nombres" name="nombres" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="fecNac" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" id="fecNac" name="fecNac" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="calle" class="form-label">Calle</label>
                        <input type="text" id="calle" name="calle" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="nomExt" class="form-label">Número de Exterior</label>
                        <input type="text" id="nomExt" name="nomExt" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="numInt" class="form-label">Número de Interior( en caso de existir)</label>
                        <input type="text" id="numInt" name="numInt" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="colonia" class="form-label">Colonia</label>
                        <input type="text" id="colonia" name="colonia" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="delegacion" class="form-label">Delegación o municipio</label>
                        <input type="text" id="delegacion" name="delegacion" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" id="estado" name="estado" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="codPost" class="form-label">Código Postal</label>
                        <input type="text" id="codPost" name="codPost" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="compDom" class="form-label">Inserte Comprobante de Domicilio (Formato PDF o Imagen)</label>
                        <input type="file" name="compDom" class="form-control p-0" id="compDom">
                    </div>
                </div>
                
                <h4 class="text-center text-secondary my-5">IDENTIFICACIÓN PERSONAL Y DATOS DE CONTACTO</h4>
                
                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="tipoDNI" class="form-label">Tipo de Identificación</label>
                        <select class="form-select form_s" id="tipoDNI"  name="tipoDNI">
                            <option value="INE">INE</option>
                            <option value="IFE">IFE</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Licencia de conducir">Licencia de conducir</option>
                            <option value="Credencial escolar con fotografía">Credencial escolar con fotografía</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="dni" class="form-label">Inserte identificación oficial (PDF o Imagen)</label>
                        <input type="file" name="dni" class="form-control p-0" id="dni">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="cel" class="form-label">Teléfono o celular</label>
                        <input type="text" id="cel" name="cel" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="text" id="email" name="email" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="curp" class="form-label">CURP</label>
                        <input type="text" id="curp" name="curp" class="form-control form_s">
                    </div>
                </div>

                <h4 class="text-center text-secondary my-5">OCUPACIÓN</h4>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="ocupacion" class="form-label">Ocupación</label>
                        <input type="text" id="ocupacion" name="ocupacion" class="form-control form_s">
                    </div>
                    <div class="col-6">
                        <label for="ingMens" class="form-label">Ingresos mensuales</label>
                        <input type="text" id="ingMens" name="ingMens" class="form-control form_s">
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="col-6">
                        <label for="compIngMens" class="form-label">Comprobante de ingresos mensuales
                            (No menor a 3 meses y en formato PDF o Imagen).</label>
                        <input type="file" name="compIngMens" class="form-control p-0" id="compIngMens">
                    </div>
                    <div class="col-6">
                        <label for="montSol" class="form-label">Monto a solicitar</label>
                        <input type="text" id="montSol" name="montSol" class="form-control form_s">
                    </div>
                </div>

                <h4 class="text-center text-secondary my-5">CUENTA DE DEPÓSITO</h4>

                <div class="d-flex justify-content-center p-2">
                    <div class="col-8">
                        <label for="CLAVE" class="form-label">Número de cuenta CLAVE 18 dígitos o tarjeta 16 dígitos
                            (no permitir ingresar si pasa o es menor la cifra de números)</label>
                        <input type="text" id="CLAVE" name="CLAVE" class="form-control form_s">
                    
                        <label for="nomProp" class="form-label">Nombre de propietario de la cuenta bancaria
                            a la que se realizara el crédito</label>
                        <input type="text" id="nomProp" name="nomProp" class="form-control form_s">
                    
                        <label for="banco" class="form-label">Banco al cual pertenece la cuenta</label>
                        <input type="text" id="banco" name="banco" class="form-control form_s">
                    </div>
                </div>
                <div class="d-flex justify-content-center p-2">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary p-2 m-2 " style="width: 100%; border-radius:50rem;">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>