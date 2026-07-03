<?php
session_start();
require_once __DIR__ . '/../model/Message.php';

try {
    $pdo = new PDO('mysql:host=mysql03.univ-lyon2.fr;dbname=php_sraveneau;charset=utf8','php_sraveneau', 'tDfR0_LchL0SWvfWsp5TAAiIw');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}

$messages = Message::tous($pdo);

require_once __DIR__ . '/../view/adminVue.php';


if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}

