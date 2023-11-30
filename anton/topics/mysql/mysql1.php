<html>
<title>Система дистанционного обучения кафедры </title>
<head bodycolor="000011">
<link rel="stylesheet" href="../../../../css/styles.css">
 <body BACKGROUND="../../image/background.PNG">
<header>
        <nav>
            <ul>
      <li><a href="../../../roles/student/courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>


<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: MySQL<h1>

<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<p> <div align="left" align="justify">

<table align="center" cellspacing="0" cellpadding="0" border="0">
</table>
<div align=center><a href="#createdb">Создание базы данных MySQL (CREATE DATABASE)</a><br>
<a href="#deletedb">Удаление базы данных MySQL (DROP DATABASE)</a>><br>
<a href="#createtable">Создание таблицы в базе данных MySQL (CREATE TABLE)</a><br>
<a href="#deltable">Удаление таблицы из базы данных MySQL (DROP TABLE)</a><br>
<a href="#altertable">Изменение свойств таблицы</a><br>
<a href="#altertable">Переименование таблицы (ALTER TABLE RENAME)</a><br>
<a href="#altertableadd">Вставка столбцов (ALTER TABLE ADD)</a><br>
<a href="#altertablechange">Изменение свойств столбца (ALTER TABLE CHANGE)</a>
<br><a href="#altertabledrop">Удаление столбцов (ALTER TABLE DROP)</a><br>
<a href="#insertrec">Вставка строки в таблицу (INSERT INTO)</a><br>
<a href="#delrec">Удаление строк из таблицы (DELETE FROM)</a><br>
<a href="#updaterec">Обновление записей в таблице(UPDATE)</a><br>
<a href="#selectrec">Поиск записей в таблице(SELECT)</a><br>
</div>

<h3><br><br><br><A name="vartype">Типы данных, используемые в базе данных MySQL</A></h3>

<dt><table align=center>
<tr><td class=frm colspan=2 align=center>Целые числа</td></tr>
<tr><td class=frm0 colspan=2>Общий вид указания типа данных:<BR><I>префикс</I>INT [UNSIGNED]<BR>Необязательный флаг UNSIGNED задает, что будет создано поле для хранения беззнаковых чисел (больших или равных 0).</td></tr>
<tr><td class=frm1>TINYINT</td><td class=frm1>Может хранить числа от -128 до 127</td></tr>
<tr><td class=frm1>SMALLINT</td><td class=frm1>Диапазон от -32 768 до 32 767</td></tr>
<tr><td class=frm1>MEDIUMINT</td><td class=frm1>Диапазон от -8 388 608 до 8 388 607</td></tr>

<tr><td class=frm1>INT</td><td class=frm1>Диапазон от -2 147 483 648 до 2 147 483 647</td></tr>
<tr><td class=frm1>BIGINT</td><td class=frm1>Диапазон от -9 223 372 036 854 775 808 до <BR>9 223 372 036 854 775 807</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td class=frm colspan=2 align=center>Дробные числа</td></tr>
<tr><td class=frm0 colspan=2>Точно так же, как целые числа подразделяются в MySQL на несколько разновидностей, MySQL поддерживает и несколько типов дробных чисел.<BR>В общем виде они записываются так:<BR><I>ИмяТипа</I>[(length, decimals)] [UNSIGNED]</td></tr>
<tr><td class=frm0 colspan=2>Здесь <I>length</I> - количество знакомест (ширина поля), в которых будет размещено дробное число при его передаче.<BR><I>decimals</I> - количество знаков после десятичной точки, которые будут учитываться.<BR>UNSIGNED - задает беззнаковые числа.</td></tr>

<tr><td class=frm1>FLOAT</td><td class=frm1>Число с плавающей точкой небольшой точности.</td></tr>
<tr><td class=frm1>DOUBLE</td><td class=frm1>Число с плавающей точкой двойной точности.</td></tr>
<tr><td class=frm1>REAL</td><td class=frm1>Синоним для DOUBLE.</td></tr>
<tr><td class=frm1>DECIMAL</td><td class=frm1>Дробное число, хранящееся в виде строки.</td></tr>
<tr><td class=frm1>NUMERIC</td><td class=frm1>Синоним для DECIMAL.</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td class=frm colspan=2 align=center>Строки</td></tr>

