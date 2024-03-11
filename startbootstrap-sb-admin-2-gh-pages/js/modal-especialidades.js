//MODAL EJECUTADORES - ESPECIALIDAD
$("#boton-especialidad").on("click", function() {
    $("#modal-insert-especialidad").modal();
    });

    $("#boton-editar").on("click",function(){

        $("#modal-edit").modal();
      })
    
$(document).ready(function() {
    $(".botoneditar").on("click", function() {
    // Llena los campos del modal con los datos de este botón
    $('#nombre_especialidad').val($(this).data('nombre'));

    // Muestra el modal
    $('#modal-edit').modal('show');
});
    });

    function eliminarEspecialidad(especialidadId, nombreEspecialidad) {
        const fila = document.querySelector(`tr[data-id='${especialidadId}']`);
    
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: "btn btn-success mr-2",
            cancelButton: "btn btn-danger mr-2"
          },
          buttonsStyling: false
        });
    
        swalWithBootstrapButtons.fire({
          title: "¿Estás seguro?",
          html: `Estás a punto de borrar la especialidad:<br>ID: ${especialidadId}<br>Nombre: ${nombreEspecialidad}`,
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Sí, eliminar especialidad",
          cancelButtonText: "No, cancelar",
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
              swalWithBootstrapButtons.fire({
                title: "Especialidad Eliminada",
                text: "La especialidad ha sido eliminada.",
                icon: "success"
              }).then(()=>{
                window.location.href= `eliminar-especialidades.php? id=${especialidadId}`;
              });
    
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
              title: "Cancelado",
              text: "La especialidad está a salvo :)",
              icon: "error"
            });
          }
        });
    }