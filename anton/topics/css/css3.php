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

<strong><h2>Лекция № 3</h2> </strong><br><br><hr><br><br>


<p>С помощью CSS можно определять стиль и вид текста. Аналогично тому, что используется 
    тег <span class="tag">&lt;FONT&gt;</span>, задающий свойства шрифта, но стили обладают 
    большими возможностями и позволяют сократить код HTML.</p><br><br>
  <h4>Свойства шрифта</h4><br>
  
<p>Изменение начертания шрифта и его размера происходит через свойства CSS, которые 
  описаны в табл.&nbsp;1.</p><br><br>
  
<table style="width:90%" cellpadding="4" cellspacing="0" border="1">
  <caption>
  Табл. 1. Атрибуты CSS для управления шрифтами 
  </caption>

  <tr> 
    <th>Свойство</th>
    <th>Значение</th>
    <th>Описание</th>
    <th>Пример</th>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">font-family</td>

    <td>имя шрифта</td>
    <td nowrap>Задает список шрифтов</td>
    <td>P {font-family: Arial, serif}</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">font-style</td>
    <td nowrap>normal<br>

      italic<br>
      oblique </td>
    <td nowrap>Нормальный шрифт<br>
      Курсив<br>
      Наклонный шрифт</td>
    <td>P {font-style: italic}</td>

  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">font-variant</td>
    <td nowrap>normal<br>
      small-caps </td>
    <td nowrap>Капитель<br>
      (особые прописные буквы)</td>

    <td>P {font-variant: small-caps}</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">font-weight</td>
    <td nowrap valign="top">normal<br>
      lighter<br>
      bold<br>

      bolder<br>
      100-900 </td>
    <td nowrap valign="top">Нормальная жирность<br>
      Светлое начертание<br>
      Полужирный<br>
      Жирный<br>

      100-светлый шрифт,<br>
      900-самый жирный<br> </td>
    <td>P {font-weight: bold}</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">font-size</td>
    <td nowrap> normal<br>

      pt<br>
      px<br>
      %</td>
    <td nowrap> нормальный размер<br>
      пункты<br>
      пикселы <br>

      проценты <br> </td>
    <td> font-size: normal<br>
      font-size: 12pt<br>
      font-size: 12px<br>
      font-size: 120%</td>

  </tr>
</table><br><br>
<p>В примере 1 показано использование параметров при работе со шрифтами.<br><br>
<em><font color="#B38D48">Пример 1. Задание свойств шрифта с помощью CSS </em></font><br><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">

  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

  &lt;html&gt;<br>
  &lt;head&gt;<br>
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
  &lt;title&gt;Шрифт&lt;/title&gt;<br>

  &lt;style type=&quot;text/css&quot;&gt; <br>
  H1 { <br>
  &nbsp;font-family: Arial, Helvetica, Verdana, sans-serif; <span class="comment">/* Гарнитура шрифта */</span> <br>
  &nbsp;font-size: 150%; <span class="comment">/* Размер текста */ </span><br>

  &nbsp;font-weight: 
  lighter; <span class="comment">/* Светлое начертание */</span> <br>
  }<br>
    &lt;/style&gt;<br>
    &lt;/head&gt;<br>
&lt;body&gt;<br>
    &lt;H1&gt;Заголовок&lt;/H1&gt;<br>

  &lt;p&gt;Обычный текст&lt;/p&gt;<br>
    &lt;/body&gt; <br>
&lt;/html&gt;
</td>
</tr>
</table><br>
<br>
<p>В табл. 2 приведены некоторые стилевые параметры для работы с текстом и результат 
  их применения. <br><br>
