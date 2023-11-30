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
      <li><a href="../../courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>



<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: PHP<h1>


<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<strong><h2>Лекция № 4</h2> </strong><br><br><hr><br><br>
<textarea rows="60" cols="80">

<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;


<h3 class=p1>Константы</h3><br>

<p class=text>Константы объявляются в РНР при помощи функции <b>define</b>():</p>
<p class=text><b>define</b>(CONSTANT, value)</em>
<p class=text>Первый параметр этой функции – имя константы, второй – её значение. При использовании константы на неё ссылаются по имени:
</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>
   <b>define</b>(CONSTANT1,15);
   <b>define</b>(CONSTANT2,"\x20"); // <em class=comnt>код пробела</em>

   <b>define</b>(CONSTANT3,"Hello");
   <em class=gr>echo</em>(CONSTANT1);
   <em class=gr>echo</em>(CONSTANT2);
   <em class=gr>echo</em>(CONSTANT3);
<em class=red>?&gt;</em>
</pre>
</blockquote>
<p class=text>
По традиции имена констант пишут буквами верхнего регистра. И хотя это только традиция, мы Вам рекомендуем ей следовать, поскольку плохие программисты получаются в том числе и из тех, кто не следовал хорошим традициям J.
Существует функция <b>defined</b>(), которая проверяет, определена ли константа:

</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>
   <b>define</b>(CONSTANT,"<b>Hello</b>");
   <em class=gr>if</em>(<b>defined</b>("<b>CONSTANT</b>"))
   <em class=gr>{</em>

      <em class=gr>echo</em>(&quot;&lt;p&gt;CONSTANT is defined&lt;/p&gt;&quot;);
   <em class=gr>}</em>
<em class=red>?&gt;</em>
</pre>
</blockquote>
<br><br><h3 class=p1>Типы данных в РНР. Преобразование типов</h3><br>

<p class=text>Как уже было сказано, PHP предоставляет определенную гибкость в отношении типов переменных, т.е. с одной и той же переменной на протяжении программы можно работать и как со строкой, и как с числом. Однако, несмотря на это в РНР существуют набор основных типов данных, которые могут явно указываться при работе с переменными:
</p>
<ul>
  <li><b>integer</b>; </li>
  <li><b>string</b>; </li>
  <li><b>boolean</b>; </li>
  <li><b>double</b>; </li>

  <li><b>array</b>; </li>
  <li><b>object</b>; </li>
</ul>
<p class=text>Есть функция <b>gettype</b>(), возвращающая тип, который РНР назначил переменной:</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>

   <b>$var</b> = &quot;5&quot;;
   <b>$var1</b> = 5;
   <em class=gr>echo</em>(<b>gettype</b>(<b>$var</b>));
   <em class=gr>echo</em> &quot;&lt;br&gt;&quot;;
   <em class=gr>echo</em>(<b>gettype</b>(<b>$var1</b>));

<em class=red>?&gt;</em>
</pre>
</blockquote>
<p class=text>В первом случае РНР вернет <b>string</b>, во втором <b>integer</b>.</p>
<p class=text>Существует также функция <b>settype</b>(), которая явно устанавливает тип:</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>

   <b>$var</b> = &quot;<b>5</b>&quot;;
   <em class=gr>echo</em>(<b>gettype</b>(<b>$var</b>));
   <b>settype</b>(<b>$var</b>,integer);
   <em class=gr>echo</em> "&lt;br&gt;";
   <em class=gr>echo</em>(<b>gettype</b>(<b>$var</b>));

<em class=red>?&gt;</em>
</pre>
</blockquote>
<p class=text>Выполнение этого фрагмента кода приведет к такому же результату, как и предыдущего.
</p>
<p class=text>Кроме функции <b>settype</b>() преобразование типов в РНР можно осуществлять при помощи операторов преобразования типов. Преобразование типов осуществляется путем указания перед переменной ее нового типа, взятого в скобки:
</p>
<blockquote>
<b>$var</b> = (int)<b>$var</b>;
</blockquote>

<p class=text>Соответственно, выполнение следующего кода приведет к тому, что РНР вернет integer:
</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>
   <b>$var</b> = &quot;<b>5</b>&quot;; // <em class=comnt>тип string</em>
   <b>$var</b> = (int)<b>$var</b>; // <em class=comnt>преобразуем в int</em>

   <em class=gr>echo</em>(<b>gettype</b>(<b>$var</b>));
<em class=red>?&gt;</em>
</pre>
</textarea>

<br><br><hr><br><center>


</td>
</tr>
</table>
	                  
        </body>     
  
</html>
