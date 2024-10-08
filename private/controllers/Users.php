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
        $users = $user->query(
            "SELECT * FROM users WHERE school_id = :school_id && rank not in ('student') ORDER BY id DESC",
            [
                'school_id' => $school_id
            ]
        );

        $crumbs = [
            ['Dashboard', './'],
            ['Users', './users']
        ];

        $this->view('users', [
            'users' => $users,
            'crumbs' => $crumbs,
            'mode' => 'users'
        ]);
    }
}
