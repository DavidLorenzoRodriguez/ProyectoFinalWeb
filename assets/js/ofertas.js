$(document).ready(function (){

    $('.modal').modal();

})


function mostrarModal() {
   
    $("#modalData").modal("show")
}

$("#crearOfertaBtn").click(function () {
    mostrarModal()
})

$("#btnGuardar").click(function () {
    // Obtener los valores del formulario
    
    var titulo = $("#txtTitulo").val();
    var descripcion = $("#txtDescripcion").val();
    var categoria = $("#cboCategoria option:selected").text();

    // console.log(categoria);
    // debugger;

    // Validar que se hayan ingresado datos
    if ( titulo === "" || descripcion === "" || categoria === "") {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Crear una nueva fila en la tabla
    var tabla = document.getElementById("tbdata").getElementsByTagName('tbody')[0];
    var nuevaFila = tabla.insertRow(tabla.rows.length);

    // Insertar celdas con los datos del formulario
    var celdaTitulo = nuevaFila.insertCell(0);
    var celdaDescripcion = nuevaFila.insertCell(1);
    var celdaCategoria = nuevaFila.insertCell(2);
    var celdaAcciones = nuevaFila.insertCell(3);

    celdaTitulo.innerHTML = titulo;
    celdaDescripcion.innerHTML = descripcion;
    celdaCategoria.innerHTML = categoria;

    // agregar enlace o botones para acciones en la celda de acciones si es necesario
    celdaAcciones.innerHTML = '<button onclick="editarFila(this)">Editar</button>' + '<button class="btn-danger" onclick="eliminarfila(this)">Eliminar</button>';
    // Limpiar el formulario después de guardar los datos

    $("#txtTitulo").val("");
    $("#txtDescripcion").val("");
    $("#cboCategoria").val("");

    // Cerrar el modal
    $("#modalData").modal("hide")
})

// Función para editar una fila
function editarFila(button) {
    // Obtener la fila actual
    var fila = button.parentNode.parentNode;

    // Obtener los valores de la fila
    
    var titulo = fila.cells[0].innerHTML;
    var descripcion = fila.cells[1].innerHTML;
    var categoria = fila.cells[2].innerHTML;

    // Llenar el formulario con los valores de la fila
    
    $("#txtTitulo").val(titulo);
    $("#txtDescripcion").val(descripcion);
    $("#cboCategoria option:selected").text(categoria);

    // Eliminar la fila
    fila.parentNode.removeChild(fila);

    // Mostrar el modal
    $("#modalData").modal("show")
}

function eliminarfila(button){

    var fila = button.parentNode.parentNode;
    fila.parentNode.removeChild(fila);

}

//Eliminar 