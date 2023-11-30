<html>
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
      <li><a href="../../../roles/student/courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>
<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: HTML<h1>

<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<strong><h2>Лекция № 4</h2> </strong><br><br><hr><br><br>


<center><p><a class="a1" href="#1">Предварительное форматирование текста</a></p><br>
<p><a class="a1" href="#2">Выделение фрагментов текста</a></p><br>
<p><a class="a1" href="#3">Выбор шрифта</a></p><br>
<p><a class="a1" href="#4">Изменение размера шрифта</a></p><br>
<p><a class="a1" href="#5">Выбор цвета шрифта</a></p><br>

<p><a class="a1" href="#6">Изменение цвета фона</a></p><br>

</center>
<br>
<a name="1"></a><h5>Предварительное форматирование текста</h5><br>
<div align="left" align="justify">Вэб-браузеры игнорируют пустые строки и избыточные пробелы внутри текста страницы. Дескриптор <font color="#008000">&lt;PRE></font> указывает браузеру сохранять в неприкосновенности пустые области текста страницы.</p>
<p>Браузер отображает подобный предварительно отформатированный текст с помощью моноширинных шрифтов. 
Что такое моноширинный шрифт?</p>
<p>Это шрифт, в котором под каждую букву отводится область одинакового размера. Поэтому, используя предварительное форматирование, удобно сразу пользоваться одним из моноширинных шрифтов, например Courier. Тогда сразу будет видно, как текст будет располагаться на экране в окне браузера.</p>
<p>При обработке тэга <font color="#008000">&lt;PRE></font>, браузер отображает текст, заключенный в этот тэг, точно так, как он набран - не удаляя избыточных пробелов и переносов. Следует помнить, что слишком длинные строки могут не уместиться в пределах окна. </p>
<p>Удобно пользоваться предварительным форматированием для создания простых таблиц.</p><br>

<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>
&lt;pre><br>
<div style="font-size:8pt">У попа была собака,<br>&nbsp;&nbsp;
  Он ее любил,<br>&nbsp;&nbsp;&nbsp;&nbsp;
    Она съела кусок мяса<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	  Он ее убил.</div>
&lt;/pre>
</td>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<pre>
У попа была собака,
  Он ее любил,
    Она съела кусок мяса
      Он ее убил.
</pre>
</td>
</tr></table><br>

<a name="2"></a><h5>Выделение фрагментов текста</h5><br>
<p>Для придания фрагменту текста смыслового значения очень удобно использовать средства изменения начертания шрифта.</p>

<p>Для выделения текста полужирным шрифтом используется тэг <font color="#008000">&lt;B></font> или <font color="#008000">&lt;STRONG></font>, для выделения курсивом - <font color="#008000">&lt;I></font> или <font color="#008000">&lt;EM></font>, для подчеркивания текста - <font color="#008000">&lt;U></font>, для зачеркивания текста - <font color="#008000">&lt;STRIKE></font>. Фрагменты полужирного или курсивного текста используют для ввода новых терминов, выражения важных мыслей. С подчеркиванием текста надо быть очень осторожным, т.к. в Интернете таким образом принято выделять гиперссылки.</p>
<p>Тэг <font color="#008000">&lt;CENTER></font> позволяет центрировать текст на странице по горизонтали. Это удобно для выделения наименований или заголовков.</p>

<p>HTML позволяет одновременно применять несколько дескрипторов, предназначенных для изменения начертания шрифта. Однако в этом случае необходимо следить, чтобы завершающие дескрипторы, содержащие символ косой черты, вводились в обратном порядке.</p>
<p>Для преобразования текста в надстрочный индекс применяют тэг <font color="#008000">&lt;SUP></font>, для подстрочного индекса - <font color="#008000">&lt;SUB></font>. Эти тэги пригодятся при вводе математических текстов, химических формул, научных статей, построении сносок и т.д.
Обычно индексы отображаются шрифтом меньшего размера по сравнению с основным. Это обстоятельство следует учитывать при выборе размера основного шрифта, т.к. при малом размере индексы могут быть просто не видны.</p>
<br>
<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;strong>Жирный текст&lt;/strong>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;em>Курсив&lt;/em>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;u>Подчеркнутый текст&lt;/u>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;strike>Зачеркнутый текст&lt;/strike>&lt;/p></div></p>

