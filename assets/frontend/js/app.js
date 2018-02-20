//sidebar toggle
$(function () {
    $("#sidebar-toggle").click(function () {
        $(".sidebar").toggleClass("active");
    });
    $(".menu-toggle").click(function () {
        $("body").toggleClass("widescreen");
    });
    //slim
    $(".nicescroll").slimScroll({
        height: "100%",
        railOpacity: 0.9
    });
	//metis menu
    $("#menu").metisMenu();
    
    $(".content-page, .side-menu").equalize({
                });
	//tooltips
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
		$('[data-toggle="popover"]').popover();
	});
    
    //eventos
                                 
    $('#selecao').change(function() {
        window.location = $(this).val();
    });                   
    
});

$(function() {
    $('.txt-cpf').mask('000.000.000-00', {reverse: true});
    $('.txt-data').mask('00/00/0000');
    $('.txt-cep').mask('00000-000');
    $('.txt-telefone').mask('(00) 0000-0000');
    $('.txt-celular').mask('(00) 0 0000-0000');
});

var date = new Date();
var hours = date.getHours();
var minutes = date.getMinutes();
var ampm = hours >= 24 ? '' : '';

var month = date.getMonth();
var day = date.getDate();
var year = date.getFullYear();
var dayname = date.getDay();

var monthNames = [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ];
var week=["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"]; 

if (hours < 10){
    hours = '0' + hours
}
if (minutes < 10){
    minutes = '0' + minutes
}

document.getElementById("para1").innerHTML = hours + ":" + minutes+ampm;
document.getElementById("para2").innerHTML = week[dayname] + ",";
document.getElementById("para3").innerHTML = day + " de " + monthNames[month] + " de " + year + " |";



    