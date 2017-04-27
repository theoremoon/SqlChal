<?php

return [
'story' => 'あなたと kyumina くんは、ユーザの相互フォローを推進していくための仕組みについて検討していました。そして、とにかくデータをとってから考えようという事になったので、相互フォローであるようなユーザの組を取得するクエリを書くことになりました。適当にデータをとってくると、AさんからBさんへの関係と、BさんからAさんへの関係が重複して表示されますが、気にしないことにしました。
ユーザのフォロー関係は <code>followings</code> テーブルに格納されており、 <code>from_id</code>のidを持つユーザが <code>to_id</code>のユーザidを持つユーザをフォローしています',
'text' => '相互フォローの関係にあるユーザの組み合わせをすべて表示してください。ただし、<code>from_id</code>と<code>to_id</code>に昇順になるようにソートしてください。<code>from_id</code>のほうがソートの優先順位は上です',
'name' => 'おともだち',
'point' => 100,
'answer_query' => 'from_id, to_id from followings as a inner join followings as b on a.from_id=b.to_id and a.to_id=b.from_id order by from_id, to_id',
'sample' => 'from_id from followings where to_id=1024 and from_id in (select to_id from followings where from_id=1024) order by from_id;',
];