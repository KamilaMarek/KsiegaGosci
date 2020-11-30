<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Księga Gości</title>
</head>
<body>
	<div id="container">
	<h1>Księga Gości</h1>
	<h6>Strona Główna</h6>
	<div id="menubar1">
	<a href="#">Strona główna</a><a href="info.php">Informacje</a><a href="contact.php">Kontakt</a>
	</div>
	<h3>Dodaj nowy wpis</h3>
	<form action="insert_row.php" method="post">
		<label for="text">Imię: </label>
		<input type="text" id="name" name="fname"></input>
		<label for="text">Nazwisko: </label>
		<input type="text" id="surname" name="lname"></input></br>
		<label for="text">E-mail: </label>
		<input type="text" id="email" name="mailaddr"></input></br>
		<label for="text">Treść: </label>
		<textarea name="text" id="per_content" name="content"></textarea></br>
		<label for="birthdate">Data urodzenia: </label>
		<input type="date" id="date_of_birth" name="date_of_birth" /></br>
		<button type="submit">Zatwierdź wpis</button>
	</form>
	<div id ="table_container">
	<table class="center">
	<tr>
		<th>Imię</th>
		<th>Nazwisko</th>
		<th>E-mail</th>
		<th>Treść</th>
		<th>Data</th>
	</tr>
	<?php
		require_once 'connect.php';
		$conn = new mysqli($host,$user,$password,$db);
		$sql = "SELECT * FROM guest_list";
		$result = $conn -> query($sql);
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['name']."</td><td>".$row['surname']."</td><td>".$row['email']."</td><td>".$row['per_content']."</td><td>".$row['date_of_birth']."</td></tr>";
		}
		
    	$conn->close();
	?>
</table>
</div>
</body>
</html>