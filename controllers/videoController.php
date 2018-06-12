<?php
$data = $_POST;
if (isset($data['send_video']))
{
    $vid = new Video();
    $vid->addVideo();
    ?>
    <script>
        document.location.href = "";
    </script>

    <?
}

class Video
{
    function addVideo()
    {
        $video = R::dispense('videos');
        $video->id_user = $_SESSION['logged_user']->id;
        $video->link = $_POST['video_link'];
        $video->description = $_POST['video_description'];
        R::store($video);
    }
}