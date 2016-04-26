                                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Citsol Contatos</title>
</head>

<body><br/>
<?php 
$nome=$_POST["nome"];
$idioma=$_POST["idioma"];
$celular=$_POST["celular"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$endereco=$_POST["endereco"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$cep=$_POST["cep"];
$est=$_POST["est"];
$local=$_POST["local_curso"];
$comentarios=$POST["comentarios"];
$info=$_POST["info"] ;

	$msg.="\n Ficha de Espera USOLT" ; 
	
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
	$msg.="  \n Onde deseja fazer o curso: "
	. $local ; 
	$msg.="  \n Outros comentários "
	. $comentarios ; 
	$msg.="  \n Soube do curso através de:"
	. $info ; 

mail("onboardidiomas@outlook.com" , "Ficha de Espera " ,  $msg   );//Digite o e-mail e o titulo da imagem
echo "<script>alert('$nome, Mensagen Enviada com sucesso! Breve entraremos em Contato!');</script>";
echo "<script>window.location.href='ficha_espera.htm';</script>";

  ?>
</body>
</html>

                            