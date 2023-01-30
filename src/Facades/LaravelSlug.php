<?php

namespace Khamdullaevuz\LaravelSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khamdullaevuz\LaravelSlug\LaravelSlug
 */
class LaravelSlug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Khamdullaevuz\LaravelSlug\LaravelSlug::class;
    }

    public static function translateSlug($slug): string
    {
        $rus = array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');

        $lat = array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');

        $slug = str_replace($rus, $lat, $slug);
        $slug = str_replace('-', ' ', $slug);
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $slug);

        return $slug;
    }
}
