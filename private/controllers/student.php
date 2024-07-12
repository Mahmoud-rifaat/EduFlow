<?php

    class Student extends Controller{
        public function index($id = null)
        {
            echo 'Student controller '.$id;
        }
    }

?>