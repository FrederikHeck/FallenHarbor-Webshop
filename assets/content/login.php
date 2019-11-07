<h1><?=$dict["you"][$lng]?></h1>
<form method="post" action=<?="index.php?id=you&lng=$newLng&session=start"?>>
    <p>
        <label><?=$dict["username"][$lng]?></label><input type="text" name="username"/>
    </p>
    <p>
        <label><?=$dict["password"][$lng]?></label><input type="password" name="password"/><br/>
    </p>
    <input type="submit" name="submit" value="Login">
</form>
<a href=<?="index.php?id=registration&lng=$newLng"?>><?=$dict["newAccount"][$lng]?></a>