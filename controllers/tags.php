<?php

/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 8.09.14
 * Time: 16:59
 */
class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id)AS count
                            FROM tag LEFT JOIN post_tags USING (tag_id)
                            GROUP BY tag_id"
        );
        $this->tags = get_all("SELECT *
                            FROM tag"
        );
    }


    function view()
    {
        $tag_name = $this->params[0];

        $this->posts = get_all("SELECT * FROM post_tags
                             NATURAL JOIN post
                             NATURAL JOIN tag
                             WHERE tag_name='$tag_name'");
    }

}