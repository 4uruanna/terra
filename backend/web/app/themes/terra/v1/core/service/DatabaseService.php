<?php

namespace terra\v1\core\service;

use PDO;
use terra\v1\core\di\Singleton;

class DatabaseService extends Singleton
{
    public readonly PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(TERRA_DATABASE_CONNECTION_STRING, DB_USER, DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
