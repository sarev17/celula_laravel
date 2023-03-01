let produtos = document.querySelectorAll(".produto");
let checkbox = document.querySelectorAll("input");
let totalPedido = document.querySelector(".total p");
let desmarcaTudo = document.querySelector(".carrinho section p");
let acumulador = 0, aux1 =0;

produtos.forEach((produto, index) => {

    let filhos = produto.querySelectorAll("section");
    let valorBase = filhos[3].querySelector("h4").getAttribute("value");
    let quant = filhos[2].querySelector("select");

    desmarcaTudo.addEventListener("click", () => {

        produtos.forEach((produto, index) => {

            filhos.forEach((seção, index) => {

                seção.classList.add("desmarcado");
                acumulador = 0;
                totalPedido.textContent = "Subtotal da compra: R$ 0.00";
            });
        });

        checkbox[index].checked = false;
    });

    checkbox[index].addEventListener("click", () => {
        
        if(checkbox[index].checked == true){
            filhos.forEach((seção) => {

                seção.classList.remove("desmarcado");
                filhos[3].querySelector("h4").textContent = "R$ "+(valorBase*quant.value);
                filhos[3].querySelector("p").textContent = "Em até 12x de R$ "+((valorBase*quant.value)/12).toFixed(2);

                produto.setAttribute("total", (valorBase*quant.value));
            });
            quant.onchange = function(){

                produto.setAttribute("total", (valorBase*quant.value));
                acumulador  = 0;

                filhos[3].querySelector("p").textContent = "Em até 12x de R$ "+((valorBase*quant.value)/12).toFixed(2);
                filhos[3].querySelector("h4").textContent = "R$ "+(valorBase*quant.value);
                

                produtos.forEach((produto) => {
                    acumulador += 1*(produto.getAttribute("total"));
                });

                totalPedido.textContent = "Subtotal da compra: R$ " + acumulador;
            };
        }
        else{

            filhos.forEach((seção) => {

                seção.classList.add("desmarcado");
                filhos[3].querySelector("h4").textContent = "R$ 0.00";
                filhos[3].querySelector("p").textContent = "Em até 12x de R$ 0.00";

                aux1 = acumulador;
                acumulador = (aux1-1*(produto.getAttribute("total")));
                produto.setAttribute("total", "0");
            });
        }
        acumulador += 1*(produto.getAttribute("total"));
        totalPedido.textContent = "Subtotal da compra: R$ " + acumulador.toFixed(2);
    });
});