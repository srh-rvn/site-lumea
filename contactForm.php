<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div style="color: green; background: #e0ffe0; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        ✅ Message envoyé avec succès !
    </div>
<?php endif; ?>

<!DOCTYPE html>

<html>
   <head>
      <title>Maison Luméa</title>
      <meta charset="UTF-8" />
	  <link rel="stylesheet" type = "text/css" href="feuille_style.css">
	  <link rel="icon" href="logo.png"/>
	  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
   </head>
   
   <body>

	<header class="header">
  		<img src="logo.png" alt="Logo du site" class="logo">
		<h1 id="haut" class="nom_marque">MAISON LUMEA</h1>
	</header>


<nav>
	<ol class="listedenav">
	<li class="elementnav"><a href="./index.html">Accueil</a></li>
	<li class="elementnav"><a href="./produits.html">Produits</a></li>
	<li class="elementnav"><a href="index.php?page=contact">Nous contacter</a></li>
	<li class="elementnav"><a href="./webographie.html">Webographie</a></li>
	<li class="elementnav"><a href="index.php?page=login">Connexion</a></li>
	</ol>
	<br>
</nav>
<br>
<h1 id="haut">UNE QUESTION ? UN PROBLEME ? ECRIVEZ-NOUS !</h1>
<br>
    <form action="controller/controleur.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name" required>
        </p>
        <p>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="user_mail" required>
        </p>
        <p>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message" rows="5" cols="30" required></textarea>
        </p>
        <p>
            <label for="photo">Votre photo (optionnel) :</label>
            <input type="file" id="photo" name="photo">
        </p>
        <p>
            <input type="reset" value="Réinitialiser">
            <input type="submit" value="Envoyer">
        </p>
    </form>
   </body>
</html>

