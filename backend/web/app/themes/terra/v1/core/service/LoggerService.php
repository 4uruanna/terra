<?php

namespace terra\v1\core\service;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use terra\v1\core\di\Singleton;

class LoggerService extends Singleton
{
    const LOG_FORMAT = "%datetime% :: %channel% :: %level_name% :: %message% %context% %extra%\n";
    const DATE_FORMAT = "Y-m-d H:i:s";
    const ALLOW_LINEBREAK = true;
    const LOG_FILE = __DIR__ . '/../../../../../test.log';

    public function build(string $channel = ''): Logger
    {
        $formatter = new LineFormatter(
            self::LOG_FORMAT,
            self::DATE_FORMAT,
            self::ALLOW_LINEBREAK
        );

        $handler = new StreamHandler(self::LOG_FILE);
        $handler->setFormatter($formatter);

        $logger = new Logger($channel);
        $logger->pushHandler($handler);

        return $logger;
    }
}

