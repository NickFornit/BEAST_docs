<?
// http://scorcher/adaptologiya/beast/about_conditions_reflex.php  
// https://scorcher.ru/adaptologiya/beast/about_conditions_reflex.php

// в тексте не должно оказаться link_list а [axiom_id=128] строго быть в скобках!


$page_name="Про свойства условных рефлексов";// « »  “ ”
$keywords="Про свойства условных рефлексов";
$description="Про свойства условных рефлексов#";//Чтобы не добавлялось автоматичсеки ничего кроме введенного описания, нужно в конце поставить знак #

$origin_url="";// можно список через ", "
// тип семантической разметки для роботов (только для оригинальных текстов)
$semantic_marking_type="EducationEvent";// Event EducationEvent SocialEvent 

$text_extend="";
$back_url="/adaptologiya/reflyeksy_i_avtomatizmy__obobshyeniye/reflyeksy_i_avtomatizmy__obobshyeniye.php";
$back_name="Рефлексы и автоматизмы";
$header=$page_name;

$statPageName=$page_name;
$stat_url="/adaptologiya/beast/beast_scheme/about_conditions_reflex.php";
$date_pablick="2022-12-08";
$date_update="";

$setDescribtionToSnippet=1;// использовать описание как снипет даже если есть ссылка на превоисточник
$noShowWarningBlock=1;// для /mist/warn_header.php
$noSnippetFromNews=1;// не использовать новость для сниппета



$need_insert_discas=0;// 1 - принудительно запретить обсуждение. Иногда оно вылазит, если название распознается без начала "art_name LIKE '%".$main_page_name."'"
/*
$title_priotitet="Титул страницы" - делает именно такой <title , а не автоматически - название страницы с пефиксом темы
$noreckam - без яндекс директа и футерных ссылок
$noindex - запрет индексации страницы
$noShowWarningBlock=1;// для /mist/warn_header.php Не показывать блок ВНИМАНИЕ!
*/

//!!!! теперь в art_template.php ЗАБИТО $need_insert_discas=1 потому что underlining_dic_words()
$no_replace_for_dictionfry=1;// !!!!


require($_SERVER["DOCUMENT_ROOT"]."/art/art_template.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sys/dbi.php");  
$dbi_main = new dbi_work;
$dbi_main->connect();
include_once($my_DOCUMENT_ROOT."dictionary/dictionary_func.php");

