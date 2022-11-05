<?php

namespace App\Models;


class Coba
{
    private static $coba = [
        [
            "title" => "Coba",
            "coba" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni sunt enim vero sint laborum. Doloribus voluptatem eaque consequuntur aperiam vitae."
        ]
    ];

    public static function all()
    {
        return self::$coba;
    }
}
