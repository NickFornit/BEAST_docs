<?
// http://scorcher/adaptologiya/beast/about_conditions_reflex.php  
// https://scorcher.ru/adaptologiya/beast/about_conditions_reflex.php

// � ������ �� ������ ��������� link_list � [axiom_id=128] ������ ���� � �������!


$page_name="��� �������� �������� ���������";// � �  � �
$keywords="��� �������� �������� ���������";
$description="��� �������� �������� ���������#";//����� �� ����������� ������������� ������ ����� ���������� ��������, ����� � ����� ��������� ���� #

$origin_url="";// ����� ������ ����� ", "
// ��� ������������� �������� ��� ������� (������ ��� ������������ �������)
$semantic_marking_type="EducationEvent";// Event EducationEvent SocialEvent 

$text_extend="";
$back_url="/adaptologiya/reflyeksy_i_avtomatizmy__obobshyeniye/reflyeksy_i_avtomatizmy__obobshyeniye.php";
$back_name="�������� � �����������";
$header=$page_name;

$statPageName=$page_name;
$stat_url="/adaptologiya/beast/beast_scheme/about_conditions_reflex.php";
$date_pablick="2022-12-08";
$date_update="";

$setDescribtionToSnippet=1;// ������������ �������� ��� ������ ���� ���� ���� ������ �� �������������
$noShowWarningBlock=1;// ��� /mist/warn_header.php
$noSnippetFromNews=1;// �� ������������ ������� ��� ��������



$need_insert_discas=0;// 1 - ������������� ��������� ����������. ������ ��� �������, ���� �������� ������������ ��� ������ "art_name LIKE '%".$main_page_name."'"
/*
$title_priotitet="����� ��������" - ������ ������ ����� <title , � �� ������������� - �������� �������� � �������� ����
$noreckam - ��� ������ ������� � �������� ������
$noindex - ������ ���������� ��������
$noShowWarningBlock=1;// ��� /mist/warn_header.php �� ���������� ���� ��������!
*/

//!!!! ������ � art_template.php ������ $need_insert_discas=1 ������ ��� underlining_dic_words()
$no_replace_for_dictionfry=1;// !!!!


require($_SERVER["DOCUMENT_ROOT"]."/art/art_template.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sys/dbi.php");  
$dbi_main = new dbi_work;
$dbi_main->connect();
include_once($my_DOCUMENT_ROOT."dictionary/dictionary_func.php");

