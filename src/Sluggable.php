<?php

namespace Khamdullaevuz\LaravelSlug;

use Khamdullaevuz\LaravelSlug\Facades\Slug as Facade;

class Sluggable
{
    public static function make($slug): string
    {
        $laravelSlug = new Facade();
        return $laravelSlug->translateSlug($slug);
    }
}
