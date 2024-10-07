<?php

// User Model

class Classes_model extends Model
{
    protected $table = 'classes';

    protected $allowedColumns = [
        'class_name',
        'date'
    ];

    protected $beforeInsert = [
        'make_class_id',
        'make_school_id',
        'make_user_id'
    ];

    protected $afterSelect = [
        'get_user'
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        if (empty($DATA['class_name']) || !preg_match('/^[a-z A-Z0-9]+$/', $DATA['class_name'])) {
            $this->errors['class_name'] = "Only letters and numbers allowed in class name!";
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    function make_user_id($data)
    {
        if (isset($_SESSION['USER']->user_id)) {
            $data['user_id'] = $_SESSION['USER']->user_id;
        }
        return $data;
    }

    function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }


    function make_class_id($data)
    {
        $data['class_id'] = random_string(60);
        return $data;
    }

    function get_user($data)
    {
        $user = new User();
        foreach ($data as $key => $row) {
            $result = $user->where('user_id', $row->user_id);
            $data[$key]->user = isset($result[0]) ?  $result[0] : null;
        }

        return $data;
    }
}
