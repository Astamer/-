﻿<html>
<title>Система дистанционного обучения кафедры </title>
<head bodycolor="000011">
<link rel="stylesheet" href="../../../../css/styles.css">
        <body BACKGROUND="../../image/background.PNG">
<header>
        <nav>
            <ul>
                <li><a href="photo1.php"><span>Лекция № 1</span></a></li>
      <li><a href="photo2.php"><span>Лекция № 2</span></a></li>
      <li><a href="photo3.php"><span>Лекция № 3</span></a></li>
      <li><a href="photo4.php"><span>Лекция № 4</span></a></li>
<li><a href="../../courses.php"><span>Назад</span></a></li>
            </ul>
        </nav>
    </header>

<a name="33333"></a>
<h1 style="margin-bottom: 10px; color: #445C4C">Лекции по теме: Веб-графика<h1>

<table align="justify" width="900" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
<tr>
<td colspan="2" align="center"><br>

<strong><h2>Лекция № 2</h2> </strong><br><br><hr><br><br>
<textarea rows="60" cols="80">

<p> <div align="left" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;

<strong>Одной из разновидностей векторной является трехмерная (3D) графика. </strong></span>В этих файлах просто вводится еще одна координата, но при этом получается не изображение, а целая сцена с большим количеством нюансов, и, соответственно, большим объемом вычислений.&nbsp;<br />
&nbsp;</div>



<div style="text-align: justify">Но при всем многообразии графических форматов для представления изображений в Web используeтся малое их количество. Основным ограничителем здесь выступает размер файла. А потому выбор формата при подготовке изображения для Web определяется оптимальным соотношением двух взаимоисключающих параметров: размеров изображения и объема файла.&nbsp;<br />
&nbsp;<br />
<strong>Из теории вероятности известно, </strong>что большинство схем представления информации обладают той или иной степенью избыточности. К примеру, составляя конспект на лекциях, мы пользуемся некой системой сокращений слов и фраз, не теряя при этом смысла содержания. Этот принцип положен в основу большинства систем сжатия информации, в том числе и форматов графических файлов, используемых в Web.&nbsp;<br />
&nbsp;<br />
При одинаковом принципе алгоритмы его реализации разрабатываются разными людьми, а потому имеют весьма существенные различия между собой. Более того, не стоит забывать, что каждый формат имеет и другие особенности, поэтому при его выборе следует учитывать прежде всего исполнение рисунка.<br />

&nbsp;<br />
<strong>GIF (Graphics Interchange Format, формат взаимообмена графикой)</strong> разработан CompuServe Incorporated, последняя версия GIF-89a. Первоначально, как можно понять из названия, этот формат разрабатывался для передачи графической информации в потоке данных, а потому, в отличие от остальных, представляет собой последовательную организацию, а не произвольную, что позволяет использовать минимум ресурсов процессора при его распаковке.&nbsp;<br />
&nbsp;<br />
Для компрессии файлов <strong>GIF</strong> использует <strong>LZW-алгоритм сжатия, </strong>или, как его еще называют, сжатие без потерь, при этом он наиболее эффективен при больших однотонных областях с четкими границами. А так как сканирование изображения происходит по горизонтали, то и сжатие будет более эффективно при больших горизонталях таких областей. Однако GIF не способен хранить неиндексированные изображения, то есть может отображать не более 256 цветов.&nbsp;<br />
&nbsp;<br />
Эта ограниченность формата не позволяет добиться плавного перехода от одного цвета к другому, что особенно заметно при использовании градиентов и размывок. Можно, конечно, использовать прием &quot;диффузия&quot;, но эффект &quot;зернистости&quot;, получаемый при этом, выглядит, скорее, как стилизация, а потому не всегда оправдан в общем контексте сайта.&nbsp;<br />

&nbsp;<br />
Кроме того, при использовании диффузии увеличивается неоднородность изображения, что ведет к снижению эффективности компрессии. Обратной стороной ограниченности палитры в GIF может служить ее гибкость. Изменяя размер таблицы, а, следовательно, и количество цветов в ней, web-дизайнер получает в свои руки прекрасный инструмент для регулировки соотношения качество изображения / размер файла.&nbsp;<br />
&nbsp;<br />
Так, уменьшая в изображении размером 100x100 пикселей количество цветов с 256 (8 бит на пиксель) до 128 (7 бит на пиксель), получаем 100x100x8 - 100x100x7 = 10 000 бит экономии.<br />
&nbsp;<br />
Еще одной особенностью, введенной в последнюю версию формата, является создание прозрачных областей в изображениях, открывающее интересные возможности в web-дизайне. &quot;Потоковая&quot; природа GIF, относительно малые размеры его файлов, возможность компрессии за счет использования прозрачных областей в кадрах сделали его прекрасным инструментом для создания анимации в Web.&nbsp;<br />
&nbsp;<br />
Использование GIF целесообразно, прежде всего, для так называемых плоскоцветных изображений с четко обозначенными границами переходов между цветами, а также малоразмерных изображений типа кнопок, превьюшных картинок и т. п.<br />
&nbsp;<br />
<strong>JPEG (Joint Photographic Experts Group).</strong> Разработан группой экспертов по фотографии (что видно из названия) под эгидой ISO (Международная организация по стандартам). Вообще этот формат довольно уникален тем, что использует алгоритм сжатия, отличающийся от применяемых во всех остальных графических форматах, - сжатие с потерями.&nbsp;<br />

