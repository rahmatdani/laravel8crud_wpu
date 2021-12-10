<?php

namespace App\Models;


class Post {
    private static $blog_post = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "penulis" => "Rahmat Dani S",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquam quae, excepturi dolores ducimus iusto ad exercitationem ratione aliquid natus perferendis hic error, est sint distinctio debitis laborum sapiente impedit. Corrupti recusandae adipisci ducimus ut atque hic deleniti illum accusantium natus ad. Accusamus eveniet quos, dignissimos voluptatem eligendi nemo sed sapiente provident facere consequatur perspiciatis sit, magnam totam. Qui, expedita dolor. Necessitatibus, exercitationem. Earum ab recusandae ducimus accusamus a, assumenda saepe doloremque error! Est, error! Cumque repellendus ipsam iure dolorem."
            ],
            [
                "title" => "Judul Post kedua",
                "slug" => "judul-post-kedua",
                "penulis" => "Ancu",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquam quae, excepturi dolores ducimus iusto ad exercitationem ratione aliquid natus perferendis hic error, est sint distinctio debitis laborum sapiente impedit. Corrupti recusandae adipisci ducimus ut atque hic deleniti illum accusantium natus ad. Accusamus eveniet quos, dignissimos voluptatem eligendi nemo sed sapiente provident facere consequatur perspiciatis sit, magnam totam. Qui, expedita dolor. Necessitatibus, exercitationem. Earum ab recusandae ducimus accusamus a, assumenda saepe doloremque error! Est, error! Cumque repellendus ipsam iure dolorem."
            ]
        ];


    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
