<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// 「ファイル」にロギングする「Logオブジェクト」を生成
$l = Log::factory('file', './out/app.log', 'phpmook');

var_dump('==================');
var_dump('');
var_dump($l);
var_dump('==================');

// レベルの異なるログを順に出力
$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);

// 「ログレベル」に対し、「マスク地」による「フィルタリング」を書ける
// INFOレベルのログのみを出力
$l->setMask(Log::MASK(PEAR_LOG_INFO) );

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);

// 「INFOレベル以下」のログを出力
$l->setMask(Log::MIN(PEAR_LOG_INFO) );

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);

$l->setMask(Log::MAX(PEAR_LOG_INFO) );

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);

$l->setMask(Log::MASK(PEAR_LOG_ALL ^ LOG::MASK(PEAR_LOG_INFO) )  );

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);
$l->log('///////////////////////////////', PEAR_LOG_INFO);

// 「現在のログレベル」にDEBUGを加えてものｗお出力
$l->setMask($l->getMask() | Log::MASK(PEAR_LOG_DEBUG) );

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);

$disp = Log::factory('display', '', 'phpmook');
$file = Log::factory('file', './out/bar.log', 'phpmook');

$l = Log::singleton('composite');

$l->addChild($disp);
$l->addChild($file);

$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応要', PEAR_LOG_ALERT);
$l->log('致命的な問題', PEAR_LOG_CRIT);
$l->log('エラー発生', PEAR_LOG_ERR);
$l->log('警告', PEAR_LOG_WARNING);
$l->log('要注意', PEAR_LOG_NOTICE);
$l->log('情報', PEAR_LOG_INFO);
$l->log('デバッグメッセージ', PEAR_LOG_DEBUG);
