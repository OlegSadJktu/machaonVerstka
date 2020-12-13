<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="shortcut icon" type="image/ico" href="favicon.ico">


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>


  <title>Главная </title>

</head>

<body>

<?php
require 'templates/header.php'
?>

<section id="mainIndex">
  <div class="container">


    <div class="row">
      <div class="col-md-6 wow bounceInLeft">
        <div>

          <h3>Добро пожаловать!</h3>
          <p>
            Вы попали на сайт, посвященный верстке макетов. Это создание и конструирование сайтов. Здесь я
            постарался собрать весь интересный материал для изучения верстки и изложить его, используя
            примеры.
          </p>
        </div>
      </div>
      <div class="col-md-6 wow bounceInRight animated">
        <div>
          <h3>Для чего нужно знать верстку?</h3>
          <p>
            Будь то верстка на Bootstrap или макеты Wix или WordPress, любой макет будет представлять из
            себя древо документа, включающий в себя тэги html. Так или иначе основы знать надо, если вы
            хотите грамотно верстать макеты.
          </p>

        </div>
      </div>
    </div>

    <h3>Мною были рассмотрены следующие 3 технологии:</h3>
    <div class="row technology">
      <div class="col-md-4 wow bounceInLeft" data-wow-delay="0.5s">
        <h4><a href="blocks.php">Блочная верстка</a></h4>
        <p>Самая первая, удобная и простая в понимании верстка. Используются тэги div, позиционирование и
          обтекание элементов float.</p>
      </div>
      <div class="col-md-4 wow bounceInUp" data-wow-delay="1s" data-wow-duration="1s">
        <h4><a href="flexGrid.php">Flexbox и Grid Layout</a></h4>
        <p>
          Возможность гибко взаимодействовать с контентом и распределять его
          по принципу сетки. Проста в понимании и удобна в использовании.
        </p>
      </div>
      <div class="col-md-4 wow bounceInRight" data-wow-delay="1.5s">
        <h4><a href="bootstrap.php">Bootstrap</a></h4>
        <p>
          Очень популярный фреймворк, позволяющий быстро сверстать макет,
          используя наборы классов. Написан при помощи flexbox и grid layout.
        </p>
      </div>
    </div>

    <h3>А также вы можете прочитать о препроцессорe <a href="#">less</a></h3>
    <div class="row less">
      <div class="col-md-4 align-items-center">
        <div>
          <p>
            Универсальный инструмент для написания читаемого и удобного кода!
          </p>
        </div>
      </div>
      <div class="col-md-8">
        <img src="img/less.jpg" class="wow rollInLeft" data-wow-offset="200" alt="">
        <img src="img/css.jpg" class="wow rollInRight" data-wow-delay="1s" data-wow-offset="200" alt="">
      </div>
    </div>

    <h3>Последний раздел - <a href="conclusions.php">примеры верстки</a> покажет все преимущества технологий.</h3>

    <div class="image-content">


    </div>

<!--    <div class="stickers">-->
<!--      <img src="img/stickers/egg.png " alt="">-->
<!--      <img src="img/stickers/fox.png" alt="">-->
<!--      <img src="img/stickers/homa.png" alt="">-->
<!--      <img src="img/stickers/pepper.png" alt="">-->
<!--    </div>-->

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