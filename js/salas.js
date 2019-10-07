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
})