let imgPrincipal = document.getElementById('principal');
let minhaturas = document.querySelectorAll(".m")

minhaturas.forEach((m) => {
    m.addEventListener("click", () => {
        minhaturas.forEach((m) => {
            m.classList.remove("selecionado");
            imgPrincipal.setAttribute("src", "");
        });
        m.classList.add("selecionado");
        imgPrincipal.setAttribute("src", m.getAttribute("src"));
    });
    m.addEventListener("mouseover", () => {
        imgPrincipal.setAttribute("src", m.getAttribute("src"));
    });
    m.addEventListener("mouseout", () => {
        let imgSelecionada = document.querySelector(".selecionado");
        imgPrincipal.setAttribute("src", imgSelecionada.getAttribute("src"));
    });
});





function trocaImg(get) {
        imgPrincipal.setAttribute("src", get.getAttribute("src"));
        get.classList.add("selecionado");






        m.addEventListener("mouseover", () => {
        imgPrincipal.setAttribute("src", m.getAttribute("src"));
    });
    m.addEventListener("mouseout", () => {
        imgPrincipal.setAttribute("src", m[index].getAttribute("src"));
    });
}