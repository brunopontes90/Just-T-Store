function validaForm(formulario) {

    // VERIFICA SE O NOME FOI PREENCHIDO
    // CONTEM NO MINIMO 3 CARACTERES
    if (formulario.nome.value == "" || formulario.nome.value == null || formulario.nome.length < 3) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, indique seu nome");
        formulario.nome.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }


    // VERIFICA SE FOI CRIADO UMA SENHA
    if (formulario.senha.value == "" || formulario.senha.value == null) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, necessário criar uma senha.");
        formulario.senha.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }

    // VERIFICA SE O ENDEREÇO FOI DIGITADO
    if (formulario.endereco.value == "" || formulario.endereco.value == null) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, necessário indicar endereço.");
        formulario.endereco.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }

    // VERIFICA SE A CIDADE FOI DIGITADA
    if (formulario.cidade.value == "" || formulario.cidade.value == null) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, digite sua cidade.");
        formulario.cidade.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }

    // VERIFICA SE O ESTADO FOI DIGITADO
    if (formulario.estado.value == "" || formulario.estado.value == null) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, digite seu estado");
        formulario.estado.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }

    // VERIFCA SE O CEP FOI DIGITADO
    // NECESSARIO CONTER 8 CARACTERES
    if (formulario.cep.value == "" || formulario.cep.value == null || formulario.cep.value.length < 8) {

        // RETORNA ALERTA CASO ESTEJA VAZIO
        alert("Por favor, digite seu cep");
        formulario.cep.focus();

        // O FORMULARIO NÃO É ENVIADO
        return false;
    }
}