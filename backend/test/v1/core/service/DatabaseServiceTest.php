<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use terra\v1\core\service\DatabaseService;

final class DatabaseServiceTest extends TestCase
{
    public function testDatabaseConnection()
    {
        /** @var DatabaseService */
        $database = DatabaseService::inject();
        $result = false;

        try {
            $statement = $database->pdo->query("SELECT 1=1;");
            $result = $statement->fetch()[0] === 1;
        } catch (Exception $error) {
        }

        $this->assertTrue($result);
    }
}
