<?php

class Home extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }


        $user = new User();
        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);
    }
}
