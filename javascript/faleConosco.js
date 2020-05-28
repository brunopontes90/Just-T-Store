//Limpar Tela

function botao() {
    alert('Solicitação Enviada com Sucesso!');
    if (document.getElementById('nome').value != "") {
        document.getElementById('nome').value = "";
        document.getElementById('sobreNome').value = "";
        document.getElementById('exampleFormControlInput1').value = "";
        document.getElementById('exampleFormControlSelect1').value = "";
        document.getElementById('exampleFormControlTextarea1').value = "";
    }
}