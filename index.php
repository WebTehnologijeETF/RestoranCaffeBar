<!-- Restoran Aurora - Naslovnica -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Aurora restoran | Naslovna</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	</head>

<body id="str1">
	<div class="body4">
		<div class="body1">	
			<div class="main grid">
				<?php include("zaglavlje.php"); ?>
				<article id="sadrzaj">
					<div class="wrap">
						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>Dobrodošli <span>u Auroru</span></h2>
										<figure><img src="slike/str1_slika1.jpg" alt="" ></figure>
										<p class="pad_dno1">
											<br><a href="http://en.wikipedia.org/wiki/Aurora">Značenje imena Aurora<br></a><br>Restoran Aurora je već od samih početaka postala nezaobilazna postaja svih izletnika željnih udobnog ambijenta i vrhunske kuhinje. Oslonite se na iskustvo i profesionalnost osoblja u pružanju ugostiteljskih usluga vrhunske kvalitete. Za sve goste restorana osiguran je i besplatan parking prostor ispred restorana. <br> Ugodno ozračje, ljubazno osoblje te vrhunski domaći specijaliteti ono je po čemu ćete prepoznati restoran Aurora.</p>
											<a href="#" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>
						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>O <span>Nama</span></h2>
										<figure><img src="slike/str1_slika2.jpg" alt="" ></figure>
										<p class="pad_dno1">
											<br>Cilj Aurore je:<br>Vaše zadovoljstvo i uživanje. Želja je da uživate u izvrsnoj hrani, piću, usluzi, prirodi i neposrednoj domaćinskoj atmosferi, uz prihvatljive cijene. Ako Aurori pružite priliku za obilježavanje nekih Vaših posebnih dana (vjenčanja, rođendani, praznici…), ti dani veoma lahko mogu postati za Vas nezaboravan doživljaj.
										</p>
										<a href="#" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>
						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>Naše <span>Usluge</span></h2>
										<figure><img src="slike/str1_slika3.jpg" alt="" ></figure>
										<ul class="list1 pad_dno1">
											<li>
												<br>U svome zatvorenom dijelu raspolaže sa 200, a u prirodnom ambijentu ljetne bašte sa 220 mjesta. Gostima je obezbjeđen parking sa 70 parking mjesta. Enterijer restorana, brižljivo dizajniran, kao i prirodno okruženje same ljetne bašte, teško da može ikoga ostaviti ravnodušnim, te zasigurno može odgovoriti najizbirljivijim ukusima i željama cijenjenih posjetilaca.
											</li>
										</ul>
										<a href="#" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
			</div>
		</div>

		<div class="body2">
			<div class="main grid">
				<article id="sadrzaj2" class="novost">
					<div class="wrapper">
						<section class="col-2-3">
							<h2 class="novostiBoja"><br>Novosti<br></h2>
							<br>
						    <div id="novosti">
						        <div class="headerzlato"></div>
						        <!-- <?php include("novosti_skripte/novosti.php"); ?> -->
						        <?php include("novosti_skripte/novostibaza.php"); ?>
						    </div>
						</section>
					</div>
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
						<audio controls>
								<source src="music/song1.mp3" type="audio/mpeg">
						</audio>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<script src="js/submeni.js"></script>
	<script src="js/ucitajStranicuAsinhrono.js"></script>
</body>
</html>