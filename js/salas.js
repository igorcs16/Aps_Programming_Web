$(function(){
    $("#buttomSala1").click(function(){
        $("#sala1").toggle();
        $("#sala2").hide();
        $("#sala3").hide();
    });

    $("#buttomSala2").click(function(){
        $("#sala2").toggle();
        $("#sala1").hide();
        $("#sala3").hide();
    });

    $("#buttomSala3").click(function(){
        $("#sala3").toggle();
        $("#sala2").hide();
        $("#sala1").hide();
    });
});

$(function(){
    $("#Reserva1").click(function(){
        $("#state1").text("Reservada");
    });

    $("#Cancelar1").click(function(){
        $("#state1").text("Disponível");
    });

    $("#Reserva2").click(function(){
        $("#state2").text("Reservada");
    });

    $("#Cancelar2").click(function(){
        $("#state2").text("Disponível");
    });

    $("#Reserva3").click(function(){
        $("#state3").text("Reservada");
    });

    $("#Cancelar3").click(function(){
        $("#state3").text("Disponível");
    });
});