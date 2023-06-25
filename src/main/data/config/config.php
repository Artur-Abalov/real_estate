<?php

namespace RealEstatePortal\Data\Config;

class Database
{
    private string $user;
    private string $host;
    private string $pass;
    private string $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "";
        $this->db = "real_estate";
    }

    public function getConnection()
    {
        $connect = new \mysqli($this->host, $this->user, $this->pass, $this->db);
        if($connect->connect_error)
        {
            die("Connection failed: ".$connect->connect_error);
        } else
        {
            echo "Connected Successfully";
        }

        return $connect;
    }
}