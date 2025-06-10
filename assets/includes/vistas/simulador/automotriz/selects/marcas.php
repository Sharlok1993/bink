<label for="marcas" class="">Marca</label>
<select name="marca" data-form-field="marca" class="col-12 p-3 marcas" id="marcas" required style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
    <option value="">Selecciona una marca</option>
    <?php
        require ('../../../../app/conexion.php');
        $qry_marcas='SELECT a.id_marca, a.marca FROM marcas a WHERE a.id_status=1;';
        $rs_marcas=mysqli_query($mysqli, $qry_marcas);
        while($row_marcas=$rs_marcas->fetch_array()){
    ?>
        <option value="<?php echo $row_marcas['id_marca']; ?>"><?php echo $row_marcas['marca']; ?></option>
    <?php
        }
    ?>
</select>