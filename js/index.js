const navToggle= document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")
navToggle.addEventListener("click", ()=>{
    navMenu.classList.toggle("nav-menu_visible");
});

//añadir movilidad al modal
const botonadd= document.querySelector("#boton__adicionar");
const cerraradd= document.querySelector("#cerrar__ventana");

const modal= document.querySelector("#adicionar__producto");


botonadd.addEventListener("click", ()=>{

    modal.showModal();


})

cerraradd.addEventListener("click", ()=>{
    modal.close();
})
