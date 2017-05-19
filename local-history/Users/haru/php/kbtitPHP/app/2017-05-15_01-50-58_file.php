<?php
// ファイルをDLして取得
// ファイル情報の取得
$file_id = $_GET['file_id'];
$file = $drive->files->get($file_id);

$url = $file->getDownloadUrl();
if($url){
  // DLできるファイルの場合にはデータを取得
  $request = new Google_Http_Request($url, 'GET', null, null);
  $auth = $client->getAuth()
}
