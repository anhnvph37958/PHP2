
<?php 
include 'model3.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$user = get_user($email);


include 'view3.php'
?>