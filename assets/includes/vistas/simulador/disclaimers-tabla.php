<div id="disclaimers-tabla">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <hr>
                <table id="disc">
                    <tbody>
                        <?php
                            $qry_dis="SELECT disclaimer FROM disclaimers WHERE id_credito='$id_credito' AND id_status='1';";
                            $rs_dis=mysqli_query($mysqli, $qry_dis);
                            while($row_rs_dis=mysqli_fetch_array($rs_dis)){
                        ?>
                            <tr>
                                <td><?php echo "- " . $row_rs_dis['disclaimer'];?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <!--<a href="<?php// tyc_doc($id_credito); ?>">Consulta los términos, comisiones, condiciones y requisitos de contratación de nuestro producto aquí.</a>-->
            </div>
        </div>
    </div>
</div>