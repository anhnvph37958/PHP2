
<?php if ($user !== null && is_array($user) && array_key_exists('firstName', $user) && array_key_exists('lastName', $user)) {
    echo $user['firstName'] . ' ' . $user['lastName'];
}?>
<form action="" method="post">
<input type="email" name="email"/>
<input type="submit" value="Gửi">

</form>