<tr><td class=frm0 colspan=2>
Строки представляют собой массивы символов. Обычно при поиске по текстовым полям по запросу <I>SELECT</I> не берется в рассмотрение регистр символов, т.е. строки &quot;Вася&quot; и &quot;ВАСЯ&quot; считаются одинаковыми. Кроме того, если база данных настроена на автоматическую перекодировку текста при его помещении и извлечении, эти поля будут храниться в указанной вами кодировке.<BR><BR>
Для начала ознакомимся с типом строки, которая может хранить не более <I>length</I> символов, где </I>length</I> принадлежит диапазону от 1 до 255.<BR>

VARCHAR (length) [BINARY]<BR><BR>
При занесении некоторого значения в поле такого типа из него автоматически вырезаются концевые пробелы. Если указан флаг BINARY, то при запросе SELECT строка будет сравниваться с учетом регистра.
</td></tr>
<tr><td class=frm1>VARCHAR</td><td class=frm1>Может хранить не более 255 символов.</td></tr>
<tr><td class=frm1>TINYTEXT</td><td class=frm1>Может хранить не более 255 символов.</td></tr>
<tr><td class=frm1>TEXT</td><td class=frm1>Может хранить не более 65 535 символов.</td></tr>
<tr><td class=frm1>MEDIUMTEXT</td><td class=frm1>Может хранить не более 16 777 215 символов.</td></tr>
<tr><td class=frm1>LONGTEXT</td><td class=frm1>Может хранить не более 4 294 967 295 символов.</td></tr>

<tr><td class=frm0 colspan=2>Чаще всего применяется тип TEXT, но если вы не уверены, что данные не будут превышать 65 536 символов, используйте LONGTEXT.</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td class=frm colspan=2 align=center>Бинарные данные</td></tr>
<tr><td class=frm0 colspan=2>Бинарные данные - это почти то же самое, что и данные в формате TEXT, но только при поиске в них учитывается регистр символов.</td></tr>
<tr><td class=frm1>TINYBLOB</td><td class=frm1>Может хранить не более 255 символов.</td></tr>
<tr><td class=frm1>BLOB</td><td class=frm1>Может хранить не более 65 535 символов.</td></tr>
<tr><td class=frm1>MEDIUMBLOB</td><td class=frm1>Может хранить не более 16 777 215 символов.</td></tr>
<tr><td class=frm1>LONGBLOB</td><td class=frm1>Может хранить не более 4 294 967 295 символов.</td></tr>

<tr><td class=frm0 colspan=2>BLOD-данные не перекодируются автоматически, если при работе с установленным соединением включена возможность перекодирования текста &quot;на лету&quot;.</td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td class=frm colspan=2 align=center>Дата и время</td></tr>
<tr><td class=frm0 colspan=2>MySQL поддерживает несколько типов полей, специально приспособленных для хранения дат и времени в различных форматах.</td></tr>
<tr><td class=frm1>DATE</td><td class=frm1>Дата в формате ГГГГ-ММ-ДД</td></tr>
<tr><td class=frm1>TIME</td><td class=frm1>Время в формате ЧЧ:ММ:СС</td></tr>
<tr><td class=frm1>DATETIME</td><td class=frm1>Дата и время в формате ГГГГ-ММ-ДД ЧЧ:ММ:СС</td></tr>

<tr><td class=frm1>TIMESTAMP</td><td class=frm1>Дата и время в формате timestamp. Однако при получении значения поля оно отображается не в формате timestamp, а в виде ГГГГММДДЧЧММСС, что сильно умаляет преимущества его использования в PHP</td></tr>
</table>
<br><hr><h3><A name="createdb">Создание базы данных MySQL (CREATE DATABASE)</A></h3><dl>
<dt><B>Создание</B> базы данных выполняется с помощью команды <B>CREATE DATABASE</B>.
<dt>Синтаксис команды:
<dt>CREATE DATABASE <I>database_name</I>
<dd><li><I>database_name</I> - Имя, которое будет присвоено создаваемой базе данных.

<dt>В следующем примере мы создадим базу данных db_test:
<dt><pre class=primer>
CREATE DATABASE db_test
</pre>
<dt>Создание базы данных на PHP:
<dt><pre class=primer>
$sql=&quot;CREATE DATABASE db_test&quot;;
mysql_query($sql);
</pre>
</dl><hr><h3><A name="deletedb">Удаление базы данных MySQL (DROP DATABASE)</A></h3><dl>
<dt>Для <B>удаления</B> базы данных используется команда <B>DROP DATABASE</B>.