&nbsp;<br />
<em>Этот алгоритм ранее использовался на телевидении в схеме телевизионной трансляции США (NTSC).</em> <br />
<br />
Основан он на все той же ограниченности человеческого зрения, неспособности глаза не замечать некоторые искажения в восстановленном изображении. На сегодня этот алгоритм является одним из самых эффективных (коэффициент сжатия достигает 1:100), он не очень хорошо обрабатывает изображения с малым количеством цветов и резкими границами.&nbsp;<br />
&nbsp;<br />
<strong>Вообще JPEG можно назвать противоположностью GIF.</strong> <br />
<br />
Он позволяет отображать 24-битную палитру, т. е. все 16,8 млн. цветов, что дает возможность отображать градиенты с фотографической точностью, но при этом не может иметь прозрачных областей. Однако этот формат таит в себе одну особенность, которую нельзя не учитывать. При повторном сохранении изображения в JPEG он повторно запускает алгоритм сжатия, естественно, с ухудшением качества. Поэтому сохранять изображение в нем следует только после окончательной обработки.<br />
&nbsp;<br />
<strong>Оба растровых формата, и GIF, и JPEG, </strong>поддерживаются всеми графическими броузерами &quot;по умолчанию&quot; и могут быть обработаны в большинстве графических редакторов. Выбор между форматами определяется прежде всего особенностями конкретной картинки, и сделать его иногда бывает возможно только путем эксперимента.<br />

&nbsp;<br />
<strong>Векторные форматы все чаще обращают на себя внимание web-дизайнеров. </strong>В последнее время весьма популярным стал формат Shockwave Flash, разработанный фирмой Macromedia. Обладая такими преимуществами векторных форматов, как масштабируемость и относительно небольшой объем файла, он все-таки не является чисто графическим.<br />
&nbsp;<br />
<strong>Инструментарий для рисования в программе Macromedia Flash Direct</strong> ближе к растровым редакторам, нежели к векторным, а способность создавать анимации, озвучивать их, заставлять реагировать на перемещение мыши и способность работать с гиперссылками делают Flash похожим на мультимедийный формат.&nbsp;<br />
&nbsp;<br />
В качестве отдельных элементов сайта Flash-заставки используются в основном как интерактивные баннеры в некоторых рекламных сетях. Такого вида баннерам пророчат большое будущее из-за их большей возможности влиять на пользователей Сети, нежели классических, выполненных в GIF.&nbsp;<br />
&nbsp;<br />
Гораздо чаще этот формат находит применение для создания целой страницы или большей ее части (классическим примером, на мой взгляд, является &quot;Диснеевский&quot; сайт http://www.disney.com/). Камнем преткновения для Flash является наличие дополнительного модуля для его просмотра, который хоть и распространяется бесплатно, но при весе 0,24 М и необходимости загрузки через Сеть может отбить желание просматривать Flash-заставки.&nbsp;<br />

&nbsp;<br />
Но появление встроенного модуля уже в 4.5 версии &quot;Коммуникатора&quot; и обещания Microsoft сделать аналогичное и в IE 5.0 может вполне выдвинуть Flash в лидеры среди графических форматов для Internet и несколько изменить само представление о web-дизайне.<br />
&nbsp;<br />
<strong>Не остались забытыми и трехмерные объекты. </strong>Для их создания в Интернете в ноябре 1994 года состоялась презентация VRML 1.0 (Virtual Reality Modeling Language - язык моделирования виртуальной реальности). Последняя версия VRML 2.0 позволяет создавать сложные виртуальные миры со звуковыми эффектами. Для написания файлов этого формата может быть достаточно простого текстового редактора (подобно HTML, они не требуют дальнейшей компиляции), но существуют также специальные программы, помогающие этот процесс визуализировать и автоматизировать.<br />
&nbsp;<br />
<strong>Кроме того, некоторые 3D-пакеты поддерживают формат VRML 2.0.</strong> Для просмотра виртуальных миров необходимы дополнительные модули, включенные в состав последних версий NC и IE. Но при всей своей привлекательности 3D-миры пока еще не нашли широкого применения. Основными недостатками являются невозможность встраивания таких миров в HTML-страницу и, соответственно, &quot;переплетение&quot; с общим дизайном сайта, в отличие, например, от Flash. Другой неприятной особенностью является довольно большое количество вычислительных ресурсов компьютера для качественного рендеринга (визуализации) трехмерной сцены.<br />

&nbsp;<br />
<strong>Говоря о графике в Web,</strong> обычно не упоминают о шрифтах как графических объектах. Связано это прежде всего с тем, что до недавнего времени в HTML-страницах предполагалась весьма ограниченная возможность управления параметрами шрифтов. Но уже в спецификации CSS level2 вводится понятие встраивания шрифтов, открывающее возможность использовать не только стандартные.&nbsp;<br />
&nbsp;<br />
Существующие программы позволяют создавать даже символьные шрифты, получая вместо букв монохромные масштабируемые изображения. Но и эту идею не обошла &quot;война броузеров&quot;. Разная реализация &quot;подгружаемых&quot; шрифтов в NC и IE, к сожалению, не позволяет использовать эти возможности в полной мере.<br />
&nbsp;<br />
<span style="color:#993300;"><strong>Конечно, приведенные здесь рассуждения не могут охватить весь океан под названием &quot;web-графика&quot;. </strong>
</textarea>

<br><br><hr><br><center>
</td>
</tr>
</table>
	                  
        </body>     
  
</html>
