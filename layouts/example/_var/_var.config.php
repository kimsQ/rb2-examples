<?php
if(!defined('__KIMS__')) exit;

//***********************************************************************************
// 여기에 이 레이아웃에서 사용할 변수들을 정의합니다. 
// 변수 작성법은 매뉴얼을 참고하세요.
//***********************************************************************************

$d['layout']['show'] = true; // 관리패널에 레이아웃 관리탭을 보여주기
$d['layout']['date'] = false;  // 데이트픽커 사용

//***********************************************************************************
// 테마검색
//***********************************************************************************

$_tmp['themestr']  = '사용안함=disabled';
$_tmp['themepath'] = $g['path_plugin'].'bootstrap/'.$d['ov']['bootstrap'].'/css/themes';
$_tmp['themehnd']  = opendir($_tmp['themepath']); 
while(false !== ($_tmp['themedir'] = readdir($_tmp['themehnd']))) 
{ 
	if(strstr($_tmp['themedir'],'.')) continue;
	$_tmp['themestr'] .= ','.$_tmp['themedir'].'='.$_tmp['themedir'];
} 
closedir($_tmp['themehnd']);

//***********************************************************************************
// 설정배열
//***********************************************************************************

$d['layout']['dom'] = array(

	/* 테마 */
	'theme' => array(
		'테마',
		'현재 사이트에 적용중인 레이아웃의 테마를 설정합니다. 테마를 변경하면 전체적인 분위기를 한번에 바꿀 수 있습니다.',
		array(
			array('kind','select','테마 지정하기',$_tmp['themestr']),
		),
	),

	/* 헤더 */
	'header' => array(
		'헤더',
		'',
		array(
			array('title','input','사이트 제목',''),
			array('fixed','select','헤더 고정하기','예=true,아니오=false'),
			array('trans','select','헤더 Navbar-Inverse','예=true,아니오=false'),
			array('search','select','검색폼 출력','예=true,아니오=false'),
			array('login','select','로그인폼 출력','토글 로그인=toggle,모달 로그인=modal,사용안함=hidden'),
			array('notify','select','알림 출력','예=true,아니오=false'),
		),
	),

	/* 프론트 */
	'front' => array(
		'메인 페이지',
		'프론트(메인화면)에 출력할 콘텐츠를 설정합니다. 미디어셋을 이용해서 프론트를 꾸며주세요.',
		array(
			array('slide','mediaset','슬라이드 포토',''),
			array('people','mediaset','메인전시 인물',''),
		),
	),

	/* 서브페이지 */
	'sub' => array(
		'서브 메뉴',
		'3단계 이상의 메뉴구조를 사용할 경우에 메뉴의 방식을 지정할 수 있습니다. 비활성화시 기본방식으로 동작합니다.',
		array(
			array('colla','checkbox','서브메뉴 방식','Collapse 형식으로 접고 펼치기=colla'),
			array('tree','checkbox','트리메뉴 펼침','트리메뉴를 항상 펼친상태로 유지=tree'),
		),
	),

	/* 도움말 */
	'help' => array(
		'도움말',
		'이 레이아웃은 킴스큐 2.0 에서 제공하는 기본 레이아웃입니다.',
		array(

		),
	),
);

//***********************************************************************************
?>