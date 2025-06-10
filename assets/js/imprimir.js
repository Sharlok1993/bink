$("#imprime").click(function (){
    $("#logo_Imp").removeClass('d-none');
    $("#btn-ccoc").addClass('d-none');
    $("#botones").addClass('d-none');
    setTimeout(function(){
        $("#tabla-amortizacion").printArea();
    }, 100);
    setTimeout(function(){
        $("#logo_Imp").addClass('d-none');
        $("#btn-ccoc").removeClass('d-none');
        $("#botones").removeClass('d-none');
    }, 150);
});