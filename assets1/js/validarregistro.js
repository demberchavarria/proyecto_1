function validarregistro(){
    var nombre_completo, correo, usuario, contrasena, expresion;
    expresion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    nombre_completo = document.getElementById("nombre_completo").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    contrasena = document.getElementById("contrasena").value;
 
    if(nombre_completo === "" || correo === "" || usuario === "" || contrasena === ""){
        Swal.fire({
            icon: 'error',
            title: 'Indicación...',
            text: 'Debe completar todos los campos!!'
          });
        return false;
    }
    else if(contrasena.length<8){
      Swal.fire({
        icon: 'info',
        title: 'Observación...',
        text: 'La contraseña debe tener 8 caracteres o más'
      });
      return false;
    }
    else if(!expresion.test(correo)){
    Swal.fire({
      icon: 'info',
      title: 'Observación...',
      text: 'La estructura del correo es incorrecta, debe ser "nombre@gmail.com"'
    });
    return false;
  }
}