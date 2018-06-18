<?php
$data = $_POST;
if (isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users2', 'email = ?', array($data['emailIn']));
    if ($user) {
        if (password_verify($data['passwordIn'], $user->password)) {
            ?>
            <script>
                document.location.href = "index.php";
            </script>

            <?

            $_SESSION['logged_user'] = $user;
        } else {
            $errors[] = "<div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Uncorrect password</span>
                        </div>
                    </div>";
        }

    } else {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>We don't have any users like this.</span>
                        </div>
                      </div>";
    }
    if (!empty($errors)) {
        echo array_shift($errors);
    }
}



