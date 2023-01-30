<?php

namespace Khamdullaevuz\LaravelSlug;

use Khamdullaevuz\LaravelSlug\Facades\LaravelSlug as Facade;

class LaravelSlug
{
    public static function translateSlug($slug): string
    {
        $laravelSlug = new Facade();
        return $laravelSlug->translateSlug($slug);
    }
}
