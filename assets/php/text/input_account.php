<p id="username">
    <label class='form'><?=$dict["username"][$lng]?></label><input type="text" value="<?=$username?>" name="username"/>
    <mark id="usernameInvalid">Please enter a username!</mark>
    <mark id="usernameExists">Sorry, this username is already in use.</mark>
</p>
<p id="email">
    <label class='form'><?=$dict["email"][$lng]?></label><input type="email" value="<?=$email?>" name="email"/>
    <mark>Please enter a valid email!</mark>
</p>
<p id="pw1">
    <label class='form'><?=$dict["password"][$lng]?></label><input type="password" name="pw1"/>
    <mark>The password should at least be 8 characters long, having each of the following at least once:</mark>
    <mark>An uppercase letter, a lowercase letter, a special character (%,&,£,$,...).</mark>
</p>
<p id="pw2">
    <label class='form'><?=$dict["repeatedPassword"][$lng]?></label><input type="password" name="pw2"/>
    <mark>The two passwords don't match</mark>
</p>