<table style="width:100%" cellpadding="4" cellspacing="0" border="1">
<caption>
  Табл. 2. Результат использования различных параметров шрифтов 
  </caption>
  <tr bgcolor="#f6f6f0"> 
    <td style="font-family: Verdana, sans-serif; font-size: 120%; font-weight: light">Пример</td>
    <td style="font-size: large; font-weight: bold">Пример</td>
    <td style="font-family: Arial, sans-serif; font-size: x-small; font-weight: bold">Пример</td>
    <td style="font-variant: small-caps">Пример</td>

    <td style="font-style: italic; font-weight: bold">Пример</td>
  </tr>
  <tr valign="top"> 
    <td>font-family: Verdana, sans-serif; font-size: 120%; font-weight: 
      light</td>
    <td> font-size: large; font-weight: bold</td>
    <td>font-family: Arial, sans-serif; font-size: x-small; font-weight: 
      bold</td>
    <td>font-variant: small-caps </td>

    <td>font-style: italic; font-weight: bold</td>
  </tr>
</table><br><br>
<h4>Свойства текста</h4>
  <br><br>
<p>Кроме изменения параметров шрифтов, можно управлять и свойствами всего текста. 
  Значения свойств приведены в табл. 3.</p><br>
<table style="width:90%" cellpadding="4" cellspacing="0" border="1">
  <caption>
  Табл. 3. Свойства CSS для управления видом текста 
  </caption>

  <tr> 
    <th>Свойство</th>
    <th>Значение</th>
    <th>Описание</th>
    <th>Пример</th>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">line-height</td>

    <td nowrap>normal<br>
      множитель<br>
      точно<br>
      %</td>
    <td>Интерлиньяж (межстрочный интервал)</td>
    <td nowrap>line-height: normal<br>

      line-height: 1.5<br>
      line-height: 12px<br>
      line-height: 120%</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">text-decoration<br> </td>
    <td nowrap>none<br>

      underline<br>
      overline<br>
      line-through<br>
      blink</td>
    <td nowrap>Убрать все оформление<br>
      Подчеркивание<br>

      Линия над текстом<br>
      Перечеркивание<br>
      Мигание текста</td>
    <td>text-decoration: none</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">text-transform<br> </td>

    <td nowrap>none<br>
      capitalize<br>
      uppercase<br>
      lowercase<br> </td>
    <td nowrap>Убрать все эффекты<br>
      Начинать С Прописных<br>

      ВСЕ ПРОПИСНЫЕ<br>
      все строчные</td>
    <td>text-transform: capitalize</td>
  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">text-align</td>
    <td nowrap valign="top">left<br>

      right<br>
      center<br>
      justify</td>
    <td nowrap>Выравнивание текста</td>
    <td>text-align: justify<br>
      выравнивание по ширине</td>

  </tr>
  <tr> 
    <td bgcolor="#f6f6f0">text-indent</td>
    <td nowrap>точно<br>
      % </td>
    <td nowrap>Отступ первой строки</td>
    <td>text-indent:15px;<br>

      text-indent:10%</td>
  </tr>
</table><br><br>
<p>Ниже, в табл. 4 приведены некоторые параметры текста и результат их применения. 
</p><br><br>
  <table width="100%" cellpadding="4" cellspacing="0" border="1">
    <caption>
  Табл. 4. Результат использования различных параметров текста 
  </caption> 
  <tr bgcolor="#f6f6f0"> 
    <td style="text-transform: capitalize">Пример: и это все о нем</td>

    <td style="text-align:center">Пример: текст по центру</td>
    <td style="text-decoration: underline">Пример: Это не ссылка, 
      а просто текст</td>
    <td style="text-indent: 20px">Пример: отступ первой строки</td>
    <td style="line-height: 1.5">Пример: полуторный межстрочный интервал</td>
  </tr>
  <tr valign="top"> 
    <td>text-transform: capitalize</td>

    <td> text-align:center</td>
    <td>text-decoration: underline</td>
    <td>text-indent: 20px</td>
    <td>line-height: 1.5</td>
  </tr>
</table>



<br><br><hr><br><br><center>

</td>
</tr>
</table>
	                  
        </body>     
  
</html>
