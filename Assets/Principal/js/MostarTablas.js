document.addEventListener("DOMContentLoaded", function () {
    // Llamada AJAX para obtener los datos del servidor
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "obtener_datos_prueba.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Parsear la respuesta JSON y mostrar los datos en la tabla
            var datos = JSON.parse(xhr.responseText);
        }
    };
    xhr.send();
});

// creamos una variable null

//mostrar las tablas y despegables

var ultimoBotonClicado = null;

function mostrarMasDatos1(idBusqueda) {
    // Obtiene el div correspondiente al botón actual
    var divActual = document.getElementById('datosExtras' + idBusqueda);

    // Si ya se hizo clic en otro botón, oculta su contenido y restablece la flecha
    if (ultimoBotonClicado !== null) {
        var divAnterior = document.getElementById('datosExtras' + ultimoBotonClicado);
        if (divAnterior && divAnterior !== divActual) {
            ocultarInformacion(divAnterior);
            actualizarFlecha(ultimoBotonClicado, 'fa-chevron-down');
        }
    }

    // Si el div actual está visible, lo oculta y restablece la flecha
    if (divActual.style.display === 'block') {
        ocultarInformacion(divActual);
        actualizarFlecha(idBusqueda, 'fa-chevron-down');
        ultimoBotonClicado = null;
        return;
    }

    // Actualiza el último botón clicado
    ultimoBotonClicado = idBusqueda;

    // Realiza una solicitud AJAX para obtener datos desde MySQL
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_datos_prueba.php?id=' + idBusqueda, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            // Parsea la respuesta JSON
            var datosDesdePHP = JSON.parse(xhr.responseText);

            // Limpia el contenido actual del div
            divActual.innerHTML = "";

            // Crea una tabla
            var tabla = document.createElement('table');
            tabla.className = 'table table-bordered border-dark tablas align-items-center';

            // Crea el cuerpo de la tabla
            var tbody = document.createElement('tbody');

            // Itera sobre los datos y agrega cada propiedad y valor como filas y celdas
            datosDesdePHP.forEach(function (dato) {
                for (var propiedad in dato) {
                    if (dato.hasOwnProperty(propiedad)) {
                        // Crea una fila (<tr>)
                        var fila = document.createElement('tr');

                        // Crea una celda para el icono
                        var celdaIcono = document.createElement('td');
                        celdaIcono.className = 'text-title zoom';
                        celdaIcono.innerHTML = '<div class="icon_P"><i class="fa-solid fa-temperature-half"></i></div>';
                        fila.appendChild(celdaIcono);

                        // Crea una celda para el input
                        var celdaInput = document.createElement('td');
                        celdaInput.className = 'readonly';
                        celdaInput.innerHTML = '<div class="input-group mb-2 inputmodif">' +
                            '<input type="text" class="form-control" placeholder="' + dato[propiedad] + '" />' +
                            '</div>';
                        fila.appendChild(celdaInput);

                        // Crea una celda para el valor actual
                        var celdaValor = document.createElement('td');
                        celdaValor.className = 'text-secondary zoom2 text-center';
                        celdaValor.innerHTML = '<span>' + dato[propiedad] + '</span>';
                        fila.appendChild(celdaValor);

                        // Agrega la fila al cuerpo de la tabla
                        tbody.appendChild(fila);
                    }
                }
            });

            // Agrega el cuerpo de la tabla al elemento table
            tabla.appendChild(tbody);

            // Agrega la tabla al div
            divActual.appendChild(tabla);

            // Muestra el div
            mostrarInformacion(divActual);

            // Actualiza la flecha
            actualizarFlecha(idBusqueda, 'fa-chevron-up');
        } else {
            alert('Error al obtener datos desde PHP.');
        }
    };

    xhr.send();
}

function mostrarInformacion(elemento) {
    elemento.style.display = 'block';
}

function ocultarInformacion(elemento) {
    elemento.style.display = 'none';
}

function actualizarFlecha(idBoton, esVisible) {
    // Actualiza el icono de la flecha
    var boton = document.getElementById('boton' + idBoton);
    if (boton) {
        var iconoFlecha = boton.querySelector('.fa');
        if (iconoFlecha) {
            // Agrega la lógica para cambiar la clase según la visibilidad
            if (esVisible) {
                iconoFlecha.className = 'fa-solid fa-chevron-down';
            } else {
                iconoFlecha.className = 'fa-solid fa-chevron-up';
            }
        }
    }
}


///actualizar pagina cada 30 seg

function autoRefresh() {
    location.reload();
}

// setinterval temporizado Llama a la función de actualización cada 30 segundos (30000 milisegundos)
setInterval(autoRefresh, 30000);

