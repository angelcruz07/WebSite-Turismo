$('.btn.danger').click(function(e) {
  e.preventDefault();

  const postId = $(this).data('post-id');
  const accion = $(this).data('accion'); // Obtiene el valor del atributo data-accion


  Swal.fire({
    title: "¿Estás seguro?",
    text: "No podrás revertir esto",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, " + accion // Usa la acción dinámicamente
  }).then((result) => {
    if (result.isConfirmed) {
      // Utiliza postId y accion en tu solicitud AJAX
      $.ajax({
        //Url debe ser actualizada si se despliega es sitio
        url: file,
        type: 'POST',
        data: { id: postId, accion: accion },
        success: function(response) {
          Swal.fire({
            title: "¡Acción completada!",
            text: "La acción ha sido realizada con éxito.",
            icon: "success"
          }).then((result) => {
            if (result.isConfirmed) {
              // Recargar la página actual
              location.reload();
            }
          });
        }
      });
    }
  });
});
