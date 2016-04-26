<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Citsol Contatos</title>
</head>

<body><br/>
<?php 
$nome=$_POST["nome"];
$celular=$_POST["celular"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$endereco=$_POST["endereco"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$cep=$_POST["cep"];
$estado=$_POST["estado"];
$pacote=$_POST["pacote"];
$comentarios=$_POST["comentarios"] ;

	$msg.="\n Promoção Posto" ; 
	
	$msg.="   \n Os dados seguem abaxo." ;
	
	$msg.="   \n Nome:"
	. $nome ; 
	$msg.=" \n Celular:"
	. $celular ; 
	$msg.="  \n Telefone:"
	. $telefone ; 
	$msg.="  \n E-mail:"
	. $email ; 
	$msg.="  \n Endereço:"
	. $endereco ; 
	$msg.="  \n Bairro:"
	. $bairro ; 
	$msg.="  \n Cidade:"
	. $cidade ; 
	$msg.="  \n CEP.:"
	. $cep ; 
	$msg.="  \n UF.:"
	. $estado ; 
	$msg.="  \n Pacote:"
	. $pacote ; 
	$msg.="  \n comentarios:"
	. $comentarios ; 

mail("carlos37nit@hotmail.com" , "Formulario Fale Conosco " ,  $msg   );//Digite o e-mail e o titulo da imagem
echo "<script>alert('$nome ,Mensagen Enviada com sucesso! Breve entraremos em Contato!');</script>";
echo "<script>window.location.href='faleconosco.htm';</script>";

  ?>
</body>
</html>
