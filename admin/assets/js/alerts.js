function confirmDeletion(){
  if (confirm("Seguro de que deseas borrar esto?")) {

    return true;
  } else {
    // Si el usuario hace clic en "Cancelar", el formulario no se enviará.
    return false;
  }
}
