<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        //Code
        $URL = $this->getURL();
        echo '<pre>';
        print_r($URL);
    }

    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
    }
}
