<script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $ruta; ?>assets/js/jquery.PrintArea.js"></script>
<script src="<?php echo $ruta; ?>vendor/libs/jspdf.umd.js"></script>
<script src="<?php echo $ruta; ?>vendor/dist/jspdf.plugin.autotable.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var valor = $("#valor").val();
        $('.valor-t').html('$'+moneda(valor));
        var enganche = $("#enganche").val();
        $('.enganche-t').html('$'+moneda(enganche));
        var monto = valor-enganche;
        $('.monto-t').html('$'+moneda(monto));
        var comision = (monto*<?php echo $factor_comision; ?>)*(<?php echo $factor_comision2; ?>);
        var comisionT= (comision).toFixed(0);
        $('.comision-t').html('$'+moneda(comisionT));
        var segAutoFAnual = $("#seguro").val();
        $('.seguro-t').html('$'+moneda(segAutoFAnual));
        var plazo = $("#plazo").val();
        $('.plazo-t').html(plazo+' meses');
        var tasaIAnual=tia(enganche,valor);
        $('.tia-t').html(tasaIAnual+'% sin IVA');
        var ingAComprobar= (<?php echo ($pagoMP*100)/30; ?>);
        var ingAComprobar_=ingAComprobar.toFixed(0);
        $('.ingAComp').html('$'+moneda(ingAComprobar_));
        amortizacion(valor,enganche,monto,plazo,segAutoFAnual);
        function amortizacion(valor,enganche,monto,plazo,segAutoFAnual){
            var tasaIAnual=tia(enganche,valor);
            var tim = tasaIAnual/12;
            var timIva=tim*1.16;
            var pagoFS=pago(timIva,plazo,monto);
            var pagoIm=(monto*tim)/100;
            var ivaInte=pagoIm*0.16;
            var pagoCapi=pagoFS-(pagoIm+ivaInte);
            var segVid=seguroDeVida(valor,enganche,monto,plazo);
            var segAuto=suguroFinanciado(valor,enganche,segAutoFAnual);
            var totalpm=(parseFloat(pagoFS)+parseFloat(segVid)+parseFloat(segAuto));
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
                var segAuto=suguroFinanciado(valor,enganche,segAutoFAnual);
                var totalpm=(parseFloat(pagoFS)+parseFloat(segVid)+parseFloat(segAuto));
                var totalpm_=totalpm.toFixed(0);
                var cont=c+1;
                var tabla='<tr><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">'+cont+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((monto).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((pagoCapi).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((pagoIm).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((ivaInte).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((segVid).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((segAuto).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$'+moneda((totalpm).toFixed(0))+'</td></tr>';
                var monto=monto-pagoCapi;
                var c=c+1;
                var pagoImT=pagoImT+pagoIm;
                var ivaInteT=ivaInteT+ivaInte;
                var pagoCapiT=pagoCapiT+pagoCapi;
                var segAutoT=segAutoT+segAuto;
                var totalpmT=totalpmT+totalpm;
                var nuevaLongitud = tablaCont.push(tabla);
            }
            var filaTotales='<tr><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">Totales</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">$0</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((pagoCapiT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((pagoImT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((ivaInteT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda(segVidT)+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((segAutoT).toFixed(0))+'</td><td style="text-align: center; padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight: bolder;">$'+moneda((totalpmT).toFixed(0))+'</td></tr>';
            var ultimaLongitud = tablaCont.push(filaTotales);
            tablaCont.forEach(function (elemento, indice, array) {
                $('.tablaAmortizacion').append(elemento);
            });
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
        function pago(timIva,plazo,monto){
            var tim = timIva/100;
            var a1 = 1+tim;
            var a2 = a1**plazo;
            var a3 = tim*a2*monto;
            var a4 = a2-1;
            var a5 = a3/a4;
            return a5.toFixed(2);
        }
        function moneda(numero){
            var numeroT=numero.toString();
            if(numeroT.indexOf('.')!=-1){
                var long=numeroT.length;
                if(long>0 && long<=5){
                    return numeroT + '0';
                }
                else if(long>5 && long<=8){
                    var i=long-5;
                    var centenas=numeroT.substr(-5);
                    var miles=numeroT.substr(0,i);
                    return miles +','+ centenas + '0';
                }
                else if(long>8 && long<=11){
                    var i=long-8;
                    var centenas=numeroT.substr(-5);
                    var miles=numeroT.substr(-8,3);
                    var millones=numeroT.substr(0,i);
                    return millones + ',' + miles +','+ centenas + '0';
                }
                else if(long>11 && long<=14){
                    var i=long-11;
                    var centenas=numeroT.substr(-5);
                    var miles=numeroT.substr(-8,3);
                    var millones=numeroT.substr(-11,3);
                    var billones=numeroT.substr(0,i);
                    return billones + ',' +millones + ',' + miles +','+ centenas + '0';
                }
            }
            else{
                var long=numeroT.length;
                if(long>0 && long<=3){
                    return numeroT + '.00';
                }
                else if(long>3 && long<=6){
                    var i=long-3;
                    var centenas=numeroT.substr(-3);
                    var miles=numeroT.substr(0,i);
                    return miles +','+ centenas + '.00';
                }
                else if(long>6 && long<=9){
                    var i=long-6;
                    var centenas=numeroT.substr(-3);
                    var miles=numeroT.substr(-6,3);
                    var millones=numeroT.substr(0,i);
                    return millones + ',' + miles +','+ centenas + '.00';
                }
                else if(long>9 && long<=12){
                    var i=long-9;
                    var centenas=numeroT.substr(-3);
                    var miles=numeroT.substr(-6,3);
                    var millones=numeroT.substr(-9,3);
                    var billones=numeroT.substr(0,i);
                    return billones + ',' +millones + ',' + miles +','+ centenas + '.00';
                }
            }
        }
            
    });
</script>
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
            var valorT = $(".valor-t").text();
            var comisionT = $(".comision-t").text();
            var engancheT = $(".enganche-t").text();
            var seguroT = $(".seguro-t").text();
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
            pdf.text(15,40,"Crédito automotriz");
            pdf.setFontSize(10);
            pdf.setTextColor(0,0,0);
            pdf.text(15,50,"Monto a financiar: " + montoT);
            pdf.text(15,55,"Valor del auto: " + valorT);
            pdf.text(15,60,"Comisión sobre monto a financiar (<?php echo ($factor_comision*100); ?>%): " + comisionT);
            pdf.text(15,65,"Enganche: " + engancheT);
            pdf.text(15,70,"**Seguro anual financiado: " + seguroT);
            pdf.text(15,75,"Seguro de vida: " + seguroVidaT);
            pdf.text(15,80,"Plazo seleccionado: " + plazoT);
            pdf.text(15,85,"Tasa de interés anual: " + tiaT);
            pdf.text(15,90,"CAT promedio: " + catT);
            pdf.text(15,95,"Mínimo de ingresos a comprobar: " + ingAcompT);
            
            //Se agrega la tabla html
            pdf.autoTable({
                html: '#tablaAmort',
                startY: 102,
            })
            //Se agrega la tabla html
            pdf.addPage();
            pdf.autoTable({
                html: '#disc',
                startY: 15,
            })
            //Se genera el archivo
            pdf.save('tabla-amortizacion-automotriz.pdf');
            

        }, 100);
        setTimeout(function(){

        }, 200);

    });
</script>