<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Définit la langue à partir de la session, sinon utilise l'anglais
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        return $next($request);
    }
}
