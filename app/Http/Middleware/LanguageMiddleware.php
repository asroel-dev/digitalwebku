<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Cookie\Middleware\LanguageMiddleware as Middleware;

class LanguageMiddleware extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    public function handle($request, Closure $next)
{
        $locale = Session::get('app_locale');
        if (empty($locale)) {
            $locale = $this->getVisitorLocale($request->ip());
            Session::put('app_locale', $locale);
        }

        App::setlocale($locale);

        return $next($request);
}
}
