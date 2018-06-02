<?php
$data = $_POST;
if (isset($data['post_button'])) {
    if (!empty($data['post_text'])) {

        $post = R::dispense('posts');
        $post->id_user = $_SESSION['logged_user']->id;
        $post->text = $data['post_text'];
        $post->postImage = "";
        $post->date = date('Y-m-d');
        $post->likes = 0;
        R::store($post);
    }

}


