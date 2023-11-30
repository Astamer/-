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

<strong><h2>Лекция № 3</h2> </strong><br><br><hr><br><br>
<textarea rows="60" cols="80">

<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;


<p class=text>В РНР переменные начинаются со знака доллара (<b>$</b>). За этим знаком может следовать любое количество
буквенно-цифровых символов и символов подчеркивания, но первый символ не может быть цифрой. Следует также помнить, что
имена переменных в РНР чувствительны к регистру, в отличие от ключевых слов.
</p>
<p class=text>При объявлении переменных в РНР не требуется явно указывать тип переменной, при этом одна и та же переменная может иметь на протяжении программы разные типы. 
</p>
<p class=text>Переменная инициализируется в момент присваивания ей значения и существует до тех пор, пока выполняется программа. Т.е., в случае web-страницы это означает, что до тех пор, пока не завершен запрос. 
</p><br>
<h3 class=p1>Внешние переменные</h3><br>
<p class=text>После того, как запрос клиента проанализирован веб-сервером и передан РНР машине, последняя устанавливает ряд переменных, которые содержат данные, относящиеся к запросу и доступны все время его выполнения.  Сначала РНР берет <b class=nob>переменные окружения</b> Вашей системы и создает переменные с теми же именами и значениями в окружении сценария РНР для того чтобы сценариям, расположенным на сервере были доступны особенности системы клиента. Эти переменные помещаются в ассоциативный массив <b>$HTTP_ENV_VARS</b>. 

</p>
<p class=text>Естественно, что переменные массива <b>$HTTP_ENV_VARS</b> являются системно зависимыми (поскольку это фактически <b class=nob>переменные окружения</b>). Посмотреть значения переменных окружения для Вашей машины Вы можете при помощи команды env (Unix) или set (Windows). 
</p>
<p class=text>Затем РНР создает группу GET-переменных, которые создаются при анализе строки запроса. Строка запроса хранится в переменной <b>$QUERY_STRING</b> и представляет собой информацию, следующую за символом &quot;<b>?</b>&quot; в запрошенном URL. РНР разбивает строку запроса по символам <b>&</b> на отдельные элементы, а затем ищет в каждом из этих элементов знак &quot;=&quot;. Если знак &quot;=&quot; найден, то создается переменная с именем из символов, стоящих слева от знака равенства. Рассмотрим следующую форму: 

</p>
<blockquote>
<pre>
<em class=gr>&lt;form</em> action = <em class=comnt>"http://localhost/PHP/test.php"</em> method="<b>get</b>"&gt;
   HDD: <em class=gr>&lt;input</em> type="<b>text</b>" name="<b>HDD</b>"/&gt;&lt;br&gt;

   CDROM: <em class=gr>&lt;input</em> type="<b>text</b>" name="<b>CDROM</b>"/&gt;&lt;br&gt;
<em class=gr>&lt;input</em> type="<b>submit</b>"/&gt;

</form>
</pre>
</blockquote>
<p class=text>
Если Вы в этой форме в строке HDD наберете, к примеру, &quot;Maxtor&quot;, а в строке  CDROM &quot;Nec&quot;, то она сгенерирует следующую форму запроса:
</p>
<em class=comnt>http://localhost/PHP/test.php?HDD=Maxtor&CDROM=Nec</em>
<p class=text>В нашем случае РНР создаст следующие переменные: </em>
<b>$HDD</b>&nbsp;=&nbsp;&quot;Maxtor&quot; и <b>$CDROM</b>&nbsp;=&nbsp;&quot;Nec&quot;.  

<p class=text>Вы можете работать с этими переменными из Вашего скрипта (у нас – test.php) как с обычными переменными. В нашем случае они просто выводятся на экран:
</p>
<blockquote>
<pre>
<em class=red>&lt;?</em>
   <em class=gr>echo</em>(&quot;&lt;p&gt;HDD is $HDD&lt;/p&gt;");
   <em class=gr>echo</em>(&quot;&lt;p&gt;CDROM is $CDROM&lt;/p&gt;");

<em class=red>?&gt;</em>
</pre>
</blockquote>
<p class=text>
Если запрос страницы выполняется при помощи метода POST, то появляется группа POST-переменных, которые интерпретируются также и помещаются в массив <b>$HTTP_POST_VARS</b>.
</p>

</textarea>
<br><br><hr><br><center>


</td>
</tr>
</table>
	                  
        </body>     
  
</html>
