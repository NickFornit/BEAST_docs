<?
// http://scorcher/adaptologiya/beast/report.php  
// https://scorcher.ru/adaptologiya/beast/report.php

// � ������ �� ������ ��������� link_list � [axiom_id=128] ������ ���� � �������!


$page_name="�������� ���������� ������ �� ������ ����������:
����� �� ���������� ���������";// � �  � �
$keywords="�������� ���������� ������ �� ������ ����������:
����� �� ���������";
$description="������� ���������� ���������������� ���������� ������������ ��������� ���������
����������� ������������ ������������������� ����������� ����������
�������������� ������������.";//����� �� ����������� ������������� ������ ����� ���������� ��������, ����� � ����� ��������� ���� #

$origin_url="";// ����� ������ ����� ", "
// ��� ������������� �������� ��� ������� (������ ��� ������������ �������)
$semantic_marking_type="EducationEvent";// Event EducationEvent SocialEvent 

$text_extend="";
$back_url="/adaptologiya/shemotehnika_adaptivnyh_neyrosetey.php";
$back_name="������������ ���������� ����������";
$header=$page_name;

$statPageName=$page_name;
$stat_url="/adaptologiya/beast/report.php";
$date_pablick="2023-01-01";
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
	{mso-style-link:"��������� 2 ����";
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	line-height:107%;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Arial",sans-serif;}
h3
	{mso-style-link:"��������� 3 ����";
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
	{mso-style-link:"��������� ����";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpFirst, li.MsoTitleCxSpFirst, div.MsoTitleCxSpFirst
	{mso-style-link:"��������� ����";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpMiddle, li.MsoTitleCxSpMiddle, div.MsoTitleCxSpMiddle
	{mso-style-link:"��������� ����";
	margin:0cm;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
p.MsoTitleCxSpLast, li.MsoTitleCxSpLast, div.MsoTitleCxSpLast
	{mso-style-link:"��������� ����";
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
	{mso-style-link:"����� ������� ����";
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
	{mso-style-name:"��������� ����";
	mso-style-link:���������;
	font-family:"Times New Roman",serif;
	letter-spacing:-.5pt;
	font-weight:bold;}
span.2
	{mso-style-name:"��������� 2 ����";
	mso-style-link:"��������� 2";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
span.3
	{mso-style-name:"��������� 3 ����";
	mso-style-link:"��������� 3";
	font-family:"Times New Roman",serif;
	color:#1F3763;
	font-weight:bold;}
span.1
	{mso-style-name:"��������� 1 ����";
	mso-style-link:"��������� 1";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
span.10
	{mso-style-name:"������������� ����������1";
	color:#605E5C;
	background:#E1DFDD;}
span.a0
	{mso-style-name:"����� ������� ����";
	mso-style-link:"����� �������";
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

<p class=MsoTocHeading>����������</p>

<p class=MsoToc1><span class=MsoHyperlink><a href="#_Toc121642934">��������
���������� ������� �� ������ ����������: ��������<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642935">�������
�������� �������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642936">�����
����������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642937">��� � ��
������ ��������� ������������ �������� ���������� ����������<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642938">���������
����������<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642939">������ �����
�������?<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642940">���� �� �����
� <span lang=EN-US>Beast</span><span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642941">���� ��
������������ � <span lang=EN-US>Beast</span><span style='color:windowtext;
display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642942">��� ��������
��������������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642943">�
�������������� ����������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642944">�����������
����� ������ ����������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642945">������������
�������� ������ ���������� ������<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642946">�������
�������� ���������� ��������� ���������<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642947">��������������
������� �������� ������������<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642948">�������
������������� ���������� �������� �������<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642949">�������
������������ ��������������<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642950">�������
������������� ������ ����������<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642951">�������
�������� ������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642952">�������
������������ ���������� ��������<span style='color:windowtext;display:none;
text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642953">�������������
������ ������������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642954">�����������
����������� ����������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642955">��������
�����:<span style='color:windowtext;display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642956">����� �����:<span
style='color:windowtext;display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642957">�������
���������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642958">������ ��
���������, � ������������ ����� ����� ��������<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642959">���������
��������������<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642960">���������<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642961">��� �������
��������� ��������� ������ �������:<span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642962">����������
����������� ��������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642963">�������
������������� ���������������� �������<span style='color:windowtext;display:
none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642964">�����������
(��������������) ��������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642965">�������
����������� ��������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642966">��������
��������<span style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642967">���
����������� �������� ��������� ����������<span style='color:windowtext;
display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642968">�������
��������� ��������� ��������<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642969">��������
������������ ��������� ��������<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642970">�������������
��������� ��������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642971">�����
�������� ����������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642972">�����������<span
style='color:windowtext;display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642973">�����������
� ����� ������� ��� ������������� �����<span style='color:windowtext;
display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642974">����� ��������
����������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642975">��������
��������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642976">������
���������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642977">�������<span
style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642978">�������
������������ ����������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642979">�������������
������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642980">������
���������<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642981">����� �����
����<span style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642982">�������������
��������� ������� ��������������� ��������� (���)<span style='color:windowtext;
display:none;text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642983">������
������ ��������� ���������� ���������� �������� ��������<span style='color:
windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642984">����������
����������� � ����� ���������� ��������<span style='color:windowtext;
display:none;text-decoration:none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642985">���������
���������� �������� � ��������<span style='color:windowtext;display:none;
text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642986">�����
���������� ����������<span style='color:windowtext;display:none;text-decoration:
none'>.. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc3><span class=MsoHyperlink><a href="#_Toc121642987">��������
�������� �����������<span style='color:windowtext;display:none;text-decoration:
none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642988">������
�������� ������� �� ������ ��������� (��� ������ ��� ����� ����� �����������
������ ������� ������ ������������).<span style='color:windowtext;display:none;
text-decoration:none'> </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoToc2><span class=MsoHyperlink><a href="#_Toc121642989">��� ������?<span
style='color:windowtext;display:none;text-decoration:none'>. </span><span
style='color:windowtext;display:none;text-decoration:none'>1</span></a></span></p>

<p class=MsoNormal>&nbsp;</p>

<h2><a name="_Toc121642935">������� �������� �������</a></h2>

<p class=MsoNormal>���� ����� �������, �� ����������� ����������� � ��������
������� ������ ������ �������� (��. ����������������� �����������) �
����������� ������������, ����������� ��� 3-5-������� �������� �������, �� �
������������� �������� ����������: ������ ��������� ���� � ���� ��������
������������� ��������� ��������. � ��������, ���������� <span lang=EN-US>Beast</span>
(�����), ���� ����������� ��������� � 8-� ���������� �����������, ������ �
���������� ��� �������������� ������� ���������.</p>

<p class=MsoNormal>������ �� ���������, � ������������ ����� ����� ��������
(fornit.ru/64924) ��������������� � ������� ����.</p>

<p class=MsoNormal>������������ ���������������� ���������� (�����������
�������) ��������� ������������ �������� ���������� ������� �� �������
���������� � ����������� ��������� �� ��������� ���������� ��������. <a
href="/adaptologiya/proizvolnaya_adaptivnost/proizvolnaya_adaptivnost.php">�������������
������</a> ������������ �� ����������� <a
href="/axiomatics/axioms_list.php?id=1">������� ����������� ������ ������������</a>
� ����������� ����������.</p>

<p class=MsoNormal>���� �������� ������� � �������� �������� ���������, �����
����������������� ������� � ����������� ����� ���� ������������. ����� ���� ���������������
����������� � ����������� ����������� ����� ������� ��������� ������������.</p>

<p class=MsoNormal>������� ������� ������� ���� ����������� �������������
������ (fornit.ru/7431) ������� ������������� ����������� �������������
��������� ��������� �� ����������� ������ ������������ ��������� ����������.
�.�. ��������� ������ �� ���������� ���-�� �����, � ��� ����� ������ �������������
��� ���������������� �������� ��������. ���� ���� �������������� ������
�������� ��������� ������ ������������ ��� �� ���������.</p>

<p class=MsoNormal>������� ���������� ��� ���� ������� �������������
�������������� ������ ��������������� ������ ���������� ������������ ���
���������������� ����� ����������� �����������. ���� ����������, ��� ����������
���������� ��������� �����, ������������ ��� ��������� ������� ������
������������, ������ ������������� � ����������� �� ����������� ������ ������ �
� ����� ������ �������� ��������� ��������������� ������������ �������������
����� ����������.</p>

<p class=MsoNormal>���� ������������� ����� ������� ��� ����� ����������, �����
�������� � ������ ������������� ������. ��� ��������� ������������ �� ���
������������ �������� ������, � ������ �� ���������� �������� ��������������,
��������������� ��� ������������ ������ (��� ������� � ������������� �
����������� ������� ����� ���������, � �� ���� �������� ���������� �� ��� �����).
����� ������� � ������ ���������� ���������������� ����� ��������� ���������,
��� ������ ������ ������������� ��� ���������� ��� ������������ ����, ��
������� �� ��������, � ������ ������� ������������� �������������� ����������
�� ��� ������.</p>

<p class=MsoNormal>��� ����������� ���������� �������� ������� ���������� �
������ �������� �������������� ��������� � ����� ������ ������� �
�������������� ���������� ��������������� ������� ��� ������������� �������� �����
������. � ��������� ���������� ����� �� ������� ������ ��������� ���� �����
���� ����� (fornit.ru/43642), ����������� � �������� � ������� �������
������������� ����� ����� �� ����� ������� ������������� �������� �������. �
������� ����������� ���� ����� ��������.</p>

<h3><a name="_Toc121642936">����� ����������</a></h3>

<p class=MsoNormal>������ �������� ������������ ��� ������������ ����������,
������������ ������������ ������� � ������������ ������� ��������� ����������
������ �������������� ������������. ��� �� ������ ������ ������������ �������,
� ������ ����������� ���������� ��������� ������� ������� ��� �������� �
����������� ���� ������ ��������.</p>

<p class=MsoNormal><b>����� ������ ����������� ��� ���� �������������� ������
�������������� ������������:</b></p>

<p class=MsoNormal>�������������� ������� �������� ����, ������ �����, ���
����������� ���������� ��� ������������ ������ �������������� ������������. ��
�� ����� ����������� ����� ���� ������ ������������ ������������ � ������� �
��������� ������� ����������� ���������, ������������� ������������ �������.</p>

<p class=MsoNormal>���������� ��������� ������������ ������������
�������������� ���������, �� ��������� �� ������������ ���������� ���������
������������. </p>

<h3><a name="_Toc121642937">��� � �� ������ ��������� ������������ ��������
���������� ����������</a></h3>

<p class=MsoNormal>��� ���������� ������ ���������� �� ���� ������ �������
����������������� ���������� ���������? </p>

<p class=MsoNormal>1. �������� ������������ ����������, �������������
����������� �����������, ���� � �������������� ���������.</p>

<p class=MsoNormal>2. ������ �������������� ������� ������������ ������ ��
������������, ����������� ��������� ������� ����� ������� ������� ���������,
���� � � ����� ������������������ ����������� �������� ������ ������������ �
���� ����������� ������� ���������� ����������� ������ ������������ �����
�������.</p>

<p class=MsoNormal>3. ��������� ������������ ���� �������� ����������
������������.</p>

<p class=MsoNormal>������� �� ������ � ������� ����, �� ���������� �������� ���������.
� ������� ����������� ��������� ������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-left:54.0pt;text-indent:-18.0pt'>0.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>�� ��������</b>
� ����������� ������� ����������, �������� ��������� ���������, �����������
���� ����������� ���������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>�������� </b>�
����������� ���� �������� ���������, ����������� ������������� ������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>����������� </b>�
�� ������ ����������� � �������� ��������� ����������� ���� ������������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>���������� </b>�
����������� ������������� �������� ��������� ��� ������������ �������
������������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;text-indent:-18.0pt'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>���������� </b>�
������������ � Beast ������ ��������� ����������� ��������, �� ����������,
������������ ������������, ������ ������� ������ �������.</p>

<p class=MsoListParagraphCxSpLast style='margin-left:54.0pt;text-indent:-18.0pt'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span><b>���������� </b>�
��������� ���������� ����������, �������� ������� ������ �������, ����������
��������� �� ������ Beast ��������, ������������ �������� ���������� �������</p>

<p class=MsoNormal>������ ���� �������� �� ������ �����������. ������
������������� ����� � �� ���������� ���������� �� ������� � ��� �������
��������� ���������� ����������� ������������� ������� � ���������������� �������������.
��������� ������������� ������� ��������� �� ������������ ��������, ���
��������� ����� ������� ��� - ������ ����������� �����������.</p>

<h3><a name="_Toc121642938">��������� ����������</a></h3>

<p class=MsoNormal>���� ��� ���������� ���������� ������ ����� ��������� �
������������ ���� ����� ����� ����������� ������ ������������ � ������� ������
����, �� ������� ���������� ������� ����������� � ������ ������ ��������������
� ������ �� ������������ �������. </p>

<p class=MsoNormal>����� � �������� ���������� ������� ������ ������, ��� ��� �
��� �� ���������. ������� � ����������� ����� ������� ���������� ���������� ���
�� ������ ����� ������� � ��� ���� � �������� �������� �� �����
���������������. ����� ���� �������, ����� ������� ����� ���-�� ����� �
������������ ���� �����������, ���������� �������������. ������ ��� ������
�������� ��� �� ��������, �� ��� �������� �� ����� ����� ������� ����,
������������ ���� �������� �� ����������. </p>

<p class=MsoNormal>��� ��� ����������� ������� ���������� ������� �
��-���������� ����������� � ��������� �������.</p>

<h3><a name="_Toc121642939">������ ����� �������?</a></h3>

<p class=MsoNormal>� ����� ������ ������ ������� ��� �������� ��������� ����,
�� ����� ����� ����� ��������, ��� ����������� ����������, ������� ������
�������������, ����� �� ������� �������� �������� � �� ������, ��� ������ ��
����� ������������ ����������. �� � �������� ������������� ���������� ��
������� �� ���� ��� ���������� ���������� ���������. ������� � ��������� � ��
���������� ������� ����������, � ���������� ��������� �������� ���������
�������� ���������� ����������.</p>

<p class=MsoNormal>� ������, ���� �� �������� ������� ��� �����������
����������, ��� ���������� ��������� (����������� � ������������� ������������)
���� �� �� ��������, ��� ������ �� ������������ ����� �����������
�������������. � ���� ������ ������������ ���� �� ���������� �����.</p>

<p class=MsoNormal>������� �������������� ����������� ���������� � ���� ������������
���������� ���� ���� �� ����������� ����������. ���� ����� ������ ����������,
��� ������ ���� ��������� ���������� ������������� ���������� �����, � ����
������ �� ���������� ��������� � �� ��� ����������� � ������ ������ ���� �� �����������
���������� ��-�������. �� � ����� ������� ��� ���������� ��������������� ��
���� � �� �� �������� ����������������� ���������� ���������� ������������.</p>

<h3><a name="_Toc121642940">���� �� ����� � </a><span lang=EN-US>Beast</span></h3>

<p class=MsoNormal>������� ������ ���������� � ������ � ����� -&gt;
������������ -&gt; ����� (fornit.ru/64924).</p>

<p class=MsoNormal>���������� �������� ��� ������ �� ������ ����� ������
��������. ��������� ���������� �������� ��� �� ����������� (���� ��
������������ ������������� ���������), ������� ������� ������� ���������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>�� ��������� �������� � ���, ��� � ����������� �� ����������
�������� ���� �� ��������, ����������� � ������� �������� ��� ����������. ��� � � �������� ��� ��, ��� ���������� �������� � ������ � �������
�� 3-5 ���.</p>

<p class=MsoNormal>�� �����, ��� ���������� � ����� �� ������ �� ��������� �
�������� ������� ����������� ������������� �������� � ��������� ������
��������� ������� � ����������� �������������� � ���� �������� ��������.</p>

<p class=MsoNormal>����� <span lang=EN-US>Beast</span><span lang=EN-US> </span>����
��� �������� ���������������� ������������, ����� ��, ��� � �����������
��������, ������������ � ��������� ��������� �������� ��������� <span
lang=EN-US>Beast</span>, � ���� � �������� ������� �������������� (������
������������ ������������ ����� ����������). �� ������ ����� ������� ��
�������� ���������, �.�. �� ���� � ��� �� ������ <span lang=EN-US>Beast</span><span
lang=EN-US> </span>����� ����������� ���������� ��-�������. ����� �����������
��� � ������� ��Ȕ � ����� ������ ������������� ������, �� ������� ������
���������� (�� ����� ������).</p>

<p class=MsoNormal>��� ���� ������������� �������, ���������� ���� �������
(��������, <span style='color:black;background:white'>GPT-3 (</span><a
href="http://fornit.ru/49524" target="_blank"><span style='background:white'>fornit.ru/49524</span></a><span
style='color:black;background:white'>)</span>), �� � ��� ��� ��������������,
������������ ����������������� ������������� (�, ��� ����� �������
��������������) � ������� �� ��� �� ������������� ���� ����������� �����������
(��� ���������� �� ����� ���� ����������� ������� ����������). ����� ����������
������� ������� ������ ��������� ������������, ��� ���� ��������� <span
lang=EN-US>google</span><span lang=EN-US> </span>����� ���������� �������
������ � �� ����������� ���������� (fornit.ru/7360). </p>

<h3><a name="_Toc121642941">���� �� ������������ � </a><span lang=EN-US>Beast</span></h3>

<p class=MsoNormal>�������������� ���������� ���������� ��������� ������� ����
� <span lang=EN-US>Beast</span>, � ��� ������� �� ������� ������� � ��������
������������ ���������, � �������� ��� �� ���� ������������ ����������. ����
����������� � ���, ��� ������ ������ (fornit.ru/7339) �������� �����������
(���������, � ����� ������� ����� ���������� �������) ��������� ����������, ��
� <span lang=EN-US>Beast</span><span lang=EN-US> </span>���� ������������. </p>

<p class=MsoNormal>��� ��, ��� ������� � ����� ����� (��� ����� �����������
������ ������������� ��� ���������� � ������������ �������������), �����
������� �� ����� ������ ��������, ���������� �� ������������ ��� ��������, ���
�� ����� �� ������ ��� ��� ������������ ����������� ���������� ������, ���
������������ � ��� �������������� ��������� ���������� ��������������� �����
���������� ��������, ��� ������, �������, ����������� ������ ������������
��������� � ��� � �������, ����������� ��������������� ��� ������� �����������
����������������� ����������� �������� ��������, ������� ��������� � �������,
����� ������ ���������� �������� ��������������. � ���������� ����� ��������
��������� ����� ��� �����, ������� ���������� �� ��������� ���������
(����������� � ��������) ���������� ���������� �������� ��������, ����� ���,
��������, ������� ���� (fornit.ru/5170), ������� ����� ����� ���������� ������
���������� � ������ ��������: �����, �������� �����, �����, ������ ��������� �
�.�.</p>

<h2><a name="_Toc121642942">��� �������� ��������������</a></h2>

<p class=MsoNormal>������ � ��������� ����� ��������� ������ ��� ���� ��������
������������ ��� �� ���������������� ����������� ����������, ��� ����� <span
lang=EN-US>Beast</span><span lang=EN-US> </span>� ������ ����� � �������� �
���� �����������:</p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'><a href="https://github.com/NickFornit/BEAST_GO"><span style='color:windowtext;
text-decoration:none'>https://github.com/NickFornit/BEAST_GO</span></a></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'><a href="https://github.com/NickFornit/BEAST_PULT"><span
style='color:windowtext;text-decoration:none'>https://github.com/NickFornit/BEAST_PULT</span></a></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-autospace:
none'>&nbsp;</p>

<p class=MsoNormal>�������� ������ � ����� ������������:</p>

<p class=MsoNormal><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/index.htm"><span
lang=EN-US>https</span>://<span lang=EN-US>scorcher</span>.<span lang=EN-US>ru</span>/<span
lang=EN-US>adaptologiya</span>/<span lang=EN-US>beast</span>/<span lang=EN-US>beast</span>_<span
lang=EN-US>scheme</span>/<span lang=EN-US>index</span>.<span lang=EN-US>htm</span></a><span
lang=EN-US> </span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>��� ����� � ���� ���������� ����� � ����������� ������ <span
lang=EN-US>Beast</span> ����� ������� � ������-�����:</p>

<p class=MsoNormal><a href="https://disk.yandex.ru/d/7az4UW4XG99kDQ"><span
style='color:windowtext;text-decoration:none'>https://disk.yandex.ru/d/7az4UW4XG99kDQ</span></a></p>

<p class=MsoNormal>���������� ������ ������� � ����� �����, <b>��
�������������� �����</b> � �������� ��� ��������� ���� <span lang=EN-US>http</span>:<span
lang=EN-US>go</span><span lang=EN-US> </span>�� ����� ����������.</p>

<p class=MsoNormal>����������� ����� ����� � �������� ������������ <span
lang=EN-US>Beast</span> � ��� �� ������� ��������� ����, �� ����� ������
��������, ��� � ��� ����������� �� ������ ������ �������� <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal>� ��������, ���������� �� ������-����, <span lang=EN-US>Beast</span><span
lang=EN-US> </span>������� �������� ���������� ������������� �������, ��� ��
�������� �����������. �� � ������ ���� ����������� ��������� � ������ �����
������ ��� �� ������ ��� ������ � ������ ������.</p>

<h2><a name="_Toc121642943">� �������������� ����������</a></h2>

<p class=MsoNormal>������� ����� � ���������� ��������� ������� ������������
��� ����������� (fornit.ru/49721) � ������ 2021 ���� � �� ��� �����������
��������� �������������� ������ � ������� ��������� ��������� ������������
��������. ��� �� ���� ������������ ������ � ������� ���: <span
style='color:black;background:white'>&nbsp;</span><a
href="https://psycholinguistic.ru/arhiv/2021%E2%84%964(16).pdf">���� ���
���������������� ����������</a><span style='color:black;background:white'>&nbsp;(39-�
��������,&nbsp;</span><a href="https://scorcher.ru/conscience/vak.pdf"><span
style='background:white'>PDF</span></a><span style='color:black;background:
white'>).</span></p>

<p class=MsoNormal><span style='color:black;background:white'>� �������
������������ ��������� ���� ������������ ����������� � ������ �.�.������� -
���������: � ������� ���������������&nbsp;������������&nbsp;������
���������:&nbsp;</span><a href="http://fornit.ru/50322" target="_blank"><span
style='background:white'>fornit.ru/50322</span></a> � <span style='color:black;
background:white'>����������� � ����� ����� ������ ����: ����� ������
��������:&nbsp;</span><a href="http://fornit.ru/50204" target="_blank"><span
style='background:white'>fornit.ru/50204</span></a>.</p>

<p class=MsoNormal>��� ������������������ ������� ������� ��������� ����������
������� �������� ��������������� ������������� ����� � ��������, ��� ���
��-�������� �������� ����� ������ �� ������� ��� ������������� �����������������
�������, � ��� ��� �� ����������, ��� ������� ������ ���������� ����������
�������� ��������.</p>

<p class=MsoNormal>����� � ����� ���� ����� ߔ (fornit.ru/40830) ����
������������ ��������, ��� ���� �������� ������� ���������������� �����������,
� ������� ��������� ��� �������� �������� ������ ����������� ������������. ���
��������, ��� ������������ ���������� ���������� ���������� ����� ��������� �
���������� ������� ������������ �������������. </p>

<p class=MsoNormal>�������� �������� ����������� ������������ ����� ����
����������� � ������ ����������� ����������, ��� � ���� ��������� ���
���������� ������ ������ ���������.</p>

<p class=MsoNormal>��� ���� � ������������ ����� ���� ������������� ������ ��
������������ ������� ��������, ������� ���������������� � ������ ����������
��������� �� ���������� ��������� � ���� ������������������ �����.</p>

<p class=MsoNormal>������� ���� �������� ������ ���� ������ (fornit.ru/50246),
��� ������� ����� � ������ �������.</p>

<p class=MsoNormal>������ ���������� ���������� ������� ����������� ������� ��
������ ���������, ������ ���� ������� �������� ������������� ���������. �� ���
������� ������� ���������: ����������� � ������������������� �����������������
������� � ������������ ���������� �������������� ������������.</p>

<p class=MsoNormal>����� ��������, ��� � ������� ������ ������� ������������
�������� ����� ���� �� � ������� ��������� ����������, � ���� ���������
��������� ������ �� ���������� � �� ���������������� ������ ����� ������
�������, ���� �� ��������� � ������������. ��� ����� ������ ������ ��������
���������������� ����� ����������, � ������ ������������� ���� �� ������ �����
�������, ��� ������ ���������� ��������� ������� �������������� �������������.</p>

<p class=MsoNormal>����� �� ���������� ������������� �������������� ������ �
���� ��������� ����������� ������ ��������� ���������� � �������� ����������.
��� ���� ����� ��������, ��� ������ ���������������� ������ ��������� ��������
������������ � ���������� ���������� �������������� ������������.� </p>

<h2><a name="_Toc121642944">����������� ����� ������ ����������</a></h2>

<p class=MsoNormal>�� ������ ������� � ���������� ��������� ���� ������ ����
��� ���������� �� �����, ��������� ������������ ���������, ������������� �
������ ������, ����� ��������� ������ �������� �������, ��� ��� ����� ������.</p>

<p class=MsoNormal>������ �������� ������ ���� ������� ����, ����� �����������
��������� ��� ����� ������ ��������������� ����������� ������ ������������,
������� �������� �� ������ ��������. ��� �������� ������ ������� ��� ����������
�������� ���������. ����� �� ���������� ������� ����������� ��� ����� ������
������� � ��������� ����������, ��� ��� ���������� ���� ����� ����������
���������� ��������� ���� (fornit.ru/7431).</p>

<p class=MsoNormal>���������� ������ ������ ��������� ������� ��������������
������������ �������� ���������� ������� �������������� ����� ����� �������
���� ��������� ����� (fornit.ru/43642). ���������, ��� ������������� ����������
��������������� ������� ���������� ���������� ������ �������� ���������
������������ ������� ��������� ������� � ������� �������������� ����� ����� �
������ ����� ������ �������������. ��� ������������� ����� ������� � ���������
������ ��������� �� ����� �������, ������ �� ���������� � �������������� ������
����� � ������ ������ � ��� ��������� ������� �� ��������������� � ���������
�������������. ��� ��� ������������� ����� ����� ���� ����� ����������� �
����������� ��� �������������� ����� ���������� ������� ��� �������������
����������� �� ���������.</p>

<p class=MsoNormal>���������� ���������� ������������ ������� ����, ��� ����
����� ���������������� ������ ����������� ������� �������������.</p>

<p class=MsoNormal>���� � ������ ������ ���� ������������ ������ ���� ������,
�� �� ������ � ���� �������� ��� ���� ������� ������������� �������������
�������� �������.</p>

<p class=MsoNormal>������� �������� ����� ��������������� (����������� 2-3
����) � ���������������� ������ ������������ �������� ��������� � �������
������������, ������ ���������� ������ ����� ����� �������. ��� ���������
������� ������� ����������� ������ ������� ������������.</p>

<p class=MsoNormal>������ ����� ������� � ������������� ����� ���������� �
����� ����������� ������� �������� ������ ��� ��������� ������ ��������.</p>

<p class=MsoNormal>�� ��������� � ������� ������� ���� ������� ���������
���������:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>����������� ������������ ����� ����������� ���������� �
������������� �������� ���������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>���������� ����������� ������� ����������, ������� ����������,
��������� ����� �������� ���������� � �������� ��� ���������� ��
������������������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>����������� ��������� ����������� ��������� ���������� �������
���������� ��� ������������� ����� ����������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��������� ���������� �������� �� <span lang=EN-US>Beast</span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� ��������� ������� ������� ������ ���� � ����</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>���������� ����������� �������� � ����������� ���������, ��������
��������� �� ������� ������� ����� �������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� ���������� �������� ��������� � ����������� ��������
���������� ����� ������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��������� ���������� ������������, �������� ��������� ��
������������ �� ����������� � �������� ���������, � ��� �� �� �������
���������� ������������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� ��������� ����������� ������, ������ ����������,
�������� ����������, ������ ���������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��������� ����������� ������� ����� ����������, �����
������������, ������� ������������</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��������� 4 ����� ������ ������������� ����������� ���������
�������</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� ������ ������ ������ �� ������ �������� ���������
������������</p>

<p class=MsoNormal>��� ��������� ��������� ������������ ����������� ������,
���������� ������� ����������������� ������� ��� �������������� ������
�������������� ������������, ������� ��� ����������� � ������� ������.</p>

<h2><a name="_Toc121642945">������������ �������� ������ ���������� ������</a></h2>

<p class=MsoNormal>������������ ��������� ��������� ����������� ����������
������� ���������� � ��������� �� � ���� ����������������� �������. ��
����������� ����� ������ ����� ��� �� �������������� ��������� �����������
����������� ���������.</p>

<p class=MsoNormal>�������� ��������������� ��������� � ���, ��� �� ������
��������� �������������� ���������, �� � ��� ������� ��������������
������������ ������������ � ���� ����������� ���������, �������������
������������ �� � ����������, � �� ������ ������������.</p>

<p class=MsoNormal>�������� ������ ������� � ���, ��� �� ���� ����������������
������ � �������� ���������� ����� ������������� ����� ���������� � ���������
����������, � ����� ����������� ������������ ����� ��������� ����� ��������� �/���
��������� �� ���������� �������.</p>

<p class=MsoNormal>���� ��� � ������������� ����� �� ���� ������������
��������� ������ ����������� ���������� ������������ ������ ��������������, ���
����� � �������������� ���������� �� �����������������.</p>

<h3><a name="_Toc121642946">������� �������� ���������� ��������� ���������</a></h3>

<p class=MsoNormal>������ ���������������� ��������� ��������� �������� ��
������������� ����������� � ����� ��������� ����������. </p>

<p class=MsoNormal>�� ������������ ������ ��������� ����� ����������������
��������, ���� ���� ��� ���� � ������������ ���������������� ��������� ������,
��� ��� �������� ��� ������� �������� ����, ���������� ��������������. </p>

<p class=MsoNormal>������������ ����������� �������������� ������������ ��
������������ �������, �� �� ������������ ������ �������� ������������ ������
�������� �������� �������� � ���������������� (���� �������� �� ����������
������).</p>

<h3><a name="_Toc121642947">�������������� ������� �������� ������������</a></h3>

<p class=MsoNormal>�� ���� ������� ��������� ���������� ���������� �����������
���� �������������� �������: ����������� ������� ������ ���������� ����������
��������� �� ����������, ������� ����������� ��������� �� ������ ������.
���������� �� ������� ������ ������� ����� ���� ����������, ������� ���������
����� ����������� �������������� � ������� ������������ �� ���� ������� ������
���������� ����������.</p>

<p class=MsoNormal>��� � ���������� ��������� �������: ������������
������������ �������������� ���� �������������, ������� ��������������
��������� ����������. � ����� ��� ��������� ���� ���������� ���� ���������,
���������� ����� ������� ���������, ����������� ������������ ������ �����������
������.</p>

<p class=MsoNormal>� ���������� ���������� <span lang=EN-US>Beast</span>
��������, ��� �� ������ �������� ������������ ��� ����������� ��������,
�������� ��������, ����������� ���������� ����� ����������� � �������������
����� ������� ������������, ���������� ����� ��� ���, ��� �� ���� �������� ��
�����������. ��� ��� ��� ���������� ������ ����������� ������� ���������
����������� ����������� ��� ����������� ������������� ��������� ������
������������. � ��� ����������� ��������������, ������ �����, ����� �������� ��
����, ��� ������������ �������������� ��������� �� ������ �� ����� �������,
������������� ����������� ���������������� ���������� ������.</p>

<h3><a name="_Toc121642948">������� ������������� ���������� �������� �������</a></h3>

<p class=MsoNormal>������ ������ ��������� �����, ������� ��������� �����������
����, �� ������������� ���������� �������� ������ ���������������, �� ������
����� ������, ��������������� ���������� ����� ������� ����������� �������.
���� ���������� ����� ���� ������ ������ (������ ��� ���� �� �������������
����������� �������) �������� ����� ������������ ���������� ������
�������������� ����������, ������� �� �� �� ����. ��� ��������� � ����������
������������ ������������ ������ � �������� ���������� � ���� ����������������
���������� � �������������� ������� ����������� ����������� ��������.</p>

<p class=MsoNormal>� ����� ������� �������������� ����� �� ���������� �������
������� ���������� ���� � �������� �������������� ���������� �������. ���
��������� ��������� ������������� ����� ����� ����� ������ ���������������
����������� ����������� ������, ������� ��� �� ������� ���� ����������
�������������.</p>

<p class=MsoNormal>� �������� ����������� ��������� ���������� �� ������������
����� ������� ������ ��� ��� ���� ��������� �� �������� ���� ������� �� �����
����� ��������� ������������� �����. ���, � ����� �������, ���� �������� ������
��������������, �� �� ����� ����. ��������� �������� ����� ������������ ���
�������� ������ ��������������, ��������� ������ �������������� ������� ���
������� ��������� ���������� ������ � �� ����������������� ������� ���
���������� ��������������.</p>

<h3><a name="_Toc121642949">������� ������������ ��������������</a></h3>

<p class=MsoNormal>����� ���������� ���������� ��������� ����������� ��������
���������� ������������ ������������� ����� ����� ����� �������� ���������
������, ��� ������ ����� ������� �� �������������� ����� ����� �������. � �����
������ ��������� ����� ��� ����� ��������� �������� �������, ����� �� ������ �
����� ������� ��� ������, ��������� ����������� �������������� ������� � ������
���������� ������������ ������� ����� ������ (���� �������� �����). ���������
������ ��������� ����������� ��� ����� ��������, ������ ����� ��������������
����� �������.</p>

<h3><a name="_Toc121642950">������� ������������� ������ ����������</a></h3>

<p class=MsoNormal>� ������ ������ � ������ ������������� ������� ��������� �������
������ ���� �� ����������, ������� ��� ������� �������� ������� ��������
���������������� ���������� (����������, ����������� ��� ����������). ��, �����
����, � ������� �������� (��������) ����� ��������������� ���������� ����������
�������, ������� ������� ��������� ��������� ����������. ����� �������
���������� ���������� �� ������������ � ����� ������������, ��� ���������
�������� ������ �������: ���������� ��� ����������.</p>

<h3><a name="_Toc121642951">������� �������� ������</a></h3>

<p class=MsoNormal>���� ���� ���������� � ���������� ��������� �� ������������
�� ������ � ������ �������, �� ���������� ��������� ��������� �������: ������ -&gt;
����� -&gt; ������, �������� ��� ������������ ���������� ������� ���
����������� � ������ ��������.</p>

<p class=MsoNormal>����� ����, ���������� ������� ���� ����� -&gt; ������ ����
����������� �������: ��� ��������� ������ �� ����� �����, ��� ��� �� ��������
������������ ��� ����������������� �������.</p>

<h3><a name="_Toc121642952">������� ������������ ���������� ��������</a> </h3>

<p class=MsoNormal>���� ������� �� �������, �� �������� �����, �� �����
���������� �������������� ����: ����� ������� ����� ��������.</p>

<p class=MsoNormal>�������������� ��������� ���������, ��������������, �����
���������� ��������� ��������� � ������� ���������� ��������. � �����
���������, ����������� ��������� ����������� ������� �������. � ��� ���������,
����������� ����� ������� ������� �������.</p>

<h2><a name="_Toc121642953">������������� ������ ������������</a></h2>

<p class=MsoNormal>������� �������� ������������� ������� ������������ ��
���������� �������������� ������� � ��������� ���� ������������ ������� ������
� ��, ������ ���� ������� ���������� ���������. � ����� ����� �����, ������
����� ������� ����������� ��������� ������, ��� ���������� �������������� �����
����������, ������� ���������� ��������� ������������ � ����� �������� �
������������� ������������.</p>

<p class=MsoNormal>1. <b>������������� ���������������� ���������</b>.</p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
����� ����������� ��������� ������� �� ��������� �������� ���������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ��� � ������� ���������� � ������� ������� ����������
(������) ���������, � ����� ��������� ���� � ��������� �������� � ������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
������ ��������� ��������, ������ ����, ����� ���������� ���������.</p>

<p class=MsoNormal>2. <b>����� ������� ����� ��������� �������� (��������
������� ��� �������� ��������)</b></p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
��������-������������ �����: ������� ������ �� ��������� �������� ���������,
����� �������� ������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: �������� ������, �������� ��������� ����� ������ ������
������� � ������� ������ �������, ��� �������� ��� ������� �������� ��������.
��������� ����������� ����� ������� - �������� ������ � �� ��������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� �������� ������.</p>

<p class=MsoNormal>3. <b>�������������� ������������ ��������</b>.</p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
������������ ������ � ������ � ����� �� �������� <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>. �� ������ ������ �������� ��� ������� � ������ ����� �������
���������� ��� ������ �������� � ������ ��������. ��� ���������� ������ �����
����������� ������� �������� � ����� �������� �����������, �.�. � ������
��������� ��������� ����� ������ ����������� �� ����� ����������, � � ������
��������� � �������� ����� ����.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ������� �������� � ������� �������
����������. </p>

<p class=MsoNormal>4. <b>������ ���������� ������� (�����������)</b></p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
������� �������� (���������� ������� ��� ������� ��������� ������� � �������),
�������� ������������ ������������, �������� ��������� ��������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ��� ������ ������� � ������� ������ �������� �����������
��������� ����������� �������� �����������, � �������������� ���������
����������. ����� ����, ���� ���������� ��� ���� ��� ������ ��������, �� ��
����, �� ����� ���������� ������ ������ �����������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ����� ���������� ��������.</p>

<p class=MsoNormal>5. <b>������ ������� (����������) ������������ ��������</b> </p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
���������� �� ���������� �������� � ���������� ����� ���������� �������� �
������������� ���� �������������� ������ �� ��������, ������� ������������ ���
���������� ����������� (���������� ������) ��� ���������� ����������� �
���������� ����������� (���������� ������).</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ��� ������������ �������� ������� ������������ ���������
��������� �������, ����� ��� �����, � ����� �������� ������� ��������
����������� � �������� ��������� ������ �����, ����� ����.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ������ ���������� ��������, ����������� �
�������, � ����� ���� ���������� ������������ � ������ �������� � ��� ��������
���������� � ��������� �����������.</p>

<p class=MsoNormal>6. <b>������ ���������� ������</b></p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
����� ������� �� ������, ����� ������ <span lang=EN-US>Beast</span>, ������
�������� �������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ����������� � ����������� ������� � ���� ������ -&gt; �����
-&gt; ������, � ����� ����������� ������� � ���� ����� � ������ -&gt; +1 (������������
������ ����������� �� 1).</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ������ ������ � ����� ������ �������������
������, �������� ����� �������� � ������������������ ����������� ������.</p>

<p class=MsoNormal>7. <b>������ ���������� �������� ���������������</b></p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
������ ���������� �������� ������������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ��� ������� ����������� ������ � ������� ������������� ������
������������� ���������� ������� �������, ��� ��������� �������� ��������
�������� ���������� ������� � ������������ ����������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ������ ����������, ��������������� �
�������� �������� � ��� ��������� ������������.</p>

<p class=MsoNormal>8. <b>����������� ������� ����� �� �������� ��� ��������
�������� �������� ��������</b></p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
������� ���� ����� � ������������� ������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ���������� �������� ������� ����������� �������� �����
����������� � �� �������� ����������� ������. ������� ��������� ���������� ����
��������� ��������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ���������� ������� ������� � �� �������
�������: ���������� ������� ������������������ ���������� �������.</p>

<p class=MsoNormal>9. <b>����������� ������������ ��������</b>.</p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
����������� ��������� ��������� �������������� ������� ��� ��������� ����������
� �������� �������� ������� � ������� ������ ����������� ���� ������ ����� (�
������� �� ������� ����������� ��������� � ��� ������ ����������� ��������
������� ����).</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ����������� �������� ��� ���������� ����������� ���������
������������ �� ��� ���� �������������� ������� � ������� ��������� ������ ���
�������� ������� ����� � � ����� �������� �������� ���������������� ������ �
������� �������� ����������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ������������ ������ ���������� ����������� �
�� �������� ������������ ��������.</p>

<p class=MsoNormal>10. <b>����������� ����� �������������� ������������</b>.</p>

<p class=MsoNormal><span style='color:gray'>���� ��������� ���������</span>:
�������� �������������� ������� �������� ��������� ������������ ����� �������
���������� ������������ �� ���������� �������� ��� ��������� ����� �������
������� ������.</p>

<p class=MsoNormal><span style='color:gray'>������� �������� ����������
����������</span>: ������ ����� ������������ ����� �������������� ������� ���
����������� ������ ������������ ������. ������� �������� ������������ ��
������� ������� � ������ � ����� ���� ����� ��������� �������������� (��� 5-�
������ ��������) ����� ����������� ���������� �������. �������� �������� � ����
������� ���������� �������� �������� ������.</p>

<p class=MsoNormal><span style='color:gray'>����������� ���� ���������</span>:
� ���������� ��������� ����������� ��������� ����������� � ������ ��������
������ �������������� �������� �������� ��������� � ������������.</p>

<p class=MsoNormal>12. <b>��������� ���������� ��������</b>.</p>

<p class=MsoNormal>���� ��� �� ������������� ���������� 5-� ������ ��������, ��
��� ������� ��������������� ���������.</p>

<p class=MsoNormal>� 5-�� ������ ������������� ������� ������������ ��������� �����
�������������� ���������, ������� ��������� ������������ ��� ������ ��� ���
����� ������������ ���������� �������� ��������. ���������� ����� � ������,
���������� ��������� �������� � ���������� �������� �������� ����������
�������. <span lang=EN-US>Beast</span><span lang=EN-US> </span>�������
����������� ��������������� � ����� �����������, ��� ��������� 1) ��������
�������� �� �������� �������� � 2) �������� ������� �� ��������� ����������.</p>

<h2><a name="_Toc121642954">����������� ����������� ����������</a></h2>

<p class=MsoNormal>���� ������� ���������� ������ ��������� �������������
����������� ����� <span lang=EN-US>golang</span><span lang=EN-US> </span>� �
����� ������ ��� ��� ������� ������������ ���������������, ������� ���� ������
������������� ������ � ������ �����, ��, ��� ��, �������� �� ��������
����������� ��������� �������, ������ ������� � ����� (����� ���������� ������ <span
lang=EN-US>psychic</span>, ��� ����� �������� � ���� �����). </p>

<p class=MsoNormal>�������� ��������� ��� �������� ������� ���������� ����
�������� �����������. ������� ���������� �������� ������� � �������� �� ��
������ ��������� �������������, ��� ���������� ��������� ������� ��� �����
������������� ������� (���� �� �������). ��� �� �������� ������� ������ �
���������.</p>

<p class=MsoNormal>������ ��� ����������� ��������� ������� ������ ������ �
�������� ��� ������ ������� ���, ��� ���� ������� ��������� ��� ����������
������ � ������ � ���. ������������ ������������ ��������� ������ ���������
������� ����� ������ ��� ������������� ���������� ������� ��������.</p>

<p class=MsoNormal>����� <span lang=EN-US>Beast</span><span lang=EN-US> </span>����������
���������� ������� � ������� ������� �������� ������� �� ������� � � ���� �����
����������� �����. �� ������ ����� ��� ������ ������������� �� ����������������
� ���������. ��� ��� � ������ ������ ����� ����� ����� ��������.</p>

<h3><a name="_Toc121642955">�������� �����:</a></h3>

<p class=MsoNormal><a href="/adaptologiya/beast/beast_scheme/index.htm"><b>��������
�����</b></a> �������������� �� �������� ����� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>� ���� ������.� </p>


<h3><a name="_Toc121642956">����� �����:</a></h3>


<p class=MsoNormal><a href="report_img/graf_beast.png">����������� ����-����� Beast</a></p>

<p class=MsoNormal>&nbsp;</p>

<h3><a name="_Toc121642957">������� ���������</a></h3>

<p class=MsoNormal>�������� ������� ��������, �������� ������� ��������
��������� ��������� ����� �������, ������������� ������������� ��������������
���������� ���������. �������� ���������� �� �������� � ������������
����������� �������� ����������� � ������ ������ ����������� ��������
�������������. �� ������� �������������� ��������� �� ����������� �� ��������
������������� ���������� ������� � �����������. ������� ��������� ����������
������������ ������������� ������������� ���, ����� ����� ����������� ��������
�� ������� � ������ �������� ����� �����. ���, �����������, ����� ���������
����� ����� �������� ��������� � ������� ����� �������������� �������������� ��
���� ������� ������� �������������� ������������.</p>

<p class=MsoNormal>� ������� ������� ������������� �������� ������� ��������
������.</p>

<p class=MsoNormal>��� ������ ������� �� ������ ������ ����� ������, ��� �����
������� ������������� � ��������� (� ����� ����������) ����� � ��� �����
������� ����� � ����������� (���������������� �������� ���������). ������
������������� ������������� ������� ����������� � ������������� ����� �������
(����� ������� fornit.ru/43642).</p>

<p class=MsoNormal>�.�. �������� ������������ <b>�����������</b> ���������, ��
��������� ����������� ����������� � �������������� �������������� ��������
���������, ������� �� ��������� ��������� ��������� � ��������� ��������������
��������� ������ ��������. � ������� ������ �������� ����� ����������������.</p>

<h3><a name="_Toc121642958">������ �� ���������, � ������������ ����� �����
��������</a></h3>

<p class=MsoNormal>������� ������ �������� ��������� �� ��������� �����������
��������� ����� �������. �� �������� ��������� � ���� ������ ������, ���������
�� ������� ������� �� ����� �������. ����� ����� ��������� �����
���������������, � �� �������: ���� ����� ��� ���� �������.</p>

<p class=MsoNormal>���� �������� ����� �������, ������� � �������� ��� ����� ������������
���������������� ������ (fornit.ru/64924). ��� � ������� ������� ���������� � ����������
�����������, ����� ������� �� ����� �������� ����������� � ������ � � ��������.
���� ����� ����� ����������� ����� �������������, �� �������� ����������
�������. ����� �� �������� ���� ����� ���������� � �������� ����� ����������
��������� ���������� ���������� � ���� ��� � �������� ��� ���� ������ ������,
��� ����� ����������� ����� ����.</p>

<p class=MsoNormal>��� ���������� ����������, �������� �� ��������� �
����������������� (���, ����������� � �������, ����������� � �������� �
�����������) ������������ �����������: ��� ���������� ��������� �� ���������,
�� ������������ � ������� 20 ������, � ����� ������������. ��� ���������
��������� ����������� �� ������� ������� ������������� ���������� ������������.</p>

<h2><a name="_Toc121642959">��������� ��������������</a></h2>

<p class=MsoNormal>������� ���������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>������ ���������� (����� � �����) � ������������
(����������, ���, ������������� �����������). ���� � �������������� ��������
����� ���������� <span lang=EN-US>Beast</span>, �.�. ������, �������,
����������� ���� � ����� � ���� ����������� ���.</p>

<p class=MsoNormal>���������� ������� Beast ��� ��������� �����, ���������� �
������ ����������. ��� ����� ������������� ����������� ���������, ��� ������
������ ����������� � ���� ����� ������. ��� ��������� ����������� ��������
����� � ������������� ������������ ������� �� ����������� ����������. ��������,
�����: ������� � �������� � ������������ ����� ����� �������� �������, ��
�������� ���� 2 �����������. �������� ����� ����� ���������� ���������� ������,
� ������ ����������� ���������� ������ ������, ��������������� � ���� ����
�������� � ����. ��������.</p>

<p class=MsoNormal><a href="report_img/image001.png" target="show_pic"><img border=0 width=750 height=auto
src="report_img/image001.png" alt="���������� ������� Beast"></a></p>

<p class=MsoNormal>�������� ������� � ������� �������� �������� ��������������
���� � ���� � � �������-��������, ������������� � ������� ������ �������������
���� � ������ ������������� ����.</p>

<p class=MsoNormal>������ ���� ���������� ����� �� ��������� ��������, �������
����������� ���� � ������� ��������� �����. ������� ����� ������ ���� ��
������������ �� ����� �����-��������. </p>

<p class=MsoNormal>������ ���� ��� �� ����� ���������������� ����� ������, ���
�� ����� ����� ���� ������� ������ ����. �� ��� ��������� ������� �����������
����, ��������� ����� ������������� � ������������ ����� ��������� �����. ���
���� � ������ ����� ������ ���� �� ���������� ����, �� ��������� �����
������������ ����� ����.</p>

<p class=MsoNormal>����� ����������� ��� �������� ������ �����, ����� ���
����������� ����� 3-� ���. ��� ������� ����� ������� ��������, ��������� ���������
�������� � ��������� ����������� ������������ ������� ������������� ������� ��
���������� ������������� �������.</p>

<p class=MsoNormal>�� ���������� ��������-���� ����������� ������ ��� ������� �
�����, ������������ ������ �� ����� 6 ����. ����� ������� Beast ��������
����������� ��� �� ������������ ������ ����������� ��� �� ��������� �����, ���
� �� �����.</p>

<p class=MsoNormal><a href="report_img/image002.png" target="show_pic"><img border=0 width=750 height=auto id="������� 2"
src="report_img/image002.png" alt="������ ���� � ������ ����"></a></p>

<p class=MsoNormal>������������� ����������� ������� ������� �������������
������� ��� 4-�������� ����������, ����� ������� ����� ��������� ���������
����� ���������� ����. �� ������ ��� ����� ���� ����� ������ �������������
���������.</p>

<p class=MsoNormal>�������-�������� ��������� ������������ �����, ���������� ��
�����, ��� �� ��� ��� ���������� � � ��������� ���� �������: �����, �����
������� ���� ������ ������ � ��������� ������, � ������������� ����� ����
����������. ������� ������� �������� ���������� � ��� ������������� ����, ���
��� �������� �������� ������� ����� �� ����� ��������� �������.</p>

<p class=MsoNormal>�� ������ ���� �������� ������� ������� ���� � ������
����������� �������������: ��������� ������ ���� � ������ ����.</p>

<p class=MsoNormal>����� ����, � ������ ����� �������� ������������� �������� �
������� ������ ��� ������ ����� �������. ��� ������ ����� ���������� ���
���������� �������������� �����������, �������� ������ ���������� � ����������.
</p>

<p class=MsoNormal>����� �������� ����� ����� ������� ������� ���������
������������� �������� (�� ����� ����), � ����� �������� ��� � ����������
���������. � ����� ����� ��������� ���������� ������, ��������� �� ���������
�����������. ����� ������ ����� ���� ���������� ������������� � ��������� � �������������
������� �������� � ������� ����� ���� ��������: ���������, ������������ �
������ ������ ��������� ��������.</p>

<h2><a name="_Toc121642960">���������</a></h2>

<p class=MsoNormal>� ��������� ������ ���������� ����� ���� �������������� ��������������
�������������� ��������. ������, ������ ����� ����� �������� �������� ���
��������� ������ ������������� �������� ��� ����, ����� ����� �����������
����������� �� � ���������. � ��������� ��� �������� �� ����� ��������� (��
����� �������� �� ��������), ��� ����� ������-����� ���. </p>

<p class=MsoNormal><span style='color:black'>����������� ��� ��������� � ����
���� � ���� �������� - � ������� ����������� ��������� ����������� ���������
(�����������). ��� ��� ��� ������ ��������� �������� ��������������� ���
����������� ��� ��������� ������� �������� � �������.</span></p>

<p class=MsoNormal>����� ������������� ���������������� �������� (�������������
�� ������ ��������) ����������� ������ �������� ��� ���������� �������
������������.</p>

<h3><a name="_Toc121642961">��� ������� ��������� ��������� ������ �������:</a></h3>

<p class=MsoNormal><b>������� �����</b> <span lang=EN-US>VerbalFromIdArr</span>=<span
lang=EN-US>make</span>(<span lang=EN-US>map</span>[<span lang=EN-US>int</span>]*<span
lang=EN-US>Verbal</span>) �������� �� ����� ������������ ���� � ��������������,
�� ��������������� ����������� ��������������, �� �������� ������������� ���� �
��������������.</p>

<p class=MsoNormal>�� ��� ��� ������������ ��������� - ����� ����������� ���� �
���������.</p>

<p class=MsoNormal><b>������� �������� ��������</b> <span lang=EN-US>ActivityFromIdArr</span>=<span
lang=EN-US>make</span>(<span lang=EN-US>map</span>[<span lang=EN-US>int</span>]*<span
lang=EN-US>Activity</span>) �������� �� ����� ������������ �������� � ������,
�� ��������������� ����������� ������������������� ��������, �� ��������
������������� ��������.</p>

<p class=MsoNormal>�� ��� ��� ������������ ��������� - ����� �����������
�������� � �� ���������.</p>

<h3><a name="_Toc121642962">���������� ����������� ��������</a></h3>

<p class=MsoNormal>����� �������� �������� ���� <b>���������� ��������</b>: ����������
���������� ������� ������������. ��� ��� ��� �� ������������� ��������� ���
���������� �������� ����� ������� ����������� ��������.</p>

<h2><a name="_Toc121642963">������� ������������� ���������������� �������</a></h2>

<p class=MsoNormal>�������������� ������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>�� ��������, ������������ ��������� ���������� �� � ���
������� ������� �������������� ������������ �� ������ ��������� ����������. �
��� ���������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>��������� ���������</b> � ���������� ���������
���������������� ���� ���������, ������ �������� ��� ������������ ������� �
���������� �������������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>������� ���������</b> � ��� ��������� ������ ������������,
������������ ������� ���������: �����, �����, ������. ������� ��������� ������
���������, ��� ������ ������� �����������, � ������������, �� ������ ���������
��������� ���� ������� ������������. ��������� ��������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>������ ��������� � ����� �� ������������ ������� ���������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>����� ������ �� ����� </b>� �������� ���������� ���������, �����������
�������� �������� ������� ���������. ���� ��������� ����� ��� ������ �������
�����������, ���� ����� �����, ������������ ������������ ������� ��������� ��
������ ��������� ������� ������� ������������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>������� ��������� </b>� ����� ������������, �������������� ���
���������� �������� ������� ������������ � ������������� �������� ���������.
���������� ������� �������� ���������� �������� ���������������� �����
����������, ����������� ����������� ��������. ����� ����, ���������� ���������
����� ����� �������� �����������, �������� ���� �������� � ����������, �������
�� ����� ���� ������������ �������.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>������� �������� </b>� �������� �������� � ������, ����������
����������, � �������������� �� ������� �����������, ������� �� ��������.</p>

<p class=MsoNormal>��������, ����� ������� �������� ������ ������ ��������
������� ����������, ��� �������� ��������� ������� ����������, �������������
��������� �������� ��������� � ��������� ����������� ���������. �������� �
�������� �������� ������� ��������� ����������� ������� ��������. � ����������
���������� ������� �������������� ���������: �������� ��������� ��������
������� ��������� <span lang=EN-US>Beast</span>, �������� �������� ���������,
���������������� ���������� ���������, ������������� ��� ���������.</p>

<p class=MsoNormal>� ���������� ���� ������� ������������� ��������� � ��������
������� � ����� �� ������������ �������, ��� ��� ��� ��������� �� ������� ����������
����������, � ��, ��� �������� ��������� ���������� ��������� �� ������� �����������-����������.</p>

<p class=MsoNormal>�� ����� ����� ������� ������������� �������������� ��������
���������� ������ ����� ��������, ��� ������� ������� �����-�� �������������.
��� ��������� ��������� �� ������ ������������ ��������� ����������, � ������������
���������� �� ���������� ���������� ������� ������������. �������� ��������� �
���������, �������������� ������������ ��������� ��������, ���������,
����������� ���������� �������� ������� �� ���, ��������� ����������,
����������� �������� �����������, ������� ����� ��� �������� �������� �
���������� ��� ���������� ���������� ������ ���� ��� �������������� ���������.</p>

<p class=MsoNormal>�������� ������������ ������������� ����������������
�������� ������ ����� ������������ ��������� ������������ ��������������
��������� � ������������ ����� ������������ (��� ��� ������� ��������� ���
������������ ����������� ��������).</p>

<p class=MsoNormal>� ������� ����� ��������� ����������� � ���� ��� �������
�������, � ����� �������, ����������� ������������������ ����������� �������,
��� �������� ������� ���������� �������������� (fornit.ru/12787). �������������
�������� ����� ������� � ������ ����� ������������ ������� (�������� � ���
����������� ���, ��� � ���� �������� ������ ������� ����� ��������� � ���������
����� ���������� ����� ������ �������������� �����. �� ������ �� ������� �
������������ � ��������� ������� ��������� ��� ����� ������������, ��������
������ ������ ������ ������������� ������������. </p>

<p class=MsoNormal>���� �� ����, ��� ���������� ������� ��������� ������������ <span
lang=EN-US>Beast</span>, � ������ ����� �������� ��������� �������
���������������� �������� ���������� ����������.</p>

<p class=MsoNormal><a name="_Hlk121377332">���������� ����������� ��������� ������
�������� ������� ������������� � ����� � � ������ �� ����� �� ���, � ��������
5-6 ��� �������� ������������� ����� �ߔ (<span style='color:black'>fornit.ru/64933</span>),
� ��� � ������ � ����������� �� ���� ������ ������� ������� ���������. ���
��������, ��� ���������� �� ������� ����� ���������������� ������� ����������
������������ ���� �������.</a></p>

<h3><a name="_Toc121642964">����������� (��������������) ��������</a></h3>

<p class=MsoNormal>������������� ���������������� �������� ������� ��������
������������ ����������, � �� ������� � �����������. � ���� ��� ������� <span
lang=EN-US>GeneticReflex</span>. ������������� �������������� �� ������ ������
������������ �������� �������, �� � ����� ���������� ��������� ����� ������ ���
����� �������������� ������� ������� � ��� ��� ��������, � ����������� ������ �
��������. ������� ����������� ������ ������������, � ��������������
������������������ ������� ��������� ������ ��� �������������� ������������
�������� � �� ���������. </p>

<p class=MsoNormal>����� ����� ������������� ������������ ����������� �������
���� ������-�����.</p>

<p class=MsoNormal>����� ������� ��������������� ������� ���������, �����������
��� ������������ �������� (������������ �������� ��������� ��������). ��
�������� ����� ���� �� ������ ���������, �� � ����������� ��������� ����������
����� ���������, ��� ��������� ����������� ��������������� ��������. ���� ����,
������� ������� ����������� ����� �������������, ���� ������ �� ������ �������,
�� ������ ����� ����������� ����������, �� ����� ������ �������� ����������
��������. ������� �������������, ������ ������������� �����������������
�������� ����� �������������� ��������� �����. </p>

<p class=MsoNormal>�� ����� ���������� � ������������ � ������������
��������������, ��������� ����������� ������������ ��������� ��������� ������
��������� ���������.</p>

<p class=MsoNormal>������������� ����������� �������� � ����������� �� �������
���������� ������� ���������, �������� ����� �������� ����� ����������
������������� ������ �������� � ������ ��������. �� ������ ������ ���������
����� ������ �� �������� ��������� ����������� ���������.</p>

<p class=MsoNormal>��� ���������� ���������� ����������� ���������
��������������� ��������� �������.</p>

<p class=MsoNormal>1. ����� ����� � ����, ��� <b>���������������� �����������
�������� � ������� �� ��������� ����� � ���� ����������� ���������� ���� ��
��������� ��������, ���������� �������� ����� ������������.</b></p>

<p class=MsoNormal>2. ��� ������ ������� ��������� �������� ������������
������� �������� ���� ���������, ����������� � �������. ���� ���� �����������
����� �������, �� �� ������������ ��� � ���� ��������.</p>

<p class=MsoNormal>3. ������ ����������� ������������ ������� � ������, ������
������ �� ������������ ��������� ��������, � � ������ ������ � ������������.
���� ����� ������������: ��� ������ ����� ��������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>��������� ������������ ������������ � ����� ������, � ���
��������� �� �����-������ <span lang=EN-US>IDE</span><span lang=EN-US> </span>�
����� �� ���������� (�� ������������ <span lang=EN-US>main</span>.
cleanupFunc()).</p>

<p class=MsoNormal>�������� ��� ���, ���� ������ �������, ������� �����������
������ ��������� �� ��������� ��������� �� ����� ��������� �����������
���������, � ������ ��������� (� ������ ���������) ����������� �� ���� �������
������������� ���������.</p>

<p class=MsoNormal>����������� �������� ���������� � ����� ��������
������������ ��������� ���������������� ��������� ����������. �� �������� <span
lang=EN-US>Beast</span>, ��������� �� �������� ������ ��������� <span
lang=EN-US>Beast</span>�, �� ������ �� �������� ������������ ����� �� ���������
�������� �������, � ����� �� ������������, ��, ��� ���������� �����������.</p>

<h3><a name="_Toc121642965">������� ����������� ��������</a></h3>

<p class=MsoNormal>��� ������� ��������� �������, ����������� ��� ������������
������ � �����������. �� ������ ������������ ������ ����� ���������,
������������� ���������� ���������, �� �� ������� ����������� �������������
����������, ����� ���������� � ����������� ��� ��������� ����������, �������
��������� �������������. </p>

<p class=MsoNormal>� ��������� ������ ��������� <span lang=EN-US>Beast</span>�
�������� ����� ���� ������� ��������� �����: ������ ID �����-����������
�������� ��������. ������� � ����, ��� �� ��� ���� �������� ����� ������ ��
��������� ��������� � ������ ������� � ���� �������� ��� ���������. �������
���������� ��������� ��� ������� ��������� ��������� ���������� ����������
���������� �� ��������. ��� � ������� ��������, ����������� ������������
����������. ��� �������� ����� ������������� �������� � ���������� ����� <span
lang=EN-US>Beast</span> � ��� ������ �� ������� ������������ �����
������������.</p>

<p class=MsoNormal>����������� �������� � B<span lang=EN-US>e</span>ast � ��� ������
������������������� ������� �� �������� ������ � ������. ����� �������
������������ �������� � ��������� 0 ������ �� �������� <span lang=EN-US>Beast</span>
�� �������� ���������� ����� ���������� ������������ � ��������. �� �������� �
��������� ������� �������� ��� - ������������ ������������ ������� ��
���������� � �� ��������� �������.</p>

<p class=MsoNormal>������������ ������������ ���������� ������ ��� �������������
�������� �������, ����������� �������� ����� ���������� TriggerStimulsArr ��
���� ����� ���������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>��������� �������� ���������</b> � ���� ���������� ������� ���������
�����, �����, ������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>��������� ������� ����������</b> � ���� ���������� ��������� �������
�������� ������� ����������</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>��������� �������� �������� </b>� ���� ���� ������������ ���������
������ �������� � ������</p>

<p class=MsoNormal>���������� ���� ������� ������ ���������� ����������� ������
� �������, ��������� ����, ������� ��� ����� ����������� ��������� ������
����������. ��� ��������, ��� �������� ���������� �������� ��������� � �������
����������, ��� ����� �������� ��������, �� �� �������� ���������� ��������
��������� � �������� �������� ��� ����� ������� ����������. ����� ����������
������ ����������� � �������: ������� ��������� � ������� ��������� � ��������
�������.</p>

<p class=MsoNormal>��� � ���� ������� ������ �������� ��������� ���� �����
����������� ���������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>���������� ����������� �������</b> � ������������ �� ���������
��������� �������� ��������� � ������� ����������, ��� ���������� ���������
��������������� �������. ������������ �� ������ ��������� �� ������ ����������,
� ������� ������ ID �����-���������� �������� ��������. ������ �������� ���
����������, ����� ��� ����������� ������ ���������� ��������. � ���� ������ <span
lang=EN-US>Beast</span><span lang=EN-US> </span>�� ������� �������� (�����
������� ����������� ����� �� �����) �� ������ ����������� ������� � ����������
������ ��������.</p>

<p class=MsoListParagraphCxSpMiddle>��������� ��������� ������� ���������� �
����� �� ��������� ������� ������� ���������� ��� - ���� ����������� �������,
�������� ��� �� �� ���� ����� ����������� �� �������� ����������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>������� ����������� ������� </b>� ������������ �� ��������� ���������
�������� ��������� � ������� ����������, �� ������ ��������� ���������, ��� ��
�������� ������� �������� ��������.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span><b>������������ ����������� ������� </b>� ������������ ������ ��������
������� ����������, ����� ���� ��������� �������� ���������, ������� ����������
� �������� ��������.</p>

<p class=MsoNormal>����������� ���������� �� �������: ���� ������� ��� ���
������ ������ ����������, ������ ������������ ����������� �������, ���� ������
������ ��� � ������� �����������, ���� ����� �� ������� � ����������
�����������. ����� ������� �� ��������� ��������� ������� ���������� � ��������
��������� ������ ����� ��� ������� ������� �� ����������� ������������
��������.</p>

<p class=MsoNormal><a href="report_img/image003.png" target="show_pic"><img border=0 width=750 height=auto
src="report_img/image003.png" alt="������ ���������"></a></p>

<p class=MsoNormal>���������� ������������ �������� �������� ����������
��������, ��������� ����������� ������� �������� � ��������� ����������.
����������, � ���� � ������� ���������������� ���� �������� � ��������������
����� ��������� �������� �� ����� ������� ������������, ������� �����
�������������� �� �������� � �����. ��� ���� �������� �������������� ������
������������: ������ �� ������ ��������� �������� ������������ ������������
������������������ ������� �����������, � ��� ������� ����������� �������
����������� ���������� �������� � �������� ���. ������� ������ �����
����������� ��� ������������� ��������� ������ ����������. ������������, ���
����� ������� �� ���� ������ � ����� �������� �������� ��������� ��������
�������������� ����� ���������� � ������ �������� �� ������. �� �����������
�����������, ������ �� �������� ����� ��������� ������������ ���������� ������
�� ������ ������������.</p>

<h2><a name="_Toc121642966">�������� ��������</a></h2>

<p class=MsoNormal>��� ������������ ��������� ���������� �������� ��������� <a
href="/adaptologiya/beast/about_conditions_reflex.php">���� ��������</a>
��������� � ���������� ����������� � �������� ���������������� ����� ����
��������� ���, ��� ��������� ��, ��� �� ����� ���� ����������� �� ������ ������
�������� � ���� ���������� ����������� ����������. � ���������� ����������
���������.</p>

<p class=MsoNormal><a name="_Toc121642967"><span class=3><span
style='font-size:14.0pt;line-height:107%;font-family:"Arial",sans-serif'>���
����������� �������� ��������� ����������</span></span></a></p>

<p class=MsoNormal><span style='color:black'>1. ���������� �� �������
(���������) ������-���� ��������������� ������������ (���������) �
�������������, ���������� ��������������� ����������� ������� (�����������
������������).<br>
2. ����������, ����� �������� ��������� ������������ ��������� ��������������
�������� ������������.<br>
3. �������� ������������ ������ ���� �� ���������� ������������ ���������������
�������.<br>
4. ������� ��������� ������ ����� ���������� ���������� ��������� 2
(news_detectior.go: if tempImg.Count &gt; 2 - � func updateNewsConditions(rank
int)), ��� ��������� �� ��������� ������.<br>
�������� ������� ����� �������������� �� ������ ������������ ��� �� ������
���������� ������������, ��������� �������� ��������� �������� ��� �����
�������. ����� ���� ��������� ����� �� ����������.</span></p>

<p class=MsoNormal><a name="_Toc121642968"><span class=3><span
style='font-size:14.0pt;line-height:107%;font-family:"Arial",sans-serif'>�������
��������� ��������� ��������</span></span></a></p>

<p class=MsoNormal><span style='color:black'>1. ������ ���������� ���������
������� (���� �����, � �������� �� �����������) � ��� ����� �����������
����������� � ��������� ���. �������� lastActivation int � � ����� ������� �
������� ���������� �������� ���������;<br>
2. �������� ������������ ������������� � �.�. ���������� �������������
���������� � ������������� � �.�. ���� ���� ����� �������� ������� ��� �����
���������� �� ��� �� �������� ������, �� �� ��������� �������� �������. �
��������� ���������. �������� ���� ��� ���� (����� ������� ���������), ��� ��
����, ��� ������� ������������ ����� ������. ���������� ������������ ������
��������.<br>
3. ��� ���������� �������������� ����� ������������ ��������. �� �����������
�������� �� ������� ��� ����, ��� ���������� � �� ��������� � ����, ���
���������� ����� �������� � �� ������������� � ����������� ��������������
���������: ����������� �������� ���������, ���� �� �������� � �� ������� ��
���������� ���� �����. � �������� ��������� ����� �� �� �������������� ������,
������ � ������ ���������, ������, �� ��� �� �� ����� �����������
�������������. � ���������� ����� �������� ���������� ������������ �
�������������, � ����� �������� �������� � �����������, ������������ ���
���������.<br>
4. ������ �������� �������� ��� ������������ ������� � ������������ ���������.
����� �������� � ��������� �������� �������� ������� �������, ��� �����
�������, ������� �������-������������ ����� (func conditionRexlexFound).</span></p>

<h3><a name="_Toc121642969">�������� ������������ ��������� ��������</a></h3>

<p class=MsoNormal><span style='color:black'>1. �������� ������� ��������� ���,
��� ��� ������������ �� ������ ������ ������� N, ���������� � ���� ��������
���� �������� (��������� ��� ������������), ������� �������� ������� �����
������� ������ ������� M.<br>
2. �� ������ ���� � ���������� ���������� ������ N, �� ���������� �� ��������
������� ����������� ��� �������� ����� ������� ������, � ��� ����� ��������
�������� ������.<br>
��� ��� � ��������� ������������ �������� ������������ ��������: rank int,
������� �������������, ���� ������� ����������� �� ��������� �������� � �����
������� � ������ ����, ����������� ��� ��� ������ ����. �� ��������� �
����������� ��������� rank ����� 0.</span></p>

<p class=MsoNormal>��� ���������� ���� �������� ��������� ����������� �
������������ ������������� �������� ���������, ������������, ��� ���
����������� ��������� �������� ����� ������������ ������������.</p>

<p class=MsoNormal>����: <i>������ ��������� ������ � ��� �� ������, ���� ��
����� ��� ��������� ��� ����� ������.</i></p>

<p class=MsoNormal>��� ��������� ������ ��, ��� ��� �� ����� ���, ���������
�������� ������, �.�. � ��� �� �������� �������, � ����� ���������������
���������� ����������, ������� ������������� ������ � ���������.<span
style='color:#333333;background:white'> ������&nbsp;��������&nbsp;��������&nbsp;���&nbsp;������������&nbsp;�������&nbsp;�
������������ ���������. ����� &quot;�������&quot; � ���������&nbsp;��������&nbsp;��������&nbsp;�������&nbsp;�������,
��� ����� &quot;������&quot;, �������&nbsp;�������-������������ �����.</span></p>

<p class=MsoNormal>����, ������: ���� ��� ������������� � ����� � ����� ������
���� �����, � ��������� ����������� ����������� ������� ������������. ���
���������� ��������� ��� ��� ����� ����� � ����� �������� ��������
������������. ��� � ���������� �� ������������ �������������: ������� ���������
� ���������� ������������ (� ������ ������ ��������������). ���, ������������
��� ������������ ������� ������� ������������, � �� �������� �������� ���������
��������.</p>

<p class=MsoNormal>��������� ������ ������ ��������� � ����� �� ������� �����
�����: ��� ����� ������ ��������� �������� �������������, ������� ������������
������������� ������������� � �������� ������������. ���� ���������� �������
����� ����� �� ����� ������� ������� �������, �� ����� �������������� ������� ���������
������ � ������ ������ �� ������ ��������, ��� � ��� ��� � ����, ����� �������.
� ��������� ����������� - ��������� ������ �� ���������� �� �� ������
������������ ��������� (������������� �����������), �� �� ������ ������������
���������� ������������.</p>

<p class=MsoNormal>����� ��������� ������ �������������, ������ ���������
������� �� ����� ���� �������� � ����������� ������� ������������ �����
���������� <a href="../../adaptologiya/beast/about_conditions_reflex.php">�����</a><span
class=MsoHyperlink>.</span></p>

<h3><a name="_Toc121642970">������������� ��������� ��������</a></h3>

<p class=MsoNormal>�������� �������� ������������ ��� ��������� ������
��������� � ������� ������� ������������� ��������� ��������:</p>

<p class=MsoNormal>1. � ������� findConditionsReflesFromPrase( �� ����
�.��������� � ������ ID ������ ��������� ������� (imgId3) ���������� ���, ���
�������� � ������ �������� 1 � 2 ������.</p>

<p class=MsoNormal>2. ���� �� ������ ���� ����� �����, ��� ������� ��� imgId3,
�� ����� ��������� �� ������������ �������� � ����� ��������� ����� ����������
imgId3</p>

<p class=MsoNormal>3. ���� ��� ��� ��� ����������� imgId3 �� �����
�������������: ������������ ��� ��������� ���� �� ������������� �����, ���
�������������, �� ����� ��� �� 2 �����</p>

<p class=MsoNormal>4. ���� ��� ��� ��� ����������� imgId3 �� ��������� ���
����� �����, �� ����� 5 ��������.</p>

<p class=MsoNormal>��� ��������� ����� �������� ������� ����� ������� �����,
��������, �� ����� &quot;� ����� ����&quot; ����� ������ ������� �� �����
&quot;�����&quot;.</p>

<h3><a name="_Toc121642971">����� �������� ����������</a></h3>

<p class=MsoNormal>� 1 ������ (����� ��������) � ������� �������� ���������
���������� ��������� � ������� ����� ����� �����, ���� � ������������
������������ ������� �����������.</p>

<p class=MsoNormal>�������� �������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>�����������, ���� � ������� ������ ������ ��������� (��
������� ���������� ��� �������� � ����� ���) ���� �� ����� 3 �������� ���������
��������� ��������: ����� ������� �������� �������, �������������� �����������
������� ��� �������������� �����, ������� ������ �� �����������, ��� ��� ��
���� �� ���� ��������.</p>

<p class=MsoNormal>����� ��������� ����������� ��������� (���������� �����
������ ���������) �������� � ���� ������� ���������, ��������� �������
���������� � ��������� ������� �������� � ������ (������� ������ ��������). ���
��������� �������� ����� ����� ����������� ������, ����� � �����������
��������� � ������. ���� �����, ������ ������, ����� ��� ���� ����� ���������,
������ ��� ����������� �����, ��� � ���������� �� �����������. �������
����������� �������� �� ��������� �� ���������� ������������, � ������ ��
��������� ���������� �/��� ��������.</p>

<p class=MsoNormal>�������� �������� ��� - ���������� ������ �����������
��������-������������ �����, ����� ���������� ������������� ���� ���������������
����������� �������������, �� ��� ����������� ����� �������� ����� � ��
�������� ������������ ����������� �������. ��� ��������� �������� ������� <span
lang=EN-US>Beast</span><span lang=EN-US> </span>�� ���������� ������������,
���� ����� �������� � ������ �����, �� ������� �� ����� ������� �����
���������� �������� �� ����� ������������, ��������� ����� ��������� ��������
(������ ������ ��������), �� ������� ���� ����������-������������ �������. ����
����� ��������� ���������� �� ����� ���� ���, ������������ �������� ������� �
������ <span lang=EN-US>Beast</span><span lang=EN-US> </span>����� �����������
�� ����� ��� �� �������� ������, ���� ��� ����� � �� ����������. ������ ���, ���
� � ����������� ���������, ����� ��� �� ���� ������ ������������� �� �� ������
����� ����������.</p>

<p class=MsoNormal><a href="report_img/image004.png" target="show_pic"><img border=0 width=750 height=auto id="������� 1"
src="report_img/image004.png" alt="�������� ��������"></a></p>

<p class=MsoNormal>������ ������������ ��������� ��������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� (���������� ����� � ������): ������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>Beast</span>: ��� �������</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>�������� (���������� �������� � ������): ���� ������
��������������</p>

<p class=MsoNormal>���� ����������� 3 ����, � ���������� ��������� ��������
�������: �� ����� ��������� ������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>��������� ��������� �� ��������� ������������ ��������������
- [���������, �������]. ����� ������� �������� ��������� �������� �� ���� ���,
���� ������������ �� ������ ������ ������ ������������� ���������.</p>

<p class=MsoNormal>������ �������� ������� ����� ������ �����, ��� ��������
��� ������ 30 ����, ����� ��� ������ ��������� ��� �����������. ���� ��
��������� � ������� 30 ���� �� ���������, ����� ����� ����������� �� �� ��
�������� � � �������� �����, ���� ����� ����� ����������, ������� �����������.
����� �������, ��� ���� �� ������������, ��� ������ �� ����� � �����������.
������� ������ �������������, ������������� ��� �������������, ����� �������
��������� � ���� ���. ��� ���� ������� � �������� ��������������� � ������� �
��������� �������� ��������� ������, ��� ��� ����������� �������, ���������������
����������������, ��������� � �������� � ������������, � ������� ���� ������
���������� � �������������� ��������� ��������� ���� �����������. ������� �� ��
����������� ��� ���������� �������� ���������� �������, ��� �� �������������
������� �����������. ������� �������� ������� � ������ ��������� ��
������������ ������ �� ���� �������� ��������� ����� ����� ����� ��������
�������� � ������������ ���������, ������� ����� �������� ���������.</p>

<h2><a name="_Toc121642972">�����������</a></h2>

<p class=MsoNormal>�������� ����������� ������������� ������������ � ���, ���
��� ����� ������������ ����� �� ����������� ��������� �������������� ��������
��� ������������ ������� ��������, ��� �������� ������������ �����������
��������� ������ ��� ����� ��������� � ������� ����� �������, ����������� ������,
����� ���������� �������. ��� ��������� � ������� ����� ����� ����� �����
�������������� ������ � ���� ������ ��������� �������� ���������: ����� �����
��� ����� ���� ����� ���������� �������� ��������. �� ��� ��� ������������
������������, �� ��������������� ������� ������, � ����������� � ����� ������
��� ��������� ��������� ������, ��� �� �������, �� ����� ������������� �����
��� �������.</p>

<p class=MsoNormal><b>�������� ����������</b> � �������� �������, ���������
���������������� (�������������, �����������) � ����������� �� ������ ���������
�������� �������� ��������� �����/�����/������ �� ��������: ����� �����/�����
����. ��� ��������� �������� ��������� ����� ������������, ����������
������������, ��� ��������� - �����������. ����������� � ������� �� ���������,
����������� ������������ ������� �������� �������, ��������� �����
�������������� � ������� �� �����. ���������� ����� ��������� ��������� ���
���������, ��� ��������: ������� ������������, ������ ���� ��� ����������� ��
����������� �������� �����.</p>

<h3><a name="_Toc121642973">����������� � ����� ������� ��� ������������� �����</a></h3>

<p class=MsoNormal>����������� � ����� ���������� � ������������� ����������
����. ������ �� ��� ������ � ��������� ���������� ��� ��� ��������
�������������� ���� ������� �����������. ����������� � ��������� ���������,
������� � ���������������� ����������������� ��������� �� ����� ��������, ���
������� ����� ��� ������������ ���������� ��������� ������� ���, ���� �����
���, ������������ �������� ���������� �� ��������, ��� ���������� � ������
�����, ��� ��������. ����� ������� ����� �� ������������� ����������
������������ ��������� � �������� ���������� ����� ����������, ������� ��
������� ���������:</p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��� ����������� �� ���� ���, � �� ����������� �������.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��� �� �������� (��� � ����������� ��������).</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>��� ������������� � ������������: ����� ������������� ��� �������
� ������ �������� ��� ����������� ����� ���������� ��� ������� ������������.</p>

<p class=MsoNormal>�� ����� ������: ����������� ����� ���� ��� � ��������
���������, ���� � � ����������, �.�. �������������� �� ��������� ��������
���������� ������������.</p>

<p class=MsoNormal>����������� ������ � ������� ������������ ������ ����� �
������� � ������� �������� � �������, ���� �������� ������ ��������
������������� � ������������. ������ ����� ������ ����������� ����������� ���
������� �������� (��������, ���������� �����������, ������ � ������������, ��
�������������� ����� �����), � �� ����� ������� ������ �������� ����������
��������� ���������� ������ ��� ����, ����� � �������� ����� ������������
�������� ����������, ��������� ��� � ��������� ����������.</p>

<p class=MsoNormal>����� �������� ��� �����������: fornit.ru/19819, <span
lang=EN-US>fornit</span>.<span lang=EN-US>ru</span>/23264.</p>

<p class=MsoNormal>� ������� ���� ��������� ������������ ���� �����
������������ � ������������� �� ������������ ��� ������ �������.</p>

<p class=MsoNormal>��� ������������ ����������� ������� ���������� ��������
���������� ���� (������� �� ������ ��������� ��������� ����������), ���������
�������� �������� �������� � ����� ����������� �� ����������, ����� ����
��������� ������ �� ������ ��������. ������ ��� ��������� ��������� ����������
��� �������� ����������� � ��� ����������. ��� ��������� ������� � �������
��������� ���������� �������, ������������ ������� ��������� � �������� (�
������� 25 ������) ��������� ��� ��������� ��������� ��� ������ �� ��������
��������� � ������.</p>

<p class=MsoNormal>� ������ ������������ ����������� ����������� ��������� ����
����� ���������� �� ������ �������� ��������� ��������� � ����� ������ ��
�������� ����������� ��� ���������� ����� ���� ��� �������.</p>

<p class=MsoNormal>��� �� ���� ������ ����������� ���������� ������������
������������ ��������� ���������� ��������� ������������� ��-�� ���������
������������ ��������� ��������, �� �� ������� �� ����� ����������� ����������.
�� ���� ������ �������� ��������� � ������ ��� ����������� ����������.</p>

<p class=MsoNormal>� ������ ������������� ���������, ����������� ������
��������� ������ ���������� � ����������� ������� �������� ������������, ��
����� ����� ������ ���������� ��� ����� ������������.</p>

<p class=MsoNormal>��� ����������� ���������� ������� ������� ������
������������, � �������� ����� ����� �������� ����� ���� ��������� �������
������ ���������� � ���� �������� �������� ������������ (��������� ����
����������� �����), � ������ ���� �� ��� ����������� ������� � �������������
��� ��������� ������ �����.</p>

<p class=MsoNormal>������ ������������ ����������� ������� �� ����������
��������������� �������� � ������ ������ ������� � ������� ����� �������������
����� ����� � �����, ��� ����� ���������� �������� ������������������ (��
��������� � ���, ��� ���� �� �������������� ���������� �������, ��� ������� ��
������ ������ ������ ����������).</p>

<p class=MsoNormal>����������� � �������, ������������ �� ���������� ���
��������, ��������� �� ������ � ���������� ��� ��������. �� ������ �����
��������� ����� �������, � ��� ����� � ���������� ���������� �������������
�����, ����� � ��������� ������� �������������� ������� (��� ��� ����� �����
�������� �����) ������ ���������� ����� ����������� ��� ������������. �����
����, ����������� ��������� ���������� ����������� �� ����� ������� ������
�������� ������������ ��������. ��� ��� ���������� ����� ��� ������� ���������
�����������, �������� ���� ����������� ����� ��� �����������. ����� ������
������� - ����� ������� � ����� �� ����������� ����������. ��� �����
����������� � ������� ������� ������ ��������� ���������� ���������� ��������
���������.</p>

<h3><a name="_Toc121642974">����� �������� ����������</a></h3>

<p class=MsoNormal>���������� �������� ���������� ���������� ���������������
����� �������� �������� ActionsImageID, ���������� � ���� ��������, �����, ���
��������� � ����������, � ������������ ����� Energy � �������� �� 1 �� 10, ���
���� ������ ��� ��������� ���������� ����������� � ������� �� ��������� 5. ���
��������� ������������ ���������� ��� ������� �������, ����� ����� � ����
�����������, �� �� ����������� ��� �������� �����������, � ��� ��������������
�������� (������ ������������ ����������� ���������). ���������� ����������
������������ ����� �������� Usefulness, ������������ (���)���������� ���������
�����������. </p>

<p class=MsoNormal>��������� ��������� ��������� �����������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>BranchID </b>� ��� �������� �����������, � �������� ��������
����� ����:</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>���������� ������������� ����� ������ ������������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>���������� ������������� ������ �������� ��������� � ������ ActivityID</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>���������� ������������� ����� ��������� � ������ VerbalID</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Usefulness</b> � (���)���������� �����������: ��� -10 ����,
����� ����������� 0 �� +10 ������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ActionsImageID</b> � ���������� ������������� ������
����������� �������� �����������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Energy</b> � ���� �����������, �� 1 �� 10, �� ��������� = 5</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Belief</b> � ������� ����������� ���������� �����������.
��������� ��������:</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>0</b> � �������������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>1</b> � ����� ��������</p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:10.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:115%'><span
style='font-family:"Courier New"'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span><b>2</b> � ����������� ����������� ������</p>

<p class=MsoNormal style='margin-left:35.4pt'>����������� <span lang=EN-US>Belief</span><span
lang=EN-US> </span>� ������������ ����������� ������ � ������ �������������
�������� � ������ � ������ ����������� ����������, ����� ����� �� ����
���������, � ���� �� ����� �������� ���������. ������ ���� �� ������������,
������������� � �����, ����� ����� Belief = 2, ����������� ����������� ������.
���� �������� Belief = 2, ��������� Belief = 2 ���������� Belief = 0 ����������
�������� ������.</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>Count</b> � ����������. ����� ������������� � ��������������
(���)���������� <span lang=EN-US>Usefulness</span>. � ������, ���� � ����������
����������� ��� Usefulness ������� ����, �� Count ���������, � ��� ����� ��
����� - ������������� �� 1.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>GomeoIdSuccesArr</b> � ������ ��������������� �����-����������,
������� �������� ����������.</p>

<p class=MsoNormal><b>ActionsImageID</b> � ��������������� ������ ��������
��������� ��� Beast. ���������� ��������� ��������� ActionsImage �� ��������� �
��������� ��������� ��� ������ �������� � ������������, ��� � ������ ��������
���������, ���������� � ������ �������� ������������.</p>

<p class=MsoNormal>��������� ActionsImageID<b>:</b></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ActID</b> � ������ ����� ��������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b><span lang=EN-US>PhraseID</span></b><span lang=EN-US> </span>�
������ <span lang=EN-US>����� </span>����</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>ToneID</b> � ��� ��������� ���������</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'><span style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><b>MoodID</b> � ���������� ���������</p>

<p class=MsoNormal>�������� ����������� ������ ��������� � ����� ������
�������� ������������, ������� ������ ���� ��������� ����������� �� �������
��������� ��������, �� ������� ���������, ����� ��� ��� ��������� �����������
��������� ������������. �� ���� ������ ��������� ��������������� ��������
������, ������� ������ �� ������ ���������� �������� ��������, �� � �������
����� ���������� �������� �������� �������: ����� ������������� ������ 1,2 �
1,2,3 � 1,2,3,4, �� ������: 1,3 � 2,4 � ��������� ������. </p>

<p class=MsoNormal>���������� ������� ��� ���������� �������� ��������� �
������ � ������. � ���� ������ �������� ����������� ����� ���� ��������� �
��������� ��������� ���������������� ��������� �������: ������ � ����� ���
������ � ��������� � ������. �� ���� � ���� ������ ���������� ������������ ��
����� ��� ������ � ������ ��� ����� ���� � ����������.</p>

<p class=MsoNormal>������ ������������ ������������ ��� ��������� ��������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>��� ����� �������� � ������ � ��� �� ��� ������ ���������, �� ���� �
����� �������� ����������, �� �� ����������� ���������������, �������� ��������
������, ��� ��� ���� ��������������� ���������� �������� �������� ��� ���������
�����������. ����� ���������� �������� ������ ���������� Usefulness &gt; 0.
���������� 0 �������� ����������������� ������� ��������, � ���������� &lt; 0
��������������� ������� ��������. ������� � ����� ����� ���� �����������
��������� ��������� � ����������������� ������������ � ������ ���� �������.
����� ������� ��������� ��������� ����� ������� ���������� � ��������������.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>��� ������������ ��������� ��������� �������. ���������� ���������� ���
������ ������� ����� ������ �������� ��������������� ������� �����������
�������� � �������� ����� � ����������� �������� � ������������� �����������
��������� (4 ������ ������� ������������). ��� ������������ ������
������������������ �������� ��������� ����� ����� ������ � � ��� �������������
����������. �.�. ���� �� ���� ����� ������� �� ������� ����� �����, � ������
����� ����������, � ���� ��� �����������, ����� ��������������� �������.</p>

<p class=MsoNormal>� ������ �������� ������������ ���� 6 ������������� �������,
�������� �������� ��������� �����������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>������� ���������: �����/�����/������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>������, ����� ����������� ��������, ���������� �� ������� ����������,
�������� ��� ������� ��������� ����� ����� ���� ���������� ������.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>����� ��������� �������� � ������</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>����� ��������� ���������: ��������� ���� � ����������. ��������:
&quot;�������, �������&quot;</p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>������ ������ ����� ��� ����������� ������ �� ������</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>�����</p>

<p class=MsoNormal>�� 6-�� ������ ����� ��������� ��� - ������ ������ ��������
���������, ������ ������ ��������� ���������� ������������ ������ -
������������ ������ ������ ���������, ���������� �� ������� ����������.</p>

<p class=MsoNormal><a href="report_img/image005.png" target="show_pic"><img border=0 width=750 height=auto id="������� 0"
src="report_img/image005.png" alt="������ �������� ������������"></a></p>

<p class=MsoNormal>���� �������� ������������ ����������� 2 ���������:</p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:10.0pt;text-indent:
-18.0pt;line-height:115%'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>������������� ������������ ����������� � �������� ��������� �� ������
������ �������� Beast. � ���� ������ ������ ��������� �������� ����������� �
���� ����� ���������: ���������� �� �������� ������ � �������� ��������. �����
������� ����������� �������� ������������ � ���������� ����������� �����������
������������� ������������ ������� �����. ���� �������� ������ ��������������,
� � �� �� ����� ��� ��������� � ������� ����� ����� ����� ��� ���-�� �����
�������. �������� ����� �������������� ������ ���������.</p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:10.0pt;text-indent:-18.0pt;
line-height:115%'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span>��������������� �������� ���������, ������� �� �������� � ����� ��
�������� Beast, ��������� ������������ ������� ����� Beast.</p>

<p class=MsoNormal>� ������� ������, � �������� ������� Beast � ����������
������������ ���������� ����� ��������� ��� �������� ����� � � ����
������������� �������� �������� Beast. � ���������� ����������, ��� Beast
���������� ������ ��������� � ���� ������������� ��������, ��� ����
�����������. ������, ����� ������� ����� ������ �������� ��� ������������
�����������. ��� ������ �� ���������� ����������� ��������� ����: Beast ������
��������� �������� ����� ���������, ���������� ��� ��� ����� ���� ���� ����� ��
����, ������� � ��������� ��� ������� ������������ � ���� <b>�����������
�����������</b>.</p>

<p class=MsoNormal><b>���������� ����������</b> � ����������� ��������
����������, �� �������������� � �������� ���������� ��������� ���������
(�����������) � ���������� ������������� ������� �������� �������
(�����������).</p>

<p class=MsoNormal>������ ������ ������� � ���������������:</p>

<p class=MsoNormal style='margin-bottom:0cm'><b>��������:</b> ������, ��� ����?</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
������, ��� ����? (<span style='color:#00B050'>��� ����������� �� �������� �����
�������, ��� ����?�, ������������ ��� ������</span>)</p>

<p class=MsoNormal style='margin-bottom:0cm'><b>��������:</b> ��������� (<span
style='color:#00B050'>����������� ���������� ����������: ������, ��� ����? -
���������</span>)</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
��������� (<span style='color:#00B050'>��� ����������� �� �������� �����
����������, ������������ ��� ������</span>)</p>

<p class=MsoNormal style='margin-top:10.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm'>� ���������� ��� ��������� ������� � ������ �� ���������
��������� Beast ���������� �������������� ���������� ����������� � �����
��������, �������� ���������:</p>

<p class=MsoNormal style='margin-top:10.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:0cm'><b>��������:</b> ������, ��� ����?</p>

<p class=MsoNormal style='margin-bottom:0cm'><b><span lang=EN-US>Beast</span>:</b>
���������</p>

<p class=MsoNormal>����� ������� ���������� �������� ����� ������������ ��
��������� � Beast ����� ������� ����������, ��� ��� ������ �������. ������
�������� � �������������� ������ �������: ���� ������� �� ������� ����� �����
����� ����������, ��� �������� � ������������ �������� Beast. �� ������������
�������� �������� ������, ��� �� ��������� �������� �������, ������� �� ��� ��
����� ���������� �� ���� ������ ��������.</p>

<h2><a name="_Toc121642975">�������� ��������</a></h2>

<p class=MsoNormal>��� � ��� ���� ������ ���������, ������� �� ����� ����
�������� � ����������� ��� ��������, � ����� ���� ����������� ������������ �
����������. ����� ��������� � ����� ����������� �������� ����������, ��� ���
����� �������� � ����� �������� � ��� ����������� ������������� � �����
��������� �����. </p>

<p class=MsoNormal>��� �������� ����������� � ������ ����������� �������� �
���� ����������� ��������, � ���� ��� ������ �� �����������. </p>

<p class=MsoNormal>�� ���������� ��������� �������� ������� � ��������������
��������� � �������� ��������� ������������, ����������� ��� ����� �������
������ � �������� ����� ��������. � ������� ��� � ����������� ��������
���������� � ����������� �� ��������� ���� � �������� ��������. �����
����������� ���������� �� ���������� ��������, ������� ����� ���� 1)
������������ ������� ��� ��������, � ����� 2) �������� ����������� ���������
�������������� �������� ��� ����� ����������� ���������� ���������. ��� � ���
������ �������������� �������. </p>

<p class=MsoNormal>�� � ����� ������ ���� ���� ����, ���������� �����������
��������� ����� ��������������� ��� ������������ ��������, � ����� ��������
�������������� ��������.</p>

<p class=MsoNormal>������� ����� �������, ��� ����������� �������� - �����
������ ������� ���������� ������� - �������� �������� ��� �������� ����.
������� ��� � ������� �������� � �������.</p>

<p class=MsoNormal>��� ��� ��������� ������������ ��������� ��������
����������� ����� ��������, ��� � ���� ��������. � �� �� ����� ����������������
����� ���������� �������������� ����� �� ������ � � ������� ������ ��
����������.</p>

<p class=MsoNormal>����� ����, ������� ����������� ��������� <span lang=EN-US>Beast</span>
� ��������� �������� ��������� ������������� � ��������� ��������, ��� ��� ���
� ������� ���� �� ��� ������. � ����� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>��� ����������� �� 4-� ������ �������� � ��� ��������
������� � ����������� ���������, ���� �������� �� ������� ��� ��������������
�������. ����� ������� ����������� �� ������� ������ ��-�� ��������� �����
��������� ����������, ������� ������ �� ����� ��� ��������������.</p>

<h2><a name="_Toc121642976">������ ���������</a></h2>

<p class=MsoNormal>��� ����� ��� �������� ��������� ��������, ��� ��� ���������
������� ������ ������������, ���� ������� ������ ��������� ��������, ���
��������� ��� �������������� ������. ��� ������������� ������� ������������ ���
�� �����, � ��� ���������� ������������� ������� ����������� �������������
�������� �������������� ���������. ��������, ��� ��� ������ � ��������� � ���
���� ����� ��������, �� ������ ��� �������� ���������� � ����������� ����������
���������� ����������, ����� ����� ���� ��� ����� � ������ ��� ����������.
��������, ������ ������ � ��������� ���������� ����� ����������� ������ �����
�������������� ��������� ������� ��������.</p>

<p class=MsoNormal>��, ��� ������� � ������ �������, ������� ������ ������� ��
����� ������� � �������� ������� ������������, ������� ��� �������� ����������
� ����������� �� ������������� �����. ����� ����� ���������� �������� ������
��������, ����������� � ���� �������������� � � ����� �������� �� � ������
������� �������� ���� ����. �� ����� - ������ ��������� ������ ������� ������,
������������ ���������, ������������ ������� �� �������, ��������� �������� ���
������ ���������� ����� ������� � �������������� ��������������� ���������
������� ��������. � ���� ������ � � �������� ���������� ��������� ���������� �
������ ����, � ������������ ����� ��������� ���� ����������, ��������� �������
� ������ ������������� ������ ������ �� ������������. ����� ���� ��������� ���
�. ���������, �������� ���� ��������� ����������� ������� � ����� ��� � �������
������ (fornit.ru/7446).</p>

<p class=MsoNormal>��� ��� ����� � ���� ������ ����� �� �������, �� � ���
�������������.</p>

<p class=MsoNormal>����� ������ ������������� ��������, ��� ����������
����������� ����� ����������� �� �� �������� ����������������, ��� ��������
����������� � ������������� � ����� ������ ��� ������ ������������� ������� ��
�������, � ����� ������ ���������� ������� ���������� ������������. �� ������
��������, ��� ���������� ����������� � ���������� ����� ������, ���������
�����������, ������� ����� �������������� � ����� ������, ���� ����,
�������������� ���� �� ������ ������ ��������� ����� ����������� �������� �
������, �.�. ��� �������� ����� ����������, ��� �����, ��� ���������
�������������.</p>

<p class=MsoNormal>��� ��� � ������ ������ ���������� ������ ��������� ��������
������ ������������ ����� ����� �� ������� ������������ �� ����� ��� ��
�������� � ������. �� ������ ���������� ������ ������������ ��� ����� ��������
���� �� �� ������ ������� ������������, �� ������ ������� �������� �
�������������, �� �������� ������ ��������� ����������. ��� ��� ������ ���� ��
��� ������ ����� � ������.</p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='color:black'>������ ��������� �������� ����� 4 ������������� �������
(����� �������� ��������) � ��������� ������� ������:
ID|ParentNode|Mood|EmotionID|SituationID|PurposeID<br>
���� ���� ������� ����� ����������� �������� �� ������ ��� �������������
������.<br>
<br>
������ ����� ������������������ ��� ������������ ����. ������������ �
���������� MentalActionsImages.activateBaseID �
MentalActionsImages.activateEmotion � mental_automatizm_actions.go/RunMentalAutomatizm
(SituationID), ��� ���������� �������� �������� ��������, ������������ ���
������ ��������� ������ ���������.<br>
<br>
���� ���� �������� �� ����� � understandingSituation(situationImageID �� �
getCurSituationImageID() �� ������ ���������� ������ (��� ������� �����������)
����� ������ �� ������������, �� ����� ������ ��������� �����
������������������ � ������������ �������� ���������.<br>
�� ����� ��������� �������, � ����� ����������� ������ �������������� �����
�������, ���� �� ����� ������� ������� ���������� ����� (���������������
�������). ����� �������, ������� �������� �������� ������������ ���������
���������� PurposeID.<br>
<br>
ID ������ �������� ��� ������ �������� ���� � ��� PurposeImage, ������� ��
������ ��������� PurposeGenetic, �� ����� ����������� ��������, � ��� �����
����� ��������� ����������: � ���������� ���������� ������ ��������� � �������
����������� ����������� ������������� ���� � ������������ ������ ���������.<br>
��� ���������� ���� ����� ���� � �������� ���������� ������������ ������������
������������� ���� ���, ��� ������ ����. ���������� ����������� �������� ���
��������� ���������, ���������������� ������ ������������� ����, � ��������
����� ���� ������ ���������� � ������������ PurposeID.<br>
<br>
��������� ������ ���������� ������������ ���������� ��:<br>
func afterTreeActivation() - ��� ������ ��������� automatism_tree.go<br>
� ���� ���� �������� ��� ������ � ������� 20 �������, �� understandingSituation
���������� �� func noAutovatizmResult()<br>
�.�. ��� ������� �������� ��������� ��� EvolushnStage &gt; 3 � �� ������
��������� UnderstandingTree ����������� �����. ������ newEpisodeMemory()<br>
<br>
���������� ������ �������� ������������, ����� ��������� ����� ����
��������������� �������� ����������� ��������.<br>
<br>
��� ������ ����� ���� ��������� situationImageID ��� ���������� 0 � ����� �����
�������� ������������ � ����� �������.<br>
<br>
</span></p>

<h2><a name="_Toc121642977">�������</a></h2>

<p class=MsoNormal>��������� ������ ������������ ������ ���� � ��������
�������. � ���������� ����� ��������, ��� ������ �������������� ����� ��������
������� ���������, ������� ����������� � ������ �������� ��������.</p>

<p class=MsoNormal>� ������� ���������� ������������� ���� ������� �� ��, ����
���� �� ������, �� ���������� ��� ������ ��� ��������������� ����� ������. ���
���������� �������� ������ � ������ ��������. ������ ����������� ����� ������
�� ����� � ������ ������� ��������� ��� ����� ��������.</p>

<p class=MsoNormal>������ ����� ���������, ��� ������ �������� �� ��������.
���� ���� ������� - &quot;�� �����&quot;, � ������ ������� ��� �� ����, �����
�����, ��� ������ ����� �� ����� ��������,</p>

<p class=MsoNormal>�� ������ ������� ����� ��� ��, ��������� &quot;���
�����&quot;. � ����: &quot;�� ������ �����!&quot;, �� ����� � �������, ��
���������� ���������� �������: �� ����� �������� - �����-�� �����. �, ��� ���
�������� ���� � �������, ����������� ������������������ �������� �� ��������
����������.</p>

<p class=MsoNormal>��� ������� ������� - ����������� ������ ����� �������.</p>

<p class=MsoNormal>������ ����� ���������, ��� � ������� ����� ������ �� ��������
�������, ��� ���� ���������� � ��������� � ��������� ����������. ��� ��� �����,
��������� ����� ������������, ���������� ������� ���� ����������� � �����
������ ����������, ����� �� ���� ��������, ��������� ��� ����������. �� ��� -
��� ������� ����������...</p>

<p class=MsoNormal>� ������� � ������ ������� �� ������ ���������� �
����������� ��� ���� ������.</p>

<p class=MsoNormal>1. ������� ������������ ����� ������������������ ������-&gt;�����-&gt;������.</p>

<p class=MsoNormal>�� ������-�� ������� � ������ �������� �����, ���������
������ �������� �, �������, �� ���� ����� ������� ����� ������ (� ����� ���� �
�� �������, ��� � ���� ����������). ��� ������ ������� ����� ������ ��������
��������� ��������� ������ �������� �������, �������� ��� �� �������� ���
���������� �������. �������� ��������� ����� ������� ��� �������.</p>

<p class=MsoNormal>2. ����������� ������� ������������ ����� ������������������
�����-&gt;������-&gt;����� (�.�. ������ ����� ����������� ���������� ������ ���
��� � ������, ��� ����� ��������). ���� ����� ������ � ������ ������ ������, ��
��� ����� ������������ ��� ����������� ���������� �����, ���� � �����������
����� � ���� ���� ��� �� �����.</p>

<p class=MsoNormal>������ ��� ������� �� ���������� � �������� �� ������ �
������ �� �������, �� ����� ���� ��������.</p>

<p class=MsoNormal>����� �� ������ ���������� ������� � ������
������������������ �����������, ��� ������� ������������ � ����� �������������
������. � ����� ��������� ��� ��������� ������� � ������������������ ���������
�������������.</p>

<p class=MsoNormal>� ���������� <span lang=EN-US>Beast</span><span lang=EN-US> </span>�����
������������ ��� ���� ������, ���� �� ������.</p>

<p class=MsoNormal>����� �� ������ � ������� ��� ������ ����� ������, �� ��������
�����������, �� �� ���������� ������ ������ ���������, ����, ��� ����� �������
����� ���������� ���� ��������� � ������ ���������� �����. ������� � ����� ���
����, ����� ������������ ��� ������������ �����������, ���� ��� ��� � ������
����� �� ���, ���������� ����� ������� ������������, ���������� ��� ������
����������� � ������� ���������, ��������� ����� ������������� ������ �� �����
���������, � ������� ���� �� ������, � ������ ���������� ������.</p>

<p class=MsoNormal>������ ������� ����������� � ���������� �������, �������
������������ ����� ������ ������� ����� ���� ���������� �������� � �������
�������: ������� �� ���������� ���������� ���� ��� ���.</p>

<p class=MsoNormal>������ ���, ������ ��������� ������� � ������ ��������, ���
����� �������������� ��� ����, ����� ������� � ���������� ���������� �������
���, ���� ������ ���, ������ ����� ������ �������.</p>

<p class=MsoNormal>��� �����, ���� ������ ���������� ����� �� ����������, ��
��������� ������ � �������� ��������? ��� ������ � ����� �������������
��������?</p>

<p class=MsoNormal>���� ����� ��� �� ������������, �� ������ ����� �����
������������� �� ��������� ������, � ���� ��� ������������� � ������� (��������
��������������), �� ����� ������ ����� �������� � ������� ��������
������������. ��� ��� ����������� �������� ��������� � �������� ��������.</p>

<h2><a name="_Toc121642978">������� ������������ ����������</a></h2>

<p class=MsoNormal>����� ������� �������� �������� ��� ���������� ������
�������� ������������ �������� ����� ���������� ��� ������ ������ �������� �
������ ��������. �������� ������ ��������� ������� ������ � �������������
��������, �������� ���������� ��� �������� �� � ������� ���������� (�������
������ ����������). ������� �������� ���������� ������� ����� ���� ������
�������, ���������� � ���� � ������� ���������.</p>

<p class=MsoNormal>���������� � ���� ������� ������ ����� �������� ������� ��
-10 0 �� 10, �� � ������ ���������� ������� �� ������������ �� -1 0 �� 1, � �
������� ����������� ���������� ����������� ������� ������ (���� �����������,
����� � ��������� �����, ����������� ���������� �����) �� ���������� � ����� �
����. � ��������� ������ ����� ���������� ������� �� ������� ������� �������� �
����������� �� ����� ������������ ��������������� � ���� �������� ��������
setImportance().</p>

<p class=MsoNormal>���������� ������ ������������ � ��������� ����
�������������� �������, �.�. ���������� ��� ����������� �������� ������������ �
���������.</p>

<p class=MsoNormal>��� ������ ������ consciousness ������������ ������� ������
���������� ���������� � �������������� - � ������� ����������� ������� ����
getMentalPurpose().</p>

<p class=MsoNormal>���������� ������� ���������� � ������� ���������� ������ �
����� ���� ��� ����� ���������, � ��� ����� ������������ ����������� ����������
���������� ��� ���������� ��������� (������������).</p>

<p class=MsoNormal>���������� �������� ���������� ������ ��������� �������
������� �������� - ��� ���������� � ������ �������� � ��, ����� �������� �����
���� ��������� ��� ����.</p>

<p class=MsoNormal>���� ��� ����������� �������:</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/createNewlastImportanceID.htm"><span
style='color:blue'>createNewlastImportanceID</span></a>&nbsp;- ������� �����
����� ���������� ������� ���������� ���� ������ ��� ���</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/Saveimportance.htm"><span
lang=EN-US style='color:blue'>Saveimportance</span></a><span lang=EN-US>&nbsp;</span>-
��������� ������ <span lang=EN-US>Importance</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/loadImportance.htm"><span
lang=EN-US style='color:blue'>loadImportance</span></a><span lang=EN-US>&nbsp;</span>-
��������� ������ <span lang=EN-US>Importance</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getObjectsImportanceValue.htm"><span
style='color:blue'>getObjectsImportanceValue</span></a>&nbsp;- ���������� ID
������� �������� � ������� ��������</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/setImportance.htm"><span
style='color:blue'>setImportance</span></a>&nbsp;- �������� ���������� �������
������������ ���������� ���� ��������������� ����� � ������ ��������</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getGreatestImportance.htm"><span
style='color:blue'>getGreatestImportance</span></a>&nbsp;- ����� ��������
�������� ������� � ������ ��������</p>

<p class=MsoNormal style='margin-left:18.0pt'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/funcs/getTopAttentionObject.htm"><span
style='color:blue'>getTopAttentionObject</span></a>&nbsp;- ������� ����, �����
���������� ������</p>

<p class=MsoNormal>����������� �������� ������������ ������������� ����������
������ ���������� ������� �����������. ������� ��� ����������� ��� �� ��
���������� ���������� ��� ��������� �������� �����������. ��� ���������� ��
������ <b>���������������</b>, ����� <span lang=EN-US>Beast</span> ������
��������� �� �������� ���������, ������� ��������� ����������� �������. �� ��
������ ������������� �������� ����� � ������� ������������� ������� ���������,
����� ���������� ���������� ��������:</p>

<p class=MsoNormal style='margin-left:35.4pt'><i>�������� ������� �����������
��������� ������� ���������. ���� ��������� ������� �������� �������, ��
��������, �������� ����������� ������� �������������� � ���, ����������� ���,
��� ������ <b>������� �����</b>. � ��� �� ������� ���� ����������� ������,
����� �� ������������ ������������ �� </i><i><span lang=EN-US>Beast</span>
�������� ������������ ���, ��� � ������ �������� ��� <b>����������� �������</b>
������� ���������. �� ���� �����: ��� ������������� ������� �� </i><i><span
lang=EN-US>Beast</span><span lang=EN-US> </span><b>������� �������</b> � ���
���� ������ ������� ���������.</i></p>

<p class=MsoNormal>������� ����� ������� �����: ��������� ���������� ��
����������� ������� ��� <span lang=EN-US>Beast</span><span lang=EN-US> </span>����������,
����� �������� ���������������� ���������� ������� �� ���������. ��� ��������: <b>�������
������� (fornit.ru/12787)</b>, ������� ���������� ����������, �������������
������� ���������� � <b>�����������</b> ��������� �� ����������� � �� ���������
��������. ������� ��� �����, ����� ����� �������� �� ��� ���� ������.</p>

<p class=MsoNormal>��� �������� �������� ����������� <b>������������ ����������</b>,
��� �� ������������, ���������������� � ��, ��� ���� ������� �� ��������
���������. ��� �������� ������ ���������� �� ������� ����������, ��������
������������ �� ��� ����������. ��� ���� �����, ������������ �� ������� ������
� ��������, ��� ���������������� ����� ���������, �� ����� �������� � �������� <b>��������������
������</b>, ������� ������� �� �������� ��������� Beast,� ���������� ����������
� ���������� ������������ ���������� �������. �������� ��������� � ��������
�������� Beast ������ ��� �������������� �����, ������������ ������ ����� �����
�������� � ����������� �������. ����������� ��������� �������������� �����,
��������� �� ��������� �������� ����������, ������� ������ ����������� ������
Beast �������� �� ��, ��� �� �������������� ���������� �������������� �����. ��
��� �� ������� ������ ������ �������� ������� ���-������ � ����� ��������������
�������������� ������. ���������, ������� ���������� �����������, ��� �����
������������� ��������.</p>

<h2><a name="_Toc121642979">������������� ������</a></h2>

<p class=MsoNormal>� ��������� ���������� ������� ������� � � ��������� <span
lang=EN-US>Beast</span><span lang=EN-US> </span>������ ���� �������������
������ ��������� ��� ������������ ����������������� ���������, �������� �������
�������������� ������� � ������� ������������� �������. �������������� �������
������� � ���� ����� �� ���� ��� �������, ������� ������������ ���
������������ �� ���� ����� �������, �� ������� ���� �������� ��������, � � ����
���������� ��������������� �������� ����� ������ ������������ � ������
��������� �������� � ����� ��� �����. ��� ��� ������ ������ ����� ����� �������
� ����������, �� ��������� ���������� �� ������, ������� ���� ������� � ���
������, ������� � ������ �������� ���������, ������, ������� �������� � ����,
������� ���� (�����������) � ����������� ��������.</p>

<p class=MsoNormal>�� ����� �������� �� �������� � ������ ����� ������������
��� �����, ��� ����������, ��������� �������� �� �������� ������ ������ �����
���� � ���������� ��� ���� ������, ������� ��� �������� �� ���������� �������
������. ����� ���������� ����� �������� � ���������� ������� ������������������
������� ������� ��������, ������� ��� ����� ��������������, ��� �� � ���������
�� ����������, �� ��� ��������� ��������, ������ ��� �� ���� ������ �����
���������.</p>

<p class=MsoNormal>� ������� ������� ������, ����� ���������� ���� ������ �����
������ ������������� � �������� � ���, ��� ����������� �������. � �����������
���������� ����� ����������� ����������.</p>

<p class=MsoNormal>������������� ������ � ��� ������������� ����� �������, ����
� ������. ������ �������� ���������� ����� ��������� �������� �������� ������,
��� ������� ������ �������� �������������. �� ������ ������� ������ �����������
������������ ����� ���������, ����������� ������ �������� � ������ ��������� �
������� ������� �������.</p>

<p class=MsoNormal>����� ����, ������� ������ �������� ������� �� ���������,
������� ���� �����-�� � ����� ���� ��� ������� �� ������ ��������.</p>

<p class=MsoNormal>� ����� ��� � ����� �������� ������� ��������, ������ ������
���������� ������� ����.</p>

<h2><a name="_Toc121642980">������ ���������</a></h2>

<p class=MsoNormal>�������, ���������� ���������� � ��������� ��������� �
�������, ������������ ������ �������, ������������ ����� ����� �������������
������ ��������� ����, ��� ����� ����������� � ��� ��� ���� �������� (fornit.ru/7305).
� ����� ������� ������ ��� �������� ����� ��������������� � ������ �������
������������� ����������, � ��� ������� ���������� � ���������� � ������
������� � ���������, � ������� ���������� ����� ����������. � ����� �������
������� ���������� ��������� ���������� ��������� �������� � �� ����������� �
������������ ��� � �����������, ������� ����������, ����������������� ����
(���������� �������). </p>

<p class=MsoNormal>� ���������� ��� �� ���������� ����� ���������, � ���� �
���������� ��������������� ���������� ���� ������ ����� ���������� � �������
���������� �������, ��������� ����������� ����������������� �����. �� ��� �
�������� ���� ������������, � �������� ��� �����������. ��, ��� �� ���������
������ ����������������� ���������������, �� ����� ����� ���� ������������ �
��������� ����� �����.</p>

<p class=MsoNormal>���������� � ��������� �������� � ���������� ��������������
������������� (��������� ���������� ���� ���������� �� ������ �����, �������
������ ����) ��������� ����� ������� ��������� ���� �������� ��������, �������
��� ��������, � ������������ ��������������� � ����� �� ����� ������� � � ��
����� ������ �������� �������������� ������� ���������.</p>

<p class=MsoNormal>���� � �������� 5-6-�� ��� � ������� � ����� ��������
������������� ����� ''�'' (<span style='color:black'>fornit.ru/64933</span>).
��� �����, ����� ������� �������� �������� ��, ���� �� ���� ������� ��������,
������������, ������� � ������ ����, ����� ��� ����� ��� ������. ������ � ����
������ ������� �������� �������� �������� ����� ''� -- �������'' � ''� --
������''.</p>

<p class=MsoNormal>���������� ����������� ��������� ������ �������� �������
������������� � ����� � � ������ �� ����� �� ���, � �������� 5-6 ��� ��������
������������� ����� �ߔ (<span style='color:black'>fornit.ru/64933</span>), �
��� � ������ � ����������� �� ���� ������ ������� ������� ���������. ���
��������, ��� ���������� �� ������� ����� ���������������� ������� ����������
������������ ���� �������.</p>

<h3><a name="_Toc121642981">����� ����� ����</a></h3>

<p class=MsoNormal>����� ����������� ��������, ����� ������������ �����
��������� �� ���������� �����, ��������� ��������������, ����� �����-�� �����
�����������, ��� � ����� �������� ������� ����� �, � ������ � ����� �. ��� �����,
���������� ������ �� �������� ��������, ����������� ������������ ����� ���, ���
� ������������ ��������� ������ ������������ ������: ������� �������� �
�������� ������ ���������� ��������, ���� ������ � �������� ��������� ��������
�����. ����� ����������� ���������� � ������������ ��������, ���������� �
���������. �������� �������: ������� ���� ������ ����� ���� ����� � ����� ���
����� ������, ���������� ����� ��������� ���, ���� �����-�� ������ ������� ��
�������� � �������� ��������� ������.</p>

<h3><a name="_Toc121642982">������������� ��������� ������� ���������������
��������� (���)</a></h3>

<p class=MsoNormal>����� ���� ����������� ������ ������ ���������������
��������. �� ������� ����������� ��������� ����������� ����������� � ��� ������������
��������: ��������� � ���������� ������������ �������. </p>

<p class=MsoNormal>� ������ ������� ����������� �� ���� ��������� �������������
����������� ������� ����� ��������� ���������� � ��������� ��������� (� ��
������ ������ ������� ��������� � ���������������� ����������������).
������������ ����� ���������� ����������� � �� ������������, ��������
����������� � ������ ��������.</p>

<p class=MsoNormal>�� ������ ����� ���������� (���������� ����������) �����������
����������� � �������������� ������� ���������� ���������. � ����� � �������
������ ����� � ������ �������� ����������� � ����������� ����������� �������,
������������� � ������� ��������� � ����������� ������������ ��� ���������� ���
����������� �������� ��������� ������� ������������ ������ ����� ��������, ���
������ ��������.</p>

<p class=MsoNormal>��������� ���������� ��� ���������� ��, ��� �������� ����������
����� ���� ���������.</p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>� 2004 ���� �. ������ ���������� ����� ������ �������
��������������� ���������� (</span><span style='color:black'><a
href="http://fornit.ru/7589" target="_blank"><span style='color:blue'>fornit.ru/7589</span></a></span><span
style='color:black'>), ������� ����� ��������� �������� ����� ��������� ����
�������������� ���������������� ������������.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>�.������ ������ ����������� ������������� �� ������������
����� ���������� ���� ������, ������������� � ������� ���������. ������ ����
��������������� ���������� ���������� ������������� � ���� �����������
��������� �������� � ��������� � ��� ��������� �������: ����� ����� �����
���������� ������� ����� ��� ����� �����, ���� ���� ����� ��� �����.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>������ ������������ ��� ��������� ���������� �����
���������� ���������, � ��������� ������� ������ �������� ������������
���������� � ��������� ���������� � ������������ ������.</span></p>

<p class=MsoNormal style='line-height:12.85pt;background:white'><span
style='color:black'>������ ��.������ ����� ������� �������� ����������
���������������� ������ ���������� ������������� ���������.</span></p>

<h2><a name="_Toc121642983">������ ������ ��������� ���������� ����������
�������� ��������</a></h2>

<p class=MsoNormal>����� ��������� ������ ������������ � ����������� ���������
������ ��������� �������� ���������� ����� ������� ������� ���������� ��������
(consciousness), � ������� ���� 4 ���������������� ������ ������������� �
������� � ����������� �������� ���������.</p>

<p class=MsoNormal>������ �������� ��������� �������� �������� ��������� �����
� �������� ��������� ����.</p>

<p class=MsoNormal><b>1.</b> ��������������� ������� �������� �������������
�������� �������� �� ������� �������� ����� ���������� � ����� ���������,
��������� �������� ������� ����������, � ���� ������ ���, �� ������� ������� �
���������. � ����� ����� �����, ���� ���� �������� �������� ���������� ���
������ �������, �� �� ����� ������� �����������, ����� ������ ��������� ���.</p>

<p class=MsoNormal><b>2.</b> ���� ������� ���������� �������� �������� ��� ���
���, �� ���������� ����� ���������� ������� ������, ������� � ��������� ���� �
������� ��������� � ������� �������� ��������, � ���������� ������ �������� �
�������� ����� ��������� ���� ������-�����. ��� ������ ������� ������ ��������
� ����� �������, ��� ����� ������� ���������� � �������� ���������� ������� �
���������� �������. </p>

<p class=MsoNormal>������� � ���, �������� �� ���������� �� ��������� � �������
�������� ��� �������� ����������� ������ ���������, ������� �� ����� ��������
��� ���������� ���������� � �������, ��������� �������� � ������������
������������� ����������� (� �� ��������).</p>

<p class=MsoNormal>������� �� �������� ��������� ��������� ������, ��� ���
������������� ���������� �� ����, � � ����� ������ �������� ��������� ��� ��
���� (���� ���� ��� ������������), ���� � ���� ����� ��������� �������������� �
���, ����� ������� ������ ���������� � ��������� ��������� �������, �� �������
����� �������� ����������� �������. �������� ������: ��� �� ������ � ������
����, �� ����������� ����������� ��� �� ����������, �������� ������� � ����
�����������, ��, ���� ���� ��� ������ ������������, �� ������� � �������������.</p>

<p class=MsoNormal><b>3.</b> ���� �� ������ ������ ������������� �� �������
���������� ������� � ���������� �� �������, �� ���������� ���� ������
����������� �������, ���� ������ �������� �� ��������� ������ ��������������
(��. ���� fornit.ru/652). </p>

<p class=MsoNormal>����������� ������ ���� ������ � ������������� ��������
����� ������� ������ ������� (���������� ������), � ��� ���������� �����������
������ � ������ ����������� ������� �������� ��� ������� ��������. ���
��������� ��������� ������ �� ������ ��������� �������� ���������� ��������,
��������������� ����������� �������� ��������� �����������. ����� �����
�������� ��������� ����������� ���������� ���������� ���������, ����������
�������������� ���������� � ������� ������������� ���������������� �������
������� ��������� ������������ �������������� ������. ����� ������� �
���������� <span lang=EN-US>Beast</span><span lang=EN-US> </span><a
href="/adaptologiya/beast/beast_scheme/package/mental_automatizm.htm">�����������
17</a>. ������� ���������� ����������� ������������� � ��������� 4-�� ����. </p>

<p class=MsoNormal>�������� ������ ������� ������������ ��� ����� �����������
������� (������� ����� ����) ������� ������� consciousness. �, ��� ������ ����,
���� ��� �� ����� ���������� ��������, ��� ��� ���?</p>

<p class=MsoNormal>������� ����������� ������ ���������� ������ ��� ���
���������, ��� � ����������, ��� ����������� ��� �� ��������� � ������ ������.
���� �������� ������ ������ ��������� �������, ����������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>�������������� �������� ������ ������� � ���� ���
����������� ������ ������� ������ ��������. ����� ��������� ����� ������. ��
����, ��������� ������ ����� ���������� ������ ����������, ������� ���
���������. ��� � ������� �������� ������������.</p>

<p class=MsoNormal>����� ���������� ���������� ��� ������ �������, �� � ������
������� �������� ����������� ���������� ���� �� ����������� �.�. �����
���������� �� ���������. � ������ �� ���������� ����� ������ ����������
����������� ��� ����, ����� ���������� ������ ��� ������ � ���������� �����.
���� ��� ���������� ���������� ����������� ��������� � ������ ���������� 10
�������� ������� (� �������� � ������� ���� 5-7 ����� ���������� �����).</p>

<p class=MsoNormal>����� ���������� ���������� �� ������ � �������� �
���������� ������, �� � ��� ��������� ���������� ������� ����������, ��������,
��� �������� �������� ������ �� ��������� ���������� ����������.</p>

<p class=MsoNormal>���� ����� ���������� ����������� �������� � ����������������
������, ������������ � ������ ���������� 1000 ��������. ������ ������������
����� ���� ����������� �������.</p>

<p class=MsoNormal>� ����� ������, �, ��� �����, ����� ����� ��������� � ������
����� ����������� �������� ����� ������ �����������, ������, ��� ��� �������� �
������ ���� �����, � ������� ��� �� ���� ������� ����������� ���������� (fornit.ru/7358),
������� �� ������� � ���� ��� ����� �������: ����-����� - 13-35 ����, �
�����-���� - <span style='font-size:11.5pt;line-height:107%;color:#222222;
background:white'>8-13 �� (fornit.ru/10455</span><span style='color:#222222;
background:white'>). ��� ������� �� ����� ������� ����������� ������ ���������
� �����.</span></p>

<p class=MsoNormal><b><span style='color:#222222;background:white'>4.</span></b><span
style='color:#222222;background:white'> ���������� 4-�� ������ �������� ������
�� 5-� ������ �������� � ������� � ������� ���������� ���������� ���������. 5-�
������ �������� ��� �� ����������� � �����.</span></p>


<h2><a name="_Hlk121230721"></a><a name="_Toc121642984">���������� �����������
� ����� ���������� ��������</a></h2>


<p class=MsoNormal>����� ���������� ����������� ����� ����������� �� �� ���
����������� ������������� ���������, � �������������� ������������ �� �������
����������, ���� ������� ��������� �����. ������ ���������� ������������
������� ���������� � � ���������� ����� ���������� ��������� ����� ����������,
������� ������ ������ �� ��, ����� �������� ����� ������� � ���������
�����������. ���� ������� ������ ������������ �� ��������� ������ ��� �������
������� ������ (������������ �����). ��� �� ��� ���, ���� �� ����� ������� ������
������ ����� ��� ������� � ������.</p>

<p class=MsoNormal>��� ��� ������������ ��� ������ ������� ������� ���������
����� ���� � ���������� ����� �������������� �������. ������ ������ �����������
��� ������ ���������� ����������� ����������� ����������� � ���������, �������
�� ����������������� �������. ���� ������ ���������� ��� ��������� �������
���������� ������ ��� ������������ ����� ��������. �� ��� �� ����� �������
������������ �������������� ������� � ��� �� ��������� ������� �� ������
���������� ����� ����������� (�������) ��� ����������� ����� ��������.</p>

<p class=MsoNormal>����� ����������� ���������� �������� ����� ������ (��, ���
� �������� ����� :) ����� �� ������������ ����������� ��������� ������-��
��������, ��� ��� ���� � ������ ������� ���������� ��������. ��� ��� � ����
���������������� �������� ������� (�������� �������) ����� �������������� ���
���������� ���������� �������� ������ ��� ��� ��� �� ����� ���������������
����� �� ������������.</p>

<p class=MsoNormal>����� ��� �� ������������ ����� ������� �� �����
����-������� � ������ � ������ ���������� (fornit.ru/5212), ��, �������������
����������� ����� ������� ������ ������� ���������� (��-�� ���������������, ��
������ � ����������� ����������� fornit.ru/984), ����� ��������� ����, ���
����� ��������� � ���������� ������, �� ��� ��������������� ������� �����������
������������ �������������� ������� ��� ������� ����������. ����������
��������� �� ������ ���������� ���������� ����, ������� �� ���� �������
���������. ��� ���� ��� �� �����������.</p>

<p class=MsoNormal>� ���� ����� ��������� ������:</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/mental_automatizm.htm"><span
style='color:blue'>mental_automatizm</span></a>&nbsp;- ���������� �����������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/rules.htm"><span
style='color:blue'>rules</span></a>&nbsp;- ������� - ��� ������ �� �����������
��������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/rules_mental.htm"><span
style='color:blue'>rules_mental</span></a>&nbsp;- ������� - ��� ������ ��
������������ ��������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/short_term_memory.htm"><span
style='color:blue'>short_term_memory</span></a>&nbsp;- ��������������� ������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/trigger_and_action.htm"><span
style='color:blue'>trigger_and_action</span></a>&nbsp;- ��������� ������� - ���
������ �� ����������� ��������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/trigger_and_action_mental.htm"><span
style='color:blue'>trigger_and_action_mental</span></a>&nbsp;- ���������
������� - ��� ������ �� ������������ ��������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding.htm"><span
style='color:blue'>understanding</span></a>&nbsp;- ���������, ����������
��������: 4 ������ �������������.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_purpose_image.htm"><span
lang=EN-US style='color:blue'>understanding_purpose_image</span></a><span
lang=EN-US>&nbsp;- </span>����� �������� ����<span lang=EN-US>.</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;line-height:normal'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_situation_image.htm"><span
lang=EN-US style='color:blue'>understanding_situation_image</span></a><span
lang=EN-US>&nbsp;- </span>����� ������� ��������<span lang=EN-US>.</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><a
href="https://scorcher.ru/adaptologiya/beast/beast_scheme/package/understanding_tree.htm"><span
style='color:blue'>understanding_tree</span></a>&nbsp;- ������ ���������.</p>

<h2><a name="_Toc121642985">��������� ���������� �������� � ��������</a></h2>

<p class=MsoNormal><span style='color:#222222;background:white'>���� ������� ��
��������� �� 3-� ������ ������� </span>consciousness, � �������� ����������
�����, �� ��������� �������� ���������� �������� � ������ ���������, � �������
�������� ������������ ������ � ����, ��� ���������� ��������, �������������
���������� ����� ����� ���������� ��������, ������� ��������� ��������� ���
����� �� �������. </p>

<p class=MsoNormal>��������� ��������� ������ �� ���������� ������� ������
�������� � ���������� ������������ ����� ���������� ������. ��� ��� �� �������
��������, ��� ��� ������� �������� ������������ ������, ���������� ���������
���������� �������, ��� ������� ���� ���������� �������� ���� � ����������
���������� ���������.</p>

<p class=MsoNormal>���� ���������� ����������� ���������������� ��������� ��
������������ ������ ���������������� �������, �� ������������� ������� �� ����,
��������� ������ ������������ ��������� ����� ���������� � ������� �� ����������
��������� �� �������.</p>

<h2><a name="_Toc121642986">����� ���������� ����������</a></h2>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>����������
�������� ����� ������� �� �������� ��� 2-�� ������ ����������. ������� �����
������ � ����������� �� ������ ������������ ������� ��������. �������� ������: ���
�� ������ � ������ ����, �� ����������� �����������, ��� �� ����������,
�������� ������� � ���� �����������.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>����������
���������� ����� ������� �������� ���������� ������ ���������� � ��� � �����
�������. �� ���� ��������� ������� ����� ��������, ������� ��� ��������� �
���������� ��������������. ���� ������ ����������� ������������ ��� �������
����� ������� (4-� ������� ��������), ��� � ����� ������� (5-� �������
��������), � ���������� ��������� (���� ��� ����), � ������������� ����������
������, � �������� ������������� � ���������.</p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>����������
�������� ������� ���������� ������ � �������� ����������, ��� �������� ��������
��������� ������� � <span lang=EN-US>Beast</span> � ������� 1-2 ���. ��
���������� ���������� ������ �������� ���������� ��������� �� ������� 2 � 4.</p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span>�������� �������
���������� ��������� � ��������� ��������� ���������� �������� � ��������������
�������������� ������� ��� ����������� �������� ������ ������� �������. </p>

<p class=MsoNormal>��������, � ������ �����, �������� �������� ��������������
������ ��������.</p>

<h3><a name="_Toc121642987">�������� �������� �����������</a></h3>

<p class=MsoNormal>���������� ������� �������� ��������, ��� ��������
������������ <span lang=EN-US>Beast</span><span lang=EN-US> </span>���, ��
����, �������� ���������� ������� �������������� �����: �� ����������� �����
���������� ������� ���������, �� �������� ������� ������������� ������ �
������������, �����������, ���������� ��������� � �. �. ��� ��������: ���
������� ���������������� ������� �������� ������� ����� ������� �� �������
�����. ������� ���������� �������� ���������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>������ ���� � ��� �� �����������: ����� �������� ���������
������� ����� ����� ������������ � ��� ��� ����� �������� �� ����?</p>

<p class=MsoNormal>���� ����� ��������, ��������������� �������������� ���
�������� �� �������������� ������. ������� ����� �������� ������� ��������
������� �����, ����� �������������� �������� ����� �������������, � �����
������ ������������ ����� ���������, ��� �������������� ��� ������� ��������.</p>

<p class=MsoNormal>������� � ���������� ������������ <span lang=EN-US>Beast</span><span
lang=EN-US> </span>� ������ � �������� ���������� ������. ������� �����������
������������ ����� ������� ����� ������� <span lang=EN-US>Beast</span>, �����
��� ����� �������� ���������� ������, ������ ���� �����. ���� ������������ ����
����� �������� �� ������������� ���� ����� ������ ������, �� � �������������
��� �� ���������: ��� ������������� �����������. ����� ���� ����� ������
������������ - � ��� ��� ������� ���������, ������� �� ��� ������� �����,
������������� ����, �������� ���������. ��������, �������� ���������� ����
������� � ���� ���������� ���������� �������. ��� ������ ������� �������� ��
��������� ������������ ��������� � ��������.</p>

<p class=MsoNormal>��� ������ ������ �������� ��������������� ����������
������� ������, ������� ������ ��������� ��� ��������� ������. �� ��������
����� ���������� ������� ���������� ���������� �������������� ������. ����
��������� �������� ��������� ���������� �������, �� ������� � 3 ������
��������� ����� ���������� ������ � ����� ��������, � ������ ��������������
���������� B<span lang=EN-US>e</span>ast, �������� ������������, ������,
����������� � ������� ������ ����������� ����������, ������� ����� ���� ������
�� ������������.</p>

<p class=MsoNormal>��� ����������� �������� ������ �������������� �������������
����� �������, ���������� ������ ������� ����������, ���������� �������
������������ ������ � ����������� ������������� � ������������� � ������������
��������. ����� ��� � ������������ ����� ���� ��������� ����� �������������
������������ �� ����� � ��� �� ��������� � ��������, �������� � ������� �� ���
������������� �������. ��� �������������� � ���������� ���������� ��������
��������������� ������� ����.</p>

<h2><a name="_Toc121642988">������ �������� ������� �� ������ ��������� (���
������ ��� ����� ����� ����������� ������ ������� ������ ������������).</a></h2>

<p class=MsoNormal>��� ��� ����������, �������� ����������� ����������
������������ ������������ �� ����������. � ������ ������ ������� ��������
������������ ���������� ����������� ���������� ���������� ������������ �������
������. � ������ ��������� ���������� ��� ��������, ��� ������ ������� ��������
��������� ����������� ��������� ��������� ���������� ������ (fornit.ru/50319).
���������� ������� ��������� ������� �������� ����������� ������� �������������
�����������, � �� ������ ���� ����������� ������, ��� ����� ������� ������
������ �� ����� ������� �������: ���, ��� ���� ������������ ����� �������
�����, ������������ �� ������ ��������� ���������������� ����� ����� � ����
����� ��� �������� ��� ��������, �� ��� ����������� ������ �������������� �����.</p>

<p class=MsoNormal>��� ��� ���������� ������������ ������� �������� �����
������� ���, ��� ������� ������������ ����������������� ������ �����������
����������������� ����� �����������. � ���� �����-�� ��� �������� �� �����
����������� ���������� �����������������, �� ��� �������� ������ ���������� ��
������ ������ � ������������ ��������� ������ ����� ��������� ���������. ���
��� ��� ��������, � ������� ������� ���������, ����������� ������� ������
���������� �������, ��� ������� �� ������ ����� �� ��� �������� �����������������
� ����� ��������� ����������������� � ���������� �������� ������ �� ����
��������� ����������.</p>

<p class=MsoNormal>� ���� ���������� <span lang=EN-US>Beast</span><span
lang=EN-US> </span>���� ��������, ��������� ����������� ������ �����������
������� ��� ���������� ���� ��������� ���������� ����������. �����������
�������� ������������ �������� � ���, ����� ������� ������� � ������� �
�������� � � ����� ����������� ������� ��������� �����. ����� ����������
������� �� ����������� ���������� �������� �� ������ �������������� ����, ��
��������� �� ����������� ������� ������������ �� ����������� ������, ��������
��� ��������� ������� ���������, ������� ����� ����������.</p>

<p class=MsoNormal>��� ����� ������������ ����������, ��� ������� ���� �����
����������� ������� ���������� �������� ������ ��������. � ��� ����� ���������,
��������� � ���������� ������ ���� �����������, ����� �� �������� �� ������,
��� ����� �� �������� ��������� ������� � ������ �����������. ����� ��������
����������� �� ���� ���, ��������� ������������ ����� � ���������� �������.
������ ������ ������ ����������� ���������� ��� � ����.</p>

<h2><a name="_Toc121642989">��� ������?</a></h2>

<p class=MsoNormal>���������� �������� ������� ������� �� ����, ��������� ��
������������ �������������� ����������, ������ ��� ���������� ��������� ��� ���
��� ��������� ���������� <span lang=EN-US>Beast</span>.</p>

<p class=MsoNormal>��� �� ������ ������������ ������� ���������� ���������
������������ ������: ����� ������� �����������, ������������/��������� �����,
����������� �������� ����� ��������� ��� ��������� ������� ������� ��������
�������? ��������, ��� ��� ������� ���������� ������� � �������� ������������,
�������������, ������� ����� ��������� �� �������������� �����. �� ���� �������
����� ������� ����������� ������������, � ������� ���������� ���������. ��� ��
����� ����������� ������� �������� Beast ������, ��� ��� ����� ���������������
���������� ��, ����� ��������� � ����� �� ������������. </p>

<p class=MsoNormal>���������� ���������� <span lang=EN-US>Beast</span>
��������� ������ ��� ����, � ����� ������� ������ �������� ���������� �
��������, �������� �� ����������� �������, ���������� �������� ���������
���������, ������� ���� ���� ���������� ����� ����� � ���������� ��������, � �
������ ������� ��������� ����������, ������� �������� ��� � �������� ���
��������.</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><b>��������� ����������</b>:</p>

<p class=MsoNormal>���������� ������� ������������</p>

<p class=MsoNormal>��������� ������� ����������</p>

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
//$add_after_discas_link_text="<span style='font-size:12pt;'><br>��� ���� <a href='/forum/Sources/printpage.php?board=4&threadid=1914' target='_blank'><b>���������� �� ������</b></a></span>";
$stst = articl_discas("",0,"����������","���������� $page_name",'000000',"999999","ECE9F5", "D9D7EC", 1);
footer();
?>
