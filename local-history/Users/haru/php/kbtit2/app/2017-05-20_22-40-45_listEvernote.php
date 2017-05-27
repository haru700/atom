<?php
require_once ('vendor/autoload.php');

// 利用するクラスをNamespaceなしでアクセスできるように設定
use Evernote¥Client;
use EDAM¥NoteStore¥NoteFilter;
use EDAM¥Types¥Note;
use EDAM¥NoteStore¥NoteStoreIf;
use EDAM¥Types¥Notebook;
use EDAM¥Types¥Resource;
use EDAM¥Types¥Data;
use EDAM¥NoteStore¥NotesMetadataResultSpec;

session_start();

if($_SESSION['ACCESS_TOKEN']){
  $accessToken = $_SESSION['ACCESS_TOKEN'];

  // アクセストークンの設定
  $token = $accessToken['oauth_token'];
}
