<?php

// User Model

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'rank',
        'gender',
        'date'
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name!";
        }

        if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name!";
        }

        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Invalid Email format!";
        }

        // Check if email exists
        if ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = "Email already exists!";
        }

        $genders = ['male', 'female'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Please select a gender!";
        }

        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super'];
        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Please select a rank";
        }

        if (strlen($DATA['password']) < 8) {
            $this->errors['password'] = "Password cannot be less than 8 characters long!";
        }

        if (empty($DATA['password'])) {
            $this->errors['password'] = "Password cannot be empty!";
        }

        if (empty($DATA['password2'])) {
            $this->errors['password2'] = "Password confirmation cannot be empty!";
        }


        // Check for passwords match
        if ($DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "The passwords do not match!";
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    function make_user_id($data)
    {
        $data['user_id'] = random_string(60);
        return $data;
    }


    function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }


    function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
