<?php
if(!defined('__KIMS__')) exit;

$d['layout']['show'] = true;   /** 관리패널에 레이아웃 관리탭을 보여주기 **/
$d['layout']['date'] = true;  /** 데이트픽커(날짜선택기) 사용 **/

/***********************************************************************************
부트스트랩 테마사용시 
***********************************************************************************/

$_tmp['themestr']  = '사용안함=disabled';
$_tmp['themepath'] = $g['path_plugin'].'bootstrap/'.$d['ov']['bootstrap'].'/css/themes';
$_tmp['themehnd']  = opendir($_tmp['themepath']); 
while(false !== ($_tmp['themedir'] = readdir($_tmp['themehnd']))) 
{ 
	if(strstr($_tmp['themedir'],'.')) continue;
	$_tmp['themestr'] .= ','.$_tmp['themedir'].'='.$_tmp['themedir'];
} 
closedir($_tmp['themehnd']);

/***********************************************************************************
설정배열
***********************************************************************************/

$d['layout']['dom'] = array(

	/** 설정 종류(영문소문자) **/
	'theme' => array(
		'테마', /** 탭 명칭(한글/영문) **/
		'테마를 선택해 주세요.', /** 탭 메세지(생략시 공백) **/
		array(
			array('kind','select','테마 지정하기',$_tmp['themestr']), /** 변수명 , 형식 , 라벨명칭 , 설정값 **/
		),
	),

	/** 예제 **/
	'header' => array(
		'예제',
		'이 것은 예제 탭입니다.',
		array(
			array('input','input','텍스트 입력상자',''), /** input="text" 입력상자 **/ 
			array('hidden','hidden','히든 입력상자','설정값'), /** input="hidden" 입력상자 **/ 
			array('file','file','파일첨부 입력상자',''), /** input="file" 입력상자 **/ 
			array('select','select','콤보박스','항목1=value1,항목2=value2,항목3=value3'), /** 콤보박스 **/
			array('radio','radio','라디오박스','항목1=value1,항목2=value2,항목3=value3'), /** 라디오박스 **/
			array('checkbox','checkbox','체크박스','항목1=value1,항목2=value2,항목3=value3'), /** 체크박스 **/
			array('textarea','textarea','텍스트에어리어','3'), /** 텍스트에어리어 , 3 은 rows 값 **/
			array('color','color','색상선택',''), /** 색상선택 입력상자 **/ 
			array('date','date','날짜선택',''), /** 날짜선택 입력상자 / 상단에서 $d['layout']['date'] = true 로 설정해야 함 **/ 
			array('mediaset','mediaset','포토셋 선택기',''), /** 포토셋 선택기 **/ 
			array('videoset','videoset','비디오셋 선택기',''), /** 비디오셋 선택기 **/ 
		),
	),

	/** 도움말 **/
	'help' => array(
		'도움말',
		'여기에 도움말을 입력합니다. <code>태그</code> 사용도 가능합니다.',
		array(),
	),
);

//***********************************************************************************
?>