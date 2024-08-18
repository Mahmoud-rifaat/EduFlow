<?php

// Main Controller class

class Controller
{
    public function view($view, $data = array())
    {
        extract($data);

        if (file_exists('../private/views/' . $view . '.view.php')) {
            // This is what will display the view file
            require '../private/views/' . $view . '.view.php';
        } else {
            require '../private/views/404.view.php';
        }
    }

    public function loadModel($model)
    {
        if (file_exists('../private/models/' . ucfirst($model) . '.php')) {
            require('../private/models/' . ucfirst($model) . '.php');

            return new $model();
        }
    }

    public function redirect($link)
    {
        header("Location: " . ROOT . '/' . trim($link, '/'));
        die();
    }
}
