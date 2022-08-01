<?php

namespace App\Models;


class Post
{
    private static $blog_posts  = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "AgusKrisna",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem harum explicabo iure totam, nisi quas officiis autem assumenda consequuntur, odit deleniti maiores! Eaque soluta reprehenderit quia suscipit optio modi, quae incidunt tempore repudiandae, quibusdam atque aperiam earum reiciendis fugiat iure quis sunt vero! Illo temporibus placeat, qui necessitatibus quaerat eum, et numquam veritatis magnam doloremque ex, autem fugiat officia neque! Illo fugit tenetur nemo! Saepe perferendis, at quam sunt veniam unde repudiandae voluptatibus ex quidem culpa officia quia, commodi laudantium."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Budy",
                "body" => "Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem harum explicabo iure totam, nisi quas officiis autem assumenda consequuntur, odit deleniti maiores! Eaque soluta reprehenderit quia suscipit optio modi, quae incidunt tempore repudiandae, quibusdam atque aperiam earum reiciendis fugiat iure quis sunt vero! Illo temporibus placeat, qui necessitatibus quaerat eum, et numquam veritatis magnam doloremque ex, autem fugiat officia neque! Illo fugit tenetur nemo! Saepe perferendis, at quam sunt veniam unde repudiandae voluptatibus ex quidem culpa officia quia, commodi laudantium."
            ]
        ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $blog = self::all();

        // $new_post = [];
        // foreach($blog as $value){
        //     if($value['slug'] === $slug){
        //         $new_post = $value; // $new_post berisi array yg didalamnya ada $blog_post[0] dan $blog_post[1]
        //     }
        // }
        return $blog->firstwhere('slug', $slug);
    }
}
