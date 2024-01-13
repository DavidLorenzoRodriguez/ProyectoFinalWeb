
function actualizarFechaYHora() {
  var fechaHoraInput = document.getElementById("fechaHora");
  if (fechaHoraInput) {
    var fechaHoraActual = new Date().toLocaleString(); // Obtiene la fecha y hora actual en formato local
    fechaHoraInput.value = fechaHoraActual;
  }
}


(function () {
  
  // funciones al cargar formulario.js

  document.getElementById("formulario").addEventListener("submit", function (event) {
    event.preventDefault(); // evita que el formulario se envíe y recargue la página

    // Actualiza la hora antes de obtener su valor
    actualizarFechaYHora();

    // Espera 100 milisegundos para asegurarte de que la hora se actualice
    setTimeout(function () {
      // Obtén los valores de los campos del formulario
      var hora = document.getElementById("fechaHora").value;
      var titulo = document.getElementById("titulo").value;
      var descripcion = document.getElementById("descripcion").value;
      var registros = [];
      for (var i = 1; i <= 4; i++) {
        registros.push(document.getElementById("registros" + i).value);
      }

      // procesa la información recopilada según tus necesidades
      console.log("Hora actual: " + hora);
      console.log("Título de la entrada: " + titulo);
      console.log("Descripción: " + descripcion);
      console.log("Lista de 4 registros: " + registros.join(", "));

      // Agrega el mensaje emergente
      var mensaje = "";
      if (hora && titulo && descripcion && registros.every(registro => registro)) {
        mensaje = "Formulario enviado correctamente";
      } else {
        mensaje = "Formulario no enviado";
      }


      var divMensaje = document.createElement("div");
      divMensaje.textContent = mensaje;
      divMensaje.classList.add("mensaje");
      document.body.appendChild(divMensaje);

      // Espera 3 segundos y elimina el mensaje emergente
      setTimeout(function () {
        divMensaje.remove();
      }, 3000);

      // Construye un objeto con la información del formulario
      var formData = {
        hora: hora,
        titulo: titulo,
        descripcion: descripcion,
        registros: registros
      };

      // Array para almacenar las ofertas
    var ofertas = [];
  
    // Función para crear la estructura HTML de una nueva oferta
    function crearNuevaOferta(titulo, descripcion, registros) {
      var nuevaOfertaHTML = `
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <h4 class="h4 mb-2">${titulo}</h4>
          <p>${descripcion}</p>
          <ul class="list-unstyled list-line">
            ${registros.map(registro => `<li>${registro}</li>`).join('')}
          </ul>
        </div>`;
  
      // Crear un elemento div y asignar el HTML generado
      var nuevaOfertaElemento = document.createElement('div');
      nuevaOfertaElemento.innerHTML = nuevaOfertaHTML;
  
      return nuevaOfertaElemento;
    }

      // Añade la nueva entrada al array de ofertas
      ofertas.push(formData);

      // Después de agregar una oferta a ofertas
      localStorage.setItem('ofertas', JSON.stringify(ofertas));


      // Limpiar la sección de ofertas antes de agregar las entradas
      //var contenedorOfertas = document.querySelector(".section.services .container .row");
      //contenedorOfertas.innerHTML = "";

      // Genera las entradas a partir del array de ofertas
      //for (var i = 0; i < ofertas.length; i++) {
        //var oferta = ofertas[i];
        //var nuevaOferta = crearNuevaOferta(oferta.titulo, oferta.descripcion, oferta.registros);
        //contenedorOfertas.appendChild(nuevaOferta);
      //}
    }, 100); // espera 100 milisegundos
  });

})();

