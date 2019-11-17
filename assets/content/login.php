<h1><?=$dict["you"][$lng]?></h1>
<form method="post" action=<?="index.php?id=you&lng=$newLng&session=start"?>>
    <p>
        <label><?=$dict["username"][$lng]?></label><input type="text" name="username"/>
    </p>
    <p>
        <label><?=$dict["password"][$lng]?></label><input type="password" name="password"/><br/>
    </p>
    <button class="checkoutBtn loginBtn">Login</button>
</form>
<p class="paddingTop"><a href=<?="index.php?id=registration&lng=$lng"?>><?=$dict["newAccount"][$lng]?></a></p>