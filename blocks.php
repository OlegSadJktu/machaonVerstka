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

    <h1>Блоки</h1>

    <h3>Блочная верстка: начало</h3>
    <p class="neu">
      Строительный материал сайта - блоки <code>div</code>. Они нужны для разделения контента на части, после чего каждый из блоков можно будет отредактировать с помощью стилей. Внутри них будет распологаться контент: текст, картинки, ссылки, в общем, все, что захотите. Это будет выглядеть следующим образом:
    </p>

    <p class="neu">
      Теперь нам осталось правильно эти блоки распложить. То есть, мы сейчас будем занимать версткой сайта. У нас для этого есть множество инструментов, начиная от табличных, заканчивая версткой с помощью Bootstrap.
    </p>
    <p class="neu">
      Появляется вопрос: как нам этими блоками управлять? Есть решение "в лоб" - просто двигать при помощи
      <code>position</code>. Далле использовать свойста <code>top</code>,<code>right</code>,<code>bottom</code>,<code>left</code>, указывая, сколько нужно отступить блоку.
    </p>

    <h3><span class="details" onclick="moreDetails('positionTable')">Таблица <code>position</code></span></h3>
    <div id="positionTable" data-columns="1fr 7fr" class="hiddenBlock grid-tables" >
      <div class="neu">
        <p>static</p>
      </div>
      <div class="neu">
        <p>Блок располагается в соответствии с нормальным потоком. Свойства top, right, bottom и left не применяются. Значение по умолчанию.
        </p>
      </div>
      <div class="neu">
        <p>relative</p>
      </div>
      <div class="neu">
        <p>Положение блока рассчитывается в соответствии с нормальным потоком. Затем блок смещается относительно его нормального положения и во всех случаях, включая элементы таблицы, не влияет на положение любых следующих блоков. Тем не менее, такое смещение может привести к перекрытию блоков, а также к появлению полосы прокрутки в случае переполнения.</p>
        <p>Относительно позиционированный блок сохраняет свои размеры, включая разрывы строк и пространство, первоначально зарезервированное для него.</p>
        <p>Относительно позиционированный блок создает новый содержащий блок для абсолютно позиционированных потомков.</p>
        <p>Влияние position: relative; на элементы таблицы определяется следующим образом:</p>
        <p>Элементы с table-row-group, table-header-group, table-footer-group иd table-row смещаются относительно их обычной позиции в таблице. Если ячейки таблицы занимают несколько строк, смещаются только ячейки начальной строки.</p>
        <p>table-column-group, table-column не смещает соответствующий столбец и не оказывает визуального влияния.</p>
        <p>table-caption and table-cell смещаются относительно своего нормального положения в таблице. Если ячейка таблицы охватывает несколько столбцов или строк, то она смещается целиком.</p>
      </div>
      <div class="neu">
        <p>absolute</p>
      </div>
      <div class="neu">
        <p>
          Положение блока (и, возможно, размер) задается с помощью свойств top, right, bottom и left. Эти свойства определяют явное смещение относительно его содержащего блока. Абсолютно позиционированные блоки полностью удаляется из нормального потока, не влияя на расположение сестринских элементов.
        </p>
        <p>Отступы margin абсолютно позиционированных блоков не схлопываются.</p>
        <p>Абсолютно позиционированный блок создает новый содержащий блок для дочерних элементов нормального потока и потомков с position: absolute;.</p>
        <p>Содержимое абсолютно позиционированного элемента не может обтекать другие блоки. Абсолютно позиционированный блок могут скрывать содержимое другого блока (или сами могут быть скрыты), в зависимости от значения z-index перекрывающихся блоков.</p>
      </div>
      <div class="neu">
        <p>sticky</p>
      </div>
      <div class="neu">
        <p>Положение блока рассчитывается в соответствии с нормальным потоком. Затем блок смещается относительно своего ближайшего предка с прокруткой или окна просмотра, если ни у одного из предков нет прокрутки.</p>
        <p>«Липкий» блок может перекрывать другие блоки, а также создавать полосы прокрутки в случае переполнения.</p>
        <p>«Липкий» блок сохраняет свои размеры, включая разрывы строк и пространство, первоначально зарезервированное для него.</p>
        <p>«Липкий» блок создает новый содержащий блок для абсолютно и относительно позиционированных потомков.</p>
      </div>
      <div class="neu">
        <p>fixed</p>
      </div>
      <div class="neu">
        <p>Фиксированное позиционирование аналогично абсолютному позиционированию, с отличием в том, что для содержащим блоком устанавливается окно просмотра. Такой блок полностью удаляется из потока документа и не имеет позиции относительно какой-либо части документа. Фиксированные блоки не перемещаются при прокрутке документа. В этом отношении они похожи на фиксированные фоновые изображения.</p>
        <p>При печати фиксированные блоки повторяются на каждой странице, содержащим блоком для них устанавливается область страницы. Блоки с фиксированным положением, которые больше области страницы, обрезаются.</p>
      </div>
      <div class="neu">
        <p>initial</p>
      </div>
      <div class="neu">
        <p>Устанавливает значение свойства в значение по умолчанию.
        </p>
      </div>
      <div class="neu">
        <p>inherit</p>
      </div>
      <div class="neu">
        <p>Наследует значение свойства от родительского элемента.
        </p>
      </div>
    </div>

    <p class="neu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid asperiores assumenda
      consequatur delectus, dicta eaque ex ipsum mollitia nemo, nesciunt possimus provident quas quibusdam quos
      recusandae repudiandae sapiente tempora vero voluptatum!</p>
    <p class="neu">Dolorem fugiat itaque laborum nostrum quae quasi quos repellat veritatis voluptatem voluptates?
      Aliquid asperiores at beatae modi possimus quibusdam, sapiente veniam veritatis voluptatem. Ex explicabo iste nam
      nisi, quas quasi sapiente similique?</p>
    <p class="neu">Ad blanditiis dolorem error excepturi vel! A animi corporis dignissimos dolore ea enim est, ex
      excepturi explicabo hic incidunt labore mollitia odio officiis perspiciatis quam quasi quis similique tenetur
      totam vel voluptatibus?</p>



    <h3 class="details" onclick="moreDetails('examplePosition')">Пример позиционирования</h3>

    <div id="examplePosition" class="hiddenBlock">


      <div id="settings" class="neu">

        <div class="working-inderline">
          <span class=" span-choose" onclick="positionSubstitute(1)">position: <span id="position-insert1">static</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(2)">position: <span id="position-insert2">relative</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(3)">position: <span id="position-insert3">absolute</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(4)">position: <span id="position-insert4">sticky</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(5)">position: <span id="position-insert5">fixed</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(6)">position: <span id="position-insert6">initial</span>;</span> <br>
          <span class=" span-choose" onclick="positionSubstitute(7)">position: <span id="position-insert7">inherit</span>;</span> <br>
        </div>
        <div class="working-inderline">
          <span class=" span-choose" onclick="topSubstitute(1)">top: <span id="top-insert1">10px</span>;</span><br>
          <span class=" span-choose" onclick="topSubstitute(2)">top: <span id="top-insert2">2em</span>;</span><br>
          <span class=" span-choose" onclick="topSubstitute(3)">top: <span id="top-insert3">50%</span>;</span><br>
          <span class=" span-choose" onclick="topSubstitute(4)">top: <span id="top-insert4">auto</span>;</span><br>
          <span class=" span-choose" onclick="topSubstitute(5)">top: <span id="top-insert5">inherit</span>;</span><br>
          <span class=" span-choose" onclick="topSubstitute(6)">top: <span id="top-insert6">initial</span>;</span><br>
        </div>
      </div>

      <p class="neu">
        Вы можете подставить любое значение, либо воспользоваться примерами выше, нажав на них. Имейте ввиду, что блок может выходит за пределы поля, несмотря на свойство overflow: hidden
      </p>

      <form action="" id="position-form" class="non-select">
        <code>#block1{position: <input type="text" id="position1" size="8" value="relative"> ; <span id="top-bottom" class="span-choose">top</span>: <input type="text" id="top1" size="4" value="10px"> ; <span id="left-right" class="span-choose">left</span>: <input type="text" id="left1" size="4" value="10px"> ;} </code>
      </form>

      <div class="working-field">
        <div id="block-field1" style="position: relative; top: 10px; left: 10px;" > </div>
      </div>
    </div>

    <div class="neu">
    <p>Верхнее меню этого сайта имеет позиционирование sticky, что позволяет быть поверх других элементов, но оставаться в контейнере и быть видимым для остальных.</p>
    <p>Стоит учитывать, что при масштабировании страницы поведение позиционированных элементов непредсказуемо. Макет очень легко разваливается, если его состовляющие были собраны с помощью top, left и тд.</p>
    <p>При верстке сайта блоками важно знать очень важное для этого css свойство float.</p>
    <p>Определяет, по какой стороне будет выравниваться элемент, при этом остальные элементы будут обтекать его с других сторон. Когда значение свойства float равно none, элемент выводится на странице как обычно, при этом допускается, что одна строка обтекающего текста может быть на той же линии, что и сам элемент. Стоит уточнить, что поведение этого свойства бывает тоже сложно предсказать, именно поэтому я рекомендую изучить технологию Flexbox и пользоваться ею.</p>
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
