<?php
if(!defined('__KIMS__')) exit;

//리스트
$_tmp = db_query( "select count(*) from ".$table[$module.'list'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("

CREATE TABLE ".$table[$module.'list']." (
uid			INT				PRIMARY KEY		NOT NULL AUTO_INCREMENT,
gid			INT				DEFAULT '0'		NOT NULL,
id			VARCHAR(30)		DEFAULT ''		NOT NULL,
name		VARCHAR(200)	DEFAULT ''		NOT NULL,
KEY gid(gid),
KEY id(id)) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'list'],$DB_CONNECT); 
}

//데이터
$_tmp = db_query( "select count(*) from ".$table[$module.'data'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("

CREATE TABLE ".$table[$module.'data']." (
uid			INT				PRIMARY KEY		NOT NULL AUTO_INCREMENT,
name		VARCHAR(30)		DEFAULT ''		NOT NULL,
id			VARCHAR(16)		DEFAULT ''		NOT NULL,
pw			VARCHAR(50)		DEFAULT ''		NOT NULL,
KEY id(id)) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'data'],$DB_CONNECT); 
}
?>