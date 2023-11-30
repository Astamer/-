<html>
<title>Система дистанционного обучения кафедры </title>
<head bodycolor="000011">
<link rel="stylesheet" href="../../../../css/styles.css">
 <body BACKGROUND="../../image/background.PNG">

 <header>
        <nav>
            <ul>
                <li><a href="css1.php"><span>Лекция № 1</span></a></li>
      <li><a href="css2.php"><span>Лекция № 2</span></a></li>
      <li><a href="css3.php"><span>Лекция № 3</span></a></li>
      <li><a href="css4.php"><span>Лекция № 4</span></a></li>
      <li><a href="../../../roles/student/courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: CSS<h1>


<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>


<strong><h2>Лекция № 4</h2> </strong><br><br><hr><br><br>


<p>&nbsp;&nbsp;&nbsp;&nbsp;CSS имеет несколько опций для определения цвета текста и фоновых 
  областей на веб-странице. Эти опции по работе с цветом не только 
  заменяют аналогичные в простом HTML, но и дают массу новых возможностей. 
  Например, традиционный путь для создания цветной области, заключается 
  в применении таблицы. Стили позволяют отказаться от подобного использования 
  таблиц предлагая более простые и удобные варианты управления цветом.</p>
  
<p>В табл. 1 перечислены свойства элементов, предназначенных для задания цвета<br><br>

