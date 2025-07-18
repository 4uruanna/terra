<?php

namespace terra\v1\core\error;

use terra\v1\core\abstract\TerraError;

class InternalError extends TerraError
{
    public function __construct(string|null $message = null)
    {
        $this->code = 500;
        $this->message = $message ?? "internal server error";
    }
}
