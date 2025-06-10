<?php
    $monto=$_REQUEST['monto'];
?>
<select name="plazo" data-form-field="plazo" class="plazos p-3 col-12" id="plazo" required style="border-radius: 5px; border: 1px solid #eeeeee; background: var(--light); color: var(--gray); text-align: center;">
    <option value="">Seleccione un plazo</option>
    
    <?php
        if($monto<5000){
    ?>
        <option value="4">4 pagos semanales</option>
        <option value="8">8 pagos semanales</option>
        <option value="12">12 pagos semanales</option>
    <?php
        }
        else if($monto>=5000){
    ?>
        <option value="6">6 pagos mensuales</option>
        <option value="12">12 pagos mensuales</option>
        <option value="18">18 pagos mensuales</option>
        <option value="24">24 pagos mensuales</option>
        <option value="36">36 pagos mensuales</option>
    <?php
    }
    ?>
</select>
