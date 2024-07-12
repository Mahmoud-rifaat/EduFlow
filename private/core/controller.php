<?php

// Main Controller class

class Controller{
    public function view($view, $data = array())
    {
        extract($data);

        if(file_exists('../private/views/'.$view.'.view.php')){
            // This is what will display the view file
            require '../private/views/'.$view.'.view.php';
        }
        else{
            require '../private/views/404.view.php';
        }
    }
}
