const boton = document.getElementById("inicio1") ,
    boton_up = document.getElementById("sing-up");
    foregistrar= document.querySelector(".registro"),
    fologin=document.querySelector(".login");
const sali=document.getElementById("salida"),
    salida=document.getElementById("salida1");
    x= document.querySelector(".registro"),
    re=document.querySelector(".login");

boton.addEventListener("click", e => {
    foregistrar.classList.add("hide");
    fologin.classList.remove("hide")
})
boton_up.addEventListener("click", e => {
    fologin.classList.add("hide");
    foregistrar.classList.remove("hide")
})
sali.addEventListener("click", e => {
    window.location.href = '../html/index.html';
})
salida.addEventListener("click", e => {
    re.classList.add("hide");
    x.classList.remove("hide")
})
