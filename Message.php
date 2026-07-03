<?php
class Message {
    private $nom;
    private $email;
    private $message;
    private $photo;

    public function __construct($nom, $email, $message, $photo = null) {
        $this->nom = htmlspecialchars($nom);
        $this->email = htmlspecialchars($email);
        $this->message = htmlspecialchars($message);
        $this->photo = $photo;
    }

    public function enregistrer($pdo) {
        $sql = "INSERT INTO messages (nom, email, message, photo) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->nom, $this->email, $this->message, $this->photo]);
    }

    public static function tous($pdo) {
        $stmt = $pdo->query("SELECT * FROM messages ORDER BY date_envoi DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
