//MODAL EJECUTADORES
$("#botonpaciente").on("click",function(){

    $("#modal-date").modal();
})

$("#botoneditar").on("click",function(){

  $("#modal-edit").modal();
})

$('.delete-btn').on('click', function() {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    // Obtén el texto del elemento para personalizar la alerta
    var itemName = $(this).closest('tr').find('td:eq(1)').text();
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      text: "No podrás revertir la eliminación de '" + itemName + "'.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminarlo",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire({
          title: "Eliminado",
          text: "El elemento '" + itemName + "' ha sido eliminado.",
          icon: "success"
        });
        // Puedes agregar aquí la lógica para borrar el elemento si es necesario
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "Cancelado",
          text: "El elemento '" + itemName + "' está a salvo :)",
          icon: "error"
        });
      }
    });
  });

  function eliminarPaciente(pacienteId,nombrePaciente) {
    const fila = document.querySelector(`tr[data-id='${pacienteId}']`);
    // Obtén el contenido del segundo td (Nombre)
  
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      html: `Estás a punto de borrar al paciente:<br>ID: ${pacienteId}<br>Nombre: ${nombrePaciente}`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminar paciente",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
          swalWithBootstrapButtons.fire({
            title: "Paciente Eliminado",
            text: "El paciente ha sido eliminado.",
            icon: "success"
          }).then(()=>{
            window.location.href= `eliminar_paciente.php?id=${pacienteId}`;
          });

      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "Cancelado",
          text: "El paciente está a salvo :)",
          icon: "error"
        });
      }
    });
}
  function eliminarcita(citaId) {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      text: "No podrás revertir esto.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminar cita",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Lógica para borrar la cita con el 'citaId' específico
        swalWithBootstrapButtons.fire({
          title: "Cita Eliminada",
          text: `La cita ${citaId} ha sido eliminada.`,
          icon: "success"
        });
        // Puedes agregar aquí la lógica adicional para borrar la cita si es necesario
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "Cancelado",
          text: "La cita está a salvo :)",
          icon: "error"
        });
      }
    });
  } 
  
  function eliminarMedico(enlace) {
    const fila = enlace.closest('tr');
    const medicoNombre = fila.children[1].textContent; // Obtén el contenido del segundo td (Nombre del médico)
    const especialidad = fila.children[5].textContent; // Obtén el contenido del sexto td (Especialidad)
  
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      html: `Estás a punto de borrar al médico:<br>Nombre: ${medicoNombre}<br>Especialidad: ${especialidad}`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminar médico",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Aquí puedes agregar la lógica para borrar al médico si es necesario
        fila.remove(); // Elimina la fila de la tabla en este ejemplo
        swalWithBootstrapButtons.fire({
          title: "Médico Eliminado",
          text: "El médico ha sido eliminado.",
          icon: "success"
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "Cancelado",
          text: "El médico está a salvo :)",
          icon: "error"
        });
      }
    });
  }

  function eliminarAsistente(enlace) {
    const fila = enlace.closest('tr');
    const asistenteNombre = fila.children[1].textContent; // Obtén el contenido del segundo td (Nombre del Asistente)
    const correo = fila.children[7].textContent; // Obtén el contenido del septimo td (Correo)
  
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      html: `Estás a punto de borrar a un asistente:<br>Nombre: ${asistenteNombre}<br>correo: ${correo}`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminar asistente",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Aquí puedes agregar la lógica para borrar al asistente si es necesario
        fila.remove(); // Elimina la fila de la tabla en este ejemplo
        swalWithBootstrapButtons.fire({
          title: "Asistente Eliminado",
          text: "El asistente ha sido eliminado.",
          icon: "success"
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "Cancelado",
          text: "El asistente está a salvo :)",
          icon: "error"
        });
      }
    });
  }

  function eliminarEspecialidad(enlace) {
    const fila = enlace.closest('tr');
    const especialidadNombre = fila.children[0].textContent; // Obtén el contenido del primer td (Nombre de la especialidad)
  
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success mr-2",
        cancelButton: "btn btn-danger mr-2"
      },
      buttonsStyling: false
    });
  
    swalWithBootstrapButtons.fire({
      title: "¿Estás seguro?",
      text: `Estás a punto de borrar la especialidad: ${especialidadNombre}`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, eliminar especialidad",
      cancelButtonText: "No, cancelar",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Aquí puedes agregar la lógica para borrar la especialidad si es necesario
        fila.remove(); // Elimina la fila de la tabla en este ejemplo
        swalWithBootstrapButtons.fire({
          title: "Especialidad Eliminada",
          text: "La especialidad ha sido eliminada.",
          icon: "success"
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

//EDITAR PACIENTE
$(document).ready(function() {
  $(".botoneditar").on("click", function() {
      // Llena los campos del modal con los datos de este botón
      $('#id_paciente').val($(this).data('id'));
      $('#nombre').val($(this).data('nombre'));
      $('#sexo').val($(this).data('sexo'));
      $('#curp').val($(this).data('curp'));
      $('#telefono').val($(this).data('telefono'));
      $('#fecha_nacimiento').val($(this).data('fecha_nacimiento'));
      $('#domicilio').val($(this).data('domicilio'));
      $('#correo').val($(this).data('correo'));
      $('#contrasena').val($(this).data('contrasena'));

      // Muestra el modal
      $('#modal-edit').modal('show');
  });
});