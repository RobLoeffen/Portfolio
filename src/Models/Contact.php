<?php
class Contact {

    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //Function that reaches out to the database and saves the given parameters in the database
    public function save($name, $email, $subject, $message) {
        $sql = "INSERT INTO mails (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$name, $email, $subject, $message]);
    }

    //Retrieves all data from the mail table
    public function getMails() {
        $sql = "SELECT * FROM mails";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Deletes the data with the corresponding id that was given in the parameter
    public function deleteMail($id) {
        $sql = "DELETE FROM mails WHERE Mailid = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
