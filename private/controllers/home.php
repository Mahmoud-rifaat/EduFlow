<?php

class Home extends Controller
{
    public function index()
    {
        $db = new Database();

        $data = $db->query("SELECT * FROM users");
        $this->view('home', ['rows' => $data]);
    }
}
