
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form class="login" ACTION="verif_user.php" method="POST" >
    <div class="form-row form-row-wide">
        <label for="username">
            Username or email address <span class="required">*</span>
        </label>
        <input type="text" class="input-text" name="username" id="username" required/>
    </div>
    <div class="form-row form-row-wide">
        <label for="password1">Password <span class="required">*</span></label>
        <input class="input-text" type="password" name="password" required="" id="password"/>
    </div>
    <div class="form-row">
        <label for="rememberme1" class="inline form-flat-checkbox">
            <input name="rememberme" type="checkbox" id="rememberme1" value="forever"/><i></i>Remember me
        </label>
        <br><br>
        <input class="btn btn-outline rounded" type="submit" value="login">
    </div>
    <div class="lost_password">
        <a href="#">Lost your password?</a>
    </div>
</form>
</body>
</html>