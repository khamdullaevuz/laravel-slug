<?php

namespace Khamdullaevuz\LaravelSlug;

class LaravelSlug
{
    public function translateSlug($slug): string
    {
        return Facades\LaravelSlug::translateSlug($slug);
    }
}
