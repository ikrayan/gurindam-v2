<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "no" => 1,
            "title" => "First",
            "slug" => "first",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, a excepturi temporibus officia distinctio voluptatibus, repellat porro nesciunt obcaecati eligendi explicabo inventore perspiciatis sit sunt natus quia nihil qui ullam?"
        ],
        [
            "no" => 2,
            "title" => "Second",
            "slug" => "second",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, a excepturi temporibus officia distinctio voluptatibus, repellat porro nesciunt obcaecati eligendi explicabo inventore perspiciatis sit sunt natus quia nihil qui ullam?"
        ],
        [
            "no" => 3,
            "title" => "Third",
            "slug" => "third",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, a excepturi temporibus officia distinctio voluptatibus, repellat porro nesciunt obcaecati eligendi explicabo inventore perspiciatis sit sunt natus quia nihil qui ullam?"
        ],
        [
            "no" => 4,
            "title" => "Forth",
            "slug" => "forth",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt nisi ab, delectus soluta similique cumque necessitatibus asperiores libero, sint vitae pariatur sequi dolore magnam tempora optio ratione, ullam tenetur praesentium laborum deserunt. Consequuntur assumenda ipsam suscipit, autem ipsum labore quo explicabo deserunt quisquam eius, excepturi debitis magnam. A eos illum molestias aspernatur itaque, dolores sit commodi odio, facilis fugit voluptates eum alias, delectus in. Optio consectetur architecto deleniti ad at repellendus, aperiam vel voluptate officiis et nobis voluptatibus animi qui? Ab odit facilis exercitationem ea nisi. Earum dolorem, quaerat deserunt impedit ea dolor qui molestiae nisi cum illo laboriosam corrupti!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug)
        //         $post = $p;
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
