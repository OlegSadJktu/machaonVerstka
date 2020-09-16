<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>


  <title>Заголовок </title>

</head>
<body>
<header>
  <div class="container">

    <div class="row">

      <div class="col-md-4 align-items-center">
        <a href="#">
          <img src="img/png/logo.png" class="logo" alt="">
        </a>
      </div>
      <nav class="float-right">
        <div>
          <a href="#">
            виды верстки
          </a>
          <ul class="list-inline">
            <a href="#">
              <li>блоки</li>
            </a>
            <a href="#">
              <li>flexbox grid layout</li>
            </a>
            <a href="#">
              <li>фреймворк bootstrap</li>
            </a>
            <a href="#">
              <li>устаревшие</li>
            </a>
          </ul>
        </div>

        <div>
          <a href="#">
            препроцессор less
          </a>
          <ul class="list-inline">
            <a href="#">
              <li>Введение</li>
            </a>
            <a href="#">
              <li>вложенность</li>
            </a>
            <a href="#">
              <li>переменные</li>
            </a>
          </ul>
        </div>

        <div>
          <a href="#" class="abassa">
            примеры верстки
          </a>
          <ul class="list-inline">
            <a href="#">
              <li>div and float</li>
            </a>
            <a href="#">
              <li>flexbox and grid layout</li>
            </a>
            <a href="#">
              <li>Bootstrap</li>
            </a>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>


<section id="main">
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
        <h4><a href="#">Блочная верстка</a></h4>
        <p>Самая первая, удобная и простая в понимании верстка. Используются тэги div, позиционирование и
          обтекание элементов float.</p>
      </div>
      <div class="col-md-4 wow bounceInUp" data-wow-delay="1s" data-wow-duration="1s">
        <h4><a href="#">Flexbox и Grid Layout</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque cumque veniam atque vitae debitis
          accusamus aliquid tenetur ab sed illo. Quasi at, perferendis optio.</p>
      </div>
      <div class="col-md-4 wow bounceInRight" data-wow-delay="1.5s">
        <h4><a href="#">Bootstrap</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, nobis nemo, cumque
          exercitationem, aperiam voluptas laborum nisi dolorem vero illo error nihil quia sequi!</p>
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

    <h3>Последний раздел - <a href="#">примеры верстки</a> покажет все преимущества технологий.</h3>

    <div class="stickers">
      <div><img class="stickerImg" src="img/stickers/egg.png " alt=""></div>
      <div><img class="stickerImg" src="img/stickers/fox.png" alt=""></div>
      <div><img class="stickerImg" src="img/stickers/homa.png" alt=""></div>
      <div><img class="stickerImg" src="img/stickers/pepper.png" alt=""></div>
    </div>

  </div>
</section>
<footer>
  <p> &copy; Выполнил <a target="_blank" href="https://vk.com/oleggius"><img src="img/vk1.png" alt="">Кривошеин</a>
    <a target="_blank" href="https://www.instagram.com/asdkvueqq/?hl=ru"><img src="img/instagram1.png" alt="">Олег</a></p>
</footer>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

      </div>
      <div class="modal-body">
        <div class="row">

        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/myJS.js"></script>
<!--<script src="js/jquery.nicescroll.min.js"></script>-->
<script>
    new WOW().init();
</script>
</body>
</html>