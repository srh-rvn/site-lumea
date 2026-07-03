<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: index.php?page=admin');
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';


    $admin_user = 'projet';
    $admin_pass = 'test'; 

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php?page=admin');
        exit();
    } else {
        $error = "❌ Identifiants incorrects.";
    }
}
?>

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
<br>
<h1 id="haut">CONNEXION A L'ESPACE D'ADMINISTRATION</h1>
<br>
<?php if ($error): ?>
        <div style="color: red;"><?= $error ?></div>
    <?php endif; ?>
    <form method="post">
        <p>
            <label>Nom d'utilisateur :</label>
            <input type="text" name="username" required><br><br>
        </p>
        <p>
            <label>Mot de passe :</label>
            <input type="password" name="password" required><br><br>
        </p>
        <p>
            <input type="submit" value="Se connecter">
        </p>
    </form>
   </body>
</html>
