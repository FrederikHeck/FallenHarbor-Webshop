<h1><?=$dict["requestData"][$lng]?></h1>
<form>
    <div>
        <input type="radio"  name='forgotData' value='askUsername'><?=$dict['askUsername'][$lng]?>
    </div>
    <div>
        <input type="radio"  name='forgotData' value='resetPW'><?=$dict['resetPW'][$lng]?>
    </div>
    <p id="email">
        <label class='form'><?=$dict["email"][$lng]?></label><input type="email" name="email"/>
        <mark>Please enter an email!</mark>
    </p>
    <button class="btn"><?=$dict["request"][$lng]?></button>
</form>

<?php #todo: Seite funktionstüchtig machen
?>
<h3 style="color:red">This site doesnt work yet</h3>