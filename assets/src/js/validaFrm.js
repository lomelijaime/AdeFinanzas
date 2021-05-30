const formContacto = document.getElementById("frmContacto");
formContacto.addEventListener("submit", e => {
  e.preventDefault();
  let nombre = document.querySelector('#frmNombre').value;
   let telefono = document.querySelector('#frmTelefono').value;
   let correo = document.querySelector('#frmEmail').value;
   let contenido = document.querySelector('#frmContenido').value;
   if (nombre.length === 0 || telefono.length === 0 || correo.length === 0 || contenido.length === 0){
      alert('Debes llenar todos los campos para contactarnos.');
      return;
   }
  formContacto.submit();
});