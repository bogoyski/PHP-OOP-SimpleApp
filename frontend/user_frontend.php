<?php /** @var $data \Data\Users\User */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>View your choice</title>
</head>
<body>
<div class="container">
    <div class="bs-component">
        <center><img src="<?=$data->getPicture();?>" width="150px" height="150px"/> </center>

        Message <?=$data->getNickname(); ?> now!!!
        <br>
        <form action="" method="post" class="form-horizontal">
            <textarea name="message" id="" cols="40" rows="5">

            </textarea>
            <input type="submit" name="send" value="Send">
        </form>
        <hr>

            <div>
                 First name: <?=$data->getFirstName();?>
            </div>
            <div>
                Last name: <?=$data->getLastName();?>
            </div>
            <div>
                Nickname: <?=$data->getNickname();?>
            </div>
            <?php if ($data->getPhone()): ?>
                <div>
                    Phone: <?=$data->getPhone();?>
                </div>
            <?php endif;?>
            <?php if ($data->getDescription()): ?>
                <div>
                    Description: <?=$data->getDescription();?>
                </div>
            <?php endif;?>
    </div>
</div>
</body>
</html>
