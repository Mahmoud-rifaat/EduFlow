<?php


require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '\..\..');
$dotenv->load();

class Database
{
    private function connect()
    {

        $string = "mysql:host=" . $_ENV['DBHOST'] . ";dbname=" . $_ENV['DBNAME'];

        if (!$con = new PDO($string, $_ENV['DBUSER'], $_ENV['DBPASS'])) {
            die("Couldn't connect to Database!");
        }

        return $con;
    }

    public function query($query, $data = array(), $data_type = "object")
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);
        if ($stmt) {
            $check = $stmt->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
        return false;
    }
}