//!!!! ���� ����� ��������� ���������:
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
	{mso-style-link:"��������� 2 ����";
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
	{mso-style-name:"��������� 2 ����";
	mso-style-link:"��������� 2";
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
"Arial",sans-serif'>�� <a href="https://bio.wikireading.ru/6243">�����������
���������</a> ���� ������������ ������������ ������ �� ������� ���������� ����������
��������.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>������� ��������� ������, ��� ��� �������� ���������
���������� ��� ������������� �������, ����� ����������� ���������, �.�.
��������� ���������, ��� ���� ������������� ������������ ������������ ��
������������ �������, ������� ��� ������������ ���������� (�������� �� ��, ���
� ��� ���� ������ ������� ��� �������), � ��������� ������������ ����� �����
��������� ����������, ���������� �� ����, ��������� ����������� �� ���������. �
����� �� ����� ������������� ��� ���������� ������������ ����������� ����
����������. ����������� �������� ������ ������ ����������� ��� ������� ������
���������� �������. �� �������, ��� �������������� �������� �� ���������� �����
���������� ���� ���������, ��� ���������� ��������� �������, ��������� ��
������ ������-�� �������������. ���� � ������������ ���������� ���������
�������� ������, ��� ��� ���������� ������ ��, ��� �������� ������ �����������
��������, �� ��������� ����� ��� ���� ����, � ������ �������, ����������
����������� ������� ���������� � ������ ���� � �������� ������� �������
����������� ���������. �������� �� ���������� ���������� ���������� �������,
�������������� ��������� ������� ����������, � ��� ����� �������� ��������, ���
�� ��� �� ��������.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>��������� �� ������ ���������� �� ����� ������� ��-��
������ ������������� �����������, ������� �������� ������ ����� ���������
����������, ��� ������ �������������. �� � ������ ��� ������������� ���������
���������� ���������� ���������� ����� ����������� ����������� �����������
������ ������������, ������� �������� ������� ���������� ������ �����
�������������. ������� � ������ ������, ������������ ���������������� ��������
����������� �������, ����������� �� ������ ��� ������������ �������������
���������������� ������� � ��� ������� �������� ��������, �� �������� �����
������� ����������� ���������� ����������, �� ������ �������� ��������������
�������� � �������������� �������� �� ������ �������, ������� ���� �������� �,
��������������, ���������� ���� ��������� ����������.</span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>� ����� ������� ����� ��������������� ������ �������,
��������� � ��������� ��� � ���������� �������� ���������. ����� �������
������ ������� ����� ����������� ������ �����.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>� ������ � ������ ������������ �������� �������
��������� ������ ���������� ������� �������� �������� ��������� �����. ������
���� �������� ������ � ������������ ��������� ������ ����, �� �� �� ��������
������� �� ��������� �� ����� �����: �������� ������� �����. ���������
��������� ������������������� �������� ��������� ���������� ������������
����������, ���������� � �������������� �������� ������� ��� ���������
��������������� ��������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>�� ����� ����
��� ������������� ����� �� �������� �������� ���������� ��������� �� �����
��������� ��������� ����� �� ������� �� ����������� ������, ������ �� ���
��������� �������, - ��� ������� ����������� ������������ ������������ � ������
������ ��������� ����������. ����� ������� ������� �� ����� ����������� �����
����� �����������, ��� �� ����������� � ���. ��������� � ���������� ���������
�� ����� ������� ������ ����������� � ������ � ����������� ������. ��� �����
��������������� ���� ���������� �������� ������������ ��� ����� ��������,
�������� �� � ����� ���� ���� ������������ �� ����� �������� �������� ��
������������ �����������. � ������ ���������� ������ ��������� ������������
������� ���������� (������ ���������) � ������� �������� ��� ������� ��������������,
� ������� ������ ��� ������� ���������� � �����������, �� � ���� ��������� ����
������� ���������������� ���������. � ���������, ��� ���������� ��������
������������ � ����������� ���� ���������� ���������� ����������, ����� ��� ��
��� ������� ������, ��� �������� ����� ��������������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>��� ������
(������� ��������� �����)</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>�� ����� ����� <b>� ������ ��� ������ �������
������� �������� ��� �������� ��������</b>. �� ����� ������� �� �� ����� �
���������� ������� ������, ��� ��� �������� ���������� �����������������: ���
���� ����������� ���������� �� ���������������� ����������� �������� ������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>���� �����������
�������� ������ ������� ������������ ������ ���������. � ������ ����� �����
��������� � ����������� ���� ������������� �������, ������� ��� � ������ �����.
�� � ����� ���������� ��������� ����� �� ����� ���� ����.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>���� �� ����� ����� � �������� ���������������
������ ��������� �� �����, �� ������ ���������� ������������, � ��������
�������������� �����������. ������ ���� ����� ������������ ���������
�����������, �� ������� �� ������������ ���������� ����������, ��������������
���������� ��� ������ �, �������, ������ ����������������. ����� �����������
��������������� ������� ���������� ��������� � ������ ���� ���������� ��������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>����������������
������� � ����� ������� �����������, ��� ����������� ��������� �������
�������� �������� ��������� ������� �� ������������ ��� ������� ���������
��������. ��� ������� ���������������� �������� � ������ ����� �����������
������� �������� �������, � ������� ���� ���������� ��������. � ����������
�������� ������� ���������� � ��������� �������� ����. ��� � �� ������
���������� ������ �������, �� � ���������� ������ ��������� ����������
�������������. � ��������� ����� �������� ����� �� �������. ������� ���������
������������ ������������ �� ������ ���������������� �������� ��������
�������������. �����������, ��� ����� ��������������� �����������, ���
��������� ��������� ����� ����������� �������, ������� �� ������������� ���
������ ����������. � ������ ���������� ������ ����� ����������� �������� �
���������������� ��������, ��� ���������� �������� ���� ������� � ������
��������, �� ������� � �������� ������, � ������ ��������� ���������� ����
���������� � ���������� ��������� �����������. �� ����� ��������� ����������� �
�� ���� ���, ���� ��� ��������� �������� � ������������� ������������.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>����
������ � ������ ������������ �������� ������� ������������������ ���������
�������� �������� ������������, �� ����������� ��� ���������������, �� �����
����� ���������� ��� ������, � ���� ��������� ����� ��������� �� ��� �������
��������� ��������. ���������� ������������ ���� ��� ������ �������� � ����,
��� ������ ��������� ������ ��������� ������� �� ������� ������: ��������
������� ��������. <span style='color:black;background:white'>���� � ������ �
������ ������������ ����������� ������� �������� ��������� �����������
������������� �������� ��������� ������������ �� 1, 2 � ���� 3 ���, ������ ��
������� ��������� ������� �� ������� ������������, �� �������������� ������ ���
����� �������������.</span></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>����� ��������,
��� ������������� ����������� �������� �� ������� ���� �� ����, ����� ��������
������������. ����������� �������� ������� ����� �� ���������� ��
���������������� �� ������������, ����� ����, ��� �� ������������� � �������
����� � ����������� �������� ������� � �������������� ������� � ���, ��� ��
���� ����� �������� ��������� ��������������� �������� ������������� ������,
������� ��� ����� ������, ��� ������ ����� (fornit.ru/7224, fornit.ru/5313,
fornit.ru/7511). </span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>������ ���������
������ � ��� �� ������ <b>���� �� ����� ���</b> ��������� ��� ����� ������. ���
��������� ������ ��, ��� ��� �� ����� ���, � �� ��� ������ ������, ������� ����
���������� ���������� ��������. ������ ��������� �������� ������, �.�. � ��� �
������ ������ �� �������� �������, � ���������� ���������� ���������� ����
����������, ������� ������������� ������ � ���������.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>������
�������� �������� ��� ������������ ������� � ������������ ���������. �����
&quot;�������&quot; � ��������� �������� �������� ������� �������, ��� �����
&quot;������&quot;, ������� �������-������������ �����.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>��� ��� �
��������� ����������, ����������� ������ � ��������� �������. ���
�������������� ���������� � ������������ � ����, ��� ����� �� ������������ � ��
�������� ������. �� ������ ������������ ���� ����������� �������� ������
���������� �����������, � �� ������ ����������� �������� �������� �����
����������� �� ���������� ������, ������������ �������� ������ ����� ���������.
</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>�
������ ���������� �������� ������� �������� �������������� �� ���� ��������� 60
������/���. ������ ��������� ��������� � ����� �������� �������� ��������
��������������. �� ���� ��������� ������ �������� � �������� 120 ������/���, ��
� �� ���� ������� ��������� �����, ���� ��� ������� �� ��������� � ����. ������
���������� ��������� ��� �� ���������� �������� ��������� � �������� 120
������/���, ��� �� ��������� ���� �������� ��� � ��������� �����������������
����� ������������ �� ��������� � �������� 60 ������/���, �����������������
����. ������ �������� � �������� 120 ������/��� �������� �������������� ��� ��
��������, ��� �������� ����������� ������������������� ����������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>� ������ ������
��� ������ ������� ������� ���������� � ����������� � �������� � � �����
��������� ����� ������� ��� �������� �������� �������� ������ ��������, � ��
��� ����. �� � ������ ������ ����� ������� �������, ���������� ������ �� �����,
� ��� ����� �� �������� �������, � ����������.</span></p>

<p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt'><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>���� ��� ������ ����������� �������� �������
��������, ������������ �� ���� ���������, ����� �� ������� ��������� ��������
������ � �������������� �������������, �������� ����������, �� ����������� ���
���������� ������� �������������, �� ������ ��� �������� ��-�������� �����
�������� ��������� �����, � � ��������� � ���������� �������� ����
������������� ��������. � ������ � �������� ������� ��������� �������������� ��
���� ���� ���� ���������� ����������������� ���������������� ����� ����� 1/8
����. � �������������� ������ ��� ������������� ���������� ��������� �������
��������� �����, � ���������� 1/8 ���� ������ �������� �� �����. ����� ����
����� ����������� ������������&nbsp;� ���� ��������� � ����� ��������� �����.
���������� ������ �� �����������, ��� �� ������ �� �������� ��������� �����, ��
� �������� ��������� ������� ���� �������� ����������� �������������
������������������ ��������. ������ ���� ������������ ���� �� ���� �����
������� � ���� ���������� ������������������� ������������ 1/8 ����, ��
��������� ����������������. �� ������������ � ������������� ������������ �
�������� ��������� �����, ���� ��������� ������� ������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>�������, ��
����������� ������, ��������� ��������� ��������� ���������, ����� ����������
������� �� ������ ��������� ������� ����������� �������� ��������. �� �
��������, ���������� ��������������� ���������, ��� �� ������ ������ ����������
����������� ����� ����������� ����������� ������ ������������ � ������������
������������, ����� ��� ����������� ���������� ������������ ������� ��������
�������������� �� ���� ���. ���������� ������� ����� � ������� �� ������ �����
� �������, ��� �������� �������.</span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt'><span style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>8.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:black;background:white'>��������� ��������� ���� � ��������� ���������
������������������� ��������, �.�. ������ ������� �������� ���������� ��
��������� �����������. ��� �������, � ������ ����������� ������� ���
������������ �������� �������� ����������� ��� ������. �� ���������� ��� ���������
�������������� ����� ����� ����� �������. ��� ������� � ��������� ����� �
���������, �.�. ������� �����������. ����� ����� ��������� ������ � ��������
�������� ������������ �����. ����� � ������ ������ ���������� ������������
��������� �������� ��������, �� ��� ��������� ��������� ������������ ������ ��
����� �� ���� �����������, ���� �� ����������� ���� ������������. � �������
�����, ���� � ���� ���� ����� ������������ �������� ������� ����� ��
����������. ������ ���� � ��� ����� � ��������������� ������� ������������
����������� �����������, �� ����� ������� ����������.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#3333FF'>������ �� ������
��������� ������������ ������� �� ����� ������. ������� ������� ������������� �
������� ��������� �������� ����� ���������, ������� �������� �� ����� �������
��������� ��� ��������� ����� �������. � � ������ ������ ���� ������� � ����
����������. ��� ��� ���� ������ ������� ������� � ����� �����, �� �� ��������
���������� �� ���� ������. ��� ������ ������ ���, ��������� ������������ ��
������ �����, ��� ������� ������� ��������� ����������.</span></p>

EOD;
echo underlining_dic_words($str);

// include_once($GLOBALS["DOCUMENT_ROOT"]."/neuro/neuro_sys/psih_javleniya.php");

echo "</div></center><br><br>";

$dbi_main->close(); 
include_once($GLOBALS["DOCUMENT_ROOT"]."/articles/atr_util.php");
//$add_after_discas_link_text="<span style='font-size:12pt;'><br>��� ���� <a href='/forum/Sources/printpage.php?board=4&threadid=1914' target='_blank'><b>���������� �� ������</b></a></span>";
$stst = articl_discas("",0,"����������","���������� $page_name",'000000',"999999","ECE9F5", "D9D7EC", 1);
footer();
?>
