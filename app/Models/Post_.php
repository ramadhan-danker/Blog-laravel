<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed at facere delectus perspiciatis, quas adipisci suscipit tenetur harum, esse earum inventore blanditiis fuga provident odit nostrum, mollitia nemo magni expedita. Provident quasi in error esse laboriosam, exercitationem laudantium eius vel necessitatibus quisquam molestias ea at similique saepe delectus amet totam fugit hic rerum nulla inventore, fuga mollitia dignissimos nam! Quidem ab quae modi exercitationem magni praesentium consectetur vel aliquam tempora quibusdam reprehenderit eveniet veritatis, molestias vero fugit, quod mollitia sequi?"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Danker",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt delectus nostrum neque animi tempora architecto quidem aliquid saepe repudiandae sed dolorem maxime mollitia totam hic suscipit ea, sit soluta, sapiente adipisci repellendus est expedita laudantium? Error, mollitia. Tenetur rem aperiam molestias cum, voluptatibus vitae labore, maxime architecto consequatur explicabo quam."
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
