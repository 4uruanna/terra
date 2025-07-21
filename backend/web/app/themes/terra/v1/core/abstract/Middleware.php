<?php

namespace oml\mod\api;

use terra\v1\core\di\Singleton;
use WP_HTTP_Response;
use WP_REST_Request;
use WP_REST_Server;

abstract class Middleware extends Singleton
{
    abstract public function input(mixed $response, WP_REST_Server $server, WP_REST_Request $request): mixed;
    abstract public function output(WP_HTTP_Response $response, WP_REST_Server $server, WP_REST_Request $request): WP_HTTP_Response;
}
