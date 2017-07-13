<?php /** @var $data \Data\Users\AllUsersViewData */?>
<?php $found = false; ?>
<form method="post">
    Filter by:
    <hr>
    Gender: <select name="gender">
        <option value="-1">-- Select gender --</option>
        <?php foreach ($data->getAdditionalData()->getGenders() as $gender):?>
            <option value="<?=$gender->getId();?>">
                <?=$gender->getName();?>
            </option>
        <?php endforeach;?>
    </select>
    <br>
    Orientation: <select name="orientation">
        <option value="-1">-- Select orientation --</option>
        <?php foreach ($data->getAdditionalData()->getOrientations() as $orientation):?>
            <option value="<?=$orientation->getId();?>">
                <?=$orientation->getName();?>
            </option>
        <?php endforeach;?>
    </select>
    <br>
    Country: <select name="country">
        <option value="-1">-- Select country --</option>
        <?php foreach ($data->getAdditionalData()->getCountries() as $country): ?>
            <option value="<?=$country->getId();?>">
                <?=$country->getName();?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    City: <select name="city">
        <option value="-1">-- Select city --</option>
        <?php foreach ($data->getAdditionalData()->getCities() as $city): ?>
            <option value="<?=$city->getId();?>">
                <?=$city->getName();?>
            </option>
        <?php endforeach;?>
    </select>
    <hr>
    Age:
    <br>
    From:
    <select name="minAge" id="">
        <?php for ($i = $data->getMinYears(); $i <= $data->getMaxYears(); $i++):?>
            <option value="<?= $i; ?>">
                <?=$i;?> Years
            </option>
        <?php endfor;?>
    </select>
    To:
    <select name="maxAge" id="">
        <?php for ($i = $data->getMinYears(); $i <= $data->getMaxYears(); $i++):?>
            <option value="<?=$i;?>">
                <?=$i;?> Years
            </option>
        <?php endfor;?>
    </select>
    <br>
    <input type="submit" name="filter" value="Find">
</form>

<table border="1" cellpadding="2" cellspacing="2">
<thead>
<tr>
    <th>Avatar</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Nickname</th>
    <th><a href="?sort=birthday&asc=<?=isset($_GET['asc']) && $_GET['asc'] == 'true' ? 'false' : 'true';?>">Birthday</a></th>
    <th>Phone</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Orientation</th>
    <th>Country</th>
    <th>City</th>
</tr>
</thead>
    <tbody>
    <?php foreach ($data->getUsers() as $user): ?>
        <?php $found = true; ?>
        <tr>
            <td>
                <a href="user.php?id=<?=$user->getId();?>">
                     <img src="<?=$user->getPicture();?>" width="50px" height="50px">
                </a>
            </td>
            <td><?=$user->getFirstName();?></td>
            <td><?=$user->getLastName();?></td>
            <td><?=$user->getNickname();?></td>
            <td><?=$user->getBornOn();?></td>
            <td><?=$user->getPhone();?></td>
            <td><?=$user->getEmail();?></td>
            <td><?=$user->getGender();?></td>
            <td><?=$user->getOrientation();?></td>
            <td><?=$user->getCountry();?></td>
            <td><?=$user->getCity();?></td>
        </tr>
    <?php endforeach;?>
    <?php if (!$found): ?>
        <h1>No people match your preferences. Sorry for being forever alone.</h1>
    <?php endif;?>
    </tbody>
</table>