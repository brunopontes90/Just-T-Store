//Limpar Tela

function botao() {

    alert('Casdastro Realizado com Sucesso!');
    if (document.getElementById('inputEmail4').value != "") {
        document.getElementById('inputEmail4').value = "";
        document.getElementById('inputPassword4').value = "";
        document.getElementById('inputAddress').value = "";
        document.getElementById('inputAddress2').value = "";
        document.getElementById('inputCity').value = "";
        document.getElementById('inputEstado').value = "";
        document.getElementById('inputCEP').value = "";
        document.getElementById('gridCheck').value = "";
        document.getElementById('numero-cartao').value = "";
        document.getElementById('bandeira-cartao').value = "";
        document.getElementById('validade-cartao').value = "";
    }
}