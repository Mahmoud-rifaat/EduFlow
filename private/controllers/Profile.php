<?php

class Profile extends Controller
{
    public function index($id = '')
    {

        $user = new User();
        $row = $user->first('user_id', $id);

        $crumbs = [
            ['Dashboard', ''],
            ['Profile', 'profile']
        ];

        if ($row) {
            $crumbs[] = [$row->firstname, $row->user_id];
        }

        $this->view(
            'profile',
            [
                'row' => $row,
                'crumbs' => $crumbs
            ]
        );
    }
}
