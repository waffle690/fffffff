<!-- <?php
$right_login = 'admin';
$right_password = 'admin';
$right_email = ' admin@mail.ru ';
if (!empty($_POST))
if ($_POST['login'] == $right_login && $_POST['password'] == $right_password && $_POST['email'] == $right_email) {
setcookie('key', 'LY31Hfw7/fuvt5avEeN/7EcenNWcw2TARpA6Vsa/J8yzljz3x0S/ mY9psto8RWUWqJhqp6YnGfI=');
}

if(isset($_COOKIE['key'])){
    setcookie('key', '', time());

}
?> -->
<?php
if(isset($_SESSION['counter'])){
    session_abort();

}
?>