<table style="width:100%" cellpadding="4" cellspacing="0" border="1">
  <caption><br>
  Табл. 1. Управление цветом фона и текста <br>
  </caption>
  <tr> 
    <th>Свойство</th>

    <th>Значение</th>
    <th>Описание</th>
    <th>Пример</th>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">color</td>
    <td> <p>Цвет</p></td>

    <td>Устанавливает цвет текста</td>
    <td>P { color: #330000 }</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">background-color</td>
    <td>Цвет<br>
      transparent </td>

    <td>Цвет фона</td>
    <td>BODY { background-color: #6699FF }</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">background-image<br> </td>
    <td>URL<br>
      none </td>

    <td>Фоновый рисунок</td>
    <td>BODY { background-image: url (bg.gif) }</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">background-repeat</td>
    <td>repeat<br>
      repeat-x<br>

      repeat-y<br>
      no-repeat </td>
    <td>Повторяемость фонового рисунка</td>
    <td>BODY { background-image: url (bg.gif) background-repeat: repeat-y }</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0"> background-attachment </td>

    <td>scroll<br>
      fixed </td>
    <td>Прокручиваемость фона вместе с документом</td>
    <td>BODY { background-image: url (bg.gif) background-attachment: fixed }</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">background-position</td>

    <td>Проценты<br>
      Пикселы<br>
      top<br>
      center<br>
      bottom<br>
      left<br>

      right </td>
    <td>Начальное положение фонового рисунка</td>
    <td>BODY { background-position: left top }</td>
  </tr>
</table><br><br>
<h4>Установка цвета</h4><br><br>
<p>Цвет, используя CSS, можно задавать тремя способами.</p>
<h5>1. По его названию</h5>

<p><b> </b>Браузеры поддерживают некоторые цвета по их названию (пример&nbsp;1). 
</p>
<em><font color="#B38D48">Пример 1. Установка цвета элемента по его названию</em></font><br>
  <table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

  &lt;html&gt;<br>
  &lt;head&gt;<br>
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
  &lt;title&gt;Цвет&lt;/title&gt;<br>

  &lt;style type=&quot;text/css&quot;&gt;<br>
  P { <br>
  &nbsp;color: navy; <span class="comment">/* Цвет текста */</span> <br>
  &nbsp;background-color: yellow; <span class="comment">/* Цвет фона */ </span><br>
  } <br>

  &lt;/style&gt;<br>
  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>
  &lt;/body&gt;<br>

&lt;/html&gt;</td>
</tr>
</table><br><br>
<h5>2. По шестнадцатеричному значению</h5><br><br>
<p><b> </b>Цвет можно устанавливать по его шестнадцатеричному значению, как и 
  в обычном HTML (пример&nbsp;2).</p><br><br>
<em><font color="#B38D48">Пример 2. Установка цвета элемента по шестнадцатеричному 
  значению </em></font><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Цвет&lt;/title&gt;<br>
  &lt;style type=&quot;text/css&quot;&gt;<br>

  H1 { color: #fc0; }<br>
  P { <br>
&nbsp;  color: #F9E71A; <br>
&nbsp; background-color: #98560F;<br> 
} <br>
  &lt;/style&gt;<br>

  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &lt;h1&gt;Lorem ipsum&lt;/h1&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>
  &lt;/body&gt;<br>

&lt;/html&gt;</td>
</tr>
</table><br><br>
<p>Также допустимо использовать сокращенную запись, вроде #fc0. Она означает, 
  что каждый символ дублируется, в итоге получим #ffcc00. <br><br>
<h5>3. С помощью RGB</h5><br><br>
<p><b> </b>Можно определить цвет используя значения красной, зеленой и синей составляющей 
  в десятичном исчислении. Значение каждого из трех цветов может принимать значения 
  от 0 до 255. Также можно задавать цвет в процентном отношении (пример&nbsp;3).</p>
<p class="exampleTitle">Пример 3. Установка цвета элемента по шестнадцатеричному значению </em></font><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">

  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>
&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Цвет&lt;/title&gt;<br>

  &lt;style type=&quot;text/css&quot;&gt;<br>
  P { <br>
  &nbsp;color: RGB(249, 231, 16); <br>
  &nbsp;background-color: RGB(85%, 24%, 5%);<br> 
  } <br>
  &lt;/style&gt;<br>

  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>
  &lt;/body&gt;<br>
&lt;/html&gt;</td>
</tr>
</table><br><br>
<h4>Установка цвета фона и фонового рисунка</h4><br><br>

<p>Цвет фона определяется значением параметра <span class="element">background-color</span>, 
  а изображение, которое используется в качестве фона, задается параметром <span class="element">background-image</span>. 
  Значением по умолчанию для цвета фона является <span class="element">transparent</span>, 
  который устанавливает прозрачный фон. Для установки фонового рисунка используется 
  абсолютный или относительный адрес к файлу. Рекомендуется задавать одновременно 
  фоновый рисунок и цвет фона, который будет использоваться в случае недоступности 
  файла изображения.</p><br><br>
<em><font color="#B38D48">Пример 4. Цвет фона и фоновое изображение</em></font><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Цвет фона&lt;/title&gt;<br>
  &lt;style type=&quot;text/css&quot;&gt;<br>

  BODY { <br>
  &nbsp;background-color: #98560F; <span class="comment">/* Цвет фона */</span><br>
  <span class="select">&nbsp;background-image: url('/images/bg.gif')</span>; <span class="comment">/* 
  Путь к фоновому рисунку */</span><br>
  }<br>
  &lt;/style&gt;<br>

  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>
  &lt;/body&gt;<br>
&lt;/html&gt;</td>
</tr>
</table><br><br>
<p>Если задано фоновое изображение, то свойство <span class="element">background-repeat</span> 
  определяет его повторяемость и способ, как это делать. Допустимыми значениями 
  являются <span class="element">repeat</span> (повторяемость по вертикали и горизонтали), 
  <span class="element">repeat-x</span> (по горизонтали), <span class="element">repeat-y</span> 
  (по вертикали) и <span class="element">no-repeat</span> (только один рисунок, 
  без повторения), как показано в примере&nbsp;5.</p>

<em><font color="#B38D48">Пример 5. Повторяемость фонового рисунка
</em></font><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>
&lt;html&gt;<br>
&lt;head&gt;<br>

&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Фон&lt;/title&gt;<br>
  &lt;style type=&quot;text/css&quot;&gt;<br>
  BODY { <br>

  background-image: url('/images/bg.gif'); <span class="comment">/* Путь к фоновому 
  рисунку */</span><br>
  <span class="select">background-repeat: repeat-y</span>;<span class="comment">/* 
  Повторение фона по вертикали */</span><br>
  }<br>
  &lt;/style&gt;<br>
  &lt;/head&gt;<br>

  &lt;body&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>
  &lt;/body&gt;<br>
&lt;/html&gt;</td>
</tr>
</table><br><br>
<p>В данном примере фоновый рисунок повторяется по вертикали. </p>
<p>Положение фона определяется параметром <span class="element">background-position</span>. 
  У него два значения, положение по горизонтали (может быть &#8212; <span class="element">right</span>, 
  <span class="element">left</span>, <span class="element">center</span>) и вертикали 
  (может быть &#8212; <span class="element">top</span>, <span class="element">bottom</span>, 
  <span class="element">center</span>). Положение можно, также, задавать в процентах, 
  пикселах или других абсолютных единицах (пример&nbsp;6).<br><br>

<em><font color="#B38D48">Пример 6. Положение фона
</em></font><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>
&lt;html&gt;<br>
&lt;head&gt;<br>

&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Фон&lt;/title&gt;<br>
  &lt;style type=&quot;text/css&quot;&gt;<br>
  BODY { <br>

  background-attachment: fixed; <span class="comment">/* Фиксируем фон */</span><br>
  background-image: url('mybg.gif'); <span class="comment">/* Путь к фоновому 
  рисунку */</span><br>
  background-repeat: no-repeat; <span class="comment">/* Отменяем повторение фона 
  */</span><br>
  <span class="select">background-position: right bottom</span>; <span class="comment">/* 
  Положение фона */</span><br>

  }<br>
  &lt;/style&gt;<br>
  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &lt;p&gt;Lorem ipsum dolor sit amet...&lt;/p&gt;<br>

  &lt;/body&gt;<br>
&lt;/html&gt;</td>
</tr>
</table><br><br>
<p>В данном примере фон будет помещен в правый нижний угол страницы. Если нужно 
  определить рисунок в левом верхнем углу, то надо задать следующий вид: <span class="element">background-position: 
  left top</span>.</p>
<p>Параметр <span class="element">background-attachment: fixed</span> фиксирует 
фон, чтобы он оставался неподвижным при прокрутке содержимого окна браузера.</p>



<br><br><hr><br><br><center>

</td>
</tr>
</table>
	                  
        </body>     
  
</html>
