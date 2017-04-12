<?php

return [
    'text' => '
KosenProkonTwitter には十分にひとが集まりそうな気配がしてきました。そこで、 kyumina くんはツイートのテストをやることにしました。
なんと、一発でうまくいきました！　すばらしい。ということは、次は、ツイートを取得する仕事が降り掛かってくるに違いありません。
あなたの予想通り、 kyumina くんはあなたに「すべてのツイートを時系列に沿って取得してほしい」と頼んできました。
さあ、もうできあがっているそのクエリを kyumina くんに見せてやってください。
ツイートのデータは tweets テーブルにあり、その内容は text というカラムで保存されています。ツイートした時刻は created_at カラムから取得することができます。
サンプルでは、最初の10ツイートを省いて表示しています。

あなた「自明」',
    'name' => 'Kyumina くんとツイート',
    'point' => 100,
    'answer_query' => 'text from tweets order by created_at;',
    'sample' => 'text from tweets order by created_at limit 10 offset 10;',
];