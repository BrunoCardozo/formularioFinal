function desabilitaCampoCpf()
{
	$('#cpf').css("display","none");
	$('#cpf').removeAttr("required");
}

function habilitaCampoCpf()
{
	$('#cpf').css("display","inline");
	$('#cpf').attr("required", "required");
}

/* FUNÇÃO QUE IMPEDE A INSERÇÃO DE CARACTERES ESPECIAIS E NUMÉRICOS NO CAMPO UF DO FORMULÁRIO */
function alphaOnly(event) {
  	var key = event.keyCode;
  	return ((key >= 65 && key <= 90) || key == 8);
};