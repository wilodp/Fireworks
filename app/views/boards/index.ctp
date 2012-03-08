<h1>送信フォーム・サンプル</h1>

<?php

echo $form->create(null,array('type'=>'post','action'=>'./addRecord'));
echo $form->text("Board.name");
echo $form->text("Board.title");
echo $form->textarea("Board.content");
echo $form->submit("送信");
echo $form->end();

?>
<br/><hr><br/>

<?php

echo $form->create(null,array('type'=>'post','action'=>'./index'));
echo $form->text("Board.id");
echo $form->submit("送信");
echo $form->end();

?>

<br/><hr><br/>

<table>
<?php

for($i = 0;$i <count($data); $i++){
	$arr = $data[$i]['Board'];
	echo "<tr><td>{$arr['id']}</td>";
	echo "<td>{$arr['name']}</td>";
	echo "<td>{$arr['title']}</td>";
	echo "<td>{$arr['content']}</td></tr>";
}

?>

</table>