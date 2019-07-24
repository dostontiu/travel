<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Support\Facades\Config;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }

        if (session()->get('locale_id')==null){
            foreach (App\TourLang::all() as $item){
                if ($item->locale==Config::get('app.locale')){
                    session()->put('locale_id', $item->id);
                }
            }
        }

        return $next($request);
    }
}
