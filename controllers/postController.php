<?php

if (isset($data['post_button'])) {
    if (!empty($data['post_text']) || getimagesize($_FILES['post_image']["tmp_name"]) != false) {
        createPost();
        ?>
        <script>
            document.location.href = "";
        </script>

        <?
    }

}


function createPost()
{
    $post = R::dispense('posts');
    $data = $_POST;
    if (isset($_GET['id'])) {
        $post->id_user_page = $_GET['id'];
    } else {
        $post->id_user_page = $_SESSION['logged_user']->id;
    }
    $post->id_writer = $_SESSION['logged_user']->id;
    if (isset($data['post_text'])) {
        $post->text = $data['post_text'];
    } else {
        $post->text = "";
    }
    $post->date = date("Y-m-d H:i:s");
    $post->likes = 0;
    if (getimagesize($_FILES['post_image']["tmp_name"]) == false) {
        $post->image = "";
    } else {

        $image = addslashes($_FILES['post_image']['tmp_name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        $post->image = $image;

    }

    R::store($post);
}


