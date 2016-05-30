// Envio de formulario de registro
function FRenviar(){
		var dataString = $('#Registro').serialize();
        var peticion = $.ajax({
        url: 'PHP/registro.php?nocache='+Math.random(),
        type: 'POST',
        async: true,
        data: dataString,
            success: function(){
                $("#FRrespuesta").html(peticion.responseText);
           },
            error: function(){alert('Se produjo un error inesperado');}                      
        });
        }
        
// Envio de formulario de compatibilidad
function FCenviar(){
		var dataString = $('#compatibilidad').serialize();
        var peticion = $.ajax({
        url: 'PHP/compatibilidad.php?nocache='+Math.random(),
        type: 'POST',
        async: true,
        data: dataString,
            success: function(){
                $("#FCrespuesta").html(peticion.responseText);
           },
            error: function(){alert('Se produjo un error inesperado');}                      
        });
        }

// Envio de formulario de login
function FLenviar(){
		var dataString = $('#login').serialize();
        var peticion = $.ajax({
        url: 'PHP/login.php?nocache='+Math.random(),
        type: 'POST',
        async: true,
        data: dataString,
            success: function(){
                $("#FLrespuesta").html(peticion.responseText);
           },
            error: function(){alert('Se produjo un error inesperado');}                     
        });
        }        

// Envio de formulario de preferencias
function FPenviar(){
		var dataString = $('#preferencias').serialize();
        var peticion = $.ajax({
        url: 'PHP/preferencias.php?nocache='+Math.random(),
        type: 'POST',
        async: true,
        data: dataString,
            success: function(){
                $("#FPrespuesta").html(peticion.responseText);
           },
            error: function(){alert('Se produjo un error inesperado');}                      
        });
        }        


// Envio de formulario de preferencias
function FLUenviar(){
		var dataString = $('#Flugares').serialize();
        var peticion = $.ajax({
        url: 'PHP/lugares.php?nocache='+Math.random(),
        type: 'POST',
        async: true,
        data: dataString,
            success: function(){
                $("#FLUrespuesta").html(peticion.responseText);
           },
            error: function(){alert('Se produjo un error inesperado');}                      
        });
        }        
        
// Boton para spoilers
OCULTO="none";
VISIBLE="block";
  function mostrar1(blo) {
    document.getElementById(blo).style.display=VISIBLE;
    document.getElementById('ver_off1').style.display=VISIBLE;
    document.getElementById('ver_on1').style.display=OCULTO;
    }
  function ocultar1(blo) {
    document.getElementById(blo).style.display=OCULTO;
    document.getElementById('ver_off1').style.display=OCULTO;
    document.getElementById('ver_on1').style.display=VISIBLE;
    }