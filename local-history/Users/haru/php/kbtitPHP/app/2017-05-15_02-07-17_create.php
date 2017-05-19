<?php
// ファイル作成
// 新規に Google_DriveFileオブジェクトを作成費、必要な情報を設定
$file = new Google_Service_Drive_DriveFile();
$file->setTitle("初めてのファイル.txt");
$file->setDescription("このファイルはPHPから作成されました");