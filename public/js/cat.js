$(document).ready(function() {
    var divImage = $(window).height() - 115;
    $("#div-logo").css('height', divImage+'px')

    var divDestino = ($(".destino").height())*0.30;
    $(".home-destino").css('height', divDestino+'px')
});