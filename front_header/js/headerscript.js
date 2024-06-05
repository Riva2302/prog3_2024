const nav=document.querySelector("#menu-container");

const abrir=document.querySelector("#abrir");

const cerrar=document.querySelector("#cerrar");

abrir.addEventListener("click", () =>{
    nav.classList.add("menu-container-visible");
})
cerrar.addEventListener("click", () =>{
    nav.classList.remove("menu-container-visible");
})