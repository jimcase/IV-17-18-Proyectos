window.onload = function() {

    // cogemos el boton de registrar
    var buttonSignUp = document.getElementById('buttonSignUp');

    //button back to sign in
    var backtosignin = document.getElementById("backtosignin");
    //boton de cerrar
    // var cerrar = document.getElementsByClassName("cerrar")[0];

    /*
    El valor más sencillo de display es none que hace que el elemento no genere ninguna caja.
    El resultado es que el elemento desaparece por completo de la página y no ocupa sitio, por
    lo que los elementos adyacentes ocupan su lugar. Si se utiliza la propiedad display: none
    sobre un elemento, todos sus descendientes también desaparecen por completo de la página.

    Si se quiere hacer un elemento invisible, es decir, que no se vea pero que siga ocupando
    el mismo sitio, se debe utilizar la propiedad visibility. La propiedad display: none se utiliza
    habitualmente en aplicaciones web dinámicas creadas con JavaScript y que muestran/ocultan
    contenidos cuando el usuario realiza alguna acción como pulsar un botón o un enlace.
    ref: "http://librosweb.es/referencia/css/display.html"
    */
    buttonSignUp.onclick = function() {
        //signin_form.style.display = "none";
        $('#signup').css('display', 'block');
        $('#signin').css('display', 'none');


        //si pulsamos esc se cierra
        $(document).keyup(function(event) {
            if (event.which == 27) {
                //signup_form.style.display = "none";
                $('#signup').css('display', 'none');
                $('#signin').css('display', 'block');
                // $("#container").hide();
                // $('.uploadIcon').css('color', '#aaaaaa');

            }
        });
    }

    backtosignin.onclick = function() {
        //signin_form.style.display = "none";
        $('#signup').css('display', 'none');
        $('#signin').css('display', 'block');
    }

    // Cerramos la ventanaEmergente, ponemos la variable display en none
    // cerrar.onclick = function() {
    //     fondoOpaco.style.display = "none";
    // }

    // Cuando pulsamos fuera de la ventana emergente se cierre automaticamente
    //target: Devuelve el elemento del DOM que disparó el evento
    // window.onclick = function(event) {
    //     if (event.target == fondoOpaco) {
    //         fondoOpaco.style.display = "none";
    //     }
    // }


};