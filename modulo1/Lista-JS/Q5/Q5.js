let input = document.querySelector("#cpf");

input.addEventListener("keydown", (e) => {
    if(e.key == "Enter"){
        let str = input.value;
        let regexp = new RegExp(/(@gmail.com|@hotmail.com|@yahoo.com)$/i);
        let n = regexp.test(str);
        if(n == true){
            alert("E-mail aceito!");
        }
        else if(n == false){
            alert("E-mail inválido!");
        }
    }
});
