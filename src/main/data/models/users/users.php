<?php

namespace RealEstatePortal\Data\Models\Users;

use RealEstatePortal\Data\Config\Database;

class User extends Database
{
    private ?\mysqli $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->getConnection();
        $this->createTable();
    }

    public function createTable(): void
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            password VARCHAR(255) NOT NULL
        )";

        $this->db->exec($sql);
    }
}