<?php /** @var $data \Data\Message\Message */ ?>
<hr>
<h3><?=$data->getMessage();?></h3>
<hr>
<h4>From: <a href="user.php?id=<?=$data->getSenderId();?>">
        <?=$data->getNickname();?>
    </a></h4>

<hr>
<form action="user.php?id=<?=$data->getSenderId();?>" method="post" class="form-horizontal">
            <textarea name="message" id="" cols="40" rows="5"></textarea>
    <input type="submit" name="send" value="Send">
</form>