$('.btn.danger').click(function(e) {
  e.preventDefault();
  
  const postId = $(this).data('post-id');
  
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
      // Utiliza postId en tu solicitud AJAX para eliminar la publicación
      $.ajax({
        url: 'http://localhost/WebSite-Turismo/admin/addBlog.php',
        type: 'POST',
        data: { id: postId },
        success: function(response) {
          Swal.fire({
            title: "¡Eliminado!",
            text: "Tu archivo ha sido eliminado.",
            icon: "success"
          });
        }
      });
    }
  });
});
