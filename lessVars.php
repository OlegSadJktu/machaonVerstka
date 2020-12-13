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
    <h3>Переменные</h3>
    <p class="neu">Если появилась нужда сохранить в памяти компилятора какое-либо значение, можно воспользоваться переменными less</p>
    <p class="neu"><code>
        @var-color: #ffff00; <br>
        @var-string-0: header; <br>
        @var-string-1: 0 auto; <br>
        @var-number: 4768; <br>
        @var-value: 14px; <br>
        @var-rule: { <br>
        color: red; <br>
        }; <br>
        @var-url-0: "../images/nichosi-meme.png"; <br>
        @var-url-1: url("../images/nichosi-meme.png"); <br>
      </code></p>



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
