<?php

function asset($path)
{
    return ROOT . ASSETS_ROOT . $path;
}

function get_var($key, $default = '')
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}

function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }

    return "";
}

function esc($var)
{
    return htmlspecialchars($var);
}


function random_string($length)
{
    $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $text = "";

    for ($x = 0; $x < $length; $x++) {

        $random = rand(0, 61);
        $text .= $array[$random];
    }

    return $text;
}


function format_date($date)
{
    return date("jS M, Y", strtotime($date));
}


function dd($data) //Print out data in readable way
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
}

function get_user_image($user)
{
    $image = asset($user->image);
    if (!file_exists($image)) {
        $image = asset('/images/user_female.jpg');
        if ($user->gender == 'male') {
            $image = asset('/images/user_male.jpg');
        }
    }

    return $image;
}
