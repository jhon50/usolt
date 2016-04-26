<?php

//CONFIGURAÇÕES SOBRE SEU SITE
$nome_do_site="USOLT - United Schools of Language Teaching";
$email_para_onde_vai_a_mensagem = "carlos37nit@hotmail.com";
$nome_de_quem_recebe_a_mensagem = "Professor Carlos";
$exibir_apos_enviar='enviado.htm';

//ESSA VARIAVEL DEFINE SE É O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO 
//POR VOCÊ CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME 
//'assunto' NO FORMULARIO DE ENVIO
$assunto_digitado_pelo_usuario="n";

//CONFIGURAÇOES DA MENSAGEM ORIGINAL
$cabecalho_da_mensagem_original="From: ". $_POST["empresa"] ."<". $_POST["email"] .">\n";
$assunto_da_mensagem_original="Pedido de Brindes";
$configuracao_da_mensagem_original="Enviado por:\nNOME: ". $_POST["empresa"] ."\nPESSOA: ". $_POST["tppessoa"] ."\nTELEFONE: ". $_POST["telefone"] ."\nCELULAR: ". $_POST["celular"] ."\nENDEREÇO: ". $_POST["endereco"] ."\nBAIRRO: ". $_POST["bairro"] ."\nCIDADE: ". $_POST["cidade"] ."\nEST: ". $_POST["estado"] ."\nCEP: ". $_POST["cep"] ."\nEmail: ". $_POST["email"] ."\nBRINDE: ". $_POST["qualbrinde"] ."\nQUANTIDADE: ". $_POST["qtdb"] ."\nCOMO CONHECEU A USOLT: ". $_POST["oferecer"] ."\nEnviado em: $date";
 
//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
// "Re: $assunto"
$assunto_da_mensagem_de_resposta = "Pedido de Brindes - USOLT  United Schools of Language Teaching";
$cabecalho_da_mensagem_de_resposta = "From: $nome_de_quem_recebe_a_mensagem - $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_de_quem_recebe_a_mensagem - $nome_do_site\n\nEnviado em: $date";

?>