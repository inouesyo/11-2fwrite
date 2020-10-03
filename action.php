<?php
// ファイルを書き込みモードで開く。
// $fp=ファイルシステムポインタソース
$fp = fopen('./work.txt', 'w');
// fopen(  ,'r') 先頭にファイルポインタ(カーソルのこと)がくる
// ストリームに結び付ける?????????? 
// ファイルがない場合は新規作成から。追記ではなく上書き。
// fwrite POSTされてきたデータをテキストファイルに書き込む
// fwrite() は、 書き込んだバイト数、またはエラー時に FALSE を返します。
// バイナリセーフなファイル書き込み処理?????
// nullバイト攻撃というのは、文字通りnullバイト（\x00や\0）
// を使ってプログラムを誤作動させてしまう攻撃のことです。
// バイナリセーフ バイナリセーフ（binary safe）とは、
// NULLバイトが文字列に入っていても、きちんと正しく取り扱うことのできる関数のこと。
// fwrite(ファイルシステムポインタソース , 書き込む文字列)
if (fwrite($fp, $_POST['text'])) {
    $msg = '書き込みが完了しました。';
    
} else {
    $msg = '書き込みに失敗しました。';
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題11-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $msg ?></p>
                        <a href="./">もどる</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>
</body>

</html>