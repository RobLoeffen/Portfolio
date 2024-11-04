<?php
require_once 'Models/Contact.php';
require_once 'Models/Project.php';

//Inherits the BaseController
class contactController extends BaseController {

    public function __construct($pdo) {
        parent::__construct($pdo);
    }

    //When a post request is made it save the fields as variables and sends them to the model function in the parameter
    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $subject = htmlspecialchars(trim($_POST['subject']));
            $message = htmlspecialchars(trim($_POST['message']));

            //Makes a new object of Contact
            $contactModel = new Contact($this->pdo);

            if ($contactModel->save($name, $email, $subject, $message)) {
            } else {
                echo "Failed to submit the message.";
            }
        } else {
            echo "Invalid request method.";
        }
    }

    // Uses the model functions to get the data and sends it to the admin view
    public function getMailData()
    {
        $contactModel = new Contact($this->pdo);
        $projectModel = new Project($this->pdo);
        $mails = $contactModel->getMails();
        $projects = $projectModel->get();
        require 'views/admin.php';
    }

    //Sends the parameter to the model function where it deletes the item and refreshes the page
    public function delete($id) {
        $contactModel = new Contact($this->pdo);
        if ($contactModel->deleteMail($id)) {
            header("Location: /admin");
            exit();
        } else {
            echo "Failed to delete the mail.";
        }
    }
}
?>