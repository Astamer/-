<html>
<title>Система дистанционного обучения кафедры </title>
<head bodycolor="000011">
<link rel="stylesheet" href="../../../../css/styles.css">
        <body BACKGROUND="../../image/background.PNG">
<header>
        <nav>
            <ul>
                <li><a href="php1.php"><span>Лекция № 1</span></a></li>
      <li><a href="php2.php"><span>Лекция № 2</span></a></li>
      <li><a href="php3.php"><span>Лекция № 3</span></a></li>
      <li><a href="php4.php"><span>Лекция № 4</span></a></li>
      <li><a href="../../../roles/student/courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>



<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: PHP<h1>

<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<strong><h2>Лекция № 2</h2> </strong><br><br><hr><br><br>


<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;


<h3 >PHP программы</h3>
<p class=text>
Программы PHP могут выполняться двумя способами: как сценарное приложение Web-сервером и как консольные программы. Поскольку, нашей задачей является программирование web-приложений, мы преимущественно будем рассматривать первый способ.
</p>

<blockquote class=citat>
Дело в том, что PHP, как правило, используется сугубо для программирования приложений, связанных с Интернетом. Однако, PHP можно еще использовать в качестве интерпретатора командной строки, в основном в *nix-системах. Последнее возможно при помощи CORBA и COM интерфейсов, а также при помощи расширения PHP-GTK. При таком использовании PHP возможно решение следующих задач: 
<ul>
  <li>создание приложений интерактивной командной строки;</li>
  <li>создание кросс-платформенных GUI приложений при помощи библиотеки PHP-GTK;</li>
  <li>автоматизация некоторых задач под Windows и Linux</li>
</ul>
</blockquote>
<p class=text><br>
Рассмотрим процесс выполнения php-сценария при обращении броузера к серверу. Итак, вначале броузер запрашивает страницу с расширением .php, после чего web-сервер пропускает программу через машину PHP и выдаёт результат в виде html-кода. Причем, если взять стандартную страницу HTML, изменить расширение на .php и пропустить её через машину PHP, последняя просто перешлёт её пользователю без изменений. Чтобы включить в этот файл команды PHP, необходимо заключить команды PHP в специальные теги, которых различают 4 вида (они эквивалентны и можно использовать любые):
</p>
<table align="center" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td><b>Инструкция обработки XML:</b>
<pre><em class=red>&lt;?php</em>
    ...
<em class=red>?&gt;</em></pre></td>
</tr>
<tr>
	<td><b>Инструкция обработки SGML:</b>
<pre><em class=red>&lt;?</em>

    ...
<em class=red>?&gt;</em></pre></td>
</tr>
<tr>
	<td><b>Инструкция обработки сценариев HTML:</b>
<pre>&lt;<b>script</b> language = "<b>php</b>"&gt;
    ...

&lt;/<b>script</b>&gt;
</pre></td>
</tr>
<tr>
	<td><b>Инструкция в стиле ASP:</b>
<pre><em class=red>&lt;%</em>
    ...
<em class=red>%&gt;</em>
</pre></td>
</tr>
</table>
<br>
<p class=text>Мы будем придерживаться стиля XML или SGML.</p>
<p class=text>Вообще говоря, внутри какого-либо блока кода можно выйти из PHP, при условии, что дальше мы войдем в него снова и закончим код . Т.е., возможна следующая конструкция: 
</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>
   <em class=gr>if</em>(5<3)<em class=gr>{</em>
   <em class=gr>echo</em>("&lt;p&gt;Hello, world!&lt;p&gt;");

<em class=red>?&gt;</em>
   &lt;p&gt;Hello!&lt;/p&gt;
   // <em class=comnt>эта строка не интерпретируется как код PHP</em>
   // <em class=comnt>и выводится только если  блок кода выполняется</em>
<em class=red>&lt;?</em>

      <em class=gr>echo</em>("&lt;p&gt;Hello, world!&lt;p&gt;");
   <em class=gr>}</em>
<em class=red>?&gt;</em>
</pre>
</blockquote>
<p class=text>
Команда echo в  PHP применяется для вывода фактически всего, что встречается на web-страницах (текст, разметку HTML, числа). Смысл ее действия, мы думаем, понятен из приведенного примера. 
<br><p class=text>
PHP предоставляет несколько методов для вставки комментариев. Проще всего пользоваться двойным слэшем
в стиле языка С++ (<em class=gr>//</em>), после чего PHP машина игнорирует все, что расположено до конца строки. Также можно пользоваться многострочными комментариями в стиле С (<em class=gr>/*…*/</em>).  Для однострочных комментариев можно еще пользоваться символом решетки (<em class=gr>#</em>) (комментарий скриптовых языков UNIX). 
</p>
<blockquote>
<pre>
<em class=red>&lt;php</em>
   <em class=gr>echo</em>("&lt;p&gt;Hello&lt;/p&gt;"); // <em class=comnt>комментарий</em>

   <em class=gr>echo</em>("&lt;p&gt;Hello&lt;/p&gt;"); # <em class=comnt>комментарий</em>
   /* 
      <em class=comnt>и это тоже комментарии</em>
   */
<em class=red>?&gt;</em>

</pre>
</blockquote>
<p class=text>
Следует помнить о том, что стили комментариев PHP действуют только внутри ограничителей PHP. Если PHP встретит эти символы комментариев вне ограничителей, то они, как и любой текст, будут помещены на html-страницу. Например:
</p>
<blockquote>
<pre>
<em class=red>&lt;php</em>
   <em class=gr>echo</em>("&lt;p&gt;Hello&lt;/p&gt;"); // <em class=comnt>нормальный комментарий</em>

<em class=red>?&gt;</em>
// <em class=comnt>а вот этот комментарий отобразиться броузером.</em>
&lt;!-- <em class=comnt>Комментарий  HTML. 
Будет виден в исходном коде HTML, но не в браузере</em>  --&gt; 
</pre>  
</blockquote>
    <p class=text>
    Заметим, что комментарии можно вставлять не только после конца оператора, а, например, и вот так:
    </p>

<blockquote>
<pre>
<em class=red>&lt;?</em>
   <b>$a</b> = "<b>Hello, world</b>";
   <em class=gr>echo</em> <a href=http://www.softtime.ru/dic/id_dic=76&id_group=1>strstr</a>($a,"H");
   // <em class=comnt>эту функцию мы рассмотрим позднее</em>


<br><br><hr><br><center>


</td>
</tr>
</table>
	                  
        </body>     
  
</html>
