<?
// http://scorcher/adaptologiya/beast/report.php  
// https://scorcher.ru/adaptologiya/beast/report.php

// в тексте не должно оказаться link_list а [axiom_id=128] строго быть в скобках!


$page_name="Эволюция адаптивных систем на основе гомеостаза:
отчет по реализации прототипа";// « »  “ ”
$keywords="Эволюция адаптивных систем на основе гомеостаза:
отчет по прототипу";
$description="Описаны результаты схемотехнической реализации действующего прототипа природной
организации эволюционных последовательностей организации механизмов
индивидуальной адаптивности.";//Чтобы не добавлялось автоматичсеки ничего кроме введенного описания, нужно в конце поставить знак #

$origin_url="";// можно список через ", "
// тип семантической разметки для роботов (только для оригинальных текстов)
$semantic_marking_type="EducationEvent";// Event EducationEvent SocialEvent 

$text_extend="";
$back_url="/adaptologiya/shemotehnika_adaptivnyh_neyrosetey.php";
$back_name="Схемотехника адаптивных нейросетей";
$header=$page_name;

$statPageName=$page_name;
$stat_url="/adaptologiya/beast/report.php";
$date_pablick="2023-01-01";
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
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Calibri Light";
	panose-1:2 15 3 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}

h2
	{mso-style-link:"Заголовок 2 Знак";
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	line-height:107%;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Arial",sans-serif;}
h3
	{mso-style-link:"Заголовок 3 Знак";
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	line-height:107%;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	color:#1F3763;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:12.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:24.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-link:"Заголовок Знак";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpFirst, li.MsoTitleCxSpFirst, div.MsoTitleCxSpFirst
	{mso-style-link:"Заголовок Знак";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpMiddle, li.MsoTitleCxSpMiddle, div.MsoTitleCxSpMiddle
	{mso-style-link:"Заголовок Знак";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpLast, li.MsoTitleCxSpLast, div.MsoTitleCxSpLast
	{mso-style-link:"Заголовок Знак";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
a:link, span.MsoHyperlink
	{color:#0563C1;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:#954F72;
	text-decoration:underline;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Текст выноски Знак";
	margin:0cm;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	line-height:107%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoTocHeading, li.MsoTocHeading, div.MsoTocHeading
	{margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	line-height:107%;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Calibri Light",sans-serif;
	color:#2F5496;}
span.a
	{mso-style-name:"Заголовок Знак";
	mso-style-link:Заголовок;
	font-family:"Times New Roman",serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
span.2
	{mso-style-name:"Заголовок 2 Знак";
	mso-style-link:"Заголовок 2";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
span.3
	{mso-style-name:"Заголовок 3 Знак";
	mso-style-link:"Заголовок 3";
	font-family:"Times New Roman",serif;
	color:#1F3763;
	font-weight:bold;}
span.1
	{mso-style-name:"Заголовок 1 Знак";
	mso-style-link:"Заголовок 1";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
span.10
	{mso-style-name:"Неразрешенное упоминание1";
	color:#605E5C;
	background:#E1DFDD;}
span.a0
	{mso-style-name:"Текст выноски Знак";
	mso-style-link:"Текст выноски";
	font-family:"Tahoma",sans-serif;}
.MsoChpDefault
	{font-size:12.0pt;
	font-family:"Arial",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:2.0cm 42.5pt 2.0cm 3.0cm;}
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

<p class=MsoTocHeading>Оглавление</p>

<p class=MsoToc1><span class=MsoHyperlink><a href="#_Toc121642934">Эволюция
адаптивных функций на основе гомеостаза: прототип<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642935">Краткое
описание проекта<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642936">Новый
инструмент<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642937">Это – не
просто очередная компьютерная эмуляция проявлений разумности<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642938">Трудности
реализации<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642939">Причем здесь
нейроны?<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642940">Есть ли разум
у <span lang=EN-US>Beast</span><span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642941">Есть ли
самоощущение у <span lang=EN-US>Beast</span><span style='color:windowtext;
display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642942">Для желающих
присоединиться<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642943">О
предшествующей реализации<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642944">Особенности
новой версии реализации<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642945">Используемые
принципы теории адаптивных систем<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642946">Главные
принципы адаптивной регуляции поведения<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642947">Информационный
принцип эволюции адаптивности<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642948">Принцип
использования уникальных символов образов<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642949">Принцип
древовидного распознавателя<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642950">Принцип
сопутствующей образу значимости<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642951">Принцип
фиксации Правил<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642952">Принцип
доминирующей нерешенной проблемы<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642953">Реализованные
уровни адаптивности<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642954">Особенности
программной реализации<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642955">Описание
схемы:<span style='color:windowtext;display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642956">Общая схема:<span
style='color:windowtext;display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642957">Базовая
структура<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642958">Проект не
эмулирует, а представляет собой живое существо<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642959">Сенсорные
распознаватели<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642960">Эффекторы<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642961">Две области
моторного терминала уровня психики:<span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642962">Ментальные
управляющие действия<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642963">Область
наследственно предопределенных реакций<span style='color:windowtext;display:
none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642964">Безусловные
(наследственные) рефлексы<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642965">Древние
безусловные рефлексы<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642966">Условные
рефлексы<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642967">Для
образования условных рефлексов необходимо<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642968">Условия
затухания условного рефлекса<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642969">Алгоритм
формирования условного рефлекса<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642970">Распознавание
условного рефлекса<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642971">Общее
описание реализации<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642972">Автоматизмы<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642973">Автоматизмы
– новое понятие для академической науки<span style='color:windowtext;
display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642974">Общее описание
реализации<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642975">Рефлексы
мозжечка<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642976">Дерево
понимания<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642977">Правила<span
style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642978">Объекты
произвольной значимости<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642979">Эпизодическая
память<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642980">Модели
понимания<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642981">Смысл новых
слов<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642982">Адаптационный
потенциал Системы Информационного Окружения (СИС)<span style='color:windowtext;
display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642983">Четыре
уровня обработки информации актуальных объектов внимания<span style='color:
windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642984">Ментальные
автоматизмы и циклы ментальной рекурсии<span style='color:windowtext;
display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642985">Доминанта
нерешенной проблемы и гештальт<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642986">Планы
дальнейшей реализации<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642987">Описание
основных направлений<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642988">Почему
обезьяна никогда не станет человеком (или почему так важно найти оптимальную
версию данного уровня адаптивности).<span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642989">Что дальше?<span
style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoNormal>&nbsp;</p>

<h2><a name="_Toc121642935">Краткое описание проекта</a></h2>

<p class=MsoNormal>Если очень коротко, то реализована действующая в реальном
времени модель живого существа (см. терминологическое определение) с
потенциалом адаптивности, характерном для 3-5-летнего возраста ребенка, но с
ограниченными каналами восприятия: только словесный ввод и пара десятков
раздражителей условного значения. У существа, названного <span lang=EN-US>Beast</span>
(тварь), есть собственный гомеостаз с 8-ю жизненными параметрами, откуда и
начинается вся индивидуальная система адаптации.</p>

<p class=MsoNormal>Проект не эмулирует, а представляет собой живое существо
(fornit.ru/64924) несуществующего в природе вида.</p>

<p class=MsoNormal>Осуществлена схемотехническая реализация (программным
методом) прототипа эволюционной иерархии адаптивных функций от системы
гомеостаза и безусловных рефлексов до доминанты нерешенной проблемы. <a
href="/adaptologiya/proizvolnaya_adaptivnost/proizvolnaya_adaptivnost.php">Теоретическая
модель</a> основывается на накопленном <a
href="/axiomatics/axioms_list.php?id=1">массиве фактических данных исследования</a>
и собственных обобщениях.</p>

<p class=MsoNormal>Были уточнены условия и свойства условных рефлексов, внеся
терминологическую ясность в определения этого вида реагирования. Затем были схемотехнически
проработаны и реализованы эволюционно более сложные механизмы адаптивности.</p>

<p class=MsoNormal>Главной задачей проекта была верификация теоретической
модели (fornit.ru/7431) методом моделирования эволюционно усложняющихся
принципов адаптации по фактическим данным исследования природных механизмов.
Т.е. ставилась задача не изобретать что-то новое, а как можно точнее воспроизвести
уже оптимизированные природой принципы. Этот путь ограничивается только
наличием доступных данных исследований для их обобщения.</p>

<p class=MsoNormal>Основой реализации был взят принцип использования
информационных данных предшествующего уровня механизмов адаптивности для
функционирования более эффективных последующих. Было прослежено, что количество
информации различных видов, образующейся при активации данного уровня
адаптивности, растет лавинообразно в зависимости от порядкового номера уровня и
к пятой стадии развития достигает неисчерпаемости возможностей использования
такой информации.</p>

<p class=MsoNormal>Были унифицированы такие понятия как образ восприятия, образ
действия и образы промежуточных данных. Это позволяет использовать не всю
совокупность активных данных, а только их уникальные числовые идентификаторы,
символизирующие всю совокупность данных (как говорят в нейробиологии –
кодирование номером связи детектора, а не всем профилем активности на его входе).
Такое решение – основа построения последовательных слоев природной нейросети,
где каждый нейрон символизирует всю активность его рецепторного поля, на
которое он настроен, и сигнал нейрона символизирует распознаваемую активность
на его входах.</p>

<p class=MsoNormal>Для определения значимости текущего объекта восприятия в
данных условиях использовались структуры в форме дерева условий с
использованием уникальных идентификаторов образов для распознавания активной ветки
дерева. В природной реализации такие же функции дерева выполняют слои новой
коры мозга (fornit.ru/43642), оперирующие с образами и поэтому имеющие
фиксированное число слоев по числу уровней распознавания значимых условий. В
проекте реализовано пять видов деревьев.</p>

<h3><a name="_Toc121642936">Новый инструмент</a></h3>

<p class=MsoNormal>Проект является инструментом для исследования механизмов,
определяющих субъективные явления и демонстрации базовых принципов построения
систем индивидуальной адаптивности. Это не модель именно человеческой психики,
а пример программной реализации природной нервной системы без привязки к
конкретному виду живого существа.</p>

<p class=MsoNormal><b>Самое важное утверждение для всех исследователей систем
индивидуальной адаптивности:</b></p>

<p class=MsoNormal>Представляемая система показала себя, прежде всего, как
эффективный инструмент для исследования систем индивидуальной адаптивности. Он
не имеет альтернатив среди всех других существующих инструментов и методов и
позволяет реально оперировать понятиями, определяющими субъективные явления.</p>

<p class=MsoNormal>Инструмент реализует схемотехнику взаимосвязей
функциональных элементов, не зависящую от особенностей реализации принципов
адаптивности. </p>

<h3><a name="_Toc121642937">Это – не просто очередная компьютерная эмуляция
проявлений разумности</a></h3>

<p class=MsoNormal>Чем отличается данная реализация от всех других попыток
запрограммировать адаптивное поведение? </p>

<p class=MsoNormal>1. Наличием собственного гомеостаза, определяющего
собственные потребности, цели и направленность поведения.</p>

<p class=MsoNormal>2. Точным моделированием уровней адаптивности вплоть до
автоматизмов, повторяющая природную систему живых существ сложнее насекомых,
хотя и с более предположительными механизмами высокого уровня адаптивности в
виду практически полного отсутствия фактических данных исследований таких
уровней.</p>

<p class=MsoNormal>3. Целостной организацией всей иерархии механизмов
адаптивности.</p>

<p class=MsoNormal>Система не дается в готовом виде, ее необходимо поэтапно развивать.
В проекте различаются следующие стадии:</p>

<p class=MsoListParagraphCxSpFirst style='margin-left:54.0pt;text-indent:-18.0pt'>0.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>До рождения</b>
– формируется система Гомеостаза, задаются начальные параметры, формируется
база безусловных рефлексов.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>Рождение </b>–
формируется база условных рефлексов, развивающая поведенческие навыки.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>Модификация </b>–
на основе безусловных и условных рефлексов формируется база автоматизмов.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>Подражание </b>–
добавляются скопированные действия Оператора как авторитарный вариант
реагирования.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>Осмысление </b>–
формирование у Beast модели понимания выполняемых действий, их значимости,
собственного самоощущения, первые попытки поиска решений.</p>

<p class=MsoListParagraphCxSpLast style='margin-left:54.0pt;text-indent:-18.0pt'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>Инициатива </b>–
активация творческой инициативы, развитие методов поиска решений, провокации
Оператора на нужные Beast действия, формирование доминант нерешенных проблем</p>

<p class=MsoNormal>Каждый этап строится на основе предыдущего. Нельзя
перескакивать этапы и не желательно откатывать их обратно – это чревато
каскадным обрушением накопленных поведенческих навыков с непредсказуемыми последствиями.
Поэтапное развертывание системы имитирует ее эволюционное развитие, где
очередной виток спирали это - всегда продолжение предыдущего.</p>

<h3><a name="_Toc121642938">Трудности реализации</a></h3>

<p class=MsoNormal>Если при разработке механизмов разных видов рефлексов и
автоматизмов есть очень много фактических данных исследований и картина вполне
ясна, то уровень механизмов психики оказывается в полном тумане противоречивых
и вообще не определенных понятий. </p>

<p class=MsoNormal>Новое в принципе невозможно создать именно потому, что это –
еще не известное. Человек в подавляющем числе случаев использует переданные ему
от других людей понятия и его опыт в основном построен на такой
преемственности. Очень мало случаев, когда удается найти что-то новое и
сформировать свое собственное, самобытное представление. Обычно это бывает
случайно или по аналогии, не зря Леонардо Да Винчи любил черпать идеи,
рассматривая узор трещинок на штукатурке. </p>

<p class=MsoNormal>Так что формировать систему механизмов психики –
по-настоящему мучительное и скользкое занятие.</p>

<h3><a name="_Toc121642939">Причем здесь нейроны?</a></h3>

<p class=MsoNormal>В самом начале проект делался как эмуляция нейронной сети,
но почти сразу стало очевидно, что программная реализация, обладая своими
особенностями, вовсе не требует эмуляции нейронов и их связей, что делало бы
схему неоправданно избыточной. Да и мощности персонального компьютера на
хватило бы даже для реализации простейших рефлексов. Главное в прототипе – не
повторение способа реализации, а соблюдение принципов развития природной
эволюции адаптивных механизмов.</p>

<p class=MsoNormal>В случае, если бы прототип делался как электронное
устройство, без дискретных элементов (нейристоров и синаптических коммутаторов)
было бы не обойтись, они давали бы преимущество перед программной
схемотехникой. И сами приемы схемотехники были бы совершенно иными.</p>

<p class=MsoNormal>Попытка скомпилировать программную реализацию в виде электронного
устройства тоже была бы чрезвычайно нелогичной. Если схему делать программно,
она должна быть выполнена оптимально используемыми средствами языка, а если
делать на дискретных элементах – то вся конструкция с самого начала была бы реализована
совершенно по-другому. Но в обоих случаях эти реализации демонстрировали бы
одни и те же принципы последовательного усложнения механизмов адаптивности.</p>

<h3><a name="_Toc121642940">Есть ли разум у </a><span lang=EN-US>Beast</span></h3>

<p class=MsoNormal>Понятие “Разум” определено в статье “ Жизнь -&gt;
Самоощущение -&gt; Разум” (fornit.ru/64924).</p>

<p class=MsoNormal>Разработка прервана для отчета на стадии пятой ступни
развития. Доминанта нерешенной проблемы еще не реализована (хотя не
представляет теоретической сложности), поэтому уровень текущей реализации <span lang=EN-US>Beast</span><span
lang=EN-US> </span>не позволяет говорить о том, что в проявлениях ее адаптивных
действий есть то качество, проявляется в психике человека как творчество. Это – в точности так же, как невозможно говорить о разуме у ребенка
до 3-5 лет.</p>

<p class=MsoNormal>Те фразы, что появляются в ответ на Пульте не осмыслены в
качестве объекта привлечения субъективного внимания в контексте модели
понимания свойств и возможности взаимодействий с этим объектом внимания.</p>

<p class=MsoNormal>Фразы <span lang=EN-US>Beast</span><span lang=EN-US> </span>пока
что отражают непосредственное реагирование, такое же, как и несловесные
действия, реагирование в контексте специфики текущего состояния <span
lang=EN-US>Beast</span>, и даже с основами базовой произвольности (замена
стандартного реагирования более подходящим). Но каждая фраза зависит от
текущего контекста, т.е. на один и тот же стимул <span lang=EN-US>Beast</span><span
lang=EN-US> </span>может реагировать совершенно по-разному. Такой способности
нет у игровых “ИИ” и любых других искусственных систем, не имеющих своего
гомеостаза (не живых систем).</p>

<p class=MsoNormal>Уже есть искусственные системы, проходящие тест Тюнинга
(например, <span style='color:black;background:white'>GPT-3 (</span><a
href="http://fornit.ru/49524" target="_blank"><span style='background:white'>fornit.ru/49524</span></a><span
style='color:black;background:white'>)</span>), но в них нет произвольности,
определяемой гомеостатическими потребностями (и, тем более целевой
произвольности) и никакая из них не демонстрирует даже контекстной обучаемости
(без гомеостаза не может быть собственной системы контекстов). Такие устройства
создают иллюзию разума настолько убедительную, что даже сотрудник <span
lang=EN-US>google</span><span lang=EN-US> </span>начал утверждать наличие
разума в их программной разработке (fornit.ru/7360). </p>

<h3><a name="_Toc121642941">Есть ли самоощущение у </a><span lang=EN-US>Beast</span></h3>

<p class=MsoNormal>Целеобразующая значимость выделяемых вниманием образов есть
у <span lang=EN-US>Beast</span>, и она зависит от текущих условий и текущего
собственного состояния, у которого так же есть определенная значимость. Если
согласиться с тем, что термин “смысл” (fornit.ru/7339) означает субъективно
(внутренне, с точки отсчета самой адаптивной системы) оцененную значимость, то
у <span lang=EN-US>Beast</span><span lang=EN-US> </span>есть самоощущение. </p>

<p class=MsoNormal>Так же, как копаясь в живом мозге (что имеют возможность
делать исследователи для подготовки к оперативному вмешательству), никто
никогда не видел некоей сущности, отвечающей за самоощущение или сознание, так
же никто не увидит это при исследовании программной реализации потому, что
самоощущение – это информационное отражение значимости воспринимаемого самой
адаптивной системой, это фантом, иллюзия, порождаемая внешне наблюдаемыми
реакциями и это – иллюзия, порождаемая самонаблюдением той сложной организации
взаимодействующих значимостей объектов внимания, которая сложилась к моменту,
когда вообще становится возможно самонаблюдение. И достаточно легко провести
мысленные опыты над собой, пытаясь проследить за конкретно ощущаемой
(учитываемой в реакциях) значимости простейших объектов внимания, таких как,
например, зеленый цвет (fornit.ru/5170), который будет иметь разительно разную
значимость в разных условиях: трава, ядовитая слизь, ягода, сигнал светофора и
т.п.</p>

<h2><a name="_Toc121642942">Для желающих присоединиться</a></h2>

<p class=MsoNormal>Проект в настоящее время полностью открыт для всех желающих
соучастников или да самостоятельного продолжения разработки, код схемы <span
lang=EN-US>Beast</span><span lang=EN-US> </span>и Пульта связи – доступны в
виде репозиторий:</p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'><a href="https://github.com/NickFornit/BEAST_GO"><span style='color:windowtext;
text-decoration:none'>https://github.com/NickFornit/BEAST_GO</span></a></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'><a href="https://github.com/NickFornit/BEAST_PULT"><span
style='color:windowtext;text-decoration:none'>https://github.com/NickFornit/BEAST_PULT</span></a></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'>&nbsp;</p>

<p class=MsoNormal>Описание Пульта и схемы опубликованы:</p>

<p class=MsoNormal><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/index.htm"><span
lang=EN-US>https</span>://<span lang=EN-US>scorcher</span>.<span lang=EN-US>ru</span>/<span
lang=EN-US>adaptologiya</span>/<span lang=EN-US>beast</span>/<span lang=EN-US>beast</span>_<span
lang=EN-US>scheme</span>/<span lang=EN-US>index</span>.<span lang=EN-US>htm</span></a><span
lang=EN-US> </span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>Сам Пульт в виде локального сайта с исполняемым файлом <span
lang=EN-US>Beast</span> можно скачать с Яндекс-диска:</p>

<p class=MsoNormal><a href="https://disk.yandex.ru/d/7az4UW4XG99kDQ"><span
style='color:windowtext;text-decoration:none'>https://disk.yandex.ru/d/7az4UW4XG99kDQ</span></a></p>

<p class=MsoNormal>Достаточно просто скачать в любое место, <b>не
переименовывая папку</b> и прочесть как запустить сайт <span lang=EN-US>http</span>:<span
lang=EN-US>go</span><span lang=EN-US> </span>на своем компьютере.</p>

<p class=MsoNormal>Соучастники очень нужны в качестве воспитателей <span
lang=EN-US>Beast</span> и это не требует понимания кода, но нужно хорошо
понимать, что и как формируется на каждой стадии развития <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal>В варианте, закаченном на Яндекс-диск, <span lang=EN-US>Beast</span><span
lang=EN-US> </span>развита методами избыточной искусственной накачки, что не
является оптимальным. Но в Пульте есть возможность загрузить и другие этапы
памяти или же вообще все начать с самого начала.</p>

<h2><a name="_Toc121642943">О предшествующей реализации</a></h2>

<p class=MsoNormal>Прошлый отчет о реализации прототипа системы адаптивности
был опубликован (fornit.ru/49721) в январе 2021 года и за ним последовали
несколько иллюстративных статей в попытке облегчить понимание субъективных
ощущений. Так же была опубликована статья в журнале ВАК: <span
style='color:black;background:white'>&nbsp;</span><a
href="https://psycholinguistic.ru/arhiv/2021%E2%84%964(16).pdf">Мозг как
схемотехническое устройство</a><span style='color:black;background:white'>&nbsp;(39-я
страница,&nbsp;</span><a href="https://scorcher.ru/conscience/vak.pdf"><span
style='background:white'>PDF</span></a><span style='color:black;background:
white'>).</span></p>

<p class=MsoNormal><span style='color:black;background:white'>С позиций
достигнутого понимания были опубликованы комментарии к статье К.В.Анохина -
«Когнитом: в поисках фундаментальной&nbsp;нейронаучной&nbsp;теории
сознания»:&nbsp;</span><a href="http://fornit.ru/50322" target="_blank"><span
style='background:white'>fornit.ru/50322</span></a> и <span style='color:black;
background:white'>комментарии к книге Дэвид Иглмен Мозг: «Ваша личная
история»:&nbsp;</span><a href="http://fornit.ru/50204" target="_blank"><span
style='background:white'>fornit.ru/50204</span></a>.</p>

<p class=MsoNormal>Это продемонстрировало текущий уровень понимания адаптивных
явлений ведущими представителями академической науки и показало, что они
по-прежнему пытаются найти ответы на вопросы без использования схемотехнического
подхода, а это так же безнадежно, как попытки понять устройство телевизора
методами биологии.</p>

<p class=MsoNormal>Ранее в книге “Что такое Я” (fornit.ru/40830) было
доказательно показано, что мозг является сложным схемотехническим устройством,
в котором воплощены все основные принципы именно электронной схемотехники. Это
означает, что исследование устройства адаптивных механизмов мозга относится к
предметной области “электронная схемотехника”. </p>

<p class=MsoNormal>Основные принципы электронной схемотехники могут быть
реализованы в схемах программной реализации, что и было проделано при
разработке первой версии прототипа.</p>

<p class=MsoNormal>При этом с очевидностью стало ясна необходимость отказа от
эмулирования функций нейронов, которая безальтернативна в случае реализации
прототипа на дискретных элементах в виде электротехнической схемы.</p>

<p class=MsoNormal>Наконец была написана статья “Что дальше” (fornit.ru/50246),
где оценены плюсы и минусы проекта.</p>

<p class=MsoNormal>Первая реализация отличалась поиском оптимальных решений на
уровне принципов, многое было сделано довольно опрометчивыми наскоками. Но был
получен главный результат: уверенность в безальтернативности схемотехнического
подхода в исследовании механизмов индивидуальной адаптивности.</p>

<p class=MsoNormal>Стоит заметить, что в природе многие функции адаптивности
решаются вовсе даже не с помощью нейронных механизмов, а сами нейронные
структуры далеки от унификации и на функциональность влияют очень многие
факторы, даже не связанные с метаболизмом. Это очень сильно мешает отделять
непринципиальную часть механизмов, и многие исследователи даже не делают такие
попытки, что мешает построению целостной системы принципиальных представлений.</p>

<p class=MsoNormal>Отказ от привычного представления адаптирующихся систем в
виде нейросети существенно снизил ресурсные требования к мощности компьютера.
При этом стало очевидно, что только схемотехнический подход позволяет уверенно
продвигаться в реализации механизмов индивидуальной адаптивности.  </p>

<h2><a name="_Toc121642944">Особенности новой версии реализации</a></h2>

<p class=MsoNormal>Во втором подходе к разработке прототипа было решено весь
код переписать “с нуля”, используя убедительные наработки, реализованные в
первой версии, когда сложилась вполне понятная картина, как все лучше делать.</p>

<p class=MsoNormal>Особое внимание теперь было уделено тому, чтобы реализуемые
механизмы как можно точнее соответствовали фактическим данным исследований,
которые доступны по данным явлениям. Это особенно хорошо удалось при реализации
условных рефлексов. Далее же адаптивные явления оказывались все более скудно
описаны в доступных источниках, так что оставалась лишь канва имеющегося
целостного обобщения МВАП (fornit.ru/7431).</p>

<p class=MsoNormal>Разработка второй версии прототипа системы индивидуальной
адаптивности показала конкретную причину фиксированного числа слоев колонок
коры головного мозга (fornit.ru/43642). Оказалось, что использование уникальных
идентификаторов образов восприятия различного уровня иерархии позволяет
распознавать текущее состояние условий с помощью фиксированного числа узлов в
каждой ветке дерева распознавания. При использовании самих образов с различным
числом признаков на входе каждого, дерево бы получилось в неопределенным числом
узлов в каждом случае и его сложность сделала бы затруднительным и медленным
распознавание. Так что фиксированное число слоев коры четко коррелирует с
применением уже сформированных видов детекторов образов при распознавании
актуального их сочетания.</p>

<p class=MsoNormal>Становится достаточно убедительной картина того, что кора
имеет функциональность именно древовидной функции распознавания.</p>

<p class=MsoNormal>Если в первой версии было использовано только одно дерево,
то во второй – пять деревьев для всех случаях необходимости распознавания
иерархии условий.</p>

<p class=MsoNormal>Удалось избежать очень продолжительной (сэкономлено 2-3
года) и малопродуктивной стадии формирования условных рефлексов и базовых
автоматизмов, создав избыточные списки основ таких реакций. Это позволило
развить систему значительно дальше базовых автоматизмов.</p>

<p class=MsoNormal>Создан более удобный и информативный Пульт управления и
более продуманная система ректоров данных для различных стадий развития.</p>

<p class=MsoNormal>По сравнению с прошлой версией были внесены следующие
изменения:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>существенно переработана схема определения локального и
интегрального базового состояния</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>доработаны справочники базовых параметров, базовых контекстов,
добавлены схемы взаимных торможений и проверки при заполнении на
непротиворечивость</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>разработаны алгоритмы определения возможных комбинаций базовых
контекстов для установленной схемы гомеостаза</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>доработан справочник действий от <span lang=EN-US>Beast</span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлен интерфейс быстрой набивки дерева слов и фраз</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>доработаны справочники условных и безусловных рефлексов, добавлен
интерфейс их быстрой набивки через шаблоны</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлен справочник условных рефлексов с интерфейсом быстрого
заполнения через шаблон</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>доработан справочник автоматизмов, добавлен интерфейс их
клонирования от безусловных и условных рефлексов, а так же от шаблона
зеркальных автоматизмов</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлен интерфейс отображения правил, циклов осмысления,
объектов значимости, дерева понимания</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлены программные объекты Образ восприятия, Образ
реагирования, Правила реагирования</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлены 4 новых дерева распознавания уникального сочетания
условий</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>добавлен модуль обмена данных до уровня условных рефлексов
включительно</p>

<p class=MsoNormal>Эти изменения позволили продвинуться значительно дальше,
подтвердив принцип схемотехнического подхода при проектировании систем
индивидуальной адаптивности, который был использован в прошлой версии.</p>

<h2><a name="_Toc121642945">Используемые принципы теории адаптивных систем</a></h2>

<p class=MsoNormal>Нейробиологи исследуют механизмы организации адаптивных
функций организмов и описывают их в виде предположительных моделей. Но
большинство таких теорий никак ими не подтверждается проверкой работающими
прототипами устройств.</p>

<p class=MsoNormal>Ценность представленного материала в том, что не только
отдельные функциональные механизмы, но и вся система индивидуальной
адаптивности представлена в виде работающего прототипа, доказывающего
адекватность ее в реальности, а не только теоретически.</p>

<p class=MsoNormal>Ценность самого подхода в том, что он дает схемотехнические
методы и принципы реализации любых искусственных живых организмов с желаемыми
свойствами, а также возможности моделировать любые природные живые организмы и/или
отдельные их адаптивные функции.</p>

<p class=MsoNormal>Пока еще в академической науке не было представлено
целостной теории организации механизмов адаптивности уровня произвольности, тем
более с подтверждением прототипом ее работоспособности.</p>

<h3><a name="_Toc121642946">Главные принципы адаптивной регуляции поведения</a></h3>

<p class=MsoNormal>Основы схемотехнической регуляции поведения строятся на
необходимости поддержания в норме жизненных параметров. </p>

<p class=MsoNormal>Но авторитарные оценки поведения имеют преимущественное
значение, даже если они идут в противоречии гомеостатической регуляции потому,
что они отражают уже имеющий реальный опыт, подлежащий отзеркаливанию. </p>

<p class=MsoNormal>Формирование собственной произвольности основывается на
авторитарных оценках, но на определенной стадии развития авторитарные оценки
начинают вызывать сомнение и переосмысливание (если ситуация не критически
опасна).</p>

<h3><a name="_Toc121642947">Информационный принцип эволюции адаптивности</a></h3>

<p class=MsoNormal>На всех уровнях сложности адаптивных механизмов реализуется
один информационный принцип: возможности данного уровня адаптивных механизмов
реализуют ту информацию, которая оказывается доступной на данном уровне.
Реализация же данного уровня готовит новые виды информации, которая позволяет
более качественно адаптироваться и которая используется на боле высоком уровне
адаптивных механизмов.</p>

<p class=MsoNormal>Это – достаточно очевидный принцип: эволюционные
эксперименты ограничиваются теми возможностями, которые представляются
имеющейся сенсорикой. И найдя все возможные пути реализации этой сенсорики,
появляется новый уровень сенсорики, порожденный результатами работы предыдущего
уровня.</p>

<p class=MsoNormal>В результате реализации <span lang=EN-US>Beast</span>
показано, что за такими уровнями адаптивности как безусловные рефлексы,
условные рефлексы, автоматизмы существуют много неописанных в академической
науке уровней адаптивности, неожиданно много для тех, кто об этом системно не
задумывался. Так что для достижения высших психических уровней оказалось
необходимым реализовать все необходимые промежуточные состояния систем
адаптивности. И эта необходимая закономерность, прежде всего, прямо вытекает из
того, как используется информационная сенсорика на каждом из таких уровней,
подготавливая возможность функционирования следующего уровня.</p>

<h3><a name="_Toc121642948">Принцип использования уникальных символов образов</a></h3>

<p class=MsoNormal>Каждый нейрон головного мозга, имеющий некоторое рецепторное
поле, на избирательную активность которого нейрон специализирован, на выходе
имеет сигнал, символизирующий активность всего профиля возбуждения нейрона.
Этот уникальный среди всех других сигнал (потому как идет от единственного
конкретного нейрона) заменяет собой совокупность активности многих
предшествующих рецепторов, сколько бы их ни было. Это позволяет в дальнейшем
использовать единственный сигнал в качестве информации о всей предшествовавшей
активности и минимизировать условия возбуждения последующих структур.</p>

<p class=MsoNormal>В схеме проекта использовались такие же уникальные символы
образов различного вида – цифровые идентификаторы детекторов образов. Это
позволило применять фиксированное число узлов веток дерева распознавателей
совокупного уникального образа, который так же получал свой уникальный
идентификатор.</p>

<p class=MsoNormal>В типичных реализациях “глубоких нейросетей” не используется
такой принцип потому как там сеть построена по принципу “все связаны со всеми”
через несколько промежуточных слоев. Это, с одной стороны, дает идеально точный
распознаватель, но не более того. Требуется огромное число предъявлений для
обучения такого распознавателя, требуются мощные вычислительные ресурсы для
обсчета огромного количества связей и на распознавательной функции его
применение ограничивается.</p>

<h3><a name="_Toc121642949">Принцип древовидного распознавателя</a></h3>

<p class=MsoNormal>Чтобы распознать уникальное сочетание активностей сигналов
нескольких иерархически усложняющихся типов лучше всего подходит структура
дерева, где каждая ветка состоит из фиксированного числа видов образов. В таком
дереве находится место для любых сочетаний исходных образов, поиск по дереву –
самый быстрый вид поиска, требуется минимальные вычислительные ресурсы в случае
применения рекурсивного прохода веток дерева (вида обратной связи). Узнавание
любого сочетания достигается при числе итераций, равном числу использованных
видов образов.</p>

<h3><a name="_Toc121642950">Принцип сопутствующей образу значимости</a></h3>

<p class=MsoNormal>У любого образа в дереве распознавания условий появления стимула
всегда есть та значимость, которую ему придает активный базовый контекст
функциональности гомеостаза (негативный, нейтральный или позитивный). Но, кроме
того, с образом действия (реакцией) может ассоциироваться значимость результата
реакции, который вызовет изменения жизненных параметров. Таким образом
получается значимость до реагирования и после реагирования, что позволяет
выделить эффект реакции: позитивный или негативный.</p>

<h3><a name="_Toc121642951">Принцип фиксации Правил</a></h3>

<p class=MsoNormal>Если есть информация о значимости состояния до реагирования
на стимул и эффект реакции, то становится возможным сохранить правило: Стимул -&gt;
Ответ -&gt; Эффект, полезное для последующего нахождения решения как
реагировать в схожей ситуации.</p>

<p class=MsoNormal>Кроме того, сохранение цепочки типа Ответ -&gt; Стимул дает
ученическое правило: как реагируют другие на такой Ответ, что так же возможно
использовать для предположительной реакции.</p>

<h3><a name="_Toc121642952">Принцип доминирующей нерешенной проблемы</a> </h3>

<p class=MsoNormal>Если решение не найдено, но ситуация важна, то может
возникнуть долговременная цель: найти решение такой проблемы.</p>

<p class=MsoNormal>Соответственно возникают механизмы, активирующиеся, когда
становится возможным вернуться к решению отложенной проблемы. А также
механизмы, оценивающие удачность примененных методов решения. И еще механизмы,
сохраняющие такие правила решений проблем.</p>

<h2><a name="_Toc121642953">Реализованные уровни адаптивности</a></h2>

<p class=MsoNormal>Краткое описание реализованных уровней адаптивности не
использует неопределенных понятий и описывает суть возможностей каждого уровня
и то, почему этот уровень становится возможным. В самом общем плане, каждый
новый уровень оказывается возможным потому, что предыдущий подготавливает новую
информацию, которую становится возможным использовать в новом качестве и
эффективности адаптивности.</p>

<p class=MsoNormal>1. <b>Наследственно предопределенные структуры</b>.</p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
образ совокупного пускового стимула из детектора текущего состояния.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: Это – система гомеостаза и система базовых контекстов
(стилей) поведения, а также сенсорика фраз и сенсорика действий с Пульта.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
Образы сочетания действий, образы фраз, образ значимости состояния.</p>

<p class=MsoNormal>2. <b>Новые условия ранее имеющихся действий (синонимы
реакций или условные рефлексы)</b></p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
причинно-следственная связь: сначала стимул от детектора текущего состояния,
потом пусковой стимул.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: детектор нового, детектор причинной связи нового образа
стимула и старого образа стимула, для которого уже имеется ответное действие.
Механизмы закрепления новой реакции - синонима старой и ее угасания.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется детекция нового.</p>

<p class=MsoNormal>3. <b>Отзеркаливание авторитарных действий</b>.</p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
авторитарный стимул с Пульта в ответ на действия <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>. На ранней стадии развития все стимулы с Пульта имеют высокую
значимость как пример действий в данных условиях. Они достаточно просто могут
формировать пробное действие в форме пробного автоматизма, т.е. в случае
ухудшения состояния после такого автоматизма он будет блокирован, а в случае
улучшения – составит новый опыт.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляются примеры действий в статусе высокой
значимости. </p>

<p class=MsoNormal>4. <b>Оценка полезности реакций (автоматизмы)</b></p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
новизна ситуации (отсутствие реакций для данного сочетания условий и стимула),
детектор актуальности реагирования, детектор опасности ситуации.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: при каждой новизне в текущей оценке ситуации запускаются
механизмы образования пробного автоматизма, с использованием доступной
информации. Кроме того, если автоматизм уже есть для данной ситуации, но он
плох, то также начинается подбор нового автоматизма.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется образ возможного действия.</p>

<p class=MsoNormal>5. <b>Оценка эффекта (полезности) совершенного действия</b> </p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
значимость до совершения действия и значимость после совершения действия в
сопоставлении дают результирующий эффект от действия, который используется для
блокировки автоматизма (негативный эффект) или укрепления уверенности в
применении автоматизма (позитивный эффект).</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: для формирования значения эффекта используется детекторы
состояния «хорошо, норма или плохо», а также детектор разницы значений
предыдущего и текущего состояния «стало лучше, стало хуже».</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется образы значимости объектов, участвующих в
реакции, а также опыт применения автоматизмов в данных условиях – как величина
полезности в структуре автоматизма.</p>

<p class=MsoNormal>6. <b>Образы простейших Правил</b></p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
образ Стимула из Пульта, образ Ответа <span lang=EN-US>Beast</span>, эффект
ответной реакции.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: фиксируются и сохраняются Правила в виде Стимул -&gt; Ответ
-&gt; Эффект, а также ученические Правила в виде Ответ – Стимул -&gt; +1 (авторитарный
эффект принимается за 1).</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется наборы правил и новые звенья эпизодической
памяти, хранящие образ ситуации и последовательность примененных Правил.</p>

<p class=MsoNormal>7. <b>Образы значимости объектов воспринимаемого</b></p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
оценка значимости пробного реагирования.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: для каждого совокупного образа и каждого составляющего образа
ассоциируется значимость эффекта реакции, что позволяет выбирать наиболее
значимые позитивные реакции и остерегаться негативных.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется образы значимости, ассоциированные с
образами действий и его отдельных составляющих.</p>

<p class=MsoNormal>8. <b>Определение текущих целей по Правилам для наиболее
значащих объектов внимания</b></p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
Правила двух видов и эпизодическая память.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: становится возможен прогноз последующих действий после
совершенных – по цепочкам сохраненных Правил. Прогноз позволяет определить цели
следующих действий.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется ментальные цепочки удачных и не удачных
решений: ментальные Правила последовательности нахождения решений.</p>

<p class=MsoNormal>9. <b>Автоматизмы «внутренних» действий</b>.</p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
наследуемые механизмы различных информационных функций для получения информации
и принятия пробного решения – базовая основа функционала коры лобных долей (в
отличие от цепочек безусловных рефлексов – как основы функционала теменной
области коры).</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: “внутренние” действия или ментальные автоматизмы позволяют
активировать те или иные информационные функции в порядке имеющихся правил или
попытках создать новые – с целью получить желаемый прогнозированный эффект и
создать моторный автоматизм.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется наработанные опытом ментальные автоматизмы с
их образами “внутренних” действий.</p>

<p class=MsoNormal>10. <b>Рекурсивные циклы информационной адаптивности</b>.</p>

<p class=MsoNormal><span style='color:gray'>Виды доступной сенсорики</span>:
основная информационная функция мышления позволяет осуществлять циклы вызовов
ментальных автоматизмов по ментальным Правилам или создавать новые цепочки
пробных Правил.</p>

<p class=MsoNormal><span style='color:gray'>Краткое описание адаптивных
механизмов</span>: каждый вызов модифицирует общую информационную картину для
возможности работы последующего вызова. Функция мышления активируется по
каждому стимулу с Пульта и между ними может проходить неограниченное (для 5-й
стадии развития) число рекурсивных ментальных вызовов. Объектом внимания в этой
функции становится наиболее значащий объект.</p>

<p class=MsoNormal><span style='color:gray'>Порождаемые виды сенсорики</span>:
к предыдущей сенсорике добавляется постоянно обновляемая с каждым событием
полная информационная картинка текущего состояния – самоощущение.</p>

<p class=MsoNormal>12. <b>Доминанта нерешенной проблемы</b>.</p>

<p class=MsoNormal>Пока еще не реализованный функционал 5-й стадии развития, но
уже имеются соответствующие структуры.</p>

<p class=MsoNormal>С 5-го пункта перечисленных уровней адаптивности возникает общее
информационное окружение, которое позволяет использовать его данные для все
более эффективного нахождения ответных действий. Информация здесь – термин,
означающий получение сведений о значимости объектов иерархии усложнения
образов. <span lang=EN-US>Beast</span><span lang=EN-US> </span>реально
оказывается информированной о таких значимостях, что позволяет 1) обращать
внимание на наиболее значимое и 2) находить решения по улучшению значимости.</p>

<h2><a name="_Toc121642954">Особенности программной реализации</a></h2>

<p class=MsoNormal>Опыт прошлой реализации выявил множество неоправданных
недоработок языка <span lang=EN-US>golang</span><span lang=EN-US> </span>и в
новой версии уже нет попыток использовать многопоточность, приняты меры против
одновременной записи и чтения “карт”, но, все же, несмотря на проблему
цикличности включений пакетов, пакеты собраны в папки (кроме последнего пакета <span
lang=EN-US>psychic</span>, где файлы навалены в одну папку). </p>

<p class=MsoNormal>Основным элементом для создания образов различного вида
является “структура”. Функции сохранения объектов образов и загрузки их из
файлов настолько унифицированы, что становится возможным создать для этого
универсальную функцию (пока не сделано). Это же касается функций работы с
деревьями.</p>

<p class=MsoNormal>Всякий раз учитываются возможные размеры файлов памяти и
нагрузка при работе функций так, что есть немалый потенциал для накопления
данных и работы с ним. Избыточность искусственно созданных данных позволила
оценить такой предел для персонального компьютера средней мощности.</p>

<p class=MsoNormal>Схема <span lang=EN-US>Beast</span><span lang=EN-US> </span>получилась
достаточно сложной и поэтому сделано описание функций по пакетам и в виде общей
графической схемы. Но понять схему без ясного представления ее функциональности
– нереально. Так что в данном отчете будет такое общее описание.</p>

<h3><a name="_Toc121642955">Описание схемы:</a></h3>

<p class=MsoNormal><a href="/adaptologiya/beast/beast_scheme/index.htm"><b>Описание
схемы</b></a> подразделяется на описание схемы <span lang=EN-US>Beast</span><span
lang=EN-US> </span>и кода Пульта.  </p>


<h3><a name="_Toc121642956">Общая схема:</a></h3>


<p class=MsoNormal><a href="report_img/graf_beast.png">Графическая блок-схема Beast</a></p>

<p class=MsoNormal>&nbsp;</p>

<h3><a name="_Toc121642957">Базовая структура</a></h3>

<p class=MsoNormal>Варьируя базовые прошивки, эволюция создала огромное
множество вариантов живых существ, различающихся особенностями наследственных
механизмов адаптации. Различия начинаются от качества и возможностей
рецепторных датчиков воздействия и кончая самыми эволюционно молодыми
образованиями. Но никакие наследственные механизмы не справляются со сложными
особенностями окружающих условий и воздействий. Поэтому множество механизмов
адаптивности закладываются наследственно так, чтобы иметь возможность уточнить
их реакции в период активной жизни особи. Они, естественно, имеют приоритет
перед более древними реакциями и принцип такой приоритетности прослеживается на
всех уровнях системы индивидуальной адаптивности.</p>

<p class=MsoNormal>В проекте основой распознавания иерархии образов является
Дерево.</p>

<p class=MsoNormal>Чем меньше образов на данном уровне ветки дерева, тем более
надежно распознавание в природных (и любых дискретных) сетях и тем более
быстрый поиск в программных (последовательный алгоритм обработки). Эффект
использования усложняющихся образов проявляется в фиксированном числе уровней
(слоев колонок fornit.ru/43642).</p>

<p class=MsoNormal>Т.к. задается определенная <b>наследуемая</b> структура, то
возникает возможность размножения с использованием наследственных структур
партнеров, которые по заданному алгоритму обогащают и усредняют наследственную
структуру нового существа. В проекте начато развитие такой функциональности.</p>

<h3><a name="_Toc121642958">Проект не эмулирует, а представляет собой живое
существо</a></h3>

<p class=MsoNormal>Понятие живого существа сложилось из обобщения наблюдаемых
признаков живых существ. Мы уверенно различаем в этом смысле камень, наколотую
на булавку бабочку от живой бабочки. Стоит таким признакам стать
неопределенными, и мы говорим: “как живое” или “как камень”.</p>

<p class=MsoNormal>Есть наиболее общий признак, который и наделяет все живое наблюдаемыми
характеристиками живого (fornit.ru/64924). Это – наличие системы гомеостаза с жизненными
параметрами, выход которых из нормы означает приближение к смерти – к неживому.
Если такой выход оказывается более невосполнимым, то существо становится
мертвым. Живое же существо всем своим поведением в конечном счете восполняет
нарушения параметров гомеостаза у себя или у значимых для него других особях,
тем самым поддерживая жизнь вида.</p>

<p class=MsoNormal>Для параметров гомеостаза, напрямую не связанных с
жизнеобеспечением (гон, потребность в общении, потребность в обучении и
любопытство) организована цикличность: при нарастании параметра до максимума,
он удерживается в течении 20 секунд, а потом сбрасывается. Это позволяет
создавать достаточные по времени периоды специфических контекстов реагирования.</p>

<h2><a name="_Toc121642959">Сенсорные распознаватели</a></h2>

<p class=MsoNormal>Сенсоры восприятия <span lang=EN-US>Beast</span><span
lang=EN-US> </span>бывают вербальные (слова и фразы) и невербальные
(настроение, тон, стимулирующие воздействия). Этим и ограничивается диапазон
видов восприятия <span lang=EN-US>Beast</span>, т.е. видеть, слышать,
чувствовать вкус и запах у него возможности нет.</p>

<p class=MsoNormal>Вербальные сенсоры Beast это текстовые фразы, посылаемые с
Пульта оператором. Они имеют иерархическую древовидную структуру, где каждый
сенсор представлен в виде ветки дерева. Это позволяет существенно ускорить
поиск и автоматически группировать сенсоры по совпадающим фрагментам. Например,
слова: «привет – приветик – приветствую» имеют общий фрагмент «привет», от
которого идут 2 ответвления. Конечное звено ветки определяет уникальный сенсор,
а первое принадлежит начальному уровню дерева, представленному в виде букв
алфавита и спец. символов.</p>

<p class=MsoNormal><a href="report_img/image001.png" target="show_pic"><img border=0 width=750 height=auto
src="report_img/image001.png" alt="Вербальные сенсоры Beast"></a></p>

<p class=MsoNormal>Наиболее сложным в проекте сенсором является распознаватель
слов и фраз – “ Вернике-детектор”, реализованный с помощью дерева распознавания
слов и дерева распознавания фраз.</p>

<p class=MsoNormal>Дерево слов распознает слова по отдельным символам, включая
разделители слов и символы окончания фразы. Поэтому ветка дерева слов не
лимитирована по числу узлов-символов. </p>

<p class=MsoNormal>Дерево фраз так же имеет нелимитированную ветку потому, что
во фразе может быть сколько угодно слов. Но при появлении символа разделителя
фраз, возникает новое распознавание и активируется ветка следующей фразы. Так
если с Пульта будет послан текс из нескольких фраз, то возникнет образ
совокупности таких фраз.</p>

<p class=MsoNormal>Слова сохраняются как узнанные образы тогда, когда они
встречаются более 3-х раз. Это сделано чтобы отсеять мусорные, случайные сочетания
символов и имитирует постепенное формирование профиля распознавания нейрона по
нескольким предъявлениям стимула.</p>

<p class=MsoNormal>Из полученных сенсоров-слов формируется второй тип сенсора –
фразы, ограниченный длиной не более 6 слов. Таким образом Beast получает
возможность уже на рефлекторном уровне реагировать как на отдельные слова, так
и на фразы.</p>

<p class=MsoNormal><a href="report_img/image002.png" target="show_pic"><img border=0 width=750 height=auto id="Рисунок 2"
src="report_img/image002.png" alt="Дерево слов и дерево фраз"></a></p>

<p class=MsoNormal>Предусмотрена возможность быстрой набивки заготовленных
текстов без 4-кратного повторения, чтобы создать некий начальный словарный
запас узнаваемых слов. На Пульте для этого есть галка “режим форсированной
обработки”.</p>

<p class=MsoNormal>Вернике-детектор позволяет распознавать слова, написанные не
точно, так же как это происходит и в природной зоне Вернике: важно, чтобы
точными были только первый и последний символ, а промежуточные могут быть
перемешаны. Похожий “мягкий” алгоритм реализован и при распознавании фраз, так
что узнается наиболее похожая фраза из ранее сохранных образов.</p>

<p class=MsoNormal>На Пульте есть редактор быстрой набивки фраз и показа
результатов распознавания: структуры дерева слов и дерева фраз.</p>

<p class=MsoNormal>Кроме того, с Пульта можно посылать стимулирующие действия с
помощью кнопок под блоком ввода текстов. Эти кнопки имеют позитивное или
негативное воспитательное воздействие, особенно кнопки “Наказать” и “Поощрить”.
</p>

<p class=MsoNormal>Перед отсылкой фразы можно сначала набрать сочетание
стимулирующих действий (не более двух), а также уточнить тон и настроение
оператора. И тогда будет распознан обобщенный стимул, состоящий из отдельных
компонентов. Такой стимул имеет свой уникальный идентификатор и участвует в распознавании
текущей ситуации в составе веток трех деревьев: рефлексов, автоматизмов и
общего дерева понимания ситуации.</p>

<h2><a name="_Toc121642960">Эффекторы</a></h2>

<p class=MsoNormal>В редакторе Пульта “Действия” могут быть предопределены “наследственно”
сформированные действия. Причем, первая часть таких действий отражает уже
имеющиеся кнопки стимулирующих действий для того, чтобы иметь возможность
отзеркалить их у оператора. В редакторе эти действия не могут удаляться (но
могут меняться их названия), они имеют светло-серый тон. </p>

<p class=MsoNormal><span style='color:black'>Практически все описанные в виде
слов и фраз действия - в природе реализуются цепочками безусловных рефлексов
(инстинктами). Так что под каждым названием действия подразумеваются все
необходимое для выражения данного действия в природе.</span></p>

<p class=MsoNormal>Кроме наследственно предопределенных действий (редактируются
до стадии рождения) формируются образы действий для адаптивных функций
реагирования.</p>

<h3><a name="_Toc121642961">Две области моторного терминала уровня психики:</a></h3>

<p class=MsoNormal><b>Область Брока</b> <span lang=EN-US>VerbalFromIdArr</span>=<span
lang=EN-US>make</span>(<span lang=EN-US>map</span>[<span lang=EN-US>int</span>]*<span
lang=EN-US>Verbal</span>) отвечает за смысл распознанных слов и словосочетаний,
за конструирование собственных словосочетаний, за моторное использование слов и
словосочетаний.</p>

<p class=MsoNormal>За все это ответственна структура - образ осмысленных слов и
сочетаний.</p>

<p class=MsoNormal><b>Область моторных действий</b> <span lang=EN-US>ActivityFromIdArr</span>=<span
lang=EN-US>make</span>(<span lang=EN-US>map</span>[<span lang=EN-US>int</span>]*<span
lang=EN-US>Activity</span>) отвечает за смысл распознанных действий с Пульта,
за конструирование собственных последовательностей действий, за моторное
использование действий.</p>

<p class=MsoNormal>За все это ответственна структура - образ осмысленных
действий и их сочетаний.</p>

<h3><a name="_Toc121642962">Ментальные управляющие действия</a></h3>

<p class=MsoNormal>Кроме моторных действий есть <b>ментальные действия</b>: управление
элементами системы адаптивности. Для них так же предусмотрена структуры для
сохранения объектов таких образов управляющих действий.</p>

<h2><a name="_Toc121642963">Область наследственно предопределенных реакций</a></h2>

<p class=MsoNormal>Принципиальное отличие <span lang=EN-US>Beast</span><span
lang=EN-US> </span>от проектов, использующих различные технологии ИИ – это
наличие системы индивидуальной адаптивности на основе жизненных параметров. К
ним относятся:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Жизненные параметры</b> – определяют первичную
гомеостатическую цель адаптации, меняют значение под воздействием внешних и
внутренних раздражителей.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Базовое состояние</b> – три первичных уровня самоощущения,
направляющих процесс адаптации: Плохо, Норма, Хорошо. Базовое состояние бывает
локальным, для каждой Базовой потребности, и интегральным, на основе локальных
состояний всех Базовых потребностей. Жизненное состояние <span lang=EN-US>Beast</span><span
lang=EN-US> </span>всегда находится в одном из Интегральных базовых состояний.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Порог выхода из нормы </b>– значение Жизненного параметра, пересечение
которого изменяет Базовое состояние. Есть локальный Порог для каждой Базовой
потребности, есть общий Порог, определяющий Интегральное базовое состояние на
основе локальных Порогов Базовых потребностей.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Базовые контексты </b>– стили реагирования, активирующиеся при
изменениях значений Базовых потребностей и Интегрального базового состояния.
Комбинация текущих активных контекстов образуют гомеостатический Образ
восприятия, запускающий Безусловные рефлексы. Кроме того, существуют тормозные
связи между Базовыми контекстами, задающие пары контекст – антагонист, которые
не могут быть одномоментно активны.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Базовые действия </b>– активные действия с Пульта, посылаемые
оператором, и воздействующие на Базовые потребности, изменяя их значения.</p>

<p class=MsoNormal>Оператор, через Базовые действия Пульта меняет значения
Базовых параметров, что вызывает изменения Базовых контекстов, провоцирующих
изменение Базового состояния и активацию Безусловных рефлексов. Рефлексы в
качестве ответной реакции запускают аналогичные Базовые действия. В результате
образуется система индивидуальной адаптации: действия оператора изменяют
Базовое состояние <span lang=EN-US>Beast</span>, ответные действия рефлексов,
спровоцированные действиями оператора, стабилизируют эти изменения.</p>

<p class=MsoNormal>В физиологии есть понятие “безусловного рефлекса” – моторной
реакции в ответ на определенные условия, так что это следовало бы назвать “условными
рефлексами”, а то, что называют” условными рефлексами” следовало бы назвать “рефлексами-синонимами”.</p>

<p class=MsoNormal>Но кроме таких реакций наследственно предопределено огромное
количество других видов структур, для которых упущена какая-то классификация.
Эти структуры управляют не внешне наблюдаемыми моторными действиями, а “внутренними”
действиями по управлению элементами системы адаптивности. Наиболее очевидные –
структуры, обеспечивающие формирование рефлексов мозжечка, структуры,
блокирующие выполнение моторных реакций во сне, структуры гиппокампа,
управляющие потоками активностей, выделяя среди них наиболее значимое и
подставляя эту активность структурам лобной коры для информационной обработки.</p>

<p class=MsoNormal>Огромное разнообразие наследственно предопределенных
структур лобных долей обеспечивают потенциал возможностей информационной
обработки и формирование новых автоматизмов (вот так коротко упомянуто все
разнообразие управляющих структур).</p>

<p class=MsoNormal>В проекте такие структуры реализованы в виде уже готовых
функций, а также функций, формирующих последовательности управляющих функций,
что является основой осознанной произвольности (fornit.ru/12787). Правомерность
создания таких функций и вообще любых воображаемых функций (полезных и нет
обусловлена тем, что в ходе развития лобных отделов могли возникать и выдержать
отбор полезности самые разные функциональные связи. На основе же удачных и
закрепленных в популяции функций возникало уже новое разнообразие, придавая
особям разный спектр потенциальных возможностей. </p>

<p class=MsoNormal>Судя по тому, как постепенно удается развивать схемотехнику <span
lang=EN-US>Beast</span>, в лобных долях возникло множество уровней
последовательной иерархии механизмов управления.</p>

<p class=MsoNormal><a name="_Hlk121377332">Существует качественно различные стадии
развития личного представления о своем Я и только на пятой из них, в возрасте
5-6 лет начинает формироваться образ “Я” (<span style='color:black'>fornit.ru/64933</span>),
а это – первый и центральный из всех других образов моделей понимания. Это
означает, что существует не меньшее число последовательных уровней механизмов
формирования этих явлений.</a></p>

<h3><a name="_Toc121642964">Безусловные (наследственные) рефлексы</a></h3>

<p class=MsoNormal>Наследственно предопределенные моторные реакции называют
безусловными рефлексами, а их цепочки – инстинктами. В коде они названы <span
lang=EN-US>GeneticReflex</span>. Наследственно предопределены не только внешне
направленные моторные реакции, но и любые внутренние структуры мозга потому как
любой предшественник данного нейрона – это его рецептор, а последующий нейрон –
эффектор. Условия образования связей универсальны, и наследственная
предопределенность создает множество связей уже подготовленных локализацией
нейронов и их отростков. </p>

<p class=MsoNormal>Здесь будем рассматривать классический безусловный рефлекс
типа стимул-ответ.</p>

<p class=MsoNormal>Такой рефлекс характеризуются внешним действием, выполняемым
при определенных условиях (распознается профилем активации рефлекса). Но
действия могут быть не только моторными, но и изменяющими состояние внутренней
среды организма, что дополняет определение наследственного рефлекса. Мало того,
логично сделать определение более универсальным, если учесть не только внешние,
но вообще любые эффекторные активности, то любой нейрон является детектором
рефлекса. Поэтому “безусловными”, точнее наследственно предопределенными
являются любые функциональные механизмы мозга. </p>

<p class=MsoNormal>Но чтобы оставаться в соответствии с классической
классификацией, ограничим определение “безусловных рефлексов” рефлексов только
мышечными действиям.</p>

<p class=MsoNormal>Распознавание актуального рефлекса в зависимости от условий
происходит деревом рефлексов, активная ветка которого имеет уникальный
идентификатор образа рефлекса в данных условиях. На Пульте дерево рефлексов
можно видеть на странице “Редактор безусловных рефлексов”.</p>

<p class=MsoNormal>При реализации механизмов безусловных рефлексов
рассматривались следующие аспекты.</p>

<p class=MsoNormal>1. Стоит иметь в виду, что <b>предопределенные генетически
рефлексы в природе не возникают сразу в виде эффективных нейроцепей пока не
возникнет ситуация, отвечающая условиям такой актуализации.</b></p>

<p class=MsoNormal>2. При каждом запуске возникает довольно ресурсоемкий
процесс проверки всех рефлексов, сопоставляя с деревом. Даже если добавляется
новый рефлекс, то он довешивается уже в этом процессе.</p>

<p class=MsoNormal>3. Трудно отслеживать получающуюся картину и понять, почему
иногда не отрабатывают отдельные рефлексы, а в другом случае – отрабатывают.
Есть такая неприятность: при выходе через Выключить <span lang=EN-US>Beast</span><span
lang=EN-US> </span>нормально записывается накопившееся в файлы памяти, а при
остановки из дебаг-версии <span lang=EN-US>IDE</span><span lang=EN-US> </span>–
этого не происходит (не отрабатывает <span lang=EN-US>main</span>.
cleanupFunc()).</p>

<p class=MsoNormal>Учитывая все это, была убрана функция, заранее заполняющая
дерево рефлексов по имеющимся рефлексам из писка редактора безусловных
рефлексов, и дерево рефлексов (и образы сочетаний) заполняется по мере реально
встречающихся рефлексов.</p>

<p class=MsoNormal>Безусловные рефлексы получились в своем процессе
формирования полностью соответствующими природной реализации. Но действия <span
lang=EN-US>Beast</span>, описанные на странице Пульта “Действия <span
lang=EN-US>Beast</span>”, по смыслу их названий представляют собой не одиночный
моторный рефлекс, а целую их совокупность, то, что называется инстинктами.</p>

<h3><a name="_Toc121642965">Древние безусловные рефлексы</a></h3>

<p class=MsoNormal>Так названы первичные реакции, возникающие при формирование
связей с эффекторами. По закону формирования связей между нейронами,
пейсмеккерная активность созревших, но не имеющих рецепторной специализации
эффекторов, может сочетаться с активностью уже имеющихся рецепторов, образуя
первичную специализацию. </p>

<p class=MsoNormal>В редакторе Пульта “Действия <span lang=EN-US>Beast</span>”
действию может быть придана первичная связь: “Какие ID гомео-параметров
улучшает действие”. Имеется в виду, что то или иное действие может влиять на
жизненные параметры в лучшую сторону и быть полезным при активации. Поэтому
становится возможным при текущем состоянии жизненных параметров определять
улучшающие их действия. Это и названо древними, простейшими безусловными
рефлексами. Эти рефлексы имеют преемственное значение в реализации схемы <span
lang=EN-US>Beast</span> – для одного из методов формирования новых
автоматизмов.</p>

<p class=MsoNormal>Безусловные рефлексы у B<span lang=EN-US>e</span>ast – это жестко
запрограммированные реакции на действия кнопок с Пульта. Такая система
реагирования задается в первичной 0 стадии до рождения <span lang=EN-US>Beast</span>
на странице “Рефлексы” через заполнение справочников и шаблонов. По аналогии с
природной нервной системой это - закрепленные эволюционным отбором не
изменяемые и не угасаемые реакции.</p>

<p class=MsoNormal>Рефлекторное реагирование происходит разово при возникновении
пусковых условий, формирующих итоговый Образ восприятия TriggerStimulsArr из
трех видов сенсорики:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Изменение Базового состояния</b> – если изменилось базовое состояние
Плохо, Норма, Хорошо</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Изменение Базовых контекстов</b> – если изменилось сочетание текущих
активных базовых контекстов</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Изменение Пусковых стимулов </b>– если было активировано сочетание
кнопок действий с пульта</p>

<p class=MsoNormal>Комбинация трех уровней Образа восприятия учитываются только
в порядке, указанном выше, задавая тем самым древовидную структуру Образа
восприятия. Это означает, что возможны комбинации Базового Состояния и Базовых
контекстов, без учета Пусковых стимулов, но не возможны комбинации Базового
Состояния и Пусковых стимулов без учета Базовых контекстов. Образ восприятия
всегда формируется в порядке: Базовое Состояние – Базовые контексты – Пусковые
стимулы.</p>

<p class=MsoNormal>Это в свою очередь задает иерархию активации трех типов
безусловных рефлексов:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Древнейший безусловный рефлекс</b> – активируется на сочетание
изменений Базового состояния и Базовых контекстов, как внутренняя пассивная
стабилизирующая реакция. Определяется по данным редактора на Пульте “Действия”,
в колонке «Какие ID гомео-параметров улучшает действие». Служит реакцией «по
умолчанию», когда нет подходящего Образу восприятия рефлекса. В этом случае <span
lang=EN-US>Beast</span><span lang=EN-US> </span>по текущей проблеме (какие
Базовые потребности вышли из Норма) по данным справочника находит и активирует
нужные действия.</p>

<p class=MsoListParagraphCxSpMiddle>Изменения сочетаний Базовых контекстов в
ответ на изменения уровней Базовых параметров это - тоже безусловный рефлекс,
заданный так же не явно через справочники на странице “Гомеостаз”.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Древний безусловный рефлекс </b>– активируется на сочетание изменений
Базового состояния и Базовых контекстов, по данным редактора рефлексов, где не
заполнен столбец Пусковых стимулов.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>Классический безусловный рефлекс </b>– активируется полным пусковым
Образом восприятия, когда есть изменения Базового состояния, Базовых контекстов
и Пусковых стимулов.</p>

<p class=MsoNormal>Активизация происходит по правилу: если активны все три
уровня Образа восприятия, ищется Классический безусловный рефлекс, если только
первые два – Древний безусловный, если ничто не нашлось – древнейший
безусловный. Таким образом на изменение сочетаний Базовых контекстов и Базового
состояния всегда будет как минимум реакция от Древнейшего безусловного
рефлекса.</p>

<p class=MsoNormal><a href="report_img/image003.png" target="show_pic"><img border=0 width=750 height=auto
src="report_img/image003.png" alt="Дерево рефлексов"></a></p>

<p class=MsoNormal>Выполнение Безусловного рефлекса означает выполнение
действий, параметры воздействий которых задаются в редакторе “Действия”.
Собственно, в этом и состоит гомеостатическая цель рефлекса – спровоцировать
такие изменения вышедших из Норма Базовых потребностей, которые будут
способствовать их возврату в Норму. При этом очевидна ограниченность такого
реагирования: далеко не всегда одиночное действие способствует стабилизации
разбалансированной Базовой потребности, и нет никакой возможности оценить
последствия выполнения рефлекса и улучшить его. Рефлекс всегда будет
выполняться при возникновении пускового Образа восприятия. Единственное, что
можно сделать на этом уровне – через механизм условных рефлексов временно
переопределить Образ восприятия с одного рефлекса на другой. Но полноценная
модификация, вплоть до создания новых вариантов реагирования происходит только
на уровне Автоматизмов.</p>

<h2><a name="_Toc121642966">Условные рефлексы</a></h2>

<p class=MsoNormal>Для формирования концепции реализации условных рефлексов <a
href="/adaptologiya/beast/about_conditions_reflex.php">были обобщены</a>
доступные в источниках определения и описания функциональности этого вида
рефлексов так, что отсеялось то, что не может быть реализовано на данной стадии
развития в виду отсутствия необходимой информации. В результате получилось
следующее.</p>

<p class=MsoNormal><a name="_Toc121642967"><span class=3><span
style='font-size:14.0pt;line-height:107%;font-family:"Arial",sans-serif'>Для
образования условных рефлексов необходимо</span></span></a></p>

<p class=MsoNormal><span style='color:black'>1. Совпадение во времени
(сочетание) какого-либо индифферентного раздражителя (условного) с
раздражителем, вызывающим соответствующий безусловный рефлекс (безусловный
раздражитель).<br>
2. Необходимо, чтобы действие условного раздражителя несколько предшествовало
действию безусловного.<br>
3. Условный раздражитель должен быть не вызывающим значительной самостоятельной
реакции.<br>
4. Рефлекс возникает только после нескольких повторений сочетаний 2
(news_detectior.go: if tempImg.Count &gt; 2 - в func updateNewsConditions(rank
int)), это избавляет от случайных связей.<br>
Условный рефлекс может образовываться на основе безусловного или на основе
имеющегося безусловного, используя действия исходного рефлекса для новых
условий. Такие цепи рефлексов ничем не ограничены.</span></p>

<p class=MsoNormal><a name="_Toc121642968"><span class=3><span
style='font-size:14.0pt;line-height:107%;font-family:"Arial",sans-serif'>Условия
затухания условного рефлекса</span></span></a></p>

<p class=MsoNormal><span style='color:black'>1. Долгое отсутствие пускового
стимула (узла ветки, с которого он запускается) – это легко реализуется
добавлением в структуру усл. рефлекса lastActivation int – в числе пульсов и
времени протухания истекших рефлексов;<br>
2. Действие конкурентных раздражителей – т.е. подавление конкурентными
рефлексами и автоматизмами – т.е. если есть более значимый рефлекс или любой
автоматизм на тот же пусковой стимул, то он блокирует условный рефлекс. В
структуре условного. рефлекса есть его ранг (число цепочки родителей), чем он
выше, тем рефлекс приоритетнее среди других. Автоматизм приоритетнее любого
рефлекса.<br>
3. При отсутствии «подкрепления» после совершенного действия. Но безусловные
рефлексы не угасают при этом, они безусловны и по отношению к тому, что
происходит после действия и их «подкрепление» – обусловлено наследственной
эволюцией: безусловные рефлексы постоянны, даны от рождения и не угасают на
протяжении всей жизни. У условных рефлексов точно та же функциональная задача,
только с новыми стимулами, значит, им так же не нужно последующее
подкреплением. В литературе часто путается отсутствие подкрепления с
дезадаптацией, а также условные рефлексы и автоматизмы, образующиеся при
осознании.<br>
4. Разные условные рефлексы без подкрепления угасают с неодинаковой скоростью.
Более «молодые» и непрочные условные рефлексы угасают быстрее, чем более
«старые», прочные условно-рефлекторные связи (func conditionRexlexFound).</span></p>

<h3><a name="_Toc121642969">Алгоритм формирования условного рефлекса</a></h3>

<p class=MsoNormal><span style='color:black'>1. Условный рефлекс возникает там,
где нет безусловного на основе нового стимула N, привязывая к нему действия
того рефлекса (условного или безусловного), которое вызывало реакцию ПОСЛЕ
данного нового стимула M.<br>
2. Но теперь если в восприятии появляется стимул N, то вызываемый им условный
рефлекс перекрывает все рефлексы более низкого уровня, в том числе условные
меньшего уровня.<br>
Так что в структуре безусловного рефлекса предусмотрен параметр: rank int,
который увеличивается, если реакция наследуется от условного рефлекса и тогда
рефлекс с рангом выше, перекрывает все что рангом ниже. По умолчанию у
безусловных рефлексов rank равен 0.</span></p>

<p class=MsoNormal>При разработке было выявлено очевидное заблуждение в
классической интерпретации условных рефлексов, утверждающее, что для
поддержания условного рефлекса нужно обязательное подкрепление.</p>

<p class=MsoNormal>Факт: <i>собака перестает бежать к еде по звонку, если не
видит еду несколько раз после звонка.</i></p>

<p class=MsoNormal>Тут действует именно то, что она не видит еду, оценивает
ложность звонка, т.е. у нее не условный рефлекс, а более высокоуровневый
осознанный автоматизм, который исследователи путают с рефлексом.<span
style='color:#333333;background:white'> Разные&nbsp;условные&nbsp;рефлексы&nbsp;без&nbsp;подкрепления&nbsp;угасают&nbsp;с
неодинаковой скоростью. Более &quot;молодые&quot; и непрочные&nbsp;условные&nbsp;рефлексы&nbsp;угасают&nbsp;быстрее,
чем более &quot;старые&quot;, прочные&nbsp;условно-рефлекторные связи.</span></p>

<p class=MsoNormal>Итак, пример: если при прикосновении к миске с водой начало
бить током, у животного срабатывает безусловный рефлекс отдергивания. При
повторении несколько раз сам образ миски с водой начинает вызывать
отдергивание. Это – отличается от классической интерпретации: рефлекс возникает
в результате подкрепления (в данном случае отрицательного). Нет, подкрепление
уже сопровождает базовый рефлекс отдергивания, а не является причиной появления
рефлекса.</p>

<p class=MsoNormal>Описанный эффект хорошо наблюдать у кошек не слишком умных
пород: они очень трудно поддаются обучению подкреплением, которое предполагает
сопоставление произошедшего с событием подкрепления. Если попытаться отучить
орать кошку по ночам методом кидания тапочка, то кошка воспринимается события поражения
тапком в полном отрыве от своего мяукания, это – для нее – свое, особе событие.
И сочетания “замяукала” - “получила тапком” не происходит ни на уровне
формирования рефлексов (множественным повторением), ни на уровне формирования
осознанных автоматизмов.</p>

<p class=MsoNormal>Более подробный разбор экспериментов, почему «условный
рефлекс» на самом деле является в большинстве случаев автоматизмом можно
посмотреть <a href="../../adaptologiya/beast/about_conditions_reflex.php">здесь</a><span
class=MsoHyperlink>.</span></p>

<h3><a name="_Toc121642970">Распознавание условного рефлекса</a></h3>

<p class=MsoNormal>Условные рефлексы распознаются при активации дерева
рефлексов с помощью функции распознавания условного рефлекса:</p>

<p class=MsoNormal>1. С помощью findConditionsReflesFromPrase( из всех
у.рефлексов с данным ID образа пускового стимула (imgId3) выбирается тот, что
подходит к данным условиям 1 и 2 уровня.</p>

<p class=MsoNormal>2. Если на Пульте была вбита фраза, для которой нет imgId3,
то фраза очищается от неалфавитных символов и снова пробуется найти подходящий
imgId3</p>

<p class=MsoNormal>3. Если все еще нет подходящего imgId3 то фраза
комбинируется: перебираются все сочетания слов до максимального числа, без
перемешивания, не менее чем по 2 слова</p>

<p class=MsoNormal>4. Если все еще нет подходящего imgId3 то пробуются все
слова фразы, не менее 5 символов.</p>

<p class=MsoNormal>Это позволяет найти условный рефлекс среди длинной фразы,
например, во фразе &quot;я боюсь тебя&quot; будет найден рефлекс на слово
&quot;боюсь&quot;.</p>

<h3><a name="_Toc121642971">Общее описание реализации</a></h3>

<p class=MsoNormal>С 1 стадии (после рождения) с помощью Условных рефлексов
начинается адаптация в течении жизни одной особи, хотя и ограниченная
существующим набором Безусловных.</p>

<p class=MsoNormal>Условные рефлексы <span lang=EN-US>Beast</span><span
lang=EN-US> </span>формируются, если в течении одного сеанса активации (до
момента выключения или перехода в режим сна) было не менее 3 повторов сочетаний
следующей ситуации: перед текущим пусковым Образом, активировавшим безусловный
рефлекс был предшествующий Образ, который ничего не активировал, так как на
него не было рефлекса.</p>

<p class=MsoNormal>Образ активации Безусловных рефлексов (уникальная ветка
дерева рефлексов) включает в себя Базовое состояние, сочетание Базовых
контекстов и сочетание Базовых действий с пульта (нажатие кнопок действий). Для
Условного рефлекса такой Образ дополняется фразой, тоном и настроением
сообщения с Пульта. Этот Образ, строго говоря, общий для всех типов рефлексов,
просто для Безусловных фраза, тон и настроение не учитываются. Поэтому
Безусловные рефлексы не реагируют на вербальные раздражители, а только на
изменение контекстов и/или действий.</p>

<p class=MsoNormal>Условные рефлексы это - простейший способ определения
причинно-следственной связи, когда выделяется повторяющаяся пара последовательно
возникающих раздражителей, из нее формируется новый пусковой Образ и он
начинает активировать Безусловный рефлекс. Это позволяет получить реакцию <span
lang=EN-US>Beast</span><span lang=EN-US> </span>на вербальные раздражители,
если после отправки с Пульта фразы, на которую не будет реакции ввиду
отсутствия рефлекса на такой раздражитель, следующим шагом отправить действие
(нажать кнопки действий), на которые есть безусловно-рефлекторная реакция. Если
такое сочетание повторится не менее трех раз, сформируется Условный рефлекс и
теперь <span lang=EN-US>Beast</span><span lang=EN-US> </span>будет реагировать
на фразу как на действия кнопок, хотя они могут и не нажиматься. Потому что, как
и у Безусловных рефлексов, здесь так же есть мягкое распознавание на не полный
Образ восприятия.</p>

<p class=MsoNormal><a href="report_img/image004.png" target="show_pic"><img border=0 width=750 height=auto id="Рисунок 1"
src="report_img/image004.png" alt="Условные рефлексы"></a></p>

<p class=MsoNormal>Пример формирования условного рефлекса:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>Оператор (отправляет текст с Пульта): привет</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>Beast</span>: нет реакции</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>Оператор (отправляет действие с Пульта): жмет кнопку
«Обрадоваться»</p>

<p class=MsoNormal>Цикл повторяется 3 раза, в результате создается Условный
рефлекс: на фразу Оператора «привет» <span lang=EN-US>Beast</span><span
lang=EN-US> </span>реагирует действием от пускового раздражителя «Обрадоваться»
- [улыбается, смеется]. Можно сделать прошивку Условного рефлекса за один раз,
если активировать на Пульте флажок «Режим форсированной обработки».</p>

<p class=MsoNormal>Каждый Условный рефлекс имеет «время жизни», при создании
ему дается 30 дней, затем при каждой активации оно удваивается. Если же
активации в течении 30 дней не случилось, время жизни уменьшается на ту же
величину и в конечном итоге, если время жизни обнуляется, рефлекс блокируется.
Таким образом, чем чаще он активируется, тем дольше он живет – укрепляется.
Никаких других «подкреплений», положительных или отрицательных, кроме частоты
активаций у него нет. Это идет вразрез с текущими представлениями о природе и
свойствах Условных рефлексов потому, что все описываемые эффекты, зафиксированные
экспериментально, относятся в основном к автоматизмам, у которых есть оценка
успешности и соответственно механизмы изменения веса уверенности. Рефлекс же по
определению это изначально прошитая неизменная реакция, где не предусмотрено
никаких модификаций. Поэтому Условный рефлекс – предел адаптации на
рефлекторном уровне за счет создания временной связи между новым пусковым
стимулом и существующим рефлексом, которая имеет свойство затухания.</p>

<h2><a name="_Toc121642972">Автоматизмы</a></h2>

<p class=MsoNormal>Основное ограничение рефлекторного реагирования в том, что
при таком реагировании никак не учитывается возможная неадекватность Рефлекса
при изменившихся внешних условиях, что означает единственную возможность
адаптации только при смене поколений и удачной новой мутации, формирующей другой,
более подходящий Рефлекс. Для адаптации в течение жизни одной особи нужен
дополнительный маркер в виде оценки изменения Базового состояния: стало лучше
или стало хуже после выполнения ответных действий. Но так как рефлекторное
реагирование, не подразумевающее никаких оценок, и выполняемое в любом случае
при активации Пускового образа, уже не годится, то нужен принципиально новый
тип реакции.</p>

<p class=MsoNormal><b>Моторный автоматизм</b> – ответная реакция, способная
модифицироваться (блокироваться, усиливаться) в зависимости от оценки изменения
текущего Базового состояния Плохо/Норма/Хорошо по принципу: стало лучше/стало
хуже. При улучшении Базового состояния после реагирования, автоматизм
закрепляется, при ухудшении - блокируется. Автоматизмы в отличие от Рефлексов,
формируемых эволюционным отбором полезных мутаций, позволяют особи
адаптироваться в течение ее жизни. Автоматизм имеет приоритет активации над
Рефлексом, что означает: Рефлекс активируется, только если нет автоматизма на
аналогичный пусковой образ.</p>

<h3><a name="_Toc121642973">Автоматизмы – новое понятие для академической науки</a></h3>

<p class=MsoNormal>Автоматизмы – слабо освещенная в академических источниках
тема. Обычно их или путают с условными рефлексами или так называют
психопатологии типа Синдром Кандинского. Затруднения в понимании возникает,
начиная с функциональности “ориентировочного рефлекса” на новые ситуации, для
которых нужно или использовать подходящую привычную реакцию или, если такой
нет, сформировать наиболее подходящую по аналогии, или отзеркалив у другой
особи, или случайно. Такие реакции никак не соответствуют механизмам
формирования рефлексов и обладают совершенно иными свойствами, главные из
которых следующие:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>они формируются за один раз, а не повторением стимула.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>они не затухают (как и безусловные рефлексы).</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>они чувствительны к последствиям: могут блокироваться при неудаче
в данных условиях или становиться более уверенными при удачных последствиях.</p>

<p class=MsoNormal>Но самое важное: автоматизмы могут быть как с моторным
действием, таки и с ментальным, т.е. воздействовать на отдельные элементы
механизмов адаптивности.</p>

<p class=MsoNormal>Автоматизмы всегда – продукт деятельности лобных долей и
поэтому в проекте отнесены к психике, хотя являются некоей границей
рефлекторного и психического. Только самые первые автоматизмы формируются без
участия мышления (например, зеркальные автоматизмы, схожие с импринтингом, но
организованные более гибко), а на более высокой стадии развития ментальные
механизмы существуют только для того, чтобы в конечном счете сформировать
моторный автоматизм, проверить его и сохранить результаты.</p>

<p class=MsoNormal>Более подробно про автоматизмы: fornit.ru/19819, <span
lang=EN-US>fornit</span>.<span lang=EN-US>ru</span>/23264.</p>

<p class=MsoNormal>В проекте есть поддержка формирования всех видов
автоматизмов и распознавания их актуальности для данных условий.</p>

<p class=MsoNormal>Для формирования автоматизма сначала выясняется наиболее
актуальная цель (сначала на уровне состояния жизненных параметров), создается
прототип пробного действия и сразу запускается на выполнение, после чего
ожидается эффект от такого действия. Эффект или блокирует неудачный автоматизм
или повышает уверенность в его полезности. Для получения эффекта в течение
разумного промежутка времени, позволяющего отнести изменения к действию (в
проекте 25 секунд) ожидается или изменение состояния или стимул от действий
оператора с Пульта.</p>

<p class=MsoNormal>В случае формирования автоматизма ментальными функциями цель
может отличаться от задачи улучшить жизненные параметры и тогда эффект от
действий оценивается как достижение такой цели или неудача.</p>

<p class=MsoNormal>Уже на этом уровне организации механизмов формирования
автоматизмов сложность реализации нарастает лавинообразно из-за множества
особенностей возможных ситуаций, но не выходит за рамки возможности осмысления.
По коду вполне возможно отследить и понять все особенности реализации.</p>

<p class=MsoNormal>В Пульте предусмотрены редакторы, позволяющие сильно
сократить период воспитания и образования базовых моторных автоматизмов, но
далее такие методы становятся все менее эффективными.</p>

<p class=MsoNormal>Для распознания уникальных условий создано дерево
автоматизмов, к конечным узлам веток которого может быть привязано сколько
угодно подходящих к этим условиям моторных автоматизмов (составляя базу
негативного опыта), и только один из них назначается штатным – срабатывающем
при активации данной ветки.</p>

<p class=MsoNormal>Дерево автоматизмов отслеживает условия по уникальным
идентификаторам активных в данный момент образов и поэтому имеет фиксированное
число узлов в ветке, что очень эффективно улучшает производительность (по
сравнению с тем, как если бы использовались компоненты образов, что сделало бы
работу дерева просто нереальной).</p>

<p class=MsoNormal>Автоматизмы – реакции, рассчитанные на выполнения без
раздумий, настолько же быстро и эффективно как рефлексы. Но всегда могут
появиться новые условия, в том числе в результате накопления субъективного
опыта, когда в контексте текущей информационной картины (что это такое будет
показано позже) данный автоматизм может оцениваться как неприемлемый. Кроме
того, авторитарно созданные зеркальные автоматизмы на более высокой стадии
развития подвергаются сомнению. Так что существует целый ряд уровней обработки
автоматизма, готового быть выполненным перед его выполнением. Самый первый
уровень - самый быстрый и почти не задерживает автоматизм. Это будет
рассмотрена в разделе “Четыре уровня обработки информации актуальных объектов
внимания”.</p>

<h3><a name="_Toc121642974">Общее описание реализации</a></h3>

<p class=MsoNormal>Запущенный Моторный автоматизм активирует интегрированный
Образ ответных действий ActionsImageID, включающий в себя действие, фразу, тон
сообщения и настроение, с регулируемой силой Energy в градации от 1 до 10, при
этом только что созданный автоматизм выполняется с усилием по умолчанию 5. Это
позволяет подстраивать автоматизм для текущих условий, меняя образ и силу
воздействия, но не обязательно как свойство автоматизма, а как дополнительный
параметр (обычно определяемый мозжечковым рефлексом). Успешность выполнения
определяется через параметр Usefulness, показывающий (бес)полезность Моторного
автоматизма. </p>

<p class=MsoNormal>Подробнее структура Моторного автоматизма:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>BranchID </b>– код привязки автоматизма, в качестве которого
может быть:</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>уникальный идентификатор ветки дерева автоматизмов</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>уникальный идентификатор образа действий оператора с пульта ActivityID</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>уникальный идентификатор фразы оператора с пульта VerbalID</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Usefulness</b> – (бес)полезность автоматизма:  от -10 вред,
через нейтральный 0 до +10 польза</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ActionsImageID</b> – уникальный идентификатор образа
выполняемых действий автоматизма</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Energy</b> – сила автоматизма, от 1 до 10, по умолчанию = 5</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Belief</b> – степень уверенности выполнения автоматизма.
Принимает значения:</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>0</b> – предположение</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>1</b> – чужие сведения</p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>2</b> – проверенное собственное знание</p>

<p class=MsoNormal style='margin-left:35.4pt'>Уверенность <span lang=EN-US>Belief</span><span
lang=EN-US> </span>в авторитарном автоматизме высока в период авторитарного
обучения и падает в период собственной инициативы, когда нужно на себе
проверить, а даст ли такое действие улучшение. Только один из автоматизмов,
прикрепленных к ветке, может иметь Belief = 2, проверенное собственное знание.
Если задается Belief = 2, остальные Belief = 2 становится Belief = 0 оказываясь
запасным опытом.</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Count</b> – надежность. Число использований с подтверждением
(бес)полезности <span lang=EN-US>Usefulness</span>. В случае, если в результате
автоматизма его Usefulness изменит знак, то Count обнулится, а при таком же
знаке - увеличивается на 1.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>GomeoIdSuccesArr</b> – массив идентификаторов гомео-параметров,
которые улучшает автоматизм.</p>

<p class=MsoNormal><b>ActionsImageID</b> – интегрированные образы действий
оператора или Beast. Фактически структура повторяет ActionsImage из рефлексов и
позволяет сохранять как образы действий в автоматизмах, так и образы действий
оператора, отражаемые в дереве моторных автоматизмов.</p>

<p class=MsoNormal>Структура ActionsImageID<b>:</b></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ActID</b> – массив кодов действий</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b><span lang=EN-US>PhraseID</span></b><span lang=EN-US> </span>–
массив <span lang=EN-US>кодов </span>фраз</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ToneID</b> – тон сообщения оператора</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>MoodID</b> – настроение оператора</p>

<p class=MsoNormal>Моторные автоматизмы обычно привязаны к ветке Дерева
моторных автоматизмов, которое задает виды активации автоматизма от простых
одиночных стимулов, до сложных составных, когда для его активации учитываются
несколько составляющих. То есть дерево формирует интегрированный пусковой
стимул, который задает не просто комбинации пусковых стимулов, но и правила
таких комбинаций согласно иерархии уровней: можно комбинировать уровни 1,2 –
1,2,3 – 1,2,3,4, но нельзя: 1,3 – 2,4 – пропуская уровни. </p>

<p class=MsoNormal>Исключение сделано для комбинации стимулов «действие» и
«фраза» с пульта. В этом случае Моторные автоматизмы могут быть привязаны к
отдельным значениям интегрированного пускового стимула: только к фразе или
только к действиям с пульта. То есть в этом случае автоматизм активируется по
фразе или кнопке с пульта без учета тона и настроения.</p>

<p class=MsoNormal>Дерево автоматизмов активируется при следующих условиях:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>При любых событиях с Пульта – так же как дерево Рефлексов, но если к
ветке привязан автоматизм, то он выполняется преимущественно, блокируя Рефлексы
потому, что уже было произвольностью преодолено действие Рефлекса при выработке
автоматизма. Такой автоматизм обладает меткой успешности Usefulness &gt; 0.
Успешность 0 означает предположительный вариант действий, а успешность &lt; 0
заблокированный вариант действия. Поэтому к ветке может быть прикреплено
множество неудачных и предположительных автоматизмов и только один удачный.
Более удачный результат переводит ранее удачный автоматизм в предполагаемые.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>При произвольной активации отдельных условий. Отсутствие подходящей для
данных условий ветки дерева вызывает Ориентировочный Рефлекс привлечения
внимания к активной ветке с осмыслением ситуации и рассмотрением альтернатив
действиям (4 уровня глубины рассмотрения). При формировании нового
предположительного действия создается новая ветка дерева и к ней прикрепляется
автоматизм. Т.е. сами по себе новые условия не создают новой ветки, а только
новый автоматизм, а пока нет автоматизма, будет Ориентировочный рефлекс.</p>

<p class=MsoNormal>У дерева Моторных автоматизмов есть 6 фиксированных уровней,
задающих иерархию активации Автоматизма:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Базовое состояния: Плохо/Норма/Хорошо</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Эмоция, может произвольно меняться, независимо от базовых контекстов,
например при базовом состоянии Плохо может быть позитивная эмоция.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Образ сочетания действия с Пульта</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Образ контекста сообщения: сочетание тона и настроения. Например:
&quot;Обычный, Хорошее&quot;</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Первый символ фразы для оптимизации поиска по дереву</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Фраза</p>

<p class=MsoNormal>До 6-го уровня такая структура это - полный аналог Условным
рефлексам, только вместо сочетаний контекстов используется эмоция -
произвольная оценка своего состояния, основанная на Базовых контекстах.</p>

<p class=MsoNormal><a href="report_img/image005.png" target="show_pic"><img border=0 width=750 height=auto id="Рисунок 0"
src="report_img/image005.png" alt="Дерево Моторных автоматизмов"></a></p>

<p class=MsoNormal>База Моторных автоматизмов формируется 2 способами:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Клонированием существующих безусловных и условных рефлексов во второй
стадии развития Beast. В этом случае просто создаются Моторные автоматизмы в
виде копий Рефлексов: копируются их пусковые образы и ответные действия. Таким
образом сохраняется иерархия реагирования и появляется возможность модификации
наработанного эволюционным отбором опыта. Ведь Рефлексы нельзя модифицировать,
и в то же время для адаптации в течении жизни одной особи это как-то нужно
сделать. Решением будет модифицировать «копии Рефлексов».</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>Отзеркаливанием действий оператора, которые он совершил в ответ на
действия Beast, наработка примитивного личного опыта Beast.</p>

<p class=MsoNormal>В третьей стадии, в процессе диалога Beast с оператором
запоминается предыдущий ответ оператора как пусковой образ и к нему
привязывается ответное действие Beast. В результате получается, что Beast
использует ответы оператора в виде авторитарного указания, как надо
реагировать. Однако, таким образом можно только уточнять уже существующие
автоматизмы. Для случая их отсутствия выполняется следующий трюк: Beast просто
повторяет пусковой образ оператора, провоцируя его тем самым дать свой ответ на
него, который и запишется как вариант реагирования в виде <b>Зеркального
автоматизма</b>.</p>

<p class=MsoNormal><b>Зеркальный автоматизм</b> – стандартный моторный
автоматизм, но сформированный в процессе подражания действиям оператора
(импринтинга) с изначально установленной высокой степенью доверия
(авторитарно).</p>

<p class=MsoNormal>Пример такого диалога с отзеркаливанием:</p>

<p class=MsoNormal style='margin-bottom:0cm'><b>Оператор:</b> привет, как дела?</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
привет, как дела? (<span style='color:#00B050'>нет автоматизма на пусковой образ
«привет, как дела?», активируется его повтор</span>)</p>

<p class=MsoNormal style='margin-bottom:0cm'><b>Оператор:</b> нормально (<span
style='color:#00B050'>формируется зеркальный автоматизм: привет, как дела? -
нормально</span>)</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
нормально (<span style='color:#00B050'>нет автоматизма на пусковой образ
«нормально», активируется его повтор</span>)</p>

<p class=MsoNormal style='margin-top:10.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm'>В результате при следующем диалоге с такими же пусковыми
стимулами Beast активирует сформированные зеркальные автоматизмы и будет
отвечать, подражая оператору:</p>

<p class=MsoNormal style='margin-top:10.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm'><b>Оператор:</b> привет, как дела?</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
нормально</p>

<p class=MsoNormal>Таким образом происходит передача опыта реагирования от
оператора к Beast путем прямого подражания, как это делает попугай. Однако
очевидна и ограниченность такого подхода: шаги диалога не связаны между собой
общим контекстом, что приводит к неадекватным реакциям Beast. Он периодически
отвечает невпопад потому, что не учитывает контекст диалога, который он еще не
умеет определять на этой стадии развития.</p>

<h2><a name="_Toc121642975">Рефлексы мозжечка</a></h2>

<p class=MsoNormal>Это – еще один пример рефлексов, которые не могут быть
отнесены к безусловным или условным, а имеют свои особенности формирования и
назначение. Таких рефлексов в мозге формируется огромное количество, так что
объем мозжечка и число нейронов в нем оказываются сопоставимыми с корой
полушарий мозга. </p>

<p class=MsoNormal>Эти рефлексы формируются в период оптимизации моторных и
даже психических действий, в этом они похожи на автоматизмы. </p>

<p class=MsoNormal>Но назначение рефлексов мозжечка состоит в дополнительной
коррекции к основным действиям автоматизмов, позволяющее тем самым достичь
успеха в условиях новых ситуаций. В природе это – компенсация мышечных
сокращений в зависимости от положения тела и динамики движения. Такая
компенсация происходит по результату действия, которое может быть 1)
недостаточно сильным или наоборот, а также 2) окажется необходимым совершить
дополнительные действия для более правильного выполнения основного. Это – два
разных функциональных момента. </p>

<p class=MsoNormal>Но в любом случае если есть цель, становится механически
возможным найти недостаточность или избыточность действий, а также выяснить
дополнительные действия.</p>

<p class=MsoNormal>Поэтому можно сказать, что мозжечковые рефлексы - самый
первый уровень ментальных функций - подгонка действий под заданную Цель.
Поэтому они в проекте отнесены к психике.</p>

<p class=MsoNormal>Так что механизмы формирования рефлексов мозжечка
оказываются очень простыми, как и сами рефлексы. В то же время функциональность
таких механизмов оптимизируется очень не просто и в проекте далека от
завершения.</p>

<p class=MsoNormal>Кроме того, сильное ограничение сенсорики <span lang=EN-US>Beast</span>
и возможных действий уменьшают необходимость в рефлексах мозжечка, так что они
в проекте мало на что влияют. В схеме <span lang=EN-US>Beast</span><span
lang=EN-US> </span>они реализованы до 4-й стадии развития – для усиления
реакции в критических ситуациях, если Оператор не заметил или проигнорировал
реакцию. Более сложная координация не развита просто из-за скудности числа
элементов восприятия, которые просто не нужно так координировать.</p>

<h2><a name="_Toc121642976">Дерево понимания</a></h2>

<p class=MsoNormal>Для целей еще большего уточнения ситуации, чем это позволяет
сделать дерево автоматизмов, было сделано дерево понимания ситуации, где
добавлены два дополнительных уровня. Для распознавания условий автоматизмов они
не нужны, а для дополнения информативной картины уникальными особенностями
ситуаций представляются полезными. Возможно, что это дерево – избыточно и без
него можно обойтись, но сейчас это выяснить невозможно и потребуется дальнейшее
углубление разработки, чтобы стали ясны все плюсы и минусы уже сделанного.
Возможно, вместо дерева в следующей реализации будет использован просто образ
дополнительных элементов текущей ситуации.</p>

<p class=MsoNormal>То, что описано в данном разделе, слишком далеко выходит за
рамки понятий о глубоких уровнях адаптивности, которые еще возможно почерпнуть
в публикациях от академической науки. Текст будет достаточно понятным только
человеку, вникнувшему в суть реализованного и в таком качестве он – просто
краткое описание этой сути. Но здесь - начало пояснения самого важного рубежа,
разделяющего привычные, стереотипные реакции от психики, созданной природой как
способ нахождения новых решений с использованием информационного окружения
текущей ситуации. И этот способ – в передаче выделенной вниманием информации в
лобные доли, в единственный канал обработки этой информации, выработки решения
и оценке эффективности такого выбора по последствиям. Такой путь проследил еще
А. Иваницкий, описывая цикл удержания актуального стимула и связь его с лобными
долями (fornit.ru/7446).</p>

<p class=MsoNormal>Так что далее в этот раздел можно не вникать, он – для
разработчиков.</p>

<p class=MsoNormal>Более ранние представления полагали, что ментальные
автоматизмы имеют практически то же качество функционирования, что моторные
автоматизмы и привязываются к узлам дерева для точной идентификации условий их
запуска, а такое дерево называлось деревом ментальных автоматизмов. Но сейчас
очевидно, что ментальные автоматизмы – несравнимо более гибкие, свободные
образования, которые могут активироваться в любой момент, мало того,
активироваться один за другим целыми цепочками между активностью стимулов с
Пульта, т.е. они работают более интенсивно, как мысли, чем пульсовая
синхронизация.</p>

<p class=MsoNormal>Так что в данной версии реализации дерево понимания ситуации
просто активируется сразу вслед за деревом автоматизмов по факту тех же
стимулов с Пульта. Но просто доращивать дерево автоматизмов еще двумя уровнями
было бы во многих резонах неправильным, не только ухудшая быстроту и
эффективность, но привнося лишние сложности программно. Эти два уровня были бы
как лишний хвост у собаки.</p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='color:black'>Дерево понимания ситуации имеет 4 фиксированных уровней
(кроме базового нулевого) в следующем формате записи:
ID|ParentNode|Mood|EmotionID|SituationID|PurposeID<br>
Узлы всех уровней могут произвольно меняться на другие для переактивации
Дерева.<br>
<br>
Дерево может переактивироваться при срабатывании мент. автоматизмов с
действиями MentalActionsImages.activateBaseID и
MentalActionsImages.activateEmotion в mental_automatizm_actions.go/RunMentalAutomatizm
(SituationID), что определяет основной контекст ситуации, определяемый при
вызове активации дерева понимания.<br>
<br>
Если этот контекст не задан в understandingSituation(situationImageID то в
getCurSituationImageID() по началу выбирается наугад (для первого приближения)
более важные из существующих, но потом дерево понимания может
переактивироваться с произвольным заданием контекста.<br>
От этого параметра зависит, в каком направлении пойдет информационный поиск
решений, если не будет запущен штатный автоматизм ветки (ориентировочные
реакции). Более частный, целевой контекст ситуации определяется следующим
параметром PurposeID.<br>
<br>
ID образа ЖЕЛАЕМОЙ при данных условиях цели – это PurposeImage, который по
началу наследует PurposeGenetic, но может произвольно меняться, в том числе
после подсказки оператором: в результате осмысления ответа оператора и запуска
ментального автоматизма корректировки цели с перезапуском дерева понимания.<br>
Для достижения этой общей цели в цепочках ментальных автоматизмов определяются
промежуточные цели так, что каждый мент. автоматизм оценивается успешным при
появлении состояния, соответствующему данной промежуточной цели, а конечное
звено цепи должно стремиться к соответствию PurposeID.<br>
<br>
Активация дерева ментальных автоматизмов происходит из:<br>
func afterTreeActivation() - при каждой активации automatism_tree.go<br>
и если было действия без ответа в течении 20 пульсов, то understandingSituation
вызывается из func noAutovatizmResult()<br>
т.е. оба деревав работают совместно при EvolushnStage &gt; 3 и по каждой
активации UnderstandingTree добавляется эпизд. памяти newEpisodeMemory()<br>
<br>
Аналогично дереву моторных автоматизмов, после активации могут быть
ориентировочные рефлексы привлечения внимания.<br>
<br>
При вызове может быть определен situationImageID или проставлен 0 и тогда образ
ситуации определяется в самой функции.<br>
<br>
</span></p>

<h2><a name="_Toc121642977">Правила</a></h2>

<p class=MsoNormal>Концепция Правил теоретически вполне ясна и очевидно
полезна. В психологии давно замечено, что частью приобретаемого опыта являются
правила поведения, которые усваиваются с каждой попыткой действий.</p>

<p class=MsoNormal>В детстве постепенно накапливается опыт ответов на то, чего
пока не знаешь, он набирается или пробно или отзеркаливаются чужие ответы. Это
становится шаблоном ответа в данной ситуации. Шаблон усложняется после ответа
на ответ и растет цепочка понимания как можно отвечать.</p>

<p class=MsoNormal>Каждый может вспомнить, как учился отвечать на колкости.
Если тебе сказали - &quot;ты дурак&quot;, и раньше никогда так не было, очень
важно, как другие детки на такое отвечали,</p>

<p class=MsoNormal>ты просто делаешь точно так же, отвечаешь &quot;Сам
дурак&quot;. А тебе: &quot;От дурака слышу!&quot;, ты опять в ступоре, но
постепенно набираются цепочки: на такую предъяву - такой-то ответ. И, как при
обучении игры в шахматы, развиваются последовательности действий от исходной
комбинации.</p>

<p class=MsoNormal>Вся детская лексика - практически только такие цепочки.</p>

<p class=MsoNormal>Каждый может вспомнить, как в детстве искал ответы на значимые
реплики, без чего оказывался в проигрыше в словесных перепалках. Так или иначе,
достойный ответ придумывался, ментальное правило было заготовлено и ждало
своего применения, чтобы на деле показать, насколько оно эффективно. Но это -
уже процесс творчества...</p>

<p class=MsoNormal>В проекте с каждым ответом на Стимул набираются и
сохраняются два вида Правил.</p>

<p class=MsoNormal>1. Правило представляет собой последовательность Стимул-&gt;Ответ-&gt;Эффект.</p>

<p class=MsoNormal>По какому-то стимулу с Пульта выдается Ответ, возникает
период ожидания и, наконец, на этот ответ получен новый Стимул (а может быть и
не получен, что – тоже информация). Как только получен новый Стимул детектор
изменения состояния выдает значение Эффекта, удачного или не удачного или
отсутствие эффекта. Остается сохранить такую цепочку как Правило.</p>

<p class=MsoNormal>2. Ученическое Правило представляет собой последовательность
Ответ-&gt;Стимул-&gt;успех (т.е. Эффект здесь принимаемся позитивным потому как
это – пример, как можно отвечать). Если после Ответа с Пульта пришел Стимул, то
его можно воспринимать как авторитарно правильный ответ, если в собственном
опыте с этим пока еще не густо.</p>

<p class=MsoNormal>Первый тип Правила не отличается в принципе по записи в
памяти от второго, но имеет иное качество.</p>

<p class=MsoNormal>Чтобы не терять предыдущее Правило в важной
последовательности очередности, все Правила записываются в кадры эпизодической
памяти. И тогда возникают уже групповые Правила в последовательности реального
использования.</p>

<p class=MsoNormal>В реализации <span lang=EN-US>Beast</span><span lang=EN-US> </span>сразу
записываются оба вида Правил, одно за другим.</p>

<p class=MsoNormal>Когда мы играем в шахматы или просто ведем беседу, не особенно
задумываясь, то мы пользуемся именно такими Правилами, зная, что нужно сделать
после очередного хода оппонента с учетом предыдущих ходов. Правила и нужны для
того, чтобы пользоваться уже проверенными заготовками, если они нет и только
когда их нет, приходится более глубоко задумываться, вспоминать что раньше
происходило в похожих ситуациях, отматывая кадры эпизодической памяти по таким
признакам, о которых даже не думаем, а просто вспоминаем нужное.</p>

<p class=MsoNormal>Схожим образом фиксируются и ментальные Правила, которые
представляют собой запись Эффекта после ряда ментальных действий в поисках
решения: удалось ли достигнуть задуманной цели или нет.</p>

<p class=MsoNormal>Каждый раз, находя последнее Правило в данной ситуации, оно
может использоваться для того, чтобы перейти к следующему известному Правилу
или, если такого нет, начать поиск нового решения.</p>

<p class=MsoNormal>Что будет, если Стимул последовал сразу за предыдущим, не
дожидаясь ответа с периодом ожидания? Что делать с таким незавершенным
Правилом?</p>

<p class=MsoNormal>Если ответ еще не формировался, то просто ответ будет
формироваться на последний стимул, а если уже сформировался и запущен (оператор
проигнорировал), то новый стимул будет невпопад и Правило окажется
неправильным. Так что применяются разумные интервалы в ожидании Стимулов.</p>

<h2><a name="_Toc121642978">Объекты произвольной значимости</a></h2>

<p class=MsoNormal>После каждого пробного действия все компоненты образа
действия корректируют параметр своей значимости как эффект такого действия в
данных условиях. Значение просто добавляет текущий эффект к существующему
значению, увиливая значимость или уменьшая ее в область негативной (удобный
аналог усреднения). Поэтому значения значимость объекта могут быть любыми
числами, конкурируя в этом с другими объектами.</p>

<p class=MsoNormal>Значимости в коде проекта обычно имеют значения величин от
-10 0 до 10, но в случае значимости эффекта от реагирования от -1 0 до 1, а в
случаях усредненной значимости компонентов объекта Ответа (акты воздействия,
фразы и отдельные слова, принимающие значимость фразы) не ограничены в минус и
плюс. В последнем случае такая значимость берется из Эффекта пробных действий и
связывается со всеми компонентами воспринимаемого в этих условиях функцией
setImportance().</p>

<p class=MsoNormal>Значимость всегда определяется в контексте всех
предшествующих условий, т.е. специфична для активностей деревьев автоматизмов и
понимания.</p>

<p class=MsoNormal>При каждом вызове consciousness определяется текущий объект
наибольшей значимости в воспринимаемом - в функции определения текущей Цели
getMentalPurpose().</p>

<p class=MsoNormal>Реализация системы значимости в проекте достаточно сложна и
может быть еще более дополнена, в том числе возможностью произвольно определять
значимость при ментальных операциях (размышлениях).</p>

<p class=MsoNormal>Значимости объектов составляют модель понимания данного
объекта внимания - его значимость в разных условиях и то, какие действия могут
быть совершены при этом.</p>

<p class=MsoNormal>Пока что реализованы функции:</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/createNewlastImportanceID.htm"><span
style='color:blue'>createNewlastImportanceID</span></a>&nbsp;- создать новый
образ значимости объекта восприятия если такого еще нет</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/Saveimportance.htm"><span
lang=EN-US style='color:blue'>Saveimportance</span></a><span lang=EN-US>&nbsp;</span>-
сохранить Образы <span lang=EN-US>Importance</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/loadImportance.htm"><span
lang=EN-US style='color:blue'>loadImportance</span></a><span lang=EN-US>&nbsp;</span>-
загрузить образы <span lang=EN-US>Importance</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getObjectsImportanceValue.htm"><span
style='color:blue'>getObjectsImportanceValue</span></a>&nbsp;- значимость ID
объекта внимания в текущих условиях</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/setImportance.htm"><span
style='color:blue'>setImportance</span></a>&nbsp;- Фиксация значимости объекта
Объективного восприятия всех декларированных видов в данных условиях</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getGreatestImportance.htm"><span
style='color:blue'>getGreatestImportance</span></a>&nbsp;- найти наиболее
значащие объекты в данных условиях</p>

<p class=MsoNormal style='margin-left:18.0pt'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getTopAttentionObject.htm"><span
style='color:blue'>getTopAttentionObject</span></a>&nbsp;- выбрать один, самый
актуальный объект</p>

<p class=MsoNormal>Продвинутое развитие адаптивности подразумевает ментальную
оценку значимости внешних воздействий. Сначала они оцениваются так же по
внутренним изменениям как следствия внешнего воздействия. Так происходит до
уровня <b>Прогнозирования</b>, когда <span lang=EN-US>Beast</span> просто
реагирует на действия оператора, пытаясь подобрать оптимальную реакцию. Но со
стадии использования прошлого опыта и попыток предсказывать реакцию Оператора,
может возникнуть интересная ситуация:</p>

<p class=MsoNormal style='margin-left:35.4pt'><i>Допустим текущее воздействие
Оператора вызвало ухудшение. Если запустить штатную ответную реакцию, то
оператор, согласно сохраненной истории взаимодействия с ним, отреагирует так,
что станет <b>немного лучше</b>. В той же истории есть сохраненный эпизод,
когда на определенный раздражитель от </i><i><span lang=EN-US>Beast</span>
оператор отреагировал так, что в данных условиях это <b>значительно улучшит</b>
базовое состояние. Но есть нюанс: эта провоцирующая реакция от </i><i><span
lang=EN-US>Beast</span><span lang=EN-US> </span><b>немного ухудшит</b> и без
того плохое базовое состояние.</i></p>

<p class=MsoNormal>Решение такой дилеммы будет: выполнить ухудшающий по
внутреннему эффекту для <span lang=EN-US>Beast</span><span lang=EN-US> </span>автоматизм,
чтобы получить предположительно улучшающую реакцию от Оператора. Что означает: <b>Волевым
усилием (fornit.ru/12787)</b>, вопреки привычному стереотипу, заблокировать
штатный автоматизм и <b>произвольно</b> выполнить не стандартный – на основании
прогноза. Сделать шаг назад, чтобы потом прыгнуть на два шага вперед.</p>

<p class=MsoNormal>Это означает придание автоматизму <b>произвольной значимости</b>,
где не произвольная, гомеостатическая – то, что явно следует из текущего
состояния. Без волевого усилия выполнился бы штатный автоматизм, согласно
закрепленной за ним значимости. При этом выбор, прикладывать ли волевое усилие
и рискнуть, или довольствоваться более вероятным, но менее успешным – означает <b>произвольность
выбора</b>, которая зависит от текущего состояния Beast,  значимости результата
и потенциала возможностей ментальных функций. Действия Оператора и ответные
действия Beast меняют его информационную среду, определяющую оценку обоих типов
действий и последующую реакцию. Предсказать состояние Информационной среды,
зависящее от множества факторов невозможно, поэтому нельзя предсказать «выбор»
Beast несмотря на то, что он детерминирован состоянием Информационной среды. По
той же причине нельзя просто случайно выбрать что-нибудь – выбор детерминирован
Информационной средой. Состояние, которой невозможно предсказать, как форму
зарождающейся снежинки.</p>

<h2><a name="_Toc121642979">Эпизодическая память</a></h2>

<p class=MsoNormal>В природной реализации нервной системы и в прототипе <span
lang=EN-US>Beast</span><span lang=EN-US> </span>каждый кадр эпизодической
памяти возникает при срабатывании “ориентировочного рефлекса”, фиксируя текущую
информационную картину и текущее реализованное Правило. Информационная картина
пишется в  виде кадра не всех тех образов, которые раскрываются при
воспоминании во всех своих деталях, на которые было обращено внимание, а в виде
уникальных идентификаторов активных веток дерева автоматизмов и дерева
понимания ситуации – всего два числа. Так что формат записи кадра очень простой
и компактный, но позволяет воскресить те образы, которые были активны в тот
момент, начиная с образа текущего состояния, эмоции, образов действия и фраз,
текущие цели (потребности) и особенности ситуации.</p>

<p class=MsoNormal>Но кроме фиксации по стимулам с Пульта кадры записываются
при новом, уже ментальном, обращении внимания на наиболее важный объект среди
всех в восприятии или даже объект, который был вспомнен из пережитого эпизода
памяти. Такие ментальные кадры содержат и ментальные Правила последовательности
решений текущей проблемы, большой или такой незначительной, что ее и проблемой
не посчитаешь, но она привлекла внимание, потому как не было ничего более
значащего.</p>

<p class=MsoNormal>В природе нередки случаи, когда ментальный кадр теряет метку
своего происхождения и путается с тем, что происходило реально. В программной
реализации такое практически невозможно.</p>

<p class=MsoNormal>Эпизодическая память – это универсальная карта решений, удач
и неудач. Причем важность неудачного опыта превышает значение удачного потому,
как неудача грозит опасными последствиями. На уровне цепочек Правил формируются
воображаемые карты местности, тактические приемы действий в разных ситуациях и
тактика решений проблем.</p>

<p class=MsoNormal>Кроме того, эпизоды памяти помогают вернуть то понимание,
которое было когда-то и может быть уже упущено по разным причинам.</p>

<p class=MsoNormal>В целом это – очень полезная находка эволюции, дающая лавину
информации разного рода.</p>

<h2><a name="_Toc121642980">Модели понимания</a></h2>

<p class=MsoNormal>Объекты, получившие значимость в различных ситуациях и
Правила, использующие данные объекты, представляют собой очень информативную
модель понимания того, что может происходить в той или иной ситуации (fornit.ru/7305).
В самом простом случае это позволят сразу настораживаться в случае высокой
отрицательной значимости, а при большой позитивной – стремиться к такому
объекту и состоянию, в которой образуется такая значимость. В более сложных
случаях становится возможным воображать различные ситуации и их последствия в
размышлениях или в сновидениях, получая ментальный, предположительный опыт
(ментальные Правила). </p>

<p class=MsoNormal>В реализации еще не достигнута такая сложность, и путь к
разработке соответствующих механизмов даже пугает своей сложностью и обилием
нерешенных проблем, требующих изощренного изобретательского опыта. Но это –
реальный путь исследования, у которого нет альтернатив. Те, кто не последует
методу схемотехнического конструирования, не имеют шанса даже приблизиться к
пониманию самих задач.</p>

<p class=MsoNormal>Значимости с Правилами образуют в достаточно подготовленном
информационно (набравшим длительный опыт обсуждений по разным темам, включая
самого себя) прототипе среду моделей понимания всех объектов внимания, включая
сам прототип, с возможностью перевоплощаться в любую из таких моделей и с ее
точки зрения формируя предполагаемую тактику поведения.</p>

<p class=MsoNormal>Лишь в возрасте 5-6-ти лет у ребенка в норме начинает
формироваться образ ''Я'' (<span style='color:black'>fornit.ru/64933</span>).
Это время, когда ребенок начинает понимать то, чего от него ожидают родители,
родственники, учителя и другие люди, каким они хотят его видеть. Именно в этот
период ребенок начинает понимать различие между ''Я -- хороший'' и ''Я --
плохой''.</p>

<p class=MsoNormal>Существуют качественно различные стадии развития личного
представления о своем Я и только на пятой из них, в возрасте 5-6 лет начинает
формироваться образ “Я” (<span style='color:black'>fornit.ru/64933</span>), а
это – первый и центральный из всех других образов моделей понимания. Это
означает, что существует не меньшее число последовательных уровней механизмов
формирования этих явлений.</p>

<h3><a name="_Toc121642981">Смысл новых слов</a></h3>

<p class=MsoNormal>Легко представить ситуацию, когда оказываешься среди
говорящих на незнакомом языке, начинаешь прислушиваться, через какое-то время
улавливаешь, что в одной ситуации говорят фразу А, в другой – фразу Б. Эти фразы,
совершенно ничего на значащие поначалу, приобретают определенный смысл тем, что
в определенных ситуациях решают определенные задачи: “нельзя трогать” –
означает запрет совершения действия, “иди спать” – означает повеление ложиться
спать. Фразы приобретают значимость в определенной ситуации, связываясь с
действием. Запомнив Правило: услышав “иди спать” нужно идти спать и тогда все
будет хорошо, становится легко применять его, если какое-то другое Правило не
помешает в точности выполнить первое.</p>

<h3><a name="_Toc121642982">Адаптационный потенциал Системы Информационного
Окружения (СИС)</a></h3>

<p class=MsoNormal>Ранее были рассмотрены только внешне ориентированные
рефлексы. Но система безусловных рефлексов эволюционно развивается и для “внутренних”
действий: активации и торможения интегральных функций. </p>

<p class=MsoNormal>В первую очередь развивалась по мере получение адаптационных
преимуществ система сбора различной информации о состоянии организма (а не
только каналы внешней сенсорики и гомеостатическая функциональность).
Адаптивность любой информации связывается с ее практической, полезной
значимостью в данных условиях.</p>

<p class=MsoNormal>На основе такой информации (выявленной значимости) эволюционно
формируются и оптимизируются функции внутренней регуляции. В целом в области
лобных долей у высших животных формируется и развивается полноценная система,
информирующая о текущем состоянии и позволяющая использовать эту информацию для
дальнейшего развития вторичных функций адаптивности уровня более высокого, чем
просто рефлексы.</p>

<p class=MsoNormal>Специфика активности СИС определяет то, как организм “внутренне”
видит свое состояние.</p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>В 2004 году Д. Тонони философски вывел основы “Теории
интегрированной информации” (</span><span style='color:black'><a
href="http://fornit.ru/7589" target="_blank"><span style='color:blue'>fornit.ru/7589</span></a></span><span
style='color:black'>), которую можно посчитать наиболее общим описанием сути
интеграционной функциональности самосознания.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>Д.Тонони развил философские представления об интегральной
среде различного рода данных, информирующую о текущем состоянии. Разные виды
распознавателей примитивов восприятия интегрируются в одну целостность
понимания ситуации и связанных с нею возможных реакций: “Видя синюю книгу
невозможно увидеть книгу без цвета синий, плюс цвет синий без книги”.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>Дерево автоматизмов при активации распознает такие
уникальные сочетания, в контексте которых образы получают определенную
значимость и ментально осознаются в определенном смысле.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>Теорию Дж.Тонони можно считать наиболее подходящим
предшественником модели механизмов субъективного понимания.</span></p>

<h2><a name="_Toc121642983">Четыре уровня обработки информации актуальных
объектов внимания</a></h2>

<p class=MsoNormal>После активации дерева автоматизмов и последующей активации
дерева понимания ситуации происходит вызов главной функции ментальных действий
(consciousness), у которой есть 4 последовательных уровня вовлеченности в
решение о предстоящих моторных действиях.</p>

<p class=MsoNormal>Логика процесса полностью отражает принципы обработки новых
и значимых состояний МВАП.</p>

<p class=MsoNormal><b>1.</b> Ориентировочный рефлекс означает необходимость
обратить внимание на текущий активный пакет информации с целью проверить,
насколько подходит штатный автоматизм, а если такого нет, то создать пробный и
запустить. В самом общем плане, если есть надежный полезный автоматизм для
данных условий, то не нужны никакие размышления, можно просто выполнить его.</p>

<p class=MsoNormal><b>2.</b> Если штатный автоматизм вызывает сомнения или его
нет, то попытаться найти подходящую цепочку Правил, которая в последнем узле в
стимуле совпадает с текущим активным Стимулом, а предыдущие звенья отражают в
точности ранее пережитые пары Стимул-Ответ. Чем больше звеньев Правил окажется
в такой цепочке, тем более надежна информация о прогнозе дальнейших событий и
получаемом Эффекте. </p>

<p class=MsoNormal>Решение о том, заменить ли автоматизм на найденные в Правиле
действия или оставить выполняться старый привычный, зависит от таких факторов
как надежность информации в цепочке, опасность ситуации и актуальность
необходимости действовать (а не лениться).</p>

<p class=MsoNormal>Решения по правилам находятся настолько быстро, что нет
необходимости задуматься об этом, и в таком режиме действия возникают как бы
сами (игра блиц или импровизация), хотя и есть некая начальная произвольность в
том, чтобы вовремя успеть подставить в уравнение начальные условия, от которых
будет завесить особенность решения. Дежурный пример: идя по дороге и увидев
лужу, мы моментально прикидываем как ее преодолеем, учитывая размеры и свои
возможности, но, если лужа так просто непреодолима, то встанем и призадумаемся.</p>

<p class=MsoNormal><b>3.</b> Если на втором уровне вовлеченности не найдено
приемлемое решение и автоматизм не запущен, то начинается цикл поиска
подходящего решения, если только ситуация не позволяет просто бездействовать
(см. лень fornit.ru/652). </p>

<p class=MsoNormal>Особенность такого вида поиска в использовании прежнего
опыта методов поиска решения (ментальных Правил), а при отсутствии подходящего
метода – начать формировать пробные действия для решения проблемы. При
найденном уверенном методе он просто повторяет итерацию ментальных действий,
заканчивающихся сотворением пробного моторного автоматизма. Иначе нужно
начинать пробовать действовать различными доступными способами, запрашивая
дополнительную информацию с помощью наследственно предопределенных функций
целевой обработки существующих информационных данных. Таких функций в
реализации <span lang=EN-US>Beast</span><span lang=EN-US> </span><a
href="/adaptologiya/beast/beast_scheme/package/mental_automatizm.htm">заготовлено
17</a>. Функции вызываются ментальными автоматизмами с действием 4-го типа. </p>

<p class=MsoNormal>Итерации поиска решений организованы как циклы рекурсивных
вызовов (вызовов самой себя) главной функции consciousness. И, как сказал поэт,
если это не циклы осмысления ситуации, что что это?</p>

<p class=MsoNormal>Процесс организации циклов осмысления сложен как для
понимания, так и реализации, его оптимизация еще не завершена в данной версии.
Было пройдено немало разных вариантов решения, позволяющих <span lang=EN-US>Beast</span><span
lang=EN-US> </span>самостоятельно находить методы решений и пока еще
достигнутое нельзя считать лучшим решением. Здесь предстоит много работы. От
того, насколько удачно будет реализация циклов осмысления, зависит все
остальное. Это – базовый механизм ментальности.</p>

<p class=MsoNormal>Циклы осмысления начинаются при каждом стимуле, но в случае
запуска штатного автоматизма предыдущий цикл не прерывается т.к. новое
осмысление не требуется. В случае же прерывания цикла момент прерывания
фиксируется для того, чтобы продолжить решать эту задачу в подходящее время.
Стек для сохранения прерываний размышлений ограничен в данной реализации 10
звеньями очереди (у человека в среднем есть 5-7 таких отложенных задач).</p>

<p class=MsoNormal>Такие прерывания необходимы не только к возврату к
прерванной задаче, но и для обобщения нескольких сходных восприятий, например,
при разбивке длинного текста на несколько понимаемых фрагментов.</p>

<p class=MsoNormal>Сами циклы осмысления сохраняются временно в “кратковременной
памяти”, ограниченной в данной реализации 1000 звеньями. Такова максимальная
длина цепи ментального Правила.</p>

<p class=MsoNormal>В одном пульсе, а, тем более, между двумя Стимулами с Пульта
могут поместиться огромное число циклов размышления, больше, чем это возможно в
лобной коре мозга, в которой так же есть явление циклической активности (fornit.ru/7358),
наводки от которых в виде ЭЭГ имеют частоту: бета-ритма - 13-35 герц, и
альфа-ритм - <span style='font-size:11.5pt;line-height:107%;color:#222222;
background:white'>8-13 Гц (fornit.ru/10455</span><span style='color:#222222;
background:white'>). Это говорит об очень удачной организации циклов осознания
в мозге.</span></p>

<p class=MsoNormal><b><span style='color:#222222;background:white'>4.</span></b><span
style='color:#222222;background:white'> Вовлечение 4-го уровня возможно только
на 5-й стадии развития и описано в разделе “Доминанта нерешенной проблемы”. 5-я
стадия развития еще не разработана в схеме.</span></p>


<h2><a name="_Hlk121230721"></a><a name="_Toc121642984">Ментальные автоматизмы
и циклы ментальной рекурсии</a></h2>


<p class=MsoNormal>Чтобы ментальные автоматизмы могли срабатывать не по уже
заложенному наследственно алгоритму, а самостоятельно основываться на текущей
информации, была создана следующая схема. Каждый автоматизм направляется
текущей информаций и в результате своей активности возникает новая информация,
которая теперь влияет на то, какое действие будет выбрано в следующем
автоматизме. Этот процесс должен продолжаться до получения важной для решения
текущей задачи (определяемой целью). Или до тех пор, пока не будет прерван другой
важной целью при Стимуле с Пульта.</p>

<p class=MsoNormal>Все это организовано как вызовы главной функции осмоления
самой себя с получением новой информационной картины. Движок выбора подходящего
для данной информации ментального автоматизма срабатывает и проверяет, нашлось
ли предположительное решение. Этот движок использует уже имеющиеся цепочки
ментальных Правил или предполагает новые действия. Он как бы видит текущую
образованную информационную картину и как бы принимает решение на основе
имеющегося опыта размышлений (Правила) или придумывает новые действия.</p>

<p class=MsoNormal>Циклы ментального осмысления проходят очень быстро (ну, как
и положено мысли :) никак не лимитируемые детекторами окончания какого-то
действия, как это есть в случае цепочек ментальных действий. Так что и сами
последовательные моторные цепочки (моторные Правила) могут использоваться для
нахождения ментальных действий потому как они так же могут просматриваться
ничем не лимитировано.</p>

<p class=MsoNormal>Точно так же организуются циклы прохода от одной
инфо-картины к другой в случае сновидений (fornit.ru/5212), но, ограничиваясь
активностью более низкого уровня функции осмысления (из-за заторможенности, но
бывает и “осознанные сновидения” fornit.ru/984), давая понимание того, что
может произойти с выработкой Правил, но без корректирующего влияния объективной
составляющей информационной картины при внешнем восприятии. Сновидения
позволяют не терять бесполезно предыдущий опыт, который не было времени
осмыслить. Это пока еще не реализовано.</p>

<p class=MsoNormal>В этой схеме участвуют пакеты:</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/mental_automatizm.htm"><span
style='color:blue'>mental_automatizm</span></a>&nbsp;- ментальные автоматизмы.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/rules.htm"><span
style='color:blue'>rules</span></a>&nbsp;- правила - как эффект от совершенных
действий.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/rules_mental.htm"><span
style='color:blue'>rules_mental</span></a>&nbsp;- правила - как эффект от
мыслительных действий.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/short_term_memory.htm"><span
style='color:blue'>short_term_memory</span></a>&nbsp;- кратковременная память.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/trigger_and_action.htm"><span
style='color:blue'>trigger_and_action</span></a>&nbsp;- отдельные правила - как
эффект от совершенных действий.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/trigger_and_action_mental.htm"><span
style='color:blue'>trigger_and_action_mental</span></a>&nbsp;- отдельные
правила - как эффект от произвольных действий.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding.htm"><span
style='color:blue'>understanding</span></a>&nbsp;- понимание, осмысление
ситуации: 4 уровня вовлеченности.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_purpose_image.htm"><span
lang=EN-US style='color:blue'>understanding_purpose_image</span></a><span
lang=EN-US>&nbsp;- </span>образ желаемой цели<span lang=EN-US>.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_situation_image.htm"><span
lang=EN-US style='color:blue'>understanding_situation_image</span></a><span
lang=EN-US>&nbsp;- </span>образ текущей ситуации<span lang=EN-US>.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_tree.htm"><span
style='color:blue'>understanding_tree</span></a>&nbsp;- дерево понимания.</p>

<h2><a name="_Toc121642985">Доминанта нерешенной проблемы и гештальт</a></h2>

<p class=MsoNormal><span style='color:#222222;background:white'>Если решение не
находится на 3-м уровне функции </span>consciousness, а проблема достаточно
важна, то создается Домината нерешенной проблемы – объект структуры, в которой
хранится поставленная задача – Цель, вес значимости проблемы, идентификатор
последнего звена цикла осмысления проблемы, который позволяет вспомнить все
этапы ее решения. </p>

<p class=MsoNormal>Доминанта создается только на достаточно высокой стадии
развития и накопления достаточного опыта ментальных Правил. Так что ее наличие
означает, что для решения проблемы привлекаются высшие, творческие механизмы
ментальных функций, без которых цикл осмысления сводится лишь к простейшим
ментальным действиям.</p>

<p class=MsoNormal>Хотя собственно организация функциональности Доминанты не
представляет особых изобретательских проблем, ее эффективность зависит от того,
насколько удачно организованы механизмы цикла осмысления и поэтому ее реализация
оставлена на будущее.</p>

<h2><a name="_Toc121642986">Планы дальнейшей реализации</a></h2>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>Необходимо
улучшить поиск решений по Правилам для 2-го уровня осмысления. Правила нужно
искать в зависимости от важных особенностей текущей проблемы. Дежурный пример: идя
по дороге и увидев лужу, мы моментально прикидываем, как ее преодолеем,
учитывая размеры и свои возможности.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>Необходимо
продолжить поиск лучшего варианта реализации циклов осмысления и это – самое
главное. От того насколько удачным будет механизм, зависит все остальное в
реализации произвольности. Цикл должен естественно обеспечивать как простые
формы решения (4-я ступень развития), так и самые сложные (5-я ступень
развития), с поддержкой Доминанты (если она есть), с формированием ментальных
Правил, с задачами классификации и обобщения.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>Необходимо
накопить большое количество Правил и объектов значимости, что возможно методами
реального общения с <span lang=EN-US>Beast</span> в течении 1-2 лет. Но
накопление ментальных Правил означает реализацию поддержки по пунктам 2 и 4.</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>Остается развить
творческий потенциал с введением Доминанты нерешенной проблемы и дополнительных
информационных функций для организации процесса поиска методов решений. </p>

<p class=MsoNormal>Возможно, и скорее всего, придется добавить дополнительные
стадии развития.</p>

<h3><a name="_Toc121642987">Описание основных направлений</a></h3>

<p class=MsoNormal>Разработка проекта наглядно показала, что развитие
реагирования <span lang=EN-US>Beast</span><span lang=EN-US> </span>это, по
сути, развитие механизмов анализа накапливаемого опыта: от простейшего учета
предыдущей реакции Оператора, до сложного анализа эпизодической памяти с
группировкой, сортировкой, выделением значимого и т. п. Что означает: нет
никаких интеллектуальных функций принятия решения кроме выборки из личного
опыта. Поэтому дальнейшее развитие интеллекта <span lang=EN-US>Beast</span><span
lang=EN-US> </span>должно идти в том же направлении: какие варианты получения
личного опыта можно организовать и что еще можно «выжать» из него?</p>

<p class=MsoNormal>Опыт можно получать, экспериментируя самостоятельно или
наблюдая за экспериментами других. Поэтому нужен механизм анализа прошлого
личного опыта, чтобы прогнозировать варианты своих экспериментов, а также
анализ сохраненного опыта Оператора, для отзеркаливания его прошлых действий.</p>

<p class=MsoNormal>Общение с Оператором ограничивает <span lang=EN-US>Beast</span><span
lang=EN-US> </span>в объеме и скорости получаемых знаний. Намного эффективнее
организовать обмен данными между разными <span lang=EN-US>Beast</span>, чтобы
они могли делиться полученным опытом, обучая друг друга. Если рефлекторный опыт
после проверок на совместимость схем можно просто залить, то с автоматизмами
так не получится: они индивидуально оцениваются. Такой опыт можно только
«рассказать» - а как его «поймет» слушающий, зависит от его личного опыта,
ассоциативной базы, текущего состояния. Возможно, придется изобретать язык
общения – обще понимаемые вербальные символы. Для начала обратив внимание на
механизмы коммуникаций насекомых и животных.</p>

<p class=MsoNormal>Для каждой стадии развития подразумевается накопление
массива данных, которые служат исходными для следующей стадии. От качества
таких исходников зависит успешность реализации отрабатываемой стадии. Если
наработка Условных рефлексов интуитивно понятна, то начиная с 3 стадии
требуется более взвешенный подход – нужна методика, с учетом ограниченности
интерфейса B<span lang=EN-US>e</span>ast, прошивки Автоматизмов, Правил,
Значимостей и способы оценки полученного результата, который может быть совсем
не самоочевиден.</p>

<p class=MsoNormal>Для дальнейшего развития систем проектирования искусственных
живых существ, обладающих самыми разными свойствами, желательно создать
библиотечные модули с параметрами инициализации и развертывания в определенных
условиях. Чтобы как в конструкторе можно было создавать самые разнообразные
конфигурации на одних и тех же принципах и правилах, проверяя и уточняя их для
специфических условий. Без стандартизации и унификации невозможно массовое
распространение никаких идей.</p>

<h2><a name="_Toc121642988">Почему обезьяна никогда не станет человеком (или
почему так важно найти оптимальную версию данного уровня адаптивности).</a></h2>

<p class=MsoNormal>Как уже говорилось, развитие последующих механизмов
адаптивности основывается на предыдущих. А каждый данный уровень развития
предполагает нахождение оптимальных механизмов реализации возможностей данного
уровня. В случае природной реализации это означает, что каждая находка эволюции
порождает интенсивную генерацию вариантов следующего уровня (fornit.ru/50319).
Подавлений мутаций прошедших уровней развития подавляется разными эволюционными
механизмами, и он должен быть эффективным потому, что такие мутации всегда
вредны по одной простой причине: все, что было организовано после данного
звена, основывается на именно имеющейся функциональности этого звена и если
вдруг оно меняется или выпадает, то все последующее теряет функциональный смысл.</p>

<p class=MsoNormal>Все это определяет многообразие уровней развития живых
существ тем, что вариант последующего совершенствования делает невозможным
совершенствование всего предыдущего. И если какой-то вид развился из неких
преимуществ найденного совершенствования, то ему остается только оставаться на
данной основе с возможностью развивать только самые последние механизмы. Так
что все животные, у которых упущены механизмы, позволяющие развить важные
адаптивные системы, уже никогда не смогут выйти на это качество совершенствования
и будут вынуждены приспосабливаться к окружающим условиям только за счет
имеющихся механизмов.</p>

<p class=MsoNormal>В ходе реализации <span lang=EN-US>Beast</span><span
lang=EN-US> </span>было очевидно, насколько кардинально меняют возможности
наличие или отсутствие даже отдельных параметров механизмов. Направление
развитие определялось знаниями о том, какие системы имеются в наличие у
человека и в каком направлении следует развивать схему. Любые отклонения
сделали бы невозможным дальнейшее развитие по такому “человеческому” пути, но
оставляли бы возможность усилить адаптивность на достигнутом уровне, особенно
при известных задачах адаптации, которые нужно преодолеть.</p>

<p class=MsoNormal>Чем далее продвигалась разработка, тем труднее было найти
оптимальное решение механизмов текущего уровня развития. И тем более медленным,
вдумчивым и осторожным должно быть продвижение, чтобы не упустить то важное,
что потом не позволит развивать систему в нужном направления. Такие ситуации
встречались не один раз, заставляя переписывать схему с упущенного момента.
Вторая версия вообще потребовала переписать все с нуля.</p>

<h2><a name="_Toc121642989">Что дальше?</a></h2>

<p class=MsoNormal>Дальнейшее развитие проекта зависит от того, насколько он
заинтересует дополнительный контингент, потому как необходимо посветить год или
два реальному воспитанию <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal>Уже на стадии формирования системы Гомеостаза возникает
закономерный вопрос: какие Базовые потребности, активирующие/тормозные связи,
безусловные рефлексы нужно прошивать для получения нужного вектора развития
системы? Очевидно, что это требует достаточно сложных и глубоких исследований,
экспериментов, которые могут затянутся на неопределенное время. По этой причине
такие моменты реализованы поверхностно, и требуют серьезного уточнения. Так же
плохо проработана система обучения Beast потому, что для этого подразумевается
конкретное ТЗ, среда адаптации и опять же эксперименты. </p>

<p class=MsoNormal>Упрощенная реализация <span lang=EN-US>Beast</span>
позволяет обойти эти углы, с одной стороны сильно упростив функционал и
прошивая, опираясь на устоявшуюся лексику, достаточно уверенно текстовые
заготовки, оставив лишь один вербальный канал связи и простейшие действия, а с
другой стороны множество интересных, спорных моментов так и остаются под
вопросом.</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><b>Участники разработки</b>:</p>

<p class=MsoNormal>Парусников Алексей Владимирович</p>

<p class=MsoNormal>Петрийчук Николай Дмитриевич</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

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
