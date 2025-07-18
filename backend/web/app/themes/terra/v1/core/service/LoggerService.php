<?php

namespace terra\v1\core\service;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use terra\v1\core\di\Singleton;

class LoggerService extends Singleton
{
    public function build(string $channel = ''): Logger
    {
        $formatter = new LineFormatter(TERRA_LOG_FORMAT, TERRA_DATE_FORMAT, true);

        $handler = new StreamHandler(TERRA_LOG_FILE);
        $handler->setFormatter($formatter);

        $logger = new Logger($channel);
        $logger->pushHandler($handler);

        return $logger;
    }
}
