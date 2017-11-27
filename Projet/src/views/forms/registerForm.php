<div class="col-lg-3 col-lg-push-1 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1">
	<form method="POST" role="form">
		<div class="form-group">
			<label for="Identifiant">Identifiant</label>
			<input
				value="<?php if(isset($_POST['identifiant'])&&empty($_POST['identifiant']))
					echo($_POST['identifiant']); 
				?>" 
				id="identifiant" name="identifiant" type="text" class="form-control" placeholder="Entrer identifiant" autocomplete="off" required>
			<span id="identifiant_span"></span>
		</div>	
		<div class="form-group">
			<label for="Nom">Nom</label>
			<input 
				value="<?php if(isset($_POST['nom'])&&empty($_POST['nom']))
					echo($_POST['nom']); 
				?>" 
				id="nom" name="nom" type="text" class="form-control" placeholder="Entrer nom" autocomplete="off" required>
			<span id="nom_span"></span>
		</div>
		<div class="form-group">
			<label for="Prénom">Prénom</label>
			<input 
				value="<?php if(isset($_POST['prenom'])&&empty($_POST['prenom'])) 
					echo($_POST['prenom']); 
				?>" 
				id="prenom" name="prenom" type="text" class="form-control" placeholder="Entrer prénom" autocomplete="off" required>
			<span id="prenom_span"></span>
		</div>
		<div class="form-group">
			<label for="Adresse mail">Adresse mail</label>
			<input
				value="<?php if(isset($_POST['email'])&&empty($_POST['email']))
					echo($_POST['email']); 
					?>" 
					id="email" name="email" type="text" class="form-control" placeholder="Entrer adresse mail" autocomplete="off" required>
			<span id="email_span"></span>
		</div>			
		<div class="form-group">
			<label for="Date de naissance">Date de naissance</label>
			<input id="datedn"
				value="<?php if(isset($_POST['datedn'])&&empty($_POST['datedn'])) 
					echo($_POST['datedn']); 
					?>"
					name="datedn" type="text" class="form-control datepicker" placeholder="jj/mm/aaaa" required>
			<span id="datedn_span"></span>
		</div>
		<div class="form-group">
			<label for="Telephone">Telephone</label>
			<input id="numpad"
				value="<?php if(isset($_POST['telephone'])&&empty($_POST['telephone']))
				echo($_POST['telephone']);
				?>"
				name="telephone" type="int" class="form-control" placeholder="Entrer numéro de téléphone" maxlength="10" autocomplete="off" required>
			<span id="telephone_span"></span>
		</div>
		<div class="form-group">
			<label for="Adresse">Adresse</label>
			<input id="adresse"
				value="<?php if(isset($_POST['adresse'])&&empty($_POST['adresse']))
				echo($_POST['adresse']);
				?>"
				name="adresse" type="text" class="form-control" placeholder="Entrer Adresse" autocomplete="off" required>
			<span id="adresse_span"></span>
		</div>
		<div class="form-group">
			<label for="Code postal">Code Postal</label>
			<input id="codepost"
				value="<?php if(isset($_POST['codepost'])&&empty($_POST['codepost']))
				echo($_POST['codepost']);
				?>"
				name="codepost" type="int" class="form-control" placeholder="Entrer le code postal" maxlength="5" autocomplete="off" required>
			<span id="codepost_span"></span>
		</div>
		<div class="form-group">
			<label for="Ville">Ville</label>
			<input id="ville"
				value="<?php if(isset($_POST['ville'])&&empty($_POST['ville']))
				echo($_POST['ville']);
				?>"
				name="ville" type="text" class="form-control" placeholder="Entrer ville" autocomplete="off" required>
			<span id="ville_span"></span>
		</div>
		<div class="form-group">
			<label for="Mot de passe">Mot de passe</label>
			<input id="password" 
				value="<?php if(isset($_POST['password'])&&empty($_POST['password'])) 
					echo($_POST['password']); 
					?>" 
					id="password" value="" name="password" type="password" class="form-control" placeholder="Entrer mot de passe" autocomplete="off" required>
			<span id="password_span_init"></span>
		</div>
		<div class="form-group">
			<label for="Confirmer le mot de passe">Confirmer le mot de passe</label>
			<input id="password_confirm"
				value="<?php if(isset($_POST['password_confirm'])&&empty($_POST['password_confirm']))
					echo($_POST['password_confirm']); 
					?>" 
					id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="Confirmer le mot de passe" autocomplete="off" required>
			<span id=password_span></span>
		</div>
		<div class="form-group" align="right">
			<button type="submit" class="btn btn-success">S'inscrire <span class="glyphicon glyphicon-pencil"></span></button>
		</div>
	</form>
</div>
