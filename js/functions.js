function eliminarRegistro(id){
    let confirmacion = confirm("¿Estas seguro que deseas eliminar el registro?");

    if (confirmacion == true) {
        $.ajax({
          url: "borraRegistro.php",
          type: "POST",
          data: {"id" : id},
          success: function(response){
            if (response > 0) {
              alert('Se eliminó el registro.');
              location.reload();
            } else {
              alert('Error al eliminar registro.');
            }
          }
        });
      }
}

function restaurarRegistro(id){
    let confirmacion = confirm("¿Estas seguro que deseas restaurar el registro?");

    if (confirmacion == true) {
        $.ajax({
          url: "restauraRegistro.php",
          type: "POST",
          data: {"id" : id},
          success: function(response){
            if (response > 0) {
              alert('Se restauró el registro.');
              location.reload();
            } else {
              alert('Error al restaurar el registro.');
            }
          }
        });
      }
}

$(document).ready(function(){
    $("#btnEliminados").click(function(e) {
        e.preventDefault();
        $(location).attr('href','eliminados.php');
    });

    $("#btnInicio").click(function(e) {
        e.preventDefault();
        $(location).attr('href','index.php');
    });
});
