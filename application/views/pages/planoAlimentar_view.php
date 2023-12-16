<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>

	<!-- Bootstrap 5.0.2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- FontAwesome 6 -->
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/all.min.css">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/brands.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/regular.css"> -->

	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/styles.css">

</head>

<body class="body-dark-gray-1">
	<header class="d-flex flex-column position-absolute h-100 flex-shrink-0 navbar-dark-gray" style="width: 4.5rem;" id="idheader">
		<nav class="d-flex flex-column text-center h-100 my-4 justify-content-between">
			<div class="d-flex flex-column ">
				<div class="mb-5 mt-3">
					<a href="#">
						<img id="img-brand" src="<?= base_url() ?>img/brand11.jpeg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column mt-5 gap-4">
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-on-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
				</div>
			</div>

			<div class=" d-flex justify-content-center align-items-end">
				<i class="fa-solid fa-right-to-bracket navbar-icon-off-focus"></i>
			</div>
		</nav>
	</header>

	<main class="container ">
		<h2>Refeições</h2>
		<div class="d-flex">

			<div class="col-lg-5">
				<div class="d-flex flex-wrap gap-3">
					<div class="d-flex flex-column">
						<label for="food1">Nome:</label>
						<input class="" type="search" id="food1">
					</div>
					<div class="d-flex flex-column col-1">
						<label>Carb:</label>
						<input class="" type="text" id="carbResult1" readonly>
					</div>
					<div class="d-flex flex-column col-1">
						<label>Prot:</label>
						<input class="col-12" type="text" id="protResult1" readonly>
					</div>
					<div class="d-flex flex-column col-1">
						<label>Gord:</label>
						<input class="col-12" type="text" id="gordResult1" readonly>
					</div>
					<div class="d-flex flex-column col-2">
						<label>Kcal:</label>
						<input class="col-12" type="text" id="kcalResult1" readonly>
					</div>
				</div>
				<div class="d-flex flex-wrap gap-3">
					<div class="d-flex flex-column">
						<label for="food2">Nome:</label>
						<input class="col-12" type="text" id="food2">
					</div>
					<div class="d-flex flex-column col-1">
						<label>Carb:</label>
						<input class="" type="text" id="carbResult2" readonly>
					</div>
					<div class="d-flex flex-column col-1">
						<label>Prot:</label>
						<input class="col-12" type="text" id="protResult2" readonly>
					</div>
					<div class="d-flex flex-column col-1">
						<label>Gord:</label>
						<input class="col-12" type="text" id="gordResult2" readonly>
					</div>
					<div class="d-flex flex-column col-2">
						<label>Kcal:</label>
						<input class="col-12" type="text" id="carbResult2" readonly>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-around col-sm-4 col-lg-6">
				<div class="">
					<div class="d-flex flex-column">
						<label for="">Meta Carb:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Meta Prot:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Meta Gord:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Meta Kcal:</label>
						<input type="text" class="col-sm-5">
					</div>
				</div>
				<div>
					<div class="d-flex flex-column">
						<label for="">Carb Alcançado:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Prot Alcançado:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Gord Alcançado:</label>
						<input type="text" class="col-sm-5">
					</div>
					<div class="d-flex flex-column">
						<label for="">Kcal Alcançado:</label>
						<input type="text" class="col-sm-5">
					</div>
				</div>
			</div>


		</div>
	</main>











	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<!-- <script src="https://kit.fontawesome.com/d412feebf6.js" crossorigin="anonymous"></script> -->

	<script>
		// const teste = document.querySelector('#testelink')
		// if (teste.attributes['navbar-icon-off-focus']) {
		// 	console.log('existe');
		// } else {console.log('n existe')}

		// teste.attributes.removeNamedItem('navbar-icon-off-focus')

		// if (teste.attributes['navbar-icon-off-focus']) {
		// 	console.log('existe');
		// } else {console.log('n existe')}


		// const inputs = document.querySelectorAll('input');

		// inputs.forEach(input => {
		// 	input.addEventListener('keyup', (ev) => {
		// 		if (input.value.length > 2) {

		// 		}
		// 	})
		// });
	</script>
</body>

</html>