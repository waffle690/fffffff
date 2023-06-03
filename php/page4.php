<!-- <?php
  session_start();
  if(!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
  }
  array_push($_SESSION['history'], "Страница");
?>

    <h1>Страница 4</h1>
    <p>Добро пожаловать на страницу 4!</p>
<a href="page3.php">Переход на 3 страницy</a>
<a href="page2.php">Переход на 2 страницу</a>
<a href="page1.php">Переход на 1 страницу</a>
    <h2>Посещенные страницы:</h2>

      <?php
        foreach($_SESSION['history'] as $page) {
          echo "<li>$page</li>";
        }
      ?> -->


<!-- <?php
if (isset($_COOKIE['myCookie'])) {
    setcookie("myCookie", "", time() - 5);
    echo "удален";
} else {
    echo "не найден";
}
?> -->

