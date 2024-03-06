<?php

namespace App\Models;


class Post

{
    private static $isi = [
        [
            "title" => "Post pertama",
            "author" => "Rizki Setiawan Akbar",
            "slug" => "post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto expedita iusto consectetur beatae quae quibusdam minima unde ea quia distinctio eveniet voluptate optio in earum voluptas debitis voluptates nam cumque illum ratione, hic molestiae! Fugit ratione quos exercitationem excepturi? Minus commodi reprehenderit vitae aliquam ipsam nesciunt numquam eius. Quidem totam corporis unde nam consequuntur aliquid quae aspernatur officiis recusandae repudiandae deserunt nesciunt ratione quod nisi a nihil porro, sequi cumque, consequatur maxime provident nemo commodi! Quaerat quae iusto rerum."
        ],
        [
            "title" => "Post kedua",
            "author" => "Scolastica",
            "slug" => "post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto expedita iusto consectetur beatae quae quibusdam minima unde ea quia distinctio eveniet voluptate optio in earum voluptas debitis voluptates nam cumque illum ratione, hic molestiae! Fugit ratione quos exercitationem excepturi? Minus commodi reprehenderit vitae aliquam ipsam nesciunt numquam eius. Quidem totam corporis unde nam consequuntur aliquid quae aspernatur officiis recusandae repudiandae deserunt nesciunt ratione quod nisi a nihil porro, sequi cumque, consequatur maxime provident nemo commodi! Quaerat quae iusto rerum."
        ],
    ];

    public static function all()
    {
        return collect(self::$isi);
    }

    public static function find($slug)

    {
        $posts = static::all();

        return $posts->firstWhere("slug", $slug);
    }
}
