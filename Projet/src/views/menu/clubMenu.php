<div id="header">
	<div>
		<a href="index.php" id="logo">Cercle de voile</a>
		<ul>
			<li>
				<a href="index.php">Accueil</a>
			</li>
			<?php if(!isset($_SESSION['uname']))
					{ ?>

			<?php   }
					else
					{ ?>
						<li class="selected">
							<a href="index.php?section=club">Club de voile</a>
						</li>
			<?php   };?>
			<?php if(!isset($_SESSION['uname']))
					{ ?>

			<?php   }
					else
					{ ?>
						<li>
							<a href="index.php?section=ecole">Ecole de voile</a>
						</li>
			<?php   };?>
			<?php if(!isset($_SESSION['uname']))
					{ ?>
						<li>
							<a href="index.php?section=connect">Se connecter</a>
						</li>
			<?php   }
					else
					{ ?>
						<li>
							<a href="index.php?section=logout">Déconnexion</a>
						</li>
			<?php   };?>
			<?php if(!isset($_SESSION['uname']))
					{ ?>
						<li>
							<a href="index.php?section=register">S'enregistrer</a>
						</li>
			<?php   }
				  else
					{ ?>

			<?php   };?>
			<?php if(!isset($_SESSION['uname']))
					{ ?>

			<?php   }
					else
					{ ?>
						<li>
							<a href="index.php?section=regime">Choix régime</a>
						</li>
			<?php   };?>
		</ul>
	</div>
</div>