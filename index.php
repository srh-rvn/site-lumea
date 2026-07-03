<?php
$page = $_GET['page'] ?? 'contact';

switch ($page) {
    case 'contact':
        require_once 'view/contactForm.php';
        break;
    case 'admin':
        require_once 'controller/adminController.php';
        break;
    case 'login':
        require_once 'login.php';
        break;
    default:
        echo "Page introuvable.";
}