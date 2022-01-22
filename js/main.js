(function() {
    "use strict";



    let regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {

        //Campos datos usuarios
        const nombre = document.getElementById('nombre');
        const apellido = document.getElementById('apellido');
        const email = document.getElementById('email');


        //Campos Pases

        const paseDia = document.getElementById('pase_dia');
        const paseCompleto = document.getElementById('pase_completo');
        const paseDosDias = document.getElementById('pase_dosdias');



        //Botones y Divs

        const calcular = document.getElementById('calcular');
        const errorDiv = document.getElementById('error');
        const botonRegistro = document.getElementById('btn-registro');
        const resultado = document.getElementById('lista-productos');



        calcular.addEventListener('click', calcularMontos);

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();

            } else {
                let valorDia = 700,
                    ValorDosDias = 1300,
                    ValorBoletoCompleto = 1800;


                let totalAPagar = (valorDia * paseDia.value) + (ValorDosDias * paseDosDias.value) + (ValorBoletoCompleto * paseCompleto.value)
                console.log(totalAPagar)


            }

        }
    });

})()