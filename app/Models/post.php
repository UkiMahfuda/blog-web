<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post
{
    private static $describe
    = [
        [
            'name' => 'Uki Mahfuda',
            'edu' => 'Banchelor Degree',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, reprehenderit vitae quis autem ad similique.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus nobis sequi cum tenetur. Perspiciatis.'
        ],
        [
            'name' => 'Akhfee Lauki  Mahfuda',
            'edu' => 'Computer Science',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, reprehenderit vitae quis autem ad similique.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus nobis sequi cum tenetur. Perspiciatis.'
        ]
    ];

    public static function all()
    {
        return self::$describe;
    }
}
