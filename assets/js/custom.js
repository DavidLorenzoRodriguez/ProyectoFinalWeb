document.addEventListener('DOMContentLoaded', function() {
    // Contenido de tu página aquí
    // Cargar Bootstrap desde CDN
    var bootstrapCSS = document.createElement('link');
    bootstrapCSS.rel = 'stylesheet';
    bootstrapCSS.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css';
    document.head.appendChild(bootstrapCSS);
  
    var bootstrapJS = document.createElement('script');
    bootstrapJS.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js';
    document.body.appendChild(bootstrapJS);
  });
  
  
  document.addEventListener('DOMContentLoaded', function () {
      var page = 1;
      function load_data(page) {
        fetch(phpFile, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({ 'page': page }),  // Solo envía 'page' en este punto
        })
        .then(response => response.json())
        .then(data => {
          if (data.length > 0) {
            var html = "";
            data.forEach(element => {
              html += '<div class="card text-center" id="cartaOfertas">';
              html += '  <div class="card-header">';
              html += '    <h4 class="card-title">' + element.Titulo + '</h4>';
              html += '  <div class="card-body">';
              html += '    <h5 class="card-title">' + element.Salario+ ' € </h5>';
              html += '    <h5 class="card-title">' + element.Especialidad+ '</h5>';
              html += '    <p class="card-text">' + element.Descripcion + '</p>';
              if(element.admin==0){
                html += '    <form action="apuntados.php" method="post" enctype="multipart/form-data">';
                html += '      <input type="hidden" name="id" value="' + element.id + '">';
                html += '      <button type="submit" class="btn btn-primary">Apuntate a la oferta</button>';
              }
              else if(element.admin==1){
                html += '<form id="apuntadosForm" action="apuntadosOferta.php" method="post" enctype="multipart/form-data">';
                html += '    <input type="hidden" name="id" value="' + element.id + '">';
                html += '    <button type="submit" class="btn btn-primary">Comprueba quien se apuntó a la oferta</button>';
                html += '</form>';
                html += '<div id="apuntadosContainer"></div>';           
              }
              html += '  </div>';
              html += '</div>';
              
            });
            document.getElementById('card-container').innerHTML += html;
          }
        });
      }
      
      
    
      window.addEventListener('scroll', function () {
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
          page++;
          load_data(page);
        }
      });
    
      load_data(page);
    });
    
    document.getElementById('apuntadosForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita que el formulario se envíe de forma tradicional
  
      var offerId = document.getElementById('apuntadosForm').elements['id'].value;
  
      // Realiza la consulta de formulario directamente aquí
      fetch('tu_otra_consulta.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({ 'id': offerId }),
      })
      .then(response => response.text()) // Espera la respuesta como texto HTML
      .then(data => {
          // Actualiza el contenido del contenedor con la respuesta HTML
          document.getElementById('apuntadosContainer').innerHTML = data;
      });
  });
  
  
  