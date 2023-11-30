﻿<html>
<title>Система дистанционного обучения кафедры </title>
<head bodycolor="000011">
<link rel="stylesheet" href="../../../../css/styles.css">
        <body BACKGROUND="../../image/background.PNG">
<header>
        <nav>
            <ul>
                <li><a href="ht1.php"><span>Лекция № 1</span></a></li>
      <li><a href="ht2.php"><span>Лекция № 2</span></a></li>
      <li><a href="ht3.php"><span>Лекция № 3</span></a></li>
      <li><a href="ht4.php"><span>Лекция № 4</span></a></li>
      <li><a href="../../courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>

<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: HTML<h1>

<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<strong><h2>Лекция № 3</h2> </strong><br><br><hr><br><br>
<textarea rows="60" cols="80">
<center><br>
<p><a class="a1" href="#1">Создание заголовков</a></p><br>
<p><a class="a1" href="#2">Добавление комментариев в HTML-код</a></p><br>
<p><a class="a1" href="#3">Специальные символы</a><br>
<br></center>
<a name="1"></a><h5>Создание заголовков</h5><br>

<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заголовки - отличный инструмент структурной организации содержимого Вэб-страницы. Стандарт HTML предусматривает возможность использования заголовков шести уровней. Заголовки 1 уровня обозначаются тэгом <font color="#008000">&lt;Н1></font> и отображаются самым крупным шрифтом, а уровня 6 (<font color="#008000">&lt;Н6></font>) - самым мелким. Заголовки с крупным шрифтом (1, 2, 3) обычно используют в качестве выделения разделов документа, а тэги <font color="#008000">&lt;Н5></font>, <font color="#008000">&lt;Н6></font> часто применяют для выделения фрагментов текста, содержащих сведения об авторских правах и другую служебную информацию. Шрифт заголовков, форматируемых с помощью тэга <font color="#008000">&lt;Н4></font>, как правило, не отличается по размеру от шрифта, которым набран основной текст страницы.
Грамотное использование заголовков значительно улучшает читабельность страницы, но надо заметить, что не следует использовать на одной странице заголовки более трех различных уровней вложенности.<br><center><br><br>
<p><font color="#FF00FF">Пример:</font></p>
<table border="1" bordercolor="#0000ff">

<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>
<p><div align="left" style="font-size:8pt">&lt;h1>Заголовок 1 уровня&lt;/h1></div></p>
<p><div align="left" style="font-size:8pt">&lt;h2>Заголовок 2 уровня&lt;/h2></div></p>
<p><div align="left" style="font-size:8pt">&lt;h3>Заголовок 3 уровня&lt;/h3></div></p>
<p><div align="left" style="font-size:8pt">&lt;h4>Заголовок 4 уровня&lt;/h4></div></p>
<p><div align="left" style="font-size:8pt">&lt;h5>Заголовок 5 уровня&lt;/h5></div></p>

<p><div align="left" style="font-size:8pt">&lt;h6>Заголовок 6 уровня&lt;/h6></div></p>
</td>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<h1>Заголовок 1 уровня</h1>
<h2>Заголовок 2 уровня</h2>
<h3>Заголовок 3 уровня</h3>
<h4>Заголовок 4 уровня</h4>
<h5>Заголовок 5 уровня</h5>

<h6>Заголовок 6 уровня</h6>
</td>
</tr></table>
</center><br>
<a name="2"></a><h5>Добавление комментариев в HTML-код</h5><br>
<p>Пару слов о внесении комментариев в html-код страницы. Это удобное средство для понимания написанного кода, впоследствии дающее возможность отыскания разделов документа, нуждающихся в редактировании, либо объяснении мотивов, которыми руководствовался разработчик кода.</p>
<p>Текст комментария должен быть заключен между открывающим <font color="#008000">&lt;!--</font>  и закрывающим <font color="#008000">--></font> разделителями. Текст, заключенный между такими скобками, браузером не воспринимается и на экране не отображается. Следует сказать, что все комментарии будут видны при просмотре кода страницы. С помощью разделителей комментариев удобно временно защищать от просмотра некоторые части страницы - те, которые нуждаются в доработке.</p><br>


<h5>Вставка спецсимволов</h5><br>
<a name="3"></a>
<p>Иногда возникает необходимость в использовании символа, которого нет на клавиатуре. Как быть в этом случае?
Для этого существуют специальные символы, состоящие из знаков амперсанда (&amp;), фунта (#), числового кода и точки с запятой (;). Либо из амперсанда, наименования символа и точки с запятой (;).</p>

<p>Средства вставки специальных символов пригодятся, когда необходимо использовать в тексте один из "служебных" знаков, применяемых при проектировании html-страниц, например символ угловой открывающей скобки, который воспринимается браузером в качестве начала дескриптора.</p><br><br><center>
<h4>Таблица часто используемых спецсимволов</h4>
<pre>
Мнемокод       Символ

&amp;quot;          &quot;
&amp;amp;           &amp;
&amp;lt;            &lt;
&amp;gt;            &gt;
&amp;curren;        &curren;
&amp;brvbar;        &brvbar;

&amp;sect;          &sect;
&amp;copy;          &copy;
&amp;ordf;          &ordf;
&amp;laquo;         &laquo;
&amp;reg;           &reg;
&amp;deg;           &deg;
&amp;plusmn;        &plusmn;
&amp;micro;         &micro;
&amp;para;          &para;

&amp;middot;        &middot;
&amp;sup1;          &sup1;
&amp;euro;          &euro;
</textarea>
</pre>
</center>

<br><br><hr><br><br><center>

</td>
</tr>
</table>
	                  
        </body>     
  
</html>
