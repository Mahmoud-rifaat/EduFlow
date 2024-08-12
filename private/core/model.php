<?php

// Main Model

class Model extends Database
{
    protected $table = 'users';

    public function __construct()
    {
        //code
    }

    public function where($column, $value)
    {
        $query = "SELECT * FROM $this->table WHERE :column = :value";
        return $this->query($query, [
            'column' => $column,
            'value' => $value
        ]);
    }
}