<dt>Синтаксис:
<dt>DROP DATABASE <I>database_name</I>
<dt>где
<dd><li><I>database_name</I> - задает имя базы данных, которую необходимо удалить.<BR><BR>
<dt>В следующем примере мы удалим базу данных db_test:
<dt><pre class=primer>
DROP DATABASE db_test
</pre>
<br>Удаление базы данных на PHP:
<dt><pre class=primer>
$sql=&quot;DROP DATABASE db_test&quot;;
mysql_query($sql);

</pre>
</dl><hr><h3><A name="createtable">Создание таблицы в базе данных MySQL (CREATE TABLE)</A></h3><dl><br>
<dt><B>Создание</B> таблицы производится командой <B>CREATE TABLE</B>.
<dt>CREATE TABLE table_name(column_name1 <I>type</I>, column_name2 <I>type</I>,...)
<dd><li>table_name - имя новой таблицы;
<dd><li>column_name - имена колонок (полей), которые будут присутствовать в создаваемой таблице.
<dd><li><I>type</I> - определяет тип создаваемой колонки.<P>

<dt>Допустим, нам надо создать таблицу телефонных номеров друзей.
<dt>Наша таблица будет состоять из трех столбцов: ФИО друга, адрес и телефон
<dt><pre class=primer>
CREATE TABLE tel_numb(fio text, address text, tel text)
</pre>
<dt>На PHP это будет выглядеть следующим образом:
<dt><pre class=primer>
$sql=&quot;CREATE TABLE tel_numb(fio text, address text, tel text)&quot;;
mysql_query($sql);
</pre>
<dt>К типу данных можно присоединить модификаторы, которые задают его &quot;поведение&quot; и те операции, которые можно (или, наоборот, запрещено) выполнять с соответстующими столбцами.
<dd><I>not null</I> - Означает, что поле не может содержать неопределенное значение, т.е. поле обязательно должно быть инициализировано при вставке новой записи в таблицу (если не задано значение по умолчанию).

<dd>Например, для нашей таблицы с телефонами нужно указать, что поле с ФИО друга (поле fio) и его телефоном (поле tel) не может иметь неопределенного значения:
<dt><pre class=primer>
CREATE TABLE tel_numb(fio text NOT NULL, address text, tel text NOT NULL)
</pre>
<dd><I>primary key</I> - Отражает, что поле является первичным ключом, т.е. идентификатором записи, на который можно ссылаться.
<dt><pre class=primer>
CREATE TABLE tel_numb(fio text, address text, tel text, PRIMARY KEY (fio))
</pre>
<dd><I>auto_increment</I> - При вставке новой записи поле получит уникальное значение, так что в таблице никогда не будут существовать два поля с одинаковыми номерами.
<dt><pre class=primer>
CREATE TABLE tel_numb(fio text AUTO_INCREMENT, address text, tel text)
</pre>
<dd><I>default</I> - Задает значение по умолчанию для поля, которое будет использовано, если при вставке записи для этого поля небыло явно указано значение.

