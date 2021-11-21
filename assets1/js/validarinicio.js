function validarinicio(){
    var correo2, contrasena2;
    correo2 = document.getElementById("correo2").value;
    contrasena2 = document.getElementById("contrasena2").value;
 
    if(correo2 === "" || contrasena2 === ""){
        Swal.fire({
            icon: 'error',
            title: 'Indicación...',
            text: 'Debe completar todos los campos!!'
          });
        return false;
    }
  
}