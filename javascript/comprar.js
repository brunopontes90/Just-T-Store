//Comprar

function carrinho() {
    document.getElementById('imagem').src = "../img/bateria1.jpeg";
    document.getElementById('texto').innerHTML = "Carregador Portátil PowerBank Pineng";

}


//ALERTA AO FINALIZAR COMPRA E LIMPAR TELA
function finalizar() {
    alert('Compra realizada com sucesso!');
    if (document.getElementById('number').value != "") {
        document.getElementById('number').value = "";
    }
}