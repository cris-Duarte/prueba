function encripta1 () {
	var plano = document.getElementById('text').value;

	$.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'p':plano,'t':1},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#encriptado1").html(response);
        }
    });
}

function encripta2 () {
	var plano = document.getElementById('text').value;
	$.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'p':plano,'t':2},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#encriptado2").html(response);
        }
    });
}

function encripta3 () {
	var plano = document.getElementById('text').value;
	$.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'p':plano,'t':3},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#encriptado3").html(response);
        }
    });
}

function desencriptar1 () {
    var encrip = document.getElementById('encriptado1').innerHTML;

    $.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'e':encrip,'et':1},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#descencriptado").html(response);
        }
    });

}

function desencriptar2 () {
    var encrip = document.getElementById('encriptado2').innerHTML;

    $.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'e':encrip,'et':2},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#descencriptado").html(response);
        }
    });

}

function desencriptar3 () {
    var encrip = document.getElementById('encriptado3').innerHTML;

    $.ajax({
        url:   'proceso.php', //archivo que recibe la peticion
        data: {'e':encrip,'et':3},
        //data: {mensaje : datos}, //datos que se envian a traves de ajax
        //dataType
        type:  'post', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#descencriptado").html(response);
        }
    });

}