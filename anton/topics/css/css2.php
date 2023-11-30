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
<strong><h2>Лекция № 2</h2> </strong><br><br><hr><br><br>


<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;

<p>Таблицы стилей могут быть добавлены на веб-страницу тремя разными способами, 
  которые различаются по своим возможностям. </p><br>
  
<h4>Таблицы связанных стилей</h4><br>
  
<p>Самый мощный и удобный способ определения стилей и правил для сайта. Стили 
  хранятся в отдельном файле, который может быть использован для любых веб-страниц. 
  Для подключения таблицы связанных стилей используется тег &lt;LINK&gt; 
  в заголовке страницы (пример&nbsp;1). <br><br>
 <em><font color="#B38D48">Пример 1. Подключение таблицы связанных стилей </font></em><br><br>
<table align="left" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">

&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

  &lt;html&gt;<br>
  &lt;head&gt;<br>
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
  &lt;title&gt;Стили&lt;/title&gt;<br>

  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mysite.css&quot;&gt;<br>
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://www.mysite.ru/main.css&quot;&gt;<br>

            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            &lt;h1&gt;Hello, world!&lt;/h1&gt;<br>
            &lt;/body&gt;<br>
&lt;/html&gt;
</td>
</tr>
</table><br>

<br><br>
<h4>Таблицы глобальных стилей</h4><br>
<p>Стиль определяется в самом документе и обычно располагается в заголовке веб-страницы. 
  По своей гибкости и возможностям этот способ использования стиля уступает предыдущему, 
  но также позволяет размещать все стили в одном месте. В данном случае, прямо 
  в теле документа. Определение стиля задается тегом &lt;STYLE&gt;
  (пример&nbsp;2). </p><br><br>
<em><font color="#B38D48">Пример 2. Использование таблицы глобальных стилей</font></em><br><br>

<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">

  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Стили&lt;/title&gt;<br>
&lt;style type=&quot;text/css&quot;&gt;<br>

  H1 { <br>
  &nbsp;font-size: 120%; <span class="comment">/* Размер шрифта */</span><br>
  &nbsp;font-family: Verdana, Arial, Helvetica, sans-serif; <span class="comment">/* 
  Семейство шрифта */</span><br>
  &nbsp;color: #336; <span class="comment">/* Цвет текста */</span><br>
  }<br>

              &lt;/style&gt;<br>
              &lt;/head&gt;<br><br>
&lt;body&gt;<br>
&lt;H1&gt;Hello, world!&lt;/H1&gt;<br>
&lt;/body&gt;<br>
&lt;/html&gt;

</td>
</tr>
</table><br>
  
<p>В данном примере показано изменение стиля заголовка &lt;H1&gt;. 
  На веб-странице теперь достаточно указать только этот тег и стили будут добавлены 
  к нему автоматически. <br><br>
<h4>Внутренние стили</h4><br>
<p>Внутренний стиль являются по существу расширением для одиночного тега используемого 
  на веб-странице. Для определения стиля используется параметр style, 
  а его атрибуты указываются с помощью языка таблицы стилей (пример&nbsp;3).. <br><br>

<em><font color="#B38D48">Пример 3. Использование внутренних стилей</font></em><br><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">

  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>

&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>
&lt;title&gt;Стили&lt;/title&gt;<br>
&lt;/head&gt;<br>
            &lt;body&gt;<br>

  &lt;H1 style=&quot;font-size: 120%; font-family: Verdana, Arial, Helvetica, 
  sans-serif; color: #336&quot;&gt;Hello, world!&lt;/H1&gt;<br>
            &lt;/body&gt;<br>
&lt;/html&gt;</div>
</td>
</tr>
</table><br>
<p>Рекомендуется использовать внутренний стиль для одиночных тегов 
  или отказаться от его использования вообще, поскольку изменение 
  ряда элементов становится проблематичным. Внутренние стили не соответствуют 
  идеологии структурного документа, когда содержимое и его оформление 
  разделены. 
<p>Все описанные методы использования CSS могут применяться как самостоятельно, 
  так и в сочетании друг с другом. В этом случае необходимо помнить об их иерархии. 
  Первым всегда применяется внутренний стиль, затем таблица глобальных стилей 
  и в последнюю очередь таблица связанных стилей. В примере&nbsp;4 используются 
  сразу два метода добавления таблиц стилей в документ.</p><br>
<em><font color="#B38D48">Пример 4. Сочетание разных методов подключения стилей</font></em><br><br>
<table align="center" cellspacing="2" cellpadding="2" border="1">
<tr>
	<td align="left">
  &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;<br>
&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=windows-1251&quot;&gt;<br>

&lt;title&gt;Стили&lt;/title&gt;<br>
&lt;style type=&quot;text/css&quot;&gt;<br>
              &nbsp;H1 { font-size: 120%; font-family: Arial, Helvetica, 
              sans-serif; color: green; }<br>
              &lt;/style&gt;<br>
              &lt;/head&gt;<br><br>
&lt;body&gt;<br>

              &lt;H1 style=&quot;font-size: 36px; font-family: Times, 
              serif; color: red;&quot;&gt;Hello, world!&lt;/H1&gt;<br>
              &lt;H1&gt;Hello, world!&lt;/H1&gt;<br>
              &lt;/body&gt;<br>
              &lt;/html&gt;
</td>
</tr>
</table><br>
<p>В приведенном примере первый заголовок задается красным цветом размером 36 
  пикселов, а следующий &#8212; зеленым цветом и другим шрифтом. </p>




<br><br><hr><br><br><center>

</td>
</tr>
</table>
	                  
        </body>     
  
</html>
