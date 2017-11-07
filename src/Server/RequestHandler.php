<?php

declare(strict_types=1);

namespace Brick\Http\Server;

use Brick\Http\Request;
use Brick\Http\Response;

/**
 * RequestHandler returns a Response for a Request.
 */
interface RequestHandler
{
    /**
     * Handles the Request and returns a Response.
     *
     * @param \Brick\Http\Request $request
     *
     * @return \Brick\Http\Response
     */
    public function handle(Request $request) : Response;
}