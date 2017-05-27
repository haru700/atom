$(function (){  
  // Pluploadプラグインを実装
  $('#uploader').plupload({ 
    // ランタイムの優先順位
    runtimes: 'html5,flash,silverlight,gears,browserplus,html4', 
    // ファイルの送信先
    url: 'upload.php',
    // 最大ファイルサイズ
    max_file_size: '10mb',
    // 最大ファイル個数
    max_file_count: 10,
    // ユニーク名を採番するか
    unique_names: true,
    // リサイズするか
    resize: {
      width: 320, 
      height: 240,
      quality: 90
    }
  }, 
);
});