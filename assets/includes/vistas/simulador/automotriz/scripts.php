<script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(".nuevo").click(function(){
        $('.nuevo').find('.inner').removeClass('bg-white').addClass('bg-secondary');
        $('.nuevo').find('.text').removeClass('text-dark').addClass('text-white');
        $('.seminuevo').find('.inner').removeClass('bg-primary').addClass('bg-white');
        $('.seminuevo').find('.text').removeClass('text-white').addClass('text-dark');
        $('.marcaS').removeClass('d-none');
        $('#nuevo').prop('checked', true);
        if($("#seminuevo").is(':checked')){  
            $('#seminuevo').prop('checked', false);
        }
        $(document).ready(function() {
            var data =[];
            data.push({name: 'tag', value:'nuevo'});
            $.ajax({
                type: "POST",
                data: data,
                url: "<?php echo $ruta; ?>assets/includes/vistas/simulador/automotriz/selects/modelos.php",
                success: function(response){
                    $('.modeloA').html(response).fadeIn();
                }
            });
        });
    });
    $(".seminuevo").click(function(){
        $('.seminuevo').find('.inner').removeClass('bg-white').addClass('bg-primary');
        $('.seminuevo').find('.text').removeClass('text-dark').addClass('text-white');
        $('.nuevo').find('.inner').removeClass('bg-secondary').addClass('bg-white');
        $('.nuevo').find('.text').removeClass('text-white').addClass('text-dark');
        $('.marcaS').removeClass('d-none');
        $('#seminuevo').prop('checked', true);
        if($("#nuevo").is(':checked')){  
            $('#nuevo').prop('checked', false);
        }
        $(document).ready(function() {
            var data =[];
            data.push({name: 'tag', value:'seminuevo'});
            $.ajax({
                type: "POST",
                data: data,
                url: "<?php echo $ruta; ?>assets/includes/vistas/simulador/automotriz/selects/modelos.php",
                success: function(response){
                    $('.modeloA').html(response).fadeIn();
                }
            });
        });
    });
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?php echo $ruta; ?>assets/includes/vistas/simulador/automotriz/selects/marcas.php",
            success: function(response){
                $('.marcaS').html(response).fadeIn();
            }
        });
    });
    $(document).on('change', '#marcas', function(event) {
        var id=$('select[id=marcas]').val();
        $.ajax({
            type: "POST",
            url: "<?php echo $ruta; ?>assets/includes/vistas/simulador/automotriz/selects/submarcas.php?id="+id,
            success: function(response){
                $('.subMarcaS').html(response).fadeIn();
            }
        });
    });
    $(document).ready(function(){
        $('#simulador')[0].reset();
    });
    $( "#valorM" ).click(function() {
        $('#valorM').val('');
    });
    $( "#engancheM" ).click(function() {
        $('#engancheM').val('');
    });
    $("#valorM").change(function(){
        var value = $("#valorM").val();
        $('#valor').val(value);
        calc();
        seguro();
        MASK(this,this.value,'-$##,###,##0',1)
    });
    $("#engancheM").change(function(){
        var value = $("#engancheM").val();
        $('#enganche').val(value);
        calc2();
        seguro();
        MASK(this,this.value,'-$##,###,##0.00',1)
    });
    $(document).on('change', '#subMarca', function(event) {
        $('.valoresPrev').removeClass('d-none');
        $('.valoresPrev').fadeIn();
    });
    function calc(){
        var valor = $("#valor").val();
        $('.valor-t').html('$'+moneda(valor));
        var enganche = $("#enganche").val();
        $('.enganche-t').html('$'+moneda(enganche));
        $('#enganche').val(enganche);
        var monto = valor-enganche;
        $('.monto').html('$'+moneda(monto));
        $('.monto-t').html('$'+moneda(monto));
        var comision = (monto*<?php echo $factor_comision; ?>)*(<?php echo $factor_comision2; ?>);
        var comisionT= (comision).toFixed(1);
        $('.comision-t').html('$'+moneda(comisionT));
        var tasaIAnual=tia(enganche,valor);
        $('.tia').html(tasaIAnual+'% sin IVA');
        var plazo=$('select[id=plazo]').val();
        var segAutoFAnual=0;
        amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
    }
    function calc2(){
        var valor = $("#valor").val();
        $('.valor-t').html('$'+moneda(valor));
        var enganche = $("#enganche").val();
        $('.enganche-t').html('$'+moneda(enganche));
        //if(enganche>0){
            $('.detalles').removeClass('d-none');
            $('.detalles').fadeIn();
            var monto = valor-enganche;
            $('.monto').html('$'+moneda(monto));
            $('.monto-t').html('$'+moneda(monto));
            var comision = (monto*<?php echo $factor_comision; ?>)*(<?php echo $factor_comision2;?>);
            var comisionT= (comision).toFixed(1);
            $('.comision-t').html('$'+moneda(comisionT));
            var tasaIAnual=tia(enganche,valor);
            $('.tia').html(tasaIAnual+'% sin IVA');
            var plazo=$('select[id=plazo]').val();
            var segAutoFAnual=0;
            amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        //}
        //else{
            //$('.detalles').addClass('d-none');
            //$('.detalles').fadeOut();
        //}
    }
    $('input[type="checkbox"]').on('change', function(e){       
        seguro();
    });
    function seguro(){
        if ($('#seguro').prop('checked')){
            var valor = $("#valor").val();
            var enganche = $("#enganche").val();
            var monto = valor-enganche;
            var plazo=$('select[id=plazo]').val();
            var segAutoFAnu = valor*<?php echo $seg_auto; ?>;
            var segAutoFAnual = segAutoFAnu.toFixed(0);
            $('.saf-t').html('$'+moneda(segAutoFAnual));
            $('#seguro').val(segAutoFAnual);
            amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        }
        else{
            var segAutoFAnual=0;
            $('.saf-t').html('$0.00');
            var valor = $("#valor").val();
            var enganche = $("#enganche").val();
            var monto = valor-enganche;
            var plazo=$('select[id=plazo]').val();
            amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        }
    }
    $(document).on('change', '#plazo', function(event) {
        if( $('.seguro').prop('checked') ) {
            var valor = $("#valor").val();
            var enganche = $("#enganche").val();
            var monto = valor-enganche;
            var plazo=$('select[id=plazo]').val();
            var seguro=$('input:checkbox[name=seguro]:checked').val();
            var segAutoFAnual=parseInt(seguro);
            amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        }
        else{
            var valor = $("#valor").val();
            var enganche = $("#enganche").val();
            var monto = valor-enganche;
            var plazo=$('select[id=plazo]').val();
            var segAutoFAnu = 0;
            amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        }
    });
    function amortizacion(valor,enganche,monto,plazo,segAutoFAnual){
        var tasaIAnual=tia(enganche,valor);
        var tim = tasaIAnual/12;
        var timIva=tim*1.16;
        var pagoFS=pago(timIva,plazo,monto);
        var pagoIm=(monto*tim)/100;
        var ivaInte=pagoIm*0.16;
        var pagoCapi=pagoFS-(pagoIm+ivaInte);
        var segVid=seguroDeVida(valor,enganche,monto,plazo);
        var segAuto = suguroFinanciado(valor,enganche,segAutoFAnual);
        var totalpm=(parseFloat(pagoFS)+parseFloat(segVid)+parseFloat(segAuto));
        var totalpm_=totalpm.toFixed(0);
        $('.pmp').html('$'+moneda(totalpm_));
        $('#pagoMP').val(totalpm_);
    }
    function seguroDeVida(valor,enganche,monto,plazo){
        var tasaIAnual=tia(enganche,valor);
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
    function suguroFinanciado(valor, enganche, segAutoFAnual){
        var tasaIAnual=tia(enganche,valor);
        var tim = tasaIAnual/12;
        var timIva=tim*1.16;
        var segAutoFinanciado=segAutoFAnual*<?php echo $factor_seg_auto; ?>;
        var sf3=pago(timIva,12,segAutoFinanciado);
        var sf2=(segAutoFinanciado*tim)/100;
        var sf4=sf2*0.16;
        var sf1=sf3-sf2-sf4;
        var sfpm=sf1+sf2+sf4;
        return sfpm;
    }
    function tia(enganche,valor){
        var tasaIA_ = (enganche/valor)*100;
        var tasaIA=tasaIA_.toFixed(2);
        if(tasaIA>=0 && tasaIA<=4.99){
            return(<?php echo $tia1; ?>);
        }
        else if(tasaIA>=5 && tasaIA<=9.99){
            return(<?php echo $tia2; ?>);
        }
        else if(tasaIA>=10 && tasaIA<=14.99){
            return(<?php echo $tia3; ?>);
        }
        else if(tasaIA>=15 && tasaIA<=19.99){
            return(<?php echo $tia4; ?>);
        }
        else if(tasaIA>=20){
            return(<?php echo $tia5; ?>);
        }
    }
</script>
<script src="<?php echo $ruta; ?>assets/js/funciones.js"></script> 