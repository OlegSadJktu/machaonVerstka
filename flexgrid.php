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
    <h1>Flexbox и Grid layout</h1>
    <p class="neu">
      Долгое время единственными надёжными инструментами CSS верстки были такие способы как Float (обтекание) и позиционирование.
      С их помощью сложно или невозможно достичь следующих простых требований к макету :
    </p>

    <ul class="neu-list">
      <li>Вертикального выравнивания блока внутри родителя.</li>
      <li>Оформления всех детей контейнера так, чтобы они распределили между собой доступную ширину/высоту, независимо от того, сколько ширины/высоты доступно.</li>
      <li>Сделать все колонки в макете одинаковой высоты, даже если наполнение в них различно.</li>
    </ul>

    <p class="neu">
      Как вы увидите в последующих разделах, flexbox значительно облегчает работу с макетами. Погружаемся!
    </p>

    <h3>Внутри flex модели</h3>

    <ul class="neu-list">
      <li>Главная ось (main axis) проходит в том направлении, вдоль которого расположены Flex элементы (например, в
        строку слева направо или вдоль колонок вниз.) Начало и конец этой оси называются main start и main end.
      </li>
      <li>Поперечная ось (сross axis) проходит перпендикулярно Flex элементам. Начало и конец этой оси называются cross
        start and cross end.
      </li>
      <li>Родительский элемент, на который назначено свойство display: flex называется flex container.</li>
      <li>Элементы, размещённые в нём как Flex блоки называются flex items.
      </li>
    </ul>

    <div class="image-content">
      <img src="img/flex_axis.png" alt="">
    </div>
    <p class="neu">
      В Flexbox есть свойство под названием flex-direction, которое определяет направление главной оси (в каком направлении располагаются flexbox дети) — по умолчанию ему присваивается значение row, т.е. располагать дочерние элементы в ряд слева направо (для большинства языков) или справа налево (для арабских языков).
    </p>
    <p class="neu">
      Простой пример:
    </p>


    <div class="text-center">
      <code class="selection" ><span id="direction-js" >flex-direction: row</span></code>
    </div>
    <div id="flex-d">
      <div><span>Блок 1</span></div>
      <div><span>Блок 2</span></div>
      <div><span>Блок 3</span></div>
    </div>

    <p class="neu">
      Как можно заметить, при смене главной оси вместе с ней меняется положение блоков.
    </p>
    <h3>Перенос строк</h3>
    <p class="neu">
      Проблема может быть в том, что, если у вас фиксированная ширина или высота макета, ваши flexbox элементы переполнят контейнер и нарушат макет.
    </p>

    <div class="text-center">
      <span><code>flex-wrap: nowrap</code> (по умолчанию)</span>
    </div>
    <div id="flex-nowrap-example">
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
    </div>

    <p class="neu">
      Мы видим, что дочерние элементы выбиваются из своего родителя-контейнера. Один из способов как это исправить - это добавить свойство flex-wrap: wrap
    </p>

    <div id="flex-wrap-example">
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
      <p class="neu">Какой-нибудь очень-очень длинный текст</p>
    </div>

    <p class="neu">
      Теперь у нас в макете несколько рядов— все дети-блоки, которые не помещаются, переносятся на следующую строку, чтобы не было переполнения. Свойство flex: 200px, установленное на статьях, означает, что каждый блок должен быть минимум 200 пикселей в ширину. Мы обсудим это свойство более подробно позже. Вы также можете заметить, что при масштабировании flex-контейнер старается использовать доступное место по максимуму. Нижние блоки могут растягиваться, все это благодаря гибкости технологии.
    </p>
    <p class="neu">
      Но мы можем пойти дальше. Прежде всего, попробуйте изменить значение свойства flex-direction на row-reverse — теперь у вас также макет в несколько строк, но он начинается из противоположного угла окна браузера и теперь выстраивается в обратном порядке.
    </p>
    <h3>Гибкое изменение размеров flex элементов</h3>

    <div class="neu">

      <p>Теперь давайте вернёмся к нашему первому примеру и посмотрим, как мы можем контролировать, в каких пропорциях flex элементы будут занимать место. Включите свою копию файла flexbox0.html, или скачайте flexbox1.html (просмотр).</p>
      <p>Это безразмерное значение пропорции, которое указывает, сколько свободного пространства на главной оси (main axis) каждый flex элемент сможет занять. В этом случае, мы даём каждому элементу article значение 1, а это значит, что они будут занимать равное количество свободного места в макете, которое осталось после установки свойств padding и margin.</p>
    </div>
    <div class="neu">
      <p>Обновив страницу, вы увидите, что третий элемент article занимает в два раза больше доступной ширины, чем два других — итого теперь доступно 4 единицы пропорции. Первые два flex элемента имеют по одной единице, поэтому берут 1/4 пространства каждый. А у третьего 2 единицы, так что он берёт 2/4 свободного места (или 1/2).</p>
      <p>Ниже предоставлен наглядный интерактивный пример работы проборций flex.
        (Допускаются различные единицы измерения, такие как px,em,% и другие)</p>
    </div>

    <div class="neu">
      <form action="" class="form-flex">

        <div class="text-center">
          <code>
            .div1{ flex: <input type="text" value="1" size="4" id="flex-input1">}
            .div2{ flex: <input type="text" value="1" size="4" id="flex-input2">}
            .div3{ flex: <input type="text" value="1" size="4" id="flex-input3">}
          </code>
        </div>
      </form>

      <div class="flex-3-blocks">
        <div id="flex-grow1">1</div>
        <div id="flex-grow2">2</div>
        <div id="flex-grow3">3</div>
      </div>
      
    </div>
    <h3>Основы grid сетки</h3>
    <p class="neu">CSS Grid Layout представляет двумерную сетку для CSS. Grid (здесь и далее подразумевается CSS Grid
      Layout ) можно использовать для размещения основных областей страницы или небольших элементов пользовательского
      интерфейса. В этой статье описывается компоновка сетки CSS и новая терминология, которая является частью
      спецификации CSS Grid Layout Level 1. Функции, показанные в этом обзоре, будут более подробно описаны в остальной
      части данного руководства.</p>
    <h3>Что такое Grid?</h3>
    <p class="neu">Grid представляет собой пересекающийся набор горизонтальных и вертикальных линий - один набор
      определяет столбцы, а другой строки. Элементы могут быть помещены в сетку, соответственно строкам и столбцам. Grid
      имеет следующие функции:</p>
    <h3>Фиксированные и гибкие размеры полос</h3>
    <p class="neu">Вы можете создать сетку с фиксированными размерами полос — например, используя пиксели. Вы также
      можете создать сетку с гибкими размерами, используя проценты или новую единицу измерения - fr, предназначенную для
      этой цели.</p>
    <h3>Расположение элемента</h3>
    <p class="neu">Вы можете размещать элементы в заданном месте Grid, используя номера строк, имена или путем привязки
      к области Grid. Grid также содержит алгоритм управления размещением элементов, не имеющих явной позиции в
      Grid.</p>
    <h3>Создание дополнительных полос для хранения контента</h3>
    <p class="neu">Вы можете определить явную сетку с макетом сетки, но спецификация также касается контента, добавленного за пределами объявленной сетки, при необходимости добавляя дополнительные строки и столбцы. Включены такие функции, как добавление «столько столбцов, сколько будет помещено в контейнер».</p>

    <h3>Управление выравниванием</h3>
    <p class="neu">В ячейку сетки может быть помещено более одного элемента, или области могут частично перекрывать друг
      друга. Затем это расслоение можно контролировать с помощью z-index.</p>
    <p class="neu">Grid - это мощная спецификация и в сочетании с другими частями CSS, такими как flexbox, может помочь вам создать макеты, которые ранее невозможно было построить в CSS. Все начинается с создания сетки в вашем grid контейнере.</p>

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
