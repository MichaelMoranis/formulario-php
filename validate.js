function Formulario(formulario) {

  if(formulario.nome_cliente.value === "" || formulario.nome_cliente.value === null) {
    alert("o nome nao pode ficar vazio")
    formulario.nome_cliente.focus();
    return false;
  }

  if(formulario.email_cliente.value.indexOf("@") == -1 || formulario.email_cliente.value.indexOf(".") == -1) {
    alert("campo de email invalido")
    formulario.email_cliente.focus()
  }

  if(formulario.cpf_cliente != 11) {
    alert("o seu cpf nao pode ter menos de 11 numeros")
    formulario.cpf_cliente.focus()
    return false;
  }

  if(formulario.data_nascimento_cliente.value === "" || formulario.data_nascimento_cliente.value === null) {
    alert("sua data de nascimento nao pode ficar vazia")
    formulario.data_nascimento_cliente.focus()
    return false
  }
  return true
}
