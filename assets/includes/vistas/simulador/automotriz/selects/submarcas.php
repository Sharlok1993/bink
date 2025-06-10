<?php
    $id=$_REQUEST['id'];
?>
    <label for="submarca" class="py-3">Submarca</label>
    <select name="submarca" data-form-field="submarca" class="col-12 p-3 subMarca" id="subMarca" required style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
        <option value="">Selecciona submarca</option>
        <?php
            require ('../../../../app/conexion.php');
            $qry_submarcas="SELECT a.id_submarcas, a.submarca FROM submarcas a WHERE a.id_status=1 AND a.id_marca='$id';";
            $rs_submarcas=mysqli_query($mysqli, $qry_submarcas);
            while($row_submarcas=$rs_submarcas->fetch_array()){
        ?>
            <option value="<?php echo $row_submarcas['id_submarcas']; ?>"><?php echo $row_submarcas['submarca']; ?></option>
        <?php
            }
        ?>
    </select>
