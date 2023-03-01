function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function cep(v) {
    v = v.replace(/\D/g, "") 
    v = v.replace(/^(\d{5})(\d)/, "$1-$2") 
    return v
}
function cpf(v) {
    v = v.replace(/\D/g, "")                   
    v = v.replace(/(\d{3})(\d)/, "$1.$2")     
    v = v.replace(/(\d{3})(\d)/, "$1.$2")
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2") 
    return v
}
function valor(v) {
    v = v.replace(/[^1234567890,]/g, "") 
    v = v.replace(/(\d{0})(\d)/, "$1R$ $2") 
    return v
}