<p><div align="left" style="font-size:8pt">&lt;center>Центрирование&lt;/center></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;strong>&lt;em>Жирный курсив&lt;/em>&lt;/strong>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>Верхний &lt;sup>индекс&lt;/sup>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>Нижний &lt;sub>индекс&lt;/sub>&lt;/p></div></p>

</td><br>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<p><strong>Жирный текст</strong></p>
<p><em>Курсив</em></p>
<p><u>Подчеркнутый текст</u></p>
<p><strike>Зачеркнутый текст</strike></p>
<center>Центрирование</center>
<p><strong><em>Жирный курсив</em></strong></p>

<p>Верхний <sup>индекс</sup></p>
<p>Нижний <sub>индекс</sub></p>
</td>
</tr></table><br>
<br><a name="3"></a><h5>Выбор шрифта html-страницы</h5><br>
<p>Для изменения шрифта служит тэг <font color="#008000">&lt;FONT></font> с атрибутом FACE. Можно указывать шрифт по названию (Arial, Tahoma, Verdana) или типу(например, monospace). Желательно перечислить несколько имен шрифта, чтобы избежать ситуации, когда окажется, что требуемый шрифт не установлен у пользователя. Рекомендую "забить" хотя бы один из общепринятых шрифтов (например Arial). Не рекомендую на одной странице применять более 2-3 различных шрифтов, иначе страница будет смотреться аляповато и непрофессионально.</p>
<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font face="Times New Roman, Arial">У попа была собака, ОН  ЕЕ ЛЮБИЛ</font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font face="Monotype Corsiva, Arial">Она съела кусок мяса, ОН ЕЕ УБИЛ</font>&lt;/p></div></p>

</td>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<p><font face="Times New Roman, Arial">У попа была собака, ОН  ЕЕ ЛЮБИЛ</font></p>
<p><font face="Monotype Corsiva, Arial">Она съела кусок мяса, ОН ЕЕ УБИЛ</font></p>

</td>
</tr></table>
<br>
<a name="4"></a><h5>Изменение размера шрифта html-страницы</h5><br>
<p>Для изменения размера шрифта используют атрибут SIZE. Чем крупнее шрифт, тем более легким для восприятия становится текст. Однако, мелкий шрифт позволяет уместить в пределах экрана больший объем информации.
Используя данный атрибут с тэгом <font color="#008000">&lt;BASEFONT></font> , вы можете изменить размер текста вэб-страницы целиком. Применяя атрибут SIZE совместно с тэгом <font color="#008000">&lt;FONT></font>, можно воздействовать на внешний вид отдельного фрагмента текста.
Доступно 7 размеров шрифтов. Самый малый обозначается цифрой 1, а самый крупный - 7.</p>
<p>Изменять шрифт можно с помощью тэгов <font color="#008000">&lt;BIG></font> и <font color="#008000">&lt;SMALL></font>. <font color="#008000">&lt;BIG></font> укрупняет шрифт указанного фрагмента по отношению к предыдущему тексту, а <font color="#008000">&lt;SMALL></font>, соответственно, уменьшает.</p>

<p>Меняя размер отдельных букв, можно добиться интересных эффектов. Например, таким образом можно получить буквицу - укрупненную прописную букву начала абзаца.</p>
<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="1">Шрифт размера 1&lt;/font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="2">Шрифт размера 2&lt;/font>&lt;/p></div></p>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="3">Шрифт размера 3&lt;/font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="4">Шрифт размера 4&lt;/font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="5">Шрифт  5&lt;/font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="6">Шрифт  6&lt;/font>&lt;/p></div></p>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="7">Шрифт  7&lt;/font>&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="6">У&lt;/font>тро красит нежным светом&lt;/p></div></p>
<p><div align="left" style="font-size:8pt">&lt;p>&lt;font size="+2">С&lt;/font>тены &lt;small>старого&lt;/small> &lt;big>Кремля&lt;/big>&lt;/p></div></p>

