$('#btn_delete').click(function(e) {
  e.preventDefault(); // Previene la acción predeterminada del botón (envío del formulario)

  Swal.fire({
    title: "¿Estás seguro?",
    text: "No podrás revertir esto",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, borrar"
  }).then((result) => {
    if (result.isConfirmed) {
      // Realiza la acción de eliminación aquí (puedes usar AJAX, por ejemplo)
      Swal.fire({
        title: "¡Eliminado!",
        text: "Tu archivo ha sido eliminado.",
        icon: "success"
      });
    }
  });
});
