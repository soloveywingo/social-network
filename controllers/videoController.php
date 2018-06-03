<?php
$data = $_POST;
if (isset($data['send_video']))
{
    $video = R::dispense('videos');
    $video->id_user = $_SESSION['logged_user']->id;
    $video->link = $data['video_link'];
    $video->description = $data['video_description'];
    R::store($video);
}