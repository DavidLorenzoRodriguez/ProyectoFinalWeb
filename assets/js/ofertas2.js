// Recuperar las ofertas del localStorage
var ofertas = JSON.parse(localStorage.getItem('ofertas')) || [];

(function () {
  
    function actualizarHora() {
      var horaInput = document.getElementById("hora");
      if (horaInput) { 
        horaInput.value = new Date().toLocaleTimeString();
      }
    }
  
    // Abrir formulario.js
    document.getElementById('crearOfertaBtn').addEventListener('click', abrirFormulario);
    function abrirFormulario() {
      window.open("formulario.html", "_blank");
    }
  
    // Mostrar las ofertas en el contenedorOfertas
    var contenedorOfertas = document.getElementById("contenedorOfertas");
    var columnasPorFila = 3; // Número de columnas por fila
    var ofertaPorColumna = Math.ceil(ofertas.length / columnasPorFila);
  
    for (var i = 0; i < ofertas.length; i += ofertaPorColumna) {
      var filaOfertas = ofertas.slice(i, i + ofertaPorColumna);
      var filaElemento = document.createElement('div');
      filaElemento.classList.add('row');
  
      for (var j = 0; j < filaOfertas.length; j++) {
        var oferta = filaOfertas[j];
        var nuevaOfertaElemento = crearNuevaOferta(oferta.titulo, oferta.descripcion, oferta.registros);
        filaElemento.appendChild(nuevaOfertaElemento);
      }
  
      contenedorOfertas.appendChild(filaElemento);
    }
  
    // Función para crear la estructura HTML de una nueva oferta
    function crearNuevaOferta(titulo, descripcion, registros) {
      var nuevaOfertaHTML = `
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
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
})();


  