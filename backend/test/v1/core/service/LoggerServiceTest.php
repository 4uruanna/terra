<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use terra\v1\core\service\LoggerService;

final class LoggerServiceTest extends TestCase
{
    public function testLog(): void
    {
        if (file_exists(LoggerService::LOG_FILE)) {
            unlink(LoggerService::LOG_FILE);
        }

        $loggerService = LoggerService::inject();
        $logger = $loggerService->build(self::class);
        $logger->debug('DEBUG');
        $logger->info('INFO');
        $logger->notice('NOTICE');
        $logger->warning('WARNING');
        $logger->error('ERROR');
        $logger->critical('CRITICAL');
        $logger->alert('ALERT');
        $logger->emergency('EMERGENCY');

        $this->assertTrue(file_exists(LoggerService::LOG_FILE));
        $content = file_get_contents(LoggerService::LOG_FILE);
        $rows = array_filter(explode("\n", $content), fn($l) => strlen($l));
        $this->assertEquals(8, count($rows));
    }
}
