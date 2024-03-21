//MODAL EJECUTADORES - ESPECIALIDAD
$("#boton-consultorio").on("click", function() {
    $("#modal-insert-consultorio").modal();
    });

    $(document).ready(function(){
        $('.editar-consultorio').on('click', function(){
            $('#modal-editar-consultorio').modal('show');
        });
    });

    //EDITAR CONSULTORIO
    $(document).ready(function() {
        $(".editar-consultorio").on("click", function() {
            // Llena los campos del modal con los datos de este botón
            $('#numero_consultorio').val($(this).data('numero'));
            $('#disponibilidad').val($(this).data('disponibilidad'));
    
            // Muestra el modal
            $('#modal-editar-consultorio').modal('show');
        });
    });

    //ELIMINAR CONSULTORIO
    function eliminarConsultorio(consultorioNumero) {
        const fila = document.querySelector(`tr[data-numero='${consultorioNumero}']`);
    
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: "btn btn-success mr-2",
            cancelButton: "btn btn-danger mr-2"
          },
          buttonsStyling: false
        });
    
        swalWithBootstrapButtons.fire({
          title: "¿Estás seguro?",
          html: `Estás a punto de borrar el consultorio:<br>Numero: ${consultorioNumero}`,
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Sí, eliminar consultorio",
          cancelButtonText: "No, cancelar",
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
              swalWithBootstrapButtons.fire({
                title: "Consultorio Eliminado",
                text: "El consultorio ha sido eliminado.",
                icon: "success"
              }).then(()=>{
                window.location.href= `eliminar-consultorio.php?numero=${consultorioNumero}`;
              });
    
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
              title: "Cancelado",
              text: "El consultorio está a salvo :)",
              icon: "error"
            });
          }
        });
    }