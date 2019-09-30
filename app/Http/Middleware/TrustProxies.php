<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;
>>>>>>> Entah apa yang merasukiku

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
