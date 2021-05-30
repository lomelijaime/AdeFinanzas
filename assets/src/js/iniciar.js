//Acciones en página ingresar
const loginAnimation = () => {
  const btn_iniciarSesion = document.querySelector("#btn_iniciar-sesion");
  const btn_registrarse = document.querySelector("#btn_registrarse");

  const contenedorLogReg = document.querySelector(".contenedor_login-registro");
  const frmLogin = document.querySelector(".formulario_login");
  const frmRegistro = document.querySelector(".formulario_registro");
  const backLogin = document.querySelector(".mensaje_trasero-login");
  const backRegistro = document.querySelector(".mensaje_trasero-registro");

  const sticky = document.querySelector(".sticky");
  sticky.classList.toggle("sticky"); //Desactivar en ingrear.php la barra "pegajosa"

  //Iniciar
  btn_iniciarSesion.addEventListener("click", () => {
    if (window.innerWidth > 768) {
      contenedorLogReg.style.left = "1rem";
      backRegistro.style.opacity = "1";
      backLogin.style.opacity = "0";
    } else {
      contenedorLogReg.style.left = "0rem";
      backRegistro.style.display = "block";
      backLogin.style.display = "none";
    }
    //independientemente el resultado, se ejecutará
    frmRegistro.style.display = "none";
    frmLogin.style.display = "block";
  });

  //Registrar
  btn_registrarse.addEventListener("click", () => {
    if (window.innerWidth > 768) {
      contenedorLogReg.style.left = "41rem";
      frmRegistro.style.display = "block";
      frmLogin.style.display = "none";
      backRegistro.style.opacity = "0";
      backLogin.style.opacity = "1";
    } else {
      frmRegistro.style.display = "block";
      contenedorLogReg.style.left = "0rem";
      frmLogin.style.display = "none";
      backRegistro.style.display = "none";
      backLogin.style.display = "block";
    }
  });

  //Al cambiar tamaño de la ventana
  window.addEventListener("resize", () => {
    responsiveAnimation();
  });

  const responsiveAnimation = () => {
    if (window.innerWidth > 768) {
      backLogin.style.display = "block";
      backRegistro.style.display = "block";
    } else {
      backRegistro.style.display = "block";
      backRegistro.style.opacity = "1";
      backLogin.style.display = "none";
      frmLogin.style.display = "block";
      frmRegistro.style.display = "none";
      contenedorLogReg.style.left = "0rem";
    }
  };
  responsiveAnimation();
};

loginAnimation();

//Validación simple de formularios de iniciar sesión y registrarse
const formIngreso = document.getElementById("frmLogin");
formIngreso.addEventListener("submit", e => {
  e.preventDefault();
  let usuarioLogin = document.querySelector("#frmUsernameLogin").value;
  let passwordLogin = document.querySelector("#frmPasswordLogin").value;
  if (usuarioLogin.length === 0 || passwordLogin.length === 0 ) {
    alert("Debes llenar todos los campos para iniciar sesión.");
    return;
  }
  formIngreso.submit();
});

const formRegistro = document.getElementById("frmSignup");
formRegistro.addEventListener("submit", e => {
  e.preventDefault();
  let nombre = document.querySelector("#frmNameSignup").value;
  let usuario = document.querySelector("#frmUsernameSignup").value;
  let password = document.querySelector("#frmPasswordSignup").value;
  let verificarPassword = document.querySelector("#frmVerifySignup").value;
  if (
    nombre.length === 0 ||
    usuario.length === 0 ||
    password.length === 0 ||
    verificarPassword.length === 0
  ) {
    alert("Debes llenar todos los campos para registrarte.");
    return;
  }
  if (password !== verificarPassword) {
    alert("Las contraseñas no coinciden");
    return;
  }
  formRegistro.submit();
});