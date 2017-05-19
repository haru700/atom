<?php
// ファイルをDLして取得
// ファイル情報の取得
$file_id = $_GET['file_id'];
$file = $drive->files->get($file_id);