//!!!! если нужно вставлять фрагменты:
//$inserted_txt=file_get_contents("http://".$SERVER_NAME."/testing/show_test_stat.php?only_2_path=1");
?>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
h2
	{mso-style-link:"Заголовок 2 Знак";
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	line-height:115%;
	page-break-after:avoid;
	font-size:13.0pt;
	font-family:"Cambria",serif;
	color:#365F91;
	font-weight:normal;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
span.2
	{mso-style-name:"Заголовок 2 Знак";
	mso-style-link:"Заголовок 2";
	font-family:"Cambria",serif;
	color:#365F91;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<?
echo "<center>";
if(!isset($printing)||!$printing)
{
echo "<script language=\"JavaScript\"><!--
var screenX=document.getElementsByTagName('body')[0].clientWidth;
if(screenX>0 && screenX<800)
document.write('<div align=left class=WordSection1 style=\"font-family:arial;font-size:12pt;\">');
else
document.write('<div align=left class=WordSection1 style=\"width:800px;font-family:arial;font-size:14pt;\">');
//--></script>";
}
else
echo "<div align=left class=WordSection1 style=\"font-family:arial;font-size:12pt;\">";

//  rel="nofollow" target="_blank"
$str = <<<EOD

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>По <a href="https://bio.wikireading.ru/6243">обобщающему
материалу</a> были подготовлены резюмирующие тезисы по явлению торможения “условного”
рефлекса.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>Кавычки применены потому, что под условным рефлексом
понимается все приобретенные реакции, кроме безусловных рефлексов, т.е.
молчаливо считается, что есть наследственно определенное реагирование на
определенные стимулы, назовем это безусловными рефлексами (несмотря на то, что
у них есть четкие условия для запуска), а остальное реагирование пусть будет
условными рефлексами, независимо от того, насколько различаются их механизмы. И
тогда по такой классификации все осознанное реагирование оказывается тоже
рефлексами. Возникающую путаницу обычно просто замалчивают или обходит другим
названиями явлений. Но понятно, что отзеркаливание действий от авторитета имеет
совершенно иные механизмы, чем простейший “условный рефлекс”, возникший на
основе какого-то “безусловного”. Даже в безусловными рефлексами возникает
путаница потому, что ими называется только то, что вызывает внешне наблюдаемые
действия, но выделение слюны при виде пищи, в первую очередь, внутренняя
комплексная реакция подготовки к приему пищи – довольно сложная система
безусловных рефлексов. Огромное же количество врожденных внутренних реакций,
обеспечивающих различные системы управления, в том числе рефлексы мозжечка, как
бы уже не рефлексы.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>Следовало бы вообще отказаться от слова рефлекс из-за
такого расплывчатого определения, которое приносит больше вреда пониманию
механизмов, чем пользы классификации. Но в работе над схемотехникой природных
адаптивных нейросетей необходимо очень внимательно отслеживать фактические
данные исследований, которые являются важными элементами общего пазла
представлений. Поэтому в данном случае, рассматривая схемотехнический механизм
организации реакций, возникающих на основе уже существующих наследственно
предопределенных реакций – как синоним пусковых стимулов, мы называем такие
реакции традиционно “условными рефлексами”, но строго выделяем принципиальный
механизм и функциональные свойства от других реакций, имеющих иные принципы и,
соответственно, совершенно иные механизмы реализации.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>В таком аспекте будет откомментирован список условий,
названных в источнике как “ Торможение условных рефлексов”. После каждого
пункта тезисов будет комментарий синего цвета.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>У собаки с хорошо выработанным условным слюнным
рефлексом каждое применение сигнала вызывает обильное выделение слюны. Однако
если включить сигнал и одновременно причинить собаке боль, то из ее слюнного
протока не выделится ни капли слюны: условный рефлекс исчез. Угнетение
условного слюноотделительного рефлекса произошло вследствие безусловного
торможения, связанного с возникновением жизненно важного для организма
оборонительного рефлекса.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>На самом деле
при возникновении связи от пусковых стимулов “условного рефлекса” не могут
возникать тормозные связи от далеких по локализации систем, причем от вех
“жизненно важных”, - это нонсенс непонимания элементарной схемотехники и вообще
логики возможной реализации. Более древние реакции не могут перекрывать более
новые образования, они не подозревают о них. Приоритет и блокировка возникает
на более высоком уровне организации и близко к эффекторным схемам. Все более
высокоуровневые цепи управления получают преимущество над более древними,
подавляя их и такие цепи были инициированы от более значащих сигналов от
повреждающих воздействий. В данном конкретном случае произошло переключение
Базовых контекстов (стилей поведения) и пищевой контекст был заменен оборонительным,
в котором просто нет реакций подготовки к пищеварению, но в этом контексте есть
реакция “оборонительного рефлекса”. К сожалению, для физиологов принципы
схемотехники и организации схем управления совершенно недоступны, точно так же
как попытка понять, как работает схема радиоприемника.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Вот почему
(смотрим следующий пункт)</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>Во время опыта <b>у собаки без всякой видимой
причины исчезают все условные рефлексы</b>. Но стоит вывести ее на улицу и
освободить мочевой пузырь, как все рефлексы немедленно восстанавливаются: они
были заторможены импульсами от интерорецепторов растянутого мочевого пузыря.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Этим описывается
типичный случай эффекта переключения стилей поведения. В каждом таком стиле
создаются и выполняются свои специфические реакции, которых нет в другом стиле.
Ни о каком торможении рефлексов здесь не может идти речь.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>Если во время опыта с условным слюноотделением
слегка постучать по стене, то собака немедленно насторожится, а условное
слюноотделение прекратится. Однако если такое постукивание повторяют
многократно, то реакция на постукивание постепенно ослабевает, слюноотделение
тормозится все меньше и, наконец, совсем растормаживается. Часто повторяемый
ориентировочный рефлекс становится привычным и теряет свое тормозящее действие.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>“Ориентировочный
рефлекс” – более позднее образование, чем примитивный “условных рефлекс”
создания синонима пускового стимула от безусловного или другого условного
рефлекса. При участии ориентировочного рефлекса в лобных долях формируется
текущий контекст условий, к которым было привлечено внимание. А простейший
условный рефлекс образуется в третичной теменной коре. Это – не только
совершенно разные области, но и совершенно разные механизмы управления
реагированием. О рефлексах здесь говорить точно не следует. Поэтому механизмы
формирования реагирования на основе ориентировочного рефлекса называют
автоматизмами. Автоматизмы, как более высокоуровневые образования, при
активации подавляют более примитивные реакции, которые бы реализовались без
такого подавления. В данном конкретном случае после привлечений внимания к
настораживающему признаку, при осмыслении ситуации этот признак в данных
условиях, не приводя к реальной угрозе, с каждой активаций утрачивает свою
значимость и автоматизм перестает срабатывать. Он может перестать срабатывать и
за один раз, если его активация приведет к нежелательным последствиям.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Если
собаке с хорошо выработанным условным пищевым слюноотделительным рефлексом
подавать условный раздражитель, не сопровождая его подкармливанием, то слюны
будет выделяться все меньше, а само выделение будет наступать со все большим
латентным периодом. Отсутствие подкрепления рано или поздно приводит к тому,
что сигнал перестает совсем оказывать влияние на слюнную железу: условный
рефлекс исчезает. <span style='color:black;background:white'>Если у собаки с
прочно выработанным совпадающим слюнным условным рефлексом увеличивать
изолированное действие условного раздражителя до 1, 2 и даже 3 мин, считая от
момента включения сигнала до момента подкрепления, то слюноотделение начнет все
более «запаздывать».</span></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Стоит заметить,
что общепризнанно безусловные рефлексы не угасают сами по себе, связи остаются
эффективными. Примитивный условный рефлекс ничем не отличается по
функциональности от безусловного, кроме того, что он сформировался в течении
жизни и заимствовал пусковые стимулы у предшествующей реакции и тем, что на
него более выражено действуют дезадаптирующие свойства установленных связей,
которые тем более сильны, чем моложе связь (fornit.ru/7224, fornit.ru/5313,
fornit.ru/7511). </span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Собака перестает
бежать к еде по звонку <b>если не видит еду</b> несколько раз после звонка. Тут
действует именно то, что она не видит еду, а не сам сигнал звонка, который лишь
привлекает осознанное внимание. Собака оценивает ложность звонка, т.е. у нее в
данном случае не условный рефлекс, а осознанный автоматизм утрачивает свою
значимость, который исследователи путают с рефлексом.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Разные
условные рефлексы без подкрепления угасают с неодинаковой скоростью. Более
&quot;молодые&quot; и непрочные условные рефлексы угасают быстрее, чем более
&quot;старые&quot;, прочные условно-рефлекторные связи.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Вот это –
системное наблюдение, относящееся именно к свойствам реакции. Его
функциональное назначение – дезадаптация к тому, что более не используется и не
приносит пользы. На уровне автоматизмов есть специальный механизм оценки
значимости последствий, а на уровне простейшего рефлекса остается более
примитивный по механизмам аналог, использующий свойства связей между нейронами.
</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>У
собаки выработали условный рефлекс пищевого слюноотделения на стук метронома 60
ударов/мин. Каждое включение метронома с такой частотой вызывает условное
слюноотделение. Но если применить другой метроном с частотой 120 ударов/мин, то
и он тоже вызовет отделение слюны, хотя сам никогда не сочетался с едой. Однако
достаточно несколько раз не подкрепить действие метронома с частотой 120
ударов/мин, как он перестает быть сигналом еды и наступает дифференцирование
этого раздражителя от метронома с частотой 60 ударов/мин, сопровождающегося
едой. Теперь метроном с частотой 120 ударов/мин никакого слюноотделения уже не
вызывает, что является результатом дифференцировочного торможения.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>В данном случае
был создан синоним стимула подготовки к пищеварению – метроном и у этого
метронома более простым для детекции является характер самого звучания, а не
его ритм. Но у собаки вполне можно создать реакцию, основанную именно на ритме,
и это будет не условный рефлекс, а автоматизм.</span></p>

<p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt'><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>Если при хорошо укрепленном условном слюнном
рефлексе, выработанном на стук метронома, время от времени применять метроном
вместе с дополнительным раздражителем, например бульканьем, не сопровождая эту
комбинацию пищевым подкреплением, то вскоре сам метроном по-прежнему будет
вызывать отделение слюны, а в сочетании с бульканьем потеряет свое
положительное действие. У собаки с условным пищевым рефлексом слюноотделения на
звук тона было выработано дифференцирование неподкрепляемого пищей звука 1/8
тона. В многочисленных пробах тон положительный сигнальный постоянно вызывал
отделение слюны, а применение 1/8 тона такого действия не имело. Затем были
взяты посторонние раздражители&nbsp;— звук бульканья и запах амилового эфира.
Испытанные каждый по отдельности, они не только не вызывали отделения слюны, но
в качестве гаснущего тормоза даже временно задерживали положительные
слюноотделительные рефлексы. Однако если присоединить один из этих видов
тормоза к тоже тормозному дифференцировочному раздражителю 1/8 тона, то
последний растормаживается. Он превращается в положительный раздражитель и
вызывает отделение слюны, пока действует внешний тормоз.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Конечно, на
примитивном уровне, корректно используя множество сочетаний, можно выработать
рефлекс на основе заданного профиля возбуждения пусковых стимулов. Но у
животных, обладающих ориентировочным рефлексом, уже на ранней стадии онтогенеза
формируются более эволюционно совершенные модели реагирования с образованием
автоматизмов, когда при достаточной значимости раздражителя реакция способна
сформироваться за один раз. Попробуйте ударить кошку и станете ее врагом сразу
и надолго, без угасания реакции.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>8.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>Показывая студентам опыт с угасанием условного
слюноотделительного рефлекса, И.П. Павлов обратил внимание слушателей на
следующую подробность. Как правило, с каждым применением сигнала без
подкрепления величина рефлекса становилась все меньше. Но неожиданно при очередном
неподкреплении слюна вдруг пошла быстрее. Это совпало с небольшим шумом в
аудитории, т.е. внешним торможением. Потом опять наступила тишина и угасание
рефлекса продолжалось вновь. Когда у собаки хорошо выработано запаздывание
условного слюнного рефлекса, то при включении условного раздражителя собака не
будет на него реагировать, пока не приблизится срок подкрепления. В течение
одной, двух и даже трех минут непрерывного действия сигнала слюна не
выделяется. Однако если в это время к бездействующему сигналу присоединить
постороннее раздражение, то слюна потечет немедленно.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>Бывает не просто
соблюдать стабильность условий во время опытов. Пищевой рефлекс сформировался в
базовом контексте пищевого стиля поведения, который ветвится на более частный
контексты при появлении новых условий. И в разных ветках этот рефлекс – свой
уникальный. Так что если начать угасать рефлекс в одной ветке, то он остается
неизменным во всех других. Как только возник шум, произошло переключение на
другую ветку, где пищевой рефлекс оставался нетронутым.</span></p>

EOD;
echo underlining_dic_words($str);

// include_once($GLOBALS["DOCUMENT_ROOT"]."/neuro/neuro_sys/psih_javleniya.php");

echo "</div></center><br><br>";

$dbi_main->close(); 
include_once($GLOBALS["DOCUMENT_ROOT"]."/articles/atr_util.php");
//$add_after_discas_link_text="<span style='font-size:12pt;'><br>Еще было <a href='/forum/Sources/printpage.php?board=4&threadid=1914' target='_blank'><b>обсуждение на форуме</b></a></span>";
$stst = articl_discas("",0,"Обсуждение","Обсуждение $page_name",'000000',"999999","ECE9F5", "D9D7EC", 1);
footer();
?>
