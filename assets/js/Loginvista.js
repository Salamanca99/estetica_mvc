const usuario = document.getElementById("user")
const contraseña = document.getElementById("password")

$('#inpIniciaSesion').click(function(){
  var usuario = document.getElementById('user').value;
    if(usuario.length == 0) {
        swal({
          title: 'ERROR',
          text: 'CAMPOS VACIOS, FAVOR DE LLENAR',
          icon: 'error'
        });
      
      return;
    }

    var contraseña = document.getElementById('password').value;
    if (contraseña.length == 0) {
      swal({
        title: 'ERROR',
        text: 'CAMPOS VACIOS, FAVOR DE LLENAR',
        icon: 'error'
      });
    }
  });