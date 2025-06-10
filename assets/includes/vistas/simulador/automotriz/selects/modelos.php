<?php
    $tag=$_REQUEST['tag'];
    if($tag=='nuevo'){
    $year=date("Y");
    $desde=$year+1;
    $hasta=$year;
?>
    <label for="modelo-formbuilder-0" class="">Modelo</label>
    <select name="modelo" data-form-field="modelo" class="col-12 p-3" id="modelo-formbuilder-0" style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
        <?php
            for($i=$desde; $i>=$hasta; $i--){
        ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php
            }
        ?>
    </select>
<?php
    }
else if($tag=='seminuevo'){
    $year=date("Y");
    $desde=$year-1;
    $hasta=$desde-4;
?>
    <label for="modelo-formbuilder-0" class="">Modelo</label>
    <select name="modelo" data-form-field="modelo" class="col-12 p-3" id="modelo-formbuilder-0" style="background: var(--light); border: 1px solid #eeeeee; border-radius: 5px; color: var(--gray); text-align: center;">
        <?php
            for($i=$desde; $i>=$hasta; $i--){
        ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php
            }
        ?>
    </select>
<?php
}
?>