<dt><pre class=primer>
CREATE TABLE tel_numb(fio text, address text DEFAULT &#39;Не указан&#39;, tel text)
</pre>
</dl><hr><h3><A name="deltable">Удаление таблицы из базы данных MySQL (DROP TABLE)</A></h3><dl><br>
<dt><B>Удаление</B> таблицы производится командой <B>DROP TABLE</B>
<dt>DROP TABLE <I>table_name</I>
<dd><li><i>table_name</I> - имя удаляемой таблицы.

<dt><pre class=primer>
DROP TABLE tel_numb
</pre>
<dt>На PHP это будет выглядеть следующим образом:
<dt><pre class=primer>
$sql=&quot;DROP TABLE tel_numb&quot;;
mysql_query($sql);
</pre>
</dl><hr><h3><A name="altertable">Изменение свойств таблицы : Переименование таблицы (ALTER TABLE RENAME)</A></h3><dl>
<dt>Переименование таблицы можно сделать при помощи следующей конструкции:<BR>
<dd><B>ALTER TABLE</B> <I>table_name_old</I> <B>RENAME</B> <I>table_name_new</I><BR><BR>

где<BR>
<dd><li><I>table_name_old</I> - старое имя таблицы, которое нам нужно переименовать;
<dd><li><I>table_name_new</I> - новое имя таблицы.<BR><BR>
<dt>Допустим, нам нужно переименовать таблицу <I>search</I> в <I>search_en</I>:
<dt><pre class=primer>
$sql=&quot;ALTER TABLE search RENAME search_en&quot;;
mysql_query($sql);

</pre>
</dl><hr><h3><A name="altertableadd">Изменение свойств таблицы : Вставка столбцов (ALTER TABLE ADD)</A></h3><dl><br>
<dt>Вставку нового столбца можно осуществить при помощи следующей конструкции:<BR>
<dd><B>ALTER TABLE</B> <I>table_name</I> <B>ADD</B> <I>field_name</I> parametrs<BR>
где<BR>

<dd><li><I>table_name</I> - имя таблицы, в которой будет вставлен новый столбец;
<dd><li><I>field_name</I> - имя вставляемого столбца;
<dd>parametrs - параметры, описывающие вставляемый столбец.<BR><BR>
<dt>Обязательным параметром является указание типа данных.<BR>
(Про возможные типы данных подробно написано в <a href="mysql.php?ss=2">Создание и удаление таблицы</A>).
<BR><BR>
Например, нам надо вставить в таблицу <I>my_frends</I> столбец под названием <I>adress_2</I>, который будет содержать текстовые значения:

<dt><pre class=primer>
$sql=&quot;ALTER TABLE my_frends ADD adress_2 TEXT&quot;;
mysql_query($sql);
</pre>
<dt>По умолчанию новый столбец вставляется в конец таблицы.<BR>
Если необходимо, чтобы столбец встал в начало таблицы, нужно после параметров вставляемого столбца написать ключевое слово <B>FIRST</B>:
<dt><pre class=primer>
$sql=&quot;ALTER TABLE my_frends ADD adress_2 TEXT FIRST&quot;;
mysql_query($sql);
</pre>
Теперь только что вставленный столбец окажется вначале таблицы.<BR><BR>

Если необходимо, чтобы столбец был вставлен не в начале таблицы, и не в конце, а после определенного столбца, то нужно применить ключевое слово <B>AFTER</B> <I>имя столбца, после которого будет установлен новый столбец</I>:
<dt><pre class=primer>
$sql=&quot;ALTER TABLE my_frends ADD adress_2 TEXT AFTER adress_1&quot;;
mysql_query($sql);
</pre>
В этом примере новый столбец <I>adress_2</I> будет установлен после столбца <I>adress_1</I>.<BR><BR>

Если нужно дописать к таблице не один, а несколько столбцов, то для каждого столбца нужно <B>ADD</B> <I>field_name</I> parametrs записать через запятую:
<dt><pre class=primer>
$sql=&quot;ALTER TABLE my_frends ADD adress_2 TEXT,
      ADD adress_3 TEXT, ADD adress_4 TEXT&quot;;
mysql_query($sql);
</pre>
В случае, если надо дописать два столбца внутри таблицы, можно поступить следующим образом:
<pre class=primer>
$sql=&quot;ALTER TABLE my_frends ADD adress_2 TEXT AFTER adress_1,
      ADD adress_3 TEXT AFTER adress_2&quot;;
mysql_query($sql);
</pre>

Т.е. мы первый вставляемый столбец записываем после <I>adress_1</I>, а второй после первого.
</dl><hr><h3><A name="altertablechange">Изменение свойств таблицы : Изменение свойств столбца (ALTER TABLE CHANGE)</A></h3><dl>
Изменить свойства одного или нескольких столбцов можно при помощи следующей конструкции:<BR>
<dd><B>ALTER TABLE</B> <I>table_name</I> <B>CHANGE</B> <I>field_name_old</I> <I>field_name_new</I> parametrs<BR>

где<BR>
<dd><I>table_name</I> - имя таблицы, в которой находится изменяемый столбец;
<dd><I>field_name_old</I> - имя столбца изменяемого столбца;
<dd><I>field_name_new</I> - новое имя изменяемого столбца (должно равняться <I>field_name_old</I>, если мы не хотим поменять имя столбца);
<dd>parametrs - новые параметры столбца.
<dt>В следующем примере установим тип строки field_1 как текст:
<pre class=primer>
$sql=&quot;ALTER TABLE my_table CHANGE field_1 field_1 TEXT&quot;;
mysql_query($sql);

</pre>
<dt>А если необходимо при этом еще и переименовать столбец в field_2, то получиться так:
<pre class=primer>
$sql=&quot;ALTER TABLE my_table CHANGE field_1 field_2 TEXT&quot;;
mysql_query($sql);
</pre>
В случае, если надо изменить свойства сразу нескольких столбцов, то конструкцию <B>CHANGE</B> <I>field_name_old</I> <I>field_name_new</I> parametrs повторяем через запятую для каждого столбца:
<pre class=primer>
$sql=&quot;ALTER TABLE my_table CHANGE field_1 field_2 TEXT,
      CHANGE field_3 field_3 TEXT&quot;;
mysql_query($sql);

</pre><hr><h3><A name="altertabledrop">Изменение свойств таблицы : Удаление столбцов (ALTER TABLE DROP)</A></h3><dl><br>
<dt>Удаление столбца можно сделать при помощи следующей конструкции:
<dd><B>ALTER TABLE</B> <I>table_name</I> <B>DROP</B> <I>field_name</I><BR><BR>
где<BR>
<dd><li><I>table_name</I> - имя таблицы, в которой будет удален столбец;

<dd><li><I>field_name</I> - имя удаляемого столбца.<BR><BR>

$sql=&quot;ALTER TABLE search DROP id_num&quot;;
mysql_query($sql);
</pre>
<dt>Если мы хотим удалить сразу несколько полей, то надо через запятую повторить <B>DROP</B> <I>field_name</I> для каждого столбца:
<br>
$sql=&quot;ALTER TABLE search DROP id_1, DROP id_2, DROP id_3&quot;;
mysql_query($sql);

</pre>
</dl><hr><h3><A name="insertrec">Вставка строки в таблицу (INSERT INTO)</A></h3><dl><br>
<dt><B>Вставка записи</B> осуществляется командой <B>INSERT INTO</B>
<dt>INSERT INTO <I>table_name</I>(field_name1, field_name2,...) values(&#39;content1&#39;, &#39;content2&#39;,...)
<dd>Данная команда добавляет в таблицу <I>table_name</I> запись, у которой поля, обозначеные как field_nameN, установлены в значение contentN.<BR><BR>

<dt>Например, если мы создаем таблицу адресов и телефонов (ФИО, адрес, телефон), то надо записать следующий код:
<dt><pre class=primer>
CREATE TABLE tel_numb(fio text, address text, tel text)
</pre>
<dt>Вставить в таблицу <I>tel_numb</I> значения можно так:
<dt><pre class=primer>
INSERT INTO tel_numb(fio, address, tel) 
         values(&#39;Вася Пупкин&#39;, &#39;ул.Горького, д.18&#39;, &#39;23-23-23&#39;)
</pre>

<dt>Те поля, которые небыли перечислены в команде вставки, получают &quot;неопределенные&quot; значения (неопределенное значение - это не пустая строка, а просто признак, который говорит MySQL, что у данного поля нет никакого значения).
<dt>Надо отметить, что если при создании таблицы поле было отмечено флагом NOT NULL, и оно при вставке записи получило неопределенное значение, то MySQL возвратит ошибку.
<dt>При вставке в таблицу бинарных данных (или текстовых, содержащих апострофы и слеши) некоторые символы должны быть защищены обратными слешами, а именно, символы \, &#39; и символ с нулевым кодом.
</dl><hr><h3><A name="delrec">Удаление строк из таблицы (DELETE FROM)</A></h3><dl>
<dt><B>Удаление записи</B> осуществляется командой <B>DELETE FROM</B>
<dt>DELETE FROM <I>table_name</I> WHERE (<I>выражение</I>)

<dd>Данная команда удаляет из таблицы <I>table_name</I> все записи, для которых выполнено <I>выражение</I>.
<dd><I>выражение</I> - это просто логическое выражение.
<dt>Например нам надо удалить запись из таблицы, содержащей ФИО, адрес и телефон:
<dt><pre class=primer>
DELETE FROM tel_numb WHERE (fio=&#39;Вася Пупкин&#39;)
</pre>
<dt>или, если надо удалить по нескольким параметрам
<dt><pre class=primer>

DELETE FROM tel_numb WHERE (fio=&#39;Вася Пупкин&#39; &amp;&amp; tel=&#39;23-45-45&#39;)
</pre>
<dt>В выражении, помимо имен полей, констант и операторов, могут также встречаться простейшие вычисляемые части, например: (id<10+4*5).<BR><BR>
<dt>Допустим, у нас гостевая книга использует для хранения информации базу данных MySQL.
<dt>Таблица (с именем <I>db_guest</I>), содержащая данные об оставленных сообщениях, имеет следующую структуру:
<dd><I>id</I> - поле содержит идентификационный уникальный номер записи;

<dd><I>name</I> - поле содержит имя пользователя, оставившего сообщение;
<dd><I>mail</I> - е-майл пользователя;
<dd><I>url</I> - URL пользователя;
<dd><I>content</I> - непосредственно, само сообщение.
<dt>Напишем сценарий (на PHP), который выводит всю базу данных оставленных сообщений и позволяет удалить выбранное сообщение:
<dt>Листинг файла <B>guest_delete.php</B>
<dt><pre class=primer>

&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Удаление записей гостевой книги.&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?
// Подключаемся к базе данных
mysql_connect(&quot;localhost&quot;, &quot;root&quot;, &quot;&quot;);
mysql_select_db(&quot;test&quot;);

// Если мы уже нажимали кнопку удаления
if(@$del_radio) {
  // Удаляем выбранную запись
  $sql=&quot;delete from db_guest where (id=&#39;$del_radio&#39;)&quot;;
  mysql_query($sql);
};

// Заносим в переменную &lt;I&gt;$result&lt;/I&gt; всю базу оставленных сообщений
$sql=&quot;select * from db_guest&quot;;
$result=mysql_query($sql);
// Узнаем кол-во записей в гостевой книге
$rows=mysql_num_rows($result);
echo &quot;&lt;form method=get action=&#39;guest_delete.php&#39;&gt;&quot;;
echo &quot;&lt;table border=0 align=center&gt;&quot;;
echo &quot;&lt;tr&gt;&lt;td align=center&gt;&lt;B&gt;Удалить&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Имя&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Е-майл&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;URL&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Сообщение&lt;/B&gt;&lt;/td&gt;&lt;/tr&gt;&quot;;
for($i=0;$i&lt;$rows;$i++) {
  // Устанавливаем курсор на соответствующую позицию
  mysql_data_seek($result,$i);
  // Записываем в ассоциативный массив &lt;I&gt;$arr_guest&lt;/I&gt;

  // значения полей таблицы гостевой книги
  $arr_guest=mysql_fetch_array($result);
  echo &quot;&lt;tr&gt;&lt;td&gt;&quot;;
  echo &quot;&lt;input type=radio name=&#39;del_radio&#39; value=&#39;&quot;.$arr_guest[&quot;id&quot;].&quot;&#39;&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&quot;.$arr_guest[&quot;name&quot;].&quot;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&quot;.$arr_guest[&quot;mail&quot;].&quot;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&quot;.$arr_guest[&quot;url&quot;].&quot;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&quot;.$arr_guest[&quot;content&quot;].&quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
};
echo &quot;&lt;tr&gt;&lt;td colspan=5 align=center&gt;&quot;;
echo &quot;&lt;input type=submit value=&#39;Удалить&#39;&gt;&quot;;
echo &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
echo &quot;&lt;/table&gt;&quot;;
echo &quot;&lt;/form&gt;&quot;;
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</dl><hr><h3><A name="updaterec">Обновление записей в таблице(UPDATE)</A></h3><dl><br>
<dt><B>Обновление записи</B> осуществляется командой <B>UPDATE</B>
<dt>UPDATE <I>table_name</I> SET field_name1=&#39;var1&#39;, field_name2=&#39;var2&#39;,... WHERE (<I>выражение</I>)

<dd>Данная команда для всех записей в таблице <I>table_name</I>, удовлетворяющих выражению <I>выражение</I>, устанавливает указанные поля field_nameN в значение <I>varN</I>.
<dt>Эту команду удобно применять, если не требуется обновлять не все поля какой-то записи, а нужно обновить только некоторые.<BR><BR>
<dt>Допустим, у нас гостевая книга использует для хранения информации базу данных MySQL.
<dt>Таблица (с именем <I>db_guest</I>), содержащая данные об оставленных сообщениях, имеет следующую структуру:
<dd><I>id</I> - поле содержит идентификационный уникальный номер записи;
<dd><I>name</I> - поле содержит имя пользователя, оставившего сообщение;

<dd><I>mail</I> - е-майл пользователя;
<dd><I>url</I> - URL пользователя;
<dd><I>content</I> - непосредственно, само сообщение.
<dt>Напишем сценарий (на PHP), который выводит всю базу данных оставленных сообщений и позволяет вносить изменения в оставленные сообщения:
<dt>Листинг файла <B>guest_update.php</B>
<dt><pre class=primer>
&lt;html&gt;
&lt;head&gt;

&lt;title&gt;Обновление записей гостевой книги.&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?
// Подключаемся к базе данных
mysql_connect(&quot;localhost&quot;, &quot;root&quot;, &quot;&quot;);
mysql_select_db(&quot;test&quot;);

// Если мы уже нажимали кнопку изменения записи
if(@$submit_update) {
  // Обновляем выбранную запись
  $sql=&quot;update db_guest set name=&#39;$name&#39;, mail=&#39;$mail&#39;, url=&#39;$url&#39;, content=&#39;$content&#39; 
         where (id=&#39;$update&#39;)&quot;;
  mysql_query($sql);
};

// Заносим в переменную &lt;I&gt;$result&lt;/I&gt; всю базу оставленных сообщений
$sql=&quot;select * from db_guest&quot;;
$result=mysql_query($sql);
// Узнаем кол-во записей в гостевой книге
$rows=mysql_num_rows($result);
echo &quot;&lt;table border=0 align=center&gt;&quot;;
echo &quot;&lt;tr&gt;&lt;td align=center&gt;&lt;B&gt;Имя&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Е-майл&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;URL&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Сообщение&lt;/B&gt;&lt;/td&gt;&quot;;
echo &quot;&lt;td align=center&gt;&lt;B&gt;Изменить&lt;/B&gt;&lt;/td&gt;&lt;/tr&gt;&quot;;
for($i=0;$i&lt;$rows;$i++) {
  // Устанавливаем курсор на соответствующую позицию
  mysql_data_seek($result,$i);
  // Записываем в ассоциативный массив &lt;I&gt;$arr_guest&lt;/I&gt;

  // значения полей таблицы гостевой книги
  $arr_guest=mysql_fetch_array($result);
  echo &quot;&lt;form method=get action=&#39;guest_update.php&#39;&gt;&quot;;
  echo &quot;&lt;input type=hidden name=&#39;update&#39; value=&#39;&quot;.$arr_guest[&quot;id&quot;].&quot;&#39;&gt;&quot;;
  echo &quot;&lt;tr&gt;&quot;;
  echo &quot;&lt;td&gt;&lt;input type=text name=&#39;name&#39; value=&#39;&quot;.$arr_guest[&quot;name&quot;].&quot;&#39;&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&lt;input type=text name=&#39;mail&#39; value=&#39;&quot;.$arr_guest[&quot;mail&quot;].&quot;&#39;&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&lt;input type=text name=&#39;url&#39; value=&#39;&quot;.$arr_guest[&quot;url&quot;].&quot;&#39;&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&lt;textarea name=&#39;content&#39;&gt;&quot;.$arr_guest[&quot;content&quot;].&quot;&lt;/textarea&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;td&gt;&lt;input type=submit name=&#39;submit_update&#39; value=&#39;Изменить&#39;&gt;&lt;/td&gt;&quot;;
  echo &quot;&lt;/tr&gt;&quot;;
  echo &quot;&lt;/form&gt;&quot;;
};
echo &quot;&lt;/table&gt;&quot;;
echo &quot;&lt;/form&gt;&quot;;
?&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
</dl><hr><h3><A name="selectrec">Поиск записей в таблице(SELECT)</A></h3><dl><br>
<dt><B>Поиск записей</B> осуществляется командой <B>SELECT</B>
<dt>SELECT * FROM <I>table_name</I> WHERE (<I>выражение</I>) [order by <I>field_name</I> [desc][asc]]

<dd>Эта команда ищет все записи в таблице <I>table_name</I>, которые удовлетворяют выражению <I>выражение</I>.
<dd>Если записей несколько, то при указаном предложении order by они будут отсортированы по тому полю, имя которого записывается правее этого ключевого слова (если задано слово desc, то упорядочивание происходит в обратном порядке). В предложении order by могут также задаваться несколько полей.
<dd>Особое значение имеет символ *. Он предписывает, что из отобранных записей следует извлечь <I>все</I> поля, когда будет выполнена команда получения выборки. С другой стороны, вместо звездочки можно через запятую непосредственно перечислить имена полей, которые требуют извлечения. Но чаще всего все же пользуются именно *.<BR><BR>
<dt>Например, нам надо найти в таблице, содержащей сообщения в гостевой книге, все записи, которые оставил определенный пользователь.
<dt><pre class=primer>
// Имя пользователя
$user=&quot;Admin&quot;;
// name - имя поля в таблице, которое содержит имена пользователей,
// оставивших свои сообщения в гостевой
// db_guest - имя таблицы, содержащей сообщения, оставленные в гостевой
$sql=&quot;select * from db_guest where (name=&#39;$user&#39;)&quot;;
$result=mysql_query($sql);
// Находим кол-во записей, удовлетворяющих условию
$rows=mysql_num_rows($result);
echo &quot;$user оставил в гостевой $rows записей.&quot;;

</pre>
<dt>Но что делать, если искомый текст не занимает все поле, а является частью этого поля (например, при поиске слова или словосочетания в общем массиве текста)?
<dt>Например я использую следующую команду (наверно этот способ не самый лучщий, но тем не менее он работает):
<dt><pre class=primer>
// $search - содержит искомый тест
$sql=&quot;select * form db_guest where (locate(&#39;$search&#39;,content)&gt;0)&quot;;
$result=mysql_query($sql);
</pre>
<dt>Смысл такой: если кол-во вхождений строки $search в поле content больше 0 (т.е. оно вообще есть), то запись добавляется к остальным найденым записям.
<dt>Надо отметить, что указанный способ ищет текст с учетом регистра. Чтобы искать без учета регистра, можно воспользоваться следующей командой:
<dt><pre class=primer>
// $search - содержит искомый тест
$sql=&quot;select * form db_guest where (locate(lower(&#39;$search&#39;),lower(content))&gt;0)&quot;;
$result=mysql_query($sql);

</pre>
<dt>т.е. искомая строка и запись в таблице переводится в верхний регистр и затем производится поиск.
<dt><BR><BR>Теперь представим, что у нас есть база сообщений  гостевой книги, и нам надо отсортировать сообщения по времени, когда они были оставлены.
<dt>Для этого одно из полей таблицы базы должно содержать время записи сообщения.
<dt>Сортировка по какому-либо столбцу осуществляется при помощи конструкции <B>order by</B>.
<dt>В нашем случае, при учете, что более &quot;свежие&quot; сообщения будут сортироваться верхними:
<dt><pre class=primer>
// time - столбец, содержащий время написания записи
// в формате &quot;UNIX timestamp&quot;
$sql=&quot;SELECT * FROM db_guest ORDER BY data DESC&quot;;
$result=mysql_query($sql);

</pre>
<dt>Т.е. данные были отсортированны по убыванию.
<dt>Если нам надо отсортировать данные по возростанию, надо вместо ключевого слова <B>DESC</B> применить <B>ASC</B>:
<dt><pre class=primer>
$sql=&quot;SELECT * FROM db_guest ORDER BY data ASC&quot;;
$result=mysql_query($sql);
</pre>
<dt>Данные также можно отсортировать по нескольким столбцам. Для этого надо названия столбцов указать через запятую.
<dt>Это может пригодиться, например, если в столбце, по которому производится сортировка, есть несколько одинаковых значений.
<dt><pre class=primer>
$sql=&quot;SELECT * FROM db_name ORDER BY field1,field2 ASC&quot;;
$result=mysql_query($sql);

</pre>
<dt>Сначало данные сортируются по первому столбцу <I>field1</I>. Затем, если в первом столбце есть несколько одинаковых значений, выполняется дополнительная сортировка по второму столбцу (внутри группы с одинаковыми значениями в первом столбце).
<dt><BR><BR>Если требуется, чтобы при поиске выдавались не все найденные записи, а определенная группа, то нужно использовать параметр <B>LIMIT</B>.
<dt>В этом параметре задается два значения:
<dt>LIMIT <I>start</I>,<I>length</I>
<dd><I>start</I> - указывает, с какой позиции нужно выдавать найденные записи
<dd><I>length</I> - кол-во записей<BR><BR>

<dt>Например, нам нужно выбрать из базы данных гостевой книги записи начиная с 20 по 45 (т.е. чтоб вывести 25 записей):
<dt><pre class=primer>
$sql=&quot;select * from db_guest limit 20,25&quot;;
$result=mysql_query($sql);
</pre>



<br><br><hr><br><center>

<br><a class="a1" href="#33333">Наверх</a><br>
<br>
</td>
</tr>
</table>
	</td>
</tr>
</table>                  
        </body>     
  
</html>
