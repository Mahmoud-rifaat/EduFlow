<?php

class Home extends Controller
{
    public function index()
    {
        $user = new User();

        $arr = [
            'id' => 0,
            'firstname' => 'test',
            'lastname' => 'test2',
            'date' => '2024-08-04 17:11:40',
            'user_id' => 'test',
            'gender' => 'Female',
            'school_id' => 'testid222',
            'rank' => 'student'
        ];
        // $user->insert($arr);

        $updateArr = [
            'firstname' => 'firstName',
            'lastname' => 'lastName'
        ];
        // $user->update(3, $updateArr);    


        $user->delete(3);

        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);
    }
}
