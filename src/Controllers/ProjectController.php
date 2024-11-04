<?php
require_once 'Models/Project.php';

//Extends the BaseController
class ProjectController extends BaseController {

    public function __construct($pdo) {
        parent::__construct($pdo);
    }

    public function getProjectData()
    {
        $projectModel = new Project($this->pdo);
        $projects = $projectModel->get();
        require 'views/home.php';
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = htmlspecialchars(trim($_POST['title']));
            $description = htmlspecialchars(trim($_POST['description']));

            $projectModel = new Project($this->pdo);

            if ($projectModel->save($title, $description)) {
                header("Refresh:0");
            } else {
                echo "Failed to submit the message.";
            }
        } else {
            echo "Invalid request method.";
        }
    }

    public function getOneProject($id) {
        $projectModel = new Project($this->pdo);
        $projects = $projectModel->getOne($id);
        if (!$projects) {
            echo "Project not found";
            return;
        }
        require_once 'views/Portfolio.php';
    }

    public function delete($id) {
        $projectModel = new Project($this->pdo);
        if ($projectModel->delete($id)) {
            header("Location: /admin");
            exit();
        } else {
            echo "Failed to delete the Project.";
        }
    }
}
?>