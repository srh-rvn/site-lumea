<!DOCTYPE html>

<html>
   <head>
      <title>Maison Luméa</title>
      <meta charset="UTF-8" />
	  <link rel="stylesheet" type = "text/css" href="feuille_style.css">
	  <link rel="icon" href="./logo.png"/>
	  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
   </head>
   
   <body>

	<header class="header">
  		<img src="./logo.png" alt="Logo du site" class="logo">
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
    <h1 id="haut" >Messages reçus</h1>
    <div>
    <?php foreach ($messages as $index => $m): ?>
        <div style=" padding: 20px; margin: 25px auto; border-radius: 10px; max-width: 800px;">
            <h2>📝 Message #<?= $index + 1 ?></h2>
            <p><strong>Nom :</strong> <?= htmlspecialchars($m['nom']) ?></p>
            <p><strong>Email :</strong> <?= htmlspecialchars($m['email']) ?></p>
            <p><strong>Message :</strong><br><?= nl2br(htmlspecialchars($m['message'])) ?></p>
            <p><strong>Date :</strong> <?= $m['date_envoi'] ?></p>

            <?php if ($m['photo']): ?>
                <p><strong>Photo :</strong><br>
                <a href="/~sraveneau/uploads/<?= htmlspecialchars($m['photo']) ?>" target="_blank"> Voir la photo 📷 </a>
                </p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    </div>
        <h2 style=" padding: 20px; margin: 25px auto; border-radius: 10px; max-width: 200px;background-color: #5F92E7FF;">
            <a href="/~sraveneau/logout.php">🔓 Se déconnecter</a>
        </h2>
    </div>
</body>
</html>

