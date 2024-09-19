<?php

class Profile extends Controller
{
    public function index($id = '')
    {

        $user = new User();
        $row = $user->first('user_id', $id);


        $crumbs = [
            ['Dashboard', ''],
            ['Profile', 'profile'],
            ['Delete', 'schools/delete']
        ];

        $this->view(
            'profile',
            [
                'row' => $row,
                'crumbs' => $crumbs
            ]
        );
    }
}
