<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USOLT Contatos</title>
</head>

<body><br/>
<?php 
$nome=$_POST["nome"];
$idioma=$_POST["idioma"];
$celular=$_POST["celular"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$identidade=$_POST["identidade"];
$cpf=$_POST["cpf"];
$dtnascimento=$_POST["dtnascimento"];
$pai=$_POST["pai"];
$mae=$_POST["mae"];
$endereco=$_POST["endereco"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$cep=$_POST["cep"];
$est=$_POST["est"];
$valor=$_POST["valor"];
$valor_desc=$_POST["valor_desc"];
$contrato=$_POST["contrato"] ;
$info=$_POST["info"] ;

	$msg.="\n Pagina de contrato USOLT" ; 
	
	$msg.="   \n Os dados seguem abaxo." ;
	
	$msg.="   \n Nome:"
	. $nome ; 
	$msg.=" \n Idioma:"
	. $idioma ; 
	$msg.=" \n Celular:"
	. $celular ; 
	$msg.="  \n Telefone:"
	. $telefone ; 
	$msg.="  \n E-mail:"
	. $email ; 
	$msg.="  \n RG:"
	. $identidade ; 
	$msg.="  \n CPF:"
	. $cpf ; 
	$msg.="  \n Data de Nasc.:"
	. $dtnascimento ; 
	$msg.="  \n Pai:"
	. $pai ; 
	$msg.="  \n Mãe:"
	. $mae ; 
	$msg.="  \n Endereço:"
	. $endereco ; 
	$msg.="  \n Bairro:"
	. $bairro ; 
	$msg.="  \n Cidade:"
	. $cidade ; 
	$msg.="  \n CEP.:"
	. $cep ; 
	$msg.="  \n UF.:"
	. $est ; 
	$msg.="  \n Valor Bruto: R$ "
	. $valor ; 
	$msg.="  \n Valor Com Desconto: R$ "
	. $valor_desc ; 
	$msg.="  \n contrato: "
	. $contrato ; 
	$msg.="  \n Soube do curso através de:"
	. $info ; 

mail("onboardidiomas@outlook.com" , "Formulario de contrato " ,  $msg   );//Digite o e-mail e o titulo da imagem
echo "<script>alert('$nome, Mensagen Enviada com sucesso! Em breve entraremos em Contato!');</script>";
echo "<script>window.location.href='matricula.htm';</script>";

  ?>
</body>
</html>
