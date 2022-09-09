<!DOCTYPE html>
<html>
	<head>
		<title>Веб | Лабораторна 1</title>
		<meta charset="utf-8" />
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		<h2>Визначення кольору року</h2>
		<form action="colorofyear.php" method="POST">
		  <div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Введіть рік</label>
			<input type="text" name="year" class="form-control">
		  </div>
		  <button type="submit" class="btn btn-primary">Визначити</button>
		</form>
		</div>
	</body>
</html>