<?php /** @var $data \Data\Users\UserRegisterViewData */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <?php if (!empty($result)): ?>
        <h1><?=$result;?></h1>
    <?php endif;?>
    <div class="bs-component">
            <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <legend>Register</legend>
                    <div class="form-group">
                        <label for="firstName" class="col-lg-2 control-label">First name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="first_name" id="firstName" placeholder="First name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-lg-2 control-label">Last name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nickname" class="col-lg-2 control-label">Nickname</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="col-lg-2 control-label">Confirm password</label>
                        <div class="col-lg-10">
                            <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <?php foreach ($data->getGenders() as $gender): ?>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="gender" value="<?=$gender->getId();?>">
                                    <?=$gender->getName();?>
                                </label>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="col-lg-2 control-label">Birthday</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="birthday" id="birthday">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="orientation" class="col-lg-2 control-label">Sexual orientation</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="orientation" id="orientation">
                                <?php foreach ($data->getOrientations() as $orientation): ?>
                                    <option value="<?=$orientation->getId();?>">
                                        <?=$orientation->getName();?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="country" id="country">
                                <?php foreach ($data->getCountries() as $country): ?>
                                    <option value="<?=$country->getId();?>">
                                        <?=$country->getName();?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="city" id="city">
                                <?php foreach ($data->getCities() as $city): ?>
                                    <option value="<?=$city->getId();?>">
                                        <?=$city->getName();?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar" class="col-lg-2 control-label">Avatar</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="avatar" id="avatar" placeholder="Avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                            <span class="help-block">Describe yourself</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
</div>
</body>
</html>
