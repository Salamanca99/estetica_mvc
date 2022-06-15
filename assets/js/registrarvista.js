const nombre = document.getElementById("name")
const apellido = document.getElementById("lastname")
const telefono = document.getElementById("phone")
const correo = document.getElementById("email")
const contraseña = document.getElementById("pass")

$('#inpCrearCuenta').click(function(){
    var nombre = document.getElementById('name').value;
      if(nombre.length == 0) {
          swal({
            title: 'ERROR',
            text: 'NOMBRE SIN ACOMPLETAR, FAVOR DE LLENAR',
            icon: 'error'
          });
        
        return;
      }
  
      var apellido = document.getElementById('lastname').value;
      if (apellido.length == 0) {
        swal({
          title: 'ERROR',
          text: 'APELLIDO SIN ACOMPLETAR, FAVOR DE LLENAR',
          icon: 'error'
        });
      }

      var telefono = document.getElementById('phone').value;
      if (telefono.length == 0) {
        swal({
          title: 'ERROR',
          text: 'TELEFONO SIN ACOMPLETAR, FAVOR DE LLENAR',
          icon: 'error'
        });
      }

      var correo = document.getElementById('email').value;
      if (correo.length == 0) {
        swal({
          title: 'ERROR',
          text: 'CORREO SIN ACOMPLETAR, FAVOR DE LLENAR',
          icon: 'error'
        });
      }

      var contraseña = document.getElementById('pass').value;
      if (contraseña.length == 0) {
        swal({
          title: 'ERROR',
          text: 'CONTRASEÑA SIN ACOMPLETAR, FAVOR DE LLENAR',
          icon: 'error'
        });
      }

    });
