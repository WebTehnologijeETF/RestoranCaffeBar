<!-- Restoran Aurora - Kontakt -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Aurora | Kontakt</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	</head>
<body id="str5">
<div class="body4">
	<div class="body1">
		<div class="main grid">
			<?php include("zaglavlje.php"); ?>
		    
		    <?php if(isset($_POST['ime']) && isset($_POST['mail']) && isset($_POST['ponovniMail']) && isset($_POST['poruka']) && ($_POST['ime']) && validacijaMail($_POST['mail']) && validacijaPonovniMail($_POST['mail'], $_POST['ponovniMail']) && validacijaPoruka($_POST['poruka'])) ; ?>
			
			<!--<?php include("novosti_skripte/potvrda.php"); ?>-->

			<article id="sadrzaj">
				<div class="wrap">
					<div class="box">
						<div>
							<h2>Kontakt <span>Forma</span></h2>
							<form id="kontaktForma" name="kontaktForma" action="demo_form.asp" onsubmit="return validacija()" method="post">
								<div>
									<div class="wrapper">
										<span>*Ime:</span>
										<input id="ime" name="ime" type="text" <?php if(isset($_POST['ime'])){ if(validirajIme($_POST['ime'])) echo "class='errorPolje'"; else echo "class='errorPolje'";} ?> onblur="validacijaIme()" value="<?php if(isset($_REQUEST['ime'])) echo $_REQUEST['ime']; else echo ""; ?>">
										<div class="error" id="errorIme" <?php if(isset($_POST['ime'])){ if(validacijaIme($_POST['ime'])) echo ""; else echo "style='display: block'";} ?>>Pogrešno ime</div>
									</div>
									<div class="wrapper">
										<span>*Mail:</span>
										<input id="mail" name="mail" type="email" <?php if(isset($_POST['mail'])){ if(validirajIme($_POST['mail'])) echo "class='okPolje'"; else echo "class='neispravnoPolje'";} ?> onblur="validacijaMail()" value="<?php if(isset($_REQUEST['mail'])) echo $_REQUEST['mail']; else echo ""; ?>">
										<div class="error" id="errorMail" <?php if(isset($_POST['mail'])){ if(validacijaMail($_POST['mail'])) echo "class='errorPolje'"; else echo "class='errorPolje'";} ?>>Pogrešan mail</div>	
									</div>
									<div class="wrapper">
										<span>&nbsp;&nbsp;Tel:</span>
										<input id="telefon" name="telefon" type="text" onblur="validacijaTelefon()">	
										<div class="error" id="errorTelefon"></div>						
									</div>
									<div class="wrapper">
										<span>Općina:</span>
										<input id="opcina" name="opcina" type="text" value="<?php if(isset($_REQUEST['opcina'])) echo $_REQUEST['opcina']; else echo ""; ?>" onblur="validacijaOpcina()">	
										<div class="error" id="errorOpcina"></div>						
									</div>
									<div class="wrapper">
										<span>Srednja škola:</span>
										<input id="skola" name="skola" type="text" value="<?php if(isset($_REQUEST['skola'])) echo $_REQUEST['skola']; else echo ""; ?>" onblur="validacijaSkola()">	
										<div class="error" id="errorSkola"></div>						
									</div>
									<div class="wrapper">
										<span>*Poruka:</span>
										<textarea id="poruka" name="poruka" onblur="validacijaPoruka()"><?php if(isset($_POST['poruka'])) echo $_POST['poruka']; else echo ""; ?></textarea>
										<div class="error" id="errorPoruka" <?php if(isset($_POST['poruka'])){ if(validacijaPoruka($_POST['poruka'])) echo ""; else echo "style='display: block'";} ?>>Unesite poruku!</div>
									</div>
									<a href="" id="posalji" class="dugme1">Pošalji</a>
									<label id="kontaktForma_dodatno">&nbsp;* Obavezna polja.</label>
									<a href="#" id="izbrisi" class="dugme1" onClick="document.getElementById('kontaktForma').reset()">Izbriši</a>		
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main grid">
		<article id="sadrzaj2">
			<section>
				<div class="wrapper">
					<div class="col-1-3">
						<div class="wrap-col">
							<h2>Naš kontakt</h2>
							<div class="wrapper pad_dno1">
								<p>
									Osjećajte se slobodno i kontaktirajte nas putem sljedećih kontakata:
								</p>
								<p class="adresa">
									Sarajevo, Velika Aleja 10<br>
									<span>Mobitel:</span>    +387 61 123 456<br>
									<span>Telefon:</span>+387 33 123 456<br>
									<span>E-mail:</span><a href="mailto:">anesadra@gmail.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col mag-1">	
							<h2>Dodatne Informacije</h2>
							<p>
								Svaku noć u Restoranu Aurora Vas zabavlja poznati tamburaški orkestar, koji uz orijentalne i etno zvukove upotpunjuje ugođaj u restoranu. Povremeno možete očekivati iznenađenja u restoranu poput poznatih regionalnih muzičkih zvijezda. Zato ste u mogućnosti ste pratite web-stranicu restorana da bi ste bili upoznati sa aktuelnostima u restoranu.
							</p>
							<br>Ako ste zainteresovani da svoje drage događaje proslavite u ekskluzivnom restoranu sa najljepšim pogledom i da vam ostanu u najboljim uspomenama, slobodno nas KONTAKTIRAJTE za više informacija.
						</div>
					</div>
				</div>
			</section>
		</article>
	</div>
</div>
<div class="body3">
	<div class="main grid">
		<footer>
			<div class="wrapper">
				<section class="col-2-3">
					<div class="wrap-col"></div>
				</section>
				<section class="col-1-4">
					<div class="wrap-col">
						<h3>&nbsp; Copyright © 2015<br>&nbsp; Restoran Aurora, Sarajevo</h3>
						<ul id="ikone">
							<li>
								<a href="https://www.google.ba/maps/place/Velika+Aleja,+Ilid%C5%BEa/@43.8226402,18.2958098,17z/data=!3m1!4b1!4m2!3m1!1s0x4758ca71fbb0b335:0xb67b017264e23e9" class="normaltip" title="Location"><img src="slike/ikona4.png" alt=""></a>
							</li>
							<li>	
								<a href="#" class="normaltip" title="Twitter"><img src="slike/ikona3.png" alt=""></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/pub/anesa-drakovac/72/114/b44" class="normaltip" title="LinkedIn"><img src="slike/ikona2.png" alt=""></a>
							</li>
							<li>
								<a href="#" class="normaltip" title="Facebook"><img src="slike/ikona1.png" alt=""></a>
							</li>
						</ul>				
					</div>
				</section>
			</div>
		</footer>
	</div>
</div>
<script src="js/submeni.js"></script>
<script src="js/kontakt.js"></script>
<script src="js/ucitajStranicuAsinhrono.js"></script>
</body>
</html>