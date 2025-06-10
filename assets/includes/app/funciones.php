<?php
    function factor_seg_vida($id)
    {
        require("conexion.php");

        $qry_factor_seg_vida="SELECT a.factor_seg_vida FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_factor_seg_vida=mysqli_query($mysqli, $qry_factor_seg_vida);
        $factor_seg_vida_=$rs_factor_seg_vida->fetch_object();
        $factor_seg_vida=$factor_seg_vida_->factor_seg_vida;
        
        return $factor_seg_vida;
    }

    
    function seg_auto($id)
    {
        require("conexion.php");

        $qry_seg_auto="SELECT a.seg_auto FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_seg_auto=mysqli_query($mysqli, $qry_seg_auto);
        $seg_auto_=$rs_seg_auto->fetch_object();
        $seg_auto=$seg_auto_->seg_auto;
        
        return $seg_auto;
    }
    
    function factor_seg_auto($id)
    {
        require("conexion.php");

        $qry_factor_seg_auto="SELECT a.factor_seg_auto FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_factor_seg_auto=mysqli_query($mysqli, $qry_factor_seg_auto);
        $factor_seg_auto_=$rs_factor_seg_auto->fetch_object();
        $factor_seg_auto=$factor_seg_auto_->factor_seg_auto;
        
        return $factor_seg_auto;
    }
    
    function factor_comision($id)
    {
        require("conexion.php");

        $qry_factor_comision="SELECT a.factor_comision FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_factor_comision=mysqli_query($mysqli, $qry_factor_comision);
        $factor_comision_=$rs_factor_comision->fetch_object();
        $factor_comision=$factor_comision_->factor_comision;
        
        return $factor_comision;
    }

    function factor_comision2($id)
    {
        require("conexion.php");

        $qry_factor_comision2="SELECT a.factor_comision2 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_factor_comision2=mysqli_query($mysqli, $qry_factor_comision2);
        $factor_comision2_=$rs_factor_comision2->fetch_object();
        $factor_comision2=$factor_comision2_->factor_comision2;
        
        return $factor_comision2;
    }
    
    function tia1($id)
    {
        require("conexion.php");

        $qry_tia1="SELECT a.tia1 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_tia1=mysqli_query($mysqli, $qry_tia1);
        $tia1_=$rs_tia1->fetch_object();
        $tia1=$tia1_->tia1;
        
        return $tia1;
    }

    function tia2($id)
    {
        require("conexion.php");

        $qry_tia2="SELECT a.tia2 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_tia2=mysqli_query($mysqli, $qry_tia2);
        $tia2_=$rs_tia2->fetch_object();
        $tia2=$tia2_->tia2;
        
        return $tia2;
    }
    
    function tia3($id)
    {
        require("conexion.php");

        $qry_tia3="SELECT a.tia3 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_tia3=mysqli_query($mysqli, $qry_tia3);
        $tia3_=$rs_tia3->fetch_object();
        $tia3=$tia3_->tia3;
        
        return $tia3;
    }
    
    function tia4($id)
    {
        require("conexion.php");

        $qry_tia4="SELECT a.tia4 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_tia4=mysqli_query($mysqli, $qry_tia4);
        $tia4_=$rs_tia4->fetch_object();
        $tia4=$tia4_->tia4;
        
        return $tia4;
    }
    
    function tia5($id)
    {
        require("conexion.php");

        $qry_tia5="SELECT a.tia5 FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_tia5=mysqli_query($mysqli, $qry_tia5);
        $tia5_=$rs_tia5->fetch_object();
        $tia5=$tia5_->tia5;
        
        return $tia5;
    }

    function CAT($id)
    {
        require("conexion.php");

        $qry_CAT="SELECT a.CAT FROM valores a WHERE a.id_status='1' AND a.id_valor='$id';";
        $rs_CAT=mysqli_query($mysqli, $qry_CAT);
        $CAT_=$rs_CAT->fetch_object();
        $CAT=$CAT_->CAT;
        
        return $CAT;
    }

    function c_id($id)
    {
        require("conexion.php");

        $qry_id_c="SELECT a.id_credito FROM creditos a WHERE a.id_status='1' AND a.url_f='$id';";
        $rs_id_c=mysqli_query($mysqli, $qry_id_c);
        $id_=$rs_id_c->fetch_object();
        $id_c=$id_->id_credito;
        
        return $id_c;
    }

?>