<?php

class Users extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school_id = Auth::getSchool_id();

        $user = new User();
        $data = $user->query(
            "SELECT * FROM users WHERE school_id = :school_id",
            [
                'school_id' => $school_id
            ]
        );

        $this->view('users', ['users' => $data]);
    }
}
