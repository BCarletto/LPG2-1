<?php

namespace App\db;

class ConnectionFactory {

    private $host = "localhost";
    private $db = "login";
    private $user = "root";
    private $password = "D3v3l0pm3nt";
    public $con;

    public function __construct (){
        $con = new PDO("mysql:host=localhost;db=login", $user, $password);
    }


}