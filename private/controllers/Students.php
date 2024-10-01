<?php

class Students extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school_id = Auth::getSchool_id();

        $user = new User();
        $users = $user->query(
            "SELECT * FROM users WHERE school_id = :school_id && rank in ('student') ORDER BY id DESC",
            [
                'school_id' => $school_id
            ]
        );

        $crumbs = [
            ['Dashboard', './'],
            ['Students', './students']
        ];

        $this->view('students', [
            'users' => $users,
            'crumbs' => $crumbs
        ]);
    }
}
