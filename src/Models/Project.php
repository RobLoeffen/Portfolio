<?php
class Project {

    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //Function that reaches out to the database and saves the given parameters in the database
    public function save($title, $description) {
        $sql = "INSERT INTO projects (Title, Description) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$title, $description]);
    }

    //Retrieves all data from the mail table
    public function get() {
        $sql = "SELECT * FROM projects";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Retrieves one item with the corresponding id given in the parameter
    public function getOne($id) {
        $sql = "SELECT * FROM projects WHERE Projectid = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Deletes the data in the database with the corresponding id that was given in the parameter
    public function delete($id) {
        $sql = "DELETE FROM projects WHERE Projectid = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
