function pago(timIva,plazo,monto){

    //var pfs=(tim*(1+tim)**plazo)*monto/(((1+tim)**plazo)-1);

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
            return numeroT;
        }
        else if(long>5 && long<=8){
            var i=long-5;
            var centenas=numeroT.substr(-5);
            var miles=numeroT.substr(0,i);
            return miles +','+ centenas;
        }
        else if(long>8 && long<=11){
            var i=long-8;
            var centenas=numeroT.substr(-5);
            var miles=numeroT.substr(-8,3);
            var millones=numeroT.substr(0,i);
            return millones + ',' + miles +','+ centenas;
        }
        else if(long>11 && long<=14){
            var i=long-11;
            var centenas=numeroT.substr(-5);
            var miles=numeroT.substr(-8,3);
            var millones=numeroT.substr(-11,3);
            var billones=numeroT.substr(0,i);
            return billones + ',' +millones + ',' + miles +','+ centenas;
        }
    }
    else{
        var long=numeroT.length;
        if(long>0 && long<=3){
            return numeroT;
        }
        else if(long>3 && long<=6){
            var i=long-3;
            var centenas=numeroT.substr(-3);
            var miles=numeroT.substr(0,i);
            return miles +','+ centenas;
        }
        else if(long>6 && long<=9){
            var i=long-6;
            var centenas=numeroT.substr(-3);
            var miles=numeroT.substr(-6,3);
            var millones=numeroT.substr(0,i);
            return millones + ',' + miles +','+ centenas;
        }
        else if(long>9 && long<=12){
            var i=long-9;
            var centenas=numeroT.substr(-3);
            var miles=numeroT.substr(-6,3);
            var millones=numeroT.substr(-9,3);
            var billones=numeroT.substr(0,i);
            return billones + ',' +millones + ',' + miles +','+ centenas;
        }
    }
} 
function MASK(form, n, mask, format) {
    if (format == "undefined") format = false;
    if (format || NUM(n)) {
        dec = 0, point = 0;
        x = mask.indexOf(".")+1;
        if (x) { dec = mask.length - x; }

        if (dec) {
            n = NUM(n, dec)+"";
            x = n.indexOf(".")+1;
            if (x) { point = n.length - x; } else { n += "."; }
            }
            else {
            n = NUM(n, 0)+"";
            } 
        for (var x = point; x < dec ; x++) {
            n += "0";
        }
        x = n.length, y = mask.length, XMASK = "";
        while ( x || y ) {
            if ( x ) {
                while ( y && "#0.".indexOf(mask.charAt(y-1)) == -1 ) {
                if ( n.charAt(x-1) != "-")
                XMASK = mask.charAt(y-1) + XMASK;
                y--;
                }
                XMASK = n.charAt(x-1) + XMASK, x--;
            }
            else if ( y && "$0".indexOf(mask.charAt(y-1))+1 ) {
                XMASK = mask.charAt(y-1) + XMASK;
            }
            if ( y ) { y-- }
        }
    }
    else {
        XMASK="";
    }
    if (form) {
        form.value = XMASK;
        if (NUM(n)<0) {
            form.style.color="#FF0000";
        }
        else {
            form.style.color="#000000";
        }
    }
    return XMASK;
}
function NUM(s, dec) {
    for (var s = s+"", num = "", x = 0 ; x < s.length ; x++) {
        c = s.charAt(x);
        if (".-+/*".indexOf(c)+1 || c != " " && !isNaN(c)) { num+=c; }
    }
    if (isNaN(num)) { num = eval(num); }
    if (num == "")  { num=0; } else { num = parseFloat(num); }
    if (dec != undefined) {
        r=.5; if (num<0) r=-r;
        e=Math.pow(10, (dec>0) ? dec : 0 );
        return parseInt(num*e+r) / e;
    }
    else {
        return num;
    }
}