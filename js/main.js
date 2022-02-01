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
        let resumenCompra = document.getElementById('lista-productos');

        //Extras

        let cantRemeras = document.getElementById('remera_evento');
        let cantGorras = document.getElementById('gorra_evento');

        calcular.addEventListener('click', calcularMontos);

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();

            } else {
                let valorUnDia = 700;
                let valorDosDias = 1300;
                let valorBoletoCompleto = 1800;
                let valorRemera = (1000 * .93);
                let valorGorra = 600;
                let totalAPagar = (valorUnDia * (parseInt(paseDia.value, 10) || 0) + (valorDosDias * (parseInt(paseDosDias.value, 10) || 0)) + (valorBoletoCompleto * (parseInt(paseCompleto.value, 10) || 0)) + (valorRemera * (parseInt(cantRemeras.value, 10) || 0)) + (valorGorra * (parseInt(cantGorras.value, 10) || 0)));

                console.log(totalAPagar);

                let listadoProductos = [];

                if (paseDia.value >= 1) {
                    listadoProductos.push(('Pases por día: ') + (parseInt(paseDia.value, 10) || 0));

                }

                if (paseDosDias.value >= 1) {
                    listadoProductos.push(('Pases por dos días: ') + (parseInt(paseDosDias.value, 10) || 0));

                }

                if (paseCompleto.value >= 1) {
                    listadoProductos.push(('Pases Completos: ') + (parseInt(paseCompleto.value, 10) || 0));

                }
                if (cantGorras.value >= 1) {
                    listadoProductos.push(('Gorras: ') + (parseInt(cantGorras.value, 10) || 0));

                }
                if (cantRemeras.value >= 1) {
                    listadoProductos.push(('Remeras: ') + (parseInt(cantRemeras.value, 10) || 0));

                }


                resumenCompra.innerHTML = '';
                for (let i = 0; i < listadoProductos.length; i++) {
                    resumenCompra.innerHTML += listadoProductos[i] + '<br/>';
                }

            }

        }
    });

})()