<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="bs-component">
        <form method="POST" class="form-horizontal">
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="nickname" class="col-lg-2 control-label">Nickname</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>