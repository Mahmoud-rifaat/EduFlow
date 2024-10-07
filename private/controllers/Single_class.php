<?php

class Single_class extends Controller
{
    public function index($id = '')
    {

        $user = new User();
        $classes = new Classes_model();

        $row = $classes->first('user_id', $id);

        $crumbs = [
            ['Dashboard', ''],
            ['Classes', 'classes']
        ];
        $row_user = array();

        if ($row) {
            $crumbs[] = [$row->class, ''];
            $row_user = $user->first('user_id', $row->user_id);
        }

        $this->view(
            'single-class',
            [
                'row' => $row,
                'row_user' => $row_user,
                'crumbs' => $crumbs
            ]
        );
    }
}
