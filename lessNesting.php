<!DOCTYPE html>
<html lang="ru">

<?php
$_GET["title"] = 'Блоки';
require 'templates/head.php';
?>

<body>

<?php
require 'templates/header.php'
?>


<section class="main">
	<div class="container">
    <h3>Вложенность</h3>
    <div class="neu">
      <p>
        Крайне удобное и полезное свойство препроцессоров css занимает первое место по важности.
      </p>
      <p >
        Благодаря функционалу препроцессоров появилась возможность компилировать в css из более понятного человеку кода
      </p>
    </div>

    <div class="text-center">
      <img src="img/less-css.png" alt="">
    </div>

	</div>
</section>

<?php
require "templates/footer.php"
?>


<?php
require 'templates/scripts.php'
?>

</body>
</html>
