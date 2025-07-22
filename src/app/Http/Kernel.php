protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

    // middleware kamu
    'apikey' => \App\Http\Middleware\ApiKeyMiddleware::class,
];