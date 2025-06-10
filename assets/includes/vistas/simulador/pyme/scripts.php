<script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(".fisica").click(function(){
        $('.fisica').find('.inner').removeClass('bg-white').addClass('bg-secondary');
        $('.fisica').find('.text').removeClass('text-dark').addClass('text-white');
        $('.moral').find('.inner').removeClass('bg-primary').addClass('bg-white');
        $('.moral').find('.text').removeClass('text-white').addClass('text-dark');
        $('.valoresPrev').removeClass('d-none');
        $('.valoresPrev').fadeIn();
        $('#fisica').prop('checked', true);
        if($("#moral").is(':checked')){  
            $('#moral').prop('checked', false);
            var valor = $("#valor").val();
            $('.monto-t').html('$'+moneda(valor));
            var plazo=$('select[id=plazo]').val();
            var comision=valor*<?php echo $factor_comision; ?>*<?php echo $factor_comision2; ?>;
            var comision_=comision.toFixed(0);
            $('.comision-t').html('$'+moneda(comision_));
            var monto= parseFloat(valor)+parseFloat(comision);
            $('.detalles').removeClass('d-none');
            $('.detalles').fadeIn();
            amortizacion(valor,monto,plazo);
        }
    });
    $(".moral").click(function(){
        $('.moral').find('.inner').removeClass('bg-white').addClass('bg-primary');
        $('.moral').find('.text').removeClass('text-dark').addClass('text-white');
        $('.fisica').find('.inner').removeClass('bg-secondary').addClass('bg-white');
        $('.fisica').find('.text').removeClass('text-white').addClass('text-dark');
        $('.valoresPrev').removeClass('d-none');
        $('.valoresPrev').fadeIn();
        $('#moral').prop('checked', true);
        if($("#fisica").is(':checked')){  
            $('#fisica').prop('checked', false);
            var valor = $("#valor").val();
            $('.monto-t').html('$'+moneda(valor));
            var plazo=$('select[id=plazo]').val();
            var comision=valor*<?php echo $factor_comision; ?>*<?php echo $factor_comision2; ?>;
            var comision_=comision.toFixed(0);
            $('.comision-t').html('$'+moneda(comision_));
            var monto= parseFloat(valor)+parseFloat(comision);
            $('.detalles').removeClass('d-none');
            $('.detalles').fadeIn();
            amortizacion(valor,monto,plazo);
        }
    });
    $(document).ready(function(){
        $("#simulador")[0].reset();
    });
    $( "#valorM" ).click(function() {
        $('#valorM').val('');
    });
    $("#valorM").change(function(){
        var value = $("#valorM").val();
        $('#valor').val(value);
        MASK(this,this.value,'-$##,###,##0',1)
    });
    $(document).on('change', '#plazo', function(event) {
        var valor = $("#valor").val();
        $('.monto-t').html('$'+moneda(valor));
        var plazo=$('select[id=plazo]').val();
        var comision=valor*<?php echo $factor_comision; ?>*<?php echo $factor_comision2; ?>;
        var comision_=comision.toFixed(0);
        $('.comision-t').html('$'+moneda(comision_));
        var monto= parseFloat(valor)+parseFloat(comision);
        $('.detalles').removeClass('d-none');
        $('.detalles').fadeIn();
        amortizacion(valor,monto,plazo);
    });
    function amortizacion(valor,monto,plazo){
        var tasaIAnual=<?php echo $tia1; ?>;
        $('.tia').html(tasaIAnual+'% sin IVA');
        var tim = tasaIAnual/12;
        var timIva=tim*1.16;
        var pagoFS=pago(timIva,plazo,monto);
        var pagoIm=(monto*tim)/100;
        var ivaInte=pagoIm*0.16;
        var pagoCapi=pagoFS-(pagoIm+ivaInte);
        if($("#moral").is(':checked')){  
            var totalpm=(parseFloat(pagoFS));
            $('.segVida').html('$0.00');
        }
        if($("#fisica").is(':checked')){  
            var segVid=seguroDeVida(valor,monto,plazo);
            var totalpm=(parseFloat(pagoFS)+parseFloat(segVid));
        }
        var totalpm_=totalpm.toFixed(0);
        $('.pmp').html('$'+moneda(totalpm_));
        $('#pagoMP').val(totalpm);
    }
    function seguroDeVida(valor,monto,plazo){
        var tasaIAnual=<?php echo $tia1; ?>;
        var tim = tasaIAnual/12;
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
</script>
<script src="<?php echo $ruta; ?>assets/js/funciones.js"></script>