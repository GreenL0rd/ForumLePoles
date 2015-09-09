<?php
$dsn = 'mysql:host=localhost;dbname=ForumLePoles';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request = $pdo->query(
	'SELECT * FROM topics;');

$result = $request-> fetchAll();

for ( $i = 0; $i < count($result); $i++ ) {

?>

	<tr>
		<td><?=$result[$i]["title"]?></td>
		<td><?=$result[$i]["description"]?></td>
	</tr>

<?php

}

?>

</table>
</body>
</html>