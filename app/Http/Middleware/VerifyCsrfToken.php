<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/mcsuZL3mJ89pGIV9nKUBBsRn1yhqAu6J4HYKo2FYZ0y2GQLdyvf5yoWrPE0ofdEx/webhook/',
    ];
}
