<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<title>Document</title>
</head>
<style scoped>
body{
	font:16px 'Comfortaa', sans-serif;
	background: url(images/Light_Bird_Abstract_Design.jpg) no-repeat center center fixed;
				background-size: cover;
}
h1{
	text-align: center;
}
table{
	margin: 0 auto;
}
th{
	background: black;
	color:#fff;
}
th:first-child{
	width:20%;
}
td{
	background: rgba(0,0,0,0.5);
	color: #fff;
}
th,td{
	width: 200px;
	height: 40px; 	
	text-align: center;
}
</style>


<h1>Forum</h1>

<?php
include('connect.php');
?>
<table border="1">
	
	<tr>
		<th>id</th>
		<th>titre</th>
		<th>texte</th>
	</tr>

<?php
for ( $i = 0; $i < count($result); $i++ ) {
?>
	<tr>
		<td><?=$result[$i]["id"]?></td>
		<td><?=$result[$i]["titre"]?></td>
		<td><?=$result[$i]["text"]?></td>
	</tr>
<?php
}
?>
</table>

</body>
</html>