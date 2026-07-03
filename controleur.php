<?php
require_once __DIR__ . '/../model/Message.php';

try {
    $pdo = new PDO('mysql:host=mysql03.univ-lyon2.fr;dbname=php_sraveneau;charset=utf8', 'php_sraveneau', 'tDfR0_LchL0SWvfWsp5TAAiIw');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $message = $_POST['user_message'];

    $photo_name = null;

    $photo_name = null;

if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = __DIR__ . '/../uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_name = $_FILES['photo']['name'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($file_extension, $allowed_extensions) && getimagesize($file_tmp) !== false) {
        $filename = uniqid() . '_' . basename($file_name);
        $targetFile = $uploadDir . $filename;

        if (move_uploaded_file($file_tmp, $targetFile)) {
            $photo_name = $filename;
        }
    } else {
        die("❌ Le fichier n’est pas une image valide ou son extension n’est pas autorisée.");
    }
}

    $msg = new Message($nom, $email, $message, $photo_name);
    $msg->enregistrer($pdo);

    header('Location: https://phpetu.univ-lyon2.fr/~sraveneau/index.php?page=contact&success=1');
    exit();


}
