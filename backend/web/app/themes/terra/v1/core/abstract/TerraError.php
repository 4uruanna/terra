<?php

namespace terra\v1\core\abstract;

use Exception;
use WP_Error;
use terra\v1\core\service\LoggerService;

abstract class TerraError extends Exception
{
    public array $data = [];
    public LoggerService $loggerService;

    public function __construct(LoggerService $loggerService)
    {
        $this->loggerService = $loggerService;
    }

    public function build(): WP_Error
    {
        if (!TERRA_IS_PRODUCTION) {
            $this->data['backtrace'] = debug_backtrace();
        }

        $this->loggerService
            ->build(self::class)
            ->error($this->message, [ "code" => $this->code, "data" => $this->data ]);

        return new WP_Error($this->code, $this->message, $this->data);
    }
}
