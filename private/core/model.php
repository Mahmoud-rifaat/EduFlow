<?php

// Main Model

class Model extends Database
{
    public $errors = array();

    public function __construct()
    {
        if (!property_exists($this, 'table')) {
            $this->table = strtolower($this::class) . 's';
        }
    }

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        $data =  $this->query($query, [
            'value' => $value
        ]);

        // run functions after select
        if (is_array($data)) {
            if (property_exists($this, 'afterSelect')) {
                foreach ($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            }
        }

        return $data;
    }

    public function first($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        $data =  $this->query($query, [
            'value' => $value
        ]);

        // run functions after select
        if (is_array($data)) {
            if (property_exists($this, 'afterSelect')) {
                foreach ($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            }
        }

        if (is_array($data)) {
            $data = $data[0];
        }

        return $data;
    }

    public function findAll($order = 'desc')
    {
        $query = "SELECT * FROM $this->table ORDER BY id $order";
        $data = $this->query($query);

        // run functions after select
        if (is_array($data)) {
            if (property_exists($this, 'afterSelect')) {
                foreach ($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            }
        }

        return $data;
    }

    public function insert($data)
    {
        // remove unwanted columns
        if (property_exists($this, 'allowedColumns')) {
            foreach ($data as $key => $column) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        // run functions before insert
        if (property_exists($this, 'beforeInsert')) {
            foreach ($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query =  "INSERT INTO " . $this->table . "(" . $columns . ") VALUES (:" . $values . ")";
        return $this->query($query, $data);
    }

    public function update($id, $data)
    {
        $set = '';
        foreach ($data as $key => $value) {
            $set .= ($key . ' = :' . $key . ',');
        }
        $set = trim($set, ',');

        $query = "UPDATE $this->table set $set WHERE id = :id";

        $data['id'] = $id;
        return $this->query($query, $data);
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";

        $data['id'] = $id;

        return $this->query($query, $data);
    }
}
