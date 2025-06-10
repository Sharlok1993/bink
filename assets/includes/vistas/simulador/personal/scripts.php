<script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#simulador")[0].reset();
    });
    $( "#valorM" ).click(function() {
        $('#valorM').val('');
    });
    $("#valorM").change(function(){
        var value = $("#valorM").val();
        $('#valor').val(value);
        MASK(this,this.value,'-$##,###,##0',1);
        calcu();
    });
    function calcu(){
        var value = $("#valor").val();
        var data =[];
        data.push({name: 'monto', value: value });
        $.ajax({
            type: "POST",
            data: data,
            url: "<?php echo $ruta; ?>assets/includes/vistas/simulador/personal/selects/plazos.php",
            success: function(response){
                $('.plazoS').html(response).fadeIn();
            }
        });
    }
    $(document).on('change', '#plazo', function(event) {
        var valor = $("#valor").val();
        $('.monto-t').html('$'+moneda(valor));
        var plazo=$('select[id=plazo]').val();
        var comision=valor*<?php echo $factor_comision; ?>*<?php echo $factor_comision2; ?>;
        var comision_=comision.toFixed(0);
        $('.comision-t').html('$'+moneda(comision_));
        if(valor<=4999){
            $('.cat-t').html('0% sin IVA');
        }
        else if(valor>=5000){
            $('.cat-t').html(<?php echo $CAT; ?>+'% sin IVA');
        }
        var monto= parseFloat(valor)+parseFloat(comision);
        $('.detalles').removeClass('d-none');
        $('.detalles').fadeIn();
        amortizacion(valor,monto,plazo);
    });
    
    function amortizacion(valor,monto,plazo){
        var tasaIAnual=tia(valor);
        $('.tia').html(tasaIAnual+'% sin IVA');
        if(valor<=4999){
            var tim = tasaIAnual/52;
        }
        else if(valor>=5000){
            var tim = tasaIAnual/12;
        }
        var timIva=tim*1.16;
        var pagoFS=pago(timIva,plazo,monto);
        var pagoIm=(monto*tim)/100;
        var ivaInte=pagoIm*0.16;
        var pagoCapi=pagoFS-(pagoIm+ivaInte);
        var segVid=seguroDeVida(valor,monto,plazo);
        var totalpm=(parseFloat(pagoFS)+parseFloat(segVid));
        var totalpm_=totalpm.toFixed(0);
        $('.pmp').html('$'+moneda(totalpm_));
        $('#pagoMP').val(totalpm);
    }
    function seguroDeVida(valor,monto,plazo){
        var tasaIAnual=tia(valor);
        if(valor<=4999){
            var tim = tasaIAnual/52;
        }
        else if(valor>=5000){
            var tim = tasaIAnual/12;
        }
        var timIva=tim*1.16;
        var pagoFS=pago(timIva,plazo,monto);
        var pagoIm=(monto*tim)/100;
        var ivaInte=pagoIm*0.16;
        var pagoCapi=pagoFS-(pagoIm+ivaInte);
        var sac=[monto];
        var sacpp=monto-pagoCapi;
        var nuevaLongitud = sac.push(sacpp);
        var svSaC1=(monto/1000)*<?php echo $factor_seg_vida; ?>;
        var svSaC2=(sacpp/1000)*<?php echo $factor_seg_vida; ?>;
        var svSaC=[svSaC1];
        var nlong=svSaC.push(svSaC2);
        var svTotal=svSaC1+svSaC2;
        for (var i = 2; i < plazo; i++) {
            var pagoIm=(sacpp*tim)/100;
            var ivaInte=pagoIm*0.16;
            var pagoCapi=pagoFS-(pagoIm+ivaInte);
            var saCapi=sacpp-pagoCapi;
            var svSaCapi=(saCapi/1000)*<?php echo $factor_seg_vida; ?>;
            var nlong=svSaC.push(svSaCapi);
            var svTotal=svTotal+svSaCapi;
            var nuevaLongitud = sac.push(saCapi);
            var sacpp=sacpp-pagoCapi;
        }
        var segVida=svTotal.toFixed(0);
        $('.segVida').html('$'+moneda(segVida));
        var svpm=svTotal/plazo;
        return svpm;
    }
    function tia(valor){
        if(valor>=0 && valor<=4999){
            return(<?php echo $tia1; ?>);
        }
        else if(valor>=5000){
            return(<?php echo $tia2; ?>);
        }
    }
</script>
<script src="<?php echo $ruta; ?>assets/js/funciones.js"></script>  