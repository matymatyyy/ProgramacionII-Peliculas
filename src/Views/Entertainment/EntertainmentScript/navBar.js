console.log("hola");

const menuBtn = document.getElementsByClassName("MenuHambur"); //agarra el boton
const nav = document.getElementsByClassName("nav"); //esto agarra al nav escondido
//no funca nada 
menuBtn.addEventListener("click", () => { 
  nav.classList.toggle("active");
});
