<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/js/functions.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/chart-area-demo.js"></script>
<script src="assets/js/demo/chart-pie-demo.js"></script>

<script src="assets/js/demo/datatables-demo.js"></script>
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<script>
  $(document).ready(function() {
    // Inicializa la tabla con DataTables
    $('#table').DataTable({
      language: {
        // Configuración de idioma
        "decimal": "", // Separador decimal
        "emptyTable": "No hay datos", // Mensaje cuando la tabla está vacía
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros", // Información sobre registros mostrados
        "infoEmpty": "Mostrando 0 a 0 de 0 registros", // Información cuando no hay registros para mostrar
        "infoFiltered": "(Filtro de _MAX_ total registros)", // Información sobre registros después de aplicar un filtro
        "infoPostFix": "", // Texto adicional después de la información
        "thousands": ",", // Separador de miles
        "lengthMenu": "Mostrar _MENU_ registros", // Texto del menú para seleccionar cantidad de registros a mostrar
        "loadingRecords": "Cargando...", // Mensaje mientras se cargan registros
        "processing": "Procesando...", // Mensaje mientras se procesan datos
        "search": "Buscar:", // Texto del campo de búsqueda
        "zeroRecords": "No se encontraron coincidencias", // Mensaje cuando no hay registros coincidentes
        "paginate": { // Configuración para la paginación
          "first": "Primero", // Botón para ir a la primera página
          "last": "Ultimo", // Botón para ir a la última página
          "next": "Siguiente", // Botón para ir a la siguiente página
          "previous": "Anterior" // Botón para ir a la página anterior
        },
        "aria": { // Configuración para accesibilidad
          "sortAscending": ": Activar orden de columna ascendente", // Mensaje para ordenar ascendente
          "sortDescending": ": Activar orden de columna desendente" // Mensaje para ordenar descendente
        }
      }
    });
  });
</script>

</body>

</html>