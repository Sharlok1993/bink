<script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $ruta; ?>assets/js/jquery.PrintArea.js"></script>
<script src="<?php echo $ruta; ?>vendor/libs/jspdf.umd.js"></script>
<script src="<?php echo $ruta; ?>vendor/dist/jspdf.plugin.autotable.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var valor = $("#valor").val();
        $('.monto-t').html('$'+moneda(valor));
        var comision = (valor*<?php echo $factor_comision; ?>)*(<?php echo $factor_comision2; ?>);
        var comisionT= (comision).toFixed(0);
        $('.comision-t').html('$'+moneda(comisionT));
        var monto = parseFloat(valor)+parseFloat(comision);
        var plazo = $("#plazo").val();
        $('.plazo-t').html(plazo+' meses');
        var tasaIAnual=<?php echo $tia1; ?>;
        $('.tia-t').html(tasaIAnual+'% sin IVA');
        var ingAComprobar= (<?php echo ($pagoMP*100)/30; ?>);
        var ingAComprobar_=ingAComprobar.toFixed(0);
        $('.ingAComp').html('$'+moneda(ingAComprobar_));
        amortizacion(valor,monto,plazo);
        function amortizacion(valor,monto,plazo){
            var tasaIAnual=<?php echo $tia1; ?>;
            var tim = tasaIAnual/12;
            var timIva=tim*1.16;
            var pagoFS=pago(timIva,plazo,monto);
            var pagoIm=(monto*tim)/100;
            var ivaInte=pagoIm*0.16;
            var pagoCapi=pagoFS-(pagoIm+ivaInte);
            var moral='<?php if(isset($moral)){ echo $moral; } else { echo ' ';} ?>';
            if(moral===' '){
                var segVid=seguroDeVida(valor,monto,plazo);
            }
            else{
                var segVid=0;
            }
            var totalpm=(parseFloat(pagoFS)+parseFloat(segVid));
            var totalpm_=totalpm.toFixed(0);
                var c=0;
                var tablaCont=[];
                var pagoImT=0;
                var ivaInteT=0;
                var pagoCapiT=0;
                var segAutoT=0;
                var totalpmT=0;
                var segVidTotal=(parseFloat(segVid)*plazo);
                var segVidT=segVidTotal.toFixed(0);
                for (var i = 1; i <= plazo; i++) {
                    var pagoIm=(monto*tim)/100;
                    var ivaInte=pagoIm*0.16;
                    var pagoCapi=pagoFS-(pagoIm+ivaInte);
                    var totalpm=(parseFloat(pagoFS)+parseFloat(segVid));
                    var totalpm_=totalpm.toFixed(0);
                    var cont=c+1;
                    var tabla='<tr><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">'+cont+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((monto).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((pagoCapi).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((pagoIm).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((ivaInte).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((segVid).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((totalpm).toFixed(0))+'</td></tr>';
                    var monto=monto-pagoCapi;
                    var c=c+1;
                    var pagoImT=pagoImT+pagoIm;
                    var ivaInteT=ivaInteT+ivaInte;
                    var pagoCapiT=pagoCapiT+pagoCapi;
                    var totalpmT=totalpmT+totalpm;
                    var nuevaLongitud = tablaCont.push(tabla);
                }
                var filaTotales='<tr><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">Totales</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$0</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((pagoCapiT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((pagoImT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((ivaInteT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda(segVidT)+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((totalpmT).toFixed(0))+'</td></tr>';
                var ultimaLongitud = tablaCont.push(filaTotales);
                tablaCont.forEach(function (elemento, indice, array) {
                    $('.tablaAmortizacion').append(elemento);
                });
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
    });
</script>
<script src="<?php echo $ruta; ?>assets/js/funciones.js"></script>  
<script src="<?php echo $ruta; ?>assets/js/imprimir.js"></script>
<script type="text/javascript">
    $('#pdf').click(function (){     
        setTimeout(function(){
            var pdf = new jspdf.jsPDF();
            /// Codigo para agregar una imagen
            var image1 = new Image();
            image1.src = "<?php echo $ruta; ?>assets/img/logo_bink.jpg"; /// URL de la imagen
            pdf.addImage(image1, 'JPEG', 15, 15, 33.3, 14.54);
            //Se obtienen los valores de la cabecera
            var montoT = $(".monto-t").text();
            var comisionT = $(".comision-t").text();
            var seguroVidaT = $(".segVida").text();
            var plazoT = $(".plazo-t").text();
            var tiaT = $(".tia-t").text();
            var catT = $(".cat-t").text();
            var ingAcompT = $(".ingAComp").text();
            pdf.setFontSize(20);
            pdf.setTextColor(0,155,219);
            pdf.text(15,35,"Tabla de amortización");
            pdf.setFontSize(14);
            pdf.setTextColor(0,155,219);
            pdf.text(15,40,"Crédito PyME");
            pdf.setFontSize(10);
            pdf.setTextColor(0,0,0);
            pdf.text(15,45,"Monto a financiar: " + montoT);
            pdf.text(15,50,"Comisión sobre monto a financiar (<?php echo ($factor_comision*100); ?>%): " + comisionT);
            pdf.text(15,55,"Seguro de vida: " + seguroVidaT);
            pdf.text(15,60,"Plazo seleccionado: " + plazoT);
            pdf.text(15,65,"Tasa de interés anual: " + tiaT);
            pdf.text(15,70,"CAT promedio: " + catT);
            pdf.text(15,75,"Mínimo de ingresos a comprobar: " + ingAcompT);
                //Se agrega la tabla html
                pdf.autoTable({
                    html: '#tablaAmort',
                    startY: 80,
                })
                //Se agrega la tabla html
                pdf.addPage();
                pdf.autoTable({
                    html: '#disc',
                    startY: 15,
                })
                //Se genera el archivo
                pdf.save('tabla-amortizacion-pyme.pdf');
        }, 100);
        setTimeout(function(){
        }, 200);
    });
</script>