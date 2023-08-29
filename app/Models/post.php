<?php

namespace App\Models;

class Post
{
    private static  $blog_post = [
        [
            "title" => "Judul Pertama",
            'slug' => "judul-pertama",
            "author" => "Uki Mahfuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quod ipsa nobis magnam minus illo voluptate sapiente! Eum dicta animi ex doloribus consequatur amet accusantium quis aliquid harum facere deserunt, numquam sint eveniet in quisquam doloremque sapiente magni enim vitae minima sunt cumque. Itaque quo sequi esse repellat a ipsa tempora officia, doloremque molestias! Repellat, molestias officia natus fugit asperiores reiciendis nihil dicta. Fuga molestias architecto voluptatum quo, placeat provident natus porro aliquid enim, asperiores, eveniet dolore at suscipit sint?
            "
        ],
        [
            "title" => "Judul Kedua",
            'slug' => "judul-kedua",
            "author" => "Akhfee Lauki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quod ipsa nobis magnam minus illo voluptate sapiente! Eum dicta animi ex doloribus consequatur amet accusantium quis aliquid harum facere deserunt, numquam sint eveniet in quisquam doloremque sapiente magni enim vitae minima sunt cumque. Itaque quo sequi esse repellat a ipsa tempora officia, doloremque molestias! Repellat, molestias officia natus fugit asperiores reiciendis nihil dicta. Fuga molestias architecto voluptatum quo, placeat provident natus porro aliquid enim, asperiores, eveniet dolore at suscipit sint?
            "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post  = static::all();
        return $post->firstwhere('slug', $slug);
    }
}
