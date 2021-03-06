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

    <h3>
      Табличная HTML верстка сайта
    </h3>
    <div class="neu">
      <p>При таком типе вёрстки элементы сайта располагаются по ячейкам. Создаётся файл-шаблон с разметкой и
        используется как основа для всех остальных страниц. Фактически от файла к файлу меняется только основной
        контент. Шапка сайта, его низ и меню берутся из уже готового шаблона и обычно остаются неизменными.</p>
      <p>Табличная вёрстка проста и во всех браузерах выглядит одинаково. Но состоящие из таблиц страницы много весят,
        медленно загружаются и содержат избыточный код. К тому же структура таблиц позволяет создать только строгий
        дизайн.</p>
    </div>
    <div class="neu">
      <p>Вёрстка этого типа делается просто: в теле документа создаётся таблица (и ничего, кроме неё), в ячейки которой
        добавляется весь контент. Вёрстка потому и называется табличной, что вся страница состоит из таблиц, а вся
        выводимая информация находится внутри их ячеек. Даже область с основным содержимым страницы (например, со
        статьёй) — это всего лишь ячейка, текст из которой отображается на экране.</p>
      <p>HTML-документ не обязательно должен состоять из одной таблицы — их можно вкладывать друг в друга, получая более интересное оформление.
      </p>
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
