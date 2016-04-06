<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Calm Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo" style="position:absolute;max-width:250px;">
			<h1><a href="index.html"><img src="web/images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li><a href="index.html">home</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="portfolio.html">portfolio</a></li>
				<li><a href="blog.html">blog</a></li>
				<li class="active"><a href="contact.php">contact</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="web/js/classie.js"></script>
			<script src="web/js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.html">Home</a></li>
	                <li class="nav-item"><a href="about.html">About</a></li>
	                <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
	                <li class="nav-item"><a href="blog.html">Blog</a></li>
	                <li class="nav-item"><a href="contact.html">Contact</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="web/js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>contact</h2>
		<h3>What we Think, get in touch</h3>
	</div>
</div>
</div>
<!-- start main -->
<!-- start phpmailer -->
   <?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

//require("lib/PHPMailer/PHPMailerAutoload.php"); 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->IsSMTP(); 
//$mail->Host = 'smtp.mandrillapp.com'; 
//$mail->Port = 587;
//$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
//$mail->Username = 'johnn_lds@hotmail.com'; // Usuário do servidor SMTP (endereço de email)
//$mail->Password = '52X5OayShKOJY-1q_1ssKQ'; // Senha do servidor SMTP (senha do email usado)
//$mail->SMTPSecure = 'tls';
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $_POST['email']; // Seu e-mail
$mail->Sender = $_POST['email']; // Seu e-mail
$mail->FromName = $_POST['nome']; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@magrasspontapora.com.br', 'Santini');

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Fale Conosco - Site Santini"; // Assunto da mensagem
$a = $_POST['message'];
$b = $_POST['telefone'];
$c = $a.'<br/>'. 'Telefone do cliente: '.$b;
$mail->Body = $c;
//$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano!';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado

?>
<!-- end php mailer -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start contact -->
			<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>name</label></span>
						    	<span><input name="nome" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>e-mail</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>mobile</label></span>
						    	<span><input name="telefone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>subject</label></span>
						    	<span><textarea name="message"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="submit us"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
		  <!-- end contact -->
		</div>
	</div>
</div>
</div>
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>about us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .....</p>
				<span>Address</span>
				<p class="top">500 Lorem Ipsum Dolor Sit,</p>
				<p>22-56-2-9 Sit Amet,</p>
				<p>USA</p>
				<p>Phone:(00) 222 666 444</p>
				<p>Fax: (000) 000 00 00 0</p>
				<div class="f_icons">
						<ul>
							<li><a class="icon2" href="#"></a></li>
							<li><a class="icon1" href="#"></a></li>
							<li><a class="icon3" href="#"></a></li>
							<li><a class="icon4" href="#"></a></li>
							<li><a class="icon5" href="#"></a></li>
						</ul>	
				</div>
			</div>
			<div class="span1_of_4">
				<h4>latest posts</h4>
				<span>Fusce scelerisque massa vitae</span>
				<p>25 april 2013</p>
				<span>Pellentesque bibendum ante</span>
				<p>15 march 2013</p>
				<span>Maecenas quis ipsum sed magna </span>
				<p>25 april 2013</p>
			</div>
			<div class="span1_of_4">
				<h4>latest comments</h4>
				<span class="bg">It is a long established fact that a reader will looking layout.</span>
				<span class="bg top">There are many variations of passages of Lorem Ipsum available words.</span>
				<span class="bg">It is a long established fact that a reader will looking layout.</span>
			</div>
			<div class="span1_of_4">
				<h4>flicker photostream</h4>
				<ul class="f_nav">
					<li><a href="#"><img src="web/images/f_pic1.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic2.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic3.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic4.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic5.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic6.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic7.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic8.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic9.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic10.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic11.jpg" alt=""> </a></li>
					<li><a href="#"><img src="web/images/f_pic12.jpg" alt=""> </a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer_top">
			<div class="f_nav1">
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="about.html">about</a></li>
					<li><a href="portfolio.html">portfolio</a></li>
					<li><a href="blog.html">blog</a></li>
					<li><a href="index.html">features</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>
