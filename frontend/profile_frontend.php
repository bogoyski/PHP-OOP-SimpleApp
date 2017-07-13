<?php /** @var $data \Data\Users\UserProfileViewData */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Profile</title>
</head>
<body>
<header>
    <a href="users.php">Find your best match</a> | <a href="logout.php">Logout!</a>
</header>
<div class="container">
    <fieldset>
        <legend>Profile</legend>
        <h1>Welcome <?=$data->getFirstName();?> <?=$data->getLastName();?></h1>
        <img src="<?=$data->getPicture();?>">
    </fieldset>
</div>
<hr>
Unread messages:
<table border="1" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th>Sender</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data->getUnreadMessages()->getMessages() as $message): ?>
        <tr>
            <td><a href="user.php?id=<?=$message->getSenderId();?>">
                    <?=$message->getNickname();?>
                </a></td>
            <td>
                <a href="message.php?id=<?=$message->getId();?>">
                    <?= strlen($message->getMessage()) > 20
                    ? substr($message->getMessage(), 0, 20) . '...'
                    : $message->getMessage();?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>