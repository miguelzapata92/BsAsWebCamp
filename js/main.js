//Mapa
var map = L.map('mapa').setView([-34.61344, -58.359976], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-34.61344, -58.359976]).addTo(map)
    .bindPopup('BsAs WebCamp')
    .openPopup();

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
        let suma = document.getElementById('suma-total');

        //Extras

        let cantRemeras = document.getElementById('remera_evento');
        let cantGorras = document.getElementById('gorra_evento');

        //Eventos
        calcular.addEventListener('click', calcularMontos);

        paseDia.addEventListener('blur', mostrarDias);
        paseDosDias.addEventListener('blur', mostrarDias);
        paseCompleto.addEventListener('blur', mostrarDias);

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

                resumenCompra.style.display = "block";
                resumenCompra.innerHTML = '';
                for (let i = 0; i < listadoProductos.length; i++) {
                    resumenCompra.innerHTML += listadoProductos[i] + '<br/>';
                }
                suma.innerHTML = "$" + totalAPagar.toFixed(2);
            }

        }


        function mostrarDias() {
            let boletoDia = parseInt(paseDia.value, 10) || 0;
            let boletoDosDias = parseInt(paseDosDias.value, 10) || 0;
            let boletoCompleto = parseInt(paseCompleto.value, 10) || 0;

            let diasElegidos = [];

            if (boletoDia >= 1) {
                diasElegidos.push('viernes');
            }
            if (boletoDosDias >= 1) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (boletoCompleto >= 1) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (let i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block'
            }
        }

    });

})()

$(function() {

    //Lettering

    $('.website-name').lettering();

    //Menú Fijo
    let windowHeight = $(window).height();

    let barraAltura = $('.menu-principal').innerHeight();



    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.menu-principal').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.menu-principal').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });

        }
    });

    // Menú Móvil

    $('.mobile-menu').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //Programa de Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.hiden').hide();

        let enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;

    })

    //Animaciones para el contador
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200)
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200)
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500)
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1200)

    //Cuenta regresiva
    $('.cuenta-regresiva').countdown()
});