<div class="wall">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="What's new?" class="input-clicker" name="post_text">
        <div class="input-footer">
            <div class="icons">

                <label id="addImgToPost" for="addImgTo"><i class="ti-camera"></i></label>
                <input id="addImgTo" type="file" name="post_image">

                <label id="addVideoToPost" for="addVideoTo"><i class="ti-video-clapper"></i></label>
                <input id="addVideoTo" type="file">

                <label id="addMusicToPost" for="addMusicTo"><i class="ti-music-alt"></i></label>
                <input id="addMusicTo" type="file">

            </div>
            <input type="submit" value="Send" name="post_button">
        </div>
    </form>


    <?php
    $posts = R::findAll('posts');
    foreach ($posts as $post) {
        if ($_GET['id'] == $post->id_user_page) {
            $sharedUser = R::load('users2', $post->id_writer);
            $postid = $post->id;

            ?>
            <div class="post">
                <div class="post-header">
                    <div class="user-info">
                        <div class="round-user holder">
                            <a href="visit.php?id=<?echo $post->id_writer;?>" >  <? echo '<img src = "data:image;base64,' . $sharedUser->avatar . '"> '; ?></a>
                        </div>
                        <div>
                            <a href="visit.php?id=<?echo $post->id_writer;?>" ><span><? echo $sharedUser->name . " " . $sharedUser->lastName ?></span></a>
                            <span class="under-span">shared</span><br>
                            <span class="time"><? echo $post->date; ?></span>

                            <? if ($_SESSION['logged_user'] == $post->id_writer) { ?>
                                <a href="javascript:void(0);" class="ti-more more-right call-post"></a>
                            <? } ?>
                            <div class="post-event">
                                <form action="#" method="POST">

                                    <input type="submit" value="Delete post" name=<? echo $postid ?>>
                                    <?
                                    if (isset($_POST[$postid])) {
                                        $delPost = R::load('posts', $postid);
                                        R::trash($delPost);
                                    }

                                    ?>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-body lightbox-gallery">
                    <p><? echo $post->text; ?></p>
                    <? if ($post->image != NULL) {
                        echo '<img src = "data:image;base64,' . $post->image . '"> ';
                    }


                    ?>
                    <div id="myCode"></div>
                </div>
                <div class="post-footer">
                    <div class="likes">
                        <i class="ti-heart"></i>
                        <span>15 person</span>
                    </div>
                </div>

            </div>
        <? }
    } ?>


</div>