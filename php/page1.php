<!-- <?php 
if (!isset($_COOKIE['key'])) { ?> 
<form action="page2.php" method="post">
     Логин:<input type="text" name="login"> <br>
      Пароль:<input type="password" name="password"><br>
       Email<input type="email" name="email"><br> 
       <button type="submit">Войти</button> </form>
<?php } else { ?>
    <form action="page2.php" method="post">
<button type="submit">ВЫХОД</button>
    </form>
<?php } ?> -->
<!-- <?php
 session_start();
 
 if (!isset($_SESSION['counter'])) {
 $_SESSION['counter'] = 0; } 
 else {
 $_SESSION['counter']++; 
 }
 
 echo $_SESSION['counter'];
 if( $_SESSION['counter'] >= 10){
    $_SESSION['counter'] = 0;
 }
?> -->

<form action="page2.php" method="post">
       <button type="submit">Войти</button>
    </form>