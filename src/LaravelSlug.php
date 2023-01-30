<?php

namespace Khamdullaevuz\LaravelSlug;

class LaravelSlug
{
    public function translateSlug($slug): array
    {
        return \Khamdullaevuz\LaravelSlug\Facades\LaravelSlug::translateSlug($slug);
    }
}
