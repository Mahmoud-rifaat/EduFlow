<?php

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }

    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }

    public static function logged_in()
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }

    public static function user()
    {
        if (isset($_SESSION['USER'])) {
            return $_SESSION['USER']->firstname;
        }

        return false;
    }

    public static function __callStatic($method, $params)
    {
        $method = str_replace('get', '', $method);
        $prop = strtolower($method);

        if (isset($_SESSION['USER']->$prop)) {
            return $_SESSION['USER']->$prop;
        }

        return false;
    }

    public static function switch_school($id)
    {
        if (isset($_SESSION['USER']) && $_SESSION['USER']->rank == 'super') {

            $user = new User();
            $school = new School();
            $row = $school->where('id', $id);

            if ($row) {
                $row = $row[0];
                $arr['school_id'] = $row->school_id;

                if ($user->update($_SESSION['USER']->id, $arr)) {
                    $_SESSION['USER']->school_id = $row->school_id;
                    $_SESSION['USER']->school_name = $row->school_name;
                }
            }
            return true;
        }

        return false;
    }
}
