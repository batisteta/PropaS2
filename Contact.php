<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav>
			<ul> 
				<li class="menu-accueil"><a href="accueil.php">Accueil</a></li>
				<li class="menu-NosVideos"><a href="NosVideos.php">Tout Savoir</a>
					<ul class="submenu">
						<li><a href="NosVideos.php">Tout savoir en video!</a></li>
						<li><a href="Viande.php">Tout savoir en image!</a></li>
					</ul></li>
				<li class="menu-contact"><a href="Contact.php">Nous contacter</a></li>
			</ul>
		</nav>
		<form action="/action_page.php" style="border:1px solid #ccc">
			<div class="container">
				<h1>S'inscrire</h1>
				<hr>

				<label><b>Email</b></label>
				<input type="text" placeholder="Entrer un email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Entrer un mot de passe" name="mdp" required>

				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeter le mot de passe" name="mdp-repeat" required>
				
				<label>
				  <input type="checkbox" checked="Verifier" style="margin-bottom:15px"> Se rappeler de moi
				</label>
				
				<a href="#" style="color:dodgerblue">Terms & Privacy</a>.

				<div class="clearfix">
				  <button type="button" class="cancelbtn">Annuler</button>
				  <button type="submit" class="signupbtn">S'enregistrer</button>
				</div>
			</div>
		</form>
	</body>
</html>
