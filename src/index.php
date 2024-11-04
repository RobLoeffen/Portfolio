<?php
require_once 'Database/db-connection.php';
require 'Controllers/BaseController.php';
require 'Controllers/ProjectController.php';
require 'Controllers/ContactController.php';
$dbconn = new dbConnection();
$controller = new contactController($dbconn->getdbconnection());
$projectController = new ProjectController($dbconn->getdbconnection());
//Gets the server url and saves it in a variable
$requestUri = $_SERVER['REQUEST_URI'];
//Retrieves the id from the url and when the id is more than 0 it executes the function
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id > 0) {
    $projectController ->getOneProject($id);
}
//if the url matches retrieve the data and if a post is made on this page send the form data to the database
if ($requestUri === '/home' || $requestUri === '/')
{
    $projectController->getProjectData();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->handleFormSubmission();
    }
}
/*if the url matches retrieve data from the database and give it to the admin view.
if a post is made send the form data to the database*/
if ($requestUri === '/admin')
{
    $controller->getMailData();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $projectController->handleFormSubmission();
    }
}
/*Checks for a regular expression and check if it matches with the url.
When it does delete the item with the id from the url*/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && preg_match('/\/mail\/delete\/(\d+)/', $_SERVER['REQUEST_URI'], $matches)) {
    $controller->delete($matches[1]);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && preg_match('/\/project\/delete\/(\d+)/', $_SERVER['REQUEST_URI'], $matches)) {
    $projectController->delete($matches[1]);
}
?>

