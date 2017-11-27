<?php 
	if(session_status() === PHP_SESSION_NONE)
	{
		session_start();
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Accueil </title>
		<link rel="stylesheet" href="web/css/style.css" type="text/css">
	</head>
	<body>
		<div id="wrap">
			<?php include_once('src/views/menu/indexMenu.php'); ?>
			<div id="body" class="home">
				<div class="blog">
					<a class="plan">
						<ul>
							<li><img src="web/images/plan.png" alt="Plan du lac" /></li>
							<li><img src="web/images/voile.jpg" alt="Voile" /></li>
							<li><img src="web/images/voile1.jpg" alt="Voile" /></li>
							<li><img src="web/images/voile2.jpg" alt="Club de voile" /></li>
						 </ul>
					</a>
					<div>
						
						<h3>Cercle de Voile d'Epinal</h3>
						<p>Le Cercle de la Voile d’Epinal est basé en bordure du lac réservoir de Bouzey d’une superficie de 130ha. 
						Le Cercle de la Voile est une association affiliée à la Fédération Française de Voile. 
						Elle propose des forfaits navigation à l’année aux propriétaires de dériveurs et de planches à voile dans 
						la zone de navigation. Elle organise des animations et met à disposition avec des conditions préférentielles 
						le matériel de l’école de voile.</p>
					</div>
				</div>
				<div class="article">
					<div>
						<h3>Ecole de voile</h3>
						<p>Un programme d’initiation et perfectionnement sur planche à voile dériveur, optimist, en  juillet et août.</p>
						<ul>
							<li><p>Tu as au moins 7 ans, inscrit toi pour un stage d’optimist</p></li>
							<li><p>Tu as au moins 9 ans, inscrit toi pour un stage de planche à voile</p></li>
							<li><p>Te munir d’une autorisation de tes parents et savoir nager 25 mètres.</p>
						</ul>
						<?php if(!isset($_SESSION['uname']))
								{ ?>
									<p>
										<a href="index.php?section=register">Clique ici pour t'inscrire à l'école de voile ! </a>
									</p>
						<?php 	}
								else
								{ ?>
									<p>
										<a href="index.php?section=regime">Clique ici pour t'inscrire à l'école de voile ! </a>
									</p>
						<?php   };?>
					</div>
					<a class="plan">
						<ul>
							<li><img src="web/images/imgres.jpeg" alt="Voile" /></li>
							<li><img src="web/images/voile_486_zoom_colorbox.jpeg" alt="Laser Pico" /></li>
							<li><img src="web/images/Voile_Jaune.jpg" alt="Voile Jaune" /></li>
							<li><img src="web/images/Voile_Groupe2.jpg" alt="Club de voile" /></li>
						 </ul>
					</a>
				</div>
				<div class="news">
					<a class="plan">
						<ul>
							<li><img src="web/images/Voile_Groupe.jpg" alt="Planche à voile" /></li>
							<li><img src="web/images/Voile_Seule.jpg" alt="Voile" /></li>
							<li><img src="web/images/Laser_Pico.jpg" alt="Laser Pico" /></li>
							<li><img src="web/images/Voile_Seule2.jpg" alt="Voile" /></li>
						 </ul>
					</a>
					<div>
						<h3>Club de voile</h3>
						<p>
							Pour ses adhérents l’initiation et le perfectionnement en dériveur est gratuit.
							Le club de voile propose une inscription à l'année aux passionnés de voile de 68 à 124 € selon l'âge et le type de cotisation.
						</p>
					</div>
				</div>
			</div>
			<?php include_once('src/views/footer/footer.php'); ?>
		</div>
	</body>
</html>