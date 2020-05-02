<?php

namespace App\Http\Filters;

class ContactFilter
{
    use Filters;

    public static function filterParams()
    {
        return 'ContactParams';
    }

}