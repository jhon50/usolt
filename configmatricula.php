<?php

//CONFIGURA��ES SOBRE SEU SITE
$nome_do_site="USOLT - United Schools of Language Teaching";
$email_para_onde_vai_a_mensagem = "dudavida@yahoo.com.br";
$nome_de_quem_recebe_a_mensagem = "Professor Carlos";
$exibir_apos_enviar='enviado.htm';

//ESSA VARIAVEL DEFINE SE � O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO 
//POR VOC� CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME 
//'assunto' NO FORMULARIO DE ENVIO
$assunto_digitado_pelo_usuario="n";

//CONFIGURA�OES DA MENSAGEM ORIGINAL
$cabecalho_da_mensagem_original="From: $name <$email>\n";
$assunto_da_mensagem_original="Pedido de Matr�cula";
$configuracao_da_mensagem_original="Enviado por:\nNome: $nome\nIdioma: $idioma\nCelular: $celular\nTelefone: $telefone\nEmail: $email\nIdentidade: $identidade\nCPF: $cpf\nData Nasc: $dtnascimento\nPai: $pai\nMae: $mae\nEndere�o: $endereco\nBairro: $bairro\nCidade: $cidade\nCEPS: $cep\nEst: $est\nValor: $valor\ncontrato: $contrato\nEnviado em: $date";
 
//CONFIGURA��ES DA MENSAGEM DE RESPOSTA
// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
// "Re: $assunto"
$assunto_da_mensagem_de_resposta = "Pedido de Matr�cula - USOLT  United Schools of Language Teaching";
$cabecalho_da_mensagem_de_resposta = "From: $nome_de_quem_recebe_a_mensagem - $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_de_quem_recebe_a_mensagem - $nome_do_site\n\nEnviado em: $date";

?>