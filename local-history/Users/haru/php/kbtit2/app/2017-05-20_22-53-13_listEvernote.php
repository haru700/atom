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

  $filter = new NoteFilter([
    'token' => $token,
  ]);

  // 「ノートにアクセスするためのオブジェクト」を取得
  $noteStore = $evernote->getNoteStore();
  $noteStore instanceof NoteStoreIf;

  // 「ノートブック一覧」を取得する
  $notebooks = $boteStore->listNotebooks();

  foreach($notebooks as $notebook){
    $notebook instanceof Notebook;
    $grid = $notebook->grid;

    // 「最大10件」でノートを「条件なし」で取得する
    $resultSpec = new NotesMetadataResultSpec();
    $resultSpec->includeTitle = true;
    $filter = new NoteFilter();
    $filter->notebookGrid = $grid;
    $list = $noteStore->findNotesMetadat($token, $filter, 0, 10, $resultSpec);

    $start  = $list->startIndex;

  }

}