</td>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<p><font size="1">Шрифт размера 1</font></p>
<p><font size="2">Шрифт размера 2</font></p>
<p><font size="3">Шрифт размера 3</font></p>
<p><font size="4">Шрифт размера 4</font></p>
<p><font size="5">Шрифт  5</font></p>
<p><font size="6">Шрифт  6</font></p>

<p><font size="7">Шрифт  7</font></p>
<p><font size="6">У</font>тро красит нежным светом</p>
<p><font size="+2">С</font>тены <small>старого</small> <big>Кремля</big></p>
</td>
</tr></table>
<br>
<a name="5"></a><h5>Выбор цвета шрифта html-страницы</h5><br>
<p>Отображение участков текста Вэб-страницы шрифтами разного цвета придает ей привлекательность.</p>

<p>Используя атрибут TEXT в контексте тэга <font color="#008000">&lt;BODY></font>, можно изменить цвет текста вэб-страницы целиком. Применение же атрибута COLOR с тэгом <font color="#008000">&lt;FONT></font> (обладает более высоким приоритетом) позволяет взаимодействовать на внешний вид отдельного фрагмента текста.</p>
<p>Чтобы изменить цвет текста, надо знать наименование цвета, либо его шестнадцатеричный код. Код состоит из символа фунта # и числа, представляющего интенсивность красной, зеленой и синей составляющих цвета. По имени можно сослаться только на 16 стандартных цветов.</p>
<pre><center>
Наим-е 
цвета       Код

aqua        #<font color="aqua">#00FFFF</font>
black       #<font color="black">#000000</font>
blue        #<font color="blue">#0000FF</font>

fuchsia     #<font color="fuchsia">#FF00FF</font>
gray        #<font color="gray">#808080</font>
green       #<font color="green">#008000</font>
lime        #<font color="lime">#00FF00</font>
maroon      #<font color="maroon">#800000</font>
navy        #<font color="navy">#000080</font>

olive       #<font color="olive">#808000</font>
purple      #<font color="purple">#800080</font>
red         #<font color="red">#FF0000</font>
silver      #<font color="silver">#C0C0C0</font>
teal        #<font color="teal">#008080</font>
white       #<font color="white">#FFFFFF</font>

yellow      #<font color="yellow">#FFFF00</font>
</pre>
</center>
<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font color="#ff0000">Красный цвет&lt;/font>&lt;/p></div></p>

<p><div align="left" style="font-size:8pt">&lt;p>&lt;font color="blue">Синий цвет&lt;/font>&lt;/p></div></p>

</td>
<td width="50%" valign="top">
<p><strong>Отображение в браузере:</strong></p><br>
<p><font color="#ff0000">Красный цвет</font></p>
<p><font color="blue">Синий цвет</font></p>
</td>
</tr></table>
<br>
<a name="6"></a><h5>Изменение цвета фона html-страницы</h5><br>
<p>Атрибут BGCOLOR дает возможность явного указания цвета фона вэб-страницы. Цвет фона задается аналогично цвету текста (именем или кодом).</p>
<p><font color="#FF00FF">Пример:</font></p>
<table width="100%" border="1" bordercolor="#0000ff">
<tr>
<td width="50%" valign="top">
<p><strong>HTML-код:</strong></p><br>

<p><div align="left" style="font-size:8pt">&lt;BODY BGCOLOR="#00FF00"> &lt;/BODY></div></p>
</td>
<td width="50%" valign="top" bgcolor="#00FF00">

<p><strong>Отображение в браузере:</strong></p><br>

</td>
</tr></table>
<br><br><hr><br><br><center>

</td>
</tr>
</table>
	                  
        </body>     
  